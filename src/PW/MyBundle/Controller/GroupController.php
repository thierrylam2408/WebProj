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
use PW\MyBundle\Entity\Joueur;
use PW\MyBundle\Entity\Groupe;
use PW\MyBundle\Entity\Homme;

class GroupController extends Controller{

	private $session;
    private $repJoueur;
    private $em;
    
    /**
     * @Route("/group/{ordre}/{sens}",
     *			defaults={"ordre"="id", "sens"="asc"},
     *			requirements={"ordre"="exp|id|argent|nom|nbh", "sens"="asc|desc"}, 
     *  		name="/group")
     */
    public function groupAction(Request $request, $ordre, $sens){
    	$this->init($request);
    	if(isset($request->request->all()['form']) ){
    		$filtre = $request->request->all()['form'];
    		$this->session->set('filtre', $filtre);
    	}
    	else{
    		$filtre = array();
    	}
    	if($this->session->has("filtre"))
    		$filtre = $this->session->get("filtre");
    	$mesGroupes = $this->ranger(
    		$this->getExpGroupNbh(array($this->session->get("id")), $filtre), 
    		array($ordre, $sens));
    	$rechercheForm = $this->createFormRecherche($filtre);
    	return $this->render('PWMyBundle:Default:home.html.twig',
        array('pseudo'=>$this->getPseudo(),
        	'mesGroupes' => $mesGroupes,
        	'rechercheForm' => $rechercheForm->createView(),
        	'form'=>$this->createFormGroup()->createView()));
    }

    public function init(Request $request){
        $this->session = $request->getSession();
        $this->repJoueur = $this->getDoctrine()->getRepository('PWMyBundle:Joueur');
        $this->repoGroup = $this->getDoctrine()->getRepository('PWMyBundle:Groupe');
        $this->repoHomme = $this->getDoctrine()->getRepository('PWMyBundle:Homme'); 
        $this->em = $this->getDoctrine()->getManager();
    }

    public function getPseudo(){
        return $this->repJoueur->findOneById($this->session->get('id'))->getPseudo();
    }

    //liste de triplets (exp, groupe, nombre d'homme)
    public function getExpGroupNbh(Array $id, Array $filtre){
    	$groupe = $this->getGroupes($id, $filtre);
    	$result = array();
    	if($groupe != null){
    		for($i=0; $i<count($groupe); $i++)
    			$result[$i] = array($this->getExpGroup($groupe[$i]),
    				$groupe[$i],$this->nbHommeGroup($groupe[$i]));
    	}
    	return $result;
    }


    public function getGroupes(Array $id, Array $filtre){
    	$groups = $this->repoGroup->findByIdJoueur($this->session->get("id"));
    	if(count($filtre) != 0){
    		$expMin = trim($filtre['expMin']);
    		$expMax = trim($filtre['expMax']);
    		$nom = strtolower(trim($filtre['nom']));
    		$argMin = trim($filtre['argMin']);
    		$argMax = trim($filtre['argMax']);
    		$homMin = trim($filtre['homMin']);
    		$homMax = trim($filtre['homMax']);
			$liste_filtrer = array();
			$indice = 0;
        	for ($i=0; $i<count($groups); $i++) {
	            $ajout=true;
	            if($nom!='' && !preg_match("#".$nom."#", 
	            		strtolower($groups[$i]->getNomGroupe())))
	                $ajout = false;
	            if($expMin!='' && $this->getExpGroup($groups[$i])<$expMin)
	            	$ajout = false;
	            if($expMax!='' && $this->getExpGroup($groups[$i])>$expMax)
	            	$ajout = false;
	            if($argMin!='' && $groups[$i]->getArgent()<$argMin)
	            	$ajout = false;
	            if($argMax!='' && $groups[$i]->getArgent()>$argMax)
	            	$ajout = false;
	            if($homMin!='' && $this->nbHommeGroup($groups[$i])<$homMin)
	            	$ajout = false;
	            if($homMax!='' && $this->nbHommeGroup($groups[$i])>$homMax)
	            	$ajout = false;
	            if($ajout){
	                $liste_filtrer[$indice] = $groups[$i];
	                $indice++;
	            }
        	}
        	return $liste_filtrer;	
       	}
    	return $groups;
    }

    public function getHommesGroupe(Groupe $groupe){
    	$hommes = $this->repoHomme->findByIdGroupe($groupe->getId());
    	return $hommes;
    }

    public function getExpGroup(Groupe $groupe){
    	$hommes = $this->getHommesGroupe($groupe);
    	$exp = 0;
    	for($i=0; $i<count($hommes); $i++){
    		$exp += $hommes[$i]->getNiveau();
    	}  	
    	return $exp;
    }

