<?php

include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

$msg = deQueueMsg();
$var_clear = true;


$uname = $_SESSION['Auth_name'];    
$pid = $_POST["pid"];
$_SESSION[$uname][$pid]['date'] = $_POST["date"];
$_SESSION[$uname][$pid]['time'] = $_POST["time"];
echo 'success';
exit;


?>