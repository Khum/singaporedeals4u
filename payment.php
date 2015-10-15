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
    <link rel="stylesheet" href="css/date_time_picker.css">
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
    <style type="text/css">
        .funkyradio{
          clear: both;
          overflow: hidden;
          margin-left: -12px;
        }

        .funkyradio label {
          width: 100%;
          border-radius: 3px;
          border: 1px solid #D1D3D4;
          font-weight: normal;
          font-size:15px;
        }

        .funkyradio input[type="radio"]:empty,
        .funkyradio input[type="checkbox"]:empty {
          display: none;
        }

        .funkyradio input[type="radio"]:empty ~ label,
        .funkyradio input[type="checkbox"]:empty ~ label {
          position: relative;
          line-height: 2.5em;
          text-indent: 3.25em;
          margin-top: 2em;
          cursor: pointer;
          -webkit-user-select: none;
             -moz-user-select: none;
              -ms-user-select: none;
                  user-select: none;
        }

        .funkyradio input[type="radio"]:empty ~ label:before,
        .funkyradio input[type="checkbox"]:empty ~ label:before {
          position: absolute;
          display: block;
          top: 0;
          bottom: 0;
          left: 0;
          content: '';
          width: 2.5em;
          background: #D1D3D4;
          border-radius: 3px 0 0 3px;
        }

        .funkyradio input[type="radio"]:hover:not(:checked) ~ label,
        .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
          color: #888;
        }

        .funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
        .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
          content: '\2714';
          text-indent: .9em;
          color: #C2C2C2;
        }

        .funkyradio input[type="radio"]:checked ~ label,
        .funkyradio input[type="checkbox"]:checked ~ label {
          /* color: #777; */
          color: #000;
          font-weight:bold;
        }

        .funkyradio input[type="radio"]:checked ~ label:before,
        .funkyradio input[type="checkbox"]:checked ~ label:before {
          content: '\2714';
          text-indent: .9em;
          color: #333;
          background-color: #ccc;
        }

        .funkyradio input[type="radio"]:focus ~ label:before,
        .funkyradio input[type="checkbox"]:focus ~ label:before {
          box-shadow: 0 0 0 3px #999;
        }

        .funkyradio-default input[type="radio"]:checked ~ label:before,
        .funkyradio-default input[type="checkbox"]:checked ~ label:before {
          color: #333;
          background-color: #ccc;
        }

        .funkyradio-primary input[type="radio"]:checked ~ label:before,
        .funkyradio-primary input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #337ab7;
        }

        .funkyradio-success input[type="radio"]:checked ~ label:before,
        .funkyradio-success input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #5cb85c;
        }

        .funkyradio-danger input[type="radio"]:checked ~ label:before,
        .funkyradio-danger input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #d9534f;
        }

        .funkyradio-warning input[type="radio"]:checked ~ label:before,
        .funkyradio-warning input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #f0ad4e;
        }

        .funkyradio-info input[type="radio"]:checked ~ label:before,
        .funkyradio-info input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #5bc0de;
        }
        
        a.btn_1.cherry, .btn_1.cherry {
            background: #e04f67 none repeat scroll 0 0;
            color: #fff;
            width: 55%;
            text-align: center;
            height:50px;
            font-size:20px;
            
        }
        
        .modal {
            top: 25px !important;
            
        }
        
        .close_btn
        {
            padding:10px !important;
        }
    </style>
        
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

    
    <!--<section id="hero_2" style="height:200px !important;">
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
</section>--><!-- End Section hero_2 -->
  <br><br><br> 
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
							<label>First name</label><span class="cherry_asterick">*</span>
							<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" required>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Last name</label><span class="cherry_asterick">*</span>
							<input type="text" class="form-control" id="lastname_booking" name="lastname_booking" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Email</label><span class="cherry_asterick">*</span>
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
                                    
