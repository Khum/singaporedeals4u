<div class="box_style_cat">
        	<?php
                                
				$category_where = array('is_deleted' => 'N', 'is_active' => 'Y');
				
				$category_rows_data = getRows(DB_TABLE_PREFIX . 'category', $category_where, "*", 'sort_order');
				
				$category_data = $category_rows_data['data'];
				
				if ($category_rows_data['total_recs'] > 0) {
			
			?>  
			<ul id="cat_nav">
				<?php
                                $sql = 'SELECT count(*) as total FROM product WHERE is_active="Y" AND is_deleted="N"';
                                $retval = mysql_query($sql);
                                $row = mysql_fetch_assoc($retval);
                                $totalproducts = $row['total'];
                                ?>
				<li><a href="<?= site_url(''); ?>" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(<?php echo $totalproducts; ?>)</span></a></li>
                 <?php
					
					foreach ($category_data as $side_bar_category) {
					$result = mysql_query("SELECT * FROM product where category_id='".$side_bar_category['id']."' and is_deleted='N' and is_active='Y'");
					$num_rows = mysql_num_rows($result);
				?>
				<li><a href="categorywise_tours_list.php?id=<?php echo $side_bar_category['id']; ?>"><i class="icon_set_1_icon-51"></i><?php echo $side_bar_category['title']; ?> <span>(<?php echo $num_rows; ?>)</span></a></li>
				<?php } ?>
<!--				<li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a></li>-->
                
			</ul>
            <?php } ?>
		</div>