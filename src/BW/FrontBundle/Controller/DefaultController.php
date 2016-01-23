<?php

namespace BW\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BWFrontBundle:Default:index.html.twig');
    }
}
