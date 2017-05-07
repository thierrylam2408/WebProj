<?php

namespace PW\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use PW\MyBundle\Entity\Joueur;
use PW\MyBundle\Entity\Groupe;
use PW\MyBundle\Entity\Homme;
use PW\MyBundle\Entity\Mission;
use PW\MyBundle\Entity\Notif;


class DefaultController extends Controller{

    private $session;
    private $repository;
    private $em;

    /**
     * @Route("/", name="/")
     */
    public function indexAction(Request $request){
        $this->init($request);
        //Pas connecté 
        if(!$this->session->has('id')){
            $connexion = $this->createFormConnection(array(""));
            $inscription = $this->createFromInscription(array(""));
            $array = array();
            //Si le champs est envoyé
            if(isset($request->request->all()['form'])){
                $champs = $request->request->all()['form'];
                //var_dump($request->files); 
                //->getClientOriginalName() ->getClientOriginalExtension() ->move() uniqid()
                if(count($champs) == count($inscription)+1 ||
                    count($champs) == count($inscription)){
                    if($this->inscription($champs) == null){
                        $array['reussiIns'] = "Inscription Reussie";
                    }else{
                        $inscription = $this->createFromInscription($champs);
                        $array['erreurIns'] = $this->inscription($champs);
                    }
                }
                if(count($champs) == count($connexion)+1){
                    if($this->connexion($champs) == null)
                        return $this->redirectToRoute("/group");
                    $connexion = $this->createFormConnection($champs);
                    $array['erreurCo'] = $this->connexion($champs);
                }
            }
            $array['inscription'] = $inscription->createView();
            $array['connexion'] = $connexion->createView();
            //Page d'inscription/connexion
            return $this->render('PWMyBundle:Default:accueil.html.twig', $array);
        }
        //Connecté -> Page de navigation principale
        return $this->redirectToRoute("/group");
    }

    public function init(Request $request){
        $this->session = $request->getSession();
        $this->repository = $this->getDoctrine()->getRepository('PWMyBundle:Joueur');
        $this->repoGroup = $this->getDoctrine()->getRepository('PWMyBundle:Groupe');
        $this->repoHomme = $this->getDoctrine()->getRepository('PWMyBundle:Homme'); 
        $this->repoMission = $this->getDoctrine()->getRepository('PWMyBundle:Mission');
        $this->repoNotif = $this->getDoctrine()->getRepository('PWMyBundle:Notif'); 
        $this->em = $this->getDoctrine()->getManager();
    }

    public function inscription(Array $champs){
        if($this->repository->findOneByPseudo($champs['pseudo']))
            return "Le pseudo ".$champs['pseudo']." est deja pris";
        if($this->repository->findOneByLogin($champs['login']))
            return "Le login ".$champs['login']." est deja pris";
        else{
            $joueur = new Joueur();
            $joueur->setLogin($champs['login']);
            $joueur->setPseudo($champs['pseudo']);
            $joueur->setMdp(md5($champs['mdp']));
            $joueur->setAvatar("default");
            $this->em->persist($joueur);
            $this->em->flush();
            return null;
        }
    }

    public function connexion(Array $champs){
        $joueur=$this->repository->findOneBy(
        array('login'=>$champs['login'],'mdp'=>md5($champs['mdp'])));
        if($joueur!=null){
            $this->session->set('id', $joueur->getId());
            return null;
        }
        return "Erreur de connexion";
    }


    //CREATION DE FORMULAIRES
    public function createFromInscription(Array $champs){
        $dataPseudo = $this->hydrateChamps($champs, array("pseudo"));
        $dataLogin = $this->hydrateChamps($champs, array("login"));
        $dataMdp = $this->hydrateChamps($champs, array("mdp"));
        $form = $this->createFormBuilder()
            ->add('pseudo', TextType::class, array('data'=> $dataPseudo, 
                'attr'=>array('maxlength'=>10)))           
            ->add('login', TextType::class, array('data'=> $dataLogin,
                'attr'=>array('maxlength'=>10)))
            ->add('mdp', PasswordType::class, array('label' => 'Mot de passe',
                'attr'=>array('maxlength'=>10)))
            ->add('avatar', FileType::class, array('required'=>false))
            ->add('save', SubmitType::class, array('label' => 'Inscription'))
            ->getForm();
        return $form;

    }
 
    public function createFormConnection(Array $champs){
        $dataLogin = $this->hydrateChamps($champs, array("login"));
        $dataMdp = $this->hydrateChamps($champs, array("mdp"));
        $form = $this->createFormBuilder()
            ->add('login', TextType::class, array('data'=>$dataLogin))
            ->add('mdp', PasswordType::class, array('label' => 'Mot de passe', 'data'=>$dataMdp))
            ->add('save', SubmitType::class, array('label' => 'Connection'))
            ->getForm();
        return $form;
    }
    
    public function hydrateChamps(Array $champs, Array $value){
        if(count($champs)>1)
            return $champs[$value[0]];
        return "";
    }

    /**
     * @Route("/deconnexion", name="/deconnexion")
     */
    public function deconnexionAction(Request $request){
        $this->init($request);
        $this->session->clear();
        return $this->redirectToRoute("/");
    }

