<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Titre du cours',
                )
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'Description du cours (facultatif, apparait si public)',
                ),
                'required' => false,
            ))
            ->add('code', TextType::class, array(
                'attr' => array(
                    'placeholder' => "Permet l'accès via : ampli.live/votrecode (facultatif)",
                ),
                'required' => false,
            ))
            ->add('logo', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Logo (facultatif)',
                ),
                'required' => false,
            ))
            ->add('open', CheckboxType::class, array(
                'label'    => "Permettre l'accès à tous ?",
                'required' => false,
            ))
            ->add('public', CheckboxType::class, array(
                'label'    => "Afficher sur la page d'accueil ?",
                'required' => false,
            ))
            ->add('learners', EntityType::class, array(
                'class' => 'dswUserBundle:User',
                'choice_label' => 'email',
                'multiple' => true,
                'expanded' => true,
            )) 
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\LearnBundle\Entity\Course'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_learnbundle_course';
    }


}
