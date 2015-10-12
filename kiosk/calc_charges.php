<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

$msg = deQueueMsg();
$var_clear = true;

if(!$_SESSION['Auth_user']){
    $_SESSION['Auth_name'] = 'user';
}
if($_POST["control"] == "single")
{
    $ser_charges = 0;
   if (!empty($_POST)) {
    $uname = $_SESSION['Auth_name'];    
    $pid = $_POST["pid"];
    $_SESSION[$uname][$pid]['c_qty']= $_POST["childs"];
    $_SESSION[$uname][$pid]['a_qty'] = $_POST["adults"];
    
    
    $a_total = $_SESSION[$uname][$pid]['adult_price'] * $_SESSION[$uname][$pid]['a_qty'];
    $c_total = $_SESSION[$uname][$pid]['child_price'] * $_SESSION[$uname][$pid]['c_qty'];
    
    $total = (($_SESSION[$uname][$pid]['adult_price'] * $_SESSION[$uname][$pid]['a_qty'])
             + ($_SESSION[$uname][$pid]['child_price'] * $_SESSION[$uname][$pid]['c_qty']));
             
     $others_total = $_SESSION[$uname][$pid]['guide']['price'] + $_SESSION[$uname][$pid]['pickup']['price'] +
        $_SESSION[$uname][$pid]['insurance']['price'] + $_SESSION[$uname][$pid]['coffee']['price'] +
        $_SESSION[$uname][$pid]['welcome']['price'] + $_SESSION[$uname][$pid]['dinner']['price'] + 
        $_SESSION[$uname][$pid]['bike']['price'] + $_SESSION[$uname][$pid]['2way']['price'];
    
}
foreach($_SESSION[$uname] as $item )
{
    if(($item['pid'] != '') && ($item['pid'] != 'null'))
    {
        $others = $item['guide']['price'] + $item['pickup']['price'] +
                $item['insurance']['price'] + $item['coffee']['price'] +
                $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']+ $item['2way']['price'];
    }
}
$total = $total + $others_total;

$_SESSION[$uname][$pid]['single_total'] = $total;
$book = array('total' => $total,'atotal'=>$a_total, 'ctotal'=>$c_total, 'adult' => $_SESSION[$uname][$pid]['a_qty'], 'childs'=>$_SESSION[$uname][$pid]['c_qty']);
$book_arr = json_encode($book);

echo $book_arr;
exit;
}
if (!empty($_POST)) {
    $pid = $_POST["pid"];
    $_SESSION['book'][$pid]['c_qty']= $_POST["childs"];
    $_SESSION['book'][$pid]['a_qty'] = $_POST["adults"];
    $_SESSION['book'][$pid]['time'] = $_POST["time"];
    $_SESSION['book'][$pid]['date'] = $_POST["date"];
    
    $total = (($_SESSION['book'][$pid]['adult_price'] * $_SESSION['book'][$pid]['a_qty'])
             + ($_SESSION['book'][$pid]['child_price'] * $_SESSION['book'][$pid]['c_qty']));
    
}
foreach($_SESSION[$uname] as $item )
{
    if(($item['pid'] != '') && ($item['pid'] != 'null'))
    {
        $others = $item['guide']['price'] + $item['pickup']['price'] +
                $item['insurance']['price'] + $item['coffee']['price'] +
                $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']+ $item['2way']['price'];
    }
}
$total = $total + $others;
//$_SESSION['book'][$pid]['single_total'] = $total;

$book = array('total' => $total, 'adult' => $_SESSION['book'][$pid]['a_qty'], 'childs'=>$_SESSION['book'][$pid]['c_qty']);
$book_arr = json_encode($book);

echo $book_arr;
exit;

?>