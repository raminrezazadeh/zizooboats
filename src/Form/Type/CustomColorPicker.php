<?php
namespace App\Form\Type;

use App\Types\ColorsEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CustomColorPickerType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                ColorsEnum::Blue => ColorsEnum::Blue,
                ColorsEnum::Green => ColorsEnum::Green,
                ColorsEnum::Red => ColorsEnum::Red,
            ],
            'expanded' => true,
                'multiple' => false,
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}