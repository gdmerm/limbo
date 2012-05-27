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
        "DELETE" => "delete from products where productid=?",
        "SELECT_BY_GENRE" => "select * from products where genre=?",
        "FEATURED_BY_FORMAT" => "select p.productid, p.name, p.price from featuredProducts fp, products p where p.productid=fp.productid and fp.format=? order by fp.weight asc",
		"LIST_GENRES" => "select distinct genre from products order by genre",
		"SPECIAL_OFFERS" => "select productid, name, genre, releaseDate, price, discountPercent from products where discountPercent > 0",
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
        "discountPercent" => 0,
        "format" => ""
    );

    function __construct() {
        $this->setDBTable("products");
    }

	public function setFields($fields) {
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
        $stmt->close();
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
        $stmt->close();
        return $product;
    }

    public function getByGenre($genre) {
        $db = $this->getDBlink();
        $sql = $this->sqlStatements["SELECT_BY_GENRE"];
        $stmt = $db->stmt_init();
        $results = array();
        $results_index = 0;
        if ($stmt->prepare($sql)) {
            $stmt->bind_param("s", $genre);
            $stmt->execute();
            $stmt->bind_result($productid, $name, $studio, $publisher, $langs, $multiplayer, $description, $genre, $releaseDate, $rating, $price, $discountPercent, $vat, $format);
            while ($stmt->fetch()) {
                $results[$results_index] = array(
                    "productid" => $productid,
                    "name" => $name,
                    "studio" => $studio,
                    "publisher" => $publisher,
                    "languages" => $langs,
                    "multiplayer" => $multiplayer,
                    "description" => $description,
                    "genre" => $genre,
                    "releaseDate" => $releaseDate,
                    "rating" => $rating,
                    "price" => $price,
                    "discountPercent" => $discountPercent,
                    "vat" => $vat,
                    "format" => $format
                );
                $results_index++;
            }
        }
        $stmt->close();
        return $results;
        //return $this->arrayGroupBy($results, "genre");
    }

	public function getSpecialOffers() {
		$db = $this->getDBLink();
		$sql = $this->sqlStatements["SPECIAL_OFFERS"];
		$stmt = $db->stmt_init();
		$results = array();
		$results_index = 0;
		if ($stmt->prepare($sql)) {
			$stmt->execute();
			$stmt->bind_result($productid, $name, $genre, $releaseDate, $price, $discountPercent);
			while ($stmt->fetch()) {
				$results[$results_index] = array(
					"productid" => $productid,
					"name" => $name,
					"genre" => $genre,
					"releaseDate" => $releaseDate,
					"price" => $price,
					"discountPercent" => $discountPercent
				);
				$results_index++;
			}
		}
		$stmt->close();
		return $results;
	}

    public function getFeatured($format) {
        $db = $this->getDBlink();
        $sql = $this->sqlStatements["FEATURED_BY_FORMAT"];
        $stmt = $db->stmt_init();
        $results = array();
        $results_index = 0;
        if ($stmt->prepare($sql)) {
            $stmt->bind_param("s", $format);
            $stmt->execute();
            $stmt->bind_result($productid, $name, $price);
            while ($stmt->fetch()) {
                $results[$results_index] = array(
                    "productid" => $productid,
                    "name" => $name,
                    "price" => $price
                );
                $results_index++;
            }
        }
        $stmt->close();
        return $results;
    }

	public function listGenres() {
		$db = $this->getDBLink();
		$sql = $this->sqlStatements["LIST_GENRES"];
		$stmt = $db->stmt_init();
		$results = array();
		$results_index = 0;
		if ($stmt->prepare($sql)) {
			$stmt->execute();
			$stmt->bind_result($genre);
			while ($stmt->fetch()) {
				$results[$results_index] = $genre;
				$results_index++;
			}
		}
		$stmt->close();
		return $results;
	}

    public function delete($productid) {
        $db = $this->getDBlink();
        $sql = $this->sqlStatements["DELETE"];
        $stmt = $db->stmt_init();
        if ($stmt->prepare($sql)) {
            $stmt->bind_param("i", $productid);
            $stmt->execute();
        }
        $stmt->close();
    }

    public function update($productid) {
        //some code here
    }
}
