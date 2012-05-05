<?php

class LoginController {

    private $dblink;

    public function checkLogin($email, $password) {
        $db = $this->getDblink();
        $sql = "select uid, count(*) noofusers from users where email=? and password=password(?)";
        $stmt = $db->stmt_init();
        if ($stmt->prepare($sql)) {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            $result = $result->fetch_assoc();
            if ($result["noofusers"] > 0) {
				$this->setUserAsLoggedIn($result['uid']);
				return true;
            } else {
				return false;
			}
        }
    }

    public function setUserAsLoggedIn($uid) {
        $_SESSION["auth_valid"] = true;
		$_SESSION["auth_user_id"] = $uid;
    }

    public function getDblink() {
        return $this->dblink;
    }

    public function setDblink($dblink) {
        $this->dblink = $dblink;
    }

    public static function  securePage() {
        if (!isset($_SESSION["auth_valid"]) || $_SESSION["auth_valid"] != true ) {
            echo "you are not logged in!";
            exit;
        }
    }

	public static function getUserInfo() {
		if (isset($_SESSION["auth_valid"]) && $_SESSION["auth_valid"] === true ) {
			$uid = $_SESSION["auth_user_id"];
			$userController = new UsersController();
			$userController->setDBlink(Limbo::getDb());
			$user = $userController->getSingleById($uid);
			User::$isGuest = false;
			User::$membership = $user->getFields();;
		}
	}


}

?>