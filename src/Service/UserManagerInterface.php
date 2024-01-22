<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;

interface UserManagerInterface
{
	public function processNewUser(User $user, ?string $plainPassword, ?UploadedFile $pictureProfile) : void;
}
