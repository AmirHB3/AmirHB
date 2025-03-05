<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['admin']);
?>
<script>
    location.replace("../index.php");
</script>