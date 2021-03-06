<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/1/16
 * Time: 1:51 AM
 */

namespace BW\AdminBundle\Controller;


use BW\AdminBundle\Entity\Categories;
use BW\AdminBundle\Form\CategoriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller {

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function listAction(){
        $em = $this->getDoctrine()->getManager();

        $list = $em->getRepository('BWAdminBundle:Categories')->findAll();

        return $this->render('BWAdminBundle:Category:list.html.twig', array(
            'list' => $list
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function addAction(Request $request){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $category = new Categories();
        $form = $this->createForm(CategoriesType::class, $category);

        if ($form->handleRequest($request)->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $category->getImage();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/categories';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $category->setImage($fileName);
            $category->setDateAdd(new \datetime);
            $category->setDateUpd(new \datetime);

            $em->persist($category);
            $em->flush();

            return $this->redirect($this->generateUrl('bw_category_homepage'));

        }





        return $this->render('BWAdminBundle:Category:add.html.twig', array(
            'form' => $form->createView()

        ));




    }

}