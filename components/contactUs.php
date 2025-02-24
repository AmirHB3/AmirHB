<?php

$link = mysqli_connect("localhost", "root", "", "amirhb");
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // اعتبارسنجی ورودی‌ها
    if (empty($name)) {
        echo 'لطفاً نام خود را وارد کنید.';
    } elseif (empty($email)) {
        echo 'لطفاً یک ایمیل معتبر وارد کنید.';
    } elseif (empty($message)) {
        echo 'لطفاً پیام خود را بنویسید.';
    } else {
        if (mysqli_query($link, "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')")) {
            echo 'پیام شما با موفقیت ارسال شد!';
        } else {
            echo 'خطا در ارسال پیام: ' . mysqli_error($link);
        }
    }
}

mysqli_close($link);
?>