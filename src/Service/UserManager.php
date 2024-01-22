<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Service\UtilisateurManagerInterface;

class UserManager implements UserManagerInterface
{
	public function __construct(
		#[Autowire('%profile_picture_folder%')] private string $profilePicture_Folder,
		private UserPasswordHasherInterface $passwordHasher
	){}

	/**
	 * Chiffre le mot de passe puis l'affecte au champ correspondant dans la classe de l'utilisateur
	 */
	private function hashPassword(User $user, ?string $plainPassword) : void
	{
		$hashed = $this->passwordHasher->hashPassword($user, $plainPassword);
		$user->setPassword($hashed);
	}

	/**
	 * Sauvegarde l'image de profil dans le dossier de destination puis affecte son nom au champ correspondant dans la classe de l'utilisateur
	 */
	private function savePictureProfile(User $user, ?UploadedFile $pictureProfile) : void
	{
		if($pictureProfile != null)
		{
			$fileName = uniqid().'.'.$pictureProfile->guessExtension();
			
			$pictureProfile->move($this->profilePicture_Folder, $fileName);
			
			$user->setPictureUrl($fileName);
		}
	}

	/**
	 * Réalise toutes les opérations nécessaires avant l'enregistrement en base d'un nouvel utilisateur, après soumissions du formulaire (hachage du mot de passe, sauvegarde de la photo de profil...)
	 */
	public function processNewUser(User $user, ?string $plainPassword, ?UploadedFile $pictureProfile) : void
	{
		//On chiffre le mot de passe
		//On sauvegarde (et on déplace) l'image de profil
		$this->hashPassword($user, $plainPassword);
		$this->savePictureProfile($user, $pictureProfile);
	}
}
