<?php

namespace dsw\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class AnswerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('answer', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Option réponse'
                ),
                'label_attr' => array(
                    'class' => 'hidden',
                ),
            ))
            ->add('feedback', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => 'form-control form-control-sm quiz_feedback',
                    'placeholder' => 'Feedback à afficher (facultatif)'
                ),
                'label_attr' => array(
                    'class' => 'hidden',
                ),
            ))
            ->add('axe', TextType::class, array(
                // 'empty_data' => 0,
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Axe (facultatif)',
                    'class' => 'form-control form-control-sm quiz_axe',
                ),
                'label_attr' => array(
                    'class' => 'hidden',
                ),
            ))
            ->add('score', IntegerType::class, array(
                // 'empty_data' => 0,
                'required' => false,
                'attr' => array(
                    'placeholder' => 'Score (facultatif)',
                    'class' => 'form-control form-control-sm quiz_score',
                ),
                'label_attr' => array(
                    'class' => 'hidden',
                ),
            ))
            
            //->add('question', HiddenType::class)
            
            // ->add('question',     EntityType::class, array(
            //     'class' => 'dswQuizBundle:Question',
            //     'choice_label' => 'intitule',
            // ))
            ;
            
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\QuizBundle\Entity\Answer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_quizbundle_answer';
    }


}
