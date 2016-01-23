<?php

namespace BW\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BWAdminBundle:Default:index.html.twig');
    }
}
