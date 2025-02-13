<?php
include 'Customnavbar.php';
$conn = mysqli_connect("localhost", "root", "", "amirhb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if (mysqli_query($conn, "DELETE FROM articles WHERE id = $id")) {
        echo '<div class="alert alert-success">مقاله با موفقیت حذف شد.</div>';
    } else {
        echo '<div class="alert alert-danger">خطا در حذف مقاله: ' . mysqli_error($conn) . '</div>';
    }
}

$result = mysqli_query($conn, "SELECT * FROM articles ORDER BY id DESC");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <br>
        <h2 class="text-center mb-4">مدیریت مقالات</h2>
    <a href="addArticleForm.php" class="btn btn-primary mb-3">افزودن مقاله جدید</a>

    <?php if (mysqli_num_rows($result) > 0): ?>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>عنوان</th>
                    <th>نویسنده</th>
                    <th>تاریخ</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                        <td><?php echo htmlspecialchars($row['author']); ?></td>
                        <td><?php echo htmlspecialchars($row['date']); ?></td>
                        <td>
                            <a href="editArticle.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning me-2">ویرایش</a>
                            <a href="?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('آیا از حذف این مقاله مطمئن هستید؟')">حذف</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center text-muted">مقاله‌ای وجود ندارد.</p>
    <?php endif; ?>
</div>