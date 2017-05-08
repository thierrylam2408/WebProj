<?php

namespace PW\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use PW\MyBundle\Entity\Joueur;
use PW\MyBundle\Entity\Groupe;
use PW\MyBundle\Entity\Homme;
use PW\MyBundle\Entity\Mission;
use PW\MyBundle\Entity\Notif;
use Symfony\Component\Process\Process;

class HommeController extends Controller{

    private $session;
    private $repJoueur;
    private $em;
    private $coutRecolter = 0;
    private $tempsRecolter = 5;
    private $coutEntrainer = 500;
    private $tempsEntrainer = 7;
    private $coutRecruter = 1000;
    private $tempsRecruter = 10;
    
    /**
     * @Route("/homme/{idGroupe}/{ordre}/{sens}",
     * defaults={"ordre"="niveau", "sens"="asc"},
     * requirements={"idGroupe"="\d+", "sens"="asc|desc", 
     * "ordre"="nom|niveau|sexe|etat"},
     * name="/homme")
     */
    public function groupAction(Request $request, $idGroupe, $ordre, $sens){
        $this->init($request);
        $this->update($idGroupe);
        if( isset($request->request->all()['form'])){
                $filtre = $request->request->all()['form'];
                $this->session->set('filtre2', $filtre);
        }else{
            $filtre = array();
        }
        if($this->session->has("filtre2"))
            $filtre = $this->session->get("filtre2");
        $hommesEtTemps = $this->ranger(
            $this->getHomTemps($idGroupe, $filtre),
            array($ordre, $sens));
        $rechercheForm = $this->createFormRecherche($filtre);
        $nomGroupe = $this->getNomGroupe($idGroupe);
        $argent = $this->getArgent($idGroupe);
        $args = array('pseudo'=>$this->getPseudo(),'argent'=>$argent,
              'nomGroupe'=>$nomGroupe,
              'hommesEtTemps'=>$hommesEtTemps,
              'rechercheForm'=>$rechercheForm->createView(),
            );
        if($this->peutFaireMission($idGroupe))
            $args['formMission'] = $this->createFormMission($idGroupe)->createView();
        if($this->session->get('id') == 
            $this->repoGroup->findOneById($idGroupe)->getIdJoueur()){
            $args['notifVu'] = $this->getNotifVu($idGroupe);
            $args['notifNonVu'] = $this->getNotifNonVu($idGroupe);
        }else{
            $args['notif'] = array_merge($this->getNotifNonVu($idGroupe),
                $this->getNotifVu($idGroupe));
        }
        return $this->render('PWMyBundle:Default:play.html.twig', $args);
    }

    public function init(Request $request){
        $this->session = $request->getSession();
        $this->repJoueur = $this->getDoctrine()->getRepository('PWMyBundle:Joueur');
        $this->repoGroup = $this->getDoctrine()->getRepository('PWMyBundle:Groupe');
        $this->repoHomme = $this->getDoctrine()->getRepository('PWMyBundle:Homme'); 
        $this->repoMission = $this->getDoctrine()->getRepository('PWMyBundle:Mission');
        $this->repoNotif = $this->getDoctrine()->getRepository('PWMyBundle:Notif'); 
        $this->em = $this->getDoctrine()->getManager();
    }

    public function peutFaireMission($idGroupe){
        return count($this->getHommesDispo($idGroupe))!=0 && 
        $this->session->get('id') == $this->repoGroup->findOneById($idGroupe)->getIdJoueur();
    }

    public function getArgent($idGroupe){
        return $this->repoGroup->findOneById($idGroupe)->getArgent();
    }

