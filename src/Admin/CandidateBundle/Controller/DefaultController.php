<?php

namespace Admin\CandidateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CandidateBundle:Default:index.html.twig', array('name' => $name));
    }
}
