<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';
//require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;

function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$emailFlag = false;

if (!empty($_POST)) {
    
    $email = $_POST["email"];
    
    $return = 'select name, password from users where email ="'.$email.'"';
    $ret = Query($return);
    $obj = GetArr($ret);
    $pwd = $obj['password'];
    if( $pwd )
    {
        $emailFlag = true;
        $msg='success';
    }
    else
    {
       echo "failure";
       exit;
    }
    
   //enqueueMsg($message, "success", "register.php");
}

if($emailFlag)
{
    $to = $_POST['email'];
    $subject = "Singaporedeals4u: Password Request";

    $message = "
    <html>
        <head>

        </head>
    <body>
        <table>
            <tr>
                <td>Dear ".$obj['name']."</td>
            </tr>
            <tr>
                <td>Here is your requested password for singaporedeals4u</td>
            </tr>
            
            <tr>
                <td>password:".$obj['password']."</td>
            </tr>
        
        </table>
        
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <support@singaporedeals4u.com>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";

    $send = mail($to,$subject,$message,$headers);
    if($send)
    {
        echo $msg;
        exit;
    }    
    
    
}

?>