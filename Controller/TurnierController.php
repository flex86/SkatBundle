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
	
	public function newAction(Request $request){
		$turnier = new Turnier();
		
		$form = $this->createFormBuilder($turnier)
			->add('skatgruppe','integer')
			->add('id','integer')
			->add('datum','date')
			->add('save','submit',array('label'=>'Speichern'))
			->getForm();
		
		return $this->render('Fl3SkatBundle:Turnier:new.html.twig',array('form'=> $form->createView()));
	}
	
	

}