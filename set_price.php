<?php

include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

$msg = deQueueMsg();
$var_clear = true;


$uname = $_SESSION['Auth_name'];    
$pid = $_POST["pid"];
$_SESSION[$uname][$pid]['date'] = $_POST["dte"];
$_SESSION[$uname][$pid]['time'] = $_POST["tme"];
$_SESSION[$uname][$pid]['c_qty']= $_POST["childs"];
$_SESSION[$uname][$pid]['a_qty'] = $_POST["adults"];
exit;


?>