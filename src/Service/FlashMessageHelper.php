<?php
namespace App\Service;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\FlashMessageHelperInterface;

class FlashMessageHelper implements FlashMessageHelperInterface
{
	public function __construct(
		private RequestStack $requestStack
	) {}
	
	public function addFormErrorsAsFlash(FormInterface $form) : void
	{
		$flashBag = $this->requestStack->getSession()->getFlashBag();
		
		$messageFlash = "";
		
		$errors = $form->getErrors(true);
		
		foreach ($errors as $error)
		{
			$errorMsg = $error->getMessage();
			
			$messageFlash .= $errorMsg . " ";
		}
		
		$flashBag->add("erreur", $messageFlash);
	}
}