    public function createFormGroup(){
		$form = $this->createFormBuilder()
            ->add('nom', TextType::class)
            ->setAction($this->generateUrl('/createGroup'))
            ->add('save', SubmitType::class, array('label' => 'creation groupe'))
            ->getForm();
 		return $form;
    }

    private function ranger(Array $groupes, Array $criteres){
        if($criteres[0] == 'exp')
        	if($criteres[1] == 'desc')
            	uasort($groupes, function($a, $b){
                	return -1 * ($a[0] - $b[0]);
            	}); 
            else 
            	uasort($groupes, function($a, $b){
                	return 1 * ($a[0] - $b[0]);
            	}); 
        else if($criteres[0] == 'id')
        	if($criteres[1] == 'desc')
            	uasort($groupes, function($a, $b){
                	return -1 * ($a[1]->getId() - $b[1]->getId());
            	});
            else
                uasort($groupes, function($a, $b){
                	return 1 * ($a[1]->getId() - $b[1]->getId());
            	});  
        else if($criteres[0] == 'argent')
        	if($criteres[1] == 'desc')
            	uasort($groupes, function($a, $b){
                	return -1 * ($a[1]->getArgent() - $b[1]->getArgent());
            	});  	
        	else
            	uasort($groupes, function($a, $b){
                	return 1 * ($a[1]->getArgent() - $b[1]->getArgent());
            	});          		
        else if($criteres[0] == 'nom')
        	if($criteres[1] == 'desc')
            	uasort($groupes, function($a, $b){
                	return -1 * strnatcmp ($a[1]->getNomGroupe() , $b[1]->getNomGroupe());
            	});
           	else 
           	    uasort($groupes, function($a, $b){
                	return 1 * strnatcmp ($a[1]->getNomGroupe() , $b[1]->getNomGroupe());
            	});
        else if($criteres[0] == 'nbh')
        	if($criteres[1] == 'desc')
            	uasort($groupes, function($a, $b){
                	return -1 * ($a[2] - $b[2]);
            	});
           	else 
           	    uasort($groupes, function($a, $b){
                	return 1 * ($a[2] - $b[2]);
            	}); 	 	
        return $groupes;
    }

    public function createGroup(Request $request){
    	    $nom = $request->request->all()['form']['nom'];
    		$group = new Groupe();
    		$group->setNomGroupe($nom);
    		$group->setArgent(100);
    		$group->setIdJoueur($this->session->get('id'));
    		$this->em->persist($group);
            $this->em->flush();
            $array = array("nom"=>"NoName", "niveau"=>0, "idGroupe"=>$group->getId());
            $homme1 = $this->createHomme($array);
            $homme2 = $this->createHomme($array);
            $homme3 = $this->createHomme($array);
            $this->em->persist($homme1);
            $this->em->persist($homme2);
            $this->em->persist($homme3);
            $this->em->flush();
    }

    public function createHomme(Array $attr){
    	$homme = new Homme();
    	$homme->setNom($attr["nom"]);
    	$homme->setNiveau($attr["niveau"]);
    	$homme->setIdGroupe($attr["idGroupe"]);
    	return $homme;
    }

    public function nbHommeGroup(Groupe $groupe){
    	return count($this->repoHomme->findByIdGroupe($groupe->getId()));
    }

    public function createFormRecherche(Array $filtre){
    	$arrayExpMin = $this->argChampsInt($filtre, array("expMin"), array("Exp Min"));
    	$arrayExpMax = $this->argChampsInt($filtre, array("expMax"), array("Exp Max"));
        $dataNom = $this->hydrateChamps($filtre, array("nom"));
    	$arrayArgMin = $this->argChampsInt($filtre, array("argMin"), array("Argent Min"));
    	$arrayArgMax = $this->argChampsInt($filtre, array("argMax"), array("Argent Max"));
    	$arrayHomMin = $this->argChampsInt($filtre, array("homMin"), array("Homme Min"));
    	$arrayHomMax = $this->argChampsInt($filtre, array("homMax"), array("Homme Max"));
        $form = $this->createFormBuilder()
            ->add('expMin', IntegerType::class,$arrayExpMin)           
            ->add('expMax', IntegerType::class,$arrayExpMax)
            ->add('nom', TextType::class, array('required' => false,'data'=>$dataNom))
            ->add('argMin', IntegerType::class,$arrayArgMin)
            ->add('argMax', IntegerType::class,$arrayArgMax)
            ->add('homMin', IntegerType::class,$arrayHomMin)         
            ->add('homMax', IntegerType::class,$arrayHomMax)
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

     /**
     * @Route("/createGroup", name="/createGroup")
     */
	public function createGroupAction(Request $request){
    	$this->init($request);
    	if(isset($request->request->all()['form'])){
    		$this->createGroup($request);
    	}
    	return $this->redirectToRoute("/group");
    }


}