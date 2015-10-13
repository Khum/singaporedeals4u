<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;
if (!empty($_POST)) {
    extract($_POST);
    $slugWhere = array();    
    $slugWhere[] = "is_deleted = 'N'";
    $slugWhere[] = "slug = '".  Encode($slug)."'";
    if ($id == 0) {
        $dated = ',dated';
        $_POST['dated'] = date("Y-m-d H:i:s");
    } else {
        $slugWhere[] = "id != '".  Encode($id)."'";
        $dated = ',last_updated';
        $_POST['last_updated'] = date("Y-m-d H:i:s");
    }
    if (isset($_POST['is_active']))
        $_POST['is_active'] = 'Y';
    else
        $_POST['is_active'] = 'N';
    if (isset($_POST['is_feature']))
        $_POST['is_feature'] = 'Y';
    else
        $_POST['is_feature'] = 'N';	
    
    $_POST['Language'] = implode(',',$Language);
    
//	if ($id == 0) {
//        	$_POST['language'] = implode(',',$language);
//    } else {
//       if ($_POST['language']!='')
//      	   $_POST['language'] = implode(',',$language);
//	   else
//	       $_POST['language'] = $prv_language;
//    }
	
	/*if($_POST['popular_feature'] == 'on'){
		$_POST['popular_feature'] = '1';
	}else{
			$_POST['popular_feature'] = '0';
			}*/
			
	//schedule	Month 1
	if($mclosed == '')
		$monday = 'closed';
	else
		$monday = $_POST['mt_from'].' - '.$_POST['mt_to'];
	if($tclosed == '')
		$tuesday = 'closed';
	else
		$tuesday = $_POST['tt_from'].' - '.$_POST['tt_to']; 
	if($wclosed == '')
		$wednesday = 'closed';
	else
		$wednesday = $_POST['wt_from'].' - '.$_POST['wt_to'];
	if($thclosed == '')
		$thursday = 'closed';
	else
		$thursday = $_POST['tht_from'].' - '.$_POST['tht_to']; 
	if($fclosed == '')
		$friday = 'closed';
	else
		$friday = $_POST['ft_from'].' - '.$_POST['ft_to']; 
	if($sclosed == '')
		$saturday = 'closed';
	else
		$saturday = $_POST['st_from'].' - '.$_POST['st_to']; 
	if($suclosed == '')
		$sunday = 'closed';
	else
		$sunday = $_POST['sut_from'].' - '.$_POST['sut_to']; 
		
	//schedule	Month 2
	if($mclosed2 == '')
		$monday2 = 'closed';
	else
		$monday2 = $_POST['mt_from2'].' - '.$_POST['mt_to2'];
	if($tclosed2 == '')
		$tuesday2 = 'closed';
	else
		$tuesday2 = $_POST['tt_from2'].' - '.$_POST['tt_to2']; 
	if($wclosed2 == '')
		$wednesday2 = 'closed';
	else
		$wednesday2 = $_POST['wt_from2'].' - '.$_POST['wt_to2'];
	if($thclosed2 == '')
		$thursday2 = 'closed';
	else
		$thursday2 = $_POST['tht_from2'].' - '.$_POST['tht_to2']; 
	if($fclosed2 == '')
		$friday2 = 'closed';
	else
		$friday2 = $_POST['ft_from2'].' - '.$_POST['ft_to2']; 
	if($sclosed2 == '')
		$saturday2 = 'closed';
	else
		$saturday2 = $_POST['st_from2'].' - '.$_POST['st_to2']; 
	if($suclosed2 == '')
		$sunday2 = 'closed';
	else
		$sunday2 = $_POST['sut_from2'].' - '.$_POST['sut_to2']; 
	
	
	//schedule	Month3
	if($mclosed3 == '')
		$monday3 = 'closed';
	else
		$monday3 = $_POST['mt_from3'].' - '.$_POST['mt_to3'];
	if($tclosed3 == '')
		$tuesday3 = 'closed';
	else
		$tuesday3 = $_POST['tt_from3'].' - '.$_POST['tt_to3']; 
	if($wclosed3 == '')
		$wednesday3 = 'closed';
	else
		$wednesday3 = $_POST['wt_from3'].' - '.$_POST['wt_to3'];
	if($thclosed3 == '')
		$thursday3 = 'closed';
	else
		$thursday3 = $_POST['tht_from3'].' - '.$_POST['tht_to3']; 
	if($fclosed3 == '')
		$friday3 = 'closed';
	else
		$friday3 = $_POST['ft_from3'].' - '.$_POST['ft_to3']; 
	if($sclosed3 == '')
		$saturday3 = 'closed';
	else
		$saturday3 = $_POST['st_from3'].' - '.$_POST['st_to3']; 
	if($suclosed3 == '')
		$sunday3 = 'closed';
	else
		$sunday3 = $_POST['sut_from3'].' - '.$_POST['sut_to3']; 
		
	//schedule	Month 4
	if($mclosed4 == '')
		$monday4 = 'closed';
	else
		$monday4 = $_POST['mt_from4'].' - '.$_POST['mt_to4'];
	if($tclosed4 == '')
		$tuesday4 = 'closed';
	else
		$tuesday4 = $_POST['tt_from4'].' - '.$_POST['tt_to4']; 
	if($wclosed4 == '')
		$wednesday4 = 'closed';
	else
		$wednesday4 = $_POST['wt_from4'].' - '.$_POST['wt_to4'];
	if($thclosed4 == '')
		$thursday4 = 'closed';
	else
		$thursday4 = $_POST['tht_from4'].' - '.$_POST['tht_to4']; 
	if($fclosed4 == '')
		$friday4 = 'closed';
	else
		$friday4 = $_POST['ft_from4'].' - '.$_POST['ft_to4']; 
	if($sclosed4 == '')
		$saturday4 = 'closed';
	else
		$saturday4 = $_POST['st_from4'].' - '.$_POST['st_to4']; 
	if($suclosed4 == '')
		$sunday4 = 'closed';
	else
		$sunday4 = $_POST['sut_from4'].' - '.$_POST['sut_to4']; 
		
	//----------Value Added services----//
	if($_POST['accessibiliy'] == 'on'){
		$_POST['accessibiliy'] = '1';
		}else{
			$_POST['accessibiliy'] = '0';
			}
	
	if($_POST['museum'] == 'on'){
		$_POST['museum'] = '1';
		}else{
			$_POST['museum'] = '0';
			}
	if($_POST['pet_allowed'] == 'on'){
		$_POST['pet_allowed'] = '1';
		}else{
			$_POST['pet_allowed'] = '0';
			}
	if($_POST['audio_guide'] == 'on'){
		$_POST['audio_guide'] = '1';
		}else{
			$_POST['audio_guide'] = '0';
		}
	if($_POST['tour_guide'] == 'on'){
		$_POST['tour_guide'] = '1';
	}else{
			$_POST['tour_guide'] = '0';
			}			
	if($_POST['wildlife'] == 'on'){
		$_POST['wildlife'] = '1';
	}else{
			$_POST['wildlife'] = '0';
			}
	if($_POST['park'] == 'on'){
		$_POST['park'] = '1';
	}else{
			$_POST['park'] = '0';
			}
	if($_POST['garden'] == 'on'){
		$_POST['garden'] = '1';
	}else{
			$_POST['garden'] = '0';
			}
	if($_POST['adventure'] == 'on'){
		$_POST['adventure'] = '1';
	}else{
			$_POST['adventure'] = '0';
			}
	if($_POST['free_entry'] == 'on'){
		$_POST['free_entry'] = '1';
	}else{
			$_POST['free_entry'] = '0';
			}
	if($_POST['nature'] == 'on'){
		$_POST['nature'] = '1';
	}else{
			$_POST['nature'] = '0';
			}
	if($_POST['scenic'] == 'on'){
		$_POST['scenic'] = '1';
	}else{
			$_POST['scenic'] = '0';
			}
	if($_POST['culture'] == 'on'){
		$_POST['culture'] = '1';
	}else{
			$_POST['culture'] = '0';
			}
	if($_POST['food'] == 'on'){
		$_POST['food'] = '1';
	}else{
			$_POST['food'] = '0';
			}
	if($_POST['relaxing'] == 'on'){
		$_POST['relaxing'] = '1';
	}else{
			$_POST['relaxing'] = '0';
			}
	if($_POST['activity'] == 'on'){
		$_POST['activity'] = '1';
	}else{
			$_POST['activity'] = '0';
			}
	if($_POST['one_way_transfer'] == 'on'){
		$_POST['one_way_transfer'] = '1';
	}else{
			$_POST['one_way_transfer'] = '0';
			}
	if($_POST['two_way_transfer'] == 'on'){
		$_POST['two_way_transfer'] = '1';
	}else{
			$_POST['two_way_transfer'] = '0';
			}
	if($_POST['free_and_easy'] == 'on'){
		$_POST['free_and_easy'] = '1';
	}else{
			$_POST['free_and_easy'] = '0';
			}
	$hours = $_POST['hours'];
	$_POST['time'] = implode(',',$timelist);
        
        //==================Other services=======//
        $_POST['other_services'] = implode(',',$_POST['other_services']); 
	 
	
	if(empty($slug)){
        $msg = displayMsg('Enter slug.', 'error');
        $var_clear = false;
    }else{
        $slugResult = getRows(DB_TABLE_PREFIX . 'product', 'WHERE '.implode(' AND ',$slugWhere));
        $message_type = 'success';
        if($slugResult['total_recs'] == 0){
            $update_data = array();
            $update_data = array_copy('id,category_id,code,title,slug,short_description,long_description,adult_price,child_price,sort_order,is_active,is_feature,transpot_type,transpot_no,parking,address,Language,museum,accessibiliy,pet_allowed,audio_guide,tour_guide,attraction,wildlife,park,garden,adventure,free_entry,nature,scenic,culture,food,relaxing,activity,one_way_transfer,two_way_transfer,free_and_easy,hours,promo_adult_price,promo_child_price,feature,time,other_services,date_mandatory,delivery_option' . $dated, $_POST);
            $product_id = InsertUpdateRecord($update_data, DB_TABLE_PREFIX . 'product', 'id');
			if($id==0){
			$p_id = mysql_insert_id();
			}else{
			$p_id = $id;
			}
			if($id!=0){
			//$query2="UPDATE schedule_m1 SET month='".$month."',monday='".$monday."',tuesday='".$tuesday."',wednesday='".$wednesday."',thursday='".$thursday."',friday='".$friday."',saturday='".$saturday."',sunday='".$sunday."' where id='".$M1_id."'";
			$_POST['id']=$M1_id;
			
			$update_schdule_M1 = array('id' => $_POST['id'],'product_id' => $p_id, 'month' => $month, 'monday' => $monday, 'tuesday' => $tuesday, 'wednesday' => $wednesday, 'thursday' => $thursday, 'friday' => $friday, 'saturday' => $saturday, 'sunday' => $sunday);
			InsertUpdateRecord($update_schdule_M1, DB_TABLE_PREFIX . 'schedule_m1', 'id');
			
			}else{
			if($month!=""){
			$update_schdule_M1 = array('month' => $month, 'monday' => $monday, 'tuesday' => $tuesday, 'wednesday' => $wednesday, 'thursday' => $thursday, 'friday' => $friday, 'saturday' => $saturday, 'sunday' => $sunday, 'product_id' => $p_id);
			InsertUpdateRecord($update_schdule_M1, DB_TABLE_PREFIX . 'schedule_m1', 'id');
			}
			}
			
			if($id!=0){
			$_POST['id']=$M2_id;
			$update_schdule_M2 = array('id' => $_POST['id'],'product_id' => $p_id,'month' => $month2, 'monday' => $monday2, 'tuesday' => $tuesday2, 'wednesday' => $wednesday2, 'thursday' => $thursday2, 'friday' => $friday2, 'saturday' => $saturday2, 'sunday' => $sunday2);
			InsertUpdateRecord($update_schdule_M2, DB_TABLE_PREFIX . 'schedule_m2', 'id');
			}else{
			if($month2!=""){
			$update_schdule_M2 = array('month' => $month2, 'monday' => $monday2, 'tuesday' => $tuesday2, 'wednesday' => $wednesday2, 'thursday' => $thursday2, 'friday' => $friday2, 'saturday' => $saturday2, 'sunday' => $sunday2, 'product_id' => $p_id);
			InsertUpdateRecord($update_schdule_M2, DB_TABLE_PREFIX . 'schedule_m2', 'id');
			}
			}
			
			if($id!=0){
			$_POST['id']=$M3_id;
			$update_schdule_M3 = array('id' => $_POST['id'],'product_id' => $p_id,'month' => $month3, 'monday' => $monday3, 'tuesday' => $tuesday3, 'wednesday' => $wednesday3, 'thursday' => $thursday3, 'friday' => $friday3, 'saturday' => $saturday3, 'sunday' => $sunday3);
			InsertUpdateRecord($update_schdule_M3, DB_TABLE_PREFIX . 'schedule_m3', 'id');
			}else{
			if($month3!=""){
			$update_schdule_M3 = array('month' => $month3, 'monday' => $monday3, 'tuesday' => $tuesday3, 'wednesday' => $wednesday3, 'thursday' => $thursday3, 'friday' => $friday3, 'saturday' => $saturday3, 'sunday' => $sunday3, 'product_id' => $p_id);
			InsertUpdateRecord($update_schdule_M3, DB_TABLE_PREFIX . 'schedule_m3', 'id');
			}
			}
		
			if($id!=0){
			$_POST['id']=$M4_id;
			$update_schdule_M4 = array('id' => $_POST['id'],'product_id' => $p_id,'month' => $month4, 'monday' => $monday4, 'tuesday' => $tuesday4, 'wednesday' => $wednesday4, 'thursday' => $thursday4, 'friday' => $friday4, 'saturday' => $saturday4, 'sunday' => $sunday4);
			InsertUpdateRecord($update_schdule_M4, DB_TABLE_PREFIX . 'schedule_m4', 'id');
			}else{
			if($month4!=""){
			$update_schdule_M4 = array('month' => $month4, 'monday' => $monday4, 'tuesday' => $tuesday4, 'wednesday' => $wednesday4, 'thursday' => $thursday4, 'friday' => $friday4, 'saturday' => $saturday4, 'sunday' => $sunday4, 'product_id' => $p_id);
			InsertUpdateRecord($update_schdule_M4, DB_TABLE_PREFIX . 'schedule_m4', 'id');
			}
			}
			
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            if (!empty($_FILES["image"]["name"])) {
                $path_parts = pathinfo($_FILES["image"]["name"]);
                $extension = $path_parts['extension'];
                if ((($_FILES["image"]["type"] == "image/gif") || ($_FILES["image"]["type"] == "image/jpeg") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/pjpeg") || ($_FILES["image"]["type"] == "image/x-png") || ($_FILES["image"]["type"] == "image/png")) && in_array($extension, $allowedExts)) {
                    $fileName = "product_" . $product_id . '.' . $extension;
                    move_uploaded_file($_FILES["image"]["tmp_name"], "../img/products/" . $fileName);
                    $update_image = array('image' => $fileName, 'id' => $product_id);
                    InsertUpdateRecord($update_image, DB_TABLE_PREFIX . 'product', 'id');                    
                } else {
                    enqueueMsg("Image type does not uploaded, Invalid image file.", "error", 'product.php', false);
                }
            }
//            $message = "Record has beed " . ($id > 0 ? 'updated' : 'added') . ".";
//            enqueueMsg($message, "success");
                if($_GET['id'] > 0){
                    header("location:product.php?id=".$_GET['id']);
                }else{
                $message = "Record has beed " . ($id > 0 ? 'updated' : 'added') . ".";
                enqueueMsg($message, "success");
                }
        }else{
            $msg = displayMsg('This slug "'.$slug.'" already is use.', 'error');
            $var_clear = false;
        }    
    }
    
}
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $where = array('id' => $id);
    $result_arr = getRows(DB_TABLE_PREFIX . 'product', $where);
	if ($result_arr['total_recs'] > 0) {
        $result = $result_arr['result'];
        $row_data = GetArr($result);
        extract($row_data);
        $var_clear = false;
    } else {
        enqueueMsg('Invalid record id.', "alert");
    }
}
if ($var_clear) {
    $id = 0;
    $category_id = "";
    $code = "";
    $title = "";
    $slug = "";
    $short_description = "";
    $long_description = "";
    $adult_price = "0.00";
    $child_price = "0.00";
	$promo_adult_price = "0.00";
	$promo_child_price = "0.00";
    $image = "";
    $sort_order = "";
	$transpot_type= "";
	$transpot_no= "";
	$parking= "";
	$address= "";
    $is_active = "Y";
    $is_feature = "N";
}

