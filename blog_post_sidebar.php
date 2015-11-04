<aside class="col-md-3 add_bottom_30">

				<div class="widget">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
						<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
						</span>
					</div><!-- /input-group -->
				</div><!-- End Search -->
                
                <hr>
                               
				<div class="widget" id="cat_blog">
					<h4>Categories</h4>
                                      <?php 
                                            $category_where = array('is_deleted' => 'N', 'is_active' => 'Y');				
                                            $category_rows_data = getRows(DB_TABLE_PREFIX . 'blog_cat', $category_where, "*");
                                            $category_data = $category_rows_data['data'];
                                            if ($category_rows_data['total_recs'] > 0) {			
                                      ?>  
					<ul>
                                             <?php					
                                            foreach ($category_data as $side_bar_category) {
                                            ?>
                                            <li><a href="blog.php?cat=<?php echo $side_bar_category['blog_category']; ?>"><i class="icon_set_1_icon-51"></i><?php echo $side_bar_category['blog_category']; ?> </a></li>
                                            
                                            <?php } ?>
                                            
                                        </ul>
                                            <?php } ?>
				</div><!-- End widget -->
 
               <hr> <?php   $sort_order = "date = '0', date";
                            $where = array('is_deleted' => 'N', 'is_active' => 'Y');
                            $rows_data = getorderRows(DB_TABLE_PREFIX . 'blog', $where, '*', $sort_order, '', '', 'Y', '4');
                            $product_data = $rows_data['data'];
                            ?>
                		<div class="widget">
					<h4>Recent post</h4>
					<ul class="recent_post">
                            <?php if ($rows_data['total_recs'] > 0) { ?>
                            <?php foreach ($product_data as $prod) {extract($prod);                             
                                 $title_arry = explode(" ",$title);                                
                                $blog_title =  implode("-",$title_arry);
                            ?>
						<li>
						<i class="icon-calendar-empty"></i> <?php echo $dat = date("dS M, Y", strtotime($date)); ?>
						<div><a href="blog_post.php?id=<?php echo $id; ?>/<?php echo $blog_title; ?>"><?php echo $meta_description;?></a></div>
						</li>
                            <?php } ?>	
					</ul>
				</div><!-- End widget -->
                            <?php } ?>
                <hr>
               
				<div class="widget tags">
					<h4>Tags</h4>
					<a href="#">Lorem ipsum</a>
					<a href="#">Dolor</a>
					<a href="#">Long established</a>
					<a href="#">Sit amet</a>
					<a href="#">Latin words</a>
					<a href="#">Excepteur sint</a>
				</div><!-- End widget -->

     </aside><!-- End aside -->