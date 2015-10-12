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
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
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
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
	<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }
    
    .table > tbody > tr > .no-line {
        border-top: none;
    }
    
    .table > thead > tr > .no-line {
        border-bottom: none;
    }
    
    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }
    </style>
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>
<header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->
    
    <?php
        
        if(!empty($_SESSION[$_SESSION['Auth_name']]))
        {
            $name = $_POST['firstname_booking'].' '.$_POST['lastname_booking'];
            $email = $_POST['email_booking'];
            $phone = $_POST['telephone_booking'];
			$hname = $_POST['hotel_name'];
            $hadd = $_POST['hotel_add'];
            
    ?>
    
  <div class="container" style="margin-top:130px;">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
                                <strong>First Name:</strong>
                                <?php echo $_POST['firstname_booking']; ?>
    			</div>
                        <div class="col-xs-6">
                                <strong>Last Name:</strong>
                                <?php echo $_POST['lastname_booking']; ?>
    			</div>
    			
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
                                <strong>Email:</strong>
                                <?php echo $_POST['email_booking']; ?>
    			</div>
                        <div class="col-xs-6">
                                <strong>Phone:</strong>
                                <?php echo $_POST['telephone_booking']; ?>
    			</div>
                        
    		</div>
			<div class="row">
    			<div class="col-xs-6">
                                <strong>Hotel Name:</strong>
                                <?php echo $_POST['hotel_name']; ?>
    			</div>
                        <div class="col-xs-6">
                                <strong>Hotel Address</strong>
                                <?php echo $_POST['hotel_add']; ?>
    			</div>
                        
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
								<tr>
									<td><strong>Order id</strong></td>
									<td><strong>Item</strong></td>
									<td class="text-center"><strong>Price</strong></td>
									<td class="text-center"><strong>Adults</strong></td>
									<td class="text-center"><strong>childs</strong></td>
									<td class="text-center"><strong>Date</strong></td>
									<td class="text-center"><strong>Quantity</strong></td>
									<td class="text-center"><strong>Others</strong></td>
									<td class="text-right"><strong>Totals</strong></td>
								</tr>
    						</thead>
                        <?php                           
                            $grand_total = 0;
                            
                            $email_content = '<p> Here are the details of the Shopping</p>
                            			<table class="table">
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
                                            </tr>';
                            
                            foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                            {
                                if(($item['pid'] != '') && ($item['pid'] != 'null'))
                                {
                                    $others = 0;
                                    $pid =$item['pid'];
                                    $Total_aprice = $item['adult_price'] * $item['a_qty'];
                                    $Total_cprice = $item['child_price'] * $item['c_qty'];
                                    $total = (($item['adult_price'] * $item['a_qty'])
                                        + ($item['child_price'] * $item['c_qty']));  
                                    $date = date('Y-m-d', strtotime($item['date']));  
                                    $time = date('H:i:s', strtotime($item['time']));

                                    $others = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']; 
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

                                    $product_total = ($total * $item['pkg']) + $others;
                                
                                $order_ins ="INSERT INTO `order`(`full_name`, `email`, `mobile`, `hotel_name`, `hotel_address`, `total_adult`, `total_child`, `tour_date`, "
                                        . "`pickup_time`, `product_id`, `product_name`, `per_adult_price`, `per_child_price`, `total_adult_price`, "
                                        . "`total_child_price`, `total_price`, `payment_mod`, `status`, `added`,`guide`,`pickup`,`insurance`,`coffee`, "
                                        . "`welcome`, `dinner`, `bike`, `is_deleted` ) values"
                                        . "('".$name."','".$email."','".$phone."','".$hname."','".$hadd."','".$item['a_qty']."','".$item['c_qty']."','".$date."', '".$time
                                        ."','".$item['pid']."','".$item['name']."','".$item['adult_price']."','".$item['child_price']
                                        ."','".$Total_aprice."','".$Total_cprice."','".$product_total."','"."on_spot','new','".$date
                                        ."','".$guide."','".$pickup."','".$insurance."','".$coffee."','".$welcome."','".$dinner."','".$bike."','N')";
                                        
                                $res = Query($order_ins);
                                $Order_id = LastInsertId();
                                
                                if($res)
                                {
                                    $del = "DELETE from wishlist where id=".$pid;
                                    $del_qry = Query($del);
                                    
                                }
                                
                              
                        ?>        
                
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
                                                                <td><?php echo $Order_id?></td>
    								<td><?php echo $item['name']?></td>
    								<td class="text-center"><?php echo $total; ?></td>
                                                                <td class="text-center"><?php echo $item['a_qty']?></td>
                                                                <td class="text-center"><?php echo $item['c_qty']?></td>
                                                                <td class="text-center">
                                                                    <?php echo $item['date'].' '.$item['time']?>
                                                                </td>
    								<td class="text-center"><?php echo $item['pkg']?></td>
                                                                <td class="text-center"><?php echo $others?></td>
    								<td class="text-right"><?php echo ($total + $others) *  $item['pkg'] ; ?></td>
    							</tr>
                                   <?php                     
                            $email_content .= "
                                            <tr>
                                                <td> <strong>Product Name </strong></td>
                                                <td>". $item['name']." </td>
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
                                                <td> date-time </td>
                                                <td>".$date.'-'.$time." </td>
                                            </tr>"; 
                                        if($item['guide']['name'])
                                        {
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['guide']['name']." </td>
                                                           <td>".$item['guide']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['pickup']['name'])
                                        {
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['pickup']['name']." </td>
                                                           <td>".$item['pickup']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['insurance']['name'])
                                        {
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['insurance']['name']." </td>
                                                           <td>".$item['insurance']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['coffee']['name'])
                                        {
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['coffee']['name']." </td>
                                                           <td>".$item['coffee']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['welcome']['name'])
                                        {
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['welcome']['name']." </td>
                                                           <td>".$item['welcome']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['dinner']['name'])
                                        {
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['dinner']['name']." </td>
                                                           <td>".$item['dinner']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['bike']['name'])
                                        {
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['bike']['name']." </td>
                                                           <td>".$item['bike']['price']." </td>
                                                       </tr>";
                                        }
                                        $sub = ($total + $others) + $item['pkg'];
                                        $email_content .= "
                                                       <tr>
                                                           <td>Sub Total </td>
                                                           <td>".$sub." </td>
                                                       </tr>";
                                   ?>    
                                                       
                            <?php 
                                $grand_total = $grand_total + ($total + $others)* $item['pkg'] ;
                                }
                                
                                
                                
                            }       
                                $email_content .= "
                                    <tr>
                                        <td> Total </td>
                                        <td>". $grand_total." </td>
                                    </tr>
                                    </table>"; 
                            ?>                          
                                                <hr> 
    							<tr>
                                                                <td class="no-line"></td>
    								<td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
    								<td class="no-line"></td>
                                                                 
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right"><?php echo $grand_total ?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
                   
                    
    		</div>
    	</div>
    </div>
</div>
    	<?php 
    	if($_POST['payment'] == 'spot')
    	{
    ?>	
    	<div class="panel-heading" >
                        <h4>Thanks for shopping with us. Looking forward for your positive feedback.</h4>
                        <a style="width:30%; margin-top: 30px;" href="index.php" class="col-sm-offset-4 btn_full" ><i class="icon-right"></i> Continue shopping</a>
                       
                    </div>
    	
    	
    	<?php 
        		}   
                } 
                else if($_POST['payment'] == 'paypal' && (!empty($_SESSION[$_SESSION['Auth_name']])))
                {
                            
                    
                    $domain = (PAYPAL_LIVE) ? "www.paypal.com" : "www.sandbox.paypal.com"; 
        ?>
            <form action="https://<?php echo $domain; ?>/cgi-bin/webscr" method="post" id="paypal_frm" name="paypal_frm"/>

                <input type="hidden" name="cmd" value="_cart"/> 

                <input type="hidden" name="upload" value="1"/> 

                <input type="hidden" name="no_shipping" value="1"/> 

                <input type="hidden" name="no_note" value="1"/> 

                <input type="hidden" name="business" value="<?=PAYPAL_EMAIL_ADDRESS?>"/>

                <input type="hidden" name="notify_url" value="<?=site_url('paypal_ipn.php')?>"/>  

                <input type="hidden" name="return" value="<?=site_url('order_success.php')?>"/>

                <input type="hidden" name="cancel_return" value="<?=site_url('order_ancel.php')?>"/>

                <input type="hidden" name="item_name_1" value="Singapurdeals Booking"/>

                <input type="hidden" name="currency_code" value="<?=PAYPAL_CURRENCY_CODE?>"/>

                <!--input type="hidden" name="lc" value="USD"/--> 

                <input type="hidden" name="image_url" value="<?=site_url()?>/images/logo.png"/>

                <input type="hidden" name="invoice" value="<?=$Order_id?>"/>

                <input type="hidden" name="custom" value="<?=md5($Order_id.$grand_total.PAYPAL_CURRENCY_CODE.PAYPAL_EMAIL_ADDRESS.ORDER_SALT)?>"/>

                <input type="hidden" name="amount_1" value="<?=$grand_total?>"/>
                

            </form>
          
                                
          <?php }else
          {
              header("Location:index.php");
          }
            $to = $email;
            $subject = "singaporedeals4u shopping invoice";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <sales@singaporedeals4u.com>' . "\r\n";
            //$headers .= 'Cc: myboss@example.com' . "\r\n";

            $send = mail($to,$subject,$email_content,$headers);
            if($send)
            {
                echo "Email has been sent to your given address";
            }    
          unset($_SESSION[$_SESSION['Auth_name']]);
          ?>
    

  </body>
  <?php if($_POST['payment'] == 'paypal'){ ?>
            <script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
            <script type="text/javascript">

                $(document).ready(function(){

                    $("#paypal_frm").submit();

                });

            </script>

        <?php } ?>
</html>