<?php
include_once 'inc/config.inc.php';

if($_POST['post_comment'])
{  
	if($_POST['name']=='' and $_POST['email']=='' and $_POST['message']==''){
	
	header("location:blog_post.php?msg=empty&id=".$_POST['blog_id']);
	}else{	
	
	  $blog_id = $_POST['blog_id'];
	 //$user_id = $_POST['user_id'];
	  $email = $_POST['email'];
	  $name = $_POST['name'];	 
          $date = date("Y-m-d h:i:sa"); 
	  $message = $_POST['message'];
          $blog_title = $_POST['blog_title'];
          
          
            $where2 = array('blog_id' => $blog_id,'is_active' => 'Y');
            $rows_data2 = getRows(DB_TABLE_PREFIX . 'blog_comment', $where2);
            $product_data2 = $rows_data2['data'];

            if ($rows_data2['total_recs'] > 0) {
                $total_votes = count($product_data2); 

             
       }
        $total_comments = $total_votes; 
        $query=mysql_query("insert into blog_comment(`blog_id`,`blog_title`,`username`,`email`,`date`,`message`,`is_active`) values ('$blog_id','$blog_title','$name','$email','$date','$message','N')");
	$query_rating = mysql_query("update blog set comments='$total_comments' where id='$blog_id'");
	header("location:blog_post.php?msg=success&id=".$blog_id);
	
	}
}
?>