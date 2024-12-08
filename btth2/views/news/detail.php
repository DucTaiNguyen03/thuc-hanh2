<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(string: $news['title']) ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="news-detail">
        <h1><?= htmlspecialchars(string: $news['title']) ?></h1>
        <p class="meta">
            Category: <?= htmlspecialchars(string: $news['category_name']) ?> |
            Published on: <?= htmlspecialchars(string: $news['created_at']) ?>
        </p>
        <?php if (!empty($news['image'])) : ?>
            <div class="news-image">
                <img src="/uploads/<?= htmlspecialchars(string: $news['image']) ?>" alt="<?= htmlspecialchars(string: $news['title']) ?>" width="100%">
            </div>
        <?php endif; ?>
        <div class="news-content">
            <?= nl2br(string: htmlspecialchars(string: $news['content'])) ?>
        </div>
        <a href="/" class="btn">Back to Home</a>
    </div>
</body>
</html>
