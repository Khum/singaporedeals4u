<?php 
    
    include_once 'inc/config.inc.php'; 
    
    $request = $_POST['k'];
    
    if($request=="reset")
    {
        $_SESSION[$_SESSION['Auth_name']]='';
       // session_unset($_SESSION['Auth_name']); 
        echo "success";
        exit;
    }
    echo "failure";
    exit;
    



?>
