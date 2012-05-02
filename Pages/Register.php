<?php
class Register
{
  public function initialize() {
	  //controller code here
	  TMPLPageController::appendToView("queryString", $_GET);
	  TMPLPageController::setTemplateFile("templates/register.php");
  }
}
?>
