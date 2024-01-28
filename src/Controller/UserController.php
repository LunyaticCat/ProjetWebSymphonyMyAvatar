<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserType;
use App\Service\FlashMessageHelperInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\UserManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends AbstractController
{
	#[Route('/user', name: 'app_user')]
	public function index(): Response
	{
		return $this->render(
			'user/index.html.twig',
			[
				'controller_name' => 'UserController',
			]
		);
	}
	
	#[Route('/inscription', name: 'inscription', methods: ["GET", "POST"])]
	public function inscription(UserManagerInterface $umi, FlashMessageHelperInterface $fmhi, RequestStack $requestStack, Request $request, UserRepository $repository, EntityManagerInterface $entityManager): Response
	{
		if($this->isGranted('ROLE_USER'))
		{
			return $this->redirectToRoute('index_get');
		}
		
		$user = new User();

		$formUser = $this->createForm(
			UserType::class, $user,
			[
				'method' => 'POST',
				'action' => $this->generateURL('inscription')
			]
		);
		
		// Traitement du formulaire.
		$formUser->handleRequest($request);
		
		$erreur = "";
		
		if($formUser->isSubmitted() && $formUser->isValid())
		{
			$umi->processNewUser($user, $formUser["plainPassword"]->getData(), $formUser["profilePictureFile"]->getData());
			$entityManager->persist($user);
			$entityManager->flush();
			
			$flashBag = $requestStack->getSession()->getFlashBag();
			$flashBag->add("succes", "Inscription bien réalisée !");
			
			return $this->redirectToRoute('index_get');
		}
		else if($formUser->isSubmitted() && !$formUser->isValid())
		{
			$fmhi->addFormErrorsAsFlash($formUser);
			
			$erreur = $requestStack->getSession()->getFlashBag()->get("erreur")[0];
		}
		
		$label = [
			'login' => "Login :",
			'mdp' => "Mot de passe :",
			'adresseEmail' => "Adresse E-mail :",
			'pdp' => "Photo de profil :"
		];
		
		return $this->render(
			'user/inscription.html.twig',
			[
				'label' => $label,
				'formUser' => $formUser,
				'erreur' => $erreur
			]
		);
	}
	
	#[Route('/connexion', name: 'connexion', methods: ['GET', 'POST'])]
	public function connexion(AuthenticationUtils $authenticationUtils) : Response
	{
		if($this->isGranted('ROLE_USER'))
		{
			return $this->redirectToRoute('index_get');
		}
		
		$lastUsername = $authenticationUtils->getLastUsername();
		
		return $this->render(
			'user/connexion.html.twig',
			[
				'lastUsername' => $lastUsername
			]
		);
	}
	
	#[Route('/deconnexion', name: 'deconnexion', methods: ['POST'])]
	public function routeDeconnexion(): never
	{
		//Ne sera jamais appelée
		throw new \Exception("Cette route n'est pas censée être appelée. Vérifiez security.yaml");
	}
	
	#[Route('/avatar/', name: 'avatar_get_empty', options: ["expose" => true], methods: ["GET"])]
	public function pictureDefault(): Response
	{
		return new BinaryFileResponse("img/anonyme.jpg");
	}
	
	#[Route('/avatar/{emailHash}', name: 'avatar_get', options: ["expose" => true], methods: ["GET"])]
	public function picture(UserManagerInterface $umi, Request $request, EntityManagerInterface $entityManager, UserRepository $repository, string $emailHash): Response
	{
		if($emailHash === null)
			return new BinaryFileResponse("img/anonyme.jpg");
		
		$tabUsers = $repository->getAllUsers();
		
		$verif = true;
		
		for($i=0;$i<count($tabUsers);++$i)
		{
			if($emailHash == md5($tabUsers[$i]->getEmail()))
			{
				return new BinaryFileResponse($umi->getPictureProfilePath($tabUsers[$i]->getPictureUrl()));
			}
		}
		
		return new BinaryFileResponse("img/anonyme.jpg");
	}
	
	#[Route('/update', name: 'update', methods: ["GET", "POST"])]
	public function updateProfile(UserManagerInterface $umi, FlashMessageHelperInterface $fmhi, RequestStack $requestStack, Request $request, UserRepository $repository, EntityManagerInterface $entityManager): Response
	{
		if(!$this->isGranted('ROLE_USER'))
		{
			return $this->redirectToRoute('index_get');
		}
		
		$user = $this->getUser();

		$formUser = $this->createForm(
			UserType::class, $user,
			[
				'method' => 'POST',
				'action' => $this->generateURL('update')
			]
		);
		
		$formUser->remove('login');
		$formUser->remove('plainPassword');
		
		// Traitement du formulaire.
		$formUser->handleRequest($request);
		
		$erreur = "";
		
		if($formUser->isSubmitted() && $formUser->isValid())
		{
			$umi->updatePictureProfile($user, $formUser["profilePictureFile"]->getData());
			$entityManager->persist($user);
			$entityManager->flush();
			
			$flashBag = $requestStack->getSession()->getFlashBag();
			$flashBag->add("succes", "Modification bien réalisée !");
			
			return $this->redirectToRoute('index_get');
		}
		else if($formUser->isSubmitted() && !$formUser->isValid())
		{
			$fmhi->addFormErrorsAsFlash($formUser);
			
			$erreur = $requestStack->getSession()->getFlashBag()->get("erreur")[0];
		}
		
		$label = [
			'adresseEmail' => "Adresse E-mail :",
			'pdp' => "Photo de profil :"
		];
		
		return $this->render(
			'user/update.html.twig',
			[
				'label' => $label,
				'formUser' => $formUser,
				'erreur' => $erreur
			]
		);
	}
	
	#[Route('/delete', name: 'delete', methods: ['GET', 'POST'])]
	public function delete(UserManagerInterface $umi, FlashMessageHelperInterface $fmhi, RequestStack $requestStack, Request $request, UserRepository $repository, EntityManagerInterface $entityManager) : Response
	{
		if(!$this->isGranted('ROLE_USER'))
		{
			return $this->redirectToRoute('index_get');
		}
		
		$user = $this->getUser();

		$formUser = $this->createForm(
			UserType::class, $user,
			[
				'method' => 'POST',
				'action' => $this->generateURL('delete')
			]
		);
		
		$formUser->remove('login');
		$formUser->remove('email');
		$formUser->remove('plainPassword');
		$formUser->remove('profilePictureFile');
		
		// Traitement du formulaire.
		$formUser->handleRequest($request);
		
		$erreur = "";
		
		if($formUser->isSubmitted() && $formUser->isValid())
		{
			$session = $request->getSession();
			$session = new Session();
			$session->invalidate();
			
			$session = $requestStack->getSession();
			$session = new Session();
			$session->invalidate();
			
			$entityManager->remove($user);
			$entityManager->flush();
			
			$flashBag = $requestStack->getSession()->getFlashBag();
			$flashBag->add("succes", "Modification bien réalisée !");
			
			return $this->redirectToRoute('index_get');
		}
		else if($formUser->isSubmitted() && !$formUser->isValid())
		{
			$fmhi->addFormErrorsAsFlash($formUser);
			
			$erreur = $requestStack->getSession()->getFlashBag()->get("erreur")[0];
		}
		
		return $this->render(
			'user/delete.html.twig',
			[
				'formUser' => $formUser,
				'erreur' => $erreur
			]
		);
	}
}
