<?php
    if (!isset($_SESSION['S_login'])){
        header("location:index.php");
        exit;
    }
?>