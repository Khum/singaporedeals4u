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
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
    <link rel="stylesheet" href="css/date_time_picker.css">
    <link href="css/style.css" rel="stylesheet">
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
   <style type="text/css">
        .text-color{
            color:#00CC00 !important;
        }
        .label-font{
            font-size:15px;
        }
        
        
        /**** Funky Radio Buttons Style ****/
    /* @import('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css'); */   
 
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
        
        a.btn_1.cherry2, .btn_1.cherry2 {
            background: #e04f67 none repeat scroll 0 0;
            color: #fff;
            width: 55%;
            text-align: center;
            height:55px;
            font-size:20px;
            
        }
        .close_btn
        {
            padding:8px !important;
        }
        .modal {
            top: 25px !important;
            
        }
    </style>     
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
	<?php
                
                $flag_day_tour = 0;
                if(empty($_GET))
                {
                     echo "</tr>";   
                    $grand_total = 0;
                    foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                    {
                        ///// check on day tour category id=12...
                        if( $item['category_id'] != '12' && $item['category_id'] != 'NULL' && $item['category_id'] != '' )
                        {
                            $flag_day_tour=1;
                        }
                    }
                }
      	?>
    
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
    <br>
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

			</div>
                    <form name="details" id="details" method="post" action="invoice.php">
 			<div class="step">
<!--				<div class="row">
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
					</div>-->
<!--					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Confirm email</label>
							<input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
						</div>
					</div>-->
                                        
<!--                                            <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                            <label>Telephone</label>
                                                            <input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
                                                    </div>
                                            </div>
                                        
				</div>-->
				<div class="row">
	                                <div class="col-md-6 col-sm-6">
	                              <!---      <div class="form-group">
	                                        <label>Hotel Name</label>
	                                        <input type="text" class="form-control" id="hotel_names" name="hotel_names" value="Fragrance Hotel" disabled>
	                                        <input type="hidden" class="form-control" id="hotel_n" name="hotel_n" value="Fragrance Hotel">
	                                    </div>--->
	                                    <div class="form-group">
                                            <label class="label-font">Hotel Name</label>
                                            <select class="form-control label-font" name="hotel_n" id="hotel_name">
                                                <!--<option value="Fragrance Riverside" selected>Select your Hotel</option>-->
                                                <option value="Fragrance Riverside">Fragrance Riverside</option>
                                                <option value="Fragrance Bugis">Fragrance Bugis</option>
                                                <option value="Drop Inn Hostel">Drop Inn Hostel</option>
                                            </select>
					</div>
	                                </div>
	                                <div class="col-md-6 col-sm-6">
	                                <div class="form-group">
	                                        <label class="label-font">Hotel Address</label>
                                        	<input type="text" class="form-control label-font" id="hotel_add" name="hotel_add" value="20 Hong Kong Street, Singapore" disabled>
                                        	
                                        	<input type="hidden" class="form-control" id="hotel_a" name="hotel_a" value="20 Hong Kong Street, Singapore">
                                    	
                                    	</div>
                                </div>
                                

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="label-font">Room No</label>
                                        <input type="text" class="form-control label-font" id="room_no" name="room_no" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    
                                    <!-- Keypad --->
                                    
                                    <!------>
                                </div>
                            </div>
                       </div>     
                       <div class="form_title">
				<h3><strong>2</strong>Payment Options</h3>

			</div>
       
 			<div class="step">
                                    
<div class="form-group" style="min-height:70px">
                               <!--- <label>Payment:</label>--->
                                
<!--                                <label class="label-font"><input type="radio" class="option label-font"  value="spot" name="payment" checked>Pay on spot</label>-->
                                <div class="col-md-12 funkyradio" >
                                    <div class="col-md-12 funkyradio-success">
                                        <input type="radio"  value="spot" name="payment" checked />
                                        <label for="payment" >Pay on spot</label>
                                    </div>
                                </div>    
