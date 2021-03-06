<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
// use Symfony\Component\Form\Extension\Core\Type\TextareaType;
// use Symfony\Component\Form\Extension\Core\Type\IntegerType;
// use Symfony\Component\Form\Extension\Core\Type\SubmitType;
// use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseRegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('name')
            ->remove('code')
            ->remove('logo')
            ->remove('public')
            ->remove('description')
            ->remove('open')
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return CourseType::class;
    }


}
