<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link rel="stylesheet" href="/assets/css/style.css"> 
</head>
<body>
    <div class="add-news-form">
        <h2>Add News</h2>
        <form method="POST" action="/admin/news/add" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select id="category_id" name="category_id" required>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id'] ?>"><?= htmlspecialchars(string: $category['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
            </div>
            <button type="submit">Add News</button>
        </form>
    </div>
</body>
</html>
