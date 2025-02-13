<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<form action="addArticle.php" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-lg bg-light">
    <h3 class="text-center mb-4">افزودن مقاله</h3>
    <div class="mb-3">
        <label for="title" class="form-label fw-bold">عنوان مقاله</label>
        <input type="text" class="form-control form-control-lg" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label fw-bold">انتخاب تصویر</label>
        <input type="file" class="form-control form-control-lg" id="image" name="image" accept="image/*" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label fw-bold">متن مقاله</label>
        <textarea class="form-control form-control-lg" id="content" name="content" rows="5" required></textarea>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label fw-bold">نویسنده</label>
        <input type="text" class="form-control form-control-lg" id="author" name="author" value="امیرحسین بهرامی" required>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label fw-bold">تاریخ</label>
        <input type="date" class="form-control form-control-lg" id="date" name="date" required>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg">افزودن مقاله</button>
    </div>
</form>