<?php

namespace dsw\AmpliBundle\Form;

// use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
// use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class IdeeEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('Envoyer !', SubmitType::class)
            ->add('objectifs', TextareaType::class, array(
                'required' => false,
                'attr' => array(
                    'rows' => 6,
                )
            ))
            ->add('methode', TextareaType::class, array(
                'required' => false,
                'attr' => array(
                    'rows' => 6,
                )
            ))
            ->add('calendrier', TextareaType::class, array(
                'required' => false,
                'attr' => array(
                    'rows' => 6,
                )
            ))
            ->add('equipe', TextareaType::class, array('required' => false))
            ->add('imgProjetfile', FileType::class, array(
                'required' => false,
                'label' => 'Modifier l\'image d\'illustration du projet'
            ))
            ->add('imgEquipefile', FileType::class, array(
                'required' => false,
                'label' => 'Modifier la photo de l\'équipe'
            ))
            ;
    }

    // héritage de formulaire
    public function getParent()
    {
        return IdeeType::class;
    }


}
