<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/1/16
 * Time: 1:08 AM
 */

namespace BW\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class DasboardController extends Controller {

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(){
        $users = $this->getUser();
        if (!is_object($users) || !$users instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }



        return $this->render('BWAdminBundle::index.html.twig');

    }

}