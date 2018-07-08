<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfigAllType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('name', TextareaType::class, array('required' => false))
            // ->add('value', TextareaType::class, array('required' => false))
            ->add('configs', CollectionType::class, array(
                'entry_type'   => ConfigType::class,
                // 'entry_options' => array('label' => false),
                // 'allow_add'    => true,
                // 'allow_delete' => true,
                // 'prototype' => true,
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
            'data_class' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_amplibundle_espace'; // ??
    }

}