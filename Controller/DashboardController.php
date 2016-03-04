<?php
namespace Fl3\SkatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Fl3\SkatBundle\Entity\Spieler;

class DashboardController extends Controller{
	
	
	
	public function indexAction(){
		
		/* @var $user Fl3\SkatBundle\Entity\Spieler */
		$user = $this->getDoctrine()->getRepository('Fl3SkatBundle:Spieler')->find(1);
		
		$name=$user->getName();
		
		return new JsonResponse($user);
		
	}

	
}