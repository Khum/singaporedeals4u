<?php
include_once 'inc/config.inc.php';
$sort_order = "id";
if (isset($_GET['sort']) && $_GET['sort'] != "") {
    $sort_order = $_GET['sort'];
}
echo $_GET['cat'];
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

        <?php include_once 'head.php'; ?>
        <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
        <link href="css/skins/square/grey.css" rel="stylesheet">
        <link href="css/pagination.css" rel="stylesheet">
         <!-- CSS -->
        <link href="css/blog.css" rel="stylesheet">
        
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
    
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
            <h1>Tour Blog</h1>
            <p></p></div>
            </div>
    </section><!-- End section -->
    
	<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog Page</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div><!-- End position -->

<div class="container margin_60">
    <div class="row">
      <?php include_once 'blog_post_sidebar.php'; ?>
     
     <div class="col-md-9">
     	   <div class="box_style_1">
               
               <?php        
//                   
                    
                    //------------Products with search----------
                        if (isset($_GET['cat'])) {
                            $search = '%' . $_GET['cat'] . '%';
                            $where = array('blog_category' => $search);
                              
                              $rows_data = searchRows(DB_TABLE_PREFIX . 'blog', $where, '*', $sort_order, '', '', 'Y', '4');
                              $product_data = $rows_data['data'];
                            
                        } else {
                            //---------All Products on page load---------                            
                            $sort_order = "sort_order = '0', sort_order";
                            $where = array('is_deleted' => 'N', 'is_active' => 'Y');
                             $rows_data = getorderRows(DB_TABLE_PREFIX . 'blog', $where, '*', $sort_order, '', '', 'Y', '2');
                            $product_data = $rows_data['data'];
                        }
                ?>
               <?php  if ($rows_data['total_recs'] > 0) {
                            ?>
                            <?php
                            foreach ($product_data as $product) {
                                
                            
                                extract($product);
                                $image_path = 'img/blogs/' . $image;
                                if ($image == "" || !file_exists($image_path))
                                    $image_path = 'img/blogs/noimage.jpeg';
                                
                                $long_desc = $long_description;
                                $blog_title = stripcslashes(Decode($product['title']));
                                
                                $title_arr = explode(" ",$blog_title);                                
                                $blg_title =  implode("-",$title_arr);
                                  
                                //$encoded_id = base64_encode($id);
                                //$decoded = base64_decode($encoded);
                                
                                
                                ?>

		
     		<div class="post">
					<a href="blog_post.php?id=<?php echo $id; ?>/<?php echo $blg_title; ?>" title="blog_post.php"><img src="<?php echo $image_path; ?>" alt="" class="img-responsive"></a>
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
                                                            <li><i class="icon-calendar-empty"></i> On <span> <?php echo $dat = date("d M Y", strtotime($date)); ?> </span></li>
                                <li><i class="icon-inbox-alt"></i> <?php echo $blog_category; ?></li>
								<li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a></li>
							</ul>
						</div>
                                            <div class="post-right" style="display: none"><i class="icon-comment"></i><a href="#"><?php echo $comments; ?> </a></div>
					</div>
                                        <a href="blog_post.php?id=<?php echo $id; ?>/<?php echo $blg_title; ?>" title="blog_post.php"><h2><?php echo $blog_title; ?></h2></a>
					<p>
						<?php
                                                    $des = stripcslashes(Decode($long_description));
                                                    echo substr($des, 0, 300);
                                                                                                   
                                                   
                                                    
                                                    ?>
					</p>
                    
					<a href="blog_post.php?id=<?php echo $id; ?>/<?php echo $blg_title; ?>" class="btn_1" title="blog_post.php">Read more</a>
				</div><!-- end post -->
                
                <hr>
                            <?php } } else{  echo 'No Records Found'; } ?>
                
                           
                            
                
<!--				<div class="post">
					<a href="blog_post.html" title="blog_post.html"><img src="img/blog-1.jpg" alt="" class="img-responsive"></a>
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
								<li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span></li>
                                <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a></li>
								<li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a></li>
							</ul>
						</div>
						<div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
					</div>
					<h2>Duis aute irure dolor in reprehenderit</h2>
					<p>
						Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
					</p>
					<a href="blog_post.html" class=" btn_1">Read more</a>
				</div> end post -->
                
<!--                <hr>-->
                
<!--				<div class="post">
					<a href="blog_post.html" title="blog_post.html"><img src="img/blog-2.jpg" alt="" class="img-responsive"></a>
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
								<li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span></li>
                                <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a></li>
								<li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a></li>
							</ul>
						</div>
						<div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
					</div>
					<h2>Duis aute irure dolor in reprehenderit</h2>
					<p>
						Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
					</p>
                    <p>
						Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
					</p>
					<a href="blog_post.html" class="btn_1" title="blog_post.html">Read more</a>
				</div> end post -->
                </div><!-- end box style -->
				<hr>
                
                <div class="text-center">
                            <?php
                            if ($rows_data['nav_links'] != '') {
                                ?>    

                                <ul class="pagination-custom list-unstyled list-inline">
                                    <?php echo $rows_data['nav_links']; ?>
                                </ul>
                                <?php
                            }
                            ?>
                        </div><!-- end pagination-->
     </div><!-- End col-md-9-->   
  </div><!-- End row-->   
</div><!-- End container -->


 <!-- Start footer -->
        <?php include_once 'footer.php'; ?>
 <!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->


  </body>
</html>