<?php
include_once 'inc/config.inc.php';

        $user_id = $_SESSION['Auth_id'];
		$username = $_SESSION['Auth_name'];
		$email = $_SESSION['Auth_user'];
		$pid = $_GET['id'];
		
		$where_pro = array('id' => $pid);
		$rows_data_pro = getRows(DB_TABLE_PREFIX . 'product', $where_pro, '*');
		$pro_data = $rows_data_pro['data'];
		$product = $pro_data[0];
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<?php include_once 'head.php'; ?>
        <link href="<?=site_url('css/style2.css');?>" rel="stylesheet">
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
    
<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Reviews</h1>
        <p></p>
        </div>
    </div>
</section><!-- End Section -->
    
<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#"><?php echo $product['title'];?></a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div><!-- End Position -->

<div class="container margin_60">
	<div class="main_title">
		<h2><span><?php echo $product['title'];?></h2>
		<p>
			
		</p>
	</div>
	<hr>
    <script>
		window.postType = 'tour';
	</script>
	<script>
		window.postType = 'tour';
		window.postId = '3774';
		window.reviewFields = new Array();
				reviewFields.push("review_overall");
				reviewFields.push("review_accommodation");
				reviewFields.push("review_transport");
				reviewFields.push("review_meals");
				reviewFields.push("review_guide");
				reviewFields.push("review_value_for_money");
				reviewFields.push("review_program_accuracy");
				window.reviewFormLikesError = "Please enter your likes";
		window.reviewFormDislikesError = "Please enter your dislikes";
	</script>
    <section class="full-width review-tour-section" style="">
        <article class="static-content">
            <form id="" class="review review-tour-form" action="rating_process.php" method="post">
            	<h1 class="re-heading">We would like to know your opinion about <?php echo $product['title']; ?>.</h1>
                <?php 
				 if($_GET['msg']=='success'){
				 ?>
                <div class="success">
                	<span>Update Successful! Thank you so much for your opinion!</span>
                </div>
                <?php } ?>
                
            	<p>Please score the following:</p>
                <table>
                    <tbody>
                    <tr>
                        <th>Element</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                    </tr>
                    <tr>
                        <th>Overall</th>
                        <td>
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <input type="hidden" name="username" value="<?php echo $username; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
                        <div id="uniform-reviewField_review_overall_1" class="">
                        <span>
                            <input id="reviewField_review_overall_1" type="radio" name="reviewField_review_overall" value="1"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_2" class="">
                        <span>
                            <input id="reviewField_review_overall_2" type="radio" name="reviewField_review_overall" value="2"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_3" class="">
                        <span>
                            <input id="reviewField_review_overall_3" type="radio" name="reviewField_review_overall" value="3"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_4" class="">
                        <span>
                            <input id="reviewField_review_overall_4" type="radio" name="reviewField_review_overall" value="4"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_5" class="">
                        <span>
                            <input id="reviewField_review_overall_5" type="radio" name="reviewField_review_overall" value="5"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_6" >
                        <span>
                            <input id="reviewField_review_overall_6" type="radio" name="reviewField_review_overall" value="6"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_7" >
                        <span>
                            <input id="reviewField_review_overall_7" type="radio" name="reviewField_review_overall" value="7"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_8" >
                        <span>
                            <input id="reviewField_review_overall_8" type="radio" name="reviewField_review_overall" value="8"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_9" >
                        <span>
                            <input id="reviewField_review_overall_9" type="radio" name="reviewField_review_overall" value="9"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_overall_10" >
                        <span>
                            <input id="reviewField_review_overall_10" type="radio" name="reviewField_review_overall" value="10"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                    </tr>
                    <!--<tr>
                        <th>Accommodation</th>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_1" >
                        <span>
                            <input id="reviewField_review_accommodation_1" type="radio" name="reviewField_review_accommodation" value="1"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_2" >
                        <span>
                            <input id="reviewField_review_accommodation_2" type="radio" name="reviewField_review_accommodation" value="2"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_3" >
                        <span>
                            <input id="reviewField_review_accommodation_3" type="radio" name="reviewField_review_accommodation" value="3"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_4" >
                        <span>
                            <input id="reviewField_review_accommodation_4" type="radio" name="reviewField_review_accommodation" value="4"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_5" >
                        <span>
                            <input id="reviewField_review_accommodation_5" type="radio" name="reviewField_review_accommodation" value="5"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_6" >
                        <span>
                            <input id="reviewField_review_accommodation_6" type="radio" name="reviewField_review_accommodation" value="6"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_7" >
                        <span>
                            <input id="reviewField_review_accommodation_7" type="radio" name="reviewField_review_accommodation" value="7"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_8" >
                        <span>
                            <input id="reviewField_review_accommodation_8" type="radio" name="reviewField_review_accommodation" value="8"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_9" >
                        <span>
                            <input id="reviewField_review_accommodation_9" type="radio" name="reviewField_review_accommodation" value="9"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_accommodation_10" >
                        <span>
                            <input id="reviewField_review_accommodation_10" type="radio" name="reviewField_review_accommodation" value="10"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                    </tr>-->
                    
                    <tr>
                        <th>Transport</th>
                        <td>
                        <div id="uniform-reviewField_review_transport_1" >
                        <span>
                            <input id="reviewField_review_transport_1" type="radio" name="reviewField_review_transport" value="1"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_2" >
                        <span>
                            <input id="reviewField_review_transport_2" type="radio" name="reviewField_review_transport" value="2"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_3" >
                        <span>
                            <input id="reviewField_review_transport_3" type="radio" name="reviewField_review_transport" value="3"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_4" >
                        <span>
                            <input id="reviewField_review_transport_4" type="radio" name="reviewField_review_transport" value="4"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_5" >
                        <span>
                            <input id="reviewField_review_transport_5" type="radio" name="reviewField_review_transport" value="5"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_6" >
                        <span>
                            <input id="reviewField_review_transport_6" type="radio" name="reviewField_review_transport" value="6"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_7" >
                        <span>
                            <input id="reviewField_review_transport_7" type="radio" name="reviewField_review_transport" value="7"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_8" >
                        <span>
                            <input id="reviewField_review_transport_8" type="radio" name="reviewField_review_transport" value="8"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_9" >
                        <span>
                            <input id="reviewField_review_transport_9" type="radio" name="reviewField_review_transport" value="9"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_transport_10" >
                        <span>
                            <input id="reviewField_review_transport_10" type="radio" name="reviewField_review_transport" value="10"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                    </tr>
                    
                    <!--<tr>
                        <th>Meals</th>
                        <td>
                        <div id="uniform-reviewField_review_meals_1" >
                        <span>
                            <input id="reviewField_review_meals_1" type="radio" name="reviewField_review_meals" value="1"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_2" >
                        <span>
                            <input id="reviewField_review_meals_2" type="radio" name="reviewField_review_meals" value="2"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_3" >
                        <span>
                            <input id="reviewField_review_meals_3" type="radio" name="reviewField_review_meals" value="3"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_4" >
                        <span>
                            <input id="reviewField_review_meals_4" type="radio" name="reviewField_review_meals" value="4"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_5" >
                        <span>
                            <input id="reviewField_review_meals_5" type="radio" name="reviewField_review_meals" value="5"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_6" >
                        <span>
                            <input id="reviewField_review_meals_6" type="radio" name="reviewField_review_meals" value="6"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_7" >
                        <span>
                            <input id="reviewField_review_meals_7" type="radio" name="reviewField_review_meals" value="7"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_8" >
                        <span>
                            <input id="reviewField_review_meals_8" type="radio" name="reviewField_review_meals" value="8"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_9" >
                        <span>
                            <input id="reviewField_review_meals_9" type="radio" name="reviewField_review_meals" value="9"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_meals_10" >
                        <span>
                            <input id="reviewField_review_meals_10" type="radio" name="reviewField_review_meals" value="10"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        </tr>-->
                        
                        <tr>
                        <th>Guide</th>
                        <td>
                        <div id="uniform-reviewField_review_guide_1" >
                        <span>
                            <input id="reviewField_review_guide_1" type="radio" name="reviewField_review_guide" value="1"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_2" >
                        <span>
                            <input id="reviewField_review_guide_2" type="radio" name="reviewField_review_guide" value="2"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_3" >
                        <span>
                            <input id="reviewField_review_guide_3" type="radio" name="reviewField_review_guide" value="3"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_4" >
                        <span>
                            <input id="reviewField_review_guide_4" type="radio" name="reviewField_review_guide" value="4"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_5" >
                        <span>
                            <input id="reviewField_review_guide_5" type="radio" name="reviewField_review_guide" value="5"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_6" >
                        <span>
                            <input id="reviewField_review_guide_6" type="radio" name="reviewField_review_guide" value="6"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_7" >
                        <span>
                            <input id="reviewField_review_guide_7" type="radio" name="reviewField_review_guide" value="7"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_8" >
                        <span>
                            <input id="reviewField_review_guide_8" type="radio" name="reviewField_review_guide" value="8"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_9" >
                        <span>
                            <input id="reviewField_review_guide_9" type="radio" name="reviewField_review_guide" value="9"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_guide_10" >
                        <span>
                            <input id="reviewField_review_guide_10" type="radio" name="reviewField_review_guide" value="10"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Value for money</th>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_1" >
                        <span>
                            <input id="reviewField_review_value_for_money_1" type="radio" name="reviewField_review_value_for_money" value="1"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_2" >
                        <span>
                            <input id="reviewField_review_value_for_money_2" type="radio" name="reviewField_review_value_for_money" value="2"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_3" >
                        <span>
                            <input id="reviewField_review_value_for_money_3" type="radio" name="reviewField_review_value_for_money" value="3"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_4" >
                        <span>
                            <input id="reviewField_review_value_for_money_4" type="radio" name="reviewField_review_value_for_money" value="4"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_5" >
                        <span>
                            <input id="reviewField_review_value_for_money_5" type="radio" name="reviewField_review_value_for_money" value="5"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_6" >
                        <span>
                            <input id="reviewField_review_value_for_money_6" type="radio" name="reviewField_review_value_for_money" value="6"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_7" >
                        <span>
                            <input id="reviewField_review_value_for_money_7" type="radio" name="reviewField_review_value_for_money" value="7"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_8" >
                        <span>
                            <input id="reviewField_review_value_for_money_8" type="radio" name="reviewField_review_value_for_money" value="8"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_9" >
                        <span>
                            <input id="reviewField_review_value_for_money_9" type="radio" name="reviewField_review_value_for_money" value="9"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_value_for_money_10" >
                        <span>
                            <input id="reviewField_review_value_for_money_10" type="radio" name="reviewField_review_value_for_money" value="10"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Program accuracy</th>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_1" >
                        <span>
                            <input id="reviewField_review_program_accuracy_1" type="radio" name="reviewField_review_program_accuracy" value="1"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_2" >
                        <span>
                            <input id="reviewField_review_program_accuracy_2" type="radio" name="reviewField_review_program_accuracy" value="2"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_3" >
                        <span>
                            <input id="reviewField_review_program_accuracy_3" type="radio" name="reviewField_review_program_accuracy" value="3"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_4" >
                        <span>
                            <input id="reviewField_review_program_accuracy_4" type="radio" name="reviewField_review_program_accuracy" value="4"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_5" >
                        <span>
                            <input id="reviewField_review_program_accuracy_5" type="radio" name="reviewField_review_program_accuracy" value="5"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_6" >
                        <span>
                            <input id="reviewField_review_program_accuracy_6" type="radio" name="reviewField_review_program_accuracy" value="6"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>	
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_7" >
                        <span>
                            <input id="reviewField_review_program_accuracy_7" type="radio" name="reviewField_review_program_accuracy" value="7"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_8" >
                        <span>
                            <input id="reviewField_review_program_accuracy_8" type="radio" name="reviewField_review_program_accuracy" value="8"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_9" >
                        <span class="checked">
                            <input id="reviewField_review_program_accuracy_9" type="radio" name="reviewField_review_program_accuracy" value="9"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                        <td>
                        <div id="uniform-reviewField_review_program_accuracy_10" >
                        <span>
                            <input id="reviewField_review_program_accuracy_10" type="radio" name="reviewField_review_program_accuracy" value="10"><label for="radio1"><span><span></span></span></label>
                        </span>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            	<h3>What did you like about the tour?</h3>
                <div class="f-item">
                	<textarea id="likes" cols="10" rows="4" name="likes"></textarea>
                </div>
                <h3>What did you not like about the tour?</h3>
                <div class="f-item">
                	<textarea id="dislikes" cols="10" rows="4" name="dislikes"></textarea>
                </div>
                <a class="gradient-button cancel-tour-review btn_1" title="Cancel" href="<?=site_url('single_tour.php');?>?id=<?php echo $pid; ?>">Cancel</a>
                <input id="submit-tour-review" class="gradient-button btn_1" type="submit" value="Submit review" name="submit-tour-review">
            </form>
        </article>
	</section>
    
     
           
            
           

	
    
</div><!-- End container -->

<!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->


  </body>
</html>