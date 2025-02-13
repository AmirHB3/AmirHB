<?php
include '../components/Customnavbar.php';
include '../components/Customheader.php';

$conn = mysqli_connect("localhost", "root", "", "amirhb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$result = mysqli_query($conn, "SELECT * FROM articles WHERE id = $id");

if ($result && mysqli_num_rows($result) > 0) {
    $article = mysqli_fetch_array($result);
} else {
    echo "مقاله‌ای با این شناسه یافت نشد.";
    exit;
}

mysqli_close($conn);
?>

<main class="container my-5">
    <article class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-4 p-md-5">
            <!-- عنوان مقاله -->
            <h1 class="mb-4 font-weight-bold"><?php echo htmlspecialchars($article['title']); ?></h1>
            
            <!-- اطلاعات نویسنده -->
            <div class="d-flex align-items-center mb-4 text-muted">
                <img src="https://placehold.co/40" alt="نویسنده" class="rounded-circle mr-2 p-1" width="50" height="50">
                <span>نوشته شده توسط <?php echo htmlspecialchars($article['author']); ?> | <?php echo htmlspecialchars($article['date']); ?></span>
            </div>
            
            <!-- تصویر مقاله -->
            <img src="<?php echo htmlspecialchars($article['image_path']); ?>" alt="تصویر مقاله" class="img-fluid article-img rounded mb-4">
            
            <!-- متن مقاله -->
            <div class="article-content">
                <?php echo nl2br(htmlspecialchars($article['content'])); ?>
            </div>
        </div>
    </article>
</main>

<?php
include '../components/Customfooter.php';
?>