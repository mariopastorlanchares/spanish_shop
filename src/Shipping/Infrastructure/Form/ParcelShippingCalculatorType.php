<?php

namespace App\Shipping\Infrastructure\Form;

use Sylius\Bundle\MoneyBundle\Form\Type\MoneyType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class ParcelShippingCalculatorType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('size', NumberType::class)
            ->add('price', MoneyType::class, [
                'currency' => 'EUR',
            ])
        ;
    }

}
