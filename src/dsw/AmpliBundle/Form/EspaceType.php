<?php

namespace dsw\AmpliBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

// use dsw\UserBundle\Entity\User;
// use Doctrine\ORM\EntityRepository;

class EspaceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array(
                'attr' => array(
                    'class' => 'display_form',
                    'placeholder' => 'Titre'
                )
            ))
            ->add('slug', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Code url'
                ),
            ))
            ->add('animateur', EntityType::class, array(
                'required' => false,
                'placeholder' => 'Animateur',
                'class' => 'dswUserBundle:User',
                // 'choice_label' => 'Animateur',
                // 'query_builder' => function (UserRepository $er) {  // A FAIRE A UN MOMENT, mais pas prio, puisque admin
                //     return $er
                //         ->createQueryBuilder('u')
                //         //->where('c.espace = ' . $espace)
                //         ;
                // },

                ))
            ->add('categories', CollectionType::class, array(
                'entry_type' => CategorieType::class,
                // 'entry_options' => array('label' => false),
                'allow_add'    => true,
                'allow_delete' => true,
                'prototype' => true,
                // 'required' => false,
                // 'by_reference' => false,
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\AmpliBundle\Entity\Espace'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_amplibundle_espace';
    }


}