    public function envoyerMission(Array $mission, $idGroupe){
        if(strcmp($mission['Mission'], 'arg')==0){
            $cout = $this->coutRecolter;
            $duree = $this->tempsRecolter;
        }
        else if(strcmp($mission['Mission'], 'exp')==0){
            $cout = $this->coutEntrainer;
            $duree = $this->tempsEntrainer;
        }
        else{
            $cout = $this->coutRecruter;
            $duree = $this->tempsRecruter;            
        }
        $groupe = $this->repoGroup->findOneById($idGroupe);
        if(!$this->estOccuper($mission['Homme']) && $groupe->getArgent() >= $cout){
            $m = new Mission();
            $m->setType($mission['Mission']);
            $m->setIdHomme($mission['Homme']);
            $m->setExec(false);
            $m->setDate(new \DateTime('+'.$duree.' min'));
            $this->em->persist($m);
            $groupe->setArgent($groupe->getArgent() - $cout);
            $this->em->persist($groupe);
            $this->em->flush();
        }
    }


    public function update($idGroupe){
        $hommes = $this->repoHomme->findByIdGroupe($idGroupe);
        for ($i=0; $i <count($hommes) ; $i++) { 
            $idhomme = $hommes[$i]->getId();
            if($this->estOccuper($idhomme) && $this->tempsMission($idhomme)<=0)
                $this->executeMission($idhomme);
        }        

    }

    public function executeMission($idHomme){
        $mission = $this->repoMission->findOneBy(array("idHomme"=>$idHomme, "exec"=>false));
        $typeMission = $mission->getType();
        $homme = $this->repoHomme->findOneById($mission->getIdHomme());
        if(strcmp($typeMission, 'exp') == 0){
            $homme->setNiveau($homme->getNiveau()+1);
            $this->em->persist($homme);
            $this->addNotif($homme->getNom()." est passé niveau ".$homme->getNiveau(),
                            $homme->getIdGroupe());
        }
        else if(strcmp($typeMission, 'arg') == 0){
            $groupe = $this->repoGroup->findOneById($homme->getIdGroupe());
            $montant = 50 + round(rand($homme->getNiveau()-10, $homme->getNiveau()+10));
            $groupe->setArgent($groupe->getArgent() + $montant);
            $this->em->persist($groupe);
            $this->addNotif($homme->getNom()." a récolté ".$montant."$",
                            $homme->getIdGroupe());
        }
        else if(strcmp($typeMission, 'add') == 0){
            $query = $this->repoHomme->createQueryBuilder('p')
                    ->where('p.idGroupe != '.$homme->getIdGroupe())
                    ->andWhere('p.niveau <= '.$homme->getNiveau())
                    ->getQuery();
            $cibles = $query->getResult();
            if(count($cibles)>0){
                $cible = $cibles[round(rand(0, count($cibles)-1))];
                $idGroupeVictime = $cible->getIdGroupe();
                $groupe = $this->repoGroup->findOneById($homme->getIdGroupe())->getNomGroupe();
                $cible->setIdGroupe($homme->getIdGroupe());
                $this->addNotif($homme->getNom()." a recruté ".$cible->getNom(),
                                $homme->getIdGroupe());  
                $this->addNotif($groupe." a volé ".$cible->getNom(),
                                $idGroupeVictime);  
            }
        }
        $mission->setExec(true);
        $this->em->flush();
    }

    public function addNotif($texte, $idGroupe){
        $notif = new Notif();
        $notif->setTexte($texte);
        $notif->setVu(false);
        $notif->setDate(new \DateTime());
        $notif->setIdGroupe($idGroupe);
        $this->em->persist($notif);
        $this->em->flush();
    }

    public function getNotifNonVu($idGroupe){
        $notif = $this->repoNotif->findBy(
            array("idGroupe"=>$idGroupe, "vu"=>false));
        if($this->repoGroup->findOneById($idGroupe)
            ->getIdJoueur() == $this->session->get('id'))
        for ($i=0; $i < count($notif); $i++) { 
            $notif[$i]->setVu(true);
            $this->em->persist($notif[$i]);
        }
        $this->em->flush();
        uasort($notif, function($a, $b){
            return -1*($a->getDate()->getTimestamp() - $b->getDate()->getTimestamp());
        });
        return $notif;
    }

