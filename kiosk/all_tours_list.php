<?php
include_once 'inc/config.inc.php';
$sort_order = "id";
if (isset($_GET['sort']) && $_GET['sort'] != "") {
    $sort_order = $_GET['sort'];
}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <?php include_once 'head.php'; ?>
        <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
        <link href="css/skins/square/grey.css" rel="stylesheet">
        <link href="css/pagination.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <!--<body ondragstart="return false;" ondrop="return false;">-->
    	<body>

        <!--[if lte IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
        <![endif]-->

<!--        <div id="preloader">
            <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
            </div>
        </div>-->
        <!-- End Preload -->

<!--        <div class="layer"></div>-->
        <!-- Mobile menu overlay mask -->

        <!-- Header================================================== -->

        <header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->



        <!--<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Singapore tours</h1>
                    <p>We provide Combo packages for Best Day Tours in Singapore and Attractions</p>
                </div>
            </div>
        </section>--><!-- End section -->

        <!--<div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Tours List</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>--><!-- Position -->
        <br><br><br>
        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div><!-- End Map -->

        <div  class="container margin_60">

            <div class="row">
                <aside class="col-lg-3 col-md-3">
                <!--<p>
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
                </p>-->

                    <?php include_once 'sidebar.php'; ?>

                    <div id="filters_col">
                        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
                        <div class="collapse" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Price</h6>
                                <ul>
                                    <li><label><input type="checkbox" id="price_1" onClick="return filter(this.id)" class="price">From $10 to $50</label></li>
                                    <li><label><input type="checkbox" id="price_2" onClick="return filter(this.id)" class="price">From $50 to $80</label></li>
                                    <li><label><input type="checkbox" id="price_3" onClick="return filter(this.id)" class="price">From $80 to $100</label></li>
                                </ul>
                            </div>
                            <div class="filter_type">
                                <h6>Rating</h6>
                                <ul>
                                    <li><label><input type="checkbox" id="rating_1" onClick="return filter(this.id)" class="rate"><span class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                            </span></label></li>
                                    <li><label><input type="checkbox" id="rating_2" onClick="return filter(this.id)" class="rate"><span class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                            </span></label></li>
                                    <li><label><input type="checkbox" id="rating_3" onClick="return filter(this.id)" class="rate"><span class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </span></label></li>
                                    <li><label><input type="checkbox" id="rating_4" onClick="return filter(this.id)" class="rate"><span class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </span></label></li>
                                    <li><label><input type="checkbox" id="rating_5" onClick="return filter(this.id)" class="rate"><span class="rating">
                                                <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </span></label></li>
                                </ul>
                            </div>
                            <div class="filter_type">
                                <h6>Facility</h6>
                                <ul>
                                    <li><label><input type="checkbox" id="facility_1" class="facility" onClick="return filter(this.id)">Museum </label></li>
                                    <li><label><input type="checkbox" id="facility_2" class="facility"  onClick="return filter(this.id)">Adventure</label></li>
                                    <li><label><input type="checkbox" id="facility_3" class="facility"  onClick="return filter(this.id)">Food</label></li>
                                    <li><label><input type="checkbox" id="facility_4" class="facility" onClick="return filter(this.id)">Garden</label></li>
                                </ul>
                            </div>
                        </div> <!-- End collapse -->	
                    </div> <!-- End filters col-->
                    <div class="box_style_2">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://006590886618" class="phone">+65 8161 5060</a>
                        <a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
                        <!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
                    </div>
                </aside><!--End aside -->
                <div class="col-lg-9 col-md-9">
                    <div id="tools">            
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="styled-select-filters">
                                    <select name="sort_price" id="sort_price" onChange="return filter(this.id)">
                                        <option value="" selected>Sort by price</option>
                                        <option value="price_ASC">Lowest price</option>
                                        <option value="price_DESC">Highest price</option>
                                        <option value="ranking_ASC">Lowest ranking</option>
                                        <option value="ranking_DESC">Highest ranking</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <!--             <div class="styled-select-filters">
                                                                                             <select  name="sort_rating" id="sort_rating"  onChange="return filter(this.id)">
                                                                                                     <option value="" selected>Sort by ranking</option>
                                                                                                     <option value="ASC">Lowest ranking</option>
                                                                                                     <option value="DESC">Highest ranking</option>
                                                                                             </select>
                                                             </div>-->
                            </div>            	

                            <div class="col-md-6 col-sm-6 hidden-xs text-right">
                                <a href="#" class="bt_filters"><i class=" icon-list"></i></a>
                            </div>

                        </div>
                    </div><!--/tools -->
                    <div id="data_content">

                        <?php
                        //------------Products with search----------
                        if (isset($_POST['search_submit'])) {
                            $search = '%' . $_POST['search'] . '%';
                            $where = array('is_deleted' => 'N', 'is_active' => 'Y', 'is_feature' => 'Y', 'title' => $search);
                            $rows_data = searchRows(DB_TABLE_PREFIX . 'product', $where, '*', $sort_order, '', '', 'Y', '10');
                            $product_data = $rows_data['data'];
                        } else {
                            //---------All Products on page load---------
                            //$sort_order = 'sort_order ASC';
                            $sort_order = "sort_order = '0', sort_order";
                            $where = array('is_deleted' => 'N', 'is_active' => 'Y');
                            $rows_data = getorderRows(DB_TABLE_PREFIX . 'product', $where, '*', $sort_order, '', '', 'Y', '10');
                            $product_data = $rows_data['data'];
                        }
                        if ($rows_data['total_recs'] > 0) {
                            ?>
                            <?php
                            foreach ($product_data as $product) {
                                extract($product);
                                $image_path = '../img/products/' . $image;
                                if ($image == "" || !file_exists($image_path))
                                    $image_path = '../img/products/noimage.jpeg';
                                
                                $pid = $id;
                                $cat_id = $category_id;
                                $reviews = $rating;
                                if ($feature == 'Popular') {
                                    $Product_feature = 'popular';
                                } elseif ($feature == 'Family') {
                                    $Product_feature = 'family';
                                } elseif ($feature == 'Top Seller') {
                                    $Product_feature = 'top_seller';
                                } elseif ($feature == 'Best Value') {
                                    $Product_feature = 'best_value';
                                } else {
                                    $Product_feature = '';
                                }

                                $long_desc = $long_description;
                                $product_title = stripcslashes(Decode($product['title']));
                                $prod_img = $product['image'];
                                
                                //----------------likes---------------
                                $where_like = array('product_id' => $pid);
                                $rows_data_like = getRows(DB_TABLE_PREFIX . 'likes', $where_like, '*');
                                $product_data_like = $rows_data_like['data'];
                                $totallikes = count($product_data_like);

                                if ($totallikes == 0) {
                                    $like = 'likes';
                                }
                                if ($totallikes == 1) {
                                    $like = 'like';
                                }
                                if ($totallikes > 1) {
                                    $like = 'likes';
                                }
                                
                                ?>


                                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!--<div class="wishlist">
                                                <a id="<?php echo $id; ?>" class="tooltip_flip tooltip-effect-1" onclick="addtowishlist(this.id)">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                            </div>-->  
                                            <div class="img_list" style="cursor:pointer"><a id="i_<?php echo $id; ?>" onclick="return setcart(this.id)"><div class="ribbon <?php echo $Product_feature; ?>" ></div><img src="<?php echo $image_path; ?>" alt="">					<?php
                                                    $where_cat = array('id' => $cat_id);
                                                    $rows_data_cat = getRows(DB_TABLE_PREFIX . 'category', $where_cat, '*');
                                                    $cat_data = $rows_data_cat['data'];
                                                    $category = $cat_data[0];
                                                    ?>
                                                    <div class="short_info"><i class="icon_set_1_icon-4"></i><?php echo $category['title']; ?> </div></a>
                                            </div>
                                        </div>
                                        <div class="clearfix visible-xs-block"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="tour_list_desc">
                                                <?php
                                                $where2 = array('product_id' => $id);
                                                $rows_data2 = getRows(DB_TABLE_PREFIX . 'reviews', $where2, '*');
                                                $product_data2 = $rows_data2['data'];

                                                if ($rows_data2['total_recs'] > 0) {
                                                    $total = 0;
                                                    $total_re_overall = 0;
                                                    foreach ($product_data2 as $product) {
                                                        extract($product);
                                                        $total_re_overall += ($review_overall / 10);
                                                    }
                                                    $totalnum = count($product_data2);
                                                    $re_overall = ($total_re_overall / $totalnum) * 100;
                                                }
                                                ?>  


                                                <?php
                                                if ($reviews > 0 and $reviews != "") {
                                                    ?> 
                                                    <div class="rating">                            
                                                        <?php if ($reviews <= 1.5 and $reviews > 0) { ?> 
                                                            <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                            <?php
                                                        }
                                                        if ($reviews <= 2.5 and $reviews > 1.5) {
                                                            ?>
                                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>(<?php echo $totalnum; ?>)</small>
                                                        <?php } if ($reviews <= 3.5 and $reviews > 2.5) { ?>
                                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>(<?php echo $totalnum; ?>)</small>
                                                        <?php }if ($reviews <= 4.5 and $reviews > 3.5) { ?>
                                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(<?php echo $totalnum; ?>)</small>
                                                        <?php } if ($reviews <= 5 and $reviews > 4.5) { ?>
                                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><small>(<?php echo $totalnum; ?>)</small>
                                                        <?php } ?>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="rating"><i class="icon-smile"></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile"></i><small>(0)</small></div>
                                                <?php } ?>
                                                <h3><strong><?php echo stripcslashes(Decode($title)); ?></strong></h3>
                                                <p> <?php
                                                    $des = stripcslashes(Decode($long_description));
                                                    echo substr($short_description, 0, 100);
                                                    ?></p>
                                                <ul class="add_info">
                                                    <?php   
                                                            $rows_dataschedule = getRows(DB_TABLE_PREFIX . 'schedule_m1', $where2, '*');
                                                            $schedule_data = $rows_dataschedule['data']; 
                                                            if ($schedule_data[0]['product_id'] != "") { ?>
                                                    <li> 
                                                        <div class="tooltip_styled tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                                <?php foreach ($schedule_data as $schedule) {
                                                                      extract($schedule); 
                                                                      if($schedule!=""){ ?> 
                                                                        <?php if($monday!='closed'){
                                                                      
                                                                            ?>
                                                                        <strong>Monday </strong> <?php echo $monday; ?><br>
                                                                        <?php }else{ ?> 
                                                                        <strong>Monday</strong> <span class="label label-danger">Closed</span><br>
                                                                        <?php } ?>
                                                                        
                                                                        <?php if($tuesday!='closed'){?>
                                                                        <strong>Tuesday </strong> <?php echo $tuesday; ?><br>
                                                                        <?php }else{ ?> 
                                                                        <strong>Tuesday</strong> <span class="label label-danger">Closed</span><br>
                                                                        <?php } ?>
                                                                        
                                                                        <?php if($wednesday!='closed'){?>
                                                                        <strong>Wednesday </strong> <?php echo $wednesday; ?><br>
                                                                        <?php }else{ ?> 
                                                                        <strong>Wednesday</strong> <span class="label label-danger">Closed</span><br>
                                                                        <?php } ?>
                                                                        
                                                                        <?php if($thursday!='closed'){?>
                                                                        <strong>Thursday </strong> <?php echo $thursday; ?><br>
                                                                        <?php }else{ ?> 
                                                                        <strong>Thursday</strong> <span class="label label-danger">Closed</span><br>
                                                                        <?php } ?>
                                                                        
                                                                        <?php if($friday!='closed'){?>
                                                                        <strong>Friday </strong> <?php echo $friday; ?><br>
                                                                        <?php }else{ ?> 
                                                                        <strong>Friday</strong> <span class="label label-danger">Closed</span><br>
                                                                        <?php } ?>
                                                                        
                                                                        <?php if($saturday!='closed'){?>
                                                                        <strong>Saturday </strong> <?php echo $saturday; ?><br>
                                                                        <?php }else{ ?> 
                                                                        <strong>Saturday</strong> <span class="label label-danger">Closed</span><br>
                                                                        <?php } ?>
                                                                        
                                                                        <?php if($sunday!='closed'){?>
                                                                        <strong>Sunday </strong> <?php echo $sunday; ?><br>
                                                                        <?php }else{ ?> 
                                                                        <strong>Sunday</strong> <span class="label label-danger">Closed</span><br>
                                                                        <?php } ?>
                                                                
                                                                      <?php }else{
                                                                          echo "No Records Found";
                                                                      }?>
                                                                     <?php }
                                                                      ?>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </li>
                                                            <?php }else{ ?>
                                                    <li>

                                                        <div class="tooltip_styled tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                                <strong></strong> No Records Found<br>                                                               
                                                            </div>
                                                        </div>
                                                    </li>
                                                            <?php } ?>
                                                    <li>
                                                        <div class="tooltip_styled tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                                            <div class="tooltip-content"><h4>Address</h4>
                                                                <?php
                                                                if (isset($address) and $address != '')
                                                                    echo $address;
                                                                else
                                                                    echo "No records found";
                                                                ?><br>
                                                            </div>
                                                        </div>
                                                    </li> 
                                                    <li>
                                                        <div class="tooltip_styled tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                                            <div class="tooltip-content"><h4>Languages</h4>
                                                                <?php
                                                                if (isset($Language) and $Language != '')
                                                                    echo $Language;
                                                                else
                                                                    echo "No records found";
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </li>                            
                                                    <li>
                                                        <div class="tooltip_styled tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                                            <div class="tooltip-content"><h4>Parking</h4>
                                                                <?php
                                                                if (isset($parking) and $parking != '')
                                                                    echo $parking;
                                                                else
                                                                    echo "No records found";
                                                                ?>
                                                                <?php echo $parking; ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="tooltip_styled tooltip-effect-4">
                                                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                                            <div class="tooltip-content"><h4>Transport</h4>                                    	
                                                                <?php if ($transpot_no or transpot_type == '') { ?>
                                                                    <strong> <?php echo $transpot_type; ?>:</strong> <?php echo $transpot_no; ?><br>
                                                                <?php } else { ?>
                                                                    <strong>No records found</strong><br>
                                                                <?php }; ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                        <!--<div class="price_list"><div><sup><?php echo CURRENCY_SYMBOL ?></sup><?php echo (float) $adult_price; ?>*<span class="normal_price_list"></span><small >*Per person</small>-->
                                            <div class="price_list"><div><sup><?php echo CURRENCY_SYMBOL ?></sup><?php if ($promo_adult_price == '0.00') { ?><?php echo (float) $adult_price; ?>*<span class="normal_price_list"></span><small >*Per person</small><?php } else { ?><?php echo (float) $promo_adult_price; ?>*<span class="normal_price_list"><?php echo CURRENCY_SYMBOL ?> <?php echo (float) $adult_price; ?></span><small >*Per person</small><?php } ?>
                                                    <p><a class="btn_1 green booknow" data-toggle="modal" data-target="#myModal<?php echo $pid; ?>">Details</a><!--</p>-->
                                                    <a id="e_<?php echo $pid; ?>" class="btn_1" onclick="return setcart(this.id)" >Book now</a></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!--End strip -->

                                <!---------- MOdal for Long description of product ---------------->
                                <div class="modal fade" id="myModal<?php echo $pid; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border-bottom:none;">
<!--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                                <button id="close_modal" class="btn btn-default" style="float: right;font-size: 14px;padding: 10px;" aria-label="Close" data-dismiss="modal" type="button">Close</button>
                                                <div class="thumb_cart">
                                                    <img class="thum_img" src="img/products/<?php echo $prod_img ?>" alt="">
                                                </div>
                                                <h3 class="modal-title"><?php echo $product_title; ?></h3>
                                            </div>
                                            <hr>
                                            <div id="single_tour_feat" class="prod_features">

                                                <ul class="featured_items">
                                                    <li <?php if ($museum == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-4"></i>Museum</li>
                                                    <li <?php if ($hours != '') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-83"></i><?php echo $product_data['hours']; ?> Hours</li>
                                                    <li <?php if ($accessibiliy == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                                                    <li <?php if ($attraction == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-81"></i>Attraction</li>

                                                    <li <?php if ($pet_allowed == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-users"></i>Family</li>
                                                    <li <?php if ($audio_guide == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-user-pair"></i>Couple</li>
                                                    <li <?php if ($tour_guide == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-ok"></i>Tour guide</li>

                                                    <li <?php if ($wildlife == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-plus-squared-small"></i>Wildlife</li>
                                                    <li <?php if ($park == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-ok"></i>Park</li>
                                                    <li <?php if ($garden == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-garden"></i>Garden</li>
                                                    <li <?php if ($adventure == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-plus-squared-small"></i>Adventure</li>
                                                    <li <?php if ($free_entry == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-ok"></i>Free Entry</li>
                                                    <li <?php if ($nature == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-plus-squared-small"></i>Nature</li>
                                                    <li <?php if ($scenic == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-ok"></i>Scenic</li>
                                                    <li <?php if ($Culture == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-food-1"></i>Culture</li>
                                                    <li <?php if ($food == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-plus-squared-small"></i>Food</li>
                                                    <li <?php if ($relaxing == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-ok"></i>Relaxing</li>
                                                    <li <?php if ($activity == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-plus-squared-small"></i>Activity</li>
                                                    <li <?php if ($one_way_transfer == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-ok"></i>One Way Transfer</li>
                                                    <li <?php if ($two_way_transfer == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-plus-squared-small"></i>Two Way Transfer </li>
                                                    <li <?php if ($free_and_easy == '1') { ?> style="float:left; display:inherit;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-ok"></i>Free And Easy</li>

                                                    <?php if ($_SESSION['Auth_user'] == TRUE) { ?>
                                                      <li style="float:left; display:inherit;"><a style="color:#565a5c;" onClick="return likes(<?php echo $pid; ?>)" class="btn like_btn " id="like_btn<?php echo $pid; ?>"><i class="icon_set_1_icon-18"></a></i></br><span id="like<?php echo $pid; ?>"><?php echo $totallikes; ?></span> <?php echo $like; ?></li>
                                                   <?php } else { ?>
                                                      <li style="float:left; display:inherit;"><a style="color:#565a5c;" href="login.php?pid=<?php echo $pid; ?>" class="btn like_btn " id="like_btn<?php echo $pid; ?>"><i class="icon_set_1_icon-18"></a></i></br><span id="like<?php echo $pid; ?>"><?php echo $totallikes; ?></span> <?php echo $like; ?></li>
                                                   <?php } ?>
                                                                                                    
                                                </ul>
                                            </div>
                                            <div class="modal-body">
                                                <p><?php echo stripcslashes(Decode($long_description)); ?></p>
                                            </div>
                                            <hr>
                                            <br>
                                            <?php
                                            if ($rows_data2['total_recs'] > 0) {

                                                foreach ($product_data2 as $prod) {
                                                    extract($prod);

                                                    //--------------Total Transport Rating calculation-----//
                                                    if ($review_transport >= 1 and $review_transport <= 2) {
                                                        $rating_1 += 1;
                                                    }
                                                    if ($review_transport > 2 and $review_transport <= 4) {
                                                        $rating_2 += 1;
                                                    }
                                                    if ($review_transport > 4 and $review_transport <= 6) {
                                                        $rating_3 += 1;
                                                    }
                                                    if ($review_transport > 6 and $review_transport <= 8) {
                                                        $rating_4 += 1;
                                                    }
                                                    if ($review_transport > 8 and $review_transport <= 10) {
                                                        $rating_5 += 1;
                                                    }
                                                    //--------------Total Money Rating calculation-----//
                                                    if ($review_money >= 1 and $review_money <= 2) {
                                                        $money_rat_1 += 1;
                                                    }
                                                    if ($review_money > 2 and $review_money <= 4) {
                                                        $money_rat_2 += 1;
                                                    }
                                                    if ($review_money > 4 and $review_money <= 6) {
                                                        $money_rat_3 += 1;
                                                    }
                                                    if ($review_money > 6 and $review_money <= 8) {
                                                        $money_rat_4 += 1;
                                                    }
                                                    if ($review_money > 8 and $review_money <= 10) {
                                                        $money_rat_5 += 1;
                                                    }

                                                    //--------------Total Program Accuracy Rating calculation-----//
                                                    if ($review_program_accuracy >= 1 and $review_program_accuracy <= 2) {
                                                        $PA_rat_1 += 1;
                                                    }
                                                    if ($review_program_accuracy > 2 and $review_program_accuracy <= 4) {
                                                        $PA_rat_2 += 1;
                                                    }
                                                    if ($review_program_accuracy > 4 and $review_program_accuracy <= 6) {
                                                        $PA_rat_3 += 1;
                                                    }
                                                    if ($review_program_accuracy > 6 and $review_program_accuracy <= 8) {
                                                        $PA_rat_4 += 1;
                                                    }
                                                    if ($review_program_accuracy > 8 and $review_program_accuracy <= 10) {
                                                        $PA_rat_5 += 1;
                                                    }
                                                    //--------------Total Tour Guide Rating calculation-----//
                                                    if ($review_guide >= 1 and $review_guide <= 2) {
                                                        $guide_rat_1 += 1;
                                                    }
                                                    if ($review_guide > 2 and $review_guide <= 4) {
                                                        $guide_rat_2 += 1;
                                                    }
                                                    if ($review_guide > 4 and $review_guide <= 6) {
                                                        $guide_rat_3 += 1;
                                                    }
                                                    if ($review_guide > 6 and $review_guide <= 8) {
                                                        $guide_rat_4 += 1;
                                                    }
                                                    if ($review_guide > 8 and $review_guide <= 10) {
                                                        $guide_rat_5 += 1;
                                                    }
                                                }

                                                $transport_rating = ($rating_1 + $rating_2 * 2 + $rating_3 * 3 + $rating_4 * 4 + $rating_5 * 5) / $totalnum;
                                                $money_rating = ($money_rat_1 + $money_rat_2 * 2 + $money_rat_3 * 3 + $money_rat_4 * 4 + $money_rat_5 * 5) / $totalnum;
                                                $program_accuracy_rating = ($PA_rat_1 + $PA_rat_2 * 2 + $PA_rat_3 * 3 + $PA_rat_4 * 4 + $PA_rat_5 * 5) / $totalnum;
                                                $guide_rating = ($guide_rat_1 + $guide_rat_2 * 2 + $guide_rat_3 * 3 + $guide_rat_4 * 4 + $guide_rat_5 * 5) / $totalnum;
                                                ?> 

                                                <div class="row show_reviews">
                                                    <div class="col-md-12">
                                                        <h3>Reviews </h3>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div id="general_rating"><?php echo $totalnum; ?> Reviews 
                                                            <div class="rating">
                                                                <?php if ($reviews == 0) { ?> 
                                                                    <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                <?php } if ($reviews > 0 and $reviews <= 1.5) { ?> 
                                                                    <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                <?php } if ($reviews > 1.5 and $reviews <= 2.5) { ?>
                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                <?php } if ($reviews > 2.5 and $reviews <= 3.5) { ?>
                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                <?php } if ($reviews > 3.5 and $reviews <= 4.5) { ?>
                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                                <?php } if ($reviews > 4.5 and $reviews <= 5) { ?>
                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                                <?php } ?>							
                                                            </div>
                                                        </div><!-- End general_rating -->
                                                        <div class="row" id="rating_summary">
                                                            <div class="col-md-6">
                                                                <ul>

                                                                    <li>Transport
                                                                        <div class="rating">
                                                                            <?php if ($transport_rating == 0) { ?> 
                                                                                <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($transport_rating > 0 and $transport_rating <= 1.5) { ?> 
                                                                                <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($transport_rating > 1.5 and $transport_rating <= 2.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($transport_rating > 2.5 and $transport_rating <= 3.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($transport_rating > 3.5 and $transport_rating <= 4.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                                            <?php } if ($transport_rating > 4.5 and $transport_rating <= 5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                                            <?php } ?>	
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul>

                                                                    <li>Money
                                                                        <div class="rating">
                                                                            <?php if ($money_rating == 0) { ?> 
                                                                                <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($money_rating > 0 and $money_rating <= 1.5) { ?> 
                                                                                <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($money_rating > 1.5 and $money_rating <= 2.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($money_rating > 2.5 and $money_rating <= 3.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($money_rating > 3.5 and $money_rating <= 4.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                                            <?php } if ($money_rating > 4.5 and $money_rating <= 5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </li>                               

                                                                </ul>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <ul>
                                                                    <li>Program Accuracy
                                                                        <div class="rating">
                                                                            <?php if ($program_accuracy_rating == 0) { ?> 
                                                                                <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($program_accuracy_rating > 0 and $program_accuracy_rating <= 1.5) { ?> 
                                                                                <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($program_accuracy_rating > 1.5 and $program_accuracy_rating <= 2.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($program_accuracy_rating > 2.5 and $program_accuracy_rating <= 3.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                            <?php } if ($program_accuracy_rating > 3.5 and $program_accuracy_rating <= 4.5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                                            <?php } if ($program_accuracy_rating > 4.5 and $program_accuracy_rating <= 5) { ?>
                                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div><!-- End row -->
                                                        <hr>

                                                        <?php
                                                        $img = array('avatar1.jpg', 'avatar3.jpg', 'avatar2.jpg');
                                                            $i = 0;
                                                            $re = 0;
                                                            $add_class = "";
                                                        foreach ($product_data2 as $rating) {
                                                            extract($rating);
                                                            if($re > 2){
                                                            $re = "style='display:none'";
                                                            $add_class = "SeeMore_".$id;
                                                            $readmore_btn = "<button class='btn SeeMore' id='SeeMore_".$id."' onclick='seemore(this.id)'>See More</button>";
                                                            }else{

                                                            }
                                                   
                                                            ?>
                                                            <div class="review_strip_single <?php echo $add_class;?>" <?php echo $re; ?> id="review_strip_single">
                                                                <?php
                                                                if ($i > 2) {
                                                                    $i = 0;
                                                                }
                                                                ?>
                                                                <img src="img/<?php echo $img[$i]; ?>" alt="" class="img-circle">
                                                                <small><?php echo $date; ?><!--- 10 March 2015 ---></small>
                                                                <h4><?php echo $username; ?></h4>
                                                                <p>
                                                                    <?php
                                                                    if ($likes != '') {
                                                                        echo '"' . $likes . '"<br>';
                                                                    } else {
                                                                        
                                                                    } if ($dislikes != '') {
                                                                        echo '"' . $dislikes . '"<br>';
                                                                    } else {
                                                                        
                                                                    }
                                                                    ?>
                                                                </p>
                                                                <div class="rating">
                                                                    <?php if ($review_overall == 0) { ?> 
                                                                        <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>

                                                                    <?php } if ($review_overall <= 2 and $review_overall > 0) { ?> 
                                                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                        <?php
                                                                    }
                                                                    if ($review_overall <= 4 and $review_overall > 2) {
                                                                        ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                    <?php } if ($review_overall <= 6 and $review_overall > 4) { ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                    <?php }if ($review_overall <= 8 and $review_overall > 6) { ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                                    <?php } if ($review_overall <= 10 and $review_overall > 8) { ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                                    <?php } ?>	

                                                                </div>
                                                            </div><!-- End review strip -->
                                                            <?php
                                                            $i++;
                                                        $re++; } ?>
                                                        <?php echo $readmore_btn; ?>



                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="row show_reviews">
                                                    <div class="col-md-12">
                                                        <h3>Reviews </h3>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div id="general_rating">0 Reviews 
                                                            <div class="rating">                   
                                                                <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>                    						
                                                            </div>
                                                        </div><!-- End general_rating -->
                                                        <div class="row" id="rating_summary">
                                                            <div class="col-md-6">
                                                                <ul>
                                                                    <!--<li>Accommodation
                                                                        <div class="rating">                   
                                                        <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                        </div>
                                                        </li> -->
                                                                    <li>Meals
                                                                        <div class="rating">                   
                                                                            <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>                    						
                                                                        </div>
                                                                    </li>
                                                                    <li>Transport
                                                                        <div class="rating">                   
                                                                            <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>                    						
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul>

                                                                    <li>Money
                                                                        <div class="rating">                   
                                                                            <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>                    						
                                                                        </div>
                                                                    </li> 
                                                                    <li>Program Accuracy
                                                                        <div class="rating">                   
                                                                            <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>                    						
                                                                        </div>
                                                                    </li>                              

                                                                </ul>
                                                            </div>



                                                        </div><!-- End row -->                    				
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="modal-footer">
                                                <!--<a href="single_tour.php?id=<?php echo $pid; ?>" class="btn_1" >View product reviews</a>-->
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!----------------- End Modal ------------------------------------->				

                                <?php
                            }
                        } else {
                            echo 'No Records Found';
                        }
                        ?>


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
                    </div>
                </div><!-- End col lg-9 -->
            </div><!-- End row -->
        </div><!-- End container -->

        <!-- Start footer -->
        <?php include_once 'footer.php'; ?>
        <!-- End footer -->

        <!-- Specific scripts -->
        <!-- Cat nav mobile -->
        <script  src="<?= site_url('js/cat_nav_mobile.js') ?>"></script>
        <script>$('#cat_nav').mobileMenu();</script>
        <!-- Check and radio inputs -->
        <script src="js/icheck.js"></script>
        <script>
                                                        //$('input').iCheck({
                                                        // checkboxClass: 'icheckbox_square-grey',
                                                        // radioClass: 'iradio_square-grey'
                                                        // });
        </script>
        <script>
            function addtowishlist(id)
            {
                $.ajax({
                    method: "POST",
                    url: "addtowishlist.php",
                    data: {pid: id},
                    beforeSend: function (msg) {
                        //$("#progress").show(); 
                    }
                })
                        .done(function (responce) {

                            if (responce)
                            {
                                if (responce == "success")
                                {
                                    window.location.replace("wishlist.php");
                                    return false;
                                }
                                else
                                {
                                    alert(responce);
                                }
                            }

                        });

            }

            function setcart(id)
            {
                var pid = id.split("_");
                id = pid[1];

                $.ajax({
                    method: "POST",
                    url: "set_cart.php",
                    data: {prodid: id},
                    beforeSend: function (msg) {
                        $("#progress").show();
                    }
                })
                        .done(function (responce) {

                            if (responce)
                            {
                                if (responce != "success")
                                {
                                    alert("Error: please try again");
                                    return false;
                                }
                                else
                                {
                                    window.location.replace("cart.php?prodid=" + id);
                                }
                            }

                        });

            }
            function filter(id)
            {
                var price = 0;
                var rating = 0;
                var facility = 0;

                var sort_price = $("#sort_price").val();
                var sort_rating = $("#sort_rating").val();

                var path = window.location.pathname;
                var url = path.split("/").pop();

                if ($('#' + id).is(':checked')) {
                    price = $('.price:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    rating = $('.rate:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    facility = $('.facility:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    console.log('price:' + price);
                    //console.log('rating:'+rating);
                }
                else
                {
                    price = $('.price:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    rating = $('.rate:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    facility = $('.facility:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    //console.log(price);console.log('rating:'+rating);
                }
                $.ajax({
                    method: "POST",
                    url: "filter.php",
                    //            data: {url:url,price:price,rating:rating,facility:facility},
                    data: {sort_price: sort_price, sort_rating: sort_rating, url: url, price: price, rating: rating, facility: facility},
                    beforeSend: function (msg) {
                        //$("#progress").show(); 
                    }
                })
                        .done(function (responce) {

                            if (responce)
                            {

                                console.log(responce);
                                $("#data_content").html(responce);
                                return false;

                            }

                        });
            }
            function getIndex(id)
            {
                var path = window.location.pathname;
                var url = path.split("/").pop();

                var sort_price = $("#sort_price").val();
                var sort_rating = $("#sort_rating").val();

                if ($('#' + id).is(':checked')) {
                    price = $('.price:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    rating = $('.rate:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    facility = $('.facility:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    console.log('price:' + price);
                    //console.log('rating:'+rating);
                }
                else
                {
                    price = $('.price:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    rating = $('.rate:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    facility = $('.facility:checked').map(function () {
                        return this.id;
                    }).get().join(',')
                    //console.log(price);console.log('rating:'+rating);
                }
                $.ajax({
                    method: "POST",
                    url: "filter.php",
                    data: {sort_price: sort_price, sort_rating: sort_rating, url: url, page: id, price: price, rating: rating, facility: facility},
                    beforeSend: function (msg) {
                        //$("#progress").show(); 
                    }
                })
                        .done(function (responce) {

                            if (responce)
                            {

                                console.log(responce);
                                $("#data_content").html(responce);
                                return false;

                            }

                        });
                //alert(id);
            }

function seemore(id){
     $("."+id).toggle();
        var btntext = $("#SeeMore").text();
		if(btntext=="See More"){
			$(".SeeMore").text('See Less');			
		} else {
			$(".SeeMore").text('See More');
		}
 }

        </script>
        <!-- Map -->
        <?php include_once 'footer_map_script.php'; ?>

    </body>
</html>