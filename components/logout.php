<?php
session_start();
unset($_SESSION['login']);
?>
    <script>
        location.replace("../index.php");
    </script>