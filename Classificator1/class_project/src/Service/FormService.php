<?php

namespace App\Service;

use App\Service\ClassificatorService;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Validator\Constraints\Form;
use Symfony\Component\Form\FormBuilder;

class FormService
{
    private ClassificatorService $classificatorService;

    public function __construct(ClassificatorService $classificatorService)
    {
        $this->classificatorService = $classificatorService;
    }

    public function makeGenreForm(FormBuilder $form, string $label): FormBuilder
    {
        $signSerialize = $this->classificatorService->prepareSignBindToForm();

        $i = 0;
        foreach ($signSerialize as $serialize) {
            $form->add('value' . $i, ChoiceType::class, [
                'label' => $serialize['name'] . ' ',
                'choices' => $serialize['value'],
                'attr' => ['class' => "form-select"]
            ]);
            ++$i;
        }
        $form->add(
            'save',
            SubmitType::class, [
                'label' => $label,
                'attr' => ['class' => "btn btn-primary"]
            ]
        );
        return $form;
    }

    public function makeGenreFormForUpdate(FormBuilder $form, string $label): FormBuilder
    {
        $signSerialize = $this->classificatorService->prepareSignBindToForm();
        $i = 0;
        foreach ($signSerialize as $serialize) {
            $form->add('value' . $i, ChoiceType::class, [
                'label' => $serialize['name'] . ' ',
                'choices' => $serialize['value'],
            ]);
            ++$i;
        }
        $form->add(
            'save',
            SubmitType::class,
            ['label' => $label]
        );
        return $form;
    }
}