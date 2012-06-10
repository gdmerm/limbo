<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 6/3/12
 * Time: 11:06 AM
 * To change this template use File | Settings | File Templates.
 */
class Cart extends LMBPageController
{
	public function initialize()
	{
		//collect parameters
		$config = Limbo::getConfiguration();
		$productid = (isset($_GET['id'])) ? (int) $_GET['id'] : 0;
		$sessionid = session_id();
		$now = new DateTime();
		$mysqldate = $now->format("Ymd 00:00:00");
		if (!$productid)
			die("Incorrect productid parameter!");

		$db = Limbo::getDb();
		$shoppingCartController = new ShoppingCartController();
		$productsController = new Products();

		$productsController->setDBlink(Limbo::getDb());
		$shoppingCartController->setDBlink(Limbo::getDb());
		$productPrice = $productsController->getPrice($productid);

		if ($shoppingCartController->alreadyCheckedIn($productid, $sessionid)) {
			header('Location: ' . $config['root'] . '/cart');
		} else {
			//insert action
			$cartFields = array(
				'productid' => $productid,
				'cartSessionId' => $sessionid,
				'priceEach' => $productPrice,
				'creationDate' => $mysqldate,
			);
			$shoppingCartController->save($cartFields);
			header('Location: ' . $config['root'] . '/cart');
		}

	}
}
