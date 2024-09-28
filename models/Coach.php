<?php


require_once __DIR__ . "/Db.php";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class Coach {
    private $db;
    private $full_name;
    private $position;
    private $tags;
    private $image;

    public function __construct($db = null, $full_name = null, $position = null, $tags = null, $image = null) {
        try{
            $this->db = Db::getInstance();
            $this->full_name = $full_name;
            $this->position = $position;
            $this->tags = $tags;
            $this->image = $image;
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

    public function save() {
        $query = "INSERT INTO coaches (full_name, position, tags, image) VALUES (:full_name, :position, :tags, :image)";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':full_name', $this->full_name);
        $stmt->bindParam(':position', $this->position);
        $stmt->bindParam(':tags', $this->tags);
        $stmt->bindParam(':image', $this->image);
        $stmt->execute();
    }
}

?>