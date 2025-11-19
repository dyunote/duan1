<?php
require_once "./Models/Product.php";

class PageController {

    public function addProductForm() {
        include "./Views/add_product.php";
    }

    public function storeProduct() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $brand_id = $_POST['brand_id'];
            $category_id = $_POST['category_id'];

            $product = new Product();

            if ($product->insert($name, $price, $description, $brand_id, $category_id)) {
                echo "Thêm sản phẩm thành công!";
            } else {
                echo "Lỗi khi thêm sản phẩm!";
            }
        }
    }
}
?>
