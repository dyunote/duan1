<?php
require_once "Database.php";

class Product {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function insert($name, $price, $description, $brand_id, $category_id) {
        $sql = "INSERT INTO product (name, price, description, brand_id, category_id)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sdsii", $name, $price, $description, $brand_id, $category_id);

        return $stmt->execute();
    }
}
?>
