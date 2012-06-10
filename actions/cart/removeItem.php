<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 6/8/12
 * Time: 10:27 AM
 * To change this template use File | Settings | File Templates.
 */
class cart extends LMBPageController
{
	public function initialize()
	{
		$itemid = (isset($_GET['id'])) ? (int) $_GET['id'] : 0;
		if ($itemid === 0)
			Limbo::redirect();
		$cart = new ShoppingCartController();
		$cart->setDBlink(Limbo::getDb());
		$cart->removeItem($itemid);
		Limbo::redirect("/cart");
	}
}
