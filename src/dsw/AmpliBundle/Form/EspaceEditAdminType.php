<?php

namespace dsw\AmpliBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class EspaceEditAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('etape', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Écran de sélection' => 0,
                    'Propositions seules' => 1,
                    'Propositions et vote' => 2,
                    'Développer (pour les inscrits)' => 3,
                    'Propulser (public)' => 4,
                    'Sélectionner (tinder des idées)' => 5,
                ),
            ))
            ->add('withCoeurs', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('withModeration', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('withIdees', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('withFooter', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('withCommentaires', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('withTemps', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('withArgent', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('withEquipe', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    'Oui' => 1,
                    'Non' => 0,
                ),
                
            ))
            ->add('objectifsAlias', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Alias objectifs'
                )
            ))
            ->add('methodeAlias', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Alias méthode'
                )
            ))
            ->add('calendrierAlias', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Alias calendrier'
                )
            ))
            ->add('propulserAlias', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Propulser calendrier'
                )
            ))
            ->add('publicQuestion', TextType::class, array(
                'required' => false,
                'attr' => array(
                    'class' => '',
                    'placeholder' => 'Question publique'
                )
            ))
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return EspaceType::class;
    }


}