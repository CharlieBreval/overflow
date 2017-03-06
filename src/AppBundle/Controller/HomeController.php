<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * Lists all issue entities.
     *
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $issues = $em->getRepository('AppBundle:Issue')->findAll();

        return $this->render('home/home.html.twig', array(
            'issues' => $issues,
        ));
    }

}
