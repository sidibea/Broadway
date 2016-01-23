<?php
// src/OC/UserBundle/Controller/SecurityController.php;

namespace BW\UsersBundle\Controller;

use BW\UsersBundle\Entity\Customers;
use BW\UsersBundle\Form\CustomersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');
        $categories = $em->getRepository('BWAdminBundle:Categories')->findAll();


        $customer = new Customers();
        $form = $this->createForm(CustomersType::class, $customer);

        if ($form->handleRequest($request)->isValid()) {

            $customer->getUsers()->setUsername($form->get('users')->get('email')->getData());
            $customer->getUsers()->setRoles(array('ROLE_CUSTOMERS'));
            $customer->getUsers()->setEnabled(true);

            $em->persist($customer);
            $em->flush();

            return $this->redirect($this->generateUrl('bw_front_homepage'));

        }




        return $this->render('BWUsersBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
            'form' => $form->createView(),
            'categories' => $categories
        ));
    }


}