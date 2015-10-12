<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Singapore Day Tours, Singapore Attractions, Singapore Best Tours, Singapore Island Tours, Singapore City Tours, Singapore Private Tours, Singapore Family Tours, Singapore Adventure Tours, Singapore Couple Tours, Singapore Nature Tours">
    <meta name="description" content="We brings best Travel deals for Singapore. We have Singapore best Day Tours & Attractions, short stay in Singapore. Our Professional can provide the best advice to visitors.">
    <meta name="author" content="Ansonika">
    <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
	<style>
    .fi
    erable {
                margin-top: 15px;
            }
            .filterable .panel-heading .pull-right {
                margin-top: -20px;
            }
            .filterable .filters input[disabled] {
                background-color: transparent;
                border: none;
                cursor: auto;
                box-shadow: none;
                padding: 0;
                height: auto;
            }
            .filterable .filters input[disabled]::-webkit-input-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]::-moz-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]:-ms-input-placeholder {
                color: #333;
            }
    </style>
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>
<header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->    
    <!----- For Ticket --->
    <?php  
    
    if((($_POST['payment'] == 'ticket') || ($_POST['payment'] == 'spot')) && !empty($_SESSION[$_SESSION['Auth_name']]) )
        {
            
            $hname = $_POST['hotel_n'];
            $hadd = $_POST['hotel_a'];
            $room = $_POST['room_no'];
            $delv_type = $_POST['delivery'];  ////delivery type e,g: express
            $delv_date = $_POST['tour_date'];  ////delivery date
            if($_POST['delivery'] == 'express')
            {
                $Del_time = date('H:i:s', strtotime("+30 min"));
            }
            else{
                if($_POST['time_slots'] == 8)
                {
                    $Del_time = "8:30am to 9:00am";
                }
                else if($_POST['time_slots'] == 12)
                {
                    $Del_time = "12:00pm to 12:30pm";
                }
                else if($_POST['time_slots'] == 6)
                {
                    $Del_time = "6:00pm to 6:30pm";
                }
                else{
                     $Del_time = "11:30pm to 12:00am";
                }
            }
            
  ?>  
    
  <div class="container" id="ticket_div" style="margin-top:130px;display:none">
    
    
    <div class="row">
    	<div class="col-sm-offset-2 col-sm-7 col-xs-12">
    		<div class="panel panel-primary filterable">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Invoice</strong></h3>
    			</div>
    			<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                        <?php                           
                            $grand_total = 0;
                            
                            $email_content = '
                            <p> Here are the details of the Shopping</p>
                            <table class="table" cellspacing="0" cellpadding="5" border="1" width="700">

                                <tr>
                                    <td><strong> Hotel Name </strong></td>
                                    <td>'.$hname.'</td>
                                </tr>
                                <tr>
                                    <td> <strong>Hotel Address </strong></td>
                                    <td>'.$hadd.'</td>
                                </tr>
                                <tr>
                                    <td><strong>Room No</strong></td>
                                    <td>'.$_POST['room_no'].'</td>
                                </tr>';
                            
                            $counter_id =0;
                            $First_order_id=0;
                            $index=1;
                            foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                            {
                                if(($item['pid'] != '') && ($item['pid'] != 'null'))
                                {
                                    
                                    $others = 0;
                                    $total = 0;
                                    $sub=0;
                                    $pid =$item['pid'];
                                    $Total_aprice = $item['adult_price'] * $item['a_qty'];
                                    $Total_cprice = $item['child_price'] * $item['c_qty'];
                                    $total = (($item['adult_price'] * $item['a_qty']) + ($item['child_price'] * $item['c_qty']));  
                                    
                                    $date = date('Y-m-d', strtotime($item['date']));  
                                    
                                    $time = date('H:i:s', strtotime($item['time']));
                                    
                                    if($date == '1970-01-01')
                                    {
                                        $date = 'Null';
                                        $time = '';
                                    }

                                    $others = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']+ $item['2way']['price']; 
                                    $date_added =  date("Y-m-d H:i:s");
                                    
                                    if($item['guide']['price'])
                                    { $guide = 1; }
                                    if($item['pickup']['price'])
                                    { $pickup = 1; }
                                    if($item['insurance']['price'])
                                    { $insurance = 1; }
                                    if($item['coffee']['price'])
                                    { $coffee = 1; }
                                    if($item['welcome']['price'])
                                    { $welcome = 1; }
                                    if($item['dinner']['price'])
                                    { $dinner = 1; }
                                    if($item['bike']['price'])
                                    { $bike = 1; }
                                    if($item['2way']['price'])
                                    { $two_way = 1; }

                                    $product_total = ($total + $others) * $item['pkg'] ;
                                
                    $order_ins ="INSERT INTO `order`(`full_name`, `email`, `mobile`, `hotel_name`, `hotel_address`,`room_no`, `total_adult`, `total_child`, `tour_date`, "
                                        . "`pickup_time`, `product_id`, `product_name`, `per_adult_price`, `per_child_price`, `total_adult_price`, "
                                        . "`total_child_price`, `total_price`, `payment_mod`, `status`, `added`,`guide`,`pickup`,`insurance`,`coffee`, "
                                        . "`welcome`, `dinner`, `bike`, `two_way`, `is_deleted`,`delivery_type`,`delivery_time`) values"
                              . "('".$name."','".$email."','".$phone."','".$hname."','".$hadd."','".$room."','".$item['a_qty']."','".$item['c_qty']."','".$date."', '".$time
                                        ."','".$item['pid']."','".$item['name']."','".$item['adult_price']."','".$item['child_price']
                                        ."','".$Total_aprice."','".$Total_cprice."','".$product_total."','"."on_spot','new','".$date_added 
                                        ."','".$guide."','".$pickup."','".$insurance."','".$coffee."','".$welcome."','".$dinner."','".$bike."','".$two_way."','N','".$delv_type."','".$Del_time."')";
                                        
                                $res = mysql_query($order_ins);
                                $orderid = mysql_insert_id();
                                
                                if($res)
                                {
                                    $del = "DELETE from wishlist where id=".$pid;
                                    $del_qry = Query($del);
                                    
                                }else
                                {
                                	"<h4>Sorry order has failed due to some unknown errors</h4>";
                                	exit;
                                }
                                
                              
                        ?>        
                
                      <tbody>

                            <?php
                                if($counter_id == 0)
                                {
                                    $First_order_id = $orderid;
                                    $counter_id=1;
                            ?>    
                                <tr class="filters" style="background-color:#B2E0C2">
                                    
                                    <td style="font-weight:bold; font-size:16px"><strong>Reference Number</strong></td>
                                    <td style="font-weight:bold; font-size:16px"> <?php echo  $orderid; ?> </td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Hotel Address</strong></td>
                                    <td><?php echo $hname.' '.$hadd; ?> </td>
                                </tr>
                                
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Room No</strong></td>
                                    <td><?php echo $_POST['room_no']; ?> </td>
                                </tr>
                            <?php
                                }
                            ?>    
                                <tr class="filters" style="border-top:2px solid #0000FF">
                                    
                                    <td style="font-weight:bold"><strong>Item Description</strong></td>
                                    <td><?php echo stripcslashes(Decode($item['name'])); ?> </td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Price</strong></td>
                                    <td><?php echo 'SGD '.$total; ?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Adults</strong></td>
                                    <td><?php echo $item['a_qty']; ?> </td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Child</strong></td>
                                    <td><?php  
                                    if($item['c_qty'] != '')
                                    {	
                                    	echo $item['c_qty']; 
                                    }
                                    else{
                                    	echo '0';
                                    }	
                                    	?>
                                    	</td>
                                </tr>
                           <!--     <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Quantity</strong></td>
                                    <td><?php //echo $item['pkg']; ?></td>
                                </tr>-->
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Others</strong></td>
                                    <td><?php echo 'SGD '.$others; ?></td>
                                </tr>
                                <?php
                                                    
                            $email_content .= "
                                            <tr>
                                                <td> <strong>Item ".$index."</strong></td>
                                                <td>". stripcslashes(Decode($item['name']))." </td>
                                            </tr>
                                            
                                            <tr>
                                                <td> Adult </td>
                                                <td>".$item['a_qty']." </td>
                                            </tr>
                                            <tr>
                                                <td> Child </td>
                                                <td>".$item['c_qty']." </td>
                                            </tr>
                                            
                                            <tr>
                                                <td> Item ".$index." Total</td>
                                                <td>SGD ".$item['promo_adult']." </td>
                                            </tr>";
                                            if($_POST['flag_tour'] == 1 )
		                               {
		                                 
		                                    $email_content .= "<tr>
		                                                <td> Date-Time </td>
		                                                <td>".$date.' '.$time." </td>
		                                            </tr>"; 
		                               }    
                                        if($item['guide']['name'])
                                        {
                                           echo ' <tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['guide']['name'].'</strong></td>
                                                    <td>SGD '.$item['guide']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['guide']['name']." </td>
                                                           <td>SGD ".$item['guide']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['pickup']['name'])
                                        {
                                            echo '<tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['pickup']['name'].'</strong></td>
                                                    <td>SGD '.$item['pickup']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['pickup']['name']." </td>
                                                           <td>SGD ".$item['pickup']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['insurance']['name'])
                                        {
                                            echo '<tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['insurance']['name'].'</strong></td>
                                                    <td>SGD '.$item['insurance']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['insurance']['name']." </td>
                                                           <td>SGD ".$item['insurance']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['coffee']['name'])
                                        {
                                             echo '<tr class="filters">
                                                  
                                                    <td style="font-weight:bold"><strong>'.$item['coffee']['name'].'</strong></td>
                                                    <td>SGD '.$item['coffee']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['coffee']['name']." </td>
                                                           <td>SGD ".$item['coffee']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['welcome']['name'])
                                        {
                                            echo '<tr class="filters">
                                                   
                                                    <td style="font-weight:bold"><strong>'.$item['welcome']['name'].'</strong></td>
                                                    <td>SGD '.$item['welcome']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['welcome']['name']." </td>
                                                           <td>SGD ".$item['welcome']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['dinner']['name'])
                                        {
                                            echo '<tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['dinner']['name'].'</strong></td>
                                                    <td>SGD '.$item['dinner']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['dinner']['name']." </td>
                                                           <td>SGD ".$item['dinner']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['bike']['name'])
                                        {
                                            echo '<tr class="filters">
                                                   
                                                    <td style="font-weight:bold"><strong>'.$item['bike']['name'].'</strong></td>
                                                    <td>SGD '.$item['bike']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['bike']['name']." </td>
                                                           <td>SGD ".$item['bike']['price']." </td>
                                                       </tr>";
                                        }
                                        
                                        if($item['2way']['name'])
                                        {
                                            echo '<tr class="filters">
                                                   
                                                    <td style="font-weight:bold"><strong>'.$item['2way']['name'].'</strong></td>
                                                    <td>SGD '.$item['2way']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['2way']['name']." </td>
                                                           <td> SGD ".$item['2way']['price']." </td>
                                                       </tr>";
                                        }
                                        $sub = ($total + $others) * $item['pkg'];
                                        $email_content .= "
                                        	
                                                       <tr>
                                                           <td><strong>Sub Total ".$index."</strong> </td>
                                                           <td> SGD ".$sub." </td>
                                                       </tr>";
                                       ?>
                                   	
                                   <?php                    
                            
                                $grand_total = $grand_total + (($total + $others)* $item['pkg']) ;
                                $index++;
                            }
                                
                            }       
                            
                            if($_POST['delivery'] == 'express')
                            {
                                $grand_total = $grand_total + 10;
                                ?>
                                <tr class="filters" style="font-size:16px;border-top:2px solid #0000FF">
                                    <td style="font-weight:bold"><strong>Delivery Option</strong></td>
                                    <td>Express Delivery</td>
                                </tr>
                              <?php   
                                $email_content .='<tr class="filters" >

                                            <td><strong>Delivery Option</strong></td>
                                            <td>Express Delivery</td>
                                        </tr>'; 
                            }
                            else
                            {
                               ?>
                                <tr class="filters" style="font-size:16px;border-top:2px solid #0000FF">

                                            <td style="font-weight:bold"><strong>Delivery Option</strong></td>
                                            <td>Free Delivery</td>
                                        </tr>
                                <?php 
                                $email_content .='<tr class="filters" style="font-size:16px">

                                        <td><strong>Delivery Option</strong></td>
                                        <td>Free Delivery</td>
                                    </tr>';
                            }
                            ?>
                                <tr class="filters" style="font-size:16px">

                                    <td style="font-weight:bold">Delivery Time</td>
                                    <td><?php echo $delv_date.' '.$Del_time ?> </td>
                                </tr>
                            <?php
                                $email_content .='<tr class="filters" >

                                                <td ><strong>Delivery Time</strong></td>
                                                <td>'.$delv_date.' &nbsp;'.$Del_time.'</td>
                                            </tr>';
                            ?>    
                                
                            <?php    
                                $email_content .= "
                                    <tr>
                                        <td> <strong>Amount to Collect</strong> </td>
                                        <td> SGD ". $grand_total." </td>
                                    </tr>
                                    </table>"; 
                            ?>                          
                                    <hr> 
                                                    <tr class="filters" style="font-size:16px">

                                                        <td style="font-weight:bold"><strong>Net Total</strong></td>
                                                        <td><?php echo 'SGD '.$grand_total ?></td>
                                                    </tr>
                                                     
    						</tbody>
    					</table>
    					<p class="filters" style="font-size:14px !important">

                                        	<td style="font-weight:bold">
                                        	<strong>You can wait at the Hotel Lobby or in your Room during this time. Our delivery staff will contact you. Thanks</strong></td>
                                        
                                    	</p>
    				</div>
    			</div>
                   
                    
    		</div>
    	</div>
        
    </div>
</div>
    <?php
    /*
        echo '<br><br><div class=" panel-heading" style="margin-top:100px;text-align:center" >
        	
                <p style="font-size:24px !important">Your Order is Confirmed & 
                the Reference Number is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span></p>
                <p style="font-size:20px !important">We will deliver tickets at '.$delv_date.' '.$Del_time.'</p>
                <p style="font-size:20px !important">Your total bill will be SGD <span style="color:#e04f67 !important;font-size:24px;font-weight:bold">'.$grand_total.' </span></p>
                <p style="font-size:20px !important">You can wait in the Lobby or in your Room. Our delivery staff will contact you to pass the tickets and collect the amount</p>
                <p style="font-size:20px !important">Our delivery hotline number is 65-8161 5060 </p>
                 <br />
                 <p id="note" style="font-size:20px !important;"></p>
                 <p style="font-size:20px !important">Note : For request for Tour Booking,
                                we will Contact you as soon as we get confirmation for your requested date to arrange collection of Payment.</p>
                 <br />
                <button id="ticket_inv" class="col-sm-offset-0" style="padding:5px;font-size:20px !important">
                    See More Detail
                </button>
                <br>    
                <a style="font-size:20px !important;width:30%; margin-top: 30px;" href="index.php" class="col-sm-offset-4 btn_full" ><i class="icon-right"></i> Home Page</a>
               </div><br><br>';      */                   
        		
        
    	?>
    	<?php
    		if( ($_POST['flag_tours']!= 1) && ($date !='' && $date !='Null') )
                    {   
                        
                        $order_date = date('Y-m-d');
                        $order_time = date("H:i:s");
                        $orderTime = $order_date.' '.$order_time;
                        
                        //// Option A
                        $add_mins = strtotime("+30 minutes", strtotime($orderTime));
                        $booking_time = date("H:i:s", $add_mins);
                        $booking_time = $order_date.' '.$booking_time;
                        $bookingSlot = $date.' '.$time;
                        
                        $t1 = $order_date." 7:00:00";
                        $t2 = $order_date." 19:30:00";
                        $t3_add = date("Y-m-d",strtotime($order_date."+1 day"));
                        $t3 = $t3_add." 11:59:00";
                        
                        $t4 = $order_date." 00:00:01";
                        $t5 = $order_date." 6:59:00";
                        $t6 = $order_date." 11:59:00";
                        ///// Option B
                        $booking_date_b = date("Y-m-d",strtotime($order_date."+1 day"));
                                
                        
                        if( (strtotime($date) == strtotime($order_date)) && 
                                ( (strtotime($orderTime) > strtotime($t1)) && (strtotime($orderTime) < strtotime($t2))) && 
                                (strtotime($booking_time) > strtotime($bookingSlot)) )
                        {    
                            $message = '<div class=" panel-heading" style="margin-top:100px;text-align:center" >'
                                    . '<p id="note" style="font-size:24px !important"></p>'
                                    . '<p style="font-size:24px !important">We have received your request. Your Booking Reference is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span> </p>'
                                     . '<p style="font-size:20px !important">We will contact you as soon as we get confirmation for your requested date to arrange collection of Payment</p>'
                                    . '<button id="ticket_inv" class="col-sm-offset-0" style="padding:5px;font-size:20px !important">See More Detail'
                                        .'</button></div>';
                            echo $message;
                        }
                        else if( (strtotime($date) == strtotime($booking_date_b)) && 
                                ((strtotime($orderTime) > strtotime($t2)) && (strtotime($orderTime) < strtotime($t3))) &&
                                (strtotime($t3) > strtotime($bookingSlot)) )
                        {    
                            $message = '<div class=" panel-heading" style="margin-top:100px;text-align:center" >'
                                    .'<p id="note" style="font-size:24px !important"></p>' 
                                    .'<p style="font-size:22px !important">We have received your request. Your Booking Reference is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span> </p>'
                                    . '<p style="font-size:20px !important">We will contact you as soon as we get confirmation for your requested date to arrange collection of Payment</p></div>';
                            echo $message;
                            
                        }
                        else if((strtotime($date) == strtotime($order_date)) && 
                                ((strtotime($orderTime) > strtotime($t4)) && (strtotime($orderTime) < strtotime($t5)))&&
                                (strtotime($t6) > strtotime($bookingSlot)) )
                        {
                            
                             $message ='<div class=" panel-heading" style="margin-top:100px;text-align:center" >' 
                                     .'<p id="note" style="font-size:24px !important"></p>'
                                     .'<p style="font-size:24px !important">We have received your request. Your Booking Reference is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span> </p>'
                                     . "<p style='font-size:20px !important'>We will contact you as soon as we get confirmation for your requested date to arrange collection of Payment</p></div>";
                            echo $message; 
                        }
                        else
                        {
                            echo '<br>
                
                                <br><div class=" panel-heading" style="margin-top:100px;text-align:center" >
                                
                                <p style="font-size:24px !important">Your Order is Confirmed & 

                                the Reference Number is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span></p>
                                <p style="font-size:20px !important">We will deliver tickets at '.$delv_date.' '.$Del_time.'</p>
                                <p style="font-size:20px !important">Your total bill will be SGD <span style="color:#e04f67 !important;font-size:24px;font-weight:bold">'.$grand_total.' </span></p>
                                <p style="font-size:20px !important">You can wait in the Lobby or in your Room. Our delivery staff will contact you to pass the tickets and collect the amount</p>
                                <p style="font-size:20px !important">Our delivery hotline number is 65-8161 5060 </p>

                                <br />
                                <p style="font-size:20px !important">Note : For request for Tour Booking,
                                we will Contact you as soon as we get confirmation for your requested date to arrange collection of Payment.</p>
                                <br />

                                <button id="ticket_inv" class="col-sm-offset-0" style="padding:5px;font-size:20px !important">
                                    See More Detail
                                </button>
                                <br>    
                                <a style="font-size:20px !important;width:30%; margin-top: 30px;" href="index.php" class="col-sm-offset-4 btn_full" ><i class="icon-right"></i> Home Page</a>
                               </div><br><br>';                            
                        }    
                    }else
                    {
                    	echo '<br>
                
                                <br><div class=" panel-heading" style="margin-top:100px;text-align:center" >
                                
                                <p style="font-size:24px !important">Your Order is Confirmed & 

                                the Reference Number is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span></p>
                                <p style="font-size:20px !important">We will deliver tickets at '.$delv_date.' '.$Del_time.'</p>
                                <p style="font-size:20px !important">Your total bill will be SGD <span style="color:#e04f67 !important;font-size:24px;font-weight:bold">'.$grand_total.' </span></p>
                                <p style="font-size:20px !important">You can wait in the Lobby or in your Room. Our delivery staff will contact you to pass the tickets and collect the amount</p>
                                <p style="font-size:20px !important">Our delivery hotline number is 65-8161 5060 </p>

                                <br />
                                <p style="font-size:20px !important">Note : For request for Tour Booking,
                                we will Contact you as soon as we get confirmation for your requested date to arrange collection of Payment.</p>
                                <br />

                                <button id="ticket_inv" class="col-sm-offset-0" style="padding:5px;font-size:20px !important">
                                    See More Detail
                                </button>
                                <br>    
                                <a style="font-size:20px !important;width:30%; margin-top: 30px;" href="index.php" class="col-sm-offset-4 btn_full" ><i class="icon-right"></i> Home Page</a>
                               </div><br><br>';
                    }
                 /*   if($date !='' && $date !='Null')
                    {   
                        
                        $order_date = date('Y-m-d');
                        $order_time = date("H:i:s");
                        $orderTime = $order_date.' '.$order_time;
                        
                        //// Option A
                        //$booking_date_a = date('Y-m-d');
                        $add_mins = strtotime("+30 minutes", strtotime($orderTime));
                        $booking_time = date("H:i:s", $add_mins);
                        $booking_time = $order_date.' '.$booking_time;
                        $bookingSlot = $date.' '.$time;
                        
                        $t1 = $order_date." 7:00:00";
                        $t2 = $order_date." 19:30:00";
                        $t3_add = date("Y-m-d",strtotime($order_date."+1 day"));
                        $t3 = $t3_add." 11:59:00";
                        
                        $t4 = $order_date." 00:00:01";
                        $t5 = $order_date." 6:59:00";
                        $t6 = $order_date." 11:59:00";
                        ///// Option B
                        //$booking_date_b = date("Y-m-d");
                        $booking_date_b = date("Y-m-d",strtotime($order_date."+1 day"));
                        //$booking_date_b = date("Y-m-d",$booking_date_c);
                        
                                
                        
                        if( (strtotime($date) == strtotime($order_date)) && 
                                ( (strtotime($orderTime) > strtotime($t1)) && (strtotime($orderTime) < strtotime($t2))) && 
                                (strtotime($booking_time) > strtotime($bookingSlot)) )
                        {    
                            $message = '<div class=" panel-heading" style="margin-top:100px;text-align:center" >'
                                    . '<p id="note" style="font-size:24px !important"></p>'
                                    . '<p style="font-size:24px !important">We have received your request. Your Booking Reference is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span> </p>'
                                     . '<p style="font-size:20px !important">We will contact you as soon as we get confirmation for your requested date to arrange collection of Payment</p>'
                                    . '<button id="ticket_inv" class="col-sm-offset-0" style="padding:5px;font-size:20px !important">See More Detail'
                                        .'</button></div>';
                            echo $message;
                        }
                        else if( (strtotime($date) == strtotime($booking_date_b)) && 
                                ((strtotime($orderTime) > strtotime($t2)) && (strtotime($orderTime) < strtotime($t3))) &&
                                (strtotime($t3) > strtotime($bookingSlot)) )
                        {    
                            $message = '<div class=" panel-heading" style="margin-top:100px;text-align:center" >'
                                    .'<p id="note" style="font-size:24px !important"></p>' 
                                    .'<p style="font-size:22px !important">We have received your request. Your Booking Reference is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span> </p>'
                                    . '<p style="font-size:20px !important">We will contact you as soon as we get confirmation for your requested date to arrange collection of Payment</p></div>';
                            echo $message;
                            
                        }
                        else if((strtotime($date) == strtotime($order_date)) && 
                                ((strtotime($orderTime) > strtotime($t4)) && (strtotime($orderTime) < strtotime($t5)))&&
                                (strtotime($t6) > strtotime($bookingSlot)) )
                        {
                            
                             $message ='<div class=" panel-heading" style="margin-top:100px;text-align:center" >' 
                                     .'<p id="note" style="font-size:24px !important"></p>'
                                     .'<p style="font-size:24px !important">We have received your request. Your Booking Reference is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span> </p>'
                                     . "<p style='font-size:20px !important'>We will contact you as soon as we get confirmation for your requested date to arrange collection of Payment</p></div>";
                            echo $message; 
                        }
                        else
                        {
                            echo '<br>
                
                                <br><div class=" panel-heading" style="margin-top:100px;text-align:center" >
                                <p id="note" style="font-size:24px !important"></p>
                                <p style="font-size:24px !important">Your Order is Confirmed & 

                                the Reference Number is <span style="color:#e04f67 !important;font-size:36px;font-weight:bold">'.$First_order_id.'</span></p>
                                <p style="font-size:20px !important">We will deliver tickets at '.$delv_date.' '.$Del_time.'</p>
                                <p style="font-size:20px !important">Your total bill will be SGD <span style="color:#e04f67 !important;font-size:24px;font-weight:bold">'.$grand_total.' </span></p>
                                <p style="font-size:20px !important">You can wait in the Lobby or in your Room. Our delivery staff will contact you to pass the tickets and collect the amount</p>
                                <p style="font-size:20px !important">Our delivery hotline number is 65-8161 5060 </p>

                                <br /><br />

                                <button id="ticket_inv" class="col-sm-offset-0" style="padding:5px;font-size:20px !important">
                                    See More Detail
                                </button>
                                <br>    
                                <a style="font-size:20px !important;width:30%; margin-top: 30px;" href="index.php" class="col-sm-offset-4 btn_full" ><i class="icon-right"></i> Home Page</a>
                               </div><br><br>';                            
                        }    
                    }
                    */
        
    	?>
    	<?php 
        	  
        }        
        else
        {
        	echo "cart is empty";	
            header("Location:index.php");
        }
            $to = "mnadeem@tkbench.com";
            $subject = "Booking Confirmation - Order ID ".$First_order_id;
            $customer = "Thanks for your order. Your order details are below.<br>";
            $supplier = "A new order has been confirmed on Singaporedeals4u website.<br>";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: Singaporedeals4u <order@singaporedeals4u.com>' . "\r\n";
            //$headers .= 'Cc: myboss@example.com' . "\r\n";

           
            
            // Mail it to Admin
	    $adminDetailsRes = getRows(DB_TABLE_PREFIX .'admin_user', array('id' => 1));
	    $adminDetails = $adminDetailsRes['data'];
	    $adminDetails = $adminDetails[0];
	    if(!empty($email_content)){
	    	mail($to,$subject,$customer.$email_content,$headers);
	    	mail($adminDetails['email'], $subject, $supplier.$email_content, $headers);
	    }
            if(($send) && ($_POST['payment'] == 'spot'))
            {
            	echo '<div class=" panel-heading" style="text-align:center" >
                	 <h4>Thanks for shopping with us. Looking forward for your positive feedback.</h4>
                	 <h5>Email has been sent to your given email address. If not found in inbox, then please check your spam/junk folder.</h5>
                	  <br />
               		 <a style="width:30%; margin-top: 30px;" href="index.php" class="col-sm-offset-4 btn_full" ><i class="icon-right"></i> Continue shopping</a>
               
            		</div><br><br>';
            }    
          unset($_SESSION[$_SESSION['Auth_name']]);
          ?>
    

  </body>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="libs/countdown/jquery.countdown.js"></script>
<script src="libs/js/script.js"></script>
  <?php if($_POST['payment'] == 'paypal'){ ?>
            
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
            <script type="text/javascript">

                $(document).ready(function(){

                    $("#paypal_frm").submit();
                 });   

            </script>

        <?php } ?>
       <script type="text/javascript">

            $(document).ready(function(){
                $("#cart_header").html("Cart( 0 )");
               setInterval(function() {
                var cart="reset";
                
               $.ajax({
                    method: "POST",
                    url: "request_reset.php",
                    data: { k: cart}
                })
                .done(function( responce ) {
                    
                    if(responce == 'success')
                    {
                        window.location.replace("index.php");
                        
                        
                    }
                });
            }, 1000 * 59 * 1);

                

                    $('#ticket_inv').click(function () {    
                        $("#ticket_div").toggle('slow');
                    });    
          });
                
            </script>     
</html>