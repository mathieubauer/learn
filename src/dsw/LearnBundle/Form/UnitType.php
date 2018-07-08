<?php

namespace dsw\LearnBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use FOS\CKEditorBundle\Form\Type\CKEditorType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use dsw\LearnBundle\Repository\ModuleRepository;

class UnitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Titre',
                ),
                'required' => false,
            ))
            /*->add('content', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => '...',
                    'class' => 'typo_code',
                    'rows' => 6,
                )
            ))*/
            ->add('content', CKEditorType::class, array(
                'config_name' => 'user_config',
                'config'      => array('uiColor' => '#ffffff'),
            ))
            //->add('content', 'ckeditor', array('config_name' => 'basic_config',))
            //->add('content', CKEditorType::class)
            ->add('type', ChoiceType::class, array(
                'expanded' => 'true',
                'choices'  => array(
                    // 'Titre' => 'title',
                    'Texte' => 'text',
                    'Document PDF depuis l\'ordinateur' => 'doc',
                    'Image depuis l\'ordinateur' => 'image',
                    // 'Image ou gif depuis une url' => 'image_url',
                    'Vidéo depuis l\'ordinateur' => 'video_upload',
                    // 'Vidéo depuis le web' => 'video',
                    // 'Code HTML (utilisateurs avancés)' => 'html',
                ),
                'attr' => array(
                    // 'class' => 'btn-group btn-group-toggle',
                ),
            ))
            ->add('module', EntityType::class, array(
                'class' => 'dswLearnBundle:Module',
                'choice_label' => 'name',
            ))
            ->add('imageFile', FileType::class, array(
                //'label' => 'Masqué',
                //'data_class' => null,
                'required' => false,
            ))
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\LearnBundle\Entity\Unit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_learnbundle_unit';
    }


}