<!--                                <label><input type="radio"  name="payment"  value="ticket" >Ticket Delivery</label>-->
                            </div></div>
  <!----                          <div class="form-group">
                                <label>Delivery Method:</label>
                                <label></label><label></label>

                                <label><input type="checkbox" id="payment" name="payment"  value="ticket" >Ticket Delivery</label>
                            </div>  --->  
          <?php
                    if($flag_day_tour==1)
                    { 
                
                ?>                  
                            
                <div class="form_title">
				<h3><strong>3</strong>Ticket Delivery Options</h3>

			</div>
                    
 			<div class="step">            
<!--                            <div class="form-group" id="delivery_types">
                            <div class="col-sm-12"> 
                                <label class="label-font"><input type="radio" class="option label-font" id="express" name="delivery"  value="express" >Express Delivery (Within 30 Minutes - Additional SGD 10.00)</label>
                            </div>
                            <div class="col-sm-12">     
                                <label class="label-font"><input type="radio" class="option label-font" name="delivery" id="free_del" value="free" checked>Free Delivery</label>
                            </div>
                            <br><br><br>     
                            </div>-->
                            <div class="col-md-12 funkyradio">
                                <div class="col-md-12 funkyradio-success">
                                    <input type="radio" class="options" id="express" name="delivery"  value="express" />
                                    <label for="express"  >Express Delivery (Within 30 Minutes - Additional SGD 10.00)</label>
                                </div>
                                <div class="col-md-12 funkyradio-success">
                                    <input type="radio" class="options" name="delivery" id="free_del" value="free" checked />
                                    <label for="free_del"  >Free Delivery</label>
                                </div>
                            </div>
                            <div class="form-group" id="date_slot" style="width:45%;margin-left:15px;">
                                <label class="label-font" style="margin-top: 30px;"><i class="icon-calendar-7"></i> Select a date</label>
                                <input name="tour_date" id="tour_date" class="date-pick form-control label-font" data-date-format="yyyy-mm-dd" type="text" value="<?php echo date('Y-m-d'); ?>">
                            </div>    
                            
                            <!--    <div class="form-group" id="time_slots">-->
                                
                            <?php 
                                $time_slot1 = date('Y-m-d').' 18:00:00';
                                $time_slot2 = date('Y-m-d').' 8:30:00';
                                $time_slot3 = date('Y-m-d').' 12:00:00';
                                $time_slot4 = date('Y-m-d').' 23:30:00';
                                
                                $advance_time = date('Y-m-d H:i:s', strtotime("+120 min"));
                                $checked=1;
                            ?>
                               <!-- <div class="col-sm-6">
                                <label id="slot1" <?php //if(strtotime($time_slot2) > strtotime($advance_time)){ echo "class='text-color'"; }?> ><input type="radio" class="option" name="time_slots" id="time_slot_2" value=8" <?php //if(strtotime($advance_time) > strtotime($time_slot2)){ echo "disabled"; }else{ echo "checked"; $checked=0; }?> >8:30am to 9:00am</label>
                                </div>
                                <div class="col-sm-6">
                                <label id="slot2" <?php //if(strtotime($time_slot3) > strtotime($advance_time)){ echo "class='text-color'"; }?>><input type="radio" class="option" name="time_slots" id="time_slot_3" value="12" <?php //if(strtotime($advance_time) > strtotime($time_slot3)){ echo "disabled"; }else{ if($checked==1){ echo "checked"; $checked=0; } }?> > 12:00 pm to 12:30 pm</label>
                                </div>
                                <div class="col-sm-6">
                                <label id="slot3" <?php //if(strtotime($time_slot1) > strtotime($advance_time)){ echo "class='text-color'"; }?>><input type="radio" class="option" name="time_slots" id="time_slot_1" value="6" <?php //if(strtotime($advance_time) > strtotime($time_slot1)){ echo "disabled"; }else{ if($checked==1){ echo "checked"; $checked=0; } }?>  >6:00pm to 6:30pm</label>
                                </div>
                                <div class="col-sm-6">
                                <label id="slot4" <?php //if(strtotime($time_slot4) > strtotime($advance_time)){ echo "class='text-color'"; }?>><input type="radio" class="option" name="time_slots" id="time_slot_4" value="11" <?php //if(strtotime($advance_time) > strtotime($time_slot4)){ echo "disabled"; }else{ if($checked==1){ echo "checked"; $checked=0; } }?> >11:30pm to 12:00am</label>
                                </div>
                            </div>-->
                                
                                <div class="col-md-12 funkyradio" id="time_slots">
                                    <div class="col-md-6 funkyradio-success">
                                        <input type="radio" class="label-font date_options" name="time_slots" id="radio1" value="8" <?php if($checked==1) { if(strtotime($advance_time) > strtotime($time_slot2)){ echo "disabled"; }else{ echo "checked"; $checked=0; } }?> />
                                        <label for="radio1" id="slot1" <?php if(strtotime($time_slot2) > strtotime($advance_time)){ echo "class='text-color'"; }?>>8:30am to 9:00am</label>
                                    </div>
                                    <div class="col-md-6 funkyradio-success">
                                        <input type="radio" class="label-font date_options" name="time_slots" id="radio2" value="12" <?php if($checked==1) { if(strtotime($advance_time) > strtotime($time_slot3)){ echo "disabled"; }else{ echo "checked"; $checked=0; } }?>/>
                                        <label for="radio2" id="slot2" <?php if(strtotime($time_slot3) > strtotime($advance_time)){ echo "class='text-color'"; }?>>12:00pm to 12:30pm</label>
                                    </div>
                                    <div class="col-md-6 funkyradio-success">
                                        <input type="radio" class="label-font date_options" name="time_slots" id="radio3" value="6" <?php if($checked==1) { if(strtotime($advance_time) > strtotime($time_slot1)){ echo "disabled"; }else{ echo "checked"; $checked=0; } }?>/>
                                        <label for="radio3" id="slot3" <?php if(strtotime($time_slot1) > strtotime($advance_time)){ echo "class='text-color'"; }?>>6:00pm to 6:30pm</label>
                                    </div>
                                    <div class="col-md-6 funkyradio-success">
                                        <input type="radio" class="label-font date_options" name="time_slots" id="radio4" value="11" <?php if($checked==1) { if(strtotime($advance_time) > strtotime($time_slot4)){ echo "disabled"; }else{ echo "checked"; $checked=0; } } ?>/>
                                        <label for="radio4" id="slot4" <?php if(strtotime($time_slot4) > strtotime($advance_time)){ echo "class='text-color'"; }?>>11:30pm to 12:00am</label>
                                    </div>
                                </div>    
                            </div><!--End step -->
                            <br>
                      <?php
                        }
                    ?>      
                        <div id="policy">
