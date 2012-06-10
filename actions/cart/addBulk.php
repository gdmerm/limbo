<?php
class cart extends LMBPageController
{
	public function initialize()
	{
		//collect parameters
		$productids = (isset($_GET['id'])) ? $_GET['id'] : 0;
		$specialOffer = (isset($_GET['offer'])) ? $_GET['offer'] : null;
		$listProductIds = explode(",", $productids);
		$sessionid = session_id();
		$now = new DateTime();
		$mysqldate = $now->format("Ymd 00:00:00");

		$specialOffers = array(
			"offeroftheday" => array(
				"1" => '24.99',
				"18" => '19.99',
			)
		);


		if (!$listProductIds)
			die("Incorrect productid parameter!");

		$db = Limbo::getDb();
		$shoppingCartController = new ShoppingCartController();
		$productsController = new Products();

		$productsController->setDBlink(Limbo::getDb());
		$shoppingCartController->setDBlink(Limbo::getDb());


		foreach ($listProductIds as $productid) {
			if (!is_null($specialOffer)) {
				$productPrice = $specialOffers[$specialOffer][$productid];
			} else {
				$productPrice = $productsController->getPrice($productid);
			}
			if ($shoppingCartController->alreadyCheckedIn($productid, $sessionid)) {
				continue;
			} else {
				//insert action
				$cartFields = array(
					'productid' => $productid,
					'cartSessionId' => $sessionid,
					'priceEach' => $productPrice,
					'creationDate' => $mysqldate,
				);
				$shoppingCartController->save($cartFields);
			}
		}
		Limbo::redirect("/cart");
	}
}
