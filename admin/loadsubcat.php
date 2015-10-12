<?php 
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';

$parent_cat = $_GET['parent_cat'];
$id = $_GET['id'];
if($parent_cat!=''){
$query1 = mysql_query("UPDATE inquiry set status='".$parent_cat."' WHERE id='".$id."'");
}else{
}
$query = mysql_query("SELECT * FROM inquiry WHERE id='".$id."'");
while($row = mysql_fetch_array($query)) {
	if($row[status]==1)
	{
	echo "New";
	}
	elseif($row[status]==2)
	{
	echo "InProcess";	
	}
	elseif($row[status]==3)
	{
	echo "Quoted";	
	}
	elseif($row[status]==4)
	{
	echo "Confirm";	
	}
	elseif($row[status]==5)
	{
	echo "Expired";	
	}
}

?>
