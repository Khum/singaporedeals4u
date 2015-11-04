        <div id="top_line">
            <div class="container">
                <div class="row">
                   <div class="col-md-7 col-sm-6 col-xs-7">
                       <div class="col-md-4 col-sm-4 col-xs-12">
                            <i class="icon-phone"></i><strong>0065 8161 5060 </strong>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-6 hidden-xs" style="text-align:right">
                            <p>
                                <span style="color:#FF3300">Best </span><span style="color:#565a5c"> Tours </span><span style="color:#FF3300"> and </span>
                                <span style="color:#565a5c">Attractions </span><span style="color:#FF3300"> Deals </span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-5 col-sm-6 col-xs-5">
                        <ul id="top_links">
                	<li>
                            
                        <div>
                            <a href="https://www.facebook.com/Singaporedeals4u" id="facebook_link"><strong>16k likes</strong></a>
                            
                        </div> <!-- End Dropdown access -->
                        
                    </li>
                            <?php if($_SESSION['Auth_user'] || $_SESSION['Auth_user'] == 'user')
                            {
                            
                            ?>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link"><strong><?php echo $_SESSION['Auth_username']; ?></strong></a>
                                    <ul class="dropdown-menu" role="menu">

                                        <li class=""><a href="<?php echo site_url('logout.php');?>" style="color:#000"><i class="icon-power-outline"></i>Logout</a></li>

                                    </ul>
                                </div> <!-- End Dropdown access -->
                                
                            </li>
                           
                            <?php }else  { ?>
                            
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="<?php echo site_url('');?>" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Customer Sign-in</a>                                   
                                    <div class="dropdown-menu">
<!--                                        <a id="c-btn" class="btn_1 cherry" style="font-size:10px; padding-left: 8px; padding-right: 8px; color:#fff;">Customer Sign-in</a>
                                        <a id="a-btn" class="btn_1 cherry" style="font-size:10px; padding-left: 8px; padding-right: 8px; color:#fff;">Agent Sing-in</a>-->
<!--                                        <div id="customer-form" style="display:none">-->
                                        <div id="customer-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 5px;">
                                                <img width="170" height="55" class="logo_normal" data-retina="true" alt="Stability" src="img/logo.png">
                                            </div>
                                          
                                        
                                            <div id="failure" class=" col-sm-12 col-md-12 col-xs-12" style="font-size:12px;display:none;margin-top: 0px;" >
                                                <div  class="alert alert-danger" >
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                        ×</button>
                                                 
                                                    <p>
                                                        Either email or password is wrong. Try again</p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group">
<!--                                            <label style="color:black">Agent Sign In</label>     -->
                                            <input type="text" class="form-control" id="email1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password1" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="<?php echo site_url('forgot_password.php');?>">Forgot password?</a>
                                        <input type="submit" name="" value="Sign in" id="customer_signin" class="button_drop">
                                        <a href="<?= site_url('signup.php') ?>"><input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline"></a>
                                        </div>
                                        
<!--                                        <div id="agent-form" style="display:none">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 5px;">
                                                <img width="170" height="55" class="logo_normal" data-retina="true" alt="Stability" src="img/logo.png">
                                            </div>
                                          
                                        
                                            <div id="failure" class=" col-sm-12 col-md-12 col-xs-12" style="font-size:12px;display:none;margin-top: 0px;" >
                                                <div  class="alert alert-danger" >
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                        ×</button>
                                                 
                                                    <p>
                                                        Either email or password is wrong. Try again</p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                            <label style="color:black">Customer Sign In</label>     
                                            <input type="text" class="form-control" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="<?php echo site_url('forgot_password.php');?>">Forgot password?</a>
                                        <input type="submit" name="" value="Sign in" id="agent_signin" class="button_drop">
                                        <a href="<?= site_url('signup.php') ?>"><input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline"></a>
                                        </div>-->
                                    </div>                                    
                                </div><!-- End Dropdown access -->
                            </li>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="<?php echo site_url('');?>" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Agent Sign-in</a>                                    
                                    <div class="dropdown-menu">
<!--                                        <a id="c-btn" class="btn_1 cherry" style="font-size:10px; padding-left: 8px; padding-right: 8px; color:#fff;">Customer Sign-in</a>
                                        <a id="a-btn" class="btn_1 cherry" style="font-size:10px; padding-left: 8px; padding-right: 8px; color:#fff;">Agent Sing-in</a>
                                        <div id="customer-form" style="display:none">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 5px;">
                                                <img width="170" height="55" class="logo_normal" data-retina="true" alt="Stability" src="img/logo.png">
                                            </div>
                                          
                                        
                                            <div id="failure" class=" col-sm-12 col-md-12 col-xs-12" style="font-size:12px;display:none;margin-top: 0px;" >
                                                <div  class="alert alert-danger" >
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                        ×</button>
                                                 
                                                    <p>
                                                        Either email or password is wrong. Try again</p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group">
                                            <label style="color:black">Agent Sign In</label>     
                                            <input type="text" class="form-control" id="email1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password1" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="<?php echo site_url('forgot_password.php');?>">Forgot password?</a>
                                        <input type="submit" name="" value="Sign in" id="customer_signin" class="button_drop">
                                        <a href="<?= site_url('signup.php') ?>"><input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline"></a>
                                        </div>
                                        -->
                                        <div id="agent-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 5px;">
                                                <img width="170" height="55" class="logo_normal" data-retina="true" alt="Stability" src="img/logo.png">
                                            </div>
                                          
                                        
                                            <div id="failure" class=" col-sm-12 col-md-12 col-xs-12" style="font-size:12px;display:none;margin-top: 0px;" >
                                                <div  class="alert alert-danger" >
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                        ×</button>
                                                 
                                                    <p>
                                                        Either email or password is wrong. Try again</p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group">
<!--                                            <label style="color:black">Customer Sign In</label>     -->
                                            <input type="text" class="form-control" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="<?php echo site_url('forgot_password.php');?>">Forgot password?</a>
                                        <input type="submit" name="" value="Sign in" id="agent_signin" class="button_drop" style="pointer-events: none;">
                                        <a href="<?= site_url('signup.php') ?>" style="pointer-events: none;"><input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline"></a>
                                        </div>
                                    </div>                                    
                                </div><!-- End Dropdown access -->
                            </li>
                            <?php } ?>
                             <?php if($_SESSION['Auth_user'] || $_SESSION['Auth_user'] == 'user')
                            {
                            
                            ?>
                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'wishlist.php' ? ' class="active"':'') ?>><a href="<?php echo site_url('');?>wishlist.php" id="wishlist_link">Wishlist</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="<?=site_url('index.php');?>"><img src="<?=site_url('img/logo_sticky.png');?>" width="220" height="60" alt="Stability" data-retina="true" class="logo_normal"></a>
                        <a href="<?=site_url('index.php');?>"><img src="<?=site_url('img/logo_sticky.png');?>" width="220" height="60" alt="Stability" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="<?=site_url('img/logo_sticky.png');?>" width="210" height="56" alt="Stability" data-retina="true">
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
                             <!-- <li <?php // echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('');?>about.php" class="show-submenu">About Us </a>                              	
                            </li> -->
                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'team.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('');?>team.php" class="show-submenu">Our Team</a>								 
                                
                            </li> 
                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'contact_us_1.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('');?>contact_us_1.php" class="show-submenu">Contacts Us</a>								 
                                
                            </li> 
                            
                            <li<?php  echo (basename($_SERVER['PHP_SELF']) == 'private-tour.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>private-tour.php"> Inquiry</a></li>
                            <li<?php  echo (basename($_SERVER['PHP_SELF']) == 'partner_registration.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>partner_registration.php"> Travel Agents</a></li> 
                                                    
                           <!-- <li<?php // echo (basename($_SERVER['PHP_SELF']) == 'inquiry.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>inquiry.php"> Inquiry</a></li>
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
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'signup.php' ? ' class="active"':'') ?>><a href="<?=site_url('');?>signup.php">Register</a></li>
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
                        </li>                         <li>
                            <?php
                            $count = 0;
                                foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                                {
                                    if(($item['pid'] != '') && ($item['pid'] != 'null'))
                                    {
                                        $count++;
                                    }
                                }
                            ?>
                            <div class="dropdown dropdown-cart">
                                <a href="<?php echo site_url('');?>" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class=" icon-basket-1"></i>Cart ( <?php if($_SESSION['Auth_name']) { echo $count; } ?> ) </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <?php    
                                    
                                    $Shop_total=0;
                                     $cart_qty = count($_SESSION[$_SESSION['Auth_name']]);
                                        foreach($_SESSION[$_SESSION['Auth_name']] as $item )
                                        {
                                            if(($item['pid'] != '') && ($item['pid'] != 'null'))
                                            {
                                                $total = (($item['adult_price'] * $item['a_qty'])
                                                        + ($item['child_price'] * $item['c_qty']));   
                                                        
                                                 $others = $item['guide']['price'] + $item['pickup']['price'] +
						                $item['insurance']['price'] + $item['coffee']['price'] +
						                $item['welcome']['price'] + $item['dinner']['price'] + 
						                $item['bike']['price'] + $item['2way']['price'];              
                                    ?>
                                    <li>
                                        <div class="image"><img class="thum_img" src="img/products/<?php echo $item['image'] ?>" alt=""></div>
                                        <strong>
					<a href="<?php echo site_url('cart.php?prodid='.$item['pid']);?>"><?php echo $item['name']; ?></a>
                                            <span id="head_cart<?php echo $item['pid']; ?>"><?php echo $item['pkg']?> </span> x
                                            <span id="pkg_price<?php echo $item['pid']; ?>"><?php echo $total =  ($total)+$others ?></span></strong>
                                        <!---a href="<?php echo site_url('');?>" class="action"><i class="icon-trash"></i></a--->
                                    </li>
                                        <?php 
                                                $Shop_total = $Shop_total + ($item['pkg'] * $total);
                                            }
                                        } ?>
                                    <li>
                                        <div>Total : SGD <span id="cart_total"><?php echo $Shop_total; ?></span></div>
                                     <?php
                                        if($cart_qty > 0)
                                        {
                                    ?>     
                                        <a href="<?php echo site_url('cart.php');?>" class="button_drop">Go to cart</a>
                                        <a href="<?php echo site_url('payment.php');?>" class="button_drop outline">Check out</a>
                                       
                                     <?php } ?>    
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->