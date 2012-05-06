<?php

class Game extends LMBPageController
{

	public function initialize()
	{
		$db = Limbo::getDb();
		LoginController::getUserInfo();
		TMPLPageController::appendToView("queryString", $_GET);
		TMPLPageController::setTemplateFile("templates/game.php");
	}
}

?>
