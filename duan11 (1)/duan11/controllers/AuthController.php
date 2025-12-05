<?php

class AuthController
{
    private function render($viewPath)
    {
        $content = $viewPath;
        include __DIR__ . "/../views/layouts/master.php";
    }

    public function banner()
    {
        $this->render(__DIR__ . "/../views/layouts/banner.php");
    }

    public function menu()
    {
        $this->render(__DIR__ . "/../views/layouts/menu.php");
    }

    public function product()
    {
        $this->render(__DIR__ . "/../views/layouts/product.php");
    }

    public function article()
    {
        $this->render(__DIR__ . "/../views/layouts/article.php");
    }

    public function login()
    {
        $this->render(__DIR__ . "/../views/auth/login.php");
    }

    public function register()
    {
        $this->render(__DIR__ . "/../views/auth/register.php");
    }

    public function forget()
    {
        $this->render(__DIR__ . "/../views/auth/forget.php");
    }

    public function cart()
    {
        $this->render(__DIR__ . "/../views/cart/cart.php");
    }
    public function news()
    {
        $this->render(__DIR__ . "/../views/layouts/news.php");
    }
    public function fbzlmess()
    {
        $this->render(__DIR__ . "/../views/layouts/news.php");
    }

    public function home()
    {
        $this->render(__DIR__ . "/../views/home/home.php");
    }
    public function service()
    {
        $this->render(__DIR__ . "/../views/layouts/service.php");
    }
    public function about()
    {
        $this->render(__DIR__ . "/../views/layouts/about.php");
    }
}