    /**
     * @Route("/about", name="/about")
     */
    public function aboutAction(Request $request){
        return $this->render('PWMyBundle:Default:about.html.twig');
    }

    /**
     * @Route("/statistique", name="/statistique")
     */
    public function statistiqueAction(Request $request){
    	$this->init($request);
    	$triplets = $this->getExpGroupNbh();
    	$array = array("pseudo"=>$this->getPseudo(), 
    		"nbJoueur"=>$this->getNombreJoueur(),
    		"nbGroupe"=>$this->getNombreGroupe(),
    		"expMax"=>$this->getExpOuHomMax($triplets, 0),
    		"hommeMax"=>$this->getExpOuHomMax($triplets, 2),
    		"argMax"=>$this->getArgentMax($triplets),
    		"expMoyen"=>$this->getExpMoyen($triplets),
    		"argMoyen"=>$this->getArgMoyen($triplets),
    		"nbHomme"=>$this->getNombreHomme(),
    		"niveauMax"=>$this->getNiveauMax(),
    		"niveauMoyen"=>$this->getNiveauMoyen(),
    		"pourcentageH"=>$this->pourcentageHF("H"),
    		"pourcentageF"=>$this->pourcentageHF("F")
    		);
    	var_dump($array);
        return $this->render('PWMyBundle:Default:statistique.html.twig', $array);
    }

    public function getPseudo(){
        return $this->repository->findOneById($this->session->get('id'))->getPseudo();
    }

    public function getNombreJoueur(){
    	return count($this->repository->findAll());
    }

    public function getNombreGroupe(){
    	return count($this->repoGroup->findAll());
    }

    //couple(nomGroupe, nb)
    //$value=0 pour exp, $value=2 pour nb Homme
    public function getExpOuHomMax(Array $groupes, $value){
    	$nb = 0;
    	$indice = 0;
    	for ($i=0; $i < count($groupes); $i++) { 
    		if($groupes[$i][$value] > $nb){
    			$nb = $groupes[$i][$value];
    			$indice = $i;
    		}
    	}
    	return array($groupes[$indice][1]->getNomGroupe(), $nb);
    }

    //couple(nomGroupe, nb)
    public function getArgentMax(Array $groupes){
    	$nb = 0;
    	$indice = 0;
    	for ($i=0; $i < count($groupes); $i++) { 
    		if($groupes[$i][1]->getArgent() > $nb){
    			$nb = $groupes[$i][1]->getArgent();
    			$indice = $i;
    		}
    	}
    	return array($groupes[$indice][1]->getNomGroupe(), $nb);
    }

    public function getExpMoyen(Array $groupes){
     	$nb = 0;
    	for ($i=0; $i < count($groupes); $i++) { 
    		$nb += $groupes[$i][0];
    	}
    	return $nb / count($groupes);   	
    }

    public function getArgMoyen(Array $groupes){
    	$nb = 0;
    	for ($i=0; $i < count($groupes); $i++) { 
    		$nb += $groupes[$i][1]->getArgent();
    	}
    	return $nb / count($groupes);
    }

    public function getNombreHomme(){
    	return count($this->repoHomme->findAll());
    }

    //(nom, lvl)
    public function getNiveauMax(){
    	$hommes = $this->repoHomme->findAll();
    	$nb = 0;
    	$indice = 0;
    	for ($i=0; $i < count($hommes); $i++) { 
    		if($hommes[$i]->getNiveau() > $nb){
    			$nb = $hommes[$i]->getNiveau();
    			$indice = $i;
    		}
    	}
    	return array($hommes[$indice]->getNom(), $nb);
    }

    public function getNiveauMoyen(){
      	$hommes = $this->repoHomme->findAll();
    	$nb = 0;
    	for ($i=0; $i < count($hommes); $i++) { 
    		$nb += $hommes[$i]->getNiveau();
    	}
    	return $nb / count($hommes);
    }


    //M ou F
    public function pourcentageHF($c){
      	$hommes = $this->repoHomme->findAll();
    	$nb = 0;
    	for ($i=0; $i < count($hommes); $i++) { 
    		if(strcmp($hommes[$i]->getSexe(),$c)==0){
    			$nb++;
    		}
    	}
    	return round(($nb / count($hommes)*100));
    }


    public function getExpGroupNbh(){
    	$groupe = $this->repoGroup->findAll();
    	$result = array();
    	if($groupe != null){
    		for($i=0; $i<count($groupe); $i++)
    			$result[$i] = array($this->getExpGroup($groupe[$i]),
    				$groupe[$i],$this->nbHommeGroup($groupe[$i]));
    	}
    	return $result;
    }

    public function getExpGroup(Groupe $groupe){
    	$hommes = $this->getHommesGroupe($groupe);
    	$exp = 0;
    	for($i=0; $i<count($hommes); $i++){
    		$exp += $hommes[$i]->getNiveau();
    	}  	
    	return $exp;
    }
    public function getHommesGroupe(Groupe $groupe){
    	$hommes = $this->repoHomme->findByIdGroupe($groupe->getId());
    	return $hommes;
    }

    public function nbHommeGroup(Groupe $groupe){
    	return count($this->repoHomme->findByIdGroupe($groupe->getId()));
    }
}
