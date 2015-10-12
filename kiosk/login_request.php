<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';
session_start();
//require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;


if (!empty($_POST)) {
    
    $email = $_POST["email"];
    $pass = $_POST["password"];
    
    $return = 'select id, email,name from users where email ="'.$email.'" and password = "'.$pass.'" and active = 1';
    $ret = Query($return);
    $obj = GetArr($ret);
    $email_id = $obj['email'];
    
    if( $email_id )
    {
    
        $msg='success';
        
        if(!empty($_SESSION['Auth_name']))
        {
            $_SESSION['backup'] = $_SESSION['Auth_name'];
            
            $_SESSION['Auth_user'] = $email_id;
            
            
            $_SESSION['Auth_username'] = $obj['name'];
            $_SESSION['Auth_id'] = $obj['id'];
            
            $_SESSION['Auth_name'] = $_SESSION['backup'];
        }
        else
        {
	        $_SESSION['Auth_user'] = $email_id;
	        $_SESSION['Auth_username'] = $obj['name'];
	        $_SESSION['Auth_name'] = $obj['name'];
	        $_SESSION['Auth_id'] = $obj['id'];
	}
        
        echo $msg;
        exit;
    }
    else
    {
       echo "failure";
       exit;
    }
    
   //enqueueMsg($message, "success", "register.php");
}


?>