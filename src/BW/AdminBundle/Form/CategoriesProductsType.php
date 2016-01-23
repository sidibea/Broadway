<?php

namespace BW\AdminBundle\Form;

use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class CategoriesProductsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('products', ProductType::class, array(
                'data_class' => null
            ))
            ->remove('image')
            ->remove('name')
            ->remove('description')
            ->remove('enabled')

        ;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'bw_adminbundle_categories_products';
    }
    
    public function getParent(){
        return   CategoriesType::class ;
    }
}
