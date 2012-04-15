<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 4/15/12
 * Time: 12:26 PM
 * To change this template use File | Settings | File Templates.
 */
class Products extends DBTableController {

    private $sqlStatements = array(
        "INSERT" => "insert into products (`name`, `studio`, `publisher`, `languages`, `multiplayer`, `description`, `genre`, `releaseDate`, `rating`, `price`, `discountPercent`) values (?,?,?,?,?,?,?,?,?,?,?)",
        "UPDATE" => "update products set `name`=?, `studio`=?, `publisher`=?, `languages`=?, `multiplayer`=?, `description`=?, `genre`=?, `releaseDate`=?, `rating`=?, `price`=?, `discountPercent`=? where `productid`=?",
        "SELECT" => "select * from products where productid=?",
        "DELETE" => "delete from products where productid=?"
    );

    private $fields = array(
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
        "discountPercent" => 0
    );

    function __construct() {
        $this->setDBTable("products");
    }

    private function setFields($fields) {
        foreach ($fields as $key => $value) {
            $this->fields[$key] = $value;
        }
    }

    public function save($fields) {
        $this->setFields($fields);
        $db = $this->getDBlink();
        $sql = $this->sqlStatements["INSERT"];
        $stmt = $db->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param("ssssisssidi", $this->fields["name"], $this->fields["studio"], $this->fields["publisher"], $this->fields["languages"], $this->fields["multiplayer"], $this->fields["description"], $this->fields["genre"], $this->fields["releaseDate"], $this->fields["rating"], $this->fields["price"], $this->fields["discountPercent"]);
        $stmt->execute();
        return $db->insert_id;
    }

    public function getSingleById($productid) {
        $db = $this->getDBlink();
        $sql = $this->sqlStatements["SELECT"];
        $stmt = $db->stmt_init();
        if ($stmt->prepare($sql)){
            $stmt->bind_param("i", $productid);
            $stmt->execute();
            $result = $stmt->get_result();
            $this->setContract($result->fetch_assoc());
        }
        //return $this->getContract();
        $product = new Product($productid);
        $product->setFields($this->getContract());
        return $product;
    }

    public function delete($productid) {
        $db = $this->getDBlink();
        $sql = $this->sqlStatements["DELETE"];
        $stmt = $db->stmt_init();
        if ($stmt->prepare($sql)) {
            $stmt->bind_param("i", $productid);
            $stmt->execute();
        }
    }

    public function update($productid) {
        //some code here
    }
}
