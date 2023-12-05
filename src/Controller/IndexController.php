<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
	#[Route('/indexTruc', name: 'app_index')]
	public function index(): Response
	{
		return $this->render(
			'index/index.html.twig',
			[
				'controller_name' => 'IndexController',
			]
		);
	}
	
	#[Route('/index', name: 'index_get', methods: ["GET"])]
	public function routeIndex(): Response
	{
		return $this->render('index/index.html.twig');
	}
}
