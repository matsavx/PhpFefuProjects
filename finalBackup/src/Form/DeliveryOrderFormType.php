<?php

namespace App\Form;

use App\Entity\DeliveryOrder;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeliveryOrderFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('orderSessionId', HiddenType::class)
            ->add('orderAddress', TextType::class, ['label'=>'Адрес доставки'])
            ->add('orderClientNumber', TextType::class, ['label'=>'Номер телефона'])
            ->add('save', SubmitType::class, ['label'=>'Сохранить'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DeliveryOrder::class,
        ]);
    }
}
