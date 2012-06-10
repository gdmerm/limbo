<?php

class UsersController extends DBTableController
{
	private $sqlStatements = array(
		"INSERT" => "insert into users (email, firstName, lastName, password, scrambledid, secret) values (?,?,?,PASSWORD(?),?,?)",
		"SELECT" => "select * from users where uid=?"
	);

	private $fields = array(
		'email' => '',
		'firstName' => '',
		'lastName' => '',
		'password' => '',
		'scrambledid' => '',
		'secret' => ''
	);

	function __construct() {
		$this->setDBTable("users");
	}

	public function setFields($fields) {
		foreach ($fields as $key => $value) {
			$this->fields[$key] = $value;
		}
	}

	public function save($model)
	{
		$this->setFields($model);
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["INSERT"];
		$stmt = $db->stmt_init();
		$stmt->prepare($sql);
		$stmt->bind_param("ssssss", $this->fields["email"], $this->fields["firstName"], $this->fields["lastName"], $this->fields["password"], $this->fields["scrambledid"], $this->fields["secret"]);
		$stmt->execute();
		$stmt->close();
		return $db->insert_id;
	}

	public function getSingleById($uid) {
		$db = $this->getDBlink();
		$sql = $this->sqlStatements["SELECT"];
		$stmt = $db->stmt_init();
		if ($stmt->prepare($sql)){
			$stmt->bind_param("i", $uid);
			$stmt->execute();
			$result = $stmt->get_result();
			$this->setContract($result->fetch_assoc());
		}
		//return $this->getContract();
		$user = new User($uid);
		$user->setFields($this->getContract());
		$stmt->close();
		return $user;
	}

	public function delete($modelID)
	{
		// TODO: Implement delete() method.
	}

	public function update($model)
	{
		// TODO: Implement update() method.
	}
}
