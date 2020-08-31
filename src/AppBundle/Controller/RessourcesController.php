<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RessourcesController extends Controller
{
    /**
     * @Route("/Ressources", name="Ressources")
     */
    public function RessourcesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Ressources.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}