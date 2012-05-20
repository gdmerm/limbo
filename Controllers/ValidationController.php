<?php
class ValidationController
{
	private $db;


	public function usernameTaken($username) {
		$sql = "select count(*) cnt from users where firstName =?";
		$db = $this->getDbLink();
		$stmt = $db->stmt_init();
		$isTaken = 0;
		if ($stmt->prepare($sql)){
			$stmt->bind_param("s", $username);
			$stmt->execute();
			$result = $stmt->get_result();
			$result = $result->fetch_assoc();
			if ($result['cnt'] >0 ) $isTaken = 1;
		}
		return $isTaken;
	}

	public function getDbLink()
	{
		return $this->db;
	}

	public function setDbLink($db)
	{
		$this->db = $db;
	}


}
