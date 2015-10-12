<?php
include_once 'inc/config.inc.php';
 session_start();
if($_GET['pid']!=''){
$re_id = $_GET['pid'];
}
if($_POST['re_id']!=''){
$re_id = $_POST['re_id'];
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
    <header ><?php include_once 'header.php'; ?></header><!-- End Header -->
    
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
                                    <input id="email_input" name="email" type="text" class=" form-control " placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password_input" name="password" type="password" class=" form-control" placeholder="Password">
                                </div>
                                <p class="small">
                                    <a href="forgot_password.php">Forgot Password?</a>
                                </p>
                                <input type="button" name="signin" value="Sign in" id="signin_input" class="btn_full">
                                <a href="register.php " class="btn_full_outline">Register</a>
                                
                                 
                                 
                            </form>
                            <div id="prog" title="Code: 0xe802" class="the-icons" style="margin-top:10px;display:none; font-size:20px">
                        		<i class="icon-spin5 animate-spin"></i> <span class="i-name">Wait....</span><span class="i-code"></span>
                       		 </div>
                            
                        </div>
                        
                </div>
                    <div class="container" >
                        <div class="row">
                            <div id="failure_input" class=" col-sm-offset-3 col-sm-6 col-md-6" style="font-size:16px;display:none;margin-top: -50px;" >
                                <div  class="alert alert-danger" >
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        ×</button>
                                    <i class="fa fa-exclamation-triangle"></i> <strong>Error Message</strong>
                                    <hr class="message-inner-separator">
                                    <p>
                                        Either email or password is wrong. Try again</p>
                                </div>
                            </div>

                        </div>
                    </div> 
            </div>
        </div>
    </section>

<!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->



  </body>
  <script>
        $(document).ready(function(){
            
            $("#signin_input").click(function(){
            
            var rev_id = "<?php echo $re_id; ?>";
            var email = $("#email_input").val();
            var pass = $("#password_input").val();
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
            if(pass == "")
            {
                alert("Empty password not allowed");
                return false;
            }
            
                $.ajax({
                    method: "POST",
                    url: "login_request.php",
                    data: { email: email , password:pass},
                    beforeSend: function( msg ) {
                        $("#prog").show(); 
                    }
                  })
                .done(function( responce ) {
                    
                    if(responce == 'success')
                    {
                        $("#email").val('');
                        $("#prog").hide();
                       if(rev_id != '')
			{
				window.location.replace('single_tour.php?id='+rev_id);
			}else
			{
				window.location.replace('index.php');
			}
                    }
                    else
                    {
                        $("#prog").hide();
                        $("#failure_input").show();
                    }
                    
                });
            
            });
        });
    </script>
</html>