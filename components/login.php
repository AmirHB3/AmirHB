<?php
// دریافت اطلاعات از فرم
$username = $_GET['username'];
$password = $_GET['password'];

// نمایش اطلاعات ورودی
echo "<h1>ورود موفقیت آمیز</h1>";
echo "<p>نام کاربری: " . $username . "</p>";
echo "<p>کلمه عبور: " . $password . "</p>";
?>