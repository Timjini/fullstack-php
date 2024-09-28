<?php

class Db {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $this->pdo = new PDO('mysql:host=;dbname=', '', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }



    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}