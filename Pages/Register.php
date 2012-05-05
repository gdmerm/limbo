<?php
class Register extends LMBPageController
{
  public function initialize() {
	  //controller code here
	  $db = Limbo::getDb();
	  TMPLPageController::appendToView("queryString", $_GET);
	  TMPLPageController::setTemplateFile("templates/register.php");

	  $userController = new UsersController();
	  $userController->setDBlink($db);

	  //assume that the same page is used for form postBack
	  $postBack = (count($_POST) > 0) ? true : false;
	  //TMPLPageController::appendToView("postback", $postBack);

	  if ($postBack) {
		  $user = new User(0);
		  $userFields = array(
			  "email" => $_POST["email"],
			  "firstName" => $_POST["firstName"],
			  "password" => $_POST["password"],
			  "secret" => $_POST["secret"]
		  );
		  $userController->save($userFields);
	  }
  }
}
?>