include('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
        <li>Product</li>
    </ul>
</div>
<?php echo $msg; ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Define Product</h2>
            <div class="box-icon">
                <!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php
            if($_GET["id"]!= ""){
                $prid = $_GET["id"];
                
                $rows_prev = "select * from product where id < ".$prid." ORDER BY id DESC LIMIT 1";
                $query_prev= mysql_query($rows_prev);                
                while ($prev = mysql_fetch_assoc($query_prev)) {
                    $prev = $prev['id'];
                    echo "<div style='float:left;width:49%;'><p style='text-align: right; margin-right:5px'><a href='product.php?id=".$prev."' class='btn btn-info'>Prev</a></p></div>"; 
                }
                
                $rows_next = "select * from product where id > ".$prid." ORDER BY id ASC LIMIT 1";
                $query_next= mysql_query($rows_next);                
                while ($next = mysql_fetch_assoc($query_next)) {
                    $next = $next['id'];
                    echo "<div style='float:left; width:49%;'><p style='margin-left:5px; text-align: left' ><a href='product.php?id=".$next."' class='btn btn-info'>Next</a></p></div>"; 
                }
//                $photo_sql = "(SELECT * FROM product WHERE id > ".$prid." ORDER BY id ASC LIMIT 1)";
//                $photo_sql.= " UNION (SELECT * FROM product WHERE id < ".$prid." ORDER BY id ASC LIMIT 1)";
//                
//                $photo_sql = "(SELECT * FROM product WHERE id < ".$id." ORDER BY id DESC LIMIT 1)";
//                $photo_sql.= " UNION (SELECT * FROM product WHERE id > ".$id." ORDER BY id DESC LIMIT 1)";
                
                //$photo_sql = "SELECT * FROM product WHERE id = ".$id." ORDER BY id ASC"; 
//                    $photo_result = mysql_query($photo_sql) or die(mysql_error());
//                    while($row=mysql_fetch_array($photo_result)) {
//                    $photos[]=$row[0];
//                }
//               
//                $total = mysql_num_rows($photo_result);

                // Testing example:
                // $photos = array(200, 202, 206, 211);
                // $total = count($photos);

//                $current = $_GET["id"]; // whatever your position is in the photo array 

//                if($current > ($total-1) || $current < 0) {
//                    echo "Error: nonexistent photo ID.";
//                    exit;
//                }

//                echo $photos[$current]; // display current photo

//                $next = (($current+1) < 0) ? $total+1 : $current +1;
//                
//                $prev = (($current-1) < 0) ? $total-1 : $current -1;
//                if($prev > 0 ){
//                    $prevbtn_dis = "";                    
//                }  else {
//                     $prevbtn_dis = "disabled='disabled'";
//                }
//                              
//                echo "<div class''><p style='text-align: center'><a href='product.php?id=".$prev."' class='btn btn-info' ".$prevbtn_dis.">Prev</a>";  
//                echo "&nbsp;&nbsp;<a href='product.php?id=".$next."' class='btn btn-info' ".$nextbtn_dis.">Next</a></p></div>"; 
            }else{
                
            }
            ?>
            <form action="" id="product_form" name="product_form" method="post" class="form-horizontal" enctype="multipart/form-data" style="clear: both">
                <input name="id" id="id" value="<?php echo $id; ?>" type="hidden" />
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="category_id">Category</label>
                        <div class="controls">
                            <?php
                            echo show_dropdown('category', 'category_id', 'title', 'id', $category_id, "Select Category", 'data-rel="chosen"', "is_active='Y' AND is_deleted = 'N'", "title");
                            ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="title">Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo $title; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="slug">Slug</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="slug" name="slug" type="text" value="<?php echo $slug; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="code">Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="code" name="code" type="text" value="<?php echo $code; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="short_description">Short Description</label>
                        <div class="controls">
                            <input class="input-xlarge" id="short_description" name="short_description" type="text" value="<?php echo stripcslashes(Decode($short_description)); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="long_description">Long Description</label>
                        <div class="controls">
                             <textarea id="absurls" name="long_description" rows="15"><?php echo stripcslashes(Decode($long_description)); ?></textarea>
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" for="adult_price">Adult Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">Original <?php echo CURRENCY_SYMBOL; ?></span><input id="adult_price" name="adult_price" size="16" type="text" value="<?php echo $adult_price; ?>"><span class="add-on">.00</span></br></br>
                                <span class="add-on">Promotional <?php echo CURRENCY_SYMBOL; ?></span><input id="promo_adult_price" name="promo_adult_price" size="16" type="text" value="<?php echo $promo_adult_price; ?>"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="child_price">Child Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">Original <?php echo CURRENCY_SYMBOL; ?></span><input id="child_price" name="child_price" size="16" type="text" value="<?php echo $child_price; ?>"><span class="add-on">.00</span></br></br>
                                <span class="add-on">Promotional <?php echo CURRENCY_SYMBOL; ?></span><input id="promo_child_price" name="promo_child_price" size="16" type="text" value="<?php echo $promo_child_price; ?>" ><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="feature">Feature</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <select id="feature" name="feature">
                                <option value="">---Select Feature---</option>
                                <option <?php if ($feature == 'Popular' ){?> selected <?php } ?>  value="Popular">Popular</option>
                                <option <?php if ($feature == 'Family' ){?> selected <?php } ?>  value="Family">Family</option>
                                <option <?php if ($feature == 'Top Seller' ){?> selected <?php } ?> value="Top Seller">Top Seller</option>
                                <option <?php if ($feature == 'Best Value' ){?> selected <?php } ?> value="Best Value">Best Value</option>
                                </select>                                
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">File input</label>
                        <?php
                        $image_path = '../img/products/' . $image;
                        if ($image == "" || !file_exists($image_path))
                            $image_path = '../img/products/noimage.jpeg';
                        ?>
                        <img src="<?php echo $image_path; ?>" style="margin-left: 17px; height: 100px;" />
                        <div class="controls">
                            <input class="input-file uniform_on" id="image" name="image" type="file">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sort_order">Sort Order</label>
                        <div class="controls">
                            <input class="input-xlarge" id="sort_order" name="sort_order" type="text" value="<?php echo $sort_order; ?>" style="float: left; margin-right: 10px;" required> &nbsp;<label style="float: left; color: red" id="sortorder_responce"> </label>
                        </div>
                    </div>                    
                    
                    <div class="control-group">
                        <label class="control-label" for="transport">Transport</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <select id="transpot_type" name="transpot_type" class="bud" style="">
                                <option <?php if ($transpot_type == 'Texi' ) {?> selected <?php } ?>  value="Texi">Taxi</option>
                                <option <?php if ($transpot_type == 'Bus' ) {?> selected <?php } ?>  value="Bus">Bus</option>
                                <option <?php if ($transpot_type == 'MRT' ) {?> selected <?php } ?> value="MRT">MRT</option>
                                <option <?php if ($transpot_type == 'Others' ) {?> selected <?php } ?> value="Others">Others</option>
                                </select>
                                <input id="transpot_no" name="transpot_no" size="16" type="text" value="<?php echo $transpot_no; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="parking">Parking Place</label>
                        <div class="controls">
                            <input class="input-xlarge" id="parking" name="parking" type="text" value="<?php echo $parking; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="address">Address</label>
                        <div class="controls">
                            <input class="input-xlarge" id="address" name="address" type="text" value="<?php echo $address; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="language">Language</label>
                        
                        <div class="controls">
                         <?php $languages = explode(',',$Language);
                               $language_arr = array("English", "Malay", "Chinese"); 
                          
                          ?>
                          <select id="language" name="Language[]" multiple="multiple" class="" style="">
                              <?php if($id!=""){ ?>
                                    <option value="">----------Select Language----------</option>
                                    <?php }else{ ?>
                                    <option value="" selected="selected">----------Select Language----------</option>
                                <?php }?>
                                 
				<?php foreach($language_arr as $lang){ ?>
                              <option value="<?php echo $lang;?>" <?php if(in_array($lang,$languages)){ ?> selected="selected" <?php }?>><?php echo $lang ?></option>
                                                          
                               <?php } ?>
                           </select>                              
<!--                           <input class="input-xlarge" id="prv_language" name="prv_language" type="hidden" value="<?php echo $Language; ?>">-->
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="other-services">Delivery Option</label>
                        <div class="controls delivery_option">
                            <div style="float:left;"><input id="radio1" type="radio"  value="AT" name="delivery_option" <?php if($delivery_option==AT){ ?> checked="" <?php } ?> ></div>
                            <div style="float:left;"><label for="radio1"> Actual Ticket </label> </div>
                            
                            <div style="clear: both; float:left;"><input id="radio2" type="radio" value="EC" name="delivery_option" <?php if($delivery_option==EC){ ?> checked="" <?php } ?>></div>
                            <div style="float:left;"><label for="radio2"> E-Confirmation </label></div>
                        </div>
                        
                    </div>
                    <?php
					$where = array('product_id' => $id);
                    $rows_data3 = getRows(DB_TABLE_PREFIX . 'schedule_m1', $where, '*');
					$schedule_M1_data = $rows_data3['data'];
					$schedule_M1 = $schedule_M1_data[0];
                     if($schedule_M1['monday']!='closed'){
					 $monday = explode('-',$schedule_M1['monday']);}
					 else{$monday = '';}
					 
					 if($schedule_M1['tuesday']!='closed'){
					 $tuesday = explode('-',$schedule_M1['tuesday']);}
					 else{$tuesday = '';}
					 
					 if($schedule_M1['wednesday']!='closed'){
					 $wednesday = explode('-',$schedule_M1['wednesday']);}
					 else{$wednesday = '';}
					 
					 if($schedule_M1['thursday']!='closed'){
					 $thursday = explode('-',$schedule_M1['thursday']);}
					 else{$thursday = '';}
					 
					 if($schedule_M1['friday']!='closed'){
					 $friday = explode('-',$schedule_M1['friday']);}
					 else{$friday = '';}
					 
					 if($schedule_M1['saturday']!='closed'){
					 $saturday = explode('-',$schedule_M1['saturday']);}
					 else{$saturday = '';}
					 
					 if($schedule_M1['sunday']!='closed'){
					 $sunday = explode('-',$schedule_M1['sunday']);}
					 else{$sunday = '';}
				    ?>
                    <div class="control-group">
                        <label class="control-label" for="Schedule">Schedule</label>
                        
                        <div class="controls xmbottom">
                        	<label class="control-label month">Month:</label>
                            
                             <input type="hidden" id="M1_id" name="M1_id" value="<?php echo $schedule_M1['id']; ?>">
                            <input class="input-xlarge m_text" id="month" name="month" type="text" value="<?php echo $schedule_M1['month']; ?>" placeholder="1st Jan to 1st March">
                        </div>
                        <div class="controls mbottom">                          
                           <input id="monday" name="monday" size="16"  type="text" value="Monday" class ="day" disabled="disabled">
                           <input id="mt_from" name="mt_from" size="16" class ="time" type="text" value="<?php echo $monday[0]; ?>" placeholder="From">
                           <input id="mt_to" name="mt_to" size="16" class ="time" type="text" value="<?php echo $monday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Mon (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M1['monday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="mclosed" id="mclosed" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> />
                            <?php }else{ ?><input data-no-uniform="true" type="checkbox" name="mclosed" id="mclosed" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>                    
                        <div class="controls mbottom">                        
                           <input id="Tuesday" name="Tuesday" size="16"  type="text" value="Tuesday" class ="day" disabled="disabled">
                           <input id="tt_from" name="tt_from" size="16" class ="time" type="text" value="<?php echo $tuesday[0]; ?>" placeholder="From">
                           <input id="tt_to" name="tt_to" size="16" class ="time" type="text" value="<?php echo $tuesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Tue (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M1['tuesday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="tclosed" id="tclosed" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> />
                            <?php }else{ ?><input data-no-uniform="true" type="checkbox" name="tclosed" id="tclosed" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Wednesday" name="Wednesday" size="16"  type="text" value="Wednesday" class ="day" disabled="disabled">
                           <input id="wt_from" name="wt_from" size="16" class ="time" type="text" value="<?php echo $wednesday[0]; ?>" placeholder="From">
                           <input id="wt_to" name="wt_to" size="16" class ="time" type="text" value="<?php echo $wednesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Wed (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M1['wednesday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="wclosed" id="wclosed" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> />
                            <?php }else{ ?><input data-no-uniform="true" type="checkbox" name="wclosed" id="wclosed" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Thursday" name="Thursday" size="16"  type="text" value="Thursday" class ="day" disabled="disabled">
                           <input id="tht_from" name="tht_from" size="16" class ="time" type="text" value="<?php echo $thursday[0]; ?>" placeholder="From">
                           <input id="tht_to" name="tht_to" size="16" class ="time" type="text" value="<?php echo $thursday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Thur (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M1['thursday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="thclosed" id="thclosed" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> />
                            <?php }else{ ?><input data-no-uniform="true" type="checkbox" name="thclosed" id="thclosed" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Friday" name="Friday" size="16"  type="text" value="Friday" class ="day" disabled="disabled">
                           <input id="ft_from" name="ft_from" size="16" class ="time" type="text" value="<?php echo $friday[0]; ?>" placeholder="From">
                           <input id="ft_to" name="ft_to" size="16" class ="time" type="text" value="<?php echo $friday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Fri (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M1['friday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="fclosed" id="fclosed" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> />
                            <?php }else{ ?><input data-no-uniform="true" type="checkbox" name="fclosed" id="fclosed" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Saturday" name="Saturday" size="16"  type="text" value="Saturday" class ="day" disabled="disabled">
                           <input id="st_from" name="st_from" size="16" class ="time" type="text" value="<?php echo $saturday[0]; ?>" placeholder="From">
                           <input id="st_to" name="st_to" size="16" class ="time" type="text" value="<?php echo $saturday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sat (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M1['saturday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="sclosed" id="sclosed" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> />
                            <?php }else{ ?><input data-no-uniform="true" type="checkbox" name="sclosed" id="sclosed" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Sunday" name="Sunday" size="16"  type="text" value="Sunday" class ="day" disabled="disabled">
                           <input id="sut_from" name="sut_from" size="16" class ="time" type="text" value="<?php echo $sunday[0]; ?>" placeholder="From">
                           <input id="sut_to" name="sut_to" size="16" class ="time" type="text" value="<?php echo $sunday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sun (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M1['sunday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="suclosed" id="suclosed" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> />
                            <?php }else{ ?><input data-no-uniform="true" type="checkbox" name="suclosed" id="suclosed" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                      
                    </div>
                    <div class="box-header well wel_schd" data-original-title style="display: none;">
                        <div class="box-icon">
                             <a href="#" class="btn btn-minimize btn-round add">	Add More</a>
                        </div>
                    </div>
                    <?php
					$rows_data4 = getRows(DB_TABLE_PREFIX . 'schedule_m2', $where, '*');
					$schedule_M2_data = $rows_data4['data'];
					$schedule_M2 = $schedule_M2_data[0];
					
                     if($schedule_M2['monday']!='closed'){
					 $schedule_M2_monday = explode('-',$schedule_M2['monday']);}
					 else{$schedule_M2_monday = '';}
					 
					 if($schedule_M2['tuesday']!='closed'){
					 $schedule_M2_tuesday = explode('-',$schedule_M2['tuesday']);}
					 else{$schedule_M2_tuesday = '';}
					 
					 if($schedule_M2['wednesday']!='closed'){
					 $schedule_M2_wednesday = explode('-',$schedule_M2['wednesday']);}
					 else{$schedule_M2_wednesday = '';}
					 
					 if($schedule_M2['thursday']!='closed'){
					 $schedule_M2_thursday = explode('-',$schedule_M2['thursday']);}
					 else{$schedule_M2_thursday = '';}
					 
					 if($schedule_M2['friday']!='closed'){
					 $schedule_M2_friday = explode('-',$schedule_M2['friday']);}
					 else{$schedule_M2_friday = '';}
					 
					 if($schedule_M2['saturday']!='closed'){
					 $schedule_M2_saturday = explode('-',$schedule_M2['saturday']);}
					 else{$schedule_M2_saturday = '';}
					 
					 if($schedule_M2['sunday']!='closed'){
					 $schedule_M2_sunday = explode('-',$schedule_M2['sunday']);}
					 else{$schedule_M2_sunday = '';}
					
					?>
                    <div class="box-content" style="display: none;">
                    <div class="control-group">
                        <label class="control-label" for="Schedule"></label>
                        
                        <div class="controls xmbottom">
                        	<label class="control-label month">Month:</label>
                             <input type="hidden" id="M2_id" name="M2_id" type="text" value="<?php echo $schedule_M2['id']; ?>">
                            <input class="input-xlarge m_text" id="month2" name="month2" type="text" value="<?php echo $schedule_M2['month']; ?>" placeholder="1st Jan to 1st March">
                        </div>
                        <div class="controls mbottom">                          
                           <input id="monday2" name="monday2" size="16"  type="text" value="Monday" class ="day" disabled="disabled">
                           <input id="mt_from2" name="mt_from2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_monday[0]; ?>" placeholder="From">
                           <input id="mt_to2" name="mt_to2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_monday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Mon (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M2['monday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="mclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="mclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>                    
                        <div class="controls mbottom">                        
                           <input id="Tuesday2" name="Tuesday2" size="16"  type="text" value="Tuesday" class ="day" disabled="disabled">
                           <input id="tt_from2" name="tt_from2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_tuesday[0]; ?>" placeholder="From">
                           <input id="tt_to2" name="tt_to2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_tuesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Tue (ON/OFF)</label></div>
                            <div class="left">
                            <?php if($schedule_M2['tuesday']=='closed'){ ?>
                            <input data-no-uniform="true" type="checkbox" name="tclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="tclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Wednesday2" name="Wednesday2" size="16"  type="text" value="Wednesday" class ="day" disabled="disabled">
                           <input id="wt_from2" name="wt_from2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_wednesday[0]; ?>" placeholder="From">
                           <input id="wt_to2" name="wt_to2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_wednesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Wed (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M2['wednesday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="wclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="wclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Thursday2" name="Thursday2" size="16"  type="text" value="Thursday" class ="day" disabled="disabled">
                           <input id="tht_from2" name="tht_from2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_thursday[0]; ?>" placeholder="From">
                           <input id="tht_to2" name="tht_to2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_thursday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Thur (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M2['thursday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="thclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="thclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Friday2" name="Friday2" size="16"  type="text" value="Friday" class ="day" disabled="disabled">
                           <input id="ft_from2" name="ft_from2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_friday[0]; ?>" placeholder="From">
                           <input id="ft_to2" name="ft_to2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_friday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Fri (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M2['friday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="fclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="fclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Saturday2" name="Saturday2" size="16"  type="text" value="Saturday" class ="day" disabled="disabled">
                           <input id="st_from2" name="st_from2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_saturday[0]; ?>" placeholder="From">
                           <input id="st_to2" name="st_to2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_saturday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sat (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M2['saturday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="sclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="sclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Sunday2" name="Sunday2" size="16"  type="text" value="Sunday" class ="day" disabled="disabled">
                           <input id="sut_from2" name="sut_from2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_sunday[0]; ?>" placeholder="From">
                           <input id="sut_to2" name="sut_to2" size="16" class ="time" type="text" value="<?php echo $schedule_M2_sunday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sun (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M2['sunday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="suclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="suclosed2" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>
                       	
                    </div>
                    <div class="box-header well wel_schd" data-original-title>
                        <div class="box-icon">
                             <a href="#" class="btn btn-minimize btn-round add">	Add More</a>
                        </div>
                    </div>
                    <?php
					$rows_data5 = getRows(DB_TABLE_PREFIX . 'schedule_m3', $where, '*');
					$schedule_M3_data = $rows_data5['data'];
					$schedule_M3 = $schedule_M3_data[0];
									
                     if($schedule_M3['monday']!='closed'){
					 $schedule_M3_monday = explode('-',$schedule_M3['monday']);}
					 else{$schedule_M3_monday = '';}
					 
					 if($schedule_M3['tuesday']!='closed'){
					 $schedule_M3_tuesday = explode('-',$schedule_M3['tuesday']);}
					 else{$schedule_M3_tuesday = '';}
					 
					 if($schedule_M3['wednesday']!='closed'){
					 $schedule_M3_wednesday = explode('-',$schedule_M3['wednesday']);}
					 else{$schedule_M3_wednesday = '';}
					 
					 if($schedule_M3['thursday']!='closed'){
					 $schedule_M3_thursday = explode('-',$schedule_M3['thursday']);}
					 else{$schedule_M3_thursday = '';}
					 
					 if($schedule_M3['friday']!='closed'){
					 $schedule_M3_friday = explode('-',$schedule_M3['friday']);}
					 else{$schedule_M3_friday = '';}
					 
					 if($schedule_M3['saturday']!='closed'){
					 $schedule_M3_saturday = explode('-',$schedule_M3['saturday']);}
					 else{$schedule_M3_saturday = '';}
					 
					 if($schedule_M3['sunday']!='closed'){
					 $schedule_M3_sunday = explode('-',$schedule_M3['sunday']);}
					 else{$schedule_M3_sunday = '';}
					
					?>
                    <div class="box-content">
                    <div class="control-group">
                        <label class="control-label" for="Schedule"></label>
                        
                        <div class="controls xmbottom">
                        	<label class="control-label month">Month:</label>
                             <input type="hidden" id="M3_id" name="M3_id" type="text" value="<?php echo $schedule_M3['id']; ?>">
                            <input class="input-xlarge m_text" id="month3" name="month3" type="text" value="<?php echo $schedule_M3['month']; ?>" placeholder="1st Jan to 1st March">
                        </div>
                        <div class="controls mbottom">                          
                           <input id="monday3" name="monday3" size="16"  type="text" value="Monday" class ="day" disabled="disabled">
                           <input id="mt_from3" name="mt_from3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_monday[0]; ?>" placeholder="From">
                           <input id="mt_to3" name="mt_to3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_monday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Mon (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M3['monday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="mclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="mclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>                    
                        <div class="controls mbottom">                        
                           <input id="Tuesday3" name="Tuesday3" size="16"  type="text" value="Tuesday" class ="day" disabled="disabled">
                           <input id="tt_from3" name="tt_from3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_tuesday[0]; ?>" placeholder="From">
                           <input id="tt_to3" name="tt_to3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_tuesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Tue (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M3['tuesday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="tclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="tclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Wednesday3" name="Wednesday3" size="16"  type="text" value="Wednesday" class ="day" disabled="disabled">
                           <input id="wt_from3" name="wt_from3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_wednesday[0]; ?>" placeholder="From">
                           <input id="wt_to3" name="wt_to3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_wednesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Wed (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M3['wednesday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="wclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="wclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Thursday3" name="Thursday3" size="16"  type="text" value="Thursday" class ="day" disabled="disabled">
                           <input id="tht_from3" name="tht_from3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_thursday[0]; ?>" placeholder="From">
                           <input id="tht_to3" name="tht_to3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_thursday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Thur (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M3['thursday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="thclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="thclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Friday3" name="Friday3" size="16"  type="text" value="Friday" class ="day" disabled="disabled">
                           <input id="ft_from3" name="ft_from3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_friday[0]; ?>" placeholder="From">
                           <input id="ft_to3" name="ft_to3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_friday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Fri (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M3['friday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="fclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="fclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Saturday3" name="Saturday3" size="16"  type="text" value="Saturday" class ="day" disabled="disabled">
                           <input id="st_from3" name="st_from3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_saturday[0]; ?>" placeholder="From">
                           <input id="st_to3" name="st_to3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_saturday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sat (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M3['saturday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="sclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="sclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Sunday3" name="Sunday3" size="16"  type="text" value="Sunday" class ="day" disabled="disabled">
                           <input id="sut_from3" name="sut_from3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_sunday[0]; ?>" placeholder="From">
                           <input id="sut_to3" name="sut_to3" size="16" class ="time" type="text" value="<?php echo $schedule_M3_sunday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sun (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M3['sunday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="suclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="suclosed3" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        
                    </div>
                    
                    <div class="box-header well wel_schd" data-original-title>
                        <div class="box-icon">
                             <a href="#" class="btn btn-minimize btn-round add">	Add More</a>
                        </div>
                    </div>
                    <?php
					$rows_data6 = getRows(DB_TABLE_PREFIX . 'schedule_m4', $where, '*');
					$schedule_M4_data = $rows_data6['data'];
					$schedule_M4 = $schedule_M4_data[0];
									
                     if($schedule_M4['monday']!='closed'){
					 $schedule_M4_monday = explode('-',$schedule_M4['monday']);}
					 else{$schedule_M4_monday = '';}
					 
					 if($schedule_M4['tuesday']!='closed'){
					 $schedule_M4_tuesday = explode('-',$schedule_M4['tuesday']);}
					 else{$schedule_M4_tuesday = '';}
					 
					 if($schedule_M4['wednesday']!='closed'){
					 $schedule_M4_wednesday = explode('-',$schedule_M4['wednesday']);}
					 else{$schedule_M4_wednesday = '';}
					 
					 if($schedule_M4['thursday']!='closed'){
					 $schedule_M4_thursday = explode('-',$schedule_M4['thursday']);}
					 else{$schedule_M4_thursday = '';}
					 
					 if($schedule_M4['friday']!='closed'){
					 $schedule_M4_friday = explode('-',$schedule_M4['friday']);}
					 else{$schedule_M4_friday = '';}
					 
					 if($schedule_M4['saturday']!='closed'){
					 $schedule_M4_saturday = explode('-',$schedule_M4['saturday']);}
					 else{$schedule_M4_saturday = '';}
					 
					 if($schedule_M4['sunday']!='closed'){
					 $schedule_M4_sunday = explode('-',$schedule_M4['sunday']);}
					 else{$schedule_M4_sunday = '';}
					
					?>
                    <div class="control-group box-content">
                        <label class="control-label" for="Schedule"></label>
                        
                        <div class="controls xmbottom">
                        	<label class="control-label month">Month:</label>
                            <input type="hidden" id="M4_id" name="M4_id" type="text" value="<?php echo $schedule_M4['id']; ?>">
                            <input class="input-xlarge m_text" id="month4" name="month4" type="text" value="<?php echo $schedule_M1['month']; ?>" placeholder="1st Jan to 1st March">
                        </div>
                        <div class="controls mbottom">                          
                           <input id="monday4" name="monday4" size="16"  type="text" value="Monday" class ="day" disabled="disabled">
                           <input id="mt_from4" name="mt_from4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_monday[0]; ?>" placeholder="From">
                           <input id="mt_to4" name="mt_to4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_monday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Mon (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M4['monday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="mclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="mclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>                    
                        <div class="controls mbottom">                        
                           <input id="Tuesday4" name="Tuesday4" size="16"  type="text" value="Tuesday" class ="day" disabled="disabled">
                           <input id="tt_from4" name="tt_from4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_tuesday[0]; ?>" placeholder="From">
                           <input id="tt_to4" name="tt_to4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_tuesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Tue (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M4['tuesday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="tclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="tclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Wednesday4" name="Wednesday4" size="16"  type="text" value="Wednesday" class ="day" disabled="disabled">
                           <input id="wt_from4" name="wt_from4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_wednesday[0]; ?>" placeholder="From">
                           <input id="wt_to4" name="wt_to4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_wednesday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Wed (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M4['wednesday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="wclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="wclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Thursday4" name="Thursday4" size="16"  type="text" value="Thursday" class ="day" disabled="disabled">
                           <input id="tht_from4" name="tht_from4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_thursday[0]; ?>" placeholder="From">
                           <input id="tht_to4" name="tht_to4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_thursday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Thur (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M4['thursday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="thclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="thclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Friday4" name="Friday4" size="16"  type="text" value="Friday" class ="day" disabled="disabled">
                           <input id="ft_from4" name="ft_from4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_friday[0]; ?>" placeholder="From">
                           <input id="ft_to4" name="ft_to4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_friday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Fri (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M4['friday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="fclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="fclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Saturday4" name="Saturday4" size="16"  type="text" value="Saturday" class ="day" disabled="disabled">
                           <input id="st_from4" name="st_from4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_saturday[0]; ?>" placeholder="From">
                           <input id="st_to4" name="st_to4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_saturday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sat (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M4['saturday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="sclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="sclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php } ?></div>
                           </div>
                        </div>
                        <div class="controls mbottom">                          
                           <input id="Sunday4" name="Sunday4" size="16"  type="text" value="Sunday" class ="day" disabled="disabled">
                           <input id="sut_from4" name="sut_from4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_sunday[0]; ?>" placeholder="From">
                           <input id="sut_to4" name="sut_to4" size="16" class ="time" type="text" value="<?php echo $schedule_M4_sunday[1]; ?>" placeholder="To">
                           <div class="left">
                            <div class="left cl"><label class="control-label closed_l" for="closed">Sun (ON/OFF)</label></div>
                            <div class="left"><?php if($schedule_M4['sunday']=='closed'){ ?><input data-no-uniform="true" type="checkbox" name="suclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'N' ? ' checked="checked"' : ''); ?> /><?php }else{ ?><input data-no-uniform="true" type="checkbox" name="suclosed4" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> /><?php }?></div>
                           </div>
                        </div>
                        
                    </div>
                    </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="sort_order">Value Added Services</label>
                        <div class="controls top_m">                        	
                            <input data-no-uniform="true" type="checkbox" name="museum" id="Museum" class="other_services_checkbox" <?php if(isset($museum)){ echo ($museum == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Museum</label>
                            <input data-no-uniform="true" type="checkbox" name="accessibiliy" id="accessibiliy" class="other_services_checkbox" <?php if(isset($accessibiliy)){ echo ($accessibiliy == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Accessibiliy</label>
                            <input data-no-uniform="true" type="checkbox" name="pet_allowed" id="pet_allowed" class="other_services_checkbox" <?php if(isset($pet_allowed)){ echo ($pet_allowed == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services"> Family </label> 
                            <input data-no-uniform="true" type="checkbox" name="audio_guide" id="audio_guide" class="other_services_checkbox" <?php if(isset($audio_guide)){ echo ($audio_guide == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Couple</label>
                            <input data-no-uniform="true" type="checkbox" name="tour_guide" id="tour_guide" class="other_services_checkbox" <?php if(isset($tour_guide)){ echo ($tour_guide == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Tour guide</label></br></br>
                            <input data-no-uniform="true" type="checkbox" name="attraction" id="attraction" class="other_services_checkbox" <?php if(isset($attraction)){ echo ($attraction == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Attraction</label>
                            
                            <input data-no-uniform="true" type="checkbox" name="wildlife" id="wildlife" class="other_services_checkbox" <?php if(isset($wildlife)){ echo ($wildlife == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Wildlife</label>
                            <input data-no-uniform="true" type="checkbox" name="park" id="park" class="other_services_checkbox" <?php if(isset($park)){ echo ($park == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Park</label>
                            <input data-no-uniform="true" type="checkbox" name="garden" id="garden" class="other_services_checkbox" <?php if(isset($garden)){ echo ($garden == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Garden</label>
                            <input data-no-uniform="true" type="checkbox" name="attraction" id="attraction" class="other_services_checkbox" <?php if(isset($attraction)){ echo ($attraction == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Adventure</label></br></br>
                            <input data-no-uniform="true" type="checkbox" name="free_entry" id="free_entry" class="other_services_checkbox" <?php if(isset($free_entry)){ echo ($free_entry== '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Free Entry</label>
                            <input data-no-uniform="true" type="checkbox" name="nature" id="nature" class="other_services_checkbox" <?php if(isset($nature)){ echo ($nature == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Nature</label>
                            <input data-no-uniform="true" type="checkbox" name="scenic" id="scenic" class="other_services_checkbox" <?php if(isset($scenic)){ echo ($scenic == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Scenic</label>
                            <input data-no-uniform="true" type="checkbox" name="culture" id="culture" class="other_services_checkbox" <?php if(isset($culture)){ echo ($culture == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Culture</label>
                            <input data-no-uniform="true" type="checkbox" name="food" id="food" class="other_services_checkbox" <?php if(isset($food)){ echo ($food== '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Food</label>
                            
                            <input data-no-uniform="true" type="checkbox" name="relaxing" id="relaxing" class="other_services_checkbox" <?php if(isset($relaxing)){ echo ($relaxing == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">Relaxing</label></br></br>
                            <input data-no-uniform="true" type="checkbox" name="activity" id="activity" class="other_services_checkbox" <?php if(isset($activity)){ echo ($activity == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Activity</label>
                            <input data-no-uniform="true" type="checkbox" name="one_way_transfer" id="one_way_transfer" class="other_services_checkbox" <?php if(isset($one_way_transfer)){ echo ($one_way_transfer == '1' ? ' checked="checked"' : ''); }else{ ?>  <?php } ?>/><label class="other_services">1 Way Transfer</label>
                            <input data-no-uniform="true" type="checkbox" name="two_way_transfer" id="two_way_transfer" class="other_services_checkbox" <?php if(isset($two_way_transfer)){ echo ($two_way_transfer == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">2 Way Transfer</label>
                            <input data-no-uniform="true" type="checkbox" name="free_and_easy" id="free_and_easy" class="other_services_checkbox" <?php if(isset($free_and_easy)){ echo ($free_and_easy == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Free & Easy</label></br></br>
                             
                            <label class="control-label month">Hours:</label>
                            <input type="time" class ="time" id="Hours" name="hours" value="<?php echo $hours; ?>" placeholder="1:30" style="margin-left:0;">                     
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date_mandatory">Date Mandatory</label>
                          <div class="controls">
                         <div class="input-prepend input-append">
                                <select id="feature" name="date_mandatory">
                                <option <?php if ($date_mandatory == 1 ){?> selected <?php } ?>  value="1">Yes</option>
                                <option <?php if ($date_mandatory == 2 ){?> selected <?php } ?>  value="2">No</option>
                                </select>                                
                            </div>
                       </div>
                    </div>
                     <div class="control-group">
                    	<label class="control-label" for="time-Option">Time Option</label>
                        <div class="controls">                        
                        	
                                <?php $prod_times = explode(',',$time);
                                $time_arr = array("8:00AM", "8:30AM", "9:00AM", "9:30AM", "10:00AM", "10:30AM", "11:00AM", "11:30AM", "12:00AM", "12:30AM", "1:00PM", "1:30PM", "2:00PM", "2:30PM", "3:00PM", "3:30PM", "4:00PM", "4:30PM", "5:00PM", "5:30PM", "6:00PM", "6:30PM", "7:00PM", "7:30PM", "8:00PM", "8:30PM", "9:00PM", "9:30PM", "10:00PM", "10:30PM", "11:00PM", "11:30PM", "12:00PM", "12:30PM", "1:00AM", "1:30AM", "2:00AM", "2:30AM", "3:00AM", "3:30AM", "4:00AM", "4:30AM", "5:00AM", "5:30AM", "6:00AM", "6:30AM", "7:00AM", "7:30AM"); 
                                ?>
                                <select id="timelist" name="timelist[]" multiple="multiple" style="height: 170px;">
                                <?php if($id!=""){ ?>
                                    <option value="">-----------------No Time------------</option>
                                    <?php }else{ ?>
                                    <option value="" selected="selected">-----------------No Time------------</option>
                                <?php }?>
                                <?php foreach($time_arr as $time){ ?>
                                    <option value="<?php echo $time;?>" <?php if(in_array($time,$prod_times)){ ?> selected="selected" <?php }?>><?php echo $time;?></option>                                   
                                <?php } ?>
                                </select>
                            
<!--                                <select class="RFValues" id="rightValues" size="4" multiple>
                                    <option>8:00AM</option>
                                    <option>8:30AM</option>
                                    <option>9:00AM</option>
                                    <option>9:30AM</option>
                                    <option>10:00AM</option>
                                    <option>10:30AM</option>
                                    <option>11:00AM</option>
                                    <option>11:30AM</option>
                                    <option>12:00AM</option>
                                    <option>12:30AM</option>
                                    <option>1:00PM</option>
                                    <option>1:30PM</option>
                                    <option>2:00PM</option>
                                    <option>2:30PM</option>
                                    <option>3:00PM</option>
                                    <option>3:30PM</option>
                                    <option>4:00PM</option>
                                    <option>4:30PM</option>
                                    <option>5:00PM</option>
                                    <option>5:30PM</option>
                                    <option>6:00PM</option>
                                    <option>6:30PM</option>
                                    <option>7:00PM</option>
                                    <option>7:30PM</option>
                                    <option>8:00PM</option>
                                    <option>8:30PM</option>
                                    <option>9:00PM</option>
                                    <option>9:30PM</option>
                                    <option>10:00PM</option>
                                    <option>10:30PM</option>
                                    <option>11:00PM</option>
                                    <option>11:30PM</option>
                                    <option>12:00PM</option>
                                    <option>12:30PM</option>
                                    <option>1:00AM</option>
                                    <option>1:30AM</option>
                                    <option>2:00AM</option>
                                    <option>2:30AM</option>
                                    <option>3:00AM</option>
                                    <option>3:30AM</option>
                                    <option>4:00AM</option>
                                    <option>4:30AM</option>
                                    <option>5:00AM</option>
                                    <option>5:30AM</option>
                                    <option>6:00AM</option>
                                    <option>6:30AM</option>
                                    <option>7:00AM</option>
                                    <option>7:30AM</option>
                                    
                                </select>                                -->
                            	</div>
<!--                            	<div class="all-inner">
                                    <input type="button" id="btnLeft" value="&gt;&gt;" /></br>
                                    <input type="button" id="btnRight" value="&lt;&lt;" />
                                </div>-->
<!--                                <div class="all-inner">
                                   <?php // $times = explode(',',$time);?>
                                        <select class="RFValues" id="leftValues" name="timelist[]" size="5" multiple>
                                     <?php
//									foreach($times as $tims){
//                                                                            if($id!=""){
//                                                                                $selected = "selected";
//                                                                            }else{
//                                                                                $selected = "";
//                                                                            }
                                                                            
									?>  
                                   	<option value="<?php //echo $tims;?> " <?php //echo $selected; ?>><?php //echo $tims;?></option>
									<?php //} ?>
                                    </select>
									
                                </div>-->
                            
                                
                      
                    </div>
                    
                    <div class="control-group">
                    	<label class="control-label" for="other-services">Other Services</label>
                        <div class="controls">
                             <?php $otherservices = explode(',',$other_services); ?>
                            <select id="language" name="other_services[]" multiple="multiple" style="height: 100px;">
                                  <?php if($id!=""){ ?>
                                    <option value="">--------------No Other Services---------</option>
                                    <?php }else{ ?>
                                    <option value="" selected="selected">--------------No Other Services---------</option>
                                    <?php }?>
                                    <?php   
                                        
                                        $where_service = array('is_active' => 'Y');
                                        $rowsdata_ser = getRows(DB_TABLE_PREFIX . 'services', $where_service, '*');
					$services_data = $rowsdata_ser['data'];	
                                       
                                        foreach ($services_data as $serv) {
                                            extract($serv);
                                                                                                                          
                                    ?>
                                
                                    <option value="<?php echo $id; ?>" <?php if(in_array($id,$otherservices)){ ?> selected="selected" <?php }?>><?php echo $services; ?></option>
                                        <?php  } ?>        
                               
                                </select>
<!--                                <div class="all-inner"> -->
                                    <?php //$otherservices = explode(',',$other_services); ?>
<!--                                <select class="RFValues" id="rightValues2" size="4" multiple>
                                    <?php   
                                        
//                                        $where_service = array('is_active' => 'Y');
//                                        $rowsdata_ser = getRows(DB_TABLE_PREFIX . 'services', $where_service, '*');
//					$services_data = $rowsdata_ser['data'];	
//                                       
//                                        foreach ($services_data as $serv) {
//                                            extract($serv);
//                                                                                       
//                                            
//                                            if (in_array($serv['id'], $otherservices)){
//                                                
//                                            }else{
                                                                                   
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $services; ?></option>
                                            <?php // } } ?>                                    
                                </select>                                 -->
<!--                            	</div>-->
<!--                            	<div class="all-inner">
                                    <input type="button" id="btnLeft2" value="&gt;&gt;" /></br>
                                    <input type="button" id="btnRight2" value="&lt;&lt;" />
                                </div>-->
<!--                                <div class="all-inner">-->
                                   <?php // $otherservices = explode(',',$other_services);
//                                    $lastid = end($otherservices);                                  
//                                    foreach($otherservices as $service_id){
//                                        
//                                        $OR= " OR ";
//                                        if($lastid==$service_id){
//                                            $OR = "";
//                                        }
//                                        
//                                     $s_id .= "`id`=".$service_id.$OR;
//                                    }
                                   ?>
                                     
<!--                                        <select class="RFValues" id="leftValues2" name="other_services[]" size="5" multiple>
                                        
                                        <?php   
//                                        $rows_services = "select * from services where ".$s_id;
//                                        $query = mysql_query($rows_services);
//                                        $count = mysql_num_rows($query);
//                                        
//                                        while ($services = mysql_fetch_assoc($query)) {
//                                            echo $services['id'];
//                                            echo $services['services'];
//                                            if($id!=""){
//                                                $selected = "selected";
//                                            }else{
//                                                $selected = "";
//                                            }
//                                        
                                      ?> 
                                   
                                   	<option value="<?php echo $services['id'];?> " <?php echo $selected; ?>><?php echo $services['services'];?></option>
                                        <?php //} ?>
                                    </select>-->
									
<!--                                </div>-->
                            
                                
                       </div>
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="is_active">Featured</label>
                        <div class="controls">
                            <input data-no-uniform="true" type="checkbox" name="is_feature" id="is_active" class="iphone-toggle" <?php echo ($is_feature == 'Y' ? ' checked="checked"' : ''); ?> />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="is_active">Active</label>
                        <div class="controls">
                            <input data-no-uniform="true" type="checkbox" name="is_active" id="is_active" class="iphone-toggle" <?php echo ($is_active == 'Y' ? ' checked="checked"' : ''); ?> />
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>
            
             
            
        </div>
    </div><!--/span-->
</div><!--/row-->
<!--<div id="message_container"></div>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> Products</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable" id="table_<?php echo DB_TABLE_PREFIX . "product"; ?>">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Code</th>
                        <th>Category</th>
                        <th>Adult Price</th>
                        <th>Child Price</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    $sort_order = "product.sort_order = '0', product.sort_order";
                    $where = array('product.is_deleted' => 'N');
                    $rows_data = getRows(DB_TABLE_PREFIX . 'product', $where, 'product.*,category.title AS category', '', 'LEFT JOIN category ON category.id = product.category_id', $sort_order);
                    $product_data = $rows_data['data'];
                    if ($rows_data['total_recs'] > 0) {
                        foreach ($product_data as $product) {
                            extract($product);
                            $image_path = '../img/products/' . $image;
                            if ($image == "" || !file_exists($image_path))
                                $image_path = '../img/products/noimage.jpeg';
                            ?>    
                            <tr id="row_<?php echo $id; ?>">
                                <td><img src="<?php echo $image_path; ?>" style="height: 50px;" /></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $code; ?></td>                        
                                <td><?php echo $category; ?></td>                        
                                <td><?php echo CURRENCY_SYMBOL.$adult_price; ?></td>                        
                                <td><?php echo CURRENCY_SYMBOL.$child_price; ?></td>                        
                                <td><?php echo $sort_order; ?></td>                        
                                <td class="center">
                                    <span class="label label-<?php echo ($is_active == 'Y' ? 'success' : 'important'); ?>"><?php echo ($is_active == 'Y' ? 'Active' : 'Inactive'); ?></span>
                                </td>
                                <td class="center">                            
                                    <a class="btn btn-info" href="product.php?id=<?php echo $id; ?>">
                                        <i class="icon-edit icon-white hidden-tablet"></i>  Edit                                            
                                    </a>
                                    <a class="btn btn-danger delete-rec" href="javascript:{};" data-id="<?php echo $id; ?>" data-table="<?php echo DB_TABLE_PREFIX . "product" ?>">
                                        <i class="icon-trash icon-white hidden-tablet"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>   
                </tbody>
            </table>            
        </div>
    </div>/span

</div>/row-->
<script>
    
    $(document).ready(function(){
 
  $("#sort_order").keyup(function(){
 
    var sort_order = $("#sort_order").val();
    var id = $("#id").val();
    
    $.ajax({
    method: "POST",
    url: "prod_sortorder.php",
    data: {sort_order:sort_order,id:id}

    })
        .done(function (responce) {

            if (responce)
            {

                console.log(responce);
                $("#sortorder_responce").html(responce);
                //if(responce!=' '){
                //$("#sort_order").val(' ');
                //}
                return false;

            }

        });

 
  });
 
});
                  
</script>
<?php
include('footer.php');
?>