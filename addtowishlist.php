<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';

if($_SESSION['Auth_user'])
{
    if (!empty($_POST)) {

        $pid = $_POST["pid"];
        
        $chk = 'select * from wishlist where id ='.$pid.' and user_id = '.$_SESSION['Auth_id'];
        $chk_ret = Query($chk);
        $obj_chk = Num($chk_ret);
        
       
        if($obj_chk > 0)
        {
            echo "This product already exist in your wishlist";
            exit;
        }else
        {

	        $return = 'select * from product where id ='.$pid;
	        $ret = Query($return);
	
	
	        if( $ret )
	        {
	            $i=1;
	            $obj = GetArr( $ret );
	            $len = count($obj);
	
	            $insert1 = "insert into wishlist( ";
	            $insert2 = " VALUES ( ";
	            foreach( $obj as $key => $field )
	            {
	                if($i == $len){
	                    $insert1 .= $key.",user_id)";
	                }
	                else{
	                    $insert1 .= $key.',';
	                }
	
	                if($i == $len){
	                $field1 = mysql_real_escape_string($field);	
	                    $insert3 .= "'".$field1."','".$_SESSION['Auth_id']."')";
	                }
	                else{
	                $field1 = mysql_real_escape_string($field);
	                    $insert3 .= "'".$field1."',";
	                }
	                $i++;
	            }
	            $insert = $insert1.$insert2.$insert3;
	            $res = Query($insert);
	            if($res)
	            {
	                echo "success";
	                exit;
	            }
	
	        }
	        else
	        {
	           echo "failure";
	           exit;
	        }

       //enqueueMsg($message, "success", "register.php");
       }
    }
   else {
        echo "Error.Try Again";
        exit;
    }
}
{
    echo "Please login to add this product in to your wishlist";
    exit;
}


?>