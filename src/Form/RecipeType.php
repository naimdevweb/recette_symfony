<?php

namespace App\Form;

use App\Entity\Recipe;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'nom de la recette'
            ])

            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'description de la recette'
            ])

            ->add('slug', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'slug de la recette :',
                'label_attr' => ['class' => 'input-label']
            ])

            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary'],
                'label' => 'Enregistrer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
