<?php
include_once 'inc/config.inc.php';
include_once 'inc/class.phpmailer.php';


?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- CSS -->
    <link href="css/jquery.switch.css" rel="stylesheet">
    <link rel="stylesheet" href="css/date_time_picker.css">

    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        
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
<header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->



<!--<section id="hero_2" style="height:200px !important; display:none">
	<div class="intro_title animated fadeInDown">
           <h1>Place your order</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart.html" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="payment.html" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section>--><!-- End Section hero_2 -->
    
    <!--<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Cart</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div>--><!-- End position -->
<br><br><br><br>
    <div class="container margin_60">
    <div class="row">
    <div class="col-md-8">
    	<table class="table table-striped cart-list add_bottom_30">
            <thead>
            <tr>
            	<?php
            	
            	$pro_id = $_GET['prodid'];
                    $where = array('id' =>$pro_id, 'is_deleted' => 'N', 'is_active' => 'Y', 'is_feature' => 'Y');
                    $prod_query = getRows(DB_TABLE_PREFIX.'product', $where, '*', $sort_order, '', '', 'Y', '9');
                    $product_data = $prod_query['data'];
                    
                    foreach ($product_data as $product) {
                        extract($product);
                        $date_flag = $date_mandatory;
                        
                    }
                    		
                    $count = 0;
	                foreach($_SESSION[$_SESSION['Auth_name']] as $item )
	                {
	                    if(($item['pid'] != '') && ($item['pid'] != 'null'))
	                    {
	                        $count++;
	                    }
	                }
                ?>
                <?php
                	
                    if(empty($_GET))
                    {
                    	if($count > 0 ){
                        	$uname = $_SESSION['Auth_name'];
                        
                ?> 
                <th>
                    Item
                </th>
                <th>
                    Adults
                </th>
                <th>
                    Child
                </th>
                <th>
                    Quantity
                </th>
                
                
                <th>
                    Total
                </th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
               <?php
                    foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                        {
                            if(($item['pid'] != '') && ($item['pid'] != 'null'))
                            {
                        
                            $total = (($item['adult_price'] * $item['a_qty'])
                                    + ($item['child_price'] * $item['c_qty']));
                            $others = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']+ $item['2way']['price'];
               ?>
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img class="thum_img" src="img/products/<?php echo $item['image'] ?>" alt="">
                    </div>
                     <span class="item_cart"><?php echo stripcslashes(Decode($item['name'])); ?></span>
                </td>
                <td >
                    <span class=""><?php echo $item['a_qty']?></span>
                </td>
                <td >
                    <span class=""><?php echo $item['c_qty']?></span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="<?php echo $item['pkg']; ?>" id="quantity_<?php echo $item['pid']; ?>" class="qty2 form-control" name="quantity_1">
                    </div>
                    
                </td>
                
               <!-- <td>
                <?php 
                    /*if(intval($item['promo_adult']) != 0)
                    {
                        echo 'SGD '. ($item['org_price'] - $item['promo_adult']); 
                    }
                    else{
                        echo "SGD 0";
                    }*/
                ?>
                </td>-->
                <td>
                    <strong >SGD <span id="total_prod<?php echo $item['pid']; ?>" > <?php echo  ($others + $total) * $item['pkg']; ?></span></strong>
                </td>
                <td class="options">
                    <a onclick="return deleteProd(<?php echo $item['pid']; ?>)"><i class=" icon-trash"></i></a>
                   <a id="<?php echo $item['pid']; ?>" onclick="refresh(this.id)"><i class="icon-ccw-2"></i></a>
                </td>
            <input type="hidden" id="<?php echo $item['pid']; ?>">
            </tr>
            <?php 
                            }
                         }
             ?>
              
            </tbody>
            </table>
             <?php             
            	}	
            	else	{
            			 echo "<h4> No item in the cart to display </h4>";  	
            	}
            
                }else
                {
                	$prod_id = $_GET['prodid'];
                   
                    
                    $prod_exist = in_array($prod_id,$_SESSION[$_SESSION['Auth_name']][$prod_id]);
                    if($prod_exist)
                    {
            ?>
            <table class="table table-striped cart-list1 add_bottom_30">
            <thead>
            <th>
                    Item
                </th>
                <th>
                    Adults
                </th>
                
                <th>
                    Child
                </th>
                
                <th>
                    Total
                </th>
                <th>
                    Actions
                </th>
            </thead>  
            <tbody>  
            <?php
                
                $uname = $_SESSION['Auth_name'];
                
                foreach($_SESSION[$uname] as $item )
                {
                    
                    if($prod_id == $item['pid'])
                    {
                        $total = (($item['adult_price'] * $item['a_qty'])
                                   + ($item['child_price'] * $item['c_qty']));
                        $_SESSION[$uname][$pid]['single_total'] = $total;
                        
                        $others = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price'] + $item['2way']['price'];
            ?>    
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img class="thum_img" src="img/products/<?php echo $item['image'] ?>" alt="">
                    </div>
                     <span class="item_cart"><?php echo stripcslashes(Decode($item['name']))?></span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="<?php echo $item['a_qty']; ?>" id="aqty_<?php echo $item['pid']; ?>" class="q1 qty2 form-control" name="quantity_1" disabled>
                    </div>
                    
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="<?php echo $item['c_qty']; ?>" id="cqty_<?php echo $item['pid']; ?>" class="q2 qty2 form-control" name="quantity_1" disabled>
                    </div>
                    
                </td>
                
               <!-- <td>
                    <?php 
                   /* if(intval($item['promo_adult']) != 0)
                    {
                        echo 'SGD '. ($item['org_price'] - $item['promo_adult']); 
                    }
                    else{
                        echo "SGD 0";
                    }*/
                ?>
                </td>-->
                <td class='price_itm'>
                    <strong >SGD <span id="sum_<?php echo $item['pid']; ?>" > <?php 
                    //echo $total;
                        echo $total;
                    ?></span></strong>
                </td>
                <td class="options">
                    <a onclick="return deleteProd(<?php echo $item['pid']; ?>)"><i class=" icon-trash"></i></a>
                  <!---  <a id="book" onclick="single_item_refresh(this.id)"><i class="icon-ccw-2"></i></a> -->
                    <input type="hidden" value>
                </td>
            <input type="hidden" id="pidval" value="<?php echo $item['pid']; ?>">
            </tr>
            <?php
                    }
                    }
                
            ?>

            </tbody>
            </table>
               
                <div class="row">
                    <?php 
            if(!empty($_GET) && ($date_flag==1)){
          ?>
                    
	                <div class="col-md-4 col-sm-4 col-xs-12">
	                    <div class="form-group">
	                        <label><i class="icon-calendar-7"></i> Select a date</label>
	                        <input id="tour_date" class="date-pick form-control" data-date-format="M d, D" type="text" value="<?php echo date('M d, D'); ?>">
	                    </div>
	                </div>
                     <?php   } ?>
                    <?php if(!empty($_GET) && ($time!="")){ ?>
	                <div class="col-md-4 col-sm-4 col-xs-12">
	                
	                    <div class="filter_type">
	                        <label>Select Time</label>
	                            <select id="tour_time" name="tour_time" class="form-control tour_time">
	                                <?php 
	                                    $time_arr = explode(',',$time);
	                                    foreach($time_arr as $tme)
	                                    {        
	                                ?>
	                                    <option  value="<?php echo $tme; ?>"><?php  echo $tme; ?></option>
	                                    <?php } ?>
	                            </select>
	                    </div>
	                </div>
                     <?php } ?>
        	</div>
       
          
           
        <?php
            
            if(!empty($_GET))
            {
            
         ?>       
            <table class="table table-striped options_cart">
            <thead>
            <tr>
                <th colspan="3">
                    Add options / Services
                </th>
            </tr>
            </thead>
            <tbody>
        <?php
            $otherservices = explode(',',$other_services);
            $lastid = end($otherservices);                                  
            foreach($otherservices as $service_id){

                $OR= " OR ";
                if($lastid==$service_id){
                    $OR = "";
                }

             $s_id .= "`id`=".$service_id.$OR;
            }
            
            $services = "select * from services where".$s_id." order by id asc";
            $sql_ser = mysql_query($services);
            
            while( $assoc = mysql_fetch_assoc($sql_ser) )        
            {
              	$option = $assoc['id'];
              $uname = $_SESSION['Auth_name'];
              switch($option)
              {
                  case 23:
                      $name = $_SESSION[$uname][$prod_id]['guide']['name'];
                      $term = 'guide';
                      
                      break;
                  case 24:
                      $name = $_SESSION[$uname][$prod_id]['pickup']['name'];
                      $term = 'pickup';
                      break;
                  case 25:
                      $name = $_SESSION[$uname][$prod_id]['insurance']['name'];
                      $term = 'insurance';
                      break;
                  case 26:
                      $name = $_SESSION[$uname][$prod_id]['coffee']['name'];
                      $term = 'coffee';
                      break;
                  case 27:
                      $name = $_SESSION[$uname][$prod_id]['welcome']['name'];
                      $term = 'welcome';
                      break;
                  case 28:
                      $name = $_SESSION[$uname][$prod_id]['dinner']['name'];
                      $term = 'dinner';
                      break;
                  case 29:
                      $name = $_SESSION[$uname][$prod_id]['bike']['name'];
                      $term = 'bike';
                      break;
                  case 30:
                      $name = $_SESSION[$uname][$prod_id]['2way']['name'];
                      $term = '2way';
                      break;
    
              }
            
        ?>  
            <tr>
                <td style="width:10%">
                    <i class="<?php echo $assoc ['img_class'] ?>"></i>
                </td>
                <td style="width:60%">
                    <?php echo $assoc['services']; ?> <strong>SGD <?php echo $assoc['price']; ?></strong>
                </td>
                
                <td>
                    
                    
                    <label  class="switch-light switch-ios pull-right" >
                   	<?php 
                        if($assoc['services'] == $name )    
                        {    
                    ?>
                    <input value="<?php echo $assoc['id'].'_'.$assoc['services'].'_'.$assoc['price']; ?>" onclick="return services(this.id)" type="checkbox" name="option_1" id="option<?php echo $assoc['id']; ?>"   <?php echo "checked=checked"; ?>>
                    <?php
                        }else
                        {
                    ?>
                    <input value="<?php echo $assoc['id'].'_'.$assoc['services'].'_'.$assoc['price']; ?>" onclick="return services(this.id)" type="checkbox" name="option_1" id="option<?php echo $assoc['id']; ?>"   <?php  echo "unchecked=unchecked"; ?>>
                    <?php
                        }
                    ?>
                    <span>
                    
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
                
            </tr>
            
        <?php 	} 
        
            	}
            }
            else
	            {
	            	echo "<h4> Sorry, Item Does not exist in the cart</h4>";
	            }
            }
        ?>    

            </tbody>
            </table>
              
    </div><!-- End col-md-8 -->
    
    <aside class="col-md-4">
    <div class="box_style_1">
        <h3 class="inner">- Summary -</h3>
        <table class="table table_summary">
        <tbody id="side_cart">
            <tr>
                <th><strong>Items</strong></th>
                <th class="text-right"><strong>Price(SGD)</strong></th>
            </tr>
        <?php
        $grand_total = 0;
        if(empty($_GET))
        {
             echo "</tr>";   
            $grand_total = 0;
            
            foreach($_SESSION[$_SESSION['Auth_name']] as $item )
            {
                if(($item['pid'] != '') && ($item['pid'] != 'null'))
                {
                    $total = (($item['adult_price'] * $item['a_qty'])
                            + ($item['child_price'] * $item['c_qty']));  
                    $others = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] 
                                    + $item['bike']['price']+ $item['2way']['price']; 
                                     
        ?>
            
            <tr>
                <td>
                    <?php echo $item['name']; ?>
                </td>
                <td id="prodid<?php echo $item['pid']; ?>" class="text-right">
                    <?php echo $total = ($total +$others) * $item['pkg']; ?>
                </td>
            </tr>
            
        <?php 
                $grand_total = $grand_total + $total ; 
            }
        }?>
        <tr class="total">
            <td>
                Total cost
            </td>
            <td id="grand" class="text-right">
                 <?php echo $grand_total; ?>
            </td>
        </tr>    
        <?php    
        } else
        {
        
            foreach($_SESSION[$_SESSION['Auth_name']] as $item )
            {
                
                if($item['pid'] == $_GET['prodid'])
                {
                    $total = (($item['adult_price'] * $item['a_qty'])
                            + ($item['child_price'] * $item['c_qty']));         
        ?>
	        <div class="row">
	                <!---<div class="col-md-6 col-sm-6">
	                    <div class="form-group">
	                        <label><i class="icon-calendar-7"></i> Select a date</label>
	                        <input id="tour_date" class="date-pick form-control" data-date-format="M d, D" type="text" value="<?php echo date('M d, D'); ?>">
	                    </div>
	                </div>-->
	                <!--<div class="col-md-6 col-sm-6">
	                    <div class="form-group">
	                        <label><i class=" icon-clock"></i> Time</label>
	                        <input id="tour_time" class="time-pick form-control" value="12:00 AM" type="text">
	                    </div>
	                </div>-->
	        </div>
            <tr>
                <td>
                    Adults ( <span id="aprc"> <?php echo $item['adult_price']; ?></span> X <span id="adult_qty"> <?php echo $item['a_qty']; ?></span> )
                </td>
                <td id="atotal_<?php echo $item['pid']; ?>" class="text-right">
                    <?php echo $item['adult_price'] * $item['a_qty']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Child ( <span id="cprc"> <?php echo $item['child_price']; ?></span> X <span id="child_qty"> <?php echo $item['c_qty']; ?></span>)
                </td>
                <td id="ctotal_<?php echo $item['pid']; ?>" class="text-right">
                    <?php echo ($item['child_price'] * $item['c_qty']); ?>
                </td>
            </tr>
<!--            <tr>
                <td>
                    <?php //echo $item['name']; ?>
                </td>
                <td id="product_<?php echo $item['pid']; ?>" class="text-right">
                    <?php// echo $total; ?>
                </td>
                
            </tr>-->
            </tbody>
            <tbody id="services">
            
            
        <?php 
                $grand_total = $grand_total + $total; 
                }
            }
            foreach($_SESSION[$_SESSION['Auth_name']][$prod_id]['html'] as $service)
            {
                echo $service;
            }
            
            $others = $_SESSION[$_SESSION['Auth_name']][$prod_id]['guide']['price'] + $_SESSION[$_SESSION['Auth_name']][$prod_id]['pickup']['price'] 
                   	+$_SESSION[$_SESSION['Auth_name']][$prod_id]['insurance']['price'] + $_SESSION[$_SESSION['Auth_name']][$prod_id]['coffee']['price'] 
                  	+$_SESSION[$_SESSION['Auth_name']][$prod_id]['welcome']['price'] + $_SESSION[$_SESSION['Auth_name']][$prod_id]['dinner']['price']
                        + $_SESSION[$_SESSION['Auth_name']][$prod_id]['bike']['price'] + $_SESSION[$_SESSION['Auth_name']][$prod_id]['2way']['price']; 
                        
            
            ?>
        <tr class="total">
            <td>
                Total cost
            </td>
            <td id="grand2" class="text-right">
                 <?php echo $grand_total+$others; ?>
            </td>
        </tr>    
        <?php    
        }
        ?>
        
        </tbody>
        </table>
        <input type="hidden" id="other_ser" value="<?php echo $others ?>">
        <div id="progress" title="Code: 0xe802" class="the-icons" style="margin-bottom:10px;display:none; font-size:20px"><i class="icon-spin5 animate-spin"></i> <span class="i-name">Wait....</span><span class="i-code"></span></div>
        <?php 
            if( empty($_GET) && ($count>0)){
        ?>
        <a class="btn_full" href="payment.php">Check out</a>
         <a class="btn_full_outline" href="index.php"><i class="icon-right"></i> Continue shopping</a>
        <?php }
        else{
        	$count = 0;
                foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                {
                    if(($item['pid'] != '') && ($item['pid'] != 'null'))
                    {
                        $count++;
                    }
                }

                if($count == 1)
                {
        ?>
            <a class="btn_full" href="payment.php">Check out</a>
            <?php
                }else
                    {
            ?>
            <a class="btn_full" href="cart.php">Go to Cart</a>
            <?php
                    }
            ?>
            <a id="continue" class="btn_full_outline" onclick="return set_datetime(this.id)"><i class="icon-right"></i> Continue shopping</a>
            <?php        
                }    
            ?>
        <!---<a class="btn_full_outline" href="index.php"><i class="icon-right"></i> Continue shopping</a> --->
    </div>
    <div class="box_style_4 zopim">
        <i class="icon_set_1_icon-57"></i>
        <h4>Need <span>Help?</span></h4>
        <a href="tel://006590886618" class="phone">+65 8161 5060</a>
        <a href="mailto:Sales@SingaporeDeals4u.com">Sales@SingaporeDeals4u.com</a>
        <!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
        <div class="col-md-12 zopim_ifram" style="margin-left: 46px !important;">                            
          <iframe src="zopim.html" scrolling="no" style="border:none; margin-top: 20px; width:254px; height:338px;" ></iframe>
        </div>
    </div>
    </aside><!-- End aside -->

