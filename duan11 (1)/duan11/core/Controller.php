<?php
// core/Controller.php
class Controller {
    public function view($path, $data = []) {
        extract($data); // chuyển mảng thành biến
        include "views/" . $path . ".php";
    }
}
