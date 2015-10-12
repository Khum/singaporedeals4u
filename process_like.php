<?php
include_once 'inc/config.inc.php';


$id = $_POST['id'];
$user_id = $_SESSION['Auth_id'];
//$ip = $_SERVER['SERVER_ADDR'];
$like = 1;

$where = array('product_id' => $id, 'user_id' => $user_id);
$rows_data = getRows(DB_TABLE_PREFIX . 'likes', $where, '*');
$product_data = $rows_data['data'];
if ($rows_data['total_recs'] > 0) {
	echo 'exist';
}else{
	 $query=mysql_query("insert into likes(`product_id`,`user_id`,`like`) values ('$id','$user_id','$like')");
	 if($query==true){
		$where = array('product_id' => $id);
		$rows_data = getRows(DB_TABLE_PREFIX . 'likes', $where, '*');
		$product_data = $rows_data['data'];
		$totallikes = count($product_data);
		echo $totallikes; exit;
	}
	
}


?>