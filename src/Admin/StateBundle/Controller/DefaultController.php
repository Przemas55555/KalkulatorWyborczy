<?php

namespace Admin\StateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StateBundle:Default:index.html.twig', array('name' => $name));
    }
}
