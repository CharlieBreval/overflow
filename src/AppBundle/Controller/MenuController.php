<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MenuController extends Controller
{
    public function menuAction(Request $request)
    {
        return $this->render('menu/menu.html.twig');
    }
}
