<?php
   
    include_once 'inc/config.inc.php';
    include_once 'inc/class.phpmailer.php';
    //require_once '../inc/admin_secure.inc.php';
    $msg = deQueueMsg();
    $var_clear = true;
    
    

    if (!empty($_GET)) {
	$email = $_GET['e'];
    	$key =  $_GET['k'];

        
        $num = GetFieldValue( 'name','users',"email ='".$email."' and code ='".$key."'" );
        
        
        if( $num )
        {
            $update = "update users SET code = '' where email = '" . $email. "'";
            $update_res = Query($update);
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
        <style>
            .dropdown-menu {
                width: 320px !important;
                font-size:14px !important;
            }
        </style>    
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-55223762-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute('charset', 'utf-8');
                $.src = '//v2.zopim.com/?2Uad95bb0MsQ0SWogRX1q5F3Y62zv5eo';
                z.t = +new Date;
                $.
                        type = 'text/javascript';
                e.parentNode.insertBefore($, e)
            })(document, 'script');
        </script>
        <!--End of Zopim Live Chat Script-->

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
    <header>
        <?php include_once 'header.php'; ?>
    </header><!-- End Header -->
    
    <section id="hero" class="login">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                    		<div class="text-center"><img src="img/logo_sticky.png" alt="" data-retina="true" ></div>
                            <hr>
                   <form id="password_reset" name="password_reset">
                        <div style="text-align: center; font-size:16px;font-weight:bold;color:#e04f67">
                            Please enter new password
                        </div>
                        <br>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" id="pass_val" class=" form-control " placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" id="confm_pass" class=" form-control" placeholder="Password">
                        </div>
                        <input type="hidden" id="email_rec" value="<?php echo $email; ?>">
                        <a id="submit_pass" class="btn_full">Submit</a>
                        
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
                        <p>
                            Your password has been successfully changed<br>
                        </p>
                    </div>
                </div>
                
                <div id="failure" class=" col-sm-offset-3 col-sm-6 col-md-6" style="font-size:16px;display:none;margin-top: -50px;" >
                    <div  class="alert alert-danger" >
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×</button>
                        <i class="fa fa-exclamation-triangle"></i> <strong>Error Message</strong>
                        <hr class="message-inner-separator">
                        <p>
                            Unable to update the password. please try again</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<?php include_once 'footer.php'; ?>




  </body>
</html>

    <?php
        }
        else
        {
            header("Location: 404.php");
            exit;
        }
        
    }  
 else {
        header("Location: index.php");
            exit;
}
?>
    
<script>
    $(document).ready(function(){

    $("#submit_pass").click(function(){

        var pass = $("#pass_val").val();
        var email = $("#email_rec").val();
        var confirm_pass = $("#confm_pass").val();

            if(pass =='')
            {
                alert("Password cannot be empty");
                return false;
            }
            if(pass != confirm_pass)
            {
                alert("Password does not match. Try again");
                return false;
            }

                $.ajax({
                    method: "POST",
                    url: "reset_password.php",
                    data: { email: email, pass: pass },
                    beforeSend: function( msg ) {
                        $("#progress").show(); 
                    }
                  })
                .done(function( responce ) {
                    
                    if(responce == 'success')
                    {
                        $("#pass_val").val('');
                        $("#confm_pass").val('');
                        
                        $("#progress").hide();
                        $("#success").show();
                    }
                   
                    else
                    {
                        $("#progress").hide();
                        $("#failure").show();
                    }

                });

            });
        });
</script>