<?php
include_once 'inc/config.inc.php';
include('inc/db_con.inc.php');


$prc = $_POST['price'];
$rating = $_POST['rating'];
$facility = $_POST['facility'];
$sort_price = $_POST['sort_price'];


//------------price------------//
$price_arr = explode(',', $prc);
if(!empty($prc)){
$closebr = " )) ";
}else{
$closebr = ""; 
}

$pricestr = '';
foreach($price_arr as $price)
{   
    
    if($price =='price_1'){
       $pricestr .= ' and ((`adult_price` between 10 and 50';    
    }
    if($price=='price_2'){
        if( count($price_arr) > 1 && $price_arr[0] != 'price_2' ){
            $pricestr .= ') OR (`adult_price` between 50 and 80';  
        }else{
            $pricestr = ' and ((`adult_price` between 50 and 80'; 
        }
    }
    if($price=='price_3'){
         if(count($price_arr) > 1){
            $pricestr .= ') OR (`adult_price` between 80 and 100'; 
        }else{
            $pricestr = ' and ((`adult_price` between 80 and 100'; 
        }
    }
}
$pricestr = $pricestr.$closebr;

//------------rating------------//
$rating_arr = explode(',', $rating);
if(!empty($rating)){
$closebr1 = " )) ";
}else{
$closebr1 = ""; 
}
$ratingstr = '';
foreach($rating_arr as $rate)
{   
    
    if($rate =='rating_1'){
       $ratingstr .= ' and ((`rating` > 4.5 and `rating` <= 5 ';    
    }
    if($rate=='rating_2'){
        if( count($rating_arr) > 1 && $rating_arr[0] != 'rating_2' ){
            $ratingstr .= ') OR (`rating`  > 3.5 and `rating` <= 4.5 ';  
        }else{
            $ratingstr = ' and ((`rating`  > 3.5 and `rating` <= 4.5 '; 
        }
    }
    if($rate=='rating_3'){
         if(count($rating_arr) > 1 && $rating_arr[0] != 'rating_3'){
            $ratingstr .= ') OR (`rating`  > 2.5 and `rating` <= 3.5 '; 
        }else{
            $ratingstr = ' and ((`rating`  > 2.5 and `rating` <= 3.5 '; 
        }
    }
    if($rate=='rating_4'){
         if(count($rating_arr) > 1 && $rating_arr[0] != 'rating_4'){
            $ratingstr .= ') OR (`rating` > 1.5 and `rating` <= 2.5 '; 
        }else{
            $ratingstr = ' and ((`rating` > 1.5 and `rating` <= 2.5 '; 
        }
    }
    if($rate=='rating_5'){
         if(count($rating_arr) > 1){
            $ratingstr .= ') OR (`rating` > 0 and `rating` <= 1.5 '; 
        }else{
            $ratingstr = ' and ((`rating` > 0 and `rating` <= 1.5 '; 
        }
    }
}
$ratingstr = $ratingstr.$closebr1;

//------------facility------------//
$facility_arr = explode(',', $facility);
if(!empty($facility)){
$closebr2 = " )) ";
}else{
$closebr2 = ""; 
}
$facilitystr = '';
foreach($facility_arr as $fac_val)
{   
    if($fac_val =='facility_1'){
       $facilitystr .= ' and ((`museum` = 1 ';    
    }
    if($fac_val=='facility_2'){
        if( count($facility_arr) > 1 && $facility_arr[0] != 'facility_2' ){
            $facilitystr .= ') OR (`adventure` = 1 ';  
        }else{
            $facilitystr = ' and ((`adventure` = 1 '; 
        }
    }
    if($fac_val=='facility_3'){
         if(count($facility_arr) > 1 && $facility_arr[0] != 'facility_3'){
            $facilitystr .= ') OR (`food` = 1 '; 
        }else{
            $facilitystr = ' and ((`food` = 1 '; 
        }
    }
    if($fac_val=='facility_4'){
         if(count($facility_arr) > 1){
            $facilitystr .= ') OR (`garden` = 1 '; 
        }else{
            $facilitystr = ' and ((`garden` = 1 '; 
        }
    }
}
$facilitystr = $facilitystr.$closebr2;

//---------------order by or sorting ------//
if($sort_price=="price_ASC"){
   $orderby_price = 'ORDER BY adult_price ASC';
}
if($sort_price=="price_DESC"){
   $orderby_price = 'ORDER BY adult_price DESC';
}
if($sort_price=="ranking_ASC"){
   $orderby_price = 'ORDER BY rating ASC';
}
if($sort_price=="ranking_DESC"){
   $orderby_price = 'ORDER BY rating DESC';
}

