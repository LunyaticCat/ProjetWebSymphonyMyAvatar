<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Regex;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
			'login',
			TextType::class,
			[
				'attr' => [
					'minlength' => 4,
					'maxlength' => 20
				]
			]
            )
            ->add('email', EmailType::class)
            ->add(
			'plainPassword',
			PasswordType::class,
			[
				"mapped" => false,
				"constraints" => [
					new NotBlank(),
					new NotNull(),
					new Length(
						min: 8,
						max: 30,
						minMessage: "Il faut au moins 8 caractères !",
						maxMessage: "Il faut moins de 30 caractères !"
					),
					new Regex("#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,30}$#", message: "Il faut au moins une minuscule, une majuscule et un chiffre !")
				]
			]
            )
            ->add(
			'profilePictureFile',
			FileType::class,
			[
				"mapped" => false,
				"constraints" => [
					new NotNull(),
					new File(
						maxSize: '2M',
						maxSizeMessage: 'La taille doit être inférieure à 2Mo !',
						extensions: [
							'jpg',
							'png'
						],
						extensionsMessage: 'Les extensions acceptées sont jpg et png !'
					),
				]
			]
            )
            ->add('SignIn', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
