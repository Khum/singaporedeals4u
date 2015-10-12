<?php
include_once '../inc/config.inc.php';
$page_title = 'Login';
$msg = deQueueMsg();
if (!empty($_POST)) {
    extract($_POST);
    if (empty($username)) {
        enqueueMsg("Enter Username", "error");
    } else {
        $res = Query("SELECT * FROM admin_user WHERE user_name = '" . Encode($username) . "' AND password = '" . Encrypt($password) . "' AND is_deleted = 'N'");
        if (Num($res) > 0) {
            $o = GetObj($res);
            if ($o->is_active == 'N') {
                enqueueMsg("This is not an  active user, please contact system administrator to activate!", "error");
            } else {
                $_SESSION["S_login"] = "1";
                $_SESSION["S_ID"] = $o->id;
                $_SESSION["S_username"] = $o->user_name;
                $_SESSION["S_full_name"] = $o->full_name;
                $_SESSION["S_email"] = $o->email;
                header("location:dashboard.php");
                exit;
            }
        } else {
            enqueueMsg("Invalid User Name/Password!", "error");
        }
    }
}
if ($msg == '') {
    //$msg = displayMsg('Please login with your Username and Password.');
}
$no_visible_elements = true;
include('header.php');
?>
<div class="row-fluid">
    <div class="span12 center login-header">
        <!--<h2>Welcome to Singaporedeals4u</h2>-->
        <img alt="Singaporedeals4u" src="img/logo.png" />
    </div><!--/span-->
</div><!--/row-->
<div class="row-fluid">
    <div class="well span5 center login-box">
        <?php echo $msg; ?> 
        <form class="form-horizontal" action="" method="post">
            <fieldset>
                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="" />
                </div>
                <div class="clearfix"></div>
                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="" />
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <p class="center span5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </p>
            </fieldset>
        </form>
    </div><!--/span-->
</div><!--/row-->
<?php include('footer.php'); ?>
    
                            
                            