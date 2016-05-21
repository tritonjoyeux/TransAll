<?php

namespace Cook4usBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('Cook4usBundle:Default:index.html.twig');
    }

    public function workingAction()
    {
        return $this->render('Cook4usBundle:Working:index.html.twig');
    }

    public function hygieneAction()
    {
        return $this->render('Cook4usBundle:Hygiene:index.html.twig');
    }
}
