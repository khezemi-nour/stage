<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Demande;
use AppBundle\Entity\Offre;


class approuverController extends Controller
{
    /**
     * @Route("/approuver", name="approuver")
     */
    public function ApprouverAction()
    {
        
        $demandes=$this->getDoctrine()
        ->getRepository('AppBundle:Demande')
        ->findAll();
        $offres=$this->getDoctrine()
        ->getRepository('AppBundle:Offre')
        ->findAll();
        return $this->render('approuver.html.twig', [ 'demandes' => $demandes,  'offres' => $offres ]);
        

        
        
    }
  
}