    public function getNotifVu($idGroupe){
        $notif = $this->repoNotif->findBy(
            array("idGroupe"=>$idGroupe, "vu"=>true)); 
        uasort($notif, function($a, $b){
            return -1*($a->getDate()->getTimestamp() - $b->getDate()->getTimestamp());
        });
        return $notif;
    }

    public function getPseudo(){
        return $this->repJoueur->findOneById($this->session->get('id'))->getPseudo();
    }

    public function getHommesGroupe($idGroupe, Array $filtre){
        $hommes = $this->repoHomme->findByIdGroupe($idGroupe);
        if(count($filtre) != 0){
            $nivMin = trim($filtre['nivMin']);
            $nivMax = trim($filtre['nivMax']);
            $nom = strtolower(trim($filtre['nom']));
            $sexe = trim($filtre['sexe']);
            $etat = trim($filtre['etat']);
            $liste_filtrer = array();
            $indice = 0;
            for ($i=0; $i<count($hommes); $i++) {
                $ajout=true;
                if($nom!='' && !preg_match("#".$nom."#", 
                        strtolower($hommes[$i]->getNom())))
                    $ajout = false;
                if($sexe == 1 && $hommes[$i]->getSexe() == "F")
                    $ajout = false;
                if($sexe == 2 && $hommes[$i]->getSexe() == "M")
                    $ajout = false;
                if($etat == 1 && $this->estOccuper($hommes[$i]->getId()))
                    $ajout = false;
                if($etat == 2 && !$this->estOccuper($hommes[$i]->getId()))
                    $ajout = false;
                if($nivMin!='' && $hommes[$i]->getNiveau()<$nivMin)
                    $ajout = false;
                if($nivMax!='' && $hommes[$i]->getNiveau()>$nivMax)
                    $ajout = false;
                if($ajout){
                    $liste_filtrer[$indice] = $hommes[$i];
                    $indice++;
                }
            }
            return $liste_filtrer;  
        }
        return $hommes;
    }

    public function estOccuper($idHomme){
        return $this->repoMission->findOneBy(array('idHomme'=>$idHomme, 'exec'=>false))!=NULL;
    }

    //temps restant en minutes
    public function tempsMission($idHomme){
        if(!$this->estOccuper($idHomme))
            return 0;
        $temps = $this->repoMission->findOneBy(
                array('idHomme'=>$idHomme, 'exec'=>false))->getDate();
        $now = new \DateTime();
        return round(($temps->getTimestamp() - $now->getTimestamp()) / 60);
    }

    //liste de couples homme, temps restant de sa mission (0 si libre)
    public function getHomTemps($idGroupe, Array $filtre){
        $hommes = $this->getHommesGroupe($idGroupe, $filtre);
        $result = array();
        if($hommes != null){
            for($i=0; $i<count($hommes); $i++)
                $result[$i] = array($hommes[$i],$this->tempsMission($hommes[$i]));
        }
        return $result;
    }

    public function getHommesDispo($idGroupe){
        $hommes = $this->repoHomme->findByIdGroupe($idGroupe);
        $liste_filtrer = array();
        for ($i=0; $i<count($hommes); $i++) { 
            if(!$this->estOccuper($hommes[$i]))
                $liste_filtrer[$hommes[$i]->getNom()] = $hommes[$i]->getId();
        }
        uksort($liste_filtrer, function($a, $b){
            return strnatcmp($a, $b);
        });
        return $liste_filtrer;
    }

    public function getNomGroupe($idGroupe){
        return $this->repoGroup->findOneById($idGroupe)->getNomGroupe();
    }

