<?php
/*include_once 'inc/config.inc.php';*/

include('inc/db_con.inc.php');
require_once("inc/libs/class.phpmailer.php");

        if($_POST['submit-tour-inquiry'])
        {       
         if($_POST['quotation-day-tours']=='on'){
             $quotation_day_tours = 1;
         }else{
             $quotation_day_tours = 0;
         }
         if($_POST['quotation-attraction-tickets']=='on'){
             $quotation_attraction_tickets = 1;
         }else{
             $quotation_attraction_tickets = 0;
         }
         if($_POST['quotation-meals']=='on'){
             $quotation_meals = 1;
         }else{
             $quotation_meals = 0;
         }
         if($_POST['quotation-transfers']=='on'){
             $quotation_transfers = 1;
         }else{
             $quotation_transfers = 0;
         }

         

        $infant = mysql_real_escape_string($_POST['infant']);
        $arrival_date = mysql_real_escape_string($_POST['arrival-date']);
        $ar_date = date("Y-m-d", strtotime($arrival_date));
        $arrival_option = mysql_real_escape_string($_POST['arrival-option']);
        $budget_from = mysql_real_escape_string($_POST['budget-from']);
        $budget_to = mysql_real_escape_string($_POST['budget-to']);
        $hotel_start_preference = mysql_real_escape_string($_POST['hotel-start-preference']);
        $number_of_night = mysql_real_escape_string($_POST['number-of-night']);
        
        $field_country_residence = mysql_real_escape_string($_POST['field_country_residence']);
        $destination = mysql_real_escape_string($_POST['destination']); 
        $source = "";
        $handled_by = "";  
        $agent_name = mysql_real_escape_string($_POST['agent_name']);
        $client_name = mysql_real_escape_string($_POST['client_name']); 
        $Email = mysql_real_escape_string($_POST['Email']);
        $in_dat = mysql_real_escape_string($_POST['in_dates']);
        $in_dates = date("Y-m-d", strtotime($in_dat));
        $tr_dat = mysql_real_escape_string($_POST['tr_dates']);
        $tr_dates = date("Y-m-d", strtotime($tr_dat));
        $adults = mysql_real_escape_string($_POST['adults']);
        $child = mysql_real_escape_string($_POST['child']);
        $currency = mysql_real_escape_string($_POST['currency']);
        $remarks = mysql_real_escape_string($_POST['remarks']);
	
	
	//echo "insert into inquiry(country_residence,destination,source,handled_by,agent_name,client_name,email,in_date,tr_date,arrival_date,arrival_option,number_of_night,adults,child,infant,currency,budget_from,budget_to,remarks,hotel_start_preference,quotation_day_tours,quotation_attraction_tickets,quotation_meals,quotation_transfers) values ('$field_country_residence','$destination','$source','$handled_by','$agent_name','$client_name','$Email','$in_dates','$tr_dates','$ar_date','$arrival_option','$number_of_night','$adults','$child','$infant','$currency','$budget_from','$budget_to','$remarks','$hotel_start_preference','$quotation_day_tours','$quotation_attraction_tickets','$quotation_meals','$quotation_transfers')";	
	//exit;
	   $query=mysql_query("insert into inquiry(country_residence,destination,source,handled_by,agent_name,client_name,email,in_date,tr_date,arrival_date,arrival_option,number_of_night,adults,child,infant,currency,budget_from,budget_to,remarks,hotel_start_preference,quotation_day_tours,quotation_attraction_tickets,quotation_meals,quotation_transfers) values ('$field_country_residence','$destination','$source','$handled_by','$agent_name','$client_name','$Email','$in_dates','$tr_dates','$ar_date','$arrival_option','$number_of_night','$adults','$child','$infant','$currency','$budget_from','$budget_to','$remarks','$hotel_start_preference','$quotation_day_tours','$quotation_attraction_tickets','$quotation_meals','$quotation_transfers')");	
	
         
	if($adults!=''){
	$adl = "Adults:";
	}else{
	$adl = '';
	}
	if($child!=''){
	$chil = "Child:";
	}else{
	$chil = '';
	}
	if($remarks!=''){
	$rem = "Remarks:";
	}else{
	$rem = '';
	}
	if($destination!=''){
	$des = "Destination";
	}else{
	$des = '';
	}
        if($infant!=''){
	$inf = "Infant";
	}else{
	$inf = '';
	}

	$body ='
		<style type="text/css">
		.txt {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 11px; color:#000000;
		}
		</style>
		
	<b>Inquiry Form Details:</b><br/><br/>
	<table width="80%" border="0" cellpadding="3" cellspacing="2">
		<tr>
		<td width="26%" align="left" class="txt"><strong>Country: </strong></td>
		<td width="70%" class="txt">'.$field_country_residence.'</td>
		</tr>
		
		<tr>		
		<td align="left" class="txt"><strong>'.$des.'</strong></td>
		<td class="txt">'.$destination.'</td>
		</tr>	
		
		<tr>
		<td align="left" class="txt"><strong>Email: </strong></td>
		<td class="txt">'.$Email.'</td>
		</tr>	
		
		<tr>
		<td align="left" class="txt"><strong>Agent Name: </strong></td>
		<td class="txt">'.$agent_name.'</td>
		</tr>
		
		<tr>
		<td align="left" class="txt"><strong>Client Name: </strong></td>
		<td class="txt">'.$client_name.'</td>
		</tr>
		
		<tr>
		<td align="left" class="txt"><strong>Inquiry Dates: </strong></td>
		<td class="txt">'.$in_dat.'</td>
		</tr>			
		
		<tr>
		<td align="left" class="txt"><strong>Travelling Date: </strong></td>
		<td class="txt">'.$tr_dat.'</td>
		</tr>
                
                <tr>
		<td align="left" class="txt"><strong>Arrival Date: </strong></td>
		<td class="txt">'.$arrival_date.'</td>
		</tr>
                
                <tr>
		<td align="left" class="txt"><strong>Arrival Option: </strong></td>
		<td class="txt">'.$arrival_option.'</td>
		</tr>
		
		<tr>
		<td align="left" class="txt"><strong>'.$adl.' </strong></td>
		<td class="txt">'.$adults.'</td>
		</tr>
		
		<tr>
		<td align="left" class="txt"><strong>'.$chil.'</strong></td>
		<td class="txt">'.$child.'</td>
		</tr>
                
                <tr>
		<td align="left" class="txt"><strong>'.$inf.'</strong></td>
		<td class="txt">'.$infant.'</td>
		</tr>
                
                <tr>
		<td align="left" class="txt"><strong>Number of Night</strong></td>
		<td class="txt">'.$number_of_night.'</td>
		</tr>		

		<tr>
		<td align="left" class="txt"><strong>Amount:</strong></td>
		<td class="txt">From: '.$currency.' '.$budget_from.'<br> To: '.$currency.' '.$budget_to.'</td>
		</tr>	
				
		<tr>
		<td align="left" class="txt"><strong>'.$rem.'</strong></td>
		<td class="txt">'.$remarks.'</td>
		</tr>	
	
	</table>
	
	';
	
	$Mail = new PHPMailer();
	$Mail -> ClearAllRecipients();
	/*$Mail -> AddAddress("Sales@SingaporeDeals4u.com");*/
	$Mail -> AddAddress("smehnaz@tkbench.com");
	
	$Mail -> From =$Email;
	 /*?>$Mail -> FromName =$name;<?php */
	$Mail -> FromName ='Private Tour';
	
	$Mail -> Subject = "Private Tour";
	 
	$Mail -> Body = stripslashes($body);
	 
	$Mail -> IsHTML(true);
	 
	$Mail -> Send();
	
	/*--------------------------------------customer email formate------------------------------------------------*/
	
	
	$body1 ='
			
	<b>Dear '.$client_name.':</b><br/>
	
	Thank You
	</br><br/><br/>
	Your Inquiry form has been submitted successfully to the Singapore Deals4u.
	
	
	<br/><br/>
	Regards!
	<br/>
	Singapore Team
	
	';
	
	$Mail1 = new PHPMailer();
	$Mail1 -> ClearAllRecipients();
	/*$Mail1 -> AddAddress("smehnaz@tkbench.com,".$Email);*/
	$Mail1 -> AddAddress($Email);
	 	
	$Mail1 -> From ="smehnaz@tkbench.com";
	
	$Mail1 -> FromName ='Singapore Deals4u';
	
	$Mail1 -> Subject = "Confirmation Email";
	 
	$Mail1 -> Body = stripslashes($body1);
	 
	$Mail1 -> IsHTML(true);
	 
	$Mail1 -> Send();


		
	
	header("location:private-tour.php?msg=ok");
}
?>