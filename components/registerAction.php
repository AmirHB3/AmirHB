<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="../assets/css/login_register.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>فرم ثبت نام</h1>
    <form action="register.php" method="post">
        <input type="text" id="username" name="username" placeholder="نام کاربری" required>
        <input type="email" id="email" name="email" placeholder="ایمیل" required>
        <input type="password" id="password" name="password" placeholder="کلمه عبور" required>
        <input type="password" id="repassword" name="repassword" placeholder="تکرار کلمه عبور" required>
        <input type="submit" value="ورود">
        <p>حساب کاربری دارید؟ <a href="loginAction.php">وارد شوید</a></p>
    </form>
</body>
</html>