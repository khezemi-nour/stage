<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\DemandeType;
use AppBundle\Entity\Demande;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;





class DemandeController extends Controller
{
    /**
     * @Route("/Demande", name="Demande")
     * 
     *  @return \symfony\Componenet\HttpFoundation\Response
     */
  
    function addDemandeAction(Request$request){
        $Demande= new Demande();
        $form = $this->createForm(DemandeType::class, $Demande);
       
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
             $em->persist($Demande); 
             $em->flush();
             $url = $this->generateUrl('homepage');
             $response = new RedirectResponse($url);
             return $response;
         }
         $formView = $form->createView();

         return $this->render('Demande.html.twig', array( 'form' => $formView));

        }
    

}






    
        