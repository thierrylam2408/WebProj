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
                if(count($champs) == count($inscription)+1){
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
            //$this->em->persist($joueur);
            //$this->em->flush();
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

}
