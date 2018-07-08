<?php

namespace dsw\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use dsw\QuizBundle\Repository\AnswerRepository;



class AttemptType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $question = $options['question'];
        //$question = 18;
        
        $builder
            ->add('user')
            ->add('answer',     EntityType::class, array(
                'class' => 'dswQuizBundle:Answer',
                'query_builder' => function (AnswerRepository $er) use ($question) {
                    return $er
                        ->createQueryBuilder('a')
                        ->where('a.question = ' . $question->getId());
                },
                'choice_label' => 'answer',
                'expanded' => 'true',
                'label_attr' => array(
                    'class' => 'btn btn-primary mb-md-3 mb-1 reponse d-flex'
                )
            ))
            ;
    }
    
    
    // The OptionsResolver component is array_replace on steroids. It allows you to create an options system with required options, defaults, validation (type, value), normalization and more. 
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\QuizBundle\Entity\Attempt',
            'question' => null,
        ));
        
        // ON PEUT SET UN ATTRIBUT DANS LE RESOLVER, A REGARDER
        
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_quizbundle_attempt';
    }


}
