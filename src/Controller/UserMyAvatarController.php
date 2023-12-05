<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserMyAvatarController extends AbstractController
{
    #[Route('/user/my/avatar', name: 'app_user_my_avatar')]
    public function index(): Response
    {
        return $this->render('user_my_avatar/index.html.twig', [
            'controller_name' => 'UserMyAvatarController',
        ]);
    }
}
