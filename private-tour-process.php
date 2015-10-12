<?php
/*include_once 'inc/config.inc.php';*/

include('inc/db_con.inc.php');
require_once("inc/libs/class.phpmailer.php");

        if($_POST['submit-tour-inquiry'])
        {       
         if($_POST['quotation-day-tours']=='on'){
             $quotation_day_tours = 1;
             $val_day_tours = "Yes";
         }else{
             $quotation_day_tours = 0;
             $val_day_tours = "No";
         }
         if($_POST['quotation-attraction-tickets']=='on'){
             $quotation_attraction_tickets = 1;
             $val_attraction_tickets = "Yes";
         }else{
             $quotation_attraction_tickets = 0;
             $val_attraction_tickets = "No";
         }
         if($_POST['quotation-meals']=='on'){
             $quotation_meals = 1;
             $val_meals = "Yes";
         }else{
             $quotation_meals = 0;
             $val_meals = "No";
         }
         if($_POST['quotation-transfers']=='on'){
             $quotation_transfers = 1;
             $val_transfers = "Yes";
         }else{
             $quotation_transfers = 0;
             $val_transfers = "No";
         }

         
         // print_r($_POST);
        $_POST['number-of-night'];
        $infant = mysql_real_escape_string($_POST['infant']);
        $tr_dat_to = mysql_real_escape_string($_POST['tr_date_to']);
        $tr_date_to = date("Y-m-d", strtotime($tr_dat_to));
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
        $tr_dat_frm = mysql_real_escape_string($_POST['tr_date_from']);
        $tr_date_from = date("Y-m-d", strtotime($tr_dat_frm));
        $adults = mysql_real_escape_string($_POST['adults']);
        $child = mysql_real_escape_string($_POST['child']);
        $currency = mysql_real_escape_string($_POST['currency']);
        $remarks = mysql_real_escape_string($_POST['remarks']);
	
	
	//echo "insert into inquiry(country_residence,destination,source,handled_by,agent_name,client_name,email,in_date,tr_date,arrival_date,arrival_option,number_of_night,adults,child,infant,currency,budget_from,budget_to,remarks,hotel_start_preference,quotation_day_tours,quotation_attraction_tickets,quotation_meals,quotation_transfers) values ('$field_country_residence','$destination','$source','$handled_by','$agent_name','$client_name','$Email','$in_dates','$tr_dates','$ar_date','$arrival_option','$number_of_night','$adults','$child','$infant','$currency','$budget_from','$budget_to','$remarks','$hotel_start_preference','$quotation_day_tours','$quotation_attraction_tickets','$quotation_meals','$quotation_transfers')";	
	//exit;
	   $query=mysql_query("insert into inquiry(country_residence,destination,source,handled_by,agent_name,client_name,email,in_date,tr_date_from,tr_date_to,arrival_option,number_of_night,adults,child,infant,currency,budget_from,budget_to,remarks,hotel_start_preference,quotation_day_tours,quotation_attraction_tickets,quotation_meals,quotation_transfers) values ('$field_country_residence','$destination','$source','$handled_by','$agent_name','$client_name','$Email','$in_dates','$tr_date_from','$tr_date_to','$arrival_option','$number_of_night','$adults','$child','$infant','$currency','$budget_from','$budget_to','$remarks','$hotel_start_preference','$quotation_day_tours','$quotation_attraction_tickets','$quotation_meals','$quotation_transfers')");	
           if($query=1){
           
           


        $last_id = mysql_insert_id();
        $inquiry_num =  $last_id;

         
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
		font-size: 12px; color:#000;
                padding: 0px;}
                .heading{
                font-size: 12px; color:blue;
                padding: 0px;
                }
		</style>
		
                <b>Inquiry Form Details:</b><br/><br/>
                <table rules="all" width="80%" style="border-color: #666; border:2px solid #666;" cellpadding="10">
                
                <tr style="background: #eee; padding:5px 10px; margin:0px">
                <td style="padding:5px 10px; margin:0px;"colspan="2" class="heading" ><strong> Personal Information </strong></td>
		</tr>
                               
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Client Name: </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$client_name.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Email: </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$Email.'</td>
		</tr>	
		
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Agent Name: </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$agent_name.'</td>
		</tr>
		
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"width="26%" align="left" class="txt"><strong>Country: </strong></td>
		<td style="padding:1px 10px; margin:0px;"width="70%" class="txt">'.$field_country_residence.'</td>
		</tr>
		
		<tr style="padding:1px 10px; margin:0px">		
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>'.$des.'</strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$destination.'</td>
		</tr>	
		
                <tr style="background: #eee; padding:5px 10px; margin:0px">
                <td style="padding:5px 10px; margin:0px;"colspan="2" class="heading"><strong> Inquired Information </strong></td>
		</tr>
                
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Inquiry Date: </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$in_dat.'</td>
		</tr>			
		
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Travelling Date From: </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$tr_dat_frm.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Travelling Date To: </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$tr_dat_to.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Number of Night</strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$number_of_night.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Arrival Option: </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$arrival_option.'</td>
		</tr>		
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>'.$adl.' </strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$adults.'</td>
		</tr>
		
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>'.$chil.'</strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$child.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>'.$inf.'</strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$infant.'</td>
		</tr>
                
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>Amount:</strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">From: '.$currency.' '.$budget_from.'<br> To: '.$currency.' '.$budget_to.'</td>
		</tr>	
                
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"width="26%" align="left" class="txt"><strong>Inquiry No: </strong></td>
		<td style="padding:1px 10px; margin:0px;"width="70%" class="txt">'.$inquiry_num.'</td>
		</tr>
                 
            
                    
                    
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"width="26%" align="left" class="txt"><strong>Quotation Day Tours: </strong></td>
		<td style="padding:1px 10px; margin:0px;"width="70%" class="txt">'.$val_day_tours.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"width="26%" align="left" class="txt"><strong>Quotation Attraction Tickets: </strong></td>
		<td style="padding:1px 10px; margin:0px;"width="70%" class="txt">'.$val_attraction_tickets.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"width="26%" align="left" class="txt"><strong>Quotation Meals:</strong></td>
		<td style="padding:1px 10px; margin:0px;"width="70%" class="txt">'.$val_meals.'</td>
		</tr>
                
                <tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"width="26%" align="left" class="txt"><strong>Quotation Transfers </strong></td>
		<td style="padding:1px 10px; margin:0px;"width="70%" class="txt">'.$val_transfers.'</td>
		</tr>
                
		<tr style="padding:1px 10px; margin:0px">
		<td style="padding:1px 10px; margin:0px;"align="left" class="txt"><strong>'.$rem.'</strong></td>
		<td style="padding:1px 10px; margin:0px;"class="txt">'.$remarks.'</td>
		</tr>	
	
	</table>
	
	';

	$Mail = new PHPMailer();
	$Mail -> ClearAllRecipients();
	$Mail -> AddAddress("Sales@SingaporeDeals4u.com");
     //$Mail -> AddAddress("smehnaz@tkbench.com");
	
	
	$Mail -> From =$Email;
	
	$Mail -> FromName ='Inquiry Submission > Inq No:'. $inquiry_num;
	
	$Mail -> Subject = "Inquiry Submission > Inq No:". $inquiry_num;
	 
	$Mail -> Body = stripslashes($body);
	 
	$Mail -> IsHTML(true);
	 
	$Mail -> Send();
	
	/*--------------------------------------customer email formate------------------------------------------------*/
	
	
	$body1 ='
			
	Dear '.$client_name.':<br/>
	
	Thank You
	</br><br/><br/>
	We have successfully received your inquiry as attached below. Your Inquiry reference is ['. $inquiry_num.'] <br/><br/>

	Our team will be looking into this request and get back to you as soon as possible, 

	If you want instant reply, you may contact us at +65 81615060 via call, SMS or Whats App.<br/><br/>
	
	'.$body.'
	
	<br/><br/>
	Best Regards!
	<br/>
	Singapore Deals Team
	
	';
	
	$Mail1 = new PHPMailer();
	$Mail1 -> ClearAllRecipients();
	/*$Mail1 -> AddAddress("smehnaz@tkbench.com,".$Email);*/
	$Mail1 -> AddAddress($Email);
	 	
	$Mail1 -> From ="Sales@SingaporeDeals4u.com";
	
	$Mail1 -> FromName ='Singapore Deals4u';
	
	$Mail1 -> Subject = "Inquiry Successfully Submitted";
	 
	$Mail1 -> Body = stripslashes($body1);
	 
	$Mail1 -> IsHTML(true);
	 
	$Mail1 -> Send();

	header("location:private-tour.php?msg=ok");
        }else{
            
        }
}
?>