<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$connect_db = mysqli_connect("localhost", "root", "", "amirhb");
mysqli_query($connect_db, "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");
mysqli_close($connect_db);

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