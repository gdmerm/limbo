<?php
/**
 * actions:members:login
 */
class Members extends LMBPageController
{
	public function initialize()
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		$loginController = new LoginController();
		$loginController->setDblink(Limbo::getDb());
		if ($loginController->checkLogin($email, $password)) {
			Limbo::redirect();
		} else {
			echo "here";
		}
	}
}
