<?php
   
    include_once 'inc/config.inc.php';
    include_once 'inc/class.phpmailer.php';
    //require_once '../inc/admin_secure.inc.php';
    $msg = deQueueMsg();
    $var_clear = true;
    
    

    if (!empty($_GET)) {
	$email = $_GET['e'];
    	$key =  $_GET['k'];

        $num = GetFieldValue('name','users',"email ='".$email."'");

        if($num )
        {
            $update = "update users SET active = 1 where email = '" . $email. "' and code = '".$key."'";
            $update_res = Query($update);
            
            header("Location: index.php");
            exit;
            
        }
        else
        {
            header("Location: 404.php");
            exit;
        }
        
    }  