$tbl_name="product";
$adjacents = 3;	

$query = 'SELECT COUNT(*) as num FROM '.$tbl_name.' WHERE is_active="Y" AND is_deleted="N" AND is_feature="Y" AND sort_order > 0 '.$pricestr.''.$ratingstr.''.$facilitystr.''.$orderby_price;
$total_pages = mysql_fetch_array(mysql_query($query));
$total_pages = $total_pages[num];
$targetpage = $_POST['url']; 	
$limit = 6; 								
$page = $_POST['page'];

if($page) 
		$start = ($page - 1) * $limit; 			
	else
		$start = 0;
	
	
	$sql = 'SELECT * FROM '.$tbl_name.' WHERE is_active="Y" AND is_deleted="N" AND is_feature="Y" AND sort_order > 0 '.$pricestr.''.$ratingstr.''.$facilitystr.''.$orderby_price.' LIMIT '.$start.', '.$limit;
	
	//echo $sql;
        $tmpsql = $sql; 
	$product_data = mysql_query($sql);
        
        
	
	if ($page == 0) $page = 1;					
	$prev = $page - 1;							
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$lpm1 = $lastpage - 1;						
	
	
	$pagination = "";
	if($lastpage > 1)
	{	
                $pagination .= "<div class=\"text-center\">";
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\"> Â« </a>";
		else
			$pagination.= "<span class=\"disabled\"> Â« </span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a id='".$counter."' onclick='getIndex(this.id)'>$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	
		{
			
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}		
		
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\"> Â» </a>";
		else
			$pagination.= "<span class=\"disabled\"> Â» </span>";
		$pagination.= "</div>\n";
                $pagination.= "</div>\n";
	}
        
        
//$sql = 'SELECT * FROM product WHERE is_active="Y" AND is_deleted="N" AND is_feature="Y" '.$pricestr.$ratingstr.$facilitystr; 

