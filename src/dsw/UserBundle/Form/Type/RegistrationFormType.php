<?php

namespace dsw\UserBundle\Form\Type;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
 
{
   public function buildForm(FormBuilderInterface $builder, array $options)
 
   {
        
        /*
        $builder
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
        */
       
        $builder
            ->add('firstname', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Prénom'
                )
            ))
            ->add('lastname', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Nom'
                )
            ))
            ->remove('email')
            ->add('email', EmailType::class, array(
                'label' => 'Email',
                'attr' => array(
                    'placeholder' => 'Email'
                )
            ))
            ->remove('plainPassword')
            ->add('plainPassword', PasswordType::class, array(
                'label' => 'Mot de passe',
                'attr' => array(
                    'placeholder' => 'Mot de passe'
                ),
                // 'options' => array('translation_domain' => 'FOSUserBundle'),
                // 'first_options' => array('label' => 'form.password'),
                // 'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->remove('username')
        ;
       
   }
 
   public function getParent()
 
   {
       return 'FOS\UserBundle\Form\Type\RegistrationFormType';
   }
 
   public function getBlockPrefix()
 
   {
       return 'dsw_user_registration';
   }
 
   public function getName()
 
   {
       return $this->getBlockPrefix();
   }
 
}
