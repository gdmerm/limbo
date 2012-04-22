<?php

class LoginController {

    private $dblink;

    public function checkLogin($email, $password) {
        $success = false;
        $db = $this->getDblink();
        $sql = "select count(*) noofusers from users where email=? and password=password(?)";
        $stmt = $db->stmt_init();
        if ($stmt->prepare($sql)) {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            $result = $result->fetch_assoc();
            if ($result["noofusers"] > 0) {
                $success = true;
            }
        }
        return $success;
    }

    public function loginUser() {
        $_SESSION["auth_valid"] = true;
    }

    public function getDblink() {
        return $this->dblink;
    }

    public function setDblink($dblink) {
        $this->dblink = $dblink;
    }


}

?>