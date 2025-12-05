<?php

class AdminController
{
    public function dashboard()
    {
        $content = __DIR__ . '/../views/admin/admin_dashboard.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }

    public function listProduct()
    {
        $content = __DIR__ . '/../views/admin/admin_list_product.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }
    
    public function addProduct()
    {
        $content = __DIR__ . '/../views/admin/admin_add_product.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }

    public function editProduct()
    {
        $content = __DIR__ . '/../views/admin/admin_edit_product.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }

    public function listCategory()
    {
        $content = __DIR__ . '/../views/admin/admin_category.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }

    public function addCategory() {
        $content = __DIR__ . "/../views/admin/admin_add_category.php";
        include __DIR__ . "/../views/layouts/master_admin.php";
    }

    public function editCategory() {
        $content = __DIR__ . "/../views/admin/admin_edit_category.php";
        include __DIR__ . "/../views/layouts/master_admin.php";
    }

    public function listOrders(){
        $content = __DIR__ . '/../views/admin/admin_orders_list.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }

    public function listCustomers()
    {
        $content = __DIR__ . '/../views/admin/admin_customers_list.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }

     public function addCustomer()
    {
        $content = __DIR__ . "/../views/admin/admin_add_customer.php";
        include __DIR__ . "/../views/layouts/master_admin.php";
    }

    public function editCustomer()
    {
        $content = __DIR__ . '/../views/admin/admin_edit_customer.php';
        include __DIR__ . '/../views/layouts/master_admin.php';
    }

}   

