<?php

namespace dsw\EvalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class EnregistrementType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('records', CollectionType::class, array(
                'entry_type'   => RecordType::class,
                // 'entry_options' => array('label' => false),
                'allow_add'    => true,
                'allow_delete' => true,
                'prototype' => true,
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
            'data_class' => 'dsw\EvalBundle\Entity\Enregistrement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_evalbundle_enregistrement';
    }


}
