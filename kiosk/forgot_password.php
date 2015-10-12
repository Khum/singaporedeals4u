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
 <header id="plain">   
    <?php include_once 'header.php'; ?><!-- End Header -->
 </header>   
    <section id="hero" class="login">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                    		<div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true" ></div>
                            <hr>
                            <form>
                                <div class="form-group">
                                	<label>Email</label>
                                    <input name="email" id="emailreq" type="email" class=" form-control" placeholder="Email">
                                </div>
                                <div id="pass-info" class="clearfix"></div>
                                <button type='button' name="submit" id="submitreq" class="btn_full">Request for password</button>
                                
                                <p id="progress" style="font-size:20px;display:none"><i class="fa fa-cog fa-spin"></i><span style="margin-left:5px;">Processing...</span></p>
                            </form>
                        </div>
                        
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row">
                <div id="success" class="col-sm-offset-3 col-sm-6 col-md-6" style="font-size:16px;display:none;margin-top: -50px;">
                    <div  class="alert alert-success" >
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×</button>
                        <i class="fa fa-check"></i> <strong>Success Message</strong>
                        <hr class=" message-inner-separator">
                        <p>Your password has been sent to your email address<br>
                        </p>
                    </div>
                </div>
                
                <div id="errorfield" class=" col-sm-offset-3 col-sm-6 col-md-6" style="font-size:16px;display:none;margin-top: -50px;" >
                    <div  class="alert alert-danger" >
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×</button>
                        <i class="fa fa-exclamation-triangle"></i> <strong>Error Message</strong>
                        <hr class="message-inner-separator">
                        <p>
                            Sorry this email does not exist</p>
                    </div>
                </div>
                
            </div>
        </div>    
        
    </section>

<!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->

 <!-- Specific scripts -->
<script src="js/pw_strenght.js"></script>
<script>
        $(document).ready(function(){
            
            $("#submitreq").click(function(){
            
            var email = $("#emailreq").val();
            var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
            
            var emailTest = pattern.test(email);
            
            if(email =='')
            {
                alert("Email field cannot be empty");
                return false;
            }
            if(!emailTest)
            {
                alert("Email format is not correct");
                return false;
            }
            
                $.ajax({
                    method: "POST",
                    url: "request_password.php",
                    data: { email: email },
                    beforeSend: function( msg ) {
                        $("#progress").show(); 
                    }
                  })
                .done(function( responce ) {
                    
                    if(responce == 'success')
                    {
                        $("#email").val('');
                        $("#progress").hide();
                        $("#success").show();
                    }
                    else
                    {
                        $("#progress").hide();
                        $("#errorfield").show();
                    }
                    
                });
            
            });
        });
    </script>
  </body>
  
</html>