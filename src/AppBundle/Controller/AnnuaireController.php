<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AnnuaireController extends Controller
{
    /**
     * @Route("/Annuaire", name="Annuaire")
     */
    public function AnnuaireAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Annuaire.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}