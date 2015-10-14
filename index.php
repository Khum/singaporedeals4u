<?php
//2nd change
include_once 'inc/config.inc.php';
$sort_order = "id";
if (isset($_GET['sort']) && $_GET['sort'] != "") {
    $sort_order = $_GET['sort'];
}
unset($_SESSION['book']);
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
    <!--<![endif]-->

    <head>
	
	<?php include_once 'head.php'; ?>
        <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
        <meta name="keywords" content="Singapore Day Tours, Singapore Attractions, Singapore Best Tours, Singapore Island Tours, Singapore City Tours, Singapore Private Tours, Singapore Family Tours, Singapore Adventure Tours, Singapore Couple Tours, Singapore Nature Tours">
	<meta name="description" content="We brings best Travel deals for Singapore. We have Singapore best Day Tours & Attractions, short stay in Singapore. Our Professional can provide the best advice to visitors.">
        <meta name="msvalidate.01" content="A445C4D697B23036D054D7B59D676044" />
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

        <!-- Slider -->
<!--        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                     SLIDE  
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                         MAIN IMAGE 
                        <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                         LAYER NR. 1 
                        <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Affordable Singapore Tours
                        </div>
                         LAYER NR. 2 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                                Singapore Tours / Tour Tickets / Tour Guides</div>
                        </div>
                         LAYER NR. 3 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tours_list.php' class="button_intro">View tours</a> <a href='#' class=" button_intro outline">Read more</a>
                        </div>
                    </li>
                     SLIDE  
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                         MAIN IMAGE 
                        <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                         LAYER NR. 1 
                        <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">More than 100 tours available
                        </div>
                         LAYER NR. 2 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                                Historic Buildings / Open Bus Tours / Museums Guides</div>
                        </div>
                         LAYER NR. 3 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tours_list.php' class="button_intro">View tours</a> <a href='#' class=" button_intro outline">Read more</a>
                        </div>
                    </li>

                     SLIDE  
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                         MAIN IMAGE 
                        <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_6.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                         LAYER NR. 1 
                        <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Discover fantastic places
                        </div>
                         LAYER NR. 2 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                                We offer a variety of services and options</div>
                        </div>
                         LAYER NR. 3 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tours_list.php' class="button_intro">View tours</a> <a href='#' class=" button_intro outline">Read more</a>
                        </div>
                    </li>

                     SLIDE  
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                         MAIN IMAGE 
                        <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide_5.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                         LAYER NR. 1 
                        <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Singapore Tours provides tour guides
                        </div>
                         LAYER NR. 2 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            <div style="color:#ffffff; font-size:16px; text-transform:uppercase">
                                Visit museum with a dedicated tour guide</div>
                        </div>
                         LAYER NR. 3 
                        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='all_tours_list.php' class="button_intro">View tours</a> <a href='#' class=" button_intro outline">Read more</a>
                        </div>
                    </li>


                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>-->
        <!-- End Slider -->
        
        <div class="container margin_60 margin_div">

            <div class="main_title">
                <h2>Singapore <span>Top</span> Tours</h2>
                <p>We provide Combo packages for Best Day Tours in Singapore and Attractions</p>
            </div>
                <?php
                //$sort_order = 'sort_order ASC';
                $sort_order = "sort_order = '0', sort_order";
                $where = array('is_deleted' => 'N', 'is_active' => 'Y', 'is_feature' => 'Y');
                $rows_data = getorderRows(DB_TABLE_PREFIX . 'product', $where, '*', $sort_order, '', '', 'Y', '9');
                $product_data = $rows_data['data'];
                if ($rows_data['total_recs'] > 0) {
                    ?>
                <div class="row">

                    <?php
                    foreach ($product_data as $product) {
                        extract($product);
                        $image_path = 'img/products/' . $image;
                        if ($image == "" || !file_exists($image_path))
                            $image_path = 'img/products/noimage.jpeg';
                        $p_adult_price = $adult_price;
                        $p_promo_adult_price = $promo_adult_price;
                        $prod_reviews = $rating;

                        $product_title = stripcslashes(Decode($product['title']));
                        $prod_img = $product['image'];

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

                        if ($title == "Universal Studio Singapore" || $title == "S.E.A Aquarium") {
                            $desc_length = 200;
                        } else {
                            $desc_length = 115;
                        }
                        $truncated_longdesc = stripcslashes(Decode($long_description));
                        $short_desc = substr($truncated_longdesc, 0, $desc_length);

                        //if(intval($p_promo_adult_price) != 0)
                        //{
                        //$p_adult_price = $p_promo_adult_price;  
                        //}

                        $wid = $id;
                        $cat_id = $category_id;
                        $where_cat = array('id' => $cat_id);
                        $rows_data_cat = getRows(DB_TABLE_PREFIX . 'category', $where_cat, '*');
                        $cat_data = $rows_data_cat['data'];
                        $category = $cat_data[0];

                        //----------------likes---------------
                        $where_like = array('product_id' => $wid);
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
                        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="tour_container">
                                <div class="img_container">
                                    <a id="i_<?php echo $wid; ?>" onclick="return setcart(this.id)" style="cursor:pointer" >
                                        <img src="<?php echo $image_path; ?>" class="img-responsive product-img" alt="">
                                        <div class="ribbon <?php echo $Product_feature; ?>"></div>
                                        <div class="short_info">
                                            <!--<i class="icon_set_1_icon-44"></i><?php echo $category['title']; ?><span class="price"><sup><?php echo CURRENCY_SYMBOL ?></sup><?php echo (float) $p_adult_price; ?></span>-->
                                            <i class="icon_set_1_icon-44"></i><?php echo $category['title']; ?>
                                        <?php if ($p_promo_adult_price == '0.00') { ?>
                                                <span class="price"><sup><?php echo CURRENCY_SYMBOL ?></sup><?php echo (float) $p_adult_price; ?></span>
                                        <?php } else { ?>
                                                <span class="price"><sup><?php echo CURRENCY_SYMBOL ?></sup><?php echo (float) $p_promo_adult_price; ?></span>
                                                <span class="orignal-price"><?php echo CURRENCY_SYMBOL ?> <?php echo (float) $p_adult_price; ?></span>
                                        <?php } ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="tour_title">
                                    <h3><strong><?php echo stripcslashes(Decode($title)); ?></strong></h3>

                                    <div class="rating">
                                        <?php
                                        $where2 = array('product_id' => $id);
                                        $rows_data2 = getRows(DB_TABLE_PREFIX . 'reviews', $where2, '*');
                                        $product_data2 = $rows_data2['data'];


//                                if ($rows_data2['total_recs'] > 0) {
//                                $total= 0;	
//                                $total_re_overall=0;		
//                                foreach ($product_data2 as $product) {
//                                extract($product);	
//                                $total_re_overall += ($review_overall/10);
//                                }
                                        $totalnum = count($product_data2);
//                                $re_overall = ($total_re_overall/$totalnum)*100;
            ?> 	
                                    <?php
                                    if ($prod_reviews > 0) {
                                    ?>

                                    <?php if ($prod_reviews > 0 and $prod_reviews <= 1.5) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>(<?php echo $totalnum; ?>)</small>
                                    <?php
                                    }
                                    if ($prod_reviews > 1.5 and $prod_reviews <= 2.5) {
                                        ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>(<?php echo $totalnum; ?>)</small>
                                    <?php } if ($prod_reviews > 2.5 and $prod_reviews <= 3.5) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>(<?php echo $totalnum; ?>)</small>
                                    <?php }if ($prod_reviews > 3.5 and $prod_reviews <= 4.5) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(<?php echo $totalnum; ?>)</small>
                                    <?php } if ($prod_reviews > 4.5 and $prod_reviews <= 5) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><small>(<?php echo $totalnum; ?>)</small>
                                    <?php } ?>

                                    <?php } else { ?>
                                        <i class="icon-smile"></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile"></i><small>(0)</small>
                                    <?php } ?>
                                    </div><!-- end rating -->
                                    <div class="wishlist">
                                        <a id = "<?php echo $wid; ?>" class="tooltip_flip tooltip-effect-1" onclick="addtowishlist(this.id)">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                    </div><!-- End wish list-->
                                    <!--<div class="long-des"> <?php echo $short_desc . "...."; ?></div>--><br>
                                    <div style="text-align:center">
                                        <a class="btn_1 green"  data-toggle="modal" data-target="#myModal<?php echo $wid; ?>" style="min-width:115px !important; padding:7px 10px;">Details</a>
                                        <a id="e_<?php echo $wid; ?>" class="btn_1" onclick="return setcart(this.id)" >Book now</a>
                                        <input type="hidden" id ="pid" value="<?php //echo $wid; ?>" >
                                    </div>

                                </div>
                            </div><!-- End box tour -->
                        </div><!-- End col-md-4 -->

                        <div class="modal fade" id="myModal<?php echo $wid; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="border-bottom:none;">
