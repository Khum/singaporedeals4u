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
    
    
    $num = GetFieldValue('name','users',"email ='".$_POST['email']."'");
    
    if($num )
    {
        echo "exist";
        exit;
    }
    else
    {
       
       $string = generateRandomString();
       $name = $_POST['name'];
       $email = $_POST['email'];
       $pass1 = $_POST['password'];
       $phone = $_POST['phone'];
       $pass = md5($pass1);
       $sql_insert = "insert into users (name,email,password,phone,active,code) VALUES ( "
               . " '$name', '$email', '$pass', '$phone', 0 , '$string' )";
       $sql_res = Query($sql_insert);
      
       if($sql_res){
            $msg= 'success';
            $emailFlag = true;
       }
    }
    
   //enqueueMsg($message, "success", "register.php");
}

if($emailFlag)
{
    $to = $_POST['email'];
    $subject = "Singaporedeals4u Registration email";

    $message = "
    <html>
    <head>

    </head>
    <body>
    <table>
    <tr>
        <td>Dear ".$_POST['name']."</td>
    </tr>

    <tr>
        <td>Thanks For registering with us!</td>
    </tr>
    <tr>
        <td>Please Click Link Below in order to register with us!</td>
    </tr>

    <tr>
        <td>
            <a href='http://".$_SERVER['SERVER_NAME']."/Auth.php?e=".$_POST["email"]."&k=".$string."'>Click Me</a>
        </td>
        
    </tr>
    <tr>
        <td>
            if the above link does not work then please copy paste this link in the browser
        </td>
        
    </tr>
    <tr>
        <td>
            <a href='".$_SERVER['SERVER_NAME']."/Auth.php?e=".$_POST["email"]."&k=".$string."'>"
            .$_SERVER['SERVER_NAME']."/Auth.php?e=".$_POST["email"]."&k=".$string."</a>
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