<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="../assets/css/login_register.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>فرم ورود</h1>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="نام کاربری" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="کلمه عبور" required>
            </div>
            <input type="submit" value="ورود">
            <p>حساب کاربری ندارید؟ <a href="registerAction.php">ایجاد حساب کاربری</a></p>
        </form>
</body>
</html>