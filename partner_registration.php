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
     
     <link rel="stylesheet" href="css/date_time_picker.css">
     <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
     <script language="javascript" type="text/javascript" src="js/script.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	    $("#hide").click(function(){
	        $("#agent_code").hide(1000);
	    });
	    $("#show").click(function(){
	        $("#agent_code").show(1000);
	    });
	});
	</script>
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
            <h1>Partner Registration Form</h1>
            <p></p>
            </div>
        </div>
    </section>--><!-- End Section -->

    <!--<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Partner Registration Form</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div>--><!-- End Position -->
<br><br><br><br>
    <div class="container margin_60">
        <div class="row">
           

            <div class="col-md-6 col-sm-6">
                <div class="box_style_1">
				<span class="tape"></span>
				<p>
					If you are a travel agency, an independent travel agent, a travel consortium or a travel management company, we offer you a chance to join us and make your job easier.
				</p>
				
				
				<p>
					Your customers will benefit from a reliable and affordable DMC here in Singapore and you will obtain a fast, easy and profitable solution for organizing transfers of individuals, corporates and small groups.
				</p>
                                <h4>Benefits of becoming our partner<span><i class="icon-info pull-right"></i></span></h4>
                                <P><ul>
                                        <li>Payment conditions and commission defined in advance</li>
                                        <li>Easy online booking system</li>
                                        <li>No worries – after the booking process is completed, we take care of all the rest</li>
                                        <li>Fast response of the travel agent by quickly providing customers with a comprehensive offer</li>
                                        <li>Various Day Tours and Admission Ticket Options</li>
                                        <li>Continuous updates on prices and Offer</li>
                                        <li>24-hour support</li>
                                </ul></P>
                                <h4>Four ways of selling our services<span><i class="icon-info pull-right"></i></span></h4>                                
                                <p><ul>                                        
                                        <li>Book Tickets through our website using a unique user profile</li>
                                        <li>Get White lablel Solution for your Brand for Free !!!</li>
                                        <li>Offer your clients affiliate links to our booking system</li>
                                        <li>Sell our Travel Products as part of your tourist offer</li>
                                </ul></p>
                                <p><strong>If you wish to become our partner, Simply fill-up the inquiry form.

                                        We will send you the Agent Tariff & other Terms & Conditions on successful registration.</strong></p>
				
		</div>
                <div class="box_style_4">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                   <a href="tel://006581615060" class="phone">+65 8161 5060</a>
                    <!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
                    <a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
                </div>
            </div><!-- End col-md-4 -->
             <div class="col-md-6 col-sm-6">
                <div class="form_title">
                    <h3><strong><i class="icon-pencil"></i></strong>Free Registration for Travels Agent Open Now</h3>
                    <?php 
				 if($_GET['msg']=='ok')
				 {
				 ?>
                 <!--<script type="text/javascript">
				 alert('Message Successfully Sent. Our Agent Will Contact You Soon');
				 </script>-->
                <h4 style="color:#18D310; font-weight:bold; text-transform:capitalize;">Your Inquiry form has been successfully submitted thank you.<i class="icon-smile"></i></h4>
                 <?php } ?>
                    <p></p>
                </div>
                <div class="step">
                    <div id="message-contact"></div>
                    <form method="post" action="">
						<div class="error success"></div>
							<div class="row">
								<label>First Name</label>
								<input type="text" name="f_name" class="form-control " value=""/>
							</div>
							<div class="row">
								<label>Last Name</label>
								<input type="text" name="l_name" class="form-control " value=""/>
							</div>
							
							<div class="row">
								<label>Agency Name</label>
								<input type="text" name="ag_name" class="form-control  is_required" value=""/>
							</div>
							
							<div class="row">
								<label>Email</label>
								<input type="text" name="c_email" class="form-control  is_required email" value=""/>
							</div>
							<div class="row">
								<label>Country</label>
								<input type="text" name="country" class="form-control  is_required" value=""/>
							</div>
							<div class="row">
								<label>Contact Number</label>
								<input type="text" name="phone" class="form-control  is_required" value=""/>
							</div>
							<div class="row">
							<br>
                                                           <input type="radio" value="direct" name="rates_file" checked="" id="hide"> 
								<label>Direct Customer</label>                                                                
                                                                
							</div>  							
							<div class="row">
                                                           
                                                            <input type="radio" value="agent" name="rates_file" id="show">
								<label>Agent Tariff </label>
							</div>
                                                        <div class="row" id="agent_code" style="display:none;">
								<label>Agent Invitation Code</label>                                                               
                                                                <input type="text" name="agent_code" class="form-control value="" id="sort_order"/>
                                                                <label style="float: left; color: #18D310" id="success"><i class="icon-ok-circled"></i> Correct</label>
                                                                <label style="float: left; color: red" id="fail"><i class="icon-cancel-circled"></i> Agent Invitation Code does not match. </label>
                                                                
							</div>                                                
                                                             
							<div class="row">
                                                            <div class="form-group">                                                                
                                                               
                                                                <input class="" type="checkbox" value="Yes" name="update">
                                                                <label>Can we send you updates about over services</label>
                                                            </div>
							</div>
							<div class="row">
							
							<input type="submit" name="name" class="btn btn-primary gradient-button submitbtn" value="SUBMIT" id="send"/>
							<div id="wait_loading"></div>
							</div>
							<div class="clear"></div>
		</form>
            </div>
            </div><!-- End col-md-8 -->
        </div><!-- End row -->
    </div><!-- End container -->
<script>
    
    $(document).ready(function(){
        $("#success").hide();
        $("#fail").hide();
        jQuery('#send').attr("disabled", true);
  $("#sort_order").keyup(function(){      
    var sort_order = $("#sort_order").val();
    
    $.ajax({
    method: "POST",
    url: "agent_code.php",
    data: {sort_order:sort_order}

    })
        .done(function (responce) {

            if (responce)
            {
$("#success").hide();
$("#fail").hide();
               
                if(responce=='Correct'){
                $("#success").show();
                jQuery('#send').attr("disabled", false);
                }else{
                $("#fail").show();
                jQuery('#send').attr("disabled", true);
                }
                return false;

            }

        });

 
  });
 
});
        
</script>
    <!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->


 <!-- Specific scripts -->
<script src="<?=site_url('assets/validate.js');?>"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?=site_url('js/map_contact.js');?>"></script>
<script src="<?=site_url('js/infobox.js');?>"></script>

<!-- Date and time pickers -->
<script src="<?=site_url('js/bootstrap-datepicker.js');?>"></script>
<script>
  $('input.date-pick').datepicker('setDate','today');
 
</script>

  </body>
</html>
