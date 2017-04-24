<?php

namespace PW\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DefaultController extends Controller{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request){
    	$session = $request->getSession();
    	//Pas connecté 
    	if(!$session->has('id')){
            $connexion = $this->createFormConnection();
            if(isset($request->request->all()['form'])){
                //Si le champs est envoyé
                $champs = $request->request->all()['form'];
                var_dump($champs['login']);
                return $this->redirectToRoute('task_success');
            }
            //Page d'inscription/connexion
    		return $this->render('PWMyBundle:Default:accueil.html.twig',
    			array('form' => $connexion->createView()));
    		
    	}
    	//Connecté -> Page de navigation principale
    	else{
    		//$session->clear();
    		//$session->set('id', '123');
    		return $this->render('PWMyBundle:Default:home.html.twig',
    		array('id'=>$session->get('id')));
    	}
    }

    public function createFormConnection(){
		$form = $this->createFormBuilder()
            ->add('login', TextType::class)
            ->add('mdp', PasswordType::class, array('label' => 'Mot de passe'))
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();
 		return $form;
    }
}
