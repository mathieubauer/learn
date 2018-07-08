<?php

namespace dsw\QuizBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReponseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('choix')
            ->add('choix',     EntityType::class, array(
                'class' => 'dswQuizBundle:Question',
                'choice_label' => 'r1',
            ))
            ->add('question',     EntityType::class, array(
                'class' => 'dswQuizBundle:Question',
                'choice_label' => 'intitule',
            ))
            ->add('user');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\QuizBundle\Entity\Reponse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_quizbundle_reponse';
    }


}
