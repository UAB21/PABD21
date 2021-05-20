<?php

namespace App\Form;

use App\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ImageForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("file", FileType::class, [
                "label" => "Imagine: ",
                "mapped" => false,
                "required" => false,
                "constraints" => [
                    new File([
                        "maxSize" => "4096k",
                        "mimeTypes" => [
                            "image/jpeg",
                            "image/png",
                        ],
                        "mimeTypesMessage" => "Va rugam incarcati o imagine valida!",
                    ])
                ],
            ])
            ->add("name", TextType::class, ["label" => "Nume: "])
            ->add("submit", SubmitType::class, ["label" => "Salvare", "attr" => ["class" => "btn btn-success"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Image::class,
        ]);
    }
}