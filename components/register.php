<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if($password != $repassword){
    echo("<h1>رمز عبور نادرست می باشد!</h1>");
} else {
    $connect_db = mysqli_connect("localhost", "root", "", "amirhb");

    if (!$connect_db) {
        die("خطا در اتصال به دیتابیس: " . mysqli_connect_error());
    }

    $query_result = mysqli_query($connect_db, "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");

    if ($query_result) {
        ?>
        <script>
            location.replace("./loginAction.php");
        </script>
        <?php
    } else {
        echo "<h1>خطا در ثبت‌نام: " . mysqli_error($connect_db) . "</h1>";
    }

    mysqli_close($connect_db);
}
?>
