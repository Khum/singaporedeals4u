<?php
include_once 'inc/config.inc.php';

//----------------rating------------
//'review_overall' => '>10'
$where = array('review_overall' => '5');
$rows_data = greaterthanRows(DB_TABLE_PREFIX . 'reviews', $where, '*', '', '', '', 'Y', '4');
$product_data = $rows_data['data'];

?><!DOCTYPE html>
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
    <header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->
    
<!--<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">-->
<!--<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>About us</h1>
        <p></p>
        </div>
    </div>
</section> End Section -->
    
<!--<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
</div> End Position -->

<div class="container margin_60 margin_div">

	<div class="main_title">
        <h2>Some <span>good </span>reasons</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>

<div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                 <div class="feature">
                    <i class="icon_set_1_icon-41"></i>
                    <h3><span>+120</span> Premium city tours</h3>
                    <p>
                        We provide a wide variety of activities in Singapore that are suitable for tourists visiting to Singapore . There is something for everyone. Day Tours, Attraction Tickets and many more.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="feature">
                    <i class="icon_set_1_icon-13"></i>
                    <h3><span>Accesibility</span> managment</h3>
                    <p>
                        We can arrange Special Tours for your special needs. Life is short and there should be no regrets. Dont feel restricted due to limitation. Come and see what Singapore has to offer.
                    </p>
                </div>
            </div>
            </div><!-- End row -->
            <div class="row">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature">
                    <i class="icon_set_1_icon-57"></i>
                    <h3><span>H24</span> Support</h3>
                    <p>
                        We are available round the clock to reply to your inquiries and provide non obligatory consultation on what to do and what not to do in Singapore. We also have facility to deliver tickets to all major hotels in Singapore 24 by 7.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="feature">
                    <i class="icon_set_1_icon-36"></i>
                    <h3><span>No Cancellation</span> Charges</h3>
                    <p>
                    Its always OK to change your mind. Just inform us about it. We offer free cancellation until 04 hours before the service delivery time. Point to note is that Free Cancellation only apply to purchase of Attraction Tickets.
                    </p>
                </div>
            </div>
            </div><!-- End row -->
           
        <hr>
        <div class="row">
        	<div class="col-md-6 col-sm-6">
            	<h4>Pertinax elaboraret sed</h4>
                <p>Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut <a href="#">utamur antiopam inciderint</a> sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. </p>
                <div class="general_icons">
                	<ul>
                    <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                    <li><i class="icon_set_1_icon-8"></i>Dinner</li>
                    <li><i class="icon_set_1_icon-32"></i>Photo collection</li>
                     <li><i class="icon_set_1_icon-50"></i>Personal shopper</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
            	<h4>Mel at vide soluta</h4>
                <p>Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut <strong>utamur antiopam inciderint</strong> sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. </p>
                <div class="general_icons">
                	<ul>
                    <li><i class="icon_set_1_icon-98"></i>Audio guide</li>
                    <li><i class="icon_set_1_icon-27"></i>Parking</li>
                    <li><i class="icon_set_1_icon-36"></i>Exchange</li>
                     <li><i class="icon_set_1_icon-63"></i>Mobile</li>
                    </ul>
                </div>
            </div>
        </div><!-- End row -->        
</div><!-- End container -->

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 nopadding features-intro-img">
						<div class="features-bg">
							<div class="features-img"></div>
						</div>
					</div>
					<div class="col-md-6 nopadding">
						<div class="features-content">
                        	<h3>"Ex vero mediocrem"</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							<p><a href="#" class=" btn_1 white">Read more</a></p>
						</div>
					</div>
				</div>
			</div><!-- End container-fluid  -->
     
        	<div class="container margin_60">

           <?php if ($rows_data['total_recs'] > 0) { ?>
            <div class="main_title">
                <h2>What <span>customers </span>says</h2>
                <p></p>
            </div>
            
            	<div class="row">
                	<?php 	$img =  array('avatar1.jpg','avatar3.jpg','avatar2.jpg');
		     		$i=0;
                		foreach ($product_data as $rating) {
				extract($rating);					 
				?>
                	<div class="col-md-6">
                    		<div class="review_strip">
                                <?php if($i > 2){
				$i=0;
				} ?>
	                        <img src="img/<?php echo $img[$i]; ?>" alt="" class="img-circle">
                                <h4><?php echo $username; ?></h4>
                                <p>
                                     <?php echo '"'.$likes.'"';?>
                                </p>
                                <div class="rating">
								<?php if($review_overall <= 2 and $review_overall > 0){?> 
                                <i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                               <?php }
                                if($review_overall <=4 and $review_overall > 2) { ?>
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                <?php } if($review_overall <=6 and $review_overall > 4) { ?>
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                <?php }if($review_overall <=8 and $review_overall > 6) { ?>
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star voted"></i><i class=" icon-star-empty"></i>
                                <?php } if($review_overall <=10 and $review_overall > 8) { ?>
                                <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star voted"></i><i class=" icon-star voted"></i>
                                <?php } ?>
                                </div>
                            </div><!-- End review strip -->
                    </div>
                    <?php $i++; } ?>
                 
                </div><!-- End row -->
                <hr>
             	<?php }else{} ?>
            
            
            <div class="row">
                <div class="col-md-6 col-sm-6 hidden-xs">
                    <img src="img/laptop.jpg" alt="Laptop" class="img-responsive laptop">
                </div>
                <div class="col-md-6 col-sm-6">
                    <h3><span>Get started</span> with Singapore Deals4u</h3>
                    <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
                    <ul class="list_order">
                        <li><span>1</span>Select your preferred tours</li>
                        <li><span>2</span>Purchase tickets and options</li>
                        <li><span>3</span>Pick them directly from your office</li>
                    </ul>
                    <a href="all_tours_list.php" class="btn_1">Start now</a>
                </div>
            </div><!-- End row -->
        </div><!-- End Container -->
        
<!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->

  </body>
</html>