<?php
include_once 'inc/config.inc.php';

	$name = $_SESSION['name_pp'];
	//// Sessions for paypal email order confirmation 
	$email = $_SESSION['email_pp'];
	
	$phone = $_SESSION['phone_pp'];
	
	$hname = $_SESSION['hname_pp'];
	
	$hadd = $_SESSION['hadd_pp'];
	
	$room = $_SESSION['room_pp'];
	
	$orderid = $_SESSION['orderid'];
	
	$grand_total = 0;
	
	$email_content = '
		<p> Here are the details of the Shopping</p>
		<table class="table" cellspacing="0" cellpadding="5" border="1" width="700">
			<tr>
				<td> Name </td>
				<td>'.$name.'</td>
			</tr>
			<tr>
				<td> Email </td>
				<td>'.$email.'</td>
			</tr>
			<tr>
				<td> Phone </td>
				<td>'.$phone.'</td>
			</tr>
			<tr>
				<td> Hotel Name </td>
				<td>'.$hname.'</td>
			</tr>
			<tr>
				<td> Hotel Address </td>
				<td>'.$hadd.'</td>
			</tr>
			<tr>
				<td> Room No </td>
				<td>'.$room.'</td>
			</tr>';
                            
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
						$total = (($item['adult_price'] * $item['a_qty'])
							+ ($item['child_price'] * $item['c_qty']));  
						$date = date('Y-m-d', strtotime($item['date']));  
						
						$time = date('H:i:s', strtotime($item['time']));
						if($date == '1970-01-01')
						{
							$date = 'Null';
							$time='';
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
						
						//// upadate order status 
			$order_update = "UPDATE `order` SET status='confirm' where id=".$orderid;		
			$res = mysql_query($order_update);		
					
                   /* $order_ins ="INSERT INTO `order`(`full_name`, `email`, `mobile`, `hotel_name`, `hotel_address`,`room_no`, `total_adult`, `total_child`, `tour_date`, "
                                        . "`pickup_time`, `product_id`, `product_name`, `per_adult_price`, `per_child_price`, `total_adult_price`, "
                                        . "`total_child_price`, `total_price`, `payment_mod`, `status`, `added`,`guide`,`pickup`,`insurance`,`coffee`, "
                                        . "`welcome`, `dinner`, `bike`, `two_way`, `is_deleted` ) values"
                              . "('".$name."','".$email."','".$phone."','".$hname."','".$hadd."','".$room."','".$item['a_qty']."','".$item['c_qty']."','".$date."', '".$time
                                        ."','".$item['pid']."','".$item['name']."','".$item['adult_price']."','".$item['child_price']
                                        ."','".$Total_aprice."','".$Total_cprice."','".$product_total."','"."on_spot','new','".$date_added 
                                        ."','".$guide."','".$pickup."','".$insurance."','".$coffee."','".$welcome."','".$dinner."','".$bike."','".$two_way."','N')";
                                        
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
						*/
					  
				?>        
                
                            
                                
                <?php                     
			$email_content .= "
							<tr>
								<td> <strong>Product Name </strong></td>
								<td>". stripcslashes(Decode($item['name']))." </td>
							</tr>
							<tr>
								<td> Quantity </td>
								<td>".$item['pkg']." </td>
							</tr>
							<tr>
								<td> Adult </td>
								<td>".$item['a_qty']." </td>
							</tr>
							<tr>
								<td> child </td>
								<td>".$item['c_qty']." </td>
							</tr>
							<tr>
								<td> original price per adult </td>
								<td>".$item['org_price']." </td>
							</tr>
							<tr>
								<td> promo price per adult</td>
								<td>".$item['promo_adult']." </td>
							</tr>
							<tr>
								<td> date-time </td>
								<td>".$date.'-'.$time." </td>
							</tr>"; 
						if($item['guide']['name'])
						{
							echo '<tr class="filters">
									
									<td style="font-weight:bold"><strong>'.$item['guide']['name'].'</strong></td>
									<td>'.$item['guide']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['guide']['name']." </td>
										   <td>".$item['guide']['price']." </td>
									   </tr>";
						}
						if($item['pickup']['name'])
						{
							echo '<tr class="filters">
									
									<td style="font-weight:bold"><strong>'.$item['pickup']['name'].'</strong></td>
									<td>'.$item['pickup']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['pickup']['name']." </td>
										   <td>".$item['pickup']['price']." </td>
									   </tr>";
						}
						if($item['insurance']['name'])
						{
							echo '<tr class="filters">
									
									<td style="font-weight:bold"><strong>'.$item['insurance']['name'].'</strong></td>
									<td>'.$item['insurance']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['insurance']['name']." </td>
										   <td>".$item['insurance']['price']." </td>
									   </tr>";
						}
						if($item['coffee']['name'])
						{
							 echo '<tr class="filters">
								  
									<td style="font-weight:bold"><strong>'.$item['coffee']['name'].'</strong></td>
									<td>'.$item['coffee']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['coffee']['name']." </td>
										   <td>".$item['coffee']['price']." </td>
									   </tr>";
						}
						if($item['welcome']['name'])
						{
							echo '<tr class="filters">
								   
									<td style="font-weight:bold"><strong>'.$item['welcome']['name'].'</strong></td>
									<td>'.$item['welcome']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['welcome']['name']." </td>
										   <td>".$item['welcome']['price']." </td>
									   </tr>";
						}
						if($item['dinner']['name'])
						{
							echo '<tr class="filters">
									
									<td style="font-weight:bold"><strong>'.$item['dinner']['name'].'</strong></td>
									<td>'.$item['dinner']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['dinner']['name']." </td>
										   <td>".$item['dinner']['price']." </td>
									   </tr>";
						}
						if($item['bike']['name'])
						{
							echo '<tr class="filters">
								   
									<td style="font-weight:bold"><strong>'.$item['bike']['name'].'</strong></td>
									<td>'.$item['bike']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['bike']['name']." </td>
										   <td>".$item['bike']['price']." </td>
									   </tr>";
						}
						
						if($item['2way']['name'])
						{
							echo '<tr class="filters">
								   
									<td style="font-weight:bold"><strong>'.$item['2way']['name'].'</strong></td>
									<td>'.$item['2way']['price'].'</td>
								</tr>';
							$email_content .= "
									   <tr>
										   <td>".$item['2way']['name']." </td>
										   <td>".$item['2way']['price']." </td>
									   </tr>";
						}
						$sub = ($total + $others) * $item['pkg'];
						$email_content .= "
							
									   <tr>
										   <td>Sub Total </td>
										   <td>".$sub." </td>
									   </tr>";
				   ?>    
									   
					<?php 
						$grand_total = $grand_total + (($total + $others)* $item['pkg']) ;
						}
						
						
						
					}       
						$email_content .= "
							<tr>
								<td> Total </td>
								<td>". $grand_total." </td>
							</tr>
							</table>"; 
							
					$to = $email;
					$subject = "Singaporedeals4u Order confirmation: OrderID: ".$orderid;
					$customer = "Thanks you for your order. Your order details are below.<br>";
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
							
					?>                          
    	
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
 <head>

	<?php include_once 'head.php'; ?>    
        <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
        <meta name="keywords" content="Singapore Day Tours, Singapore Attractions, Singapore Best Tours, Singapore Island Tours, Singapore City Tours, Singapore Private Tours, Singapore Family Tours, Singapore Adventure Tours, Singapore Couple Tours, Singapore Nature Tours">
        <meta name="description" content="We brings best Travel deals for Singapore. We have Singapore best Day Tours & Attractions, short stay in Singapore. Our Professional can provide the best advice to visitors.">
     
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body ondragstart="return false;" ondrop="return false;">

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
   <header ><?php include_once 'header.php'; ?></header><!-- End Header -->

    <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Place your order</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart.html" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="payment.html" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                            <li><a href="index.php">Home</a></li>
                    
                    <li>Confirmation</li>
                    </ul>
        </div>
    </div><!-- End position -->
    
    <div class="container margin_60">
	<div class="row">
		<div class="col-md-8">
        
			<div class="form_title">
				<h3><strong><i class="icon-ok"></i></strong>Order Confiramtion!</h3>
				<p>
					
				</p>
			</div>
			<div class="step">
				<h5>
					Thank you for shopping with us. Your Order has been confirmed
					Your reference no is <?php echo $orderid; ?>
				</h5>
                               
			</div><!--End step -->
            
		
		</div><!--End col-md-8 -->
        
		
        
	</div><!--End row -->
</div><!--End container -->
<?php
	unset($_SESSION['name_pp']);
	unset($_SESSION['email_pp']);
	unset($_SESSION['phone_pp']);
	unset($_SESSION['hname_pp']);
	unset($_SESSION['hadd_pp']);
	unset($_SESSION['room_pp']);
?>
<!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->


  </body>
</html>