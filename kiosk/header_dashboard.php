<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Singaporedeals4u User Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Irshad Ali - irshadali18@gmail.com">

        <!-- The styles -->
        <link id="bs-css" href="admin/css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="admin/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="admin/css/charisma-app.css" rel="stylesheet">
        <link href="admin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='admin/css/fullcalendar.css' rel='stylesheet'>
        <link href='admin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='admin/css/chosen.css' rel='stylesheet'>
        <link href='admin/css/uniform.default.css' rel='stylesheet'>
        <link href='admin/css/colorbox.css' rel='stylesheet'>
        <link href='admin/css/jquery.cleditor.css' rel='stylesheet'>
        <link href='admin/css/jquery.noty.css' rel='stylesheet'>
        <link href='admin/css/noty_theme_default.css' rel='stylesheet'>
        <link href='admin/css/elfinder.min.css' rel='stylesheet'>
        <link href='admin/css/elfinder.theme.css' rel='stylesheet'>
        <link href='admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='admin/css/opa-icons.css' rel='stylesheet'>
        <link href='admin/css/uploadify.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="img/favicon.ico"> 
	<script type="text/javascript" src="admin/js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    
    $(".parent_cat").change(function() {
        //$.get('loadsubcat.php?parent_cat=' + $(this).val() + '&emp_id=' + $("...").val(), function(data) {
			var str = $(this).val() ;
			var res = str.split("-");
			//alert(res[0]);
        $.get('loadsubcat.php?parent_cat=' + res[0] + '&id=' + $(".id").val(), function(data) {
            $(".sub_cat"+res[1]).html(data);
            $('#loader').slideUp(500, function() {
                $(this).remove();
            });
        });	
    });
    
    });
    </script>
    </head>
    <body>
     
            <!-- topbar starts -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="index.html" style="padding:0px;"> <img alt="Singaporedeals4u" src="img/logo.png" style="height: 40px;width: auto;"/></a>

                        <!-- theme selector starts -->
                        
                        <!-- theme selector ends -->

                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone"> <?php echo $_SESSION['Auth_name']; ?></span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->

                        <!--                        <div class="top-nav nav-collapse">
                                                    <ul class="nav">
                                                        <li><a href="#">Visit Site</a></li>
                                                        <li>
                                                            <form class="navbar-search pull-left">
                                                                <input placeholder="Search" class="search-query span2" name="query" type="text">
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>-->
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- topbar ends -->
    
        <div class="container-fluid">
            <div class="row-fluid">
           

                    <!-- left menu starts -->
                    <div class="span2 main-menu-span">
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <li class="nav-header hidden-tablet"><strong>User Area</strong></li>
                                <li><a class="ajax-link" href="dashboard.php"><i class="icon-user"></i><span class="hidden-tablet"> Profile</span></a></li>
                                <li><a class="ajax-link" href="edit_password.php"><i class="icon-user"></i><span class="hidden-tablet"> Change Password</span></a></li>
                               
                            </ul>
                            
                        </div><!--/.well -->
                    </div><!--/span-->
                    <!-- left menu ends -->
                    
                    <div id="content" class="span10">
                        <!-- content starts -->
            
