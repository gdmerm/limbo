<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 5/5/12
 * Time: 11:30 AM
 * To change this template use File | Settings | File Templates.
 */
class User
{
	private $uid;

	private $fields = array(
		'email' => '',
		'firstName' => '',
		'lastName' => '',
		'password' => '',
		'scrambledid' => '',
		'secret' => ''
	);

	function __construct($id) {
		$this->uid = $id;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
	}

	public function jsonize()
	{
		return json_encode($this->fields);
	}
}
?>