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

class CourseCreateType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('name')
            ->add('name', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Titre du cours',
                    'class' => 'text-center',
                )
            ))
            ->remove('code')
            ->remove('logo')
            ->remove('public')
            ->remove('description')
            ->remove('learners')
            ->remove('open')
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return CourseType::class;
    }


}
