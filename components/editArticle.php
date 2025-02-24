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
    // بررسی وجود داده‌ها
    if (
        isset($_POST['title']) && !empty($_POST['title']) &&
        isset($_POST['content']) && !empty($_POST['content']) &&
        isset($_POST['author']) && !empty($_POST['author']) &&
        isset($_POST['date']) && !empty($_POST['date'])
    ) {
        // دریافت داده‌ها از فرم
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $author = htmlspecialchars($_POST['author']);
        $date = htmlspecialchars($_POST['date']);

        // آپلود عکس جدید (اگر کاربر تصویر جدیدی انتخاب کرده باشد)
        $imagePath = $article['image_path']; // مقدار پیشفرض عکس فعلی
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            // حذف عکس قبلی اگر وجود دارد
            if (!empty($article['image_path']) && file_exists($targetDir . $article['image_path'])) {
                unlink($targetDir . $article['image_path']);
            }

            // ذخیره عکس جدید
            $imageName = uniqid() . basename($_FILES['image']['name']);
            $targetFile = $targetDir . $imageName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $imagePath = $imageName; // تنظیم مسیر عکس جدید
            } else {
                echo '<div class="alert alert-danger">خطا در آپلود تصویر.</div>';
            }
        }

        // بروزرسانی مقاله
        $sql = "UPDATE articles SET title='$title', content='$content', author='$author', date='$date', image_path='$imagePath' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            // ارسال به صفحه مدیریت مقالات بدون نمایش پیام
            header("Location: manageArticles.php");
            exit;
        } else {
            echo '<div class="alert alert-danger">خطا در بروزرسانی مقاله: ' . mysqli_error($conn) . '</div>';
        }
    } else {
        echo '<div class="alert alert-danger">لطفاً تمام فیلد‌ها را پر کنید.</div>';
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container my-5">
    <h2 class="text-center mb-4">ویرایش مقاله</h2>

    <form action="editArticle.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" class="border p-4 rounded shadow-lg bg-light">
        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label fw-bold">عنوان مقاله</label>
            <input type="text" class="form-control form-control-lg" id="title" name="title" value="<?php echo isset($article['title']) ? htmlspecialchars($article['title']) : ''; ?>" required>
        </div>

        <!-- Body article -->
        <div class="mb-3">
            <label for="content" class="form-label fw-bold">متن مقاله</label>
            <textarea class="form-control form-control-lg" id="content" name="content" rows="5" required><?php echo isset($article['content']) ? htmlspecialchars($article['content']) : ''; ?></textarea>
        </div>

        <!-- Auther -->
        <div class="mb-3">
            <label for="author" class="form-label fw-bold">نویسنده</label>
            <input type="text" class="form-control form-control-lg" id="author" name="author" value="<?php echo isset($article['author']) ? htmlspecialchars($article['author']) : ''; ?>" required>
        </div>

        <!-- Date time -->
        <div class="mb-3">
            <label for="date" class="form-label fw-bold">تاریخ</label>
            <input type="date" class="form-control form-control-lg" id="date" name="date" value="<?php echo isset($article['date']) ? htmlspecialchars($article['date']) : ''; ?>" required>
        </div>

        <!-- Current image -->
        <div class="mb-3">
            <label class="form-label fw-bold">تصویر فعلی:</label><br>
            <?php if (isset($article['image_path']) && !empty($article['image_path'])): ?>
                <img src="uploads/<?php echo htmlspecialchars($article['image_path']); ?>" alt="تصویر فعلی" class="img-fluid rounded" style="max-width: 300px;">
            <?php else: ?>
                <span>تصویری برای این مقاله ثبت نشده است.</span>
            <?php endif; ?>
        </div>

        <!-- Upload new image -->
        <div class="mb-3">
            <label for="image" class="form-label fw-bold">انتخاب تصویر جدید:</label>
            <input type="file" class="form-control form-control-lg" id="image" name="image" accept="image/*">
        </div>

        <!-- Update button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">بروزرسانی مقاله</button>
        </div>
    </form>
</div>

<?php
mysqli_close($conn);
?>