<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';



  $sort_order = $_GET['sort_order'];    
    $pid = $_GET['id'];  
    $where = array('sort_order' => $sort_order,'is_deleted' => 'N');
    $result_arr = getRows(DB_TABLE_PREFIX . 'product', $where);
    $sort_data = $result_arr['data'];
    
        if ($result_arr['total_recs'] > 0) {
            foreach($sort_data as $data){
                if($data['id']==$pid and $data['sort_order']==$sort_order){
                $result =  " ";
                }else{
                $result =  $sort_order." Sort Order already exists. ";
                }
            }
        
    } else {
        $result =  " ";
    } 
    echo $result.$idd;
exit;

//$sort_order = $_GET['sort_order'];    
//    $where = array('sort_order' => $sort_order,'is_deleted' => 'N');
//    $result_arr = getRows(DB_TABLE_PREFIX . 'product', $where);
//   
//        if ($result_arr['total_recs'] > 0) {
//        $result =  $sort_order." Sort Order already exists. ";
//    } else {
//        $result =  " ";
//    } 
//    echo $result;
//exit;
?>
