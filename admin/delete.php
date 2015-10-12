<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
if (isset($_POST['del']) && $_POST['del'] == 'y') {
    $id = $_POST['id'];
    $table = $_POST['table'];
    if(isset($_POST['is_hard']) && $_POST['is_hard'] = 'y'){
        $delSql = "DELETE FROM `".$table."`  WHERE `id` ='" . $id . "'";
        Query($delSql);
    }else{
    	$delSql = "DELETE FROM `".$table."`  WHERE `id` ='" . $id . "'";
        //$delSql = "UPDATE `".$table."` SET `is_deleted` = 'Y' WHERE id ='" . $id . "'";
        Query($delSql);        
    }
    echo "y";
}else{
    echo "n";
}
exit;
?>
