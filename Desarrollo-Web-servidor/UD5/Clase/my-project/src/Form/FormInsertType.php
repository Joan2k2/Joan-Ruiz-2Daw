<?php

namespace App\Form;

use App\Entity\Cliente;
use App\Entity\Emp;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormInsertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('direc')
            ->add('ciudad')
            ->add('estado')
            ->add('cod_postal')
            ->add('area')
            ->add('telefono')
            ->add('limite_credito')
            ->add('observaciones')
            ->add('repr_cod', EntityType::class, [
                'class' => Emp::class,
'choice_label' => 'id',
            ])
            ->add('submit',SubmitType::class );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cliente::class,
        ]);
    }
}
