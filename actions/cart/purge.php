<?php

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