<!--				<h4>Cancellation policy</h4>
				<div class="form-group">
					<label><input type="checkbox" name="policy_terms" id="policy_terms">I accept terms and conditions and general policy.</label>
				</div>-->
				<input type="hidden" name="flag_tours" value="<?php echo $flag_day_tour; ?>" />


				<!--   I (Khurram) Made Changes to activate the confiramtion button event at 10/3/2015 2:30pm you can replace the active button tag along center tag 
-->
<button id="confirm_order" type="button" class="btn_1 white menubtn cherry2" style="margin-top:25px;margin-left:22px;"> Confirm now</button>
<!----
<center><button type="submit" class="btn_1 green medium">Confirm now</button> </Center>  --->
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
		<div class="box_style_4">
			<i class="icon_set_1_icon-57"></i>
			<h4>Need <span>Help?</span></h4>
			<a href="tel://006590886618" class="phone">+65 8161 5060</a>
			<a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
			<!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
		</div>
		</aside>
        
	</div><!--End row -->
</div><!--End container -->

<!------        Modal For Calculator  --------->        
               
                
            <!-------        End of calculator ------------>
            
            <div class="modal fade" id="keypad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-contents" >
<!--      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>-->
      <div class="modal-body" >
          
            <div class="col-md-6 col-md-offset-3 phone" style="background-color:#F3F3F3;padding:10px;">
                            <div class="row1">
                                <div class="col-md-12">
               				<input type="tel" name="name" id="telNumber" class="form-control tel" value="" />                      
                                    <div class="num-pad">
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    2 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    3 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    4 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    5 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    6 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    7 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    8 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    9 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div id="ok" class="num1">
                                                <div class="txt">
                                                    OK<span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="num">
                                                <div class="txt">
                                                    0 <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4" id="clear">
                                            <div class="num1">
                                                <div class="txt">
                                                    Clear <span class="small">

                                                    </span>
                                                </div>
                                            </div>
                                        </div>    

                                    </div>
                                    <div class="clearfix">
                                    </div>

                                </div>
                            </div>

                            <div class="clearfix">
                            </div>
                        </div>
          
          
      </div>
<!--      <div class="modal-footer">-->
        
    </div>
  </div>
      </div>
      <!-- Popup for Alert message -->
        <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn btn-default close close_btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
                <div class="modal-body">
                    <h4 class="modal-title" id="myModalLabel">
                        <strong> <i class="icon-attention-filled"></i> </strong>
                            
                            
                        Please select time for ticket delivery</h4>
                </div>
              </div>
              
            </div> 
          </div>
        </div>
  </div>
    <?php include_once 'footer.php'; ?>

<div id="toTop"></div><!-- Back to top button -->


