<?php
include('inc/db_con.inc.php');

parse_str($_POST['dataObj'], $params);


$qry = "insert into partners (f_name, l_name, agent_name, email, country, phone, updates, date) 
		values (
		'".$params['f_name']."',
		'".$params['l_name']."',
		'".$params['ag_name']."',
		'".$params['c_email']."',
		'".$params['country']."',
		'".$params['phone']."',
		'".$params['update']."',
		'".date('Y-m-d')."'
		)";
	
	if (mysql_query($qry))
	{
		$id = mysql_insert_id();
		$key = md5(time().mysql_insert_id);
		
		mysql_query("update partners set kys = '".$key."' where id = '".$id."'");
		
		$to = $params['c_email'];
		
		$subject = 'Complete your Registration with SingaporeDeals4u';
		$body = '<p>Dear '.$params['f_name']." ".$params['l_name'].'</p>';
		$body.="<p>Greetings from SingaporeDeals4u!</p>";
		$body.= "<p>To complete your registration and get your Agent Code, please confirm your email address by clicking the link below or copying and pasting it into your browser:</p>";
		$body.="<p><a href='http://www.singaporedeals4u.com/confirm.php?key=".$key."'>http://www.singaporedeals4u.com/confirm.php?key=".$key."</a></p>";
		$body.="<p>This is a one-time link, which expires after 24 hours for security reasons. You can get a new link by going to http://www.singaporedeals4u.com/ and registering again.</p>";
		$body.="<p>If you need any help, we are there for you at sales@SingaporeDeals4u.com</p>";
		$body.="<p>Cheers</p>";
		$body.="<p>SingaporeDeals4u Team</p>";
		
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: SingaporeDeals4u <sales@SingaporeDeals4u.com>' . "\r\n" . "CC: sales@SingaporeDeals4u.com";
		//$headers .= 'From: SingaporeDeals4u <sairamalik95@gmail.com>' . "\r\n" . "CC: sairamalik95@gmail.com";		

		mail($to,$subject,$body,$headers);
		
		echo 'Successfully Registered';
		
		
	}else{
		echo 'Fail please try again!';
	}
?>


?>