<?php
require_once "./Controllers/PageController.php";

$controller = new PageController();

$action = $_GET['action'] ?? 'addProductForm';

switch ($action) {

    case "addProductForm":
        $controller->addProductForm();
        break;

    case "storeProduct":
        $controller->storeProduct();
        break;

    default:
        echo "Không tìm thấy action!";
}
?>
