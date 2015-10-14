<?php
    ini_set('display_errors',0);
    //error_reporting(0);    
    switch( $_SERVER['SERVER_NAME'] ){
        case "127.0.0.1":
        case "localhost":
                $Server = "localhost";
                $User = "root";
                $Password = "";
                $DB = "singaporedeals4u_new";
                $DomainName = "http://localhost/SDFU_new";
        break;
				case "singaporedeals4u.com":
        case "www.singaporedeals4u.com":
                $Server = "localhost";
                $User = "singapor_deals4u";
                $Password = "deals4u";
                $DB = "singapor_deals4u";
                $DomainName = "http://www.singaporedeals4u.com";
        break;
    }
    
    $link = mysql_connect($Server, $User, $Password) or die(mysql_error());
    mysql_select_db($DB) or die(mysql_error());

    $is_http = false;
    if(!empty($_SERVER['HTTPS'])) {
        //$urlPrefix = str_replace('http', 'https', $urlPrefix);
        $is_http = true;
    }
    $local_list = array("localhost","127.0.0.1");
    $demo_list = array("beta.absorb.com.pk");

    $server = $_SERVER['HTTP_HOST'];
    // Avoiding Cross site scripting..
    $actual_url=urldecode(($is_http ? 'https' : 'http')."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $actual_length = strlen($actual_url);
    $strip_url = strip_tags($actual_url);
    $stripped_length = strlen($strip_url);
    if($actual_length != $stripped_length) {
        $find_arr = array("'", '"');
        $replace_arr = array('', '');
        header("location:".str_replace($find_arr, $replace_arr, $strip_url));
        //header("HTTP/1.0 404 Not Found");
        //echo file_get_contents("http://".$server."/back9booking/error.php");
        //header("location:http://".$server."/back9booking/error.php");
        //header("location: http://".$server); 
        exit();
    }
?>