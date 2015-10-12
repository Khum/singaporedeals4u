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
    <meta name="keywords" content="Singapore Day Tours, Singapore Attractions, Singapore Best Tours, Singapore Island Tours, Singapore City Tours, Singapore Private Tours, Singapore Family Tours, Singapore Adventure Tours, Singapore Couple Tours, Singapore Nature Tours">
    <meta name="description" content="We brings best Travel deals for Singapore. We have Singapore best Day Tours & Attractions, short stay in Singapore. Our Professional can provide the best advice to visitors.">
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
	
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
	<style>
    .fi
    erable {
                margin-top: 15px;
            }
            .filterable .panel-heading .pull-right {
                margin-top: -20px;
            }
            .filterable .filters input[disabled] {
                background-color: transparent;
                border: none;
                cursor: auto;
                box-shadow: none;
                padding: 0;
                height: auto;
            }
            .filterable .filters input[disabled]::-webkit-input-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]::-moz-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]:-ms-input-placeholder {
                color: #333;
            }
    </style>
        
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>
<header >
	        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0065-90886618</strong></div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <?php if($_SESSION['Auth_user'] || $_SESSION['Auth_user'] == 'user')
                            {
                            unset($_SESSION['Auth_user']);
                            ?>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link"><strong><?php echo $_SESSION['Auth_username']; ?></strong></a>
                                    <div class="dropdown-menu">
                                        <div class="row" style="background-color: #000">
                                            <ul>
                                                <!--<li <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? ' class="active"':'') ?>><a href="<?php echo site_url('');?>dashboard.php" id="wishlist_link">Dashboard</a></li>--->
                                                <li<?php echo (basename($_SERVER['PHP_SELF']) == 'logout.php' ? ' class="active"':'') ?>><a href="<?php echo site_url('');?>logout.php" id="wishlist_link">Logout</a></li>
                                            </ul>
                                            
                                        </div>
                                       
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                           
                            <?php }else  { ?>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="<?php echo site_url('');?>" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 5px;">
                                                <img width="170" height="55" class="logo_normal" data-retina="true" alt="Stability" src="img/logo.png">
                                            </div>
                                          
                                        
                                            <div id="failure" class=" col-sm-12 col-md-12" style="font-size:12px;display:none;margin-top: 0px;" >
                                                <div  class="alert alert-danger" >
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                        ×</button>
                                                 
                                                    <p>
                                                        Either email or password is wrong. Try again</p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="<?php echo site_url('forgot_password.php');?>">Forgot password?</a>
                                        <input type="submit" name="" value="Sign in" id="signinbutton" class="button_drop">
                                        <a href="<?= site_url('register.php') ?>"><input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline"></a>
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                            <?php } ?>
                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'wishlist.php' ? ' class="active"':'') ?>><a href="<?php echo site_url('');?>wishlist.php" id="wishlist_link">Wishlist</a></li>
                            
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="<?=site_url('index.php');?>"><img src="<?=site_url('img/logo.png');?>" width="190" height="50" alt="Stability" data-retina="true" class="logo_normal"></a>
                        <a href="<?=site_url('index.php');?>"><img src="<?=site_url('img/logo_sticky.png');?>" width="190" height="50" alt="Stability" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="<?=site_url('img/logo_sticky.png');?>" width="270" height="75" alt="Stability" data-retina="true">
                        </div>
                        <a href="<?=site_url('');?>" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('');?>" class="show-submenu">Home</a>
                            </li>                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours Packages <i class="icon-down-open-mini"></i></a>						
							<?php
                                
                                $category_where = array('is_deleted' => 'N', 'is_active' => 'Y');
                                
                                $category_rows_data = getRows(DB_TABLE_PREFIX . 'category', $category_where, "*", 'sort_order');
                                
                                $category_data = $category_rows_data['data'];
                                
                                if ($category_rows_data['total_recs'] > 0) {
                            
                            ?>  
                                <ul>
                                	 <li<?php echo (basename($_SERVER['PHP_SELF']) == 'all_tours_list.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>all_tours_list.php">All tours list</a></li>
                                     
                                <?php
								foreach ($category_data as $side_bar_category) {
			
									?>
                                     <li><a href = "categorywise_tours_list.php?id=<?php echo $side_bar_category['id']; ?>"><?php echo $side_bar_category['title']; ?></a></li>
                                     
                                    <?php
									}				
									?>
                                </ul>
                            <?php } ?>
                            </li>
                             <li <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('');?>about.php" class="show-submenu">About Us </a>                              	
                            </li>
                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'contact_us_1.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('');?>contact_us_1.php" class="show-submenu">Contacts Us</a>								 
                                
                            </li>                            
                           <!-- <li<?php // echo (basename($_SERVER['PHP_SELF']) == 'inquiry.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>inquiry.php"> Inquiry Form </a></li>
                           -->
                            
                           <!-- <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Pages &amp; elements<i class="icon-down-open-mini"></i></a>
                                <div class="menu-wrapper">
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>about.php">About us</a></li>
                                           <li<?php echo (basename($_SERVER['PHP_SELF']) == 'general_page.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>general_page.php">General page</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'tourist_guide.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>tourist_guide.php">Tourist guide</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'cart.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>cart.php">Cart Tours</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'payment.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>payment.php">Payment Tours</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'confirmation.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>confirmation.php">Confirmation Tours</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'cart_hotel.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>cart_hotel.php">Cart Hotel</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'payment_hotel.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>payment_hotel.php">Payment Hotel</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'confirmation_hotel.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>confirmation_hotel.php">Confirmation Hotel</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'wishlist.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>wishlist.php">Wishlist page</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'faq.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>faq.php">Faq</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'pricing_tables.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>pricing_tables.php">Pricing tables</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'contact_us_1.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>contact_us_1.php">Contact us 1</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'contact_us_2.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>contact_us_2.php">Contact us 2</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'blog_right_sidebar.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>blog_right_sidebar.php">Blog</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>blog.php">Blog left sidebar</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'login.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>login.php">Login</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'register.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>register.php">Register</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'invoice.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>invoice.php">Invoice</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == '404.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>404.php">404 Error page</a></li>                                            
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'timeline.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>timeline.php">Tour timeline</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Elements</h3>
                                        <ul>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>index.php"><i class="icon-columns"></i> Header transparent</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'header_plain.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>header_plain.php"><i class="icon-columns"></i> Header plain</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'header_transparent_colored.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>header_transparent_colored.php"><i class="icon-columns"></i> Header transparent colored</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'footer_2.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>footer_2.php"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'icon_pack_1.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>icon_pack_1.php"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'icon_pack_2.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>icon_pack_2.php"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'shortcodes.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>shortcodes.php"><i class="icon-tools"></i> Shortcodes</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'page_with_map.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>page_with_map.php"><i class="icon-map"></i>  Full screen map</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End menu-wrapper -->
                            <!--</li>-->
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <div class="dropdown dropdown-search">
                                <a href="<?=site_url('');?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                <div class="dropdown-menu">
                                    <form action="all_tours_list.php" method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="search" placeholder="Search...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" name="search_submit" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                    </div>
                            </div>
                        </li> 
                    </ul>
                </nav>
            </div>
        </div><!-- container -->

</header><!-- End Header -->
    
    <?php
        
        if($_POST['payment'] == 'spot' && !empty($_SESSION[$_SESSION['Auth_name']]) )
        {
            $name = $_POST['firstname_booking'].' '.$_POST['lastname_booking'];
            $email = $_POST['email_booking'];
            $phone = $_POST['telephone_booking'];
	     $hname = $_POST['hotel_name'];
            $hadd = $_POST['hotel_add'];
            $room = $_POST['room_no'];
            
    ?>
    
  <div class="container" style="margin-top:130px;">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
                                <strong>First Name:</strong>
                                <?php echo $_POST['firstname_booking']; ?>
    			</div>
                        <div class="col-xs-6">
                                <strong>Last Name:</strong>
                                <?php echo $_POST['lastname_booking']; ?>
    			</div>
    			
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
                                <strong>Email:</strong>
                                <?php echo $_POST['email_booking']; ?>
    			</div>
                        <div class="col-xs-6">
                                <strong>Phone:</strong>
                                <?php echo $_POST['telephone_booking']; ?>
    			</div>
                        
    		</div>
		<div class="row">
    			<div class="col-xs-6">
                                <strong>Hotel Name:</strong>
                                <?php echo $_POST['hotel_name']; ?>
    			</div>
                        <div class="col-xs-6">
                                <strong>Hotel Address</strong>
                                <?php echo $_POST['hotel_add']; ?>
    			</div>
                        
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
                                <strong>Room No:</strong>
                                <?php echo $_POST['room_no']; ?>
    			</div>
                        
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-sm-offset-2 col-sm-7 col-xs-12">
    		<div class="panel panel-primary filterable">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    
                        <?php                           
                            $grand_total = 0;
                            
                            $email_content = '
                            			<p> Here are the details of the Shopping</p>
                            			<table class="table" cellspacing="0" cellpadding="5" border="1" width="700">
                                            <tr>
                                                <td> Name </td>
                                                <td>'.$name.'</td>
                                            </tr>
                                            <tr>
                                                <td> Email </td>
                                                <td>'.$email.'</td>
                                            </tr>
                                            <tr>
                                                <td> Phone </td>
                                                <td>'.$phone.'</td>
                                            </tr>
											<tr>
                                                <td> Hotel Name </td>
                                                <td>'.$hname.'</td>
                                            </tr>
                                            <tr>
                                                <td> Hotel Address </td>
                                                <td>'.$hadd.'</td>
                                            </tr>';
                            
                            foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                            {
                                if(($item['pid'] != '') && ($item['pid'] != 'null'))
                                {
                                    $others = 0;
                                    $total = 0;
                                    $sub=0;
                                    $pid =$item['pid'];
                                    $Total_aprice = $item['adult_price'] * $item['a_qty'];
                                    $Total_cprice = $item['child_price'] * $item['c_qty'];
                                    $total = (($item['adult_price'] * $item['a_qty'])
                                        + ($item['child_price'] * $item['c_qty']));  
                                    $date = date('Y-m-d', strtotime($item['date']));  
                                    $time = date('H:i:s', strtotime($item['time']));

                                    $others = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']+ $item['2way']['price']; 
                                    $date_added =  date("Y-m-d H:i:s");
                                    
                                    if($item['guide']['price'])
                                    { $guide = 1; }
                                    if($item['pickup']['price'])
                                    { $pickup = 1; }
                                    if($item['insurance']['price'])
                                    { $insurance = 1; }
                                    if($item['coffee']['price'])
                                    { $coffee = 1; }
                                    if($item['welcome']['price'])
                                    { $welcome = 1; }
                                    if($item['dinner']['price'])
                                    { $dinner = 1; }
                                    if($item['bike']['price'])
                                    { $bike = 1; }
                                    if($item['2way']['price'])
                                    { $two_way = 1; }

                                    $product_total = ($total + $others) * $item['pkg'] ;
                                
                    $order_ins ="INSERT INTO `order`(`full_name`, `email`, `mobile`, `hotel_name`, `hotel_address`,`room_no`, `total_adult`, `total_child`, `tour_date`, "
                                        . "`pickup_time`, `product_id`, `product_name`, `per_adult_price`, `per_child_price`, `total_adult_price`, "
                                        . "`total_child_price`, `total_price`, `payment_mod`, `status`, `added`,`guide`,`pickup`,`insurance`,`coffee`, "
                                        . "`welcome`, `dinner`, `bike`, `two_way`, `is_deleted` ) values"
                              . "('".$name."','".$email."','".$phone."','".$hname."','".$hadd."','".$room."','".$item['a_qty']."','".$item['c_qty']."','".$date."', '".$time
                                        ."','".$item['pid']."','".$item['name']."','".$item['adult_price']."','".$item['child_price']
                                        ."','".$Total_aprice."','".$Total_cprice."','".$product_total."','"."on_spot','new','".$date_added 
                                        ."','".$guide."','".$pickup."','".$insurance."','".$coffee."','".$welcome."','".$dinner."','".$bike."','".$two_way."','N')";
                                        
                                $res = mysql_query($order_ins);
                                $orderid = mysql_insert_id();
                                
                                if($res)
                                {
                                    $del = "DELETE from wishlist where id=".$pid;
                                    $del_qry = Query($del);
                                    
                                }else
                                {
                                	"<h4>Sorry order has failed due to some unknown errors</h4>";
                                	exit;
                                }
                                
                              
                        ?>        
                
                            <tbody>


                                <tr class="filters" style="background-color:#B2E0C2">
                                    
                                    <td style="font-weight:bold; font-size:16px"><strong>Order ID</strong></td>
                                    <td><?php echo $orderid ?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>item</strong></td>
                                    <td><?php echo $item['name']?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Original Price per adult</strong></td>
                                    <td><?php echo $item['org_price']; ?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Promo Price per adult</strong></td>
                                    <td><?php echo $item['promo_adult']; ?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>price</strong></td>
                                    <td><?php echo $total; ?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Adults</strong></td>
                                    <td><?php echo $item['a_qty']?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Childs</strong></td>
                                    <td><?php echo $item['c_qty']?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Date/Time</strong></td>
                                    <td> <?php echo $item['date'].' '.$item['time']?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Quantity</strong></td>
                                    <td><?php echo $item['pkg']?></td>
                                </tr>
                                <tr class="filters">
                                    
                                    <td style="font-weight:bold"><strong>Others</strong></td>
                                    <td><?php echo $others; ?></td>
                                </tr>
                                
                                
                                   <?php                     
                            $email_content .= "
                                            <tr>
                                                <td> <strong>Product Name </strong></td>
                                                <td>". $item['name']." </td>
                                            </tr>
                                            <tr>
                                                <td> Quantity </td>
                                                <td>".$item['pkg']." </td>
                                            </tr>
                                            <tr>
                                                <td> Adult </td>
                                                <td>".$item['a_qty']." </td>
                                            </tr>
                                            <tr>
                                                <td> child </td>
                                                <td>".$item['c_qty']." </td>
                                            </tr>
                                            <tr>
                                                <td> original price per adult </td>
                                                <td>".$item['org_price']." </td>
                                            </tr>
                                            <tr>
                                                <td> promo price per adult</td>
                                                <td>".$item['promo_adult']." </td>
                                            </tr>
                                            <tr>
                                                <td> date-time </td>
                                                <td>".$date.'-'.$time." </td>
                                            </tr>"; 
                                        if($item['guide']['name'])
                                        {
                                            echo '<tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['guide']['name'].'</strong></td>
                                                    <td>'.$item['guide']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['guide']['name']." </td>
                                                           <td>".$item['guide']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['pickup']['name'])
                                        {
                                            echo '<tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['pickup']['name'].'</strong></td>
                                                    <td>'.$item['pickup']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['pickup']['name']." </td>
                                                           <td>".$item['pickup']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['insurance']['name'])
                                        {
                                            echo '<tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['insurance']['name'].'</strong></td>
                                                    <td>'.$item['insurance']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['insurance']['name']." </td>
                                                           <td>".$item['insurance']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['coffee']['name'])
                                        {
                                             echo '<tr class="filters">
                                                  
                                                    <td style="font-weight:bold"><strong>'.$item['coffee']['name'].'</strong></td>
                                                    <td>'.$item['coffee']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['coffee']['name']." </td>
                                                           <td>".$item['coffee']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['welcome']['name'])
                                        {
                                            echo '<tr class="filters">
                                                   
                                                    <td style="font-weight:bold"><strong>'.$item['welcome']['name'].'</strong></td>
                                                    <td>'.$item['welcome']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['welcome']['name']." </td>
                                                           <td>".$item['welcome']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['dinner']['name'])
                                        {
                                            echo '<tr class="filters">
                                                    
                                                    <td style="font-weight:bold"><strong>'.$item['dinner']['name'].'</strong></td>
                                                    <td>'.$item['dinner']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['dinner']['name']." </td>
                                                           <td>".$item['dinner']['price']." </td>
                                                       </tr>";
                                        }
                                        if($item['bike']['name'])
                                        {
                                            echo '<tr class="filters">
                                                   
                                                    <td style="font-weight:bold"><strong>'.$item['bike']['name'].'</strong></td>
                                                    <td>'.$item['bike']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['bike']['name']." </td>
                                                           <td>".$item['bike']['price']." </td>
                                                       </tr>";
                                        }
                                        
                                        if($item['2way']['name'])
                                        {
                                            echo '<tr class="filters">
                                                   
                                                    <td style="font-weight:bold"><strong>'.$item['2way']['name'].'</strong></td>
                                                    <td>'.$item['2way']['price'].'</td>
                                                </tr>';
                                            $email_content .= "
                                                       <tr>
                                                           <td>".$item['2way']['name']." </td>
                                                           <td>".$item['2way']['price']." </td>
                                                       </tr>";
                                        }
                                        $sub = ($total + $others) * $item['pkg'];
                                        $email_content .= "
                                        	
                                                       <tr>
                                                           <td>Sub Total </td>
                                                           <td>".$sub." </td>
                                                       </tr>";
                                   ?>    
                                   		<tr class="filters">
                                    
		                                    <td style="font-weight:bold"><strong>Sub Total</strong></td>
		                                    <td><?php echo ($total + $others) *  $item['pkg'] ; ?></td>
		                                 </tr>
                                                       
                            <?php 
                                $grand_total = $grand_total + (($total + $others)* $item['pkg']) ;
                                }
                                
                                
                                
                            }       
                                $email_content .= "
                                    <tr>
                                        <td> Total </td>
                                        <td>". $grand_total." </td>
                                    </tr>
                                    </table>"; 
                            ?>                          
                                                <hr> 
    							
                                                        <tr class="filters" style="font-size:16px">
                                                            
                                                            <td style="font-weight:bold"><strong>Net Total</strong></td>
                                                            <td><?php echo $grand_total ?></td>
                                                        </tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
                   
                    
    		</div>
    	</div>
    </div>
</div>
    	
    	    
    	
    	
    	<?php 
        	  
                } 
                else if($_POST['payment'] == 'paypal' && (!empty($_SESSION[$_SESSION['Auth_name']])))
                {
                
               		$name = $_POST['firstname_booking'].' '.$_POST['lastname_booking'];
                            $email = $_POST['email_booking'];
                            $phone = $_POST['telephone_booking'];
                            $hname = $_POST['hotel_name'];
                            $hadd = $_POST['hotel_add'];
                            $room = $_POST['room_no'];

                        ?>
    
                        <?php                           
                            $grand_total = 0;
                            
                            foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                            {
                                if(($item['pid'] != '') && ($item['pid'] != 'null'))
                                {
                                    $others = 0;
                                    $total = 0;
                                    $sub=0;
                                    $pid =$item['pid'];
                                    $Total_aprice = $item['adult_price'] * $item['a_qty'];
                                    $Total_cprice = $item['child_price'] * $item['c_qty'];
                                    $total = (($item['adult_price'] * $item['a_qty'])
                                        + ($item['child_price'] * $item['c_qty']));  
                                    $date = date('Y-m-d', strtotime($item['date']));  
                                    $time = date('H:i:s', strtotime($item['time']));

                                    $others = $item['guide']['price'] + $item['pickup']['price'] +
                                    $item['insurance']['price'] + $item['coffee']['price'] +
                                    $item['welcome']['price'] + $item['dinner']['price'] + $item['bike']['price']+ $item['2way']['price']; 
                                    $date_added =  date("Y-m-d H:i:s");
                                    
                                    if($item['guide']['price'])
                                    { $guide = 1; }
                                    if($item['pickup']['price'])
                                    { $pickup = 1; }
                                    if($item['insurance']['price'])
                                    { $insurance = 1; }
                                    if($item['coffee']['price'])
                                    { $coffee = 1; }
                                    if($item['welcome']['price'])
                                    { $welcome = 1; }
                                    if($item['dinner']['price'])
                                    { $dinner = 1; }
                                    if($item['bike']['price'])
                                    { $bike = 1; }
                                    if($item['2way']['price'])
                                    { $two_way = 1; }

                                    $product_total = ($total + $others) * $item['pkg'] ;
                                
                    $order_ins ="INSERT INTO `order`(`full_name`, `email`, `mobile`, `hotel_name`, `hotel_address`,`room_no`, `total_adult`, `total_child`, `tour_date`, "
                                        . "`pickup_time`, `product_id`, `product_name`, `per_adult_price`, `per_child_price`, `total_adult_price`, "
                                        . "`total_child_price`, `total_price`, `payment_mod`, `status`, `added`,`guide`,`pickup`,`insurance`,`coffee`, "
                                        . "`welcome`, `dinner`, `bike`, `two_way`, `is_deleted` ) values"
                                        ."('".$name."','".$email."','".$phone."','".$hname."','".$hadd."','".$room."','".$item['a_qty']."','".$item['c_qty']."','".$date."', '".$time
                                        ."','".$item['pid']."','".$item['name']."','".$item['adult_price']."','".$item['child_price']
                                        ."','".$Total_aprice."','".$Total_cprice."','".$product_total."','"."on_spot','new','".$date_added 
                                        ."','".$guide."','".$pickup."','".$insurance."','".$coffee."','".$welcome."','".$dinner."','".$bike."','".$two_way."','N')";
                                        
                                $res = mysql_query($order_ins);
                                $orderid = mysql_insert_id();
                                
                                if($res)
                                {
                                    $del = "DELETE from wishlist where id=".$pid;
                                    $del_qry = Query($del);
                                    
                                }else
                                {
                                	"<h4>Sorry order has failed due to some unknown errors</h4>";
                                	exit;
                                }
                        
                                $grand_total = $grand_total + (($total + $others)* $item['pkg']) ;
                                }
                                                   
                            }       
                              
              /////////////////////////// PAypal starts //////////////// 
                            
                    
                    $domain = (PAYPAL_LIVE) ? "www.paypal.com" : "www.sandbox.paypal.com"; 
        ?>
            <form action="https://<?php echo $domain; ?>/cgi-bin/webscr" method="post" id="paypal_frm" name="paypal_frm"/>

                <input type="hidden" name="cmd" value="_cart"/> 

                <input type="hidden" name="upload" value="1"/> 

                <input type="hidden" name="no_shipping" value="1"/> 

                <input type="hidden" name="no_note" value="1"/> 

                <input type="hidden" name="business" value="<?=PAYPAL_EMAIL_ADDRESS?>"/>

                <input type="hidden" name="notify_url" value="<?=site_url('paypal_ipn.php')?>"/>  

                <input type="hidden" name="return" value="<?=site_url('order_success.php')?>"/>

                <input type="hidden" name="cancel_return" value="<?=site_url('order_ancel.php')?>"/>

                <input type="hidden" name="item_name_1" value="Singapurdeals Booking"/>

                <input type="hidden" name="currency_code" value="<?=PAYPAL_CURRENCY_CODE?>"/>

                <!--input type="hidden" name="lc" value="USD"/--> 

                <input type="hidden" name="image_url" value="<?=site_url()?>/images/logo.png"/>

                <input type="hidden" name="invoice" value="<?= $orderid ?>"/>

                <input type="hidden" name="custom" value="<?=md5($orderid.$grand_total.PAYPAL_CURRENCY_CODE.PAYPAL_EMAIL_ADDRESS.ORDER_SALT)?>"/>

                <input type="hidden" name="amount_1" value="<?=$grand_total?>"/>
                

            </form>
          
                                
          <?php }else
          {
              header("Location:index.php");
          }
            $to = $email;
            $subject = "Singaporedeals4u Order confirmation";
            $customer = "Thanks you for your order. Your order details are below.<br>";
            $supplier = "A new order has been confirmed on Singaporedeals4u website.<br>";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: Singaporedeals4u <order@singaporedeals4u.com>' . "\r\n";
            //$headers .= 'Cc: myboss@example.com' . "\r\n";

           
            
            // Mail it to Admin
	    $adminDetailsRes = getRows(DB_TABLE_PREFIX .'admin_user', array('id' => 1));
	    $adminDetails = $adminDetailsRes['data'];
	    $adminDetails = $adminDetails[0];
	    if(!empty($email_content)){
	    	mail($to,$subject,$customer.$email_content,$headers);
	    	mail($adminDetails['email'], $subject, $supplier.$email_content, $headers);
	    }
            if(($send) && ($_POST['payment'] == 'spot'))
            {
            	echo '<div class=" panel-heading" style="text-align:center" >
                	 <h4>Thanks for shopping with us. Looking forward for your positive feedback.</h4>
                	 <h5>Email has been sent to your given email address. If not found in inbox, then please check your spam/junk folder.</h5>
                	  <br />
               		 <a style="width:30%; margin-top: 30px;" href="index.php" class="col-sm-offset-4 btn_full" ><i class="icon-right"></i> Continue shopping</a>
               
            		</div><br><br>';
            }    
          unset($_SESSION[$_SESSION['Auth_name']]);
          ?>
    

  </body>
  <?php if($_POST['payment'] == 'paypal'){ ?>
            <script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
            <script type="text/javascript">

                $(document).ready(function(){

                    $("#paypal_frm").submit();

                });

            </script>

        <?php } ?>
</html>