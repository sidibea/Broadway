<?php

namespace BW\AdminBundle\Form;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description', TextareaType::class, array(
                'required' => false
            ))
            ->add('images', FileType::class, array(
                'data_class' => null
            ))
            ->add('enabled', ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => true,
                    'No' => false,
                ),
                'expanded' => true,
                'multiple' => false
            ))
            ->add('price')
            ->add('categories', EntityType::class, array(
                'class' => 'BWAdminBundle:Categories',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                         ->where('c.enabled = :enabled')
                        ->setParameter('enabled', true);
                },
                'choice_label' => 'name'
            ))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BW\AdminBundle\Entity\Product'
        ));
    }
}
