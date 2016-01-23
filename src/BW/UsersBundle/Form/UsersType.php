<?php

namespace BW\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class UsersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('email', TextType::class, array(
                'label' => 'Adresse Email',
                'translation_domain' => 'FOSUserBundle',
                'attr' => array('class'=>'form-control')
            ))

            ->add('plainPassword', RepeatedType::class, array(
                'type' =>  PasswordType::class,
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de passe', 'attr'=>array('class'=>'input-block-level')),
                'second_options' => array('label' => 'Retapez le mot de passe', 'attr'=>array('class'=>'input-block-level')),
                'invalid_message' => 'fos_user.password.mismatch',

            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BW\UsersBundle\Entity\Users'
        ));
    }
}
