<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashbordController extends Controller
{
    /**
     * @Route("/dashbord", name="dashbord")
     */
    public function DashbordAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('dashbord.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}