<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 4/15/12
 * Time: 10:00 AM
 * To change this template use File | Settings | File Templates.
 */

class Product {
    private $productid;
    private  $fields = array(
        "name" => "",
        "studio" => "",
        "publisher" => "",
        "languages" => "",
        "multiplayer" => 0,
        "description" => "",
        "genre" => "",
        "releaseDate" => "19000101",
        "rating" => 0,
        "price" => 0.00,
        "discountPercent" => 0,
        "format" => ""
    );

    function __construct ($productid) {
        $this->productid = $productid;
    }

    function getProductID() {
        return $this->productid;
    }

    public function setProductid($productid) {
        $this->productid = $productid;
    }

    public function getFields() {
        return $this->fields;
    }

    public function jsonize() {
        return json_encode($this->fields);
    }

    public function setFields($fields) {
        $this->fields = $fields;
    }

}

?>