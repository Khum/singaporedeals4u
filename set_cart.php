<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

$total = 0;
$pid = $_POST['prodid'];

if(!$_SESSION['Auth_name']){
    $_SESSION['Auth_name'] = 'user';
}
if (isset($_SESSION['book'][$pid])) {
    // unset($_SESSION['cart'][$pid]);
    //$_SESSION['cart'][$pid]['a_qty']++; 
} else {
    $uname = $_SESSION['Auth_name'];
    $sorder = 'id ASC ';
    $whr = array('id' => $pid);

    $data = getRows(DB_TABLE_PREFIX . 'product', $whr, '*', $sorder);

    $prod_data = $data['data'];
    $name = $prod_data[0]['title'];

    $a_prom_price = $prod_data[0]['promo_adult_price'];
    $c_prom_price = $prod_data[0]['promo_child_price'];

    $a_price = $prod_data[0]['adult_price'];
    $c_price = $prod_data[0]['child_price'];

    $org_price = $prod_data[0]['adult_price'];

    if (intval($a_prom_price) != 0) {
        $a_price = $a_prom_price;
    }
    if (intval($c_prom_price) != 0) {
        $c_price = $c_prom_price;
    }
    $img = $prod_data[0]['image'];

    $_SESSION['book'] = array();

    $_SESSION['book'][$pid] = array('pid' => $pid, 'name' => $name, 'adult_price' => $a_price,
        'child_price' => $c_price, 'a_qty' => 1, 'c_qty' => 0, 'pkg' => 1, 'org_price' => $org_price,
        'promo_adult' => $a_prom_price, 'promo_child' => $c_prom_price, 'image' => $img,'time'=> '12:00 AM',
        'date'=>date('M d, D'));

    $_SESSION[$uname][$pid] = $_SESSION['book'][$pid];
    
    echo "success";
    exit;
    //// Total of services
    
    //$_SESSION['cart'][$id]['quantity']++; // another of this item to the cart
    
    
}
?>