<?php
include_once 'inc/config.inc.php';

//----------------products------------
$id = $_GET['id'];
$where = array('is_deleted' => 'N', 'is_active' => 'Y', 'id' => $id);

$blog_data = getRows(DB_TABLE_PREFIX . 'blog', $where, '*');
$blogpost_data = $blog_data['data'];
$blog = $blogpost_data[0];
$image = $blog['image'];
$image_path = 'img/blogs/' . $image;
if ($image == "" || !file_exists($image_path))
$image_path = 'img/blogs/noimage.jpeg';

//----------------likes---------------
    $where_blg_id =  array('blog_id' => $blog['id'],'is_active' => 'Y');
    $rows_data_blogcmt = getRows(DB_TABLE_PREFIX . 'blog_comment', $where_blg_id, '*');
    $blogcomments_data = $rows_data_blogcmt['data'];
    $total_comments = count($blogcomments_data);                    
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
    
 	<section class="parallax-window" data-parallax="scroll" data-image-src="img/bg_blog.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
            <h1>Tour Blog</h1>
            <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p></div>
            </div>
    </section><!-- End section -->

    
	<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog Post</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div><!-- End position -->

<div class="container margin_60">
    <div class="row">
      <?php include_once 'blog_post_sidebar.php'; ?>
     
     <div class="col-md-9">
     	<div class="box_style_1">
     		<div class="post nopadding">
				<img src="<?php echo $image_path; ?>" alt="" class="img-responsive">
					<div class="post_info clearfix">
						<div class="post-left">
							<ul>
								<li><i class="icon-calendar-empty"></i>On <span><?php echo $dat = date("d M Y", strtotime($blog['date'])); ?></span></li>
                                <li><i class="icon-inbox-alt"></i> <a href="#"><?php echo $blog['blog_category']; ?></a></li>
								<li><i class="icon-tags"></i>Tags <a href="#"><?php echo $blog['tags']; ?></a> <!--<a href="#">Personal</a>--></li>
							</ul>
						</div>
						<div class="post-right"><i class="icon-comment"></i><a href="#"><?php echo $blog['comments']; ?> </a>Comments</div>
					</div>
					<h2><?php echo $blog['title'] ?></h2>
					<p>
						<?php echo $des = stripcslashes(Decode($blog['long_description']));  ?>
					</p>
<!--                    <p>
                    	Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
					</p>
                     <blockquote class="styled">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            <small>Someone famous in <cite title="">Body of work</cite></small>
                          </blockquote>-->
				</div><!-- end post -->
                </div><!-- end box_style_1 -->
                
                <h4><?php echo $blog['comments']; ?> comments</h4>
                
				<div id="comments">
					<ol>    <?php
                                                    $img = array('avatar1.jpg','avatar2.jpg','avatar3.jpg');
                                                    $i = 0;
                                                    

                                                    foreach ($blogcomments_data as $comments) {
                                                        extract($comments);
                                                        
                                                        ?>
                                            
						<li>
                                                    <ul>
                                                        <li>
                                                   <?php
                                                            if ($i > 2) {
                                                                $i = 0;
                                                            }
                                                            ?>
						<div class="avatar"><a href="#"><img src="img/<?php echo $img[$i]; ?>" alt=""></a></div>
						<div class="comment_right clearfix">
							<div class="comment_info">
								Posted by <a href="#"><?php echo $username; ?></a><span>|</span> <?php echo $dat = date("d M Y", strtotime($date)); ?> <span>|</span><a href="#">Reply</a>
							</div>
							<p>
								 <?php echo $message; ?>
							</p>
						</div>
<!--						<ul>
							<li>
							<div class="avatar"><a href="#"><img src="img/avatar2.jpg" alt=""></a></div>
                            
							<div class="comment_right clearfix">
								<div class="comment_info">
									Posted by <a href="#">Tom Sawyer</a><span>|</span> 25 apr 2019 <span>|</span><a href="#">Reply</a>
								</div>
								<p>
									 Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
								</p>
								<p>
									 Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
								</p>
							</div>
							</li>
						</ul>-->
                                                        </li>
                                                    </ul>
						</li>
                                                <?php $i++;  $re++; } ?>
<!--						<li>
						<div class="avatar"><a href="#"><img src="img/avatar3.jpg" alt=""></a></div>
                        
						<div class="comment_right clearfix">
							<div class="comment_info">
								Posted by <a href="#">Adam White</a><span>|</span> 25 apr 2019 <span>|</span><a href="#">Reply</a>
							</div>
							<p>
								Cursus tellus quis magna porta adipiscin
							</p>
						</div>
						</li>-->
					</ol>
				</div><!-- End Comments -->
                                 <?php 
				 if($_GET['msg']=='success'){
				 ?>
                <div class="success">
                	<span>Your comment has been submitted successful! Thank you so much for your opinion!</span>
                </div>
                <?php } ?>
				<h4>Leave a comment</h4>
                                <form action="blog_comments.php" method="post">
					<div class="form-group">
                                                <input type="hidden" name="blog_id" value="<?php echo $blog['id']; ?>">
                                                <input type="hidden" name="blog_title" value="<?php echo $blog['title']; ?>">
						<input class="form-control style_2" type="text" name="name" placeholder="Enter name">
					</div>
					<div class="form-group">
						<input class="form-control style_2" type="text" name="email" placeholder="Enter email">
					</div>
					<div class="form-group">
						<textarea name="message" class="form-control style_2" style="height:150px;" placeholder="Message"></textarea>
					</div>
					<div class="form-group">
						<input type="reset" class="btn_1" value="Clear form"/>
						<input type="submit" name="post_comment" class="btn_1" value="Post Comment"/>
					</div>
				</form>          
     </div><!-- End col-md-9-->   
	
  </div><!-- End row-->           
</div><!-- End container -->

 <!-- Start footer -->
        <?php include_once 'footer.php'; ?>
 <!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->


  </body>
</html>