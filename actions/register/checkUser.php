<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 5/20/12
 * Time: 2:08 PM
 * To change this template use File | Settings | File Templates.
 */
class Register extends LMBPageController
{
	public function initialize()
	{
		$db = Limbo::getDb();
		$validator = new ValidationController();
		$validator->setDbLink($db);

		$username = isset($_GET['username']) ? $_GET['username'] : '';

		$result = $validator->usernameTaken($username);
		$output = array(
			"success" => true,
			"content" => array(
				"isTaken" => $result
			)
		);
		$output = json_encode($output);
		echo $output;
	}
}
