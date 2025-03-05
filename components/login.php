<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$connect_db = mysqli_connect("localhost", "root", "", "amirhb");
$query_result = mysqli_query($connect_db, "SELECT `username`, `email`, `password`, `admin` FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
mysqli_close($connect_db);
$row = mysqli_fetch_array($query_result);

if($row) {
    $_SESSION['login'] = true;
    $_SESSION['admin'] = $row['admin'];
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'success',
            title: 'ورود با موفقیت انجام شد',
            showConfirmButton: false,
            timer: 1000,
            didClose: () => {
                window.location.replace("../index.php");
            }
        });
    });
    </script>
    <?php
} 
else {
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'error',
            title: 'نام کاربری یا رمز عبور نادرست می باشد.',
            showConfirmButton: false,
            timer: 1000,
            didClose: () => {
                window.location.replace("./loginAction.php");
            }
        });
    });
    </script>
    <?php
}
?>