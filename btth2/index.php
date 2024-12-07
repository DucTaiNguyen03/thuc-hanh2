<?php
// Kết nối cơ sở dữ liệu
require_once 'config/database.php';

// Include các controller
require_once 'controllers/HomeController.php';
require_once 'controllers/AdminController.php';
require_once 'controllers/NewsController.php';

// Tạo kết nối cơ sở dữ liệu
$database = new Database();
$db = $database->getConnection();

// Chuyển hướng URL
$url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : ['home'];

try {
    // Kiểm tra controller nào được gọi
    switch ($url[0]) {
        case 'admin':
            $controller = new AdminController($db); // Truyền `$db` nếu cần dùng
            if (isset($url[1]) && method_exists($controller, $url[1])) {
                call_user_func([$controller, $url[1]]);
            } else {
                $controller->dashboard(); // Mặc định gọi dashboard
            }
            break;

        case 'news':
            $controller = new NewsController($db);
            if (isset($url[1]) && method_exists($controller, $url[1])) {
                call_user_func([$controller, $url[1]]);
            } else {
                $controller->index(); // Mặc định gọi index
            }
            break;

        case 'home':
        default:
            $controller = new HomeController($db);
            $controller->index(); // Gọi trang chủ
    }
} catch (Exception $e) {
    // Hiển thị lỗi
    echo "Lỗi: " . $e->getMessage();
}
