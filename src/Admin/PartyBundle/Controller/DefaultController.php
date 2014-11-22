<?php

namespace Admin\PartyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PartyBundle:Default:index.html.twig', array('name' => $name));
    }
}
