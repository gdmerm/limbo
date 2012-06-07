<?php

class Cart extends LMBPageController
{

	public function initialize()
	{
		$db = Limbo::getDb();
		LoginController::getUserInfo();
		TMPLPageController::appendToView("queryString", $_GET);
		TMPLPageController::setTemplateFile("templates/cart.php");


		$shoppingCartController = new ShoppingCartController();
		$shoppingCartController->setDBlink($db);
		$cartProducts = $shoppingCartController->listCart(session_id());

		TMPLPageController::appendToView("cartProducts", $cartProducts);

		//Get genres for top navigation
		$prodController = new Products();
		$prodController->setDBlink($db);
		$genres = $prodController->listGenres();
		TMPLPageController::appendToView('genres', $genres);

	}
}

?>
