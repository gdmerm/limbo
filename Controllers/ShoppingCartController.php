<?php
class ShoppingCartController extends DBTableController
{

	private $sqlStatements = array(
		'INSERT' => "insert into shoppingCart (productid, cartSessionId, priceEach, creationDate) values (?,?,?,?)",
		'UPDATE' => "update shoppingCart set priceEach=? where productid=? and cartSessionId=?",
		'CHECKEDIN' => "select count(productid) noofitems from shoppingCart where productid=? and cartSessionId=?",
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

	public function delete($modelID)
	{
		// TODO: Implement delete() method.
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
