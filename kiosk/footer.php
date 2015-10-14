<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
               	    <img src="img/logo-white.png" class="img-responsive" width="170px" height="60px">
                    <h3>Need help?</h3>                    
                    <a href="tel://006590886618" id="phone">+65 8161 5060</a>
                    <a href="mailto:Sales@SingaporeDeals4u.com" id="email_footer">Sales@SingaporeDeals4u.com</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <!--<li><a href="<?=site_url('kiosk/about.php');?>">About us</a></li>-->
                        <li><a href="<?=site_url('kiosk/faq.php');?>">FAQ</a></li>
                        <!--<li><a href="<?=site_url('kiosk/login.php');?>">Login</a></li>-->
                        <!--<li><a href="<?=site_url('kiosk/register.php');?>">Register</a></li>-->
                         <li><a href="<?=site_url('kiosk/terms-and-conditon.php');?>">Terms and condition</a></li>
                         <li><a href="<?=site_url('kiosk/disclaimer.php');?>">Disclaimer</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="<?=site_url('kiosk/');?>">Community blog</a></li>
                        <li><a href="<?=site_url('kiosk/');?>">Tour guide</a></li>
                        <li><a href="<?=site_url('kiosk/wishlist.php');?>">Wishlist</a></li>
                         <li><a href="<?=site_url('kiosk/index.php');?>">Gallery</a></li>
                    </ul>
                </div>
                
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="https://www.facebook.com/singaporedeals4u"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/sgbesttours"><i class="icon-twitter"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-google"></i></a></li>
                            <li><a href="https://instagram.com/best.tours.sg/"><i class="icon-instagram"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-pinterest"></i></a></li>
                            <!--<li><a href="<?=site_url('kiosk/');?>"><i class="icon-vimeo"></i></a></li>-->
                            <li><a href="<?=site_url('kiosk/');?>"><i class="icon-youtube-play"></i></a></li>
                            <!--<li><a href="<?=site_url('kiosk/');?>"><i class="icon-linkedin"></i></a></li>-->
                        </ul>
                        <p>&copy; Singapore Deals For You 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer>
    
    <div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->
    <script src="<?=site_url('kiosk/js/jquery-1.11.2.min.js');?>"></script>
    <script src="<?=site_url('kiosk/js/common_scripts_min.js');?>"></script>
    <script src="<?=site_url('kiosk/js/functions.js');?>"></script>
  
    <!---- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script> --->
    <script>
        $(document).ready(function(){
            setInterval(function() {
                var cart="reset";
                
               $.ajax({
                    method: "POST",
                    url: "request_reset.php",
                    data: { k: cart}
                })
                .done(function( responce ) {
                    
                    if(responce == 'success')
                    {
                       // window.location.replace("index.php");
                        $("#cart_item_display").html("<h4> Cart has been reset. please visit home page</h4>");
                        $("#cart_header").html("Cart( 0 )");
                        $("#cart_items").html('<li><div>Total : SGD <span id="cart_total">0</span></div></li>');
                       
                        setInterval(function() {    
                            window.location.reload();
                        }, 1000 * 15 * 1);
                        
                    }
                });
            }, 1000 * 60 * 5);
            
            $("#signinbutton").click(function(){
            
            var email = $("#email").val();
            var pass = $("#password").val();
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
                        $("#progress").show(); 
                    }
                  })
                .done(function( responce ) {
                    
                    if(responce == 'success')
                    {
                        $("#email").val('');
                        $("#progress").hide();
                        window.location.replace('index.php');
                    }
                    else
                    {
                        $("#progress").hide();
                        $("#failure").show();
                    }
                    
                });
            
            });
            
            
        });
        
        function empty_cart()
        {
            var cart="reset";

            $.ajax({
                method: "POST",
                url: "request_reset.php",
                data: { k: cart},
                beforeSend: function( msg ) {
                    $("#progress").show(); 
                    $("#progress").css("display","inline");
                }
            })
            .done(function( responce ) {

                if(responce == 'success')
                {
                    window.location.replace("index.php");

                }
            });
        }
        
        
    </script>
               
                            
                            