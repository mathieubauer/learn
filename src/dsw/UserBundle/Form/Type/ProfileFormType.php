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

class ProfileFormType extends AbstractType
 
{
   public function buildForm(FormBuilderInterface $builder, array $options)
 
   {
       
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
            // ->remove('current_password')
        ;
       
   }
 
   public function getParent()
 
   {
       return 'FOS\UserBundle\Form\Type\ProfileFormType';
   }
 
   public function getBlockPrefix()
 
   {
       return 'dsw_user_profile';
   }
 
   public function getName()
 
   {
       return $this->getBlockPrefix();
   }
 
}
