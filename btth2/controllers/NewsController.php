<?php
class NewsController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function index() {
        include 'views/news/index.php';
    }

    public function detail() {
        include 'views/news/detail.php';
    }
}
