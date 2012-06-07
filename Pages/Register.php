<?php
class Register extends LMBPageController
{
  public function initialize() {
	  //controller code here
	  $db = Limbo::getDb();
	  TMPLPageController::appendToView("queryString", $_GET);
	  TMPLPageController::setTemplateFile("templates/register.php");

	  /*
	  LoginController::getUserInfo();
	  //append member info if any
	  if (!User::$isGuest) {
		  TMPLPageController::appendToView("member", User::$membership);
	  } else {
		  TMPLPageController::appendToView("member", null);
	  }
	  */

	  //Get genres for top navigation
	  $prodController = new Products();
	  $prodController->setDBlink($db);
	  $genres = $prodController->listGenres();
	  TMPLPageController::appendToView('genres', $genres);
  }
}
?>
