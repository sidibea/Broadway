<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/1/16
 * Time: 3:41 AM
 */
namespace BW\AdminBundle\Twig\Extension;
use Doctrine\ORM\EntityManager;

class DatabaseGlobalsExtension extends \Twig_Extension
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getGlobals()
    {
        return array (
            'myVariable' => $this->em->getRepository('BWAdminBundle:Categories')->findAll(),
        );
    }

    public function getName()
    {
        return 'BWAdminBundle:DatabaseGlobalsExtension';
    }


}