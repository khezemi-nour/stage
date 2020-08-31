<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Offre;

use AppBundle\Form\ OffreType;

use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
class OffreController extends Controller
{
  
    /**
     * @Route("/add", name="add")
     * 
     *  @return \symfony\Componenet\HttpFoundation\Response
     */
  
    function addOffreAction(Request$request){
        $Offre= new Offre();
        $form = $this->createForm(OffreType::class, $Offre);
       
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
             $em->persist($Offre); 
             $em->flush();
             $url = $this->generateUrl('homepage');
             $response = new RedirectResponse($url);
             return $response;
         }
         $formView = $form->createView();

         return $this->render('OffreAdd.html.twig', array( 'form' => $formView));

        }
    
  
}