<script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
<script src="<?= site_url('js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?= site_url('js/bootstrap-timepicker.js'); ?>"></script>
<!-- Specific scripts -->
<script src="js/icheckss.js"></script>
<script>  
$("input.date-pick").datepicker({
    startDate: '+0d'
});

$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 
         
 </script>
 
     
<script type="text/javascript">

    $(document).ready(function(){
        $("#payment_info").hide();
	$('#confirm_order').click(function () {
            var room_no = $("#room_no").val();
            if(room_no == '')
            {
                $("#room_no").focus();
                return false;
            }
            if ($('[id="free_del"]').is(':checked')){
                
                if ($('[name="time_slots"]').is(':checked')){
                    $("#details").submit();
                    //alert('checked');
                }
                else
                {
                    $('#alertModal').modal({
                        show: 'true',
                        backdrop: 'static'
                        
                    });
                    //return false;
                }
            } else {
            	$("#details").submit();
            }
        });   

    });
    $(document).ready(function () {
	//$("#delivery_types").hide();
        $('#time_slots').show();
        $('#date_slot').show();
        
        $('#hotel_name').on('change', function() {
        if( this.value == 'Fragrance Riverside' ){
        
            $("#hotel_add").val("20 Hong Kong Street, Singapore");
            $("#hotel_a").val("20 Hong Kong Street, Singapore");
            
        }else if( this.value == 'Fragrance Bugis' ){
        
            $("#hotel_add").val("33 Middle Road, Singapore");
             $("#hotel_a").val("33 Middle Road, Singapore");
             
        }else if( this.value == 'Drop Inn Hostel' ){
        
            $("#hotel_add").val("247 Lavender Street, Singapore");
             $("#hotel_a").val("247 Lavender Street, Singapore");
        }
    });

    $('.num').click(function () {
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var roomNumber = $('#telNumber');
       
        $(roomNumber).val(roomNumber.val() + text);
      
    });
    $('#clear').click(function () {
        var roomNumber = $('#telNumber');
        var res = roomNumber.val().substr(0,(roomNumber.val().length -1));
        $("#telNumber").val(res);
        
    });
    $( "#room_no" ).focus(function() {
        
       //$('#keypad').modal('show');
       $('#keypad').modal({
            show: 'true',
            backdrop: 'static',
            keyboard: false
       });
    });
    
    $('#ok').click(function () {
    	var roomNumber = $('#telNumber').val();
        $("#room_no").val(roomNumber);
        
        $('#keypad').modal('hide');
    });
    
    $('.options').click(function () {
       
        if ($('[id="free_del"]').is(':checked')){
            $('#time_slots').show();
            $('#date_slot').show();
        }
        if ($('[id="express"]').is(':checked')){
            $('#time_slots').hide();
            $('#date_slot').hide();
        }

    });
    
    $('#tour_date').datepicker().on('changeDate', function(ev) {
        
        var field_date = $("#tour_date").val();
        var todate = new Date();
        var adv_date = new Date(field_date);
        
        if(adv_date > todate)
        {
            //$("#radio1").removeClass('disabled');
            jQuery('.date_options').attr("checked", false);
            jQuery('#radio1').attr("disabled", false);
            $( "#slot1" ).addClass('text-color');
            
            jQuery('#radio2').attr("disabled", false);
            $( "#slot2" ).addClass('text-color');
            
            jQuery('#radio3').attr("disabled", false);
            $( "#slot3" ).addClass('text-color');
            
            jQuery('#radio4').attr("disabled", false);
            $( "#slot4" ).addClass('text-color');
        }
        else
        {
           var now = new Date(Date.now());
           var formatted = now.getHours()+2;
           
           if((now.getHours()==6 || now.getHours()==10 || now.getHours()==16 || now.getHours()==21) && (now.getSeconds()> 1 ))
           {
               formatted = formatted+1;
               
           }
           jQuery('.date_options').attr("checked", false);
           if(formatted > 18)
           {
               jQuery('#radio3').attr("disabled", true);
               $( "#slot3" ).removeClass('text-color');
           }
           if(formatted > 8)
           {
               jQuery('#radio1').attr("disabled", true);
               $( "#slot1" ).removeClass('text-color');
           }
           if(formatted > 12)
           {
               jQuery('#radio2').attr("disabled", true);
               $( "#slot2" ).removeClass('text-color');
           }
           if(formatted > 23)
           {
               jQuery('#radio4').attr("disabled", true);
               $( "#slot4" ).removeClass('text-color');
           }
        }
        
    });

});
</script>

  </body>
</html>