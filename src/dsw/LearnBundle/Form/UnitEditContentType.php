<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class UnitEditContentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('module')
            ->remove('name')
            ->remove('type')
            ->remove('imageFile')
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return UnitType::class;
    }

}