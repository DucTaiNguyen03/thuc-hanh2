<?php
class AdminController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login() {
        include 'views/admin/login.php';
    }

    public function dashboard() {
        include 'views/admin/dashboard.php';
    }
}
