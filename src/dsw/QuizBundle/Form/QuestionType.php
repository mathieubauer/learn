<?php

namespace dsw\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class QuestionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule', TextareaType::class, array(
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Intitulé de la question', 
                    'rows' => 4,
                ),
            ))
            ->add('questionnaire',     EntityType::class, array(
                'class' => 'dswQuizBundle:Questionnaire',
                'choice_label' => 'titre', 
            ))
            ->add('answers', CollectionType::class, array(
                'entry_type'   => AnswerType::class,
                // 'entry_options' => array('label' => false),
                'allow_add'    => true,
                'allow_delete' => true,
                'prototype' => true,
                // 'by_reference' => false,
                'label_attr' => array(
                    'class' => 'hidden',
                ),
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\QuizBundle\Entity\Question'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_quizbundle_question';
    }

}
