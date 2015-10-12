<?php
include_once 'inc/config.inc.php';
$id= $_GET['id'];
/*echo $id;
$id2 = explode('=',$id);
echo $id2;
 $url = "p=".$id;
$res = urlencode($url); */


//----------------products------------
$where = array('product.is_deleted' => 'N', 'product.is_active' => 'Y', 'product.id' => $id);
$rows_data = getRows(DB_TABLE_PREFIX . 'product', $where, 'product.*,category.title AS category,category.slug AS category_slug', '', 'LEFT JOIN category ON category.id = product.category_id');

if ($rows_data['total_recs'] == 0) {
    enqueueMsg("Invalid product", "error", "product.php");
}
$product_data_tmp = $rows_data['data'];
$product_data = $product_data_tmp[0];

//----------------rating------------
$where2 = array('product_id' => $id);
$rows_data2 = getRows(DB_TABLE_PREFIX . 'reviews', $where2, '*');
$product_data2 = $rows_data2['data'];

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
    
<header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->

   <section class="parallax-window" data-parallax="scroll" data-image-src="img/single_tour_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1><?php echo $product_data['title']; ?></h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                     <?php
					
					if ($rows_data2['total_recs'] > 0) {
					$total= 0;
					$total_re_overall=0;			
					foreach ($product_data2 as $product1) {
					extract($product1);					
					$total_re_overall1 += ($review_overall/10);					
										
				?>  
             
                
                <?php }
					$totalnum1 = count($product_data2);				
					$re_overall1 = ($total_re_overall1/$totalnum1)*100;			
								
				 ?>            
                    <span class="rating">
                    <?php if($re_overall1 <= 20 and $re_overall1 > 0){?> 
                    <i class="icon-smile voted"></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile"></i>
                    <?php }
					if($re_overall1 <=40 and $re_overall1 > 20) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile "></i><i class="icon-smile "></i><i class="icon-smile"></i>
                    <?php } if($re_overall1 <=60 and $re_overall1 > 40) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile "></i><i class="icon-smile"></i>
                    <?php }if($re_overall1 <=80 and $re_overall1 > 60) { ?>
                   <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                    <?php } if($re_overall1 <=100 and $re_overall1 > 80) { ?>
                   <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                    <?php } ?>                      
                    <small>(<?php echo $totalnum1; ?>)</small>
                    </span>
                  <?php }else{ ?>
                  <span class="rating"><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><small>(0)</small></span>
                  <?php } ?>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main">
                        from/per person <span><sup><?php echo CURRENCY_SYMBOL; ?></sup><?php echo (float)$product_data['adult_price']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->

    <div id="position">
            <div class="container">
                        <ul>
                        <li><a href="<?=site_url(''); ?>">Home</a></li>
                        <li><a href="<?=site_url(''); ?>"><?php echo $product_data['category']; ?></a></li>
                        <li>Page active</li>
                        </ul>
            </div>
    </div><!-- End Position -->
    
 <div class="collapse" id="collapseMap">
	<div id="map" class="map"></div>
</div><!-- End Map -->

