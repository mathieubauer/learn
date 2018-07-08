<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


use dsw\LearnBundle\Repository\CourseRepository;

class ModuleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Titre du module',
                    'class' => 'text-center',
                )
            ))
            ->add('chat', CheckboxType::class, array(
                'label'    => 'Afficher ?',
                'required' => false,
            ))
            ->add('open', CheckboxType::class, array(
                'label'    => 'Ouvrir ?',
                'required' => false,
            ))
            ->add('course', EntityType::class, array(
                'class' => 'dswLearnBundle:Course',
                'choice_label' => 'name',
            ))
            ->add('picto', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Code Font Awesome du picto (ex : fas fa-arrow-right, fas fa-file-alt, fab fa-youtube)',
                    // 'class' => 'text-center',
                )
            ))
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\LearnBundle\Entity\Module'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_learnbundle_module';
    }


}
