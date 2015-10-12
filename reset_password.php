<?php 
    
    include_once 'inc/config.inc.php'; 
    
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    
    $pass_hash = md5($pass);
    $update = "update users SET password = '".$pass_hash."' where email = '" . $email. "'";
    $update_res = Query($update);

    if($update_res)
    {
        echo 'success';
        exit;
    }    
    else {
        echo "failure";
        exit;
    }
    
    



?>
