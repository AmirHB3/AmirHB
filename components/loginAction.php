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
    <h1>فرم ورود</h1>
    <form action="login.php" method="get">
        <label for="username">نام کاربری:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">کلمه عبور:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="ورود">
    </form>
</body>
</html>