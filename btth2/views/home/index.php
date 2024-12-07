<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Chào mừng bạn đến với trang chủ</h1>
    <p>Danh sách tin tức:</p>
    <?php foreach ($news as $item): ?>
        <p><?php echo $item['title']; ?></p>
    <?php endforeach; ?>
</body>
</html>
