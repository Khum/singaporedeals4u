<!--        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0065-907886618/strong></div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <?php if($_SESSION['Auth_user'] || $_SESSION['Auth_user'] == 'user')
                            {
                            
                            ?>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link"><strong><?php echo $_SESSION['Auth_username']; ?></strong></a>
                                    <ul class="dropdown-menu" role="menu">

                                        <li class=""><a href="<?php echo site_url('kiosk/logout.php');?>" style="color:#000"><i class="icon-power-outline"></i>Logout</a></li>

                                    </ul>
                                </div>  End Dropdown access 
                                
                            </li>
                           
                            <?php }else  { ?>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="<?php echo site_url('kiosk/');?>" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 5px;">
                                                <img width="180" height="60" class="logo_normal" data-retina="true" alt="Stability" src="img/logo.png">
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
                                            <input type="text" class="form-control" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="<?php echo site_url('kiosk/forgot_password.php');?>">Forgot password?</a>
                                        <input type="submit" name="" value="Sign in" id="signinbutton" class="button_drop">
                                        <a href="<?= site_url('kiosk/register.php') ?>"><input type="submit" name="" value="Sign up" id="Sign_up" class="button_drop outline"></a>
                                    </div>
                                </div> End Dropdown access 
                            </li>
                            <?php } ?>
                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'wishlist.php' ? ' class="active"':'') ?>><a href="<?php echo site_url('kiosk/');?>wishlist.php" id="wishlist_link">Wishlist</a></li>
                            
                        </ul>
                    </div>
                </div> End row 
            </div> End container
        </div> End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="<?=site_url('kiosk/index.php');?>"><img src="<?=site_url('kiosk/img/logo_sticky.png');?>" width="220" height="60" alt="Stability" data-retina="true" class="logo_normal"></a>
                        <a href="<?=site_url('kiosk/index.php');?>"><img src="<?=site_url('kiosk/img/logo_sticky.png');?>" width="220" height="60" alt="Stability" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="<?=site_url('kiosk/img/logo_sticky.png');?>" width="220" height="60" alt="Stability" data-retina="true">
                        </div>
                        <a href="<?=site_url('kiosk/');?>" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <a class="btn_1 white menubtn cherry" href="index.php">Home</a>
                            <a class="btn_1 white menubtn cherry" href="all_tours_list.php">Products</a>
                            <a class="btn_1 white menubtn cherry" href="contact_us_1.php">Contact Us</a>
                            <button type="button" class="btn_1 white menubtn cherry" data-toggle="modal" data-target="#myModal"> Price List </button>
                            
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button id="close_modal" class="btn btn-default" style="float: right;font-size: 14px;padding: 10px margin-bottom:10px;" aria-label="Close" data-dismiss="modal" type="button">Close</button>
				        <h4 class="modal-title" id="myModalLabel">Price List</h4>
				      </div>
				      <div class="modal-body">
				          <img src="img/PriceList.gif" class="img-responsive pricelist">
				      </div>
				        <br>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
				      </div>
				    </div>
				  </div>
				</div>
