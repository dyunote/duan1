<?php
class HomeController
{
    public function index()
    {
        $content = __DIR__ . "/../views/home.php";
        include __DIR__ . "/../views/master.php";
    }
}