<!--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
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
                                                <li style="float:left; display:inherit;"><a style="color:#565a5c;" onClick="return likes(<?php echo $wid; ?>)" class="btn like_btn " id="like_btn<?php echo $wid; ?>"><i class="icon_set_1_icon-18"></a></i></br><span id="like<?php echo $wid; ?>"><?php echo $totallikes; ?></span> <?php echo $like; ?></li>
                                            <?php } else { ?>
                                                        <li style="float:left; display:inherit;"><a style="color:#565a5c;" href="login.php?pid=<?php echo $wid; ?>" class="btn like_btn " id="like_btn<?php echo $wid; ?>"><i class="icon_set_1_icon-18"></a></i></br><span id="like<?php echo $wid; ?>"><?php echo $totallikes; ?></span> <?php echo $like; ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo $truncated_longdesc; ?></p>
                                    </div>

                                    <hr>
                                    <br>
                                    
                                    <?php
        if ($rows_data2['total_recs'] > 0) {
             $totalnum = count($product_data2);
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
                                                            <?php   if ($prod_reviews == 0) { ?> 
                                                                        <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                            <?php } if ($prod_reviews > 0 and $prod_reviews <= 1.5) { ?> 
                                                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                            <?php } if ($prod_reviews > 1.5 and $prod_reviews <= 2.5) { ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                            <?php } if ($prod_reviews > 2.5 and $prod_reviews <= 3.5) { ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                            <?php } if ($prod_reviews > 3.5 and $prod_reviews <= 4.5) { ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                            <?php } if ($prod_reviews > 4.5 and $prod_reviews <= 5 ) { ?>
                                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                            <?php } ?>							
                                                        </div>
                                                    </div><!-- End general_rating -->
                                                    <div class="row" id="rating_summary">
                                                        <div class="col-md-6">
                                                            <ul>

                                                                <li>Transport
                                                                    <div class="rating">
                                                                        <?php   if ($transport_rating == 0) { ?> 
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
                                                                        <?php   if ($money_rating == 0) { ?> 
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
                                                                       <?php   if ($program_accuracy_rating == 0) { ?> 
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
                                                        <div class="col-md-6">
                                                            <ul>

                                                                <li>Tour Guide
                                                                    <div class="rating">
                                                                        <?php   if ($guide_rating== 0) { ?> 
                                                                                    <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                        <?php } if ($guide_rating> 0 and $guide_rating<= 1.5) { ?> 
                                                                                    <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                        <?php } if ($guide_rating> 1.5 and $guide_rating<= 2.5) { ?>
                                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                        <?php } if ($guide_rating> 2.5 and $guide_rating<= 3.5) { ?>
                                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                                        <?php } if ($guide_rating> 3.5 and $guide_rating<= 4.5) { ?>
                                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                                        <?php } if ($guide_rating> 4.5 and $guide_rating<= 5) { ?>
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
                <?php $i++;  $re++; } ?>
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

        <!---<a href="single_tour.php?id=<?php echo $wid; ?>" class="btn_1" >View product reviews</a>-->

                    <?php if ($_SESSION['Auth_user'] == TRUE) { ?>
                                            <a class="btn_1" href="rating.php?id=<?php echo $wid; ?>?prod=<?php echo $product_title; ?>">Leave a Review</a>
        <?php } else { ?>
                                            <a class="btn_1" href="login.php">Leave a Review</a>
                    <?php } ?> 	

                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!----------------- End Modal ------------------------------------->

                        <?php
                    }
                    ?>
                </div><!-- End row -->
<?php } ?>


                    <?php
                    /* $where66 = array('is_deleted' => 'N', 'is_active' => 'Y'); 
                      $rows_data6 = getRows(DB_TABLE_PREFIX . 'product', $where66, '*');
                      $schedule_M4_data = $rows_data6['data'];
                      $schedule_M4 = $schedule_M4_data[0];
                      $totalp= count($schedule_M4); */

                    $sql = 'SELECT count(*) as total FROM product WHERE is_active="Y" AND is_deleted="N"';
                    $retval2 = mysql_query($sql);
                    $totalrow = mysql_fetch_assoc($retval2);
                    $totalp = $totalrow['total'];
                    ?>
            <p class="text-center add_bottom_30">
                <a href="all_tours_list.php" class="btn_1 medium"><i class="icon-eye-7"></i>View all tours (<?php echo $totalp; ?>) </a>
            </p>
                    <?php ?>


        </div><!-- End container -->

        <div class="white_bg">
            <div class="container margin_60">
                    <?php
                    $sort_order1 = "sort_order = '0', sort_order";
                    $where1 = array('is_deleted' => 'N', 'is_active' => 'Y');
                    $rows_data1 = getRows(DB_TABLE_PREFIX . 'product', $where1, '*', $sort_order1, '', '', 'Y', '18');
                    $product_data1 = $rows_data1['data'];
                    if ($rows_data1['total_recs'] > 0) {
                        ?>
                    <div class="main_title">
                        <h2>Other <span>Popular</span> tours</h2>
                        <p></p>
                    </div>
                    <div class="row add_bottom_45">
                    <?php
                    foreach ($product_data1 as $popular_feature) {
                        extract($popular_feature);
                        $pf_id = $id;
                        $pf_title = stripcslashes(Decode($title));
                        $pf_adult_price = $adult_price;
                        $pf_promo_adult_price = $promo_adult_price;
                        //if (intval($pf_promo_adult_price) != 0) {
                            //$pf_adult_price = $pf_promo_adult_price;
                        //}
                        $pf_image = $image;
                        $image_path_pf = 'img/products/' . $pf_image;
                        if ($pf_image == "" || !file_exists($image_path_pf))
                            $image_path_pf = 'img/products/noimage.jpeg';
                        ?>
                            <div class="col-md-4 other_tours">
                                <ul>
                                    <li style="cursor:pointer"><a id="p_<?php echo $pf_id; ?>" onclick="return setcart(this.id)"><img src="<?php echo $image_path_pf; ?>" class="popular_feature"><?php echo $pf_title; ?><span class="other_tours_price"><?php echo CURRENCY_SYMBOL ?><?php echo (float) $pf_adult_price; ?></span></a>
                                    </li>

                                </ul>
                            </div>
                    <?php } ?>               
                    </div><!-- End row -->
                <?php } ?>
                <?php
                $query = "SELECT * FROM product where is_deleted='N' and is_active='Y' and adult_price>'0.00' ORDER BY RAND() LIMIT 1";
                if ($query_run = Query($query)) {
                    $i = 4;

                    while ($rows = mysql_fetch_assoc($query_run)) {
                        $r_adult_price = $rows['adult_price'];
                        $r_promo_adult_price = $rows['promo_adult_price'];
                        if (intval($r_promo_adult_price) != 0) {
                            $r_adult_price = $r_promo_adult_price;
                        }
                        $p_title = stripcslashes(Decode($rows['title']));
                        ?>	

                        <div class="banner colored">
                        
                            <h4>Discover our Top tours <span>from <?php echo CURRENCY_SYMBOL ?> <?php echo (float) $r_adult_price; ?></span></h4>
                            <p>
                                <?php echo substr($rows['short_description'], 0, 200); ?>
                            </p>
                            <a href="<?= site_url('single_tour.php') ?>?id=<?php echo $rows['id']; ?>?prod=<?php echo $p_title; ?>" class="btn_1 white">Read More</a>
                        </div>
                            <?php }
                        } ?>

                        <?php
                        $category_where = array('is_deleted' => 'N', 'is_active' => 'Y');

                        $category_rows_data = getRows(DB_TABLE_PREFIX . 'category', $category_where, "*", 'sort_order', '', '', 'Y', '4');

                        $category_data = $category_rows_data['data'];

                        if ($category_rows_data['total_recs'] > 0) {
                            ?>  
                    <div class="row">
                        <?php foreach ($category_data as $category) {
                            ?>
                            <div class="col-md-3 col-sm-6 text-center">
                        <?php
                        $query2 = "SELECT * FROM product where category_id='" . $category['id'] . "' ORDER BY RAND() LIMIT 1";
                        if ($query_run2 = Query($query2)) {
                            $i = 4;
                            while ($rows2 = mysql_fetch_assoc($query_run2)) {
                                $image_path2 = 'img/products/' . $rows2['image'];
                                if ($rows2['image'] == "" || !file_exists($image_path2))
                                    $image_path2 = 'img/products/product_94.jpg';
                                ?>
                                        <p>
                                            <a href="<?= site_url('categorywise_tours_list.php'); ?>?id=<?php echo $category['id']; ?>"><img src="<?php echo $image_path2; ?>" alt="Pic" class="img-responsive cat_img"></a>
                                        </p>
            <?php }
        } ?>
                                <h4><span><?php echo $category['title']; ?></span> booking</h4>
                                <p>

        <?php echo substr($category['description'], 0, 100); ?>
                                </p>
                            </div>
    <?php } ?>               
                    </div>
<?php } ?>
                <!-- End row -->
            </div><!-- End container -->
        </div><!-- End white_bg -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1 magnific">
                <div>
                    <h3>BELONG ANYWHERE</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                    </p>
                    <a href="https://www.youtube.com/watch?v=fovoCT7VqgQ" class="video"><i class="icon-play-circled2-1"></i></a>
                </div>
            </div>
        </section><!-- End section -->

        <div class="container margin_60">

            <div class="main_title">
                <h2>Some <span>good</span> reasons</h2>
                <p>
                    Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                </p>
            </div>

            <div class="row">

                <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-41"></i>
                        <h3><span>+120</span> Premium tours</h3>
                        <p>	
<?php $Premium = "We provide a wide variety of activities in Singapore that are suitable for tourists visiting to Singapore . There is something for everyone. Day Tours, Attraction Tickets and many more.";
echo substr($Premium, 0, 120);
?>
                        </p>
                        <a href="<?= site_url('about.php') ?>" class="btn_1 outline">Read more</a>
                    </div>
                </div>

                <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-13"></i>
                        <h3><span>Accessibility </span> Management</h3>
                        <p> 
<?php $Premium = "We can arrange Special Tours for your special needs. Life is short and there should be no regrets. Dont feel restricted due to limitation. Come and see what Singapore has to offer.";
echo substr($Premium, 0, 120);
?>
                        </p>
                        <a href="<?= site_url('about.php') ?>" class="btn_1 outline">Read more</a>
                    </div>
                </div>

                <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-57"></i>
                        <h3><span>H24 </span> Support</h3>
                        <p> 
<?php $Premium = "We are available round the clock to reply to your inquiries and provide non obligatory consultation on what to do and what not to do in Singapore. We also have facility to deliver tickets to all major hotels in Singapore 24 by 7

No Cancellation Charges [Change the Text 10 Languages Available to No Cancellation [In Red] Charges [In Black]
Its always OK to change your mind. Just inform us about it. We offer free cancellation until 04 hours before the service delivery time. Point to note is that Free Cancellation only apply to purchase of Attraction Tickets.";
echo substr($Premium, 0, 120);
?>
                        </p>
                        <a href="<?= site_url('about.php') ?>" class="btn_1 outline">Read more</a>
                    </div>
                </div>

            </div><!--End row -->

            <hr>

            <div class="row">
                <div class="col-md-8 col-sm-6 hidden-xs">
                    <img src="img/laptop.jpg" alt="Laptop" class="img-responsive laptop">
                </div>


                <div class="col-md-4 col-sm-6">
                    <h3><span>Get started</span> with Singapore Deals4u</h3>
                    <p>
                        Singapore Deals 4U focus on providing Day Tours & Attraction tickets at discounted price. We have a wide variety of Singapore Tours and Activities. With flexible working hours, you can contact us any time. We have the option of Free Ticket delivery to your hotel also. With flexible payment options like 'Pay on Spot', our deals are simply the best in town. So start booking now !!
                    </p>
                    <ul class="list_order">
                        <li><span>1</span>Select your preferred tours</li>
                        <li><span>2</span>Purchase tickets and options</li>
                        <li><span>3</span>Pick them directly from your office</li>
                    </ul>
                    <p>*Free Ticket delivery to your hotel 08:00am | 12:00pm | 06:30pm | 11:30pm</p>
                    <a href="all_tours_list.php" class="btn_1">Start now</a>
                </div>
            </div><!-- End row -->

        </div><!-- End container -->

        <!-- Start footer -->
<?php include_once 'footer.php'; ?>
        <!-- End footer -->


        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<?php include_once 'footer_slider_rev.php'; ?>


    </body>
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
            //var id = $("#pid").val(); 
            var pid = id.split("_");
            newid = pid[1];
            console.log(newid)
            $.ajax({
                method: "POST",
                url: "set_cart.php",
                data: {prodid: newid},
                beforeSend: function (msg) {
                    //$("#progress").show(); 
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
                                window.location.replace("cart.php?prodid=" + newid);
                            }
                        }

                    });

        }
        function likes(id)
        { //alert(id);
            $.ajax({
                method: "POST",
                url: "process_like.php",
                data: {id: id},
                beforeSend: function (msg) {
                    //$("#progress").show(); 
                }
            })
                    .done(function (responce) {

                        if (responce)
                        {
                            if (responce == 'exist') {
                                alert('already liked.');
                            } else {
                                $("#like_btn" + id).attr("disabled", "disabled");
                                $("#like" + id).html(responce);
                                $("#like_btn" + id).addClass("color_btn");
                            }

                        }
                        else
                        {

                            //$("#progress").hide();
                            //$("#failure").show();
                        }

                    });
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



</html>