<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 4/15/12
 * Time: 12:16 PM
 * To change this template use File | Settings | File Templates.
 */
abstract class DBTableController {
    private $dblink;
    private $contract;
    private $dbTable;

    public function setContract($contract) {
        $this->contract = $contract;
    }

    public function setDBlink($dblink) {
        $this->dblink = $dblink;
    }

    public function setDBTable($dbTable) {
        $this->dbTable = $dbTable;
    }

    public function getContract() {
        return $this->contract;
    }

    public function getJSONContract() {
        return json_encode($this->contract);
    }

    public function getDBTable() {
        return $this->dbTable;
    }

    public function getDBlink() {
        return $this->dblink;
    }

    abstract public function save($model);

    abstract public function getSingleById($modelID);

    abstract public function delete($modelID);

    abstract public function update($model);
}
