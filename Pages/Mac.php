<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 6/7/12
 * Time: 8:52 AM
 * To change this template use File | Settings | File Templates.
 */
class Mac extends LMBPageController
{

	public function initialize()
	{
		$db = Limbo::getDb();

		//setup configuration
		$pageConfiguration = parse_ini_file("configuration/genres.ini", 1);
		Limbo::setConfiguration($pageConfiguration);
		$genre_config = Limbo::getConfiguration();

		//controller code here
		TMPLPageController::appendToView("queryString", $_GET);
		TMPLPageController::setTemplateFile("templates/mac.php");

		//obtain list of games
		$prodController = new Products();
		$prodController->setDBlink($db);

		//set day offer
		$dayOffers = array(
			"games" => array(),
			"promoText" => null
		);
		foreach ($genre_config['dayOffer'] as $productid) {
			$product = $prodController->getSingleById($productid);
			array_push($dayOffers['games'], $product->getFields());
		}
		$dayOffers['promoText'] = $genre_config['dayOffer_promoText'];
		TMPLPageController::appendToView('dayOffers', $dayOffers);

		//Get genres for top navigation
		$genres = $prodController->listGenres();
		TMPLPageController::appendToView('genres', $genres);

		$format='MAC';
		$games = $prodController->getByFormat($format);
		TMPLPageController::appendToView("games", $games);

		//append member info if any
		LoginController::getUserInfo();
		if (!User::$isGuest) {
			TMPLPageController::appendToView("member", User::$membership);
		} else {
			TMPLPageController::appendToView("member", null);
		}
	}
}