</div><!--End row -->
</div><!--End container -->

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3>Need help?</h3>
                    <a href="tel://0065-90886618" id="phone">+65-90886618</a>
                    <a href="mailto:Sales@SingaporeDeals4u.com" id="email_footer">Sales@SingaporeDeals4u.com</a>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p>© Singapore Deals For You 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->


<div id="toTop"></div><!-- Back to top button -->

<!-- Jquery -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="<?= site_url('js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?= site_url('js/bootstrap-timepicker.js'); ?>"></script>


<script>  

$("input.date-pick").datepicker({
        startDate: '+1d'
    });

    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    });
    
//Incrementer
$(function () {
   
	"use strict";
    $(".numbers-row").append('<div class="inc button_inc">+</div><div class="dec button_inc">-</div>');
    $(".button_inc").on("click", function () {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
});
	/*$( window ).load(function() {
            var pid = $("#pidval").val();
            var time = $("#tour_time").val();
            var date = $("#tour_date").val();
        
            $.ajax({
                method: "POST",
                url: "set_datetime.php",
                data: { date:date, time:time, pid:pid },
                beforeSend: function( msg ) {
                    //$("#progress").show(); 
                }
              })
            .done(function( responce ) {
                
            });
        }); */
        
        $( ".tour_time" ).change(function() {
            var pid = $("#pidval").val();
            var time = $("#tour_time").val();
            var date = $("#tour_date").val();
        
            $.ajax({
                method: "POST",
                url: "set_datetime.php",
                data: { date:date, time:time, pid:pid },
                beforeSend: function( msg ) {
                    //$("#progress").show(); 
                }
              })
            .done(function( responce ) {
                
            });
        });
        
	$( document ).ready(function() {
            /*** Date time add to cart on load **/
            var pid = $("#pidval").val();
            var time = $("#tour_time").val();
            var date = $("#tour_date").val();
        
            $.ajax({
                method: "POST",
                url: "set_datetime.php",
                data: { date:date, time:time, pid:pid },
                beforeSend: function( msg ) {
                    //$("#progress").show(); 
                }
              })
            .done(function( responce ) {
                
            });
            
            //**************/
            
            $( ".button_inc" ).click(function() {

            var adults = $(".q1").val();
            var childs = $(".q2").val();
            
            var pid = $("#pidval").val();
            var cprice = $("#cprc").html();
            
            var aprice = $("#aprc").html();
            var others = $("#other_ser").val();
            
            var dte = $("#tour_date").val();
            var tme = $("#tour_time").val();
            
            var total = (( adults * aprice ) + ( childs * cprice ));
            var adult_total = adults * aprice;
            var child_total = childs * cprice;
            var new_sum = +total + +others;
            
            $("#progress").hide();
            $("#atotal_"+pid).html(adult_total);
            $("#ctotal_"+pid).html(child_total);
            $("#sum_"+pid).html(total);
            $("#grand2").html(new_sum);
            $("#aqty_"+pid).html(adults);
            $("#cqty_"+pid).html(childs);
            $("#cart_total").html(new_sum);
            $("#pkg_price"+pid).html(new_sum);
            $("#adult_qty").html(adults);
            $("#child_qty").html(childs);
            
            
            $.ajax({
                method: "POST",
                url: "set_price.php",
                data: { adults:adults,  childs:childs, pid:pid, dte:dte, tme:tme },
                beforeSend: function( msg ) {
                   
                }
              })
            .done(function( responce ) {

                if(responce)
                {
                    return false;
                }
	            })
	        });
	
	
	    });
    
    
function refresh(pid)
{
    var quantity = $("#quantity_"+pid).val();
    
    $.ajax({
            method: "POST",
            url: "calc_charges_cart.php",
            data: { quantity: quantity, pid:pid },
            beforeSend: function( msg ) {
                $("#progress").show(); 
            }
          })
    .done(function( responce ) {

        if(responce)
        {
            $("#progress").hide();
            var obj = JSON.parse(responce);
            $("#total_prod"+pid).html(obj['total']);
            $("#prodid"+pid).html(obj['total']);
            $("#quantity_"+pid).html(obj['quantity']);
            $("#head_cart"+pid).html(obj['quantity']);
            $("#grand").html(obj['grand']);
            $("#cart_total").html(obj['grand']);
            
           
            return false;
            
            //$("#progress").hide();
            
        }
        else
        {
            
            //$("#progress").hide();
            //$("#failure").show();
        }

    });
    
}
function single_item_refresh(id)
{
    var pid = $("#pidval").val();//// product Id
    var adults = $("#aqty_"+pid).val();
    var childs = $("#cqty_"+pid).val();
    var control = "single";
   
    id="refresh";
    $.ajax({
            method: "POST",
            url: "calc_charges.php",
            data: { control:control, adults: adults , childs:childs, pid:pid },
            beforeSend: function( msg ) {
               $("#progress").show(); 
            }
          })
    .done(function( responce ) {

        if(responce)
        {
            if(id=="refresh")
            {
                $("#progress").hide();
                var obj = JSON.parse(responce);
               // console.log(obj['atotal']);
                $("#atotal_"+pid).html(obj['atotal']);
                $("#ctotal_"+pid).html(obj['ctotal']);
                $("#sum_"+pid).html(obj['total']);
                $("#product_"+pid).html(obj['total']);
                $("#grand2").html(obj['total']);
                $("#pkg_price"+pid).html(obj['total']);
                
                return false;
            }
        }
        else
        {
            
            //$("#progress").hide();
            //$("#failure").show();
        }

    });
    
}

function services(id)
{
    if($('#'+id).is(':checked'))
    {
        var action = 'add';
    }
    else{
        var action = 'delete';
    }
    var sid = $('#'+id).val();
        var pid = $("#pidval").val();//// product Id
        var total_final = $("#grand2").html();
        var dte = $("#tour_date").val();
        var tme = $("#tour_time").val();
        
        $.ajax({
            method: "POST",
            url: "get_services.php",
            data: {action:action,  sid:sid, pid:pid,total_final:total_final, dte:dte, tme:tme },
            beforeSend: function( msg ) {
              $("#progress").show(); 
            }
          })
        .done(function( responce ) {

            if(responce)
            {
            	$("#progress").hide();
                var obj = JSON.parse(responce);
                var existing_html = $("#side_cart").html();
                var res = obj['service']; 
                var sum = obj['total'] - obj['others']
                $("#other_ser").val(obj['others']);
                $("#services").html(res);
                $("#sum_"+pid).html(sum);

               // $("#total_prod"+pid).html(obj['total']);
                $("#cart_total").html(obj['total']);
                $("#pkg_price"+pid).html(obj['total']);
                return false;
                
            }

        })
}
function deleteProd(pid)
{
        $.ajax({
            method: "POST",
            url: "del_request.php",
            data: {pid:pid },
            beforeSend: function( msg ) {
                //$("#progress").show(); 
            }
          })
        .done(function( responce ) {

            if(responce=="success")
            {
                window.location.replace('cart.php');
                return false;
            }
        })
}
    function set_datetime(id)
    {
        var pid = $("#pidval").val();
        var time = $("#tour_time").val();
        var date = $("#tour_date").val();
        
        $.ajax({
            method: "POST",
            url: "set_datetime.php",
            data: { date:date, time:time, pid:pid },
            beforeSend: function( msg ) {
                //$("#progress").show(); 
            }
          })
        .done(function( responce ) {

            if(responce == 'success')
            {
                if(id=='checkout')
                {
                    window.location.replace('payment.php');
                    return false;
                }
                else if(id=='cart')
                {
                    window.location.replace('cart.php');
                    return false;
                }else if(id=='continue')
                {
                    window.location.replace('index.php');
                    return false;
                }
                    
            }
            
        });
    }

 </script>





  </body>
</html>