<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageCustomType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('date')
            ->remove('user')
            ->remove('module')
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return MessageType::class;
    }

}