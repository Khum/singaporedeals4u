<?php
/*include_once 'inc/config.inc.php';*/

include('inc/db_con.inc.php');
require_once("inc/libs/class.phpmailer.php");
 
        if($_POST['submit'])
        {
	    $hotel_name = mysql_real_escape_string($_POST['hotel_name']);
	    $hotel_address = mysql_real_escape_string($_POST['hotel_address']);
	    $room_no = mysql_real_escape_string($_POST['room_no']);
	    $phone_no = mysql_real_escape_string($_POST['phone_no']);
	    $delivery = mysql_real_escape_string($_POST['delivery']);
	    $tour_date = mysql_real_escape_string($_POST['tour_date']);
	    $time_slots = mysql_real_escape_string($_POST['time_slots']);
         
	if($delivery=='Please Call me on this phone number Now'){
	$phone_title = "Phone Number";
        $phoneno = $phone_no;
	}else{
	$phone_title = '';
        $phoneno = '';
	}
	if($delivery=='Please Meet me for more information about Day Tour Options'){
	$Tour_Date_title = "Tour Date";
        $Time_Slot_title = "Time Slots";
        $tourdate = $tour_date;
        $timeslots = $time_slots;
	}else{
	$Tour_Date_title = '';
        $Time_Slot_title = '';
        $tourdate = '';
        $timeslots = '';
	}
	
	$body ='
		<style type="text/css">
		.txt {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px; color:#000000;
		}
		</style>
		
	<b>Contact Us Details:</b><br/><br/>
	<table width="80%" border="0" cellpadding="3" cellspacing="2">
		<tr>
		<td width="26%" align="left" class="txt"><strong>Hotel Name </strong></td>
		<td width="70%" class="txt">'.$hotel_name.'</td>
		</tr>
		
		<tr>		
		<td align="left" class="txt"><strong>Hotel Address</strong></td>
		<td class="txt">'.$hotel_address.'</td>
		</tr>	
		
		<tr>
		<td align="left" class="txt"><strong>Room No </strong></td>
		<td class="txt">'.$room_no.'</td>
		</tr>	
		
		<tr>
		<td align="left" class="txt"><strong>Ticket Delivery Option </strong></td>
		<td class="txt">'.$delivery.'</td>
		</tr>
                
                <tr>
		<td align="left" class="txt"><strong>'.$phone_title.' </strong></td>
		<td class="txt">'.$phoneno.'</td>
		</tr>
		
		<tr>
		<td align="left" class="txt"><strong>'.$Tour_Date_title.'</strong></td>
		<td class="txt">'.$tourdate.'</td>
		</tr>			
		
		<tr>
		<td align="left" class="txt"><strong>'.$Time_Slot_title.'</strong></td>
		<td class="txt">'.$timeslots.'</td>
		</tr>
                
	</table>
	
	';
	$subject = "Kiosk Customer from ".$hotel_name." (".$hotel_address.")";
	$FromName = 'iTour Kiosk';
	$from = 'Kiosk';
	
	
	$Mail1 = new PHPMailer();
	$Mail1 -> ClearAllRecipients();
	$Mail1 -> AddAddress("Sales@SingaporeDeals4u.com");
	 	
	$Mail1 -> From =$from;

	$Mail1 -> FromName ='iTour Kiosk';

	$Mail1 -> Subject = $subject;
 
	$Mail1 -> Body = stripslashes($body);

	$Mail1 -> IsHTML(true);
 
	$Mail1 -> Send();
	
	
	header("location:contact_us_1.php?msg=ok");
}else{
  header("location:contact_us_1.php");
}
?>