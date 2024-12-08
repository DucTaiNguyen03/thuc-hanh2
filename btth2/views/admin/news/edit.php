<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
    <link rel="stylesheet" href="/assets/css/style.css"> 
</head>
<body>
    <div class="edit-news-form">
        <h2>Edit News</h2>
        <form method="POST" action="/admin/news/edit?id=<?= htmlspecialchars(string: $news['id']) ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?= htmlspecialchars(string: $news['title']) ?>" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select id="category_id" name="category_id" required>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id'] ?>" <?= $category['id'] == $news['category_id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars(string: $category['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" required><?= htmlspecialchars(string: $news['content']) ?></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
                <?php if (!empty($news['image'])) : ?>
                    <p>Current image: <img src="/uploads/<?= htmlspecialchars(string: $news['image']) ?>" alt="News Image" width="100"></p>
                <?php endif; ?>
            </div>
            <button type="submit">Update News</button>
        </form>
    </div>
</body>
</html>
