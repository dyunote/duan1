<?php
class ProductController
{
    public function index()
    {
        $content = __DIR__ . "/../views/product_list.php";
        include __DIR__ . "/../views/master.php";
    }
}