<div class="container margin_60">
<?php 
				 if($_GET['msg']=='success'){
				 ?>
                <div class="success">
                	<span style=" color:#0c0; text-align:center;">Update Successful! Thank you so much for your opinion!</span>
                </div>
                <?php } ?>
	<div class="row">
    
		<div class="col-md-8" id="single_tour_desc">
        
			<div id="single_tour_feat">
				<ul>
					<li><i class="icon_set_1_icon-4"></i>Museum</li>
					<li><i class="icon_set_1_icon-83"></i>3 Hours</li>
					<li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
					<li><i class="icon_set_1_icon-82"></i>144 Likes</li>
					<li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
					<li><i class="icon_set_1_icon-97"></i>Audio guide</li>
					<li><i class="icon_set_1_icon-29"></i>Tour guide</li>
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
            <?php if($schedule_M1['id']=='' and $schedule_M2['id']=='' and $schedule_M3['id']=='' and $schedule_M4['id']==''){}else{ ?>
			<hr>
            
			<div class="row">
				<div class="col-md-3">
					<h3>Schedule</h3>
				</div>
				<div class="col-md-9">
                	<?php if($schedule_M1['id']!='') {?>
					<div class=" table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th colspan="2">
								<?php echo $schedule_M1['month'];?>
							</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($schedule_M1['monday'])){ ?>
						<tr>
                        	
							<td>
								Monday
							</td>
							<td>
								<?php if($schedule_M1['monday']!='closed'){ echo $schedule_M1['monday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
                          
						</tr>
						<?php }else{}
							  if(isset($schedule_M1['tuesday'])){
						 ?>
						<tr>
							<td>
								Tuesday
							</td>
							<td>
								<?php if($schedule_M1['tuesday']!='closed'){ echo $schedule_M1['tuesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M1['wednesday'])){
						 ?>
						<tr>
							<td>
								Wednesday
							</td>
							<td>
								<?php if($schedule_M1['wednesday']!='closed'){ echo $schedule_M1['wednesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M1['thursday'])){
						 ?>
						<tr>
							<td>
								Thursday
							</td>
							<td>
								<?php if($schedule_M1['thursday']!='closed'){ echo $schedule_M1['thursday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M1['friday'])){
						 ?>
						<tr>
							<td>
								Friday
							</td>
							<td>
								<?php if($schedule_M1['friday']!='closed'){ echo $schedule_M1['friday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M1['saturday'])){
						 ?>
						<tr>
							<td>
								Saturday
							</td>
							<td>
								<?php if($schedule_M1['saturday']!='closed'){ echo $schedule_M1['saturday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M1['sunday'])){
						 ?>
						<tr>
							<td>
								Sunday
							</td>
							<td>
								<?php if($schedule_M1['sunday']!='closed'){ echo $schedule_M1['sunday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{} ?>
						
						</tbody>
						</table>
					</div>
                    <?php }else{} ?>
                    
					<?php if($schedule_M2['id']!='') {?>
					<div class=" table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th colspan="2">
								<?php echo $schedule_M2['month'];?>
							</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($schedule_M2['monday'])){ ?>
						<tr>
                        	
							<td>
								Monday
							</td>
							<td>
								<?php if($schedule_M2['monday']!='closed'){ echo $schedule_M2['monday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
                          
						</tr>
						<?php }else{}
							  if(isset($schedule_M2['tuesday'])){
						 ?>
						<tr>
							<td>
								Tuesday
							</td>
							<td>
								<?php if($schedule_M2['tuesday']!='closed'){ echo $schedule_M2['tuesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M2['wednesday'])){
						 ?>
						<tr>
							<td>
								Wednesday
							</td>
							<td>
								<?php if($schedule_M2['wednesday']!='closed'){ echo $schedule_M2['wednesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M2['thursday'])){
						 ?>
						<tr>
							<td>
								Thursday
							</td>
							<td>
								<?php if($schedule_M2['thursday']!='closed'){ echo $schedule_M2['thursday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M2['friday'])){
						 ?>
						<tr>
							<td>
								Friday
							</td>
							<td>
								<?php if($schedule_M2['friday']!='closed'){ echo $schedule_M2['friday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M2['saturday'])){
						 ?>
						<tr>
							<td>
								Saturday
							</td>
							<td>
								<?php if($schedule_M2['saturday']!='closed'){ echo $schedule_M2['saturday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M2['sunday'])){
						 ?>
						<tr>
							<td>
								Sunday
							</td>
							<td>
								<?php if($schedule_M2['sunday']!='closed'){ echo $schedule_M2['sunday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{} ?>
						
						</tbody>
						</table>
					</div>
                    <?php }else{} ?>
                    
                    <?php if($schedule_M3['id']!='') {?>
					<div class=" table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th colspan="2">
								<?php echo $schedule_M3['month'];?>
							</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($schedule_M3['monday'])){ ?>
						<tr>
                        	
							<td>
								Monday
							</td>
							<td>
								<?php if($schedule_M3['monday']!='closed'){ echo $schedule_M3['monday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
                          
						</tr>
						<?php }else{}
							  if(isset($schedule_M3['tuesday'])){
						 ?>
						<tr>
							<td>
								Tuesday
							</td>
							<td>
								<?php if($schedule_M3['tuesday']!='closed'){ echo $schedule_M3['tuesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M3['wednesday'])){
						 ?>
						<tr>
							<td>
								Wednesday
							</td>
							<td>
								<?php if($schedule_M3['wednesday']!='closed'){ echo $schedule_M3['wednesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M3['thursday'])){
						 ?>
						<tr>
							<td>
								Thursday
							</td>
							<td>
								<?php if($schedule_M3['thursday']!='closed'){ echo $schedule_M3['thursday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M3['friday'])){
						 ?>
						<tr>
							<td>
								Friday
							</td>
							<td>
								<?php if($schedule_M3['friday']!='closed'){ echo $schedule_M3['friday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M3['saturday'])){
						 ?>
						<tr>
							<td>
								Saturday
							</td>
							<td>
								<?php if($schedule_M3['saturday']!='closed'){ echo $schedule_M3['saturday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M3['sunday'])){
						 ?>
						<tr>
							<td>
								Sunday
							</td>
							<td>
								<?php if($schedule_M3['sunday']!='closed'){ echo $schedule_M3['sunday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{} ?>
						
						</tbody>
						</table>
					</div>
                    <?php }else{} ?>
                    
                    <?php if($schedule_M4['id']!='') {?>
					<div class=" table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th colspan="2">
								<?php echo $schedule_M4['month'];?>
							</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($schedule_M4['monday'])){ ?>
						<tr>
                        	
							<td>
								Monday
							</td>
							<td>
								<?php if($schedule_M4['monday']!='closed'){ echo $schedule_M4['monday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
                          
						</tr>
						<?php }else{}
							  if(isset($schedule_M4['tuesday'])){
						 ?>
						<tr>
							<td>
								Tuesday
							</td>
							<td>
								<?php if($schedule_M4['tuesday']!='closed'){ echo $schedule_M4['tuesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M4['wednesday'])){
						 ?>
						<tr>
							<td>
								Wednesday
							</td>
							<td>
								<?php if($schedule_M4['wednesday']!='closed'){ echo $schedule_M4['wednesday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M4['thursday'])){
						 ?>
						<tr>
							<td>
								Thursday
							</td>
							<td>
								<?php if($schedule_M4['thursday']!='closed'){ echo $schedule_M4['thursday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M4['friday'])){
						 ?>
						<tr>
							<td>
								Friday
							</td>
							<td>
								<?php if($schedule_M4['friday']!='closed'){ echo $schedule_M4['friday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M4['saturday'])){
						 ?>
						<tr>
							<td>
								Saturday
							</td>
							<td>
								<?php if($schedule_M4['saturday']!='closed'){ echo $schedule_M4['saturday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{}
							  if(isset($schedule_M4['sunday'])){
						 ?>
						<tr>
							<td>
								Sunday
							</td>
							<td>
								<?php if($schedule_M4['sunday']!='closed'){ echo $schedule_M4['sunday'];}else{ ?>
                                <span class="label label-danger">Closed</span>
                                <?php } ?>
							</td>
						</tr>
                        <?php }else{} ?>
						
						</tbody>
						</table>
					</div>
                    <?php }else{} ?>
				</div>
			</div>
            <?php } ?>
			<hr>
            <?php
					
					if ($rows_data2['total_recs'] > 0) {
					$total= 0;
					$total_re_overall=0;			
					foreach ($product_data2 as $product) {
					extract($product);					
					$total_re_overall += ($review_overall/10);					
					$total_re_accommodation += ($review_accommodation/10);
					$total_re_transport += ($review_transport/10);
					$total_re_meals += ($review_meals/10);
					$total_re_money += ($review_money/10);
					$total_re_program_accuracy += ($review_program_accuracy/10);
					
				?>  
             
                
                <?php }
					$totalnum = count($product_data2);				
					$re_overall = ($total_re_overall/$totalnum)*100;				
					$re_accommodation = ($total_re_accommodation/$totalnum)*100;
					$re_transport = ($total_re_transport/$totalnum)*100;
					$re_meals = ($total_re_meals/$totalnum)*100;
					$re_money = ($total_re_money/$totalnum)*100;
					$re_program_accuracy = ($total_re_program_accuracy/$totalnum)*100;				
				 ?> 
            
			<div class="row">
				<div class="col-md-3">
					<h3>Reviews </h3>
				</div>
				<div class="col-md-9">
                	<div id="general_rating"><?php echo $totalnum;?> Reviews 
                    <div class="rating">
                    <?php if($re_overall <= 20 and $re_overall > 0){?> 
                    <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    <?php }
					if($re_overall <=40 and $re_overall > 20) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    <?php } if($re_overall <=60 and $re_overall > 40) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    <?php }if($re_overall <=80 and $re_overall > 60) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                    <?php } if($re_overall <=100 and $re_overall > 80) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                    <?php } ?>							
						</div>
                    </div><!-- End general_rating -->
                    <div class="row" id="rating_summary">
                    	<div class="col-md-6">
                        	<ul>
                            	<li>Accommodation
                                    <div class="rating">
										<?php if($re_accommodation <= 20 and $re_accommodation > 0){?> 
                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }
                                        if($re_accommodation <=40 and $re_accommodation > 20) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php } if($re_accommodation <=60 and $re_accommodation > 40) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }if($re_accommodation <=80 and $re_accommodation > 60) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        <?php } if($re_accommodation <=100 and $re_accommodation > 80) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        <?php } ?>	
                                    </div>
                                </li>
                                <li>Transport
                                <div class="rating">
                                           <?php if($re_transport <= 20 and $re_transport > 0){?> 
                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }
                                        if($re_transport <=40 and $re_transport > 20) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php } if($re_transport <=60 and $re_transport > 40) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }if($re_transport <=80 and $re_transport > 60) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        <?php } if($re_transport <=100 and $re_transport > 80) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        <?php } ?>	
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        	<ul>
                            	<li>Meals
                                <div class="rating">
                                      <?php if($re_meals <= 20 and $re_meals > 0){?> 
                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }
                                        if($re_meals <=40 and $re_meals > 20) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php } if($re_meals <=60 and $re_meals > 40) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }if($re_meals <=80 and $re_meals > 60) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        <?php } if($re_meals <=100 and $re_meals > 80) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                        <?php } ?>	
                                    </div>
                                </li>
                                <li>Money
                                <div class="rating">
                                       <?php if($re_money <= 20 and $re_money > 0){?> 
                                        <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }
                                        if($re_money <=40 and $re_money > 20) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php } if($re_money <=60 and $re_money > 40) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                        <?php }if($re_money <=80 and $re_money > 60) { ?>
                                        <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                        <?php } if($re_money <=100 and $re_money > 80) { ?>
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
                                           <?php if($re_program_accuracy <= 20 and $re_program_accuracy > 0){?> 
                                            <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                            <?php }
                                            if($re_program_accuracy <=40 and $re_program_accuracy > 20) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                            <?php } if($re_program_accuracy <=60 and $re_program_accuracy > 40) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                            <?php }if($re_program_accuracy <=80 and $re_program_accuracy > 60) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                            <?php } if($re_program_accuracy <=100 and $re_program_accuracy > 80) { ?>
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                            <?php } ?>	
                                        </div>
                                    </li>
                            </ul>
                        </div>
                        
                    </div><!-- End row -->
                    <hr>
                    <?php foreach ($product_data2 as $rating) {
							extract($rating);					 
					?>
					<div class="review_strip_single">
						<img src="img/avatar3.jpg" alt="" class="img-circle">
						<small><?php echo $date; ?><!--- 10 March 2015 ---></small>
						<h4><?php echo $username; ?></h4>
						<p>
							 <?php echo '"'.$likes.'"<br>'; echo '"'.$dislikes.'"<br>'; ?>
						</p>
						<div class="rating">
                        <?php if($review_overall <= 2 and $review_overall > 0){?> 
                    <i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    <?php }
					if($review_overall <=40 and $review_overall > 20) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    <?php } if($review_overall <=60 and $review_overall > 40) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                    <?php }if($review_overall <=80 and $review_overall > 60) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                    <?php } if($review_overall <=100 and $review_overall > 80) { ?>
                    <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                    <?php } ?>	
							
						</div>
					</div><!-- End review strip -->
                    <?php } ?>
					
                    
					
				</div>
			</div>
            <?php }else{ ?>
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
                            	<li>Accommodation
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
                            	<li>Meals
                                <div class="rating">                   
                    <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>                    						
						</div>
                                </li>
                                <li>Money
                                <div class="rating">                   
                    <i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>                    						
						</div>
                                </li>                               
                                
                            </ul>
                        </div>
                        
                         <div class="col-md-6">
                        	<ul>
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
           
           
            if(isset($_SESSION['book'][$pid])){ 
             // unset($_SESSION['cart'][$pid]);
              //$_SESSION['cart'][$pid]['a_qty']++; 
              
            }else{ 
                $sort_order='id ASC ';
                $where = array('id' => $pid);

                $rows_data = getRows(DB_TABLE_PREFIX . 'product', $where, '*', $sort_order);

                $product_data = $rows_data['data'];
                $name = $product_data[0]['title'];
                $a_price = $product_data[0]['adult_price'];
                $c_price = $product_data[0]['child_price'];
                $_SESSION['book'] = array();
                $_SESSION['book'][$pid] = array('pid'=>$pid, 'name' => $name,'adult_price'=> $a_price,
                    'child_price'=>$c_price, 'a_qty' => 1, 'c_qty'=>0, 'pkg'=> 1);
                //$_SESSION['cart'][$id]['quantity']++; // another of this item to the cart
            }
        ?>
		<aside class="col-md-4">
		<!--<p class="hidden-sm hidden-xs">
			<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
		</p>-->
		<div class="box_style_1 expose">
			<h3 class="inner">- Booking -</h3>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<label><i class="icon-calendar-7"></i> Select a date</label>
						<input  class="date-pick form-control" data-date-format="M d, D" type="text">
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
				<td>
					Adults
				</td>
				<td id="a_num" class="text-right">
                                    <?php echo $_SESSION['book'][$pid]['a_qty']; ?>	
				</td>
			</tr>
			<tr>
				<td>
					Children
				</td>
				<td id="c_num" class="text-right">
					<?php echo $_SESSION['book'][$pid]['c_qty']; ?>
				</td>
			</tr>
			<tr style="font-size:10px;color:#08c;">
				<td class="text-right" style="margin:0px;padding:0px;">
					Press icon below 
				</td>
				<td style="margin:0px;padding:0px;">
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
                        $total = (($_SESSION['book'][$pid]['adult_price'] * $_SESSION['book'][$pid]['a_qty'])
                                + ($_SESSION['book'][$pid]['child_price'] * $_SESSION['book'][$pid]['c_qty']));
                        echo  ' SGD-<span id="t_cost">'.$total.'</span>';       
                    ?>    
                            </td>
			</tr>
			</tbody>
                       
			</table>
                         <div id="progress" title="Code: 0xe802" class="the-icons" style="margin-bottom:10px;display:none; font-size:20px"><i class="icon-spin5 animate-spin"></i> <span class="i-name">Wait....</span><span class="i-code"></span></div>
                        <input type="hidden" id="pid" value="<?php echo $pid; ?>">
                        
<!--                        <p id="progress" style="font-size:20px;display:none"><i class="fa fa-cog fa-spin"></i><span style="margin-left:5px;">Wait....</span></p>-->
                     
					<a id="book" class="btn_full" onclick="return refresh(this.id)">Book now</a>
					
					<a  class="btn_full_outline" onclick="addtowishlist()"><i class=" icon-heart"></i> Add to whislist</a>
					<div id="alert_info" class="alert alert-danger" style="margin-top:10px;display:none;text-align:center;font-size:16px;">
					  <i class="fa fa-exclamation-triangle"></i>
					  <span id="info"></span>
					</div>
                        
		</div><!--/box_style_1 -->
        
		<div class="box_style_4">
			<i class="icon_set_1_icon-90"></i>
			<h4><span>Book</span> by phone</h4>
			<a href="tel://006590886618" class="phone">+65-90886618</a>
			<small>Monday to Friday 9.00am - 7.30pm</small>
		</div>
        <div class="box_style_4">
        	<?php if($_SESSION['Auth_user']==TRUE) { ?>
			<a class="btn_full_outline" href="rating.php?title=<?php echo $product_data['title']; ?>&id=<?php echo $product_data['id']; ?>">Leave a Review</a>
            <?php }else {?>
            <a class="btn_full_outline" href="login.php">Leave a Review</a>
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
<script src="<?=site_url('js/icheck.js');?>"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>

<!-- Date and time pickers -->
<script src="<?=site_url('js/bootstrap-datepicker.js');?>"></script>
<script src="<?=site_url('js/bootstrap-timepicker.js');?>"></script>
<script>
  $('input.date-pick').datepicker('setDate', 'today');
  $('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})

function addtowishlist()
{
        var id = $("#pid").val();
        $.ajax({
            method: "POST",
            url: "addtowishlist.php",
            data: {pid:id },
            beforeSend: function( msg ) {
                //$("#progress").show(); 
            }
          })
        .done(function( responce ) {

        if(responce)
        {
            if(responce=="success")
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
            data: {time:time,date:date, control:id, adults: adults , childs:childs, pid:pid },
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
                $("#a_num").html(obj['adult']);
                $("#c_num").html(obj['childs']);
                $("#t_cost").html(obj['total']);
                return false;
            }
            else{
                window.location.replace("addtocart.php?pid="+pid);
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
</script>

<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map.js"></script>
<script src="js/infobox.js"></script>

  </body>
</html>