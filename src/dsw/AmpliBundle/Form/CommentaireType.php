<?php

namespace dsw\AmpliBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
// use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
// use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CommentaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextAreaType::class, array(
                'attr' => array(
                    //'class' => 'display_form',
                    'placeholder' => 'Votre commentaire',
                    'rows' => 4,
                )
            ))
            
            
            // ->add('date', DateTimeType::class, array(
            //     'placeholder' => array(
            //         'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
            //         'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
            //     )
            // ))
            // ->add('user', EntityType::class, array(
            //     'placeholder' => 'Auteur',
            //     'class' => 'dswUserBundle:User',
            //     'choice_label' => 'username',
            // ))
            // ->add('idee', EntityType::class, array(
            //     'placeholder' => 'Idée',
            //     'class' => 'dswAmpliBundle:Idee',
            //     'choice_label' => 'titre',
            // ))
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\AmpliBundle\Entity\Commentaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_amplibundle_commentaire';
    }


}
