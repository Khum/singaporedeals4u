<?php
include_once 'inc/config.inc.php';
$sort_order = "id";
if(isset($_GET['sort']) && $_GET['sort'] != ""){
    $sort_order = $_GET['sort'];
	echo $sort_order;
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
 	<?php include_once 'header.php'; ?><!-- End Header -->

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Paris tours</h1>
        <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div><!-- Position -->
    
<div class="collapse" id="collapseMap">
	<div id="map" class="map"></div>
</div><!-- End Map -->

<div class="container margin_60">
	<div class="row">
		<aside class="col-lg-3 col-md-3">
		<p>
			<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
		</p>
        
		<?php include_once 'sidebar.php'; ?>
        
		<div id="filters_col">
			<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
			<div class="collapse" id="collapseFilters">
				<div class="filter_type">
					<h6>Price</h6>
					<ul>
						<li><label><input type="checkbox" checked>From $10 to $50</label></li>
						<li><label><input type="checkbox">From $50 to $80</label></li>
						<li><label><input type="checkbox">From $80 to $100</label></li>
					</ul>
				</div>
				<div class="filter_type">
					<h6>Rating</h6>
					<ul>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
					</ul>
				</div>
				<div class="filter_type">
					<h6>Facility</h6>
					<ul>
						<li><label><input type="checkbox">Pet allowed</label></li>
						<li><label><input type="checkbox">Groups allowed</label></li>
						<li><label><input type="checkbox">Tour guides</label></li>
						<li><label><input type="checkbox">Access for disabled</label></li>
					</ul>
				</div>
			</div><!--End collapse -->
		</div><!--End filters col-->
		<div class="box_style_2">
			<i class="icon_set_1_icon-57"></i>
			<h4>Need <span>Help?</span></h4>
			<a href="tel://004542344599" class="phone">+45 423 445 99</a>
			<small>Monday to Friday 9.00am - 7.30pm</small>
		</div>
		</aside><!--End aside -->
        
		<div class="col-lg-9 col-md-8">
        
			<div id="tools">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select-filters">
							<select name="sort_price" id="sort_price">
								<option value="" selected>Sort by price</option>
								<option value="lower">Lowest price</option>
								<option value="higher">Highest price</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select-filters">
							<select name="sort_rating" id="sort_rating">
								<option value="" selected>Sort by ranking</option>
								<option value="lower">Lowest ranking</option>
								<option value="higher">Highest ranking</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 hidden-xs text-right">
						<a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_tours_list.php" class="bt_filters"><i class=" icon-list"></i></a>
					</div>
				</div>
			</div><!--End tools -->
            
			<div class="row">
            <?php
					$where = array('is_deleted' => 'N', 'is_active' => 'Y', 'is_feature' => 'Y');
					$rows_data = getRows(DB_TABLE_PREFIX . 'product', $where, '*', $sort_order, '', '', 'Y', '8');
					$product_data = $rows_data['data'];
					if ($rows_data['total_recs'] > 0) {
						
				?>
                <?php
				
					foreach ($product_data as $product) {
					extract($product);
					$image_path = 'img/products/' . $image;
					if ($image == "" || !file_exists($image_path))
						$image_path = 'img/products/noimage.jpeg';
				?>   
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.php">
							<img src="<?php echo $image_path; ?>" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon top_rated"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup><?php echo CURRENCY_SYMBOL ?></sup><?php echo (float)$adult_price; ?></span>
                                
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong><?php echo $title; ?></strong> tour</h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
				<a id="<?php echo $id; ?>" class="tooltip_flip tooltip-effect-1" onclick="addtowishlist(this.id)">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                <?php } }?>
                
				
                </div><!-- End row -->
            <hr>
                
				<div class="text-center">
					<?php
					if ($rows_data['nav_links'] != '') {
						?>    
												
                    <ul class="pagination-custom list-unstyled list-inline">
                       <?php echo $rows_data['nav_links']; ?>
                    </ul>
                    <?php
					}
                 ?>
				</div><!-- end pagination-->
                
		</div><!-- End col lg 9 -->
	</div><!-- End row -->
</div><!-- End container -->
    
<!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->

<!-- Specific scripts -->
<!-- Cat nav mobile -->
<script  src="<?=site_url('js/cat_nav_mobile.js');?>"></script>
<script>$('#cat_nav').mobileMenu();</script>
<!-- Check and radio inputs -->
<script src="<?=site_url('js/icheck.js');?>"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 function addtowishlist(id)
{
	$.ajax({
	    method: "POST",
	    url: "addtowishlist.php",
	    data: {pid:id },
	    beforeSend: function( msg ) {
	        //$("#progress").show(); 
	    }
	  })
	.done(function( responce ) {
	
	if(responce)
	{
	    if(responce=="success")
	    {
	        window.location.replace("wishlist.php");
	        return false;
	    }
	}
        
    });
    
}
 
 </script>
 <!-- Map -->
 <?php include_once 'footer_map_script.php'; ?>

  </body>
</html>