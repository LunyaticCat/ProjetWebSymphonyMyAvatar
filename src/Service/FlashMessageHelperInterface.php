<?php
namespace App\Service;

use Symfony\Component\Form\FormInterface;

interface FlashMessageHelperInterface
{
	public function addFormErrorsAsFlash(FormInterface $form) : void;
}
