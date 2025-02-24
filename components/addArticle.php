<?php
$conn = mysqli_connect("localhost", "root", "", "amirhb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$imagePath = ''; // متغیر برای ذخیره نام فایل

// آپلود تصویر
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $targetDir = "uploads/"; // پوشه آپلود
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); // ایجاد پوشه اگر وجود ندارد
    }

    // تولید نام منحصر به فرد برای فایل
    $imageName = uniqid() . basename($_FILES['image']['name']);
    $targetFile = $targetDir . $imageName; // مسیر کامل فایل

    // منتقل کردن فایل به مقصد
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        $imagePath = $imageName; // فقط نام فایل را ذخیره کنید (بدون مسیر پوشه)
    } else {
        echo "خطا در آپلود تصویر.";
        exit;
    }
} else {
    echo "تصویر انتخاب نشده است.";
    exit;
}

// بررسی وجود داده‌های فرم
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

    // ذخیره در پایگاه داده
    $sql = "INSERT INTO articles (title, image_path, content, author, date) VALUES ('$title', '$imagePath', '$content', '$author', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo "مقاله با موفقیت اضافه شد!";
    } else {
        echo "خطا: " . mysqli_error($conn);
    }
} else {
    echo "لطفاً تمام فیلد‌ها را پر کنید.";
}

// انتقال به صفحه اصلی
header("Location: ../index.php");
mysqli_close($conn);
?>