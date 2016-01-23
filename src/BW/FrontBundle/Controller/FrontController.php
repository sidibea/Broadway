<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/1/16
 * Time: 7:21 PM
 */

namespace BW\FrontBundle\Controller;


use BW\FrontBundle\Entity\Cart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;

class FrontController extends Controller {

    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('BWAdminBundle:Categories')->findAll();

        return $this->render('BWFrontBundle::index.html.twig', array(
            'categories' => $categories
        ));
    }

    public function productlistAction($id){
        $em = $this->getDoctrine()->getManager();

        $selected = $em->getRepository('BWAdminBundle:Categories')->find($id);
        $categories = $em->getRepository('BWAdminBundle:Categories')->findAll();
        $products = $em->getRepository('BWAdminBundle:Product')->loadByCategoryId($id);




        return $this->render('BWFrontBundle::shop.html.twig', array(
            'categories' => $categories,
            'selected' => $selected,
            'products' => $products
        ));

    }

    public function cartAction($id, $qty){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $products = $em->getRepository('BWAdminBundle:Product')->find($id);

        $existing = $em->getRepository('BWFrontBundle:Cart')->loadByUsersAndProducts($products, $user->getId());

        if(empty($existing)){
            $cart = new Cart();

            $cart->setUsers($user);
            $cart->setProducts($products);
            $cart->setQuantity($qty);
            $cart->setDateAdd(new \datetime);

            $em->persist($cart);
            $em->flush();
            return $this->redirect($this->generateUrl('bw_front_view_cart'));
        } else{

            $cart = $em->getRepository('BWFrontBundle:Cart')->find($existing[0]->getId());
            $cart->setQuantity($qty);
            $em->flush();
            return $this->redirect($this->generateUrl('bw_front_view_cart'));


        }



    }

    public function viewcartAction(Request $request){

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $categories = $em->getRepository('BWAdminBundle:Categories')->findAll();

        $cart = $em->getRepository('BWFrontBundle:Cart')->loadByUsers($user->getId());




        return $this->render('BWFrontBundle::cart.html.twig', array(
            'categories' => $categories,
            'cart' => $cart,
        ));

    }


    public function detailsAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();

        $selected = $em->getRepository('BWAdminBundle:Product')->find($id);

        $categories = $em->getRepository('BWAdminBundle:Categories')->findAll();

        $data = array();
        $form = $this->createFormBuilder($data)
            ->add('qty', TextType::class)
            ->getForm();
        if ($form->handleRequest($request)->isValid()) {
            $value = $form->getData();
           return $this->redirect($this->generateUrl('bw_front_cart', array(
                'id' => $id,
                'qty' => $value['qty']
            )));

        }

        return $this->render('BWFrontBundle::details.html.twig', array(
            'categories' => $categories,
            'selected' => $selected,
            'form' => $form->createView()
        ));
    }

    public function checkoutAction(){
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('BWAdminBundle:Categories')->findAll();


        $user = $this->getUser();
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }


        $cart = $em->getRepository('BWFrontBundle:Cart')->loadByUsers($user->getId());

        return $this->render('BWFrontBundle::checkout.html.twig', array(
            'categories' => $categories,
            'cart' => $cart
        ));

    }

    public function ordersAction(){
        $em = $this->getDoctrine()->getManager();


        $user = $this->getUser();
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }


        $cart = $em->getRepository('BWFrontBundle:Cart')->loadByUsers($user->getId());
        $customer = $em->getRepository('BWUsersBundle:Customers')->getUserCustomerById($user->getId());

        $message = \Swift_Message::newInstance()
            ->setSubject('Nouvelle commande')
            ->setFrom('noreply@broay.com')
            ->setTo('sidibesekouassane@gmail.com')
            ->setBody(
                $this->renderView('BWFrontBundle::orders.html.twig', array(
                    'cart' => $cart,
                    'customer' => $customer
                )),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;
        $this->get('mailer')->send($message);

        return $this->render('BWFrontBundle::orders.html.twig', array(
            'cart' => $cart,
            'customer' => $customer
        ));

    }

}