<?php


require_once __DIR__ . "/Db.php";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class Coach {
    private $db;

    public function __construct() {
        try{
            $this->db = Db::getInstance();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function all() {
      $query = "SELECT * FROM coaches";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();
        $coaches = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $coaches;
    }
}

?>