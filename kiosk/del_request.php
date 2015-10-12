<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';
session_start();
//require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;


if (!empty($_POST)) {
    
    $pid = $_POST["pid"];
    $uname = $_SESSION['Auth_name'];
    
    unset($_SESSION[$uname][$pid]);
    echo "success";
    exit;
}


?>