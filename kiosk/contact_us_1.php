<?php
include_once 'inc/config.inc.php';
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
        
        <!--        date picker css-->
        <link rel="stylesheet" href="css/date_time_picker.css">
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
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

    <!--<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
            <h1>Contact us</h1>
            <p></p>
            </div>
        </div>
    </section><!-- End Section -->

    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div>--><!-- End Position -->
<br><br><br>
<div class="container margin_60">
	<div class="row">
		<div class="col-md-8 col-sm-8">			
			            
				<div id="message-contact"></div>
                                <!--				<form method="post" action="assets/contact.php" id="contactform">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" id="lastname_contact" name="lastname_contact" placeholder="Enter Last Name">
							</div>
						</div>
					</div>
					 End row 
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Subject</label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Subject">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message</label>
								<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:200px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Human verification</label>
							<input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
							<input type="submit" value="Submit" class="btn_1" id="submit-contact">
						</div>
					</div>
				</form>-->
                                 <?php 
				 if($_GET['msg']=='ok')
				 {
				 ?>
                                <!--<script type="text/javascript">
                                                alert('Message Successfully Sent. Our Agent Will Contact You Soon');
                                                </script>-->
                                <h4 style="color:#18D310; font-weight:bold; text-transform:capitalize;">Your Contact Us form has been successfully submitted thank you.<i class="icon-smile"></i></h4>
                                 <?php } ?>
                                <form method="post" action="contactus_kiosk.php" id="contactform">
                                    <div class="form_title">
                                        <h3><strong><i class="icon-pencil"></i></strong>Hotel Details</h3>
                                        <p></p>
                                    </div>
                                    <div class="step">
					<div class="row">
                                            <div class="col-md-6 col-sm-6">

                                                <div class="form-group">
                                                <label class="label-font">Hotel Name</label>
                                                <select class="form-control label-font" name="hotel_name" id="hotel_name">
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
                                                    <input type="text" class="form-control label-font" id="hotel_add" name="hotel_address" value="20 Hong Kong Street, Singapore" disabled>

                                                    <input type="hidden" class="form-control" id="hotel_a" name="hotel_address" value="20 Hong Kong Street, Singapore">

                                            </div>
                                            </div>
                                        </div>
					<div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label class="label-font">Room No</label>
                                                    <input type="text" class="form-control label-font" id="room_no" name="room_no" required="">

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">

                                                <!-- Keypad --->

                                                <!------>
                                            </div>
                                        </div>
                                    </div>
					<div class="form_title">
                                            <h3><strong>2</strong>Contact Options</h3>
                                        </div>
                                      <div class="step">
                                          <div class="row"> 
                                        <div class="col-md-12 funkyradio">
                                            <div class="col-md-12 funkyradio-success">
                                                <input type="radio" class="options" id="express" name="delivery"  value="Please Call me Now at my Room Number in Hotel" />
                                                <label for="express">Please Call me Now at my Room Number in Hotel</label>
                                            </div>
                                            
                                            <div class="col-md-12 funkyradio-success">
                                                <input type="radio" class="options" id="callme_phone" name="delivery"  value="Please Call me on this phone number Now" />
                                                <label for="callme_phone">Please Call me on this phone number Now.</label>
                                            </div>
                                            
                                            <div class="form-group" id="phone_slot" style="width:45%;margin-left:15px; display: none;">
                                            <label class="label-font" style="margin-top: 30px; border: 0px solid !important"><i class="icon-phone"></i>Phone Number</label>
                                           <input type="text" class="form-control label-font" id="phone_no" name="phone_no">
                                        </div>    
                                            
                                            <div class="col-md-12 funkyradio-success">
                                                <input type="radio" class="options" name="delivery" id="free_del" value="Please Meet me for more information about Day Tour Options" checked />
                                                <label for="free_del"  >Please Meet me for more information about Day Tour Options</label>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group" id="date_slot" style="width:45%;margin-left:15px;">
                                            <label class="label-font" style="margin-top: 30px;"><i class="icon-calendar-7"></i>  Select a date</label>
                                             <input name="tour_date" id="tour_date" class="date-pick form-control label-font" data-date-format="yyyy-mm-dd" type="text" value="<?php echo date('Y-m-d'); ?>">
                                        </div>    

                           
                                        <?php 
                                            $time_slot1 = date('Y-m-d').' 18:00:00';
                                            $time_slot2 = date('Y-m-d').' 8:30:00';
                                            $time_slot3 = date('Y-m-d').' 12:00:00';
                                            $time_slot4 = date('Y-m-d').' 23:30:00';

                                            $advance_time = date('Y-m-d H:i:s', strtotime("+120 min"));
                                            $checked=1;
                                        ?>
                              
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
                                        </div>
                                     
                                        <div class="row">
                                            <br>
                                            <div class="col-md-6">
                                                       
                                                    <input type="submit" name="submit" value="Submit" class="btn_1" id="">
                                            </div>
                                        </div>
                                    </div><!--End step -->
                                    
                                    
				</form>
			
		</div><!-- End col-md-8 -->
        
		<div class="col-md-4 col-sm-4">
			<div class="box_style_1">
				<span class="tape"></span>
				<!--<h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
				<p>
					1B, Cantonment Road, 44-19, Singapore 085201
				</p>
				<hr>-->
				<h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
				<p>
					Operating Hours 24 X 7
				</p>
                <P>At Singapore Deals For You, we are always happy to hear from existing or prospecting clients. If you have a question or problem, feel free to call us or send an email.<br>
We are widely used Viber, Line, WhatsApp and WeChat so feel free to add us to your contact and buzz us anytime. </P>
				<ul id="contact-info">
					<li>+65 8161 5060</li>
					<li><a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a></li>
				</ul>
			</div>
			<div class="box_style_4">
				<i class="icon_set_1_icon-57"></i>
				<h4>Need <span>Help?</span></h4>
				<a href="tel://006590886618" class="phone">+65 8161 5060</a>
				<a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
				<small></small>
			</div>
		</div><!-- End col-md-4 -->
	</div><!-- End row -->
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
       <div class="modal fade" id="keypadphone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-contents" > 
        <div class="modal-body" >
          
            <div class="col-md-6 col-md-offset-3 phone" style="background-color:#F3F3F3;padding:10px;">
                            <div class="row1">
                                <div class="col-md-12">
               				<input type="tel" name="name" id="phonenumber" class="form-control tel" value="" />                      
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
                                            <div id="okphone" class="num1">
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
                                        <div class="span4" id="clearphone">
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
    </div>
      </div>
           </div>
</div><!-- End container -->
<!--<div class="row map">
    <div class="col-lg-12" style="height:450px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.659684227762!2d103.83464322392514!3d1.2754210817047553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da196daff89c05%3A0xe323603128d70bca!2s1B+Cantonment+Rd%2C+Singapore+085201!5e0!3m2!1sen!2s!4v1435833122088" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>--> <!-- /map -->
<div id="directions">
  	<div class="container">
    	<div class="row">
        <div class="col-md-8 col-md-offset-2">
       <form action="http://maps.google.com/maps" method="get" target="_blank">
				<div class="input-group">
					<input type="text" name="saddr" placeholder="Enter your starting point" class="form-control style-2" />
					<input type="hidden" name="daddr" value="New York, NY 11430"/><!-- Write here your end point -->
					<span class="input-group-btn">
					<button class="btn" type="submit" value="Get directions" style="margin-left:0;">GET DIRECTIONS</button>
					</span>
				</div><!-- /input-group -->
			</form>
          </div>
        </div>
    </div>
  </div><!-- end directions-->


<!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->


 <!-- Specific scripts -->

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?=site_url('js/map_contact.js');?>"></script>
<script src="<?=site_url('js/infobox.js');?>"></script>
<script src="<?= site_url('js/bootstrap-datepicker.js'); ?>"></script>

<script type="text/javascript">
    $("input.date-pick").datepicker({
    startDate: '+0d'
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
     $( "#room_no" ).focus(function() {
        
       //$('#keypad').modal('show');
       $("#telNumber").val("");
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
    $('.options').click(function () {
       
        if ($('[id="free_del"]').is(':checked')){
            $('#time_slots').show(1000);
            $('#date_slot').show(1000);
            $('#phone_slot').hide();
        }
        if ($('[id="express"]').is(':checked')){
            $('#time_slots').hide();
            $('#date_slot').hide();
            $('#phone_slot').hide();
        }
         if ($('[id="callme_phone"]').is(':checked')){
            $('#time_slots').hide();
            $('#date_slot').hide();
            $('#phone_slot').show(1000);
          
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
    $( "#phone_no" ).focus(function() {
        
       $("#phonenumber").val("");
       $('#keypadphone').modal({
            show: 'true',
            backdrop: 'static',
            keyboard: false
       });
    });
     $('#okphone').click(function () {
    	var roomNumber = $('#phonenumber').val();
        $("#phone_no").val(roomNumber);
        
        $('#keypadphone').modal('hide');
    });
    $('.num').click(function () {
        var num = $(this);
        var text = $.trim(num.find('.txt').clone().children().remove().end().text());
        var roomNumber = $('#phonenumber');
       
        $(roomNumber).val(roomNumber.val() + text);
      
    });
    $('#clearphone').click(function () {
        var roomNumber = $('#phonenumber');
        var res = roomNumber.val().substr(0,(roomNumber.val().length -1));
        $("#phonenumber").val(res);
        
    });
    
 });
</script>
  </body>
</html>