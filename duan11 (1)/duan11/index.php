<?php


require_once "controllers/AuthController.php";
require_once "controllers/AdminController.php";

$act = $_GET['act'] ?? 'article';

$auth    = new AuthController();
$layouts = new AuthController();
$menu    = new AuthController();
$banner  = new AuthController();
$product = new AuthController();
$fbzlmess = new AuthController();
$admin   = new AdminController();
$product_admin = new AdminController();

switch ($act) {
    case 'home':
        $auth->home();
        break;
    case 'product':
        $product->product();
        break;
    case 'banner':
        $banner->banner();
        break;
    case 'menu':
        $menu->menu();
        break;
    case 'article':
        $layouts->article();
        break;
    case 'login':
        $auth->login();
        break;
    case 'register':
        $auth->register();
        break;
    case 'forget':
        $auth->forget();
        break;
    case 'fbzlmess':
        $auth->fbzlmess();
        break;
    case 'news':
        $auth->news();
        break;
    case 'cart':
        $auth->cart();
        break;
    case 'service':
        $auth->service();
        break;
    case 'about':
        $auth->about();
        break;
    // ---- TRANG ADMIN DASHBOARD ----
    case 'admin-dashboard':
        $admin->dashboard();
        break;

    case 'admin-product-list':
        $admin->listProduct();
        break;

    case 'admin-product-add':
        $admin->addProduct();
        break;

    case 'admin-product-edit':
        $admin->editProduct();
        break;

    case 'admin-category-list':
        $admin->listCategory();
        break;

    case 'admin-category-add':
        $admin->addCategory();
        break;

    case 'admin-category-edit':
        $admin->editCategory();
        break;


    case 'admin-orders-list':
        $admin->listOrders();
        break;

    case 'admin-customer-list':
        $admin->listCustomers();
        break;

    case 'admin-customer-add':
        $admin->addCustomer();
        break;

    case 'admin-customer-edit':
        $admin->editCustomer();
        break;


    default:
        $auth->article(); // hoặc home
        break;
}
