<?php

namespace dsw\AmpliBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;

class EspaceEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('animateur')
            ->remove('categories')
            ->remove('slug')
            ->remove('withArgent') // pas encore disponible
            ->remove('objectifsAlias')
            ->remove('methodeAlias')
            ->remove('calendrierAlias')
            ;
    }

    // héritage de formulaire
    // hérite de EspaceEditAdminType
    // qui hérite lui-même de EspaceType
    // EspaceType -> EspaceEditAdminType -> EspaceEditType
    public function getParent()
    {
        return EspaceEditAdminType::class;
    }


}