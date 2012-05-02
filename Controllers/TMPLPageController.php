<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 4/15/12
 * Time: 8:26 PM
 * To change this template use File | Settings | File Templates.
 */
class TMPLPageController {
    public static $viewData = array("data" => null);
    private static $templateFile;
    private $db;

    public function getViewData() {
        return self::$viewData;
    }

	public function getJSONViewData() {
		return json_encode(self::$viewData);
	}

    public static function appendToView($key, $collection) {
        self::$viewData["data"][$key] = $collection;
    }

    public static function setTemplateFile($templateFile) {
        self::$templateFile = $templateFile;
    }

    public static function getTemplateFile() {
        return self::$templateFile;
    }

    public static function renderTemplate() {
        if (isset($_GET["debug"])){
            header('Cache-Control: no-cache, must-revalidate');
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            header('Content-type: application/json');
            if ($_GET["debug"] == "data") {
                echo json_encode(self::$viewData);
            } else {
                $data = self::$viewData["data"][$_GET["debug"]];
                echo json_encode($data);
            }
            exit;
        }
        $viewData = json_encode(self::$viewData);
        $templatePath = self::getTemplateFile();
        include($templatePath);
    }
}