<!--                            <div class="form-group">
					<label><input type="radio" name="payment" id="payment" value="paypal">Paypal</label>
                                        <label><input type="radio" name="payment" id="payment" value="spot" checked>On spot</label>
                            </div>-->
                            
                            
			</div><!--End step -->
                        <div id="payment_header">    
                            <div class="form_title">
                                <h3><strong>2</strong>Payment Options  <span class="cherry_asterick" style="font-size:17px">*</span></h3>
                            </div>
                            <div class="step">        
                                <div class="row">    
                                    <div class="col-md-12 funkyradio" id="time_slots">
                                        <div class="col-md-3 col-offset-md-5 funkyradio-success">
                                            <input type="radio" name="payment" id="paypal_payment" class="label-font payment" value="paypal" />
                                            <label for="paypal_payment" id="slot1" class="label_delivery"> Paypal</label>
                                        </div>
                                        <div class="col-md-3 col-offset-md-5 funkyradio-success">
                                            <input type="radio" name="payment" id="spot_payment" class="label-font payment" value="spot" checked/>
                                            <label for="spot_payment" id="slot1" class="label_delivery" >On Spot</label>
                                        </div>
                                    </div>
                                </div>    
                            </div><!--End step -->
                        </div>
                        <div class="form_title">
                                <h3><strong>3</strong>Delivery Options</h3>
                            </div>
                            
                            <div class="step">
                                <div class="col-md-6 col-sm-6">
                                    <label>Delivery Date</label>
                                    <div class="form-group">
                                        <input type="text" id="del_date" name="del_date" class="date-pick form-control" data-date-format="yyyy-mm-dd" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12 funkyradio" id="time_slots">
                                        <div class="col-md-6 col-offset-md-5 funkyradio-success">
                                            <input type="radio" class="label-font delivery_options" name="delivery_opt" id="radio1" value="at airport" checked />
                                            <label for="radio1" id="slot1" class="label_delivery" >Meet at airport to deliver tickets </label>
                                        </div>
                                        <div class="col-md-6 col-offset-md-5 funkyradio-success">
                                            <input type="radio" class="label-font delivery_options" name="delivery_opt" id="radio3" value="at hotel reception" />
                                            <label for="radio3" id="slot1" class="label_delivery"> Pass tickets to hotel reception</label>
                                        </div>
                                        <div class="col-md-6 col-offset-md-5 funkyradio-success">
                                            <input type="radio" class="label-font delivery_options" name="delivery_opt" id="radio2" value="meet at hotel"  />
                                            <label for="radio2" id="slot1" class="label_delivery" >Meet at hotel to deliver tickets</label>
                                        </div>
                                    </div>

                                    <div id="at_airport" class="col-md-12" >
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <label>Flight No</label>
                                                <div class="form-group">
                                                    <input type="text" id="flight_no" name="flight_no" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <label>Arriving From</label>
                                                <div class="form-group">
                                                    <input type="text" id="arriving_from" name="arriving_from" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <label>Arrival Date</label>
                                                <div class="form-group">
                                                    <input type="text" id="arrival_date" name="arrival_date" class="date-pick form-control" data-date-format="yyyy-mm-dd" value="<?php echo date('Y-m-d'); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <label>Arrival Time</label>
                                                <div class="form-group">
                                                    <input type="text" id="arrival_time" name="arrival_time" class="time-pick form-control" value="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div id="at_hotel" class="col-md-12" style="display:none;">
                                        <hr />
                                        
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Hotel Name</label>
                                                <div class="form-group">
                                                    <input type="text" id="hotel_name1" name="hotel_name1" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label>Hotel Address</label>
                                                <div class="form-group">
                                                    <input type="text" id="hotel_add1" name="hotel_add1" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Room No</label>
                                                <div class="form-group">
                                                    <input type="text" id="room_no1" name="room_no1" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div><!--End row -->



                            </div><!--End step -->
                        <div id="policy">
<!--				<h4>Cancellation policy</h4>
				<div class="form-group">
					<label><input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
				</div>-->
				<button id="confirm_order" type="button" class="btn_1 green medium">Confirm now</button>
                            </div>
                        </form>
                    <div id="payment_infoss">    
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
                                        <?php echo stripcslashes(Decode($item['name'])); ?>
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
		<div class="box_style_4 zopim">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://006590886618" class="phone">+65 8161 5060</a>
                    <a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
                    <!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
                    <div class="col-md-12 zopim_ifram" style="margin-left: 46px !important;">                            
                      <iframe src="zopim.html" scrolling="no" style="border:none; margin-top: 20px; width:254px; height:338px;" ></iframe>
                    </div>
                </div>
		</aside>
        
	</div><!--End row -->
</div><!--End container -->
    <?php include_once 'footer.php'; ?>

