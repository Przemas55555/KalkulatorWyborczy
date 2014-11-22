<?php

namespace Admin\OKWBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OKWBundle:Default:index.html.twig', array('name' => $name));
    }
}
