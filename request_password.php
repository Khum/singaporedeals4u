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
    if( !empty($pwd) && ($pwd != NULL) )
    {
        $random_string = generateRandomString();
        
        $update = "update users SET code = '".$random_string."' where email = '" . $email. "'";
        $update_res = Query($update);
        
        if($update_res)
        {
            $emailFlag = true;
            $msg='success';
        }    
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
                        <td>Please click on the link below in order to recover your password</td>
                    </tr>

                    <tr>
                        <td>
                            <a href='http://".$_SERVER['SERVER_NAME']."/request.php?e=".$_POST["email"]."&k=".$random_string."'>Click Me</a>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            if the above link does not work then please copy paste this link in the browser
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <a href='".$_SERVER['SERVER_NAME']."/request.php?e=".$_POST["email"]."&k=".$random_string."'>"
                            .$_SERVER['SERVER_NAME']."/request.php?e=".$_POST["email"]."&k=".$random_string."</a>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Note: This link is valid for only one time use. 
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Regards
                        </td>

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