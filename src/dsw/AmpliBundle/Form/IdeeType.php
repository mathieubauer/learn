<?php

namespace dsw\AmpliBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use dsw\AmpliBundle\Repository\CategorieRepository;

class IdeeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $espace = $options['espace'];
        $hasCategories = $options['hasCategories'];
        
        if ($hasCategories) {
            $builder
                ->add('categorie', EntityType::class, array(
                    'placeholder' => 'Choisir un thème',
                    'class' => 'dswAmpliBundle:Categorie',
                    // 'choices' => $categorie->getEspace(),
                    'choice_label' => 'titre',
                    'query_builder' => function (CategorieRepository $er) use ($espace) {
                        return $er
                            ->createQueryBuilder('c')
                            ->where('c.espace = ' . $espace);
                    },

                ))
                ->add('titre', TextType::class, array(
                    'attr' => array(
                        'class' => 'display_form',
                        'placeholder' => 'Titre',
                    )
                ))
                ->add('description', TextareaType::class, array(
                    'attr' => array(
                        'class' => 'limit_140',
                        'placeholder' => 'Description (140 caractères max)',
                    )
                ))
            ;
        } else {
            $builder
                ->add('titre', TextType::class, array(
                    'attr' => array(
                        'class' => 'display_form',
                        'placeholder' => 'Titre'
                    )
                ))
                ->add('description', TextareaType::class, array(
                    'attr' => array(
                        'class' => 'limit_140',
                        'placeholder' => 'Description (140 caractères max)',
                    )
                ))
            ;
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dsw\AmpliBundle\Entity\Idee',
            'espace' => null,
            'hasCategories' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dsw_amplibundle_idee';
    }

}