<div id="toTop"></div><!-- Back to top button -->



<!-- Specific scripts -->
<script src="js/icheck.js"></script>
<script src='js/bootstrap-datepicker.js')></script>
<script src='js/bootstrap-timepicker.js')></script>
<script>  
//$('input').iCheck({
//   checkboxClass: 'icheckbox_square-grey',
//   radioClass: 'iradio_square-grey'
// });
 $("input.date-pick").datepicker({
    startDate: '+0d'
}); 
$('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})
         
 </script>
 
     

<script type="text/javascript">

    $(document).ready(function(){
                $("#payment_infoss").hide();
        $('#confirm_order').click(function () 
            {
                if($('[id="radio3"]').is(':checked')){

                    if ($('[id="spot_payment"]').is(':checked'))
                    {
                      alert("please select paypal as payment mode");
                      return false;
                    }
                    else if ($('[id="paypal_payment"]').is(':checked'))
                    {
                      $("#details").submit();
                    }
                    else
                    {
                        alert("please select paypal as payment mode");
                        return false;
                    }
                }
                else if($('[id="radio1"]').is(':checked')){
                    
                    var flight_no = $("#flight_no").val();
                    var arriving_from = $("#arriving_from").val();
                    var arrival_date = $("#arrival_date").val();
                    var arrival_time = $("#arrival_time").val();
                    
                    if(flight_no == '')
                    {
                        alert("Please enter the flight no");
                        return false;
                    }
                    if(arriving_from == '')
                    {
                        alert("Please enter from where you arriving");
                        return false;
                    }
                    if(arrival_date == '')
                    {
                        alert("Please enter the arrival date");
                        return false;
                    }
                    if(arrival_time == '')
                    {
                        alert("Please enter the arrival time");
                        return false;
                    }
                    
                    if(($("#paypal_payment").is(":checked")) || ($("#spot_payment").is(":checked")) ) {
                        
                        $("#details").submit();  
                    }
                    else
                    {
                        alert("please select atleast one payment mode");
                        return false;
                    }
                }
                else if($('[id="radio2"]').is(':checked')){
                    
                    var hotel_name = $("#hotel_name1").val();
                    var hotel_add = $("#hotel_add1").val();
                    var room_no = $("#room_no1").val();
                    
                    if(hotel_name == '')
                    {
                        alert("Please enter hotel name");
                        return false;
                    }
                    if(hotel_add == '')
                    {
                        alert("Please enter hotel address");
                        return false;
                    }
                    if(room_no == '')
                    {
                        alert("Please enter the hotel room no");
                        return false;
                    }
                    
                    if(($("#paypal_payment").is(":checked")) || ($("#spot_payment").is(":checked")) ) {
                        
                        $("#details").submit();  
                    }
                    else
                    {
                        alert("please select atleast one payment mode");
                        return false;
                    }
                    
                }
   
        });
        
        $("#hotel_name").focusout(function() {
            $('#hotel_name1').val($('#hotel_name').val()); 
        });
        $("#hotel_add").focusout(function() {
            $('#hotel_add1').val($('#hotel_add').val());
            
        });
        $("#room_no").focusout(function() {
            $('#room_no1').val($('#room_no').val());
        });
        
        $('.delivery_options').click(function () {
       
            if ($('[id="radio1"]').is(':checked')){
                $('#paypal_payment').removeAttr("checked");
               jQuery('#spot_payment').attr("checked", "checked");
               jQuery('#spot_payment').attr("disabled", false);
               $('#at_hotel').css("display",'none');
               $('#at_airport').show();
               
            }
            else if ($('[id="radio2"]').is(':checked')){
                
                $('#paypal_payment').removeAttr("checked");
                jQuery('#spot_payment').attr("disabled", false);
                jQuery('#spot_payment').attr("checked", true);
                $('#at_hotel').show();
                 $('#at_airport').css("display",'none');
            }
            else{
                
                alert("if you want ticket at hotel reception then select paypal as payment mode");
                $('#spot_payment').removeAttr("checked");
                jQuery('#spot_payment').attr("disabled", true);
                jQuery('#paypal_payment').attr("checked", "checked"); 
                 
                $('#at_hotel').hide();
                $('#at_airport').hide();
                
                //console.log("radio clicked");
            }

        });

    });
</script>
  </body>
</html>