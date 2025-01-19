<?php
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$repassword = $_GET['repassword'];

if($password != $repassword){
    echo("<h1>رمز عبور نادرست می باشد!</h1>");
}
else{
    echo("<h1>ثبت نام موفقیت آمیز</h1>");
    echo("<p>نام کاربری: " . $username . "</p>");
    echo("<p>ایمیل : " . $email . "</p>");
    echo("<p>کلمه عبور: " . $password . "</p>");
    echo("<p>تکرار کلمه عبور: " . $repassword . "</p>");
}
?>