<?php

namespace App\Form;

use App\Entity\Emp;
use App\Entity\PAGOSJoan;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;

class FormPagosJoanType extends AbstractType
{
    //generado automaticamente por symfony
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        //creado para poner un limite de 1000
            ->add('pago', null, [
                'constraints' => [
                    new NotBlank(),
                    new GreaterThan([
                        'value' => 999,
                        'message' => 'El valor del pago debe ser mayor o igual a 1000.',
                    ]),
                ],
            ])
            ->add('fecha')
            ->add('emp', EntityType::class, [
                'class' => Emp::class,
'choice_label' => 'id',
            ])
            ->add('submit',SubmitType::class );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PAGOSJoan::class,
        ]);
    }
}
