<?php

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

    public function arrayGroupBy($input,$sortkey){
        foreach ($input as $key=>$val) $output[$val[$sortkey]][]=$val;
        return $output;
    }

    abstract public function save($model);

    abstract public function getSingleById($modelID);

    abstract public function delete($modelID);

    abstract public function update($model);
}
