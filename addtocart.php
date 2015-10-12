<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

$msg = deQueueMsg();
$var_clear = true;
//$a['name'] = array();
//$b = array('c'=>4, 'd'=>6);
//$c = array('e'=>43, 'f'=>16);
//$a['name'][0] = $b; 
//$a['name'] [1] = $c; 
//print_r($a['name']);exit; 


if (!empty($_GET)) {
    $pid = $_GET['pid'];
    $uname = $_SESSION['Auth_name'];
   
   if(empty($_SESSION[$uname]) && $pid != '')
   {
       $_SESSION[$uname] = array();
       $_SESSION[$uname][$pid] = $_SESSION['book'][$pid];
       //header("Location:cart.php");
       header("Location:cart.php?prodid=".$pid);
   
        exit;
   }
   
   //unset($_SESSION[$uname]);exit;
   if($pid != '')
   {
    $_SESSION[$uname][$pid] = $_SESSION['book'][$pid];
   } 
   //header("Location:cart.php");
   header("Location:cart.php?prodid=".$pid);
   exit;
}



?>