<?php
/**
 * SERVICE: actions:register:save
 */
class Register extends LMBPageController
{
	public function initialize()
	{
		$db = Limbo::getDb();

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
			$uid = $userController->save($userFields);

			//before redirecting to home, we must set the user as logged in!
			$login = new LoginController();
			$login->setDblink($db);
			$login->setUserAsLoggedIn($uid);

			//now redirect to home
			Limbo::redirect();
		}
	}
}
