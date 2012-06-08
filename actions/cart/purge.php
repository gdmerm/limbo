<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 6/8/12
 * Time: 11:40 AM
 * To change this template use File | Settings | File Templates.
 */
class Cart extends LMBPageController
{
	public function initialize()
	{
		$cart = new ShoppingCartController();
		$cart->setDBlink(Limbo::getDb());
		$sessionid = session_id();
		$cart->emptyAll($sessionid);
	}
}
