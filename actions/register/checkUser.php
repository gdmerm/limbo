<?php

class Register extends LMBPageController
{
	public function initialize()
	{
		$db = Limbo::getDb();
		$validator = new ValidationController();
		$validator->setDbLink($db);

		$username = isset($_GET['username']) ? $_GET['username'] : '';

		$output = "";
		if (trim($username) !== "") {
			$result = $validator->usernameTaken($username);
			$output = array(
				"success" => true,
				"content" => array(
					"isTaken" => $result
				)
			);
			$output = json_encode($output);
		}
		echo $output;
	}
}
