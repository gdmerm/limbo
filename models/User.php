<?php

class User
{
	private $uid;

	static public $isGuest = true;
	static public $membership = null;

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