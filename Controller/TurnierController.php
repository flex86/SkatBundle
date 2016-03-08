<?php
namespace Fl3\SkatBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Fl3\SkatBundle\Entity\Turnier As Turnier;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TurnierController extends Controller{
	
	
	public function indexAction(){
		
		$turniere = new ArrayCollection();
		
		//$turniere = $this->getDoctrine()->getRepository("Fl3\SkatBundle\Entity")->findAll();
		
		
	}
	
	public function showAction($turnier_id){
		$turnier = $this->getDoctrine()->getRepository("Fl3\SkatBundle\Entity\Turnier")->find($turnier_id);
		
		return new Response("Show: " . $turnier->getId());
	}
	
	public function newAction(Request $request){
		
		$user = $this->getDoctrine()->getRepository("Fl3\SkatBundle\Entity\Spieler")->find(1);
		$turnier = new Turnier();
		
		$form = $this->createFormBuilder($turnier)
			->add('skatgruppe','entity',array('class'=>"Fl3\SkatBundle\Entity\Skatgruppe",'choices' => $user->getSkatgruppe(),'property'=>'name'))
			->add('datum','date')
			->add('save','submit',array('label'=>'Speichern'))
			->getForm();
		
		$form->handleRequest($request);
		
		if($form->isSubmitted() && $form->isValid()){
			$this->getDoctrine()->getManager()->persist($turnier);
			$this->getDoctrine()->getManager()->flush();
			
			return $this->redirect($this->generateUrl("turnier_show",array('turnier_id'=>$turnier->getId())));
		}
		
		return $this->render('Fl3SkatBundle:Turnier:new.html.twig',array('form'=> $form->createView()));
	}
	
	public function editAction($turnier_id){
		$turnier = $this->getDoctrine()->getRepository("Fl3\SkatBundle\Entity\Turnier")->find($turnier_id);
		
		$form = $this->createFormBuilder($turnier)
			->add('skatgruppe','entity',array('class'=>"Fl3\SkatBundle\Entity\Skatgruppe",'choices' => $user->getSkatgruppe(),'property'=>'name'))
			->add('id','integer')
			->add('datum','date')
			->add('save','submit',array('label'=>'Speichern'))
			->getForm();
		return $this->render('Fl3SkatBundle:Turnier:new.html.twig',array('form'=> $form->createView()));
	}
	
	

}