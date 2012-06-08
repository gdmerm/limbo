<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 6/8/12
 * Time: 8:56 AM
 * To change this template use File | Settings | File Templates.
 */
class Checkout extends LMBPageController
{
	public function initialize()
	{
		LoginController::getUserInfo();
		if (User::$isGuest)
			header('Location: /limbo');

		$db = Limbo::getDb();
		LoginController::getUserInfo();
		TMPLPageController::appendToView("queryString", $_GET);
		TMPLPageController::setTemplateFile("templates/checkout.php");


		$shoppingCartController = new ShoppingCartController();
		$shoppingCartController->setDBlink($db);
		$cartProducts = $shoppingCartController->listCart(session_id());

		TMPLPageController::appendToView("cartProducts", $cartProducts);

		//Get genres for top navigation
		$prodController = new Products();
		$prodController->setDBlink($db);
		$genres = $prodController->listGenres();
		TMPLPageController::appendToView('genres', $genres);

		//append member info if any
		if (!User::$isGuest) {
			TMPLPageController::appendToView("member", User::$membership);
		} else {
			TMPLPageController::appendToView("member", null);
		}
	}
}
