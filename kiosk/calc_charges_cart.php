<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

$msg = deQueueMsg();
$var_clear = true;


if (!empty($_POST)) {
$total =0;
    $grand_total = 0;
    $uname = $_SESSION['Auth_name'];
    $pid = $_POST['pid'];
    $quantity = $_POST["quantity"];
    $_SESSION[$uname][$pid]['pkg']= $quantity;
    
    $total = (($_SESSION[$uname][$pid]['adult_price'] * $_SESSION[$uname][$pid]['a_qty'])
             + ($_SESSION[$uname][$pid]['child_price'] * $_SESSION[$uname][$pid]['c_qty']));
             
             $others = $_SESSION[$uname][$pid]['guide']['price'] + $_SESSION[$uname][$pid]['pickup']['price'] +
                      $_SESSION[$uname][$pid]['insurance']['price'] + $_SESSION[$uname][$pid]['coffee']['price'] +
                      $_SESSION[$uname][$pid]['welcome']['price'] + $_SESSION[$uname][$pid]['dinner']['price'] +
                      $_SESSION[$uname][$pid]['bike']['price'] + $_SESSION[$uname][$pid]['2way']['price']; 
    
    $total = ($total + $others)* $quantity;
    
    
        foreach($_SESSION[$_SESSION['Auth_name']] as $item )
            {
                if(($item['pid'] != '') && ($item['pid'] != 'null'))
                {
                    $totals = (($item['adult_price'] * $item['a_qty'])
                            + ($item['child_price'] * $item['c_qty'])); 
                             
                    $oth = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']+ $item['2way']['price'];          
        
             		$grand_total = $grand_total + (($totals + $oth) * $item['pkg']) ; 
            	}
    }

$_SESSION[$uname][$pid]['grand_total'] = $grand_total;



$cart = array('grand'=>$grand_total, 'total' => $total, 'quantity' => $quantity, 'other' => $others);
$cart_arr = json_encode($cart);

echo $cart_arr;
exit;
}
?>