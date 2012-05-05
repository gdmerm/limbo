<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 5/5/12
 * Time: 11:44 AM
 * To change this template use File | Settings | File Templates.
 */
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
		// TODO: Implement save() method.
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
		// TODO: Implement update() method.
	}
}
