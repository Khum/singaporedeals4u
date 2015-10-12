<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';
unset($_SESSION['book']);

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
    <link href="css/base.css" rel="stylesheet">
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>
 
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
    <header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->

    
    <section id="hero_2" style="height:200px !important;">
	<div class="intro_title animated fadeInDown">
           <h1>Place your order</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart.html" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Your Order</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div><!-- End position -->

<div class="container margin_60">
	<div class="row">
		<div class="col-md-8">
			<div class="form_title">
				<h3><strong>1</strong>Your Details</h3>
<!--				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>-->
			</div>
                    <form name="details" id="details" method="post" action="invoice.php">
 			<div class="step">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>First name</label>
							<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" required>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Last name</label>
							<input type="text" class="form-control" id="lastname_booking" name="lastname_booking" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_booking" name="email_booking" class="form-control" required>
						</div>
					</div>
<!--					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Confirm email</label>
							<input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
						</div>
					</div>-->
                                        
                                            <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                            <label>Telephone</label>
                                                            <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
                                                    </div>
                                            </div>
                                        
				</div>
				<div class="row">
	                                <div class="col-md-6 col-sm-6">
	                                    <div class="form-group">
	                                        <label>Hotel Name</label>
	                                        <input type="text" class="form-control" id="hotel_name" name="hotel_name">
	                                    </div>
	                                </div>
	                                <div class="col-md-6 col-sm-6">
	                                    <div class="form-group">
	                                        <label>Hotel Address</label>
                                        	<input type="text" class="form-control" id="hotel_add" name="hotel_add">
                                    	</div>
                                </div>
                                

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Room No</label>
                                        <input type="text" class="form-control" id="room_no" name="room_no">
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="form-group">
					<label><input type="radio" name="payment" id="payment" value="paypal">Paypal</label>
                                        <label><input type="radio" name="payment" id="payment" value="spot" checked>On spot</label>
                            </div>
                            
                            
			</div><!--End step -->
                        <div id="policy">
<!--				<h4>Cancellation policy</h4>
				<div class="form-group">
					<label><input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
				</div>-->
				<button type="submit" class="btn_1 green medium">Confirm now</button>
                            </div>
                        </form>
                    <div id="payment_info">    
			<div class="form_title">
				<h3><strong>2</strong>Payment Information</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<div class="form-group">
					<label>Name on card</label>
					<input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Card number</label>
							<input type="text" id="card_number" name="card_number" class="form-control">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="img/cards.png" width="207" height="43" alt="Cards" class="cards">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Expiration date</label>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Security code</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
									</div>
								</div>
								<div class="col-md-8">
									<img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
								</div>
							</div>
						</div>
					</div>
				</div><!--End row -->
                
				<hr>
                
				<h4>Or checkout with Paypal</h4>
				<p>
					Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
				</p>
				<p>
					<img src="img/paypal_bt.png" alt="">
				</p>
			</div><!--End step -->
            
			<div class="form_title">
				<h3><strong>3</strong>Billing Address</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Country</label>
							<select class="form-control" name="country" id="country">
								<option value="" selected>Select your country</option>
								<option value="Europe">Europe</option>
								<option value="United states">United states</option>
								<option value="Asia">Asia</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Street line 1</label>
							<input type="text" id="street_1" name="street_1" class="form-control">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Street line 2</label>
							<input type="text" id="street_2" name="street_2" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>City</label>
							<input type="text" id="city_booking" name="city_booking" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>State</label>
							<input type="text" id="state_booking" name="state_booking" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Postal code</label>
							<input type="text" id="postal_code" name="postal_code" class="form-control">
						</div>
					</div>
				</div><!--End row -->
			</div><!--End step -->
                        </div>
<!--			<div id="policy">
				<h4>Cancellation policy</h4>
				<div class="form-group">
					<label><input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
				</div>
				<a href="confirmation.html" class="btn_1 green medium">Book now</a>
			</div>-->
		</div>
        
		<aside class="col-md-4">
		<div class="box_style_1">
			<h3 class="inner">- Summary -</h3>
			<table class="table table-striped cart-list add_bottom_30">
                            <tbody id="side_cart">
                                <tr>
                                    <th><strong>Items</strong></th>
                                    <th class="text-right"><strong>Price(SGD)</strong></th>
                                </tr>
                                    <?php
                                    $grand_total = 0;
                                    if(empty($_GET))
                                    {
                                         echo "</tr>";   
                                        $grand_total = 0;
                                        foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                                        {
                                        	if(($item['pid'] != '') && ($item['pid'] != 'null'))
                                            	{

                                            		$total = (($item['adult_price'] * $item['a_qty'])
                                                        	+ ($item['child_price'] * $item['c_qty']));   
                                                        $others = $item['guide']['price'] + $item['pickup']['price'] +
				                                    $item['insurance']['price'] + $item['coffee']['price'] +
				                                    $item['welcome']['price'] + $item['dinner']['price'] + 
				                                    $item['bike']['price'] + $item['2way']['price'];  	      
                                    ?>

                                <tr>
                                    <td>
                                        <?php echo $item['name']; ?>
                                    </td>
                                    <td id="prodid<?php echo $item['pid']; ?>" class="text-right">
                                        <?php echo $total = ($total +$others)* $item['pkg']; ?>
                                    </td>
                                </tr>

                            <?php 
                                    $grand_total = $grand_total + $total;
                                    	} 
                                     }
                                  }?>
                            <tr class="total">
                                <td>
                                    Total cost
                                </td>
                                <td id="grand" class="text-right">
                                     <?php echo $grand_total; ?>
                                </td>
                            </tr>
                                        
                                </tbody>
			</table>
			<a class="btn_full_outline" href="index.php"><i class="icon-right"></i> Continue shopping</a>
		</div>
		<div class="box_style_4">
			<i class="icon_set_1_icon-57"></i>
			<h4>Need <span>Help?</span></h4>
			<!--<a href="tel://006590886618" class="phone">+65-90886618</a>-->
			<a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
			<!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
		</div>
		</aside>
        
	</div><!--End row -->
</div><!--End container -->
    <?php include_once 'footer.php'; ?>

<div id="toTop"></div><!-- Back to top button -->



<!-- Specific scripts -->
<script src="js/icheck.js"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 
         
 </script>
 
     
<script type="text/javascript">

    $(document).ready(function(){
        $("#payment_info").hide();

//        $('input[type="radio"]').click(function(){
//            
//            $("#payment_info").toggle('very slow');
//            var rval = $('input[name="payment"]:checked', '#details').val();
//            
//            if(rval=='paypal')
//            {
//                $("#payment_info").show();
//            }
//            else
//            {
//                $("#payment_info").hide();
//            }
//        });
    });
</script>

  </body>
</html>