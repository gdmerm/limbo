<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 6/7/12
 * Time: 8:49 AM
 * To change this template use File | Settings | File Templates.
 */
class About extends LMBPageController
{

	public function initialize()
	{
		TMPLPageController::setTemplateFile("templates/about.php");

		//Get genres for top navigation
		$prodController = new Products();
		$prodController->setDBlink($db);
		$genres = $prodController->listGenres();
		TMPLPageController::appendToView('genres', $genres);
	}
}