<!--                        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('kiosk/');?>" class="show-submenu">Home</a>
                            </li>                            
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours Packages <i class="icon-down-open-mini"></i></a>						
							<?php
                                
                                $category_where = array('is_deleted' => 'N', 'is_active' => 'Y');
                                
                                $category_rows_data = getRows(DB_TABLE_PREFIX . 'category', $category_where, "*", 'sort_order');
                                
                                $category_data = $category_rows_data['data'];
                                
                                if ($category_rows_data['total_recs'] > 0) {
                            
                            ?>  
                                <ul>
                                	 <li<?php echo (basename($_SERVER['PHP_SELF']) == 'all_tours_list.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>all_tours_list.php">All tours list</a></li>
                                     
                                <?php
								foreach ($category_data as $side_bar_category) {
			
									?>
                                     <li><a href = "categorywise_tours_list.php?id=<?php echo $side_bar_category['id']; ?>"><?php echo $side_bar_category['title']; ?></a></li>
                                     
                                    <?php
									}				
									?>
                                </ul>
                            <?php } ?>
                            </li>-->
                             <!-- <li <?php // echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('kiosk/');?>about.php" class="show-submenu">About Us </a>                              	
                            </li> -->
<!--                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'contact_us_1.php' ? ' class="active"':'') ?> class="submenu">
                                <a href="<?=site_url('kiosk/');?>contact_us_1.php" class="show-submenu">Contacts Us</a>								 
                                
                            </li> 
                            <li<?php  echo (basename($_SERVER['PHP_SELF']) == 'private-tour.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>private-tour.php"> Inquiry</a></li>
                            <li<?php  echo (basename($_SERVER['PHP_SELF']) == 'partner_registration.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>partner_registration.php"> Travel Agents</a></li> -->
                                                    
                           <!-- <li<?php // echo (basename($_SERVER['PHP_SELF']) == 'inquiry.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>inquiry.php"> Inquiry</a></li>
                           -->
                            
                           <!-- <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Pages &amp; elements<i class="icon-down-open-mini"></i></a>
                                <div class="menu-wrapper">
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'about.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>about.php">About us</a></li>
                                           <li<?php echo (basename($_SERVER['PHP_SELF']) == 'general_page.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>general_page.php">General page</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'tourist_guide.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>tourist_guide.php">Tourist guide</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'cart.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>cart.php">Cart Tours</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'payment.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>payment.php">Payment Tours</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'confirmation.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>confirmation.php">Confirmation Tours</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'cart_hotel.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>cart_hotel.php">Cart Hotel</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'payment_hotel.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>payment_hotel.php">Payment Hotel</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'confirmation_hotel.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>confirmation_hotel.php">Confirmation Hotel</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'wishlist.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>wishlist.php">Wishlist page</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'faq.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>faq.php">Faq</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'pricing_tables.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>pricing_tables.php">Pricing tables</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'contact_us_1.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>contact_us_1.php">Contact us 1</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'contact_us_2.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>contact_us_2.php">Contact us 2</a></li>
                                             <li<?php echo (basename($_SERVER['PHP_SELF']) == 'blog_right_sidebar.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>blog_right_sidebar.php">Blog</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>blog.php">Blog left sidebar</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'login.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>login.php">Login</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'register.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>register.php">Register</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'invoice.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>invoice.php">Invoice</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == '404.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>404.php">404 Error page</a></li>                                            
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'timeline.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>timeline.php">Tour timeline</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Elements</h3>
                                        <ul>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>index.php"><i class="icon-columns"></i> Header transparent</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'header_plain.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>header_plain.php"><i class="icon-columns"></i> Header plain</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'header_transparent_colored.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>header_transparent_colored.php"><i class="icon-columns"></i> Header transparent colored</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'footer_2.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>footer_2.php"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'icon_pack_1.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>icon_pack_1.php"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'icon_pack_2.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>icon_pack_2.php"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'shortcodes.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>shortcodes.php"><i class="icon-tools"></i> Shortcodes</a></li>
                                            <li<?php echo (basename($_SERVER['PHP_SELF']) == 'page_with_map.php' ? ' class="active"':'') ?>><a href="<?=site_url('kiosk/');?>page_with_map.php"><i class="icon-map"></i>  Full screen map</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End menu-wrapper -->
                            <!--</li>-->
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <div class="dropdown dropdown-search">
                                <!--<a href="<?=site_url('kiosk/');?>" class="btn_1 green dropdown-toggle btn_hover" data-toggle="dropdown"><i class="icon-search"></i>Search</a>-->
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
                                <a href="<?php echo site_url('kiosk/');?>" class="btn_1 green dropdown-toggle btn_hover" data-toggle="dropdown">
                                <i class=" icon-basket-1"></i><span id="cart_header" >Cart ( <?php if($_SESSION['Auth_name']) { echo $count; } ?> ) </span></a>
                                <ul class="dropdown-menu" id="cart_items" style="width: 320px !important;font-size:14px !important;">
                                    <?php    
                                    
                                    $Shop_total=0;
                                    $counter =0;
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
					<a href="<?php echo site_url('kiosk/cart.php?prodid='.$item['pid']);?>"><?php echo $item['name']; ?></a>
                                            <span id="head_cart<?php echo $item['pid']; ?>"><?php echo $item['pkg']?> </span> x
                                            <span id="pkg_price<?php echo $item['pid']; ?>"><?php echo $total =  ($total)+$others ?></span></strong>
                                        <!---a href="<?php echo site_url('kiosk/');?>" class="action"><i class="icon-trash"></i></a--->
                                    </li>
                                        <?php 
                                                $Shop_total = $Shop_total + ($item['pkg'] * $total);
                                            }
                                            $counter++;
                                        } ?>
                                    <li>
                                        <div>Total : SGD <span id="cart_total"><?php echo $Shop_total; ?></span></div>
                                     <?php
                                        if($counter > 0)
                                        {
                                    ?>     
                                        <a href="<?php echo site_url('kiosk/cart.php');?>" class="btn-cart button_drop">Go to cart</a>
                                        <a href="<?php echo site_url('kiosk/payment.php');?>" class="btn-cart button_drop outline" style="margin-left:26px">Check out</a>
                                        <a onclick="return empty_cart()" class="button_drop outline" style="font-size: 14px !important;line-height: 2.5em !important;margin-top:12px;width:100%"><div id="progress" title="Code: 0xe802" class="the-icons" style="width:100%;padding: 0px !important; display:none; font-size:16px"><i class="icon-spin5 animate-spin"></i> 
                                            <span class="i-name"></span><span class="i-code"></span></div>Clear Cart & Start Over
                                        </a>
                                     <?php } ?>    
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->