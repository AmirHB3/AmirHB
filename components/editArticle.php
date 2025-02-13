<?php

$conn = mysqli_connect("localhost", "root", "", "amirhb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// دریافت ID مقاله
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// دریافت اطلاعات مقاله
$sql = "SELECT * FROM articles WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $article = mysqli_fetch_array($result);
} else {
    echo "مقاله‌ای با این شناسه یافت نشد.";
    exit;
}

// ذخیره تغییرات
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت داده‌ها از فرم
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $author = htmlspecialchars($_POST['author']);
    $date = htmlspecialchars($_POST['date']);

    // بروزرسانی مقاله
    if (mysqli_query($conn, "UPDATE articles SET title='$title', content='$content', author='$author', date='$date' WHERE id=$id")) {
        echo '<div class="alert alert-success">مقاله با موفقیت بروزرسانی شد.</div>';
    } else {
        echo '<div class="alert alert-danger">خطا در بروزرسانی مقاله: ' . mysqli_error($conn) . '</div>';
    }
    header("Location: manageArticles.php");
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">
    <h2 class="text-center mb-4">ویرایش مقاله</h2>

    <form action="editArticle.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" class="border p-4 rounded shadow-lg bg-light">
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">عنوان مقاله</label>
            <input type="text" class="form-control form-control-lg" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label fw-bold">متن مقاله</label>
            <textarea class="form-control form-control-lg" id="content" name="content" rows="5" required><?php echo htmlspecialchars($article['content']); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label fw-bold">نویسنده</label>
            <input type="text" class="form-control form-control-lg" id="author" name="author" value="<?php echo htmlspecialchars($article['author']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label fw-bold">تاریخ</label>
            <input type="date" class="form-control form-control-lg" id="date" name="date" value="<?php echo htmlspecialchars($article['date']); ?>" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">بروزرسانی مقاله</button>
        </div>
    </form>
</div>

<?php
mysqli_close($conn);
?>