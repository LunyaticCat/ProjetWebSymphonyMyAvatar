<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column]
	private ?int $id = null;

	#[ORM\Column(length: 180, unique: true)]
	#[Assert\NotBlank]
	#[Assert\NotNull]
	#[Assert\Length(min: 4, minMessage: 'Il faut au moins 4 caractères !', max: 20, maxMessage: 'Il faut moins de 20 caractères !')]
	private ?string $login = null;

	#[ORM\Column]
	private array $roles = [];

	/**
	* @var string The hashed password
	*/
	#[ORM\Column]
	private ?string $password = null;

	#[ORM\Column(length: 255, unique: true)]
	#[Assert\NotBlank]
 	#[Assert\NotNull]
 	#[Assert\Email(message: 'Adresse e-mail invalide !')]
	private ?string $email = null;

	#[ORM\Column(length: 255, nullable: true)]
	private ?string $pictureUrl = null;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function getLogin(): ?string
	{
		return $this->login;
	}

	public function setLogin(string $login): static
	{
		$this->login = $login;
		
		return $this;
	}

	/**
	* A visual identifier that represents this user.
	*
	* @see UserInterface
	*/
	public function getUserIdentifier(): string
	{
		return (string) $this->login;
	}

	/**
	* @see UserInterface
	*/
	public function getRoles(): array
	{
		$roles = $this->roles;
		// guarantee every user at least has ROLE_USER
		$roles[] = 'ROLE_USER';
		
		return array_unique($roles);
	}

	public function setRoles(array $roles): static
	{
		$this->roles = $roles;
		
		return $this;
	}

	/**
	* @see PasswordAuthenticatedUserInterface
	*/
	public function getPassword(): string
	{
		return $this->password;
	}

	public function setPassword(string $password): static
	{
		$this->password = $password;
		
		return $this;
	}

	/**
	* @see UserInterface
	*/
	public function eraseCredentials(): void
	{
		// If you store any temporary, sensitive data on the user, clear it here
		// $this->plainPassword = null;
	}

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail(string $email): static
	{
		$this->email = $email;
		
		return $this;
	}

	public function getPictureUrl(): ?string
	{
		return $this->pictureUrl;
	}

	public function setPictureUrl(?string $pictureUrl): static
	{
		$this->pictureUrl = $pictureUrl;
		
		return $this;
	}
}
