<?php
class News {
    private $db;
    private $table = "news";

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllNews() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
