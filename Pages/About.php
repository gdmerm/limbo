<?php

class About extends LMBPageController
{

	public function initialize()
	{
		TMPLPageController::setTemplateFile("templates/about.php");

		//Get genres for top navigation
        $db = Limbo::getDb();
		$prodController = new Products();
		$prodController->setDBlink($db);
		$genres = $prodController->listGenres();
		TMPLPageController::appendToView('genres', $genres);

		//append member info if any
		LoginController::getUserInfo();
		if (!User::$isGuest) {
			TMPLPageController::appendToView("member", User::$membership);
		} else {
			TMPLPageController::appendToView("member", null);
		}
	}
}
