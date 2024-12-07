<?php
class HomeController {
    private $db; // Kết nối cơ sở dữ liệu

    // Hàm khởi tạo để nhận kết nối cơ sở dữ liệu
    public function __construct($db) {
        $this->db = $db;
    }

    // Hàm xử lý logic trang chủ
    public function index() {
        // Ví dụ: Thực hiện truy vấn
        $query = "SELECT * FROM news";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Hiển thị kết quả (debug hoặc hiển thị giao diện)
        echo "<h1>News List</h1>";
        foreach ($news as $item) {
            echo "<p>{$item['title']}</p>";
        }
    }
}
