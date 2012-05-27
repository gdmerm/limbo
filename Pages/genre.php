<?php
class Genre
{
    public function initialize() {
		$db = Limbo::getDb();

		//setup configuration
		$pageConfiguration = parse_ini_file("configuration/genres.ini", 1);
		Limbo::setConfiguration($pageConfiguration);
		$genre_config = Limbo::getConfiguration();

        //controller code here
        TMPLPageController::appendToView("queryString", $_GET);
        TMPLPageController::setTemplateFile("templates/genre.php");

		$genre = $_GET["g"];

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

		$games = $prodController->getByGenre($genre);
		TMPLPageController::appendToView("games", $games);
    }
}
?>