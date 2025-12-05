<?php
// core/Model.php
class Model {
    protected $pdo;

    public function __construct() {
        require_once "config/database.php";
        $this->pdo = $pdo;
    }
}