//$rows_data =  customPaging($sql, '6',false);
//$product_data = $rows_data['data'];



               
                        
        if(($product_data  != "") && (mysql_num_rows($product_data) > 0) ){                
        while($prod = mysql_fetch_array($product_data))
        {
        //extract($product);
        $image_path = 'img/products/' . $prod['image'];
        if ($prod['image'] == "" || !file_exists($image_path)){
            $image_path = 'img/products/noimage.jpeg';
            
            }
            $prod_rating = $prod['rating'];
            $pid = $prod['id'];
            $long_desc = $prod['long_description'];
            $product_title = $prod['title'];
            $prod_img = $prod['image'];
            
            if ($prod['feature'] == 'Popular') {
                $Product_feature = 'popular';
            } elseif ($prod['feature'] == 'Family') {
                $Product_feature = 'family';
            } elseif ($prod['feature'] == 'Top Seller') {
                $Product_feature = 'top_seller';
            } elseif ($prod['feature'] == 'Best Value') {
                $Product_feature = 'best_value';
            } else {
                $Product_feature = '';
            }
            
$html .= '
       
    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.2s">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="wishlist">
                <a id="'.$pid.'" class="tooltip_flip tooltip-effect-1" onclick="addtowishlist(this.id)">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
            </div>      
            <div class="img_list" style="cursor:pointer"><a id="i_'.$prod['id'].'" onclick="return setcart(this.id)"><div class="ribbon '.$Product_feature.'" ></div><img src="'.$image_path.'" alt="">';
                    $cat_id = $prod['category_id'];
                    $where_cat = array('id' => $cat_id);
                    $rows_data_cat = getRows(DB_TABLE_PREFIX . 'category', $where_cat, '*');
                    $cat_data = $rows_data_cat['data'];
                    $category = $cat_data[0];
                    $html .= '<div class="short_info"><i class="icon_set_1_icon-44"></i>'.$category['title'].'</div></a>';
            $html .= '</div>
        </div>
        <div class="clearfix visible-xs-block"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="tour_list_desc">';               
					
                $where2 = array('product_id' => $prod['id']);
                $rows_data2 = getRows(DB_TABLE_PREFIX . 'reviews', $where2, '*');
                $product_data2 = $rows_data2['data'];

                if ($rows_data2['total_recs'] > 0) {
                $total= 0;
                $total_re_overall=0;		
                foreach ($product_data2 as $reviews) {
                extract($reviews);

                $total_re_overall += ($review_overall/10);
                }
                $totalnum = count($product_data2);				
                $re_overall = ($total_re_overall/$totalnum)*100;
                }
                if($prod_rating > 0 and $prod_rating !=""){			
							
				  
                $html .= '<div class="rating">';                           
                            if($prod_rating <= 1.5 and $prod_rating > 0){ 
                            $html .= '<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>';
                            }if($prod_rating <=2.5 and $prod_rating > 1.5) {
                            $html .= '<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>';
                            } if($prod_rating <=3.5 and $prod_rating > 2.5) {
                            $html .= '<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>';
                            }if($prod_rating <=4.5 and $prod_rating > 3.5) {
                            $html .= '<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>';
                            } if($prod_rating <=5 and $prod_rating > 4.5) {
                            $html .= '<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>';
                            }
                            $html .= '<small>('.$totalnum.')</small>';
                $html .= '</div>';
                }else{
                $html .= '<div class="rating"><i class="icon-smile"></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile"></i><small>(0)</small></div>';
                }
                $html .= '<h3><strong> '. $prod['title'].'</strong></h3>
                <p> '. substr($prod['short_description'],0,100).' </p>
                <ul class="add_info">
                    <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                            <div class="tooltip-content"><h4>Schedule</h4>
                                <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                            <div class="tooltip-content"><h4>Address</h4>';
                               if(isset($prod['address']) and $prod['address']!=""){
                                    $html .= $prod["address"]; 
                               }else{ 
                                    $html .= 'No records found <br>';
                                }
                             $html .='</div>
                        </div>
                    </li> 
                    <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                            <div class="tooltip-content"><h4>Languages</h4>';                                
                                if(isset($prod['Language']) and $prod['Language']!=""){
                                    $html .= $prod["Language"]; 
                                }else{
                                    $html .='No records found';
                                }
                            $html .= '</div>
                        </div>
                    </li>                            
                    <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                            <div class="tooltip-content"><h4>Parking</h4>';
                                if(isset($prod['parking']) and $prod['parking']!=""){
                                    $html .= $prod["parking"]; 
                                }else{
                                    $html .= 'No records found';
                                }
                            $html .= '</div>
                        </div>
                    </li>
                    <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                            <div class="tooltip-content"><h4>Transport</h4>';
                                if($prod['transpot_no'] or $prod['transpot_type'] == "") { 
                                $html .= '<strong> '.$prod["transpot_type"].' :</strong> '.$prod["transpot_no"].'<br>';
                                }else{
                                $html .= '<strong>No records found</strong><br>';
                                 } 
                        $html .= '</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <div class="price_list"><div><sup> '.CURRENCY_SYMBOL.' </sup> ';
if($prod['promo_adult_price']=="0.00")
    { 
    $html .= (float)$prod['adult_price'].'*<span class="normal_price_list"></span><small >*Per person</small> ';
            }
            else{ 
                $html .= (float)$prod['promo_adult_price'].'*<span class="normal_price_list">'.CURRENCY_SYMBOL.(float)$prod['adult_price'].'</span><small >*Per person</small>';
            }
                    $html .='    <p><a class="btn_1 green" data-toggle="modal" data-target="#myModal'.$pid.'">Details</a></p>
                        <a id="e_'.$pid.'" class="btn_1" onclick="return setcart(this.id)" >Book now</a></p>
                        </div>
                       
                        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal'.$pid.'">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom:none;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="thumb_cart">
                    <img class="thum_img" src="img/products/'.$prod_img.'" alt="">
                </div>
                <h3 class="modal-title">'.$product_title.'</h3>
            </div>
            <div class="modal-body">
                <p>'.stripcslashes(Decode($long_desc)).'</p>
            </div>
            <div class="modal-footer">
                <a href="single_tour.php?id='.$pid.'" class="btn_1" >View product reviews</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  
   ';

    
        }

// $html .= '<hr>
//                
//<div class="text-center">';
//
//    if ($rows_data["nav_links"] != '') {
//            
//
//    $html .=   ' <ul class="pagination-custom list-unstyled list-inline">
//            '.$rows_data["nav_links"] 
//        .'</ul></div>';
//        
//    }
                        $html .= $pagination;
                        
                        }else{
                        $html .='No records Found';
                        }
                        
 echo $html;
 exit;

?>
