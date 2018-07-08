<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class ModuleEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->remove('open')
            ->remove('course')
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return ModuleType::class;
    }

}
