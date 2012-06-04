<?php
class ProductActions extends LMBPageController
{

	public function initialize()
	{
		$term = (isset($_GET['term'])) ? (string) $_GET['term'] : "";

		$productsController = new Products();
		$productsController->setDBlink(Limbo::getDb());

		echo json_encode($productsController->getBySearchTerm($term));
	}
}
