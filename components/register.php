<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if($password != $repassword){
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'error',
            title: 'رمزعبور با تکرار آن مطابقت ندارد.',
            showConfirmButton: false,
            timer: 1000,
            didClose: () => {
                window.location.replace("./registerAction.php");
            }
        });
    });
    </script>
    <?php
} else {
    $connect_db = mysqli_connect("localhost", "root", "", "amirhb");

    if (!$connect_db) {
        die("خطا در اتصال به دیتابیس: " . mysqli_connect_error());
    }

    $query_result = mysqli_query($connect_db, "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");

    if ($query_result) {
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'success',
                title: 'ثبت نام با موفقیت انجام شد',
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
    else {
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'error',
                title: 'ثبت نام انجام نشد.',
                showConfirmButton: false,
                timer: 1000,
                didClose: () => {
                    window.location.replace("./registerAction.php");
                }
            });
        });
        </script>
        <?php
    }
mysqli_close($connect_db);
}
?>
