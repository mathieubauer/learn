<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class ModuleCreateType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('chat')
            ->remove('open')
            ->remove('course')
            ->remove('picto')
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return ModuleType::class;
    }


}
