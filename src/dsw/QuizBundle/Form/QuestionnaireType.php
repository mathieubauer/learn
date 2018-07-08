<?php

namespace dsw\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class QuestionnaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array(
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Titre du questionnaire', 
                ),
            ))
            ->add('code', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Code du questionnaire (facultatif)', 
                ),
            ))
            ->add('intro', TextareaType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Texte affiché au début du questionnaire',
                    'rows' => 8,
                ),
            ))
            // ->add('dateCrea')
            // ->add('user')
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\QuizBundle\Entity\Questionnaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_quizbundle_questionnaire';
    }


}
