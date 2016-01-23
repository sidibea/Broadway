<?php

namespace BW\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BWUsersBundle:Default:index.html.twig');
    }
}
