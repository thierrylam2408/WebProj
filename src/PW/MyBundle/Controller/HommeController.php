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

class HommeController extends Controller{

	private $session;
    private $repJoueur;
    private $em;
    
    /**
     * @Route("/homme/{idGroupe}/{ordre}/{sens}",
     * defaults={"ordre"="niveau", "sens"="asc"},
     * requirements={"idGroupe"="\d+", "sens"="asc|desc", 
     * "ordre"="nom|niveau|sexe"},
     * name="/homme")
     */
    public function groupAction(Request $request, $idGroupe, $ordre, $sens){
    	$this->init($request);
        if(isset($request->request->all()['form'])){
            $filtre = $request->request->all()['form'];
            $this->session->set('filtre2', $filtre);
        }
        else{
            $filtre = array();
        }
        if($this->session->has("filtre2"))
            $filtre = $this->session->get("filtre2");
        
        $hommes = $this->ranger($this->getHommesGroupe($idGroupe, $filtre),
            array($ordre, $sens));
        $rechercheForm = $this->createFormRecherche($filtre);
        $nomGroupe = $this->getNomGroupe($idGroupe);
        return $this->render('PWMyBundle:Default:play.html.twig',
        array('nomGroupe'=>$nomGroupe,
              'hommes'=>$hommes,
              'rechercheForm'=>$rechercheForm->createView()
            ));
    }

    public function init(Request $request){
        $this->session = $request->getSession();
        $this->repJoueur = $this->getDoctrine()->getRepository('PWMyBundle:Joueur');
        $this->repoGroup = $this->getDoctrine()->getRepository('PWMyBundle:Groupe');
        $this->repoHomme = $this->getDoctrine()->getRepository('PWMyBundle:Homme'); 
        $this->em = $this->getDoctrine()->getManager();
    }

    public function getHommesGroupe($idGroupe, Array $filtre){
        $hommes = $this->repoHomme->findByIdGroupe($idGroupe);
        if(count($filtre) != 0){
            $nivMin = trim($filtre['nivMin']);
            $nivMax = trim($filtre['nivMax']);
            $nom = strtolower(trim($filtre['nom']));
            $sexe = trim($filtre['sexe']);
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

    public function getNomGroupe($idGroupe){
        return $this->repoGroup->findOneById($idGroupe)->getNomGroupe();
    }

    private function ranger(Array $hommes, Array $criteres){
        if($criteres[0] == 'nom')
            if($criteres[1] == 'desc')
                uasort($hommes, function($a, $b){
                    return -1 * strnatcmp ($a->getNom() , $b->getNom());
                }); 
            else 
                uasort($hommes, function($a, $b){
                    return 1 * strnatcmp ($a->getNom() , $b->getNom());
                }); 
        else if($criteres[0] == 'niveau')
            if($criteres[1] == 'desc')
                uasort($hommes, function($a, $b){
                    return -1 * ($a->getNiveau() - $b->getNiveau());
                });
            else
                uasort($hommes, function($a, $b){
                    return 1 * ($a->getNiveau() - $b->getNiveau());
                });  
        else if($criteres[0] == 'sexe')
            if($criteres[1] == 'desc')
                uasort($hommes, function($a, $b){
                    return -1 * strnatcmp($a->getSexe() , $b->getSexe());
                });     
            else
                uasort($hommes, function($a, $b){
                    return 1 * strnatcmp($a->getSexe() , $b->getSexe());
                });                        
        return $hommes;
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
}