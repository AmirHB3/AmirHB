<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$connect_db = mysqli_connect("localhost", "root", "", "amirhb");
$query_result = mysqli_query($connect_db, "SELECT `username`, `email`, `password` FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
mysqli_close($connect_db);
$row = mysqli_fetch_array($query_result);

if($row)
{
    $_SESSION['login'] = true;
    ?>
    <script>
        location.replace("../index.php");
    </script>
    <?php
}
else
{
    echo "<h1>مشکل در نام کاربری یا کلمه عبور!</h1>";
}

?>
