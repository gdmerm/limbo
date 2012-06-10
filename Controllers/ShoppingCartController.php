<?php
class ShoppingCartController extends DBTableController
{

	private $sqlStatements = array(
		'INSERT' => "insert into shoppingCart (productid, cartSessionId, priceEach, creationDate) values (?,?,?,?)",
		'UPDATE' => "update shoppingCart set priceEach=? where productid=? and cartSessionId=?",
		'CHECKEDIN' => "select count(productid) noofitems from shoppingCart where productid=? and cartSessionId=?",
		'LIST_CART' => "select p.name, p.genre, p.releaseDate, s.priceEach, p.discountPercent, s.productid from products p, shoppingCart s where s.cartSessionId=? and s.productid = p.productid",
		'DELETE_ITEM' => "delete from shoppingCart where productid=?",
		'EMPTY_CART' => "delete from shoppingCart where cartSessionId=?"
	);

	private $fields = array(
		'productid' => null,
		'cartSessionId' => null,
		'priceEach' => 0,
		'creationDate' => '19000101 00:00:00'
	);

	function __construct()
	{
		$this->setDBTable("shoppingCart");
	}

	public function setFields($fields) {
		foreach ($fields as $key => $value) {
			$this->fields[$key] = $value;
		}
	}

	public function save($model)
	{
		// TODO: Implement save() method.
		$this->setFields($model);
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["INSERT"];
		$stmt = $db->stmt_init();
		$stmt->prepare($sql);
		$stmt->bind_param("issd", $this->fields["productid"], $this->fields["cartSessionId"], $this->fields["priceEach"], $this->fields["creationDate"]);
		$stmt->execute();
		$stmt->close();
		return $db->insert_id;
	}

	public function getSingleById($modelID)
	{
		// TODO: Implement getSingleById() method.
	}

	public function listCart($sessionid) {
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["LIST_CART"];
		$stmt = $db->stmt_init();
		$results = array();
		$results_index = 0;
		if ($stmt->prepare($sql)) {
			$stmt->bind_param("s", $sessionid);
			$stmt->execute();
			$stmt->bind_result($name, $genre, $releaseDate, $priceEach, $discount, $productid);
			while ($stmt->fetch()) {
				$results[$results_index] = array(
					"productid" => $productid,
					"name" => $name,
					"genre" => $genre,
					"releaseDate" => $releaseDate,
					"price" => $priceEach,
					"discount" => $discount,
				);
				$results_index++;
			}
		}
		$stmt->close();
		return $results;
	}

	public function delete($modelID)
	{
		// TODO: Implement delete() method.
	}

	public function removeItem($itemid)
	{
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["DELETE_ITEM"];
		$stmt = $db->stmt_init();
		$stmt->prepare($sql);
		$stmt->bind_param("i", $itemid);
		$stmt->execute();
		$stmt->close();
	}

	public function emptyAll($sessionid)
	{
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["EMPTY_CART"];
		$stmt = $db->stmt_init();
		$stmt->prepare($sql);
		$stmt->bind_param("s", $sessionid);
		$stmt->execute();
		$stmt->close();
	}

	public function update($model)
	{
		$this->setFields($model);
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["UPDATE"];
		$stmt = $db->stmt_init();
		$stmt->prepare($sql);
		$stmt->bind_param("sdd", $this->fields["priceEach"], $this->fields["productid"], $this->fields["cartSessionId"]);
		$stmt->execute();
		$stmt->close();
		return $db->insert_id;
	}

	public function alreadyCheckedIn($productid, $sessionid)
	{
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["CHECKEDIN"];
		$data = null;
		$stmt = $db->stmt_init();
		$noofitems = 0;
		if ($stmt->prepare($sql)) {
			$stmt->bind_param("is", $productid, $sessionid);
			$stmt->execute();
			$result = $stmt->get_result();
			$data = $result->fetch_assoc();
			$noofitems = $data['noofitems'];
			$stmt->close();
		}
		if ($noofitems)
			return true;
		else
			return false;
	}
}
