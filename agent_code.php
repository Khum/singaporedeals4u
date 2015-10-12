<?php
include_once 'inc/config.inc.php';
include('inc/db_con.inc.php');



    $sort_order = $_POST['sort_order'];  
    $code = "XF123A2432BT";
       
        if ($sort_order != "") {
            
                if($sort_order==$code){
                $result =  "Correct";
                }else{
                $result =  "Fail";
                }
            
        
    } else {
        $result =  " ";
    } 
    echo $result;
exit;

?>