    private function ranger(Array $couples, Array $criteres){
        if($criteres[0] == 'nom')
            if($criteres[1] == 'desc')
                uasort($couples, function($a, $b){
                    return -1 * strnatcmp ($a[0]->getNom() , $b[0]->getNom());
                }); 
            else 
                uasort($couples, function($a, $b){
                    return 1 * strnatcmp ($a[0]->getNom() , $b[0]->getNom());
                }); 
        else if($criteres[0] == 'niveau')
            if($criteres[1] == 'desc')
                uasort($couples, function($a, $b){
                    return -1 * ($a[0]->getNiveau() - $b[0]->getNiveau());
                });
            else
                uasort($couples, function($a, $b){
                    return 1 * ($a[0]->getNiveau() - $b[0]->getNiveau());
                });  
        else if($criteres[0] == 'sexe')
            if($criteres[1] == 'desc')
                uasort($couples, function($a, $b){
                    return -1 * strnatcmp($a[0]->getSexe() , $b[0]->getSexe());
                });     
            else
                uasort($couples, function($a, $b){
                    return 1 * strnatcmp($a[0]->getSexe() , $b[0]->getSexe());
                });
        else if($criteres[0] == 'etat')
            if($criteres[1] == 'desc')
                uasort($couples, function($a, $b){
                    return -1 * ($a[1] - $b[1]);
                });
            else
                uasort($couples, function($a, $b){
                    return 1 * ($a[1] - $b[1]);
                });                          
        return $couples;
    }

    public function createFormRecherche(Array $filtre){
        $arrayNivMin = $this->argChampsInt($filtre, array("nivMin"), array("Niv Min"));
        $arrayNivMax = $this->argChampsInt($filtre, array("nivMax"), array("Niv Max"));
        $dataNom = $this->hydrateChamps($filtre, array("nom"));
        $form = $this->createFormBuilder()
            ->add('nivMin', IntegerType::class, $arrayNivMin)           
            ->add('nivMax', IntegerType::class, $arrayNivMax)
            ->add('nom', TextType::class, array('required' => false, 'data'=>$dataNom))
            ->add('sexe', ChoiceType::class, array(
                'choices' => array(' ' => null,'Male' => 'M','Female' => 'F')))
            ->add('etat', ChoiceType::class, array(
                'choices' => array(' ' => null,'Libre' => 'L','Occupé' => 'O')))
            ->add('save', SubmitType::class, array('label' => 'Recherche'))
            ->getForm();
        return $form;
    }

    public function argChampsInt(Array $champs, Array $value, Array $label){
        $array = array('label'=>$label[0],'required'=>false);
        if($this->hydrateChamps($champs, $value) != "")
            $array['data'] = (int)$this->hydrateChamps($champs, $value);
        return $array;
    }

    public function hydrateChamps(Array $champs, Array $value){
        if(count($champs)>1)
            return $champs[$value[0]];
        return "";
    }

    public function createFormMission($idGroupe){
        $form = $this->createFormBuilder()
            ->add('Homme', ChoiceType::class, array(
                'choices' => $this->getHommesDispo($idGroupe)))
            ->add('Mission', ChoiceType::class, array(
                'choices' => 
                    array('Recolter ('.$this->coutRecolter.'$)'=>'arg',
                    'S\'entrainer ('.$this->coutEntrainer.'$)'=>'exp',
                    'Recruter ('.$this->coutRecruter.'$)'=>'add')))
            ->setAction($this->generateUrl('/mission', array('idGroupe'=>$idGroupe)))
            ->add('save', SubmitType::class, array('label' => 'Envoyer'))
            ->getForm();
        return $form;

    }

    /**
     * @Route("/mission/{idGroupe}", name="/mission")
     */
    public function missionAction(Request $request, $idGroupe){
        $this->init($request);
        if(isset($request->request->all()['form'])){
            $mission = $request->request->all()['form'];
            $this->envoyerMission($mission, $idGroupe);
        }
        return $this->redirectToRoute("/homme", array('idGroupe'=>$idGroupe));
    }
}