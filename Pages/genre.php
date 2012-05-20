<?php
class Genre
{
    public function initialize() {
        //controller code here
        TMPLPageController::appendToView("queryString", $_GET);
        TMPLPageController::setTemplateFile("templates/genre.php");
    }
}
?>