<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <!--<a href="tel://0065-90886618" id="phone">+65-907886618</a>-->
                    <a href="mailto:Sales@SingaporeDeals4u.com" id="email_footer">Sales@SingaporeDeals4u.com</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <!--<li><a href="<?=site_url('about.php');?>">About us</a></li>-->
                        <li><a href="<?=site_url('faq.php');?>">FAQ</a></li>
                        <li><a href="<?=site_url('login.php');?>">Login</a></li>
                        <li><a href="<?=site_url('register.php');?>">Register</a></li>
                         <li><a href="<?=site_url('terms-and-conditon.php');?>">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="<?=site_url('');?>">Community blog</a></li>
                        <li><a href="<?=site_url('');?>">Tour guide</a></li>
                        <li><a href="<?=site_url('wishlist.php');?>">Wishlist</a></li>
                         <li><a href="<?=site_url('index.php');?>">Gallery</a></li>
                    </ul>
                </div>
                
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="https://www.facebook.com/singaporedeals4u"><i class="icon-facebook"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-twitter"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-google"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-instagram"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-pinterest"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-vimeo"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="<?=site_url('');?>"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>&copy; Singapore Deals For You 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer>
    
    <div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->
    <script src="<?=site_url('js/jquery-1.11.2.min.js');?>"></script>
    <script src="<?=site_url('js/common_scripts_min.js');?>"></script>
    <script src="<?=site_url('js/functions.js');?>"></script>
  
    
    <script>
        $(document).ready(function(){
            
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
    </script>
               
                            
                            