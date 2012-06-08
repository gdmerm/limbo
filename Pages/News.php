<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 6/7/12
 * Time: 8:49 AM
 * To change this template use File | Settings | File Templates.
 */
class News extends LMBPageController
{

    public function initialize()
    {
        TMPLPageController::setTemplateFile("templates/news.php");

        //Get genres for top navigation
        $db = Limbo::getDb();
        $prodController = new Products();
        $prodController->setDBlink($db);
        $genres = $prodController->listGenres();
        TMPLPageController::appendToView('genres', $genres);
    }
}
