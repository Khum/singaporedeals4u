<?php
include_once 'inc/config.inc.php';
$id = $_GET['id'];
$pro_id = $_GET['id'];
/* echo $id;
  $id2 = explode('=',$id);
  echo $id2;
  $url = "p=".$id;
  $res = urlencode($url); */
unset($_SESSION['book']);
header('content-type:text/html;charset=utf8');


//----------------products------------
$where = array('product.is_deleted' => 'N', 'product.is_active' => 'Y', 'product.id' => $id);
$rows_data = getRows(DB_TABLE_PREFIX . 'product', $where, 'product.*,category.title AS category,category.slug AS category_slug', '', 'LEFT JOIN category ON category.id = product.category_id');

if ($rows_data['total_recs'] == 0) {
    enqueueMsg("Invalid product", "error", "product.php");
}
$product_data_tmp = $rows_data['data'];
$product_data = $product_data_tmp[0];
$ptitle = stripcslashes(Decode($product_data['title']));
$p_adult_price = $product_data['adult_price'];
$p_promo_adult_price = $product_data['promo_adult_price'];
$prod_reviews = $product_data['rating'];
//if(intval($p_promo_adult_price) != 0)
// {
//    $p_adult_price = $p_promo_adult_price;  
// }
//----------------likes---------------
$where_like = array('product_id' => $pro_id);
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
//----------------rating------------
$where2 = array('product_id' => $id);
$rows_data2 = getRows(DB_TABLE_PREFIX . 'reviews', $where2, '*');
$product_data2 = $rows_data2['data'];
$totalnum1 = count($product_data2);
//----------------schedule------------
$rows_data3 = getRows(DB_TABLE_PREFIX . 'schedule_m1', $where2, '*');
$schedule_M1_data = $rows_data3['data'];
$schedule_M1 = $schedule_M1_data[0];

$rows_data4 = getRows(DB_TABLE_PREFIX . 'schedule_m2', $where2, '*');
$schedule_M2_data = $rows_data4['data'];
$schedule_M2 = $schedule_M2_data[0];

$rows_data5 = getRows(DB_TABLE_PREFIX . 'schedule_m3', $where2, '*');
$schedule_M3_data = $rows_data5['data'];
$schedule_M3 = $schedule_M3_data[0];

$rows_data6 = getRows(DB_TABLE_PREFIX . 'schedule_m4', $where2, '*');
$schedule_M4_data = $rows_data6['data'];
$schedule_M4 = $schedule_M4_data[0];
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <?php include_once 'head.php'; ?>
        <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
        <link rel="stylesheet" href="css/date_time_picker.css">
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

        <header id="plain" ><?php include_once 'header.php'; ?></header><!-- End Header -->

