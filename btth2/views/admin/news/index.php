<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage News</title>
    <link rel="stylesheet" href="/assets/css/style.css"> 
</head>
<body>
    <div class="news-management">
        <h2>Manage News</h2>
        <a href="/admin/news/add" class="btn">Add News</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newsList as $news) : ?>
                    <tr>
                        <td><?= htmlspecialchars(string: $news['id']) ?></td>
                        <td><?= htmlspecialchars(string: $news['title']) ?></td>
                        <td><?= htmlspecialchars(string: $news['category_name']) ?></td>
                        <td><?= htmlspecialchars(string: $news['created_at']) ?></td>
                        <td>
                            <a href="/admin/news/edit?id=<?= $news['id'] ?>">Edit</a>
                            <a href="/admin/news/delete?id=<?= $news['id'] ?>" onclick="return confirm('Are you sure you want to delete this news?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
