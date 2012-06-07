<?php

class Limbo {

	private static $db;
	private static $configuration;

	static function prepareDatabaseLink($local) {
		self::$db = new mysqli("localhost", $local["db"]["user"], $local["db"]["password"], $local["db"]["database"]);
	}

    static function dispatch($controllerId, $action) {
    	//implementation code here
		$page = new $controllerId();
		$page->initialize();
		if ($action === '$view' || $action === 'view') {
			TMPLPageController::renderTemplate();
		}
    }

	public static function mysqldate($phpdate) {
		return date('Y-m-d H:i:s', $phpdate);
	}

	public static function phpdate($mysqldate) {
		return strtotime($mysqldate);
	}

	public static function getDb() {
		return self::$db;
	}

	public static function getConfiguration() {
		return self::$configuration;
	}

	public static function setConfiguration($configuration) {
		self::$configuration = $configuration;
	}

}