<!--        <section class="parallax-window" data-parallax="scroll" data-image-src="img/single_tour_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h1><?php //echo stripcslashes(Decode($product_data['title'])); ?></h1>
                            <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>

                            <?php
                            //if (isset($prod_reviews) and $prod_reviews > 0) {
                                ?>            
                                <span class="rating">

                                    <?php //if ($prod_reviews > 0 and $prod_reviews <= 1.5) { ?> 
                                        <i class="icon-smile voted"></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile"></i>
                                    <?php//
                                   // }
                                   // if ($prod_reviews > 1.5 and $prod_reviews <= 2.5) {
                                        ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile"></i>
                                    <?php// } if ($prod_reviews > 2.5 and $prod_reviews <= 3.5) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile "></i><i class="icon-smile"></i>
                                    <?php //}if ($prod_reviews > 3.5 and $prod_reviews <= 4.5) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                    <?php //} if ($prod_reviews > 4.5 and $prod_reviews <= 5) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
    <?php //} ?>                      
                                    <small>(<?php //echo $totalnum1; ?>)</small>
                                </span>
                            <?php //} else { ?>
                                <span class="rating"><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>(0)</small></span>
<?php //} ?>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div id="price_single_main">
                            from/per person <span><sup><?php //cho CURRENCY_SYMBOL; ?></sup><?php //echo (float) $p_adult_price; ?></span>

                                <?php //if ($p_promo_adult_price == '0.00') { ?>
                                    from/per person <span><sup><?php //echo CURRENCY_SYMBOL; ?></sup> <?php //echo (float) $p_adult_price; ?></span>
<?php //} else { ?>
                                    from/per person <span><sup><?php //echo CURRENCY_SYMBOL; ?></sup> <?php //echo (float) $p_promo_adult_price; ?></span></br>        
                                    <span class="orignal-price"><?php// echo CURRENCY_SYMBOL ?> <?php //echo (float) $p_adult_price; ?></span>
<?php //} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> End section -->

<!--        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="<?= site_url(''); ?>">Home</a></li>
                    <li><a href="<?= site_url(''); ?>"><?php // echo $product_data['category']; ?></a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div> End Position -->
<br><br><br><br><br>
        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div><!-- End Map -->

        <div class="container margin_60">
            <?php
            if ($_GET['msg'] == 'success') {
                ?>
                <div class="success">
                    <span style=" color:#0c0; text-align:center;">Update Successful! Thank you so much for your opinion!</span>
                </div>
<?php } ?>
            <div class="row">

                <div class="col-md-8" id="single_tour_desc">

                    <div id="single_tour_feat">
                        <ul>
                            <li <?php if ($product_data['museum'] == '1') { ?> style="display:table-cell;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-4"></i>Museum</li>
                            <li <?php if ($product_data['hours'] != '') { ?> style="display:table-cell;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-83"></i><?php echo $product_data['hours']; ?> Hours</li>
                            <li <?php if ($product_data['accessibiliy'] == '1') { ?> style="display:table-cell;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                            <li <?php if ($product_data['attraction'] == '1') { ?> style="display:table-cell;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-81"></i>Attraction</li>
                            <?php if ($_SESSION['Auth_user'] == TRUE) { ?>
                                <li><a style="color:#565a5c;" onClick="return likes(<?php echo $pro_id; ?>)" class="btn like_btn " id="like_btn"><i class="icon_set_1_icon-18"></a></i></br><span id="like"><?php echo $totallikes; ?></span> <?php echo $like; ?></li>
                            <?php } else { ?>
                                <li><a style="color:#565a5c;" href="login.php?pid=<?php echo $pro_id; ?>" class="btn like_btn " id="like_btn"><i class="icon_set_1_icon-18"></a></i></br><span id="like"><?php echo $totallikes; ?></span> <?php echo $like; ?></li>
<?php } ?>
                            <li <?php if ($product_data['pet_allowed'] == '1') { ?> style="display:table-cell;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-users"></i>Family</li>
                            <li <?php if ($product_data['audio_guide'] == '1') { ?> style="display:table-cell;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon-user-pair"></i>Couple</li>
                            <li <?php if ($product_data['tour_guide'] == '1') { ?> style="display:table-cell;" <?php } else { ?> style="display:none;" <?php } ?>><i class="icon_set_1_icon-29"></i>Tour guide</li>
                        </ul>
                    </div>

<!--   <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a></p>--><!-- Map button for tablets/mobiles -->

                    <div class="row">


                        <div class="col-md-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-md-9 signle_des">
                            <p>
<?php echo stripcslashes(Decode($product_data['long_description'])); ?>  
                            </p>

                        </div>
                    </div>
                    <?php
                    if ($schedule_M1['month'] == '' and $schedule_M2['month'] == '' and $schedule_M3['month'] == '' and $schedule_M4['month'] == '') {
                        
                    } else {
                        if ($schedule_M1['id'] == '' and $schedule_M2['id'] == '' and $schedule_M3['id'] == '' and $schedule_M4['id'] == '') {
                            
                        } else {
                            ?>
                            <hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <h3>Schedule</h3>
                                </div>
                                <div class="col-md-9">
        <?php if ($schedule_M1['month'] != '') {
           if ($schedule_M1['id'] != '') {
        ?>
                                            <div class=" table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">
                                                        <?php echo $schedule_M1['month']; ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                <?php if (isset($schedule_M1['monday'])) { ?>
                                                            <tr>

                                                                <td>
                                                                    Monday
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($schedule_M1['monday'] != 'closed') {
                                                                        echo $schedule_M1['monday'];
                                                                    } else {
                                                                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>

                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M1['tuesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Tuesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M1['tuesday'] != 'closed') {
                                                                echo $schedule_M1['tuesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>
                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M1['wednesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Wednesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M1['wednesday'] != 'closed') {
                                                                echo $schedule_M1['wednesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M1['thursday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Thursday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M1['thursday'] != 'closed') {
                                                                echo $schedule_M1['thursday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M1['friday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Friday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M1['friday'] != 'closed') {
                                                                echo $schedule_M1['friday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M1['saturday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Saturday
                                                                </td>
                                                                <td>
                    <?php
                    if ($schedule_M1['saturday'] != 'closed') {
                        echo $schedule_M1['saturday'];
                    } else {
                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M1['sunday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Sunday
                                                                </td>
                                                                <td>
                                                <?php
                                                if ($schedule_M1['sunday'] != 'closed') {
                                                    echo $schedule_M1['sunday'];
                                                } else {
                                                    ?>
                                                                        <span class="label label-danger">Closed</span>
                                                <?php } ?>
                                                                </td>
                                                            </tr>
                <?php } else {
                    
                }
                ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                                    <?php
                                                    } else {
                                                        
                                                    }
                                                } else {
                                                    
                                                }
                                                ?>

                                                        <?php if ($schedule_M2['month'] != '') {
                                                            if ($schedule_M2['id'] != '') {
                                                                ?>
                                            <div class=" table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">
                                                        <?php echo $schedule_M2['month']; ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                <?php if (isset($schedule_M2['monday'])) { ?>
                                                            <tr>

                                                                <td>
                                                                    Monday
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($schedule_M2['monday'] != 'closed') {
                                                                        echo $schedule_M2['monday'];
                                                                    } else {
                                                                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>

                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M2['tuesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Tuesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M2['tuesday'] != 'closed') {
                                                                echo $schedule_M2['tuesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>
                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M2['wednesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Wednesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M2['wednesday'] != 'closed') {
                                                                echo $schedule_M2['wednesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M2['thursday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Thursday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M2['thursday'] != 'closed') {
                                                                echo $schedule_M2['thursday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M2['friday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Friday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M2['friday'] != 'closed') {
                                                                echo $schedule_M2['friday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M2['saturday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Saturday
                                                                </td>
                                                                <td>
                                                <?php
                                                if ($schedule_M2['saturday'] != 'closed') {
                                                    echo $schedule_M2['saturday'];
                                                } else {
                                                    ?>
                                                                        <span class="label label-danger">Closed</span>
                                                <?php } ?>
                                                                </td>
                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M2['sunday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Sunday
                                                                </td>
                                                                <td>
                    <?php
                    if ($schedule_M2['sunday'] != 'closed') {
                        echo $schedule_M2['sunday'];
                    } else {
                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                <?php } else {
                                                                    
                                                                }
                                                                ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                                    <?php
                                                    } else {
                                                        
                                                    }
                                                } else {
                                                    
                                                }
                                                ?>

                                                        <?php if ($schedule_M3['month'] != '') {
                                                            if ($schedule_M3['id'] != '') {
                                                                ?>
                                            <div class=" table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">
                                                        <?php echo $schedule_M3['month']; ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                <?php if (isset($schedule_M3['monday'])) { ?>
                                                            <tr>

                                                                <td>
                                                                    Monday
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($schedule_M3['monday'] != 'closed') {
                                                                        echo $schedule_M3['monday'];
                                                                    } else {
                                                                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>

                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M3['tuesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Tuesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M3['tuesday'] != 'closed') {
                                                                echo $schedule_M3['tuesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>
                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M3['wednesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Wednesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M3['wednesday'] != 'closed') {
                                                                echo $schedule_M3['wednesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M3['thursday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Thursday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M3['thursday'] != 'closed') {
                                                                echo $schedule_M3['thursday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M3['friday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Friday
                                                                </td>
                                                                <td>
                    <?php
                    if ($schedule_M3['friday'] != 'closed') {
                        echo $schedule_M3['friday'];
                    } else {
                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                <?php } ?>
                                                                </td>
                                                            </tr>
                                                <?php
                                            } else {
                                                
                                            }
                                            if (isset($schedule_M3['saturday'])) {
                                                ?>
                                                            <tr>
                                                                <td>
                                                                    Saturday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M3['saturday'] != 'closed') {
                                                                echo $schedule_M3['saturday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M3['sunday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Sunday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M3['sunday'] != 'closed') {
                                                                echo $schedule_M3['sunday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                <?php } else {
                                                                    
                                                                }
                                                                ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                                    <?php
                                                    } else {
                                                        
                                                    }
                                                } else {
                                                    
                                                }
                                                ?>

                                                        <?php if ($schedule_M4['month'] != '') {
                                                            if ($schedule_M4['id'] != '') {
                                                                ?>
                                            <div class=" table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">
                                                        <?php echo $schedule_M4['month']; ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                <?php if (isset($schedule_M4['monday'])) { ?>
                                                            <tr>

                                                                <td>
                                                                    Monday
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($schedule_M4['monday'] != 'closed') {
                                                                        echo $schedule_M4['monday'];
                                                                    } else {
                                                                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>

                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M4['tuesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Tuesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M4['tuesday'] != 'closed') {
                                                                echo $schedule_M4['tuesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                                                            <?php } ?>
                                                                </td>
                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M4['wednesday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Wednesday
                                                                </td>
                                                                <td>
                                                            <?php
                                                            if ($schedule_M4['wednesday'] != 'closed') {
                                                                echo $schedule_M4['wednesday'];
                                                            } else {
                                                                ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                if (isset($schedule_M4['thursday'])) {
                                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    Thursday
                                                                </td>
                                                                <td>
                    <?php
                    if ($schedule_M4['thursday'] != 'closed') {
                        echo $schedule_M4['thursday'];
                    } else {
                        ?>
                                                                        <span class="label label-danger">Closed</span>
                                                <?php } ?>
                                                                </td>
                                                            </tr>
                                                <?php
                                            } else {
                                                
                                            }
                                            if (isset($schedule_M4['friday'])) {
                                                ?>
                                                            <tr>
                                                                <td>
                                                                    Friday
                                                                </td>
                                                                <td>
                                        <?php
                                        if ($schedule_M4['friday'] != 'closed') {
                                            echo $schedule_M4['friday'];
                                        } else {
                                            ?>
                                                                        <span class="label label-danger">Closed</span>
                                        <?php } ?>
                                                                </td>
                                                            </tr>
                                        <?php
                                    } else {
                                        
                                    }
                                    if (isset($schedule_M4['saturday'])) {
                                        ?>
                                                            <tr>
                                                                <td>
                                                                    Saturday
                                                                </td>
                                                                <td>
                                        <?php
                                        if ($schedule_M4['saturday'] != 'closed') {
                                            echo $schedule_M4['saturday'];
                                        } else {
                                            ?>
                                                                        <span class="label label-danger">Closed</span>
                    <?php } ?>
                                                                </td>
                                                            </tr>
                    <?php
                } else {
                    
                }
                if (isset($schedule_M4['sunday'])) {
                    ?>
                                                            <tr>
                                                                <td>
                                                                    Sunday
                                                                </td>
                                                                <td>
                                                        <?php
                                                        if ($schedule_M4['sunday'] != 'closed') {
                                                            echo $schedule_M4['sunday'];
                                                        } else {
                                                            ?>
                                                                        <span class="label label-danger">Closed</span>
                                                        <?php } ?>
                                                                </td>
                                                            </tr>
                <?php } else {
                    
                }
                ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                                    <?php
                                                    } else {
                                                        
                                                    }
                                                } else {
                                                    
                                                }
                                                ?>
                                </div>
                            </div>
                                            <?php }
                                        }
                                        ?>

                    <hr>
<?php
    if ($rows_data2['total_recs'] > 0) {
    $totalnum = count($product_data2);   
    foreach ($product_data2 as $product) {
        extract($product);        
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

                        <div class="row">
                            <div class="col-md-3">
                                <h3>Reviews </h3>
                            </div>
                            <div class="col-md-9">
                                <div id="general_rating"><?php echo $totalnum; ?> Reviews 
                                    <div class="rating">
                                                    <?php if ($prod_reviews == 0) { ?> 
                                            <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($prod_reviews > 0 and $prod_reviews <= 1.5) { ?> 
                                            <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($prod_reviews > 1.5 and $prod_reviews <= 2.5) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($prod_reviews > 2.5 and $prod_reviews <= 3.5) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php }if ($prod_reviews > 3.5 and $prod_reviews <= 4.5) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                    <?php } if ($prod_reviews > 4.5 and $prod_reviews <= 5) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                    <?php } ?>							
                                    </div>
                                </div><!-- End general_rating -->
                                <div class="row" id="rating_summary">
                                    <div class="col-md-6">
                                        <ul>
                                            <!--<li>Accommodation
                                                <div class="rating">
    <?php //if($re_accommodation == 0) {   ?> 
                                                    <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
    <?php //} if($re_accommodation <= 20 and $re_accommodation > 0){  ?> 
                                                    <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
    <?php
    //}
    //if($re_accommodation <=40 and $re_accommodation > 20) { 
    ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php //} if($re_accommodation <=60 and $re_accommodation > 40) {  ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php //}if($re_accommodation <=80 and $re_accommodation > 60) {  ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                    <?php //} if($re_accommodation <=100 and $re_accommodation > 80) {  ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                                    <?php //}  ?>	
                                                </div>
                                            </li>-->
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
                                                    <?php }if ($transport_rating > 3.5 and $transport_rating <= 4.5) { ?>
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
                                            <!--<li>Meals
                                            <div class="rating">
    <?php //if($re_meals == 0) {  ?> 
                                                   <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
    <?php //} if($re_meals <= 20 and $re_meals > 0){ ?> 
                                                    <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php
                                        //}
                                        //if($re_meals <=40 and $re_meals > 20) { 
                                        ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php //} if($re_meals <=60 and $re_meals > 40) { ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php //}if($re_meals <=80 and $re_meals > 60) { ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
    <?php //} if($re_meals <=100 and $re_meals > 80) {  ?>
                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        <?php //} ?>	
                                                </div>
                                            </li>-->
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
                                                    <?php }if ($money_rating > 3.5 and $money_rating <= 4.5) { ?>
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
                                                    <?php } if ($program_accuracy_rating > 1.5 and $program_accuracy_rating <= 2.5) {  ?>
                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($program_accuracy_rating > 2.5 and $program_accuracy_rating <= 3.5) { ?>
                                                                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php }if ($program_accuracy_rating > 3.5 and $program_accuracy_rating <= 4.5) { ?>
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
                                                    <?php   if ($guide_rating == 0) { ?> 
                                                                <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($guide_rating > 0 and $guide_rating <= 1.5) { ?> 
                                                                <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($guide_rating > 1.5 and $guide_rating <= 2.5) { ?>
                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($guide_rating > 2.5 and $guide_rating <= 3.5) { ?>
                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                                    <?php } if ($guide_rating > 3.5 and $guide_rating <= 4.5) { ?>
                                                                <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                                    <?php } if ($guide_rating > 4.5 and $guide_rating <= 5) { ?>
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
    foreach ($product_data2 as $rating) {
        extract($rating);
        ?>
                                    <div class="review_strip_single">
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
                                            <?php   if ($review_overall == 0)  { ?> 
                                                        <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                            <?php } if ($review_overall <= 2 and $review_overall > 0) { ?> 
                                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                            <?php } if ($review_overall <= 4 and $review_overall > 2) { ?>
                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                            <?php } if ($review_overall <= 6 and $review_overall > 4) { ?>
                                                         <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                            <?php } if ($review_overall <= 8 and $review_overall > 6) { ?>
                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                            <?php } if ($review_overall <= 10 and $review_overall > 8) { ?>
                                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                            <?php } ?>
                                        </div>
                                    </div><!-- End review strip -->
                        <?php $i++;
                    }
                    ?>



                            </div>
                        </div>
                <?php } else { ?>
                        <div class="row">
                            <div class="col-md-3">
                                <h3>Reviews </h3>
                            </div>
                            <div class="col-md-9">
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
                </div><!--End  single_tour_desc-->

<?php
$total = 0;
$pid = $_GET['id'];
/*

  if(isset($_SESSION['book'][$pid])){
  // unset($_SESSION['cart'][$pid]);
  //$_SESSION['cart'][$pid]['a_qty']++;

  }else{
  $sorder='id ASC ';
  $whr = array('id' => $pid);

  $data = getRows(DB_TABLE_PREFIX . 'product', $whr, '*', $sorder);

  $prod_data = $data['data'];
  $name = $prod_data[0]['title'];

  $a_prom_price = $prod_data[0]['promo_adult_price'];
  $c_prom_price = $prod_data[0]['promo_child_price'];

  $a_price = $prod_data[0]['adult_price'];
  $c_price = $prod_data[0]['child_price'];

  $org_price = $prod_data[0]['adult_price'];

  if(intval($a_prom_price) != 0)
  {
  $a_price = $a_prom_price;
  }
  if(intval($c_prom_price) != 0)
  {
  $c_price = $c_prom_price;
  }
  $img = $prod_data[0]['image'];

  $_SESSION['book'] = array();

  $_SESSION['book'][$pid] = array('pid'=>$pid, 'name' => $name,'adult_price'=> $a_price,
  'child_price'=>$c_price, 'a_qty' => 1, 'c_qty'=>0, 'pkg'=> 1,'org_price'=> $org_price,
  'promo_adult' => $a_prom_price,'promo_child' => $c_prom_price, 'image'=>$img);

  //$_SESSION['cart'][$id]['quantity']++; // another of this item to the cart
  } */
?>
                <input type="hidden" id="pid" value="<?php echo $pid; ?>">
                <aside class="col-md-4">

                    <!---
                    <div class="box_style_1 expose">
                            <h3 class="inner">- Booking -</h3>
                            <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                    <label><i class="icon-calendar-7"></i> Select a date</label>
                                                    <input  class="date-pick form-control" data-date-format="M d, D" type="text" value="<?php echo date('M d, D'); ?>">
                                            </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                    <label><i class=" icon-clock"></i> Time</label>
                                                    <input id="tour_time" class="time-pick form-control" value="12:00 AM" type="text">
                                            </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                    <label>Adults</label>
                                                    <div class="numbers-row">
                                                            <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity1">
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                    <label>Children</label>
                                                    <div class="numbers-row">
                                                            <input type="text" value="0" id="children" class="qty2 form-control" name="quantity2">
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                            <br>
                            <table class="table table_summary">
                            <tbody>
                            <tr>
                                    <td width="70%">
                                            Adults( SGD <span id="aprice"><?php //echo $_SESSION['book'][$pid]['adult_price'];   ?></span> )
                                    </td>
                                    <td id="a_num" class="text-right" width="30%">
<?php //echo $_SESSION['book'][$pid]['a_qty'];   ?>	
                                    </td>
                            </tr>
                            <tr>
                                    <td width="70%">
                                            Children( SGD <span id="cprice"><?php //echo $_SESSION['book'][$pid]['child_price'];   ?></span> )
                                    </td>
                                    <td id="c_num" class="text-right" width="30%">
<?php //echo $_SESSION['book'][$pid]['c_qty'];   ?>
                                    </td>
                            </tr>
                            <tr style="font-size:10px;color:red;">
                                    <td class="text-right" style="margin:0px;padding:1px;">
                                            Press icon below 
                                    </td>
                                    <td style="margin:0px;padding:1px;">
                                            to see changes
                                    </td>
                            </tr>
                            <tr class="total">
                                <td>
                                        Total cost
                                </td>
                                <td class="text-right">
                                    <a id="refresh"  onclick="return refresh(this.id)"><i class="icon-ccw-2"></i></a>
<?php
// $total = (($_SESSION['book'][$pid]['adult_price'] * $_SESSION['book'][$pid]['a_qty'])
//   + ($_SESSION['book'][$pid]['child_price'] * $_SESSION['book'][$pid]['c_qty']));
//echo  ' SGD <span id="t_cost">'.$total.'</span>';       
?>    
                                </td>
                            </tr>
                            </tbody>
                           
                            </table>
                             <div id="progress" title="Code: 0xe802" class="the-icons" style="margin-bottom:10px;display:none; font-size:20px"><i class="icon-spin5 animate-spin"></i> <span class="i-name">Wait....</span><span class="i-code"></span></div>
                            <input type="hidden" id="pid" value="<?php echo $pid; ?>">
                            
    
                         
                                            <a id="book" class="btn_full" onclick="return refresh(this.id)">Book now</a>
                                            
                                            <a  class="btn_full_outline" onclick="addtowishlist()"><i class=" icon-heart"></i> Add to whislist</a>
                                            <div id="alert_info" class="alert alert-danger" style="margin-top:10px;display:none;text-align:center;font-size:16px;">
                                              <i class="fa fa-exclamation-triangle"></i>
                                              <span id="info"></span>
                                            </div>
                            
                    </div>--> <!--/box_style_1 -->

                    <div class="box_style_4">
                        <i class="icon_set_1_icon-90"></i>
                        <h4><span>Book</span> by phone</h4>
                        <!--<a href="tel://006590886618" class="phone">+65-90886618</a>-->
                        <a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
                        <!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
                    </div>
                    <div class="box_style_4">
<?php if ($_SESSION['Auth_user'] == TRUE) { ?>
                            <a id="book" class="btn_full" onclick="return setcart()">Book now</a>
                            <a class="btn_full_outline" href="rating.php?id=<?php echo $_GET['id']; ?>">Leave a Review</a>
<?php } else { ?>
                            <a id="book" class="btn_full" onclick="return setcart()">Book now</a>
                            <form action="login.php" method="post">
                                <input type="hidden" name="re_id" value="<?php echo $pro_id; ?>">

                                <button class="btn btn_full_outline" >Leave a Review</button>
                            </form>
<?php } ?>
                    </div>

                </aside>
            </div><!--End row -->
        </div><!--End container -->

        <!-- Start footer -->
<?php include_once 'footer.php'; ?>
        <!-- End footer -->

        <div id="overlay"></div><!-- Mask on input focus -->   

        <!-- Specific scripts -->
        <script src="<?= site_url('js/icheck.js'); ?>"></script>
        <script>
                            $('input').iCheck({
                                checkboxClass: 'icheckbox_square-grey',
                                radioClass: 'iradio_square-grey'
                            });
        </script>

        <!-- Date and time pickers -->
        <script src="<?= site_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?= site_url('js/bootstrap-timepicker.js'); ?>"></script>
        <script>
                            //$('input.date-pick').datepicker('setDate', 'today');
                            $("input.date-pick").datepicker({
                                startDate: '+1d'
                            });

                            $('input.time-pick').timepicker({
                                minuteStep: 15,
                                showInpunts: false
                            })
                            $(document).ready(function () {
                                $(".button_inc").click(function () {

                                    var adults = $("#adults").val();
                                    var childs = $("#children").val();
                                    var cprice = $("#cprice").html();
                                    var aprice = $("#aprice").html();
                                    //var others = $("#others").val();
                                    console.log(cprice)

                                    var total = ((adults * aprice) + (childs * cprice));
                                    //var new_sum = +total + +others;
                                    $("#t_cost").html(total);
                                    $("#a_num").html(adults);
                                    $("#c_num").html(childs);

                                });
                            });

                            function addtowishlist()
                            {
                                var id = $("#pid").val();
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
                                                    $("#info").html(responce);
                                                    $("#alert_info").show();
                                                }
                                            }

                                        });

                            }
                            function refresh(id)
                            {
                                var adults = $("#adults").val();
                                var childs = $("#children").val();
                                var pid = $("#pid").val();//// product Idcon
                                var time = $("#tour_time").val();
                                var date = $(".date-pick").val();
                                $.ajax({
                                    method: "POST",
                                    url: "calc_charges.php",
                                    data: {time: time, date: date, control: id, adults: adults, childs: childs, pid: pid},
                                    beforeSend: function (msg) {
                                        $("#progress").show();
                                    }
                                })
                                        .done(function (responce) {

                                            if (responce)
                                            {
                                                if (id == "refresh")
                                                {
                                                    $("#progress").hide();
                                                    var obj = JSON.parse(responce);
                                                    $("#a_num").html(obj['adult']);
                                                    $("#c_num").html(obj['childs']);
                                                    $("#t_cost").html(obj['total']);
                                                    return false;
                                                }
                                                else {
                                                    window.location.replace("addtocart.php?pid=" + pid);
                                                }
                                                //$("#progress").hide();

                                            }
                                            else
                                            {

                                                //$("#progress").hide();
                                                //$("#failure").show();
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
                                                    $("#like_btn").attr("disabled", "disabled");
                                                    $("#like").html(responce);
                                                    $("#like_btn").addClass("color_btn");
                                                }
                                                /*if(id=="refresh")
                                                 {
                                                 $("#progress").hide(); 
                                                 var obj = JSON.parse(responce);
                                                 $("#a_num").html(obj['adult']);
                                                 $("#c_num").html(obj['childs']);
                                                 $("#t_cost").html(obj['total']);
                                                 return false;
                                                 }
                                                 else{
                                                 window.location.replace("addtocart.php?pid="+pid);
                                                 }*/
                                                //$("#progress").hide();

                                            }
                                            else
                                            {

                                                //$("#progress").hide();
                                                //$("#failure").show();
                                            }

                                        });
                            }
                            function setcart()
                            {
                                var id = $("#pid").val();

                                $.ajax({
                                    method: "POST",
                                    url: "set_cart.php",
                                    data: {prodid: id},
                                    beforeSend: function (msg) {
                                        // $("#progress").show(); 
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

        </script>

        <!-- Map -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="js/map.js"></script>
        <script src="js/infobox.js"></script>

    </body>
</html>