<?php

class Db {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $this->pdo = new PDO('mysql:host=89.117.139.1;dbname=u858075988_cfs', 'u858075988_cfs', '150150@Hl');
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