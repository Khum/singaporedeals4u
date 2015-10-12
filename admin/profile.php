<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$res = Query("SELECT * FROM admin_user WHERE id = '" . Encode($_SESSION['S_ID']) . "'");
if (Num($res) > 0) {
    $user_arr = GetArr($res);
    extract($user_arr);
} else {
    enqueueMsg("Invalid User");
}
if (!empty($_POST)) {
    extract($_POST);
    if (!isset($new_password) && !isset($password_confirm)) {
        if (empty($email)) {
            enqueueMsg("Enter your email address");
        } else if (empty($name)) {
            enqueueMsg("Enter your name");
        } else {
            Query("UPDATE admin_user SET full_name = '" . Encode($name) . "', email = '" . Encode($email) . "' WHERE id = '" . Encode($_SESSION['S_ID']) . "'");
            enqueueMsg("Profile has been updated successfully!", "success");
        }
    } else if (isset($new_password) && isset($password_confirm)) {
        $r = Query("SELECT * FROM admin_user WHERE id = '" . Encode($_SESSION['S_ID']) . "' AND password = '" . Encrypt($old_password) . "'");
        if (Num($r) > 0) {
            if ($new_password != $password_confirm) {
                enqueueMsg("Password and confirm password does not match!");
            } else {
                Query("UPDATE admin_user SET password = '" . Encrypt($new_password) . "' WHERE id = '" . Encode($_SESSION['S_ID']) . "'");
                enqueueMsg("Your password has been updated successfully!", "success");
            }
        } else {
            enqueueMsg("Invalid old Password!");
        }
    }
}
include('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
        <li>Profile</li>
    </ul>
</div>
<?php echo $msg; ?>
<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Profile</h2>
<!--            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <form action="" id="profile_form" method="post" class="form-horizontal">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo $full_name; ?>">
                        </div>
                    </div>
                    <div class="control-group" style="min-height: 120px;">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-xlarge" id="email" name="email" type="text" value="<?php echo $email; ?>">
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
    <div class="box span6">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Change Password</h2>
<!--            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>-->
        </div>
        <div class="box-content">
            <form action="" id="profile_form" method="post" class="form-horizontal">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="user_name">Username</label>
                        <div class="controls">
                            <span class="input-xlarge uneditable-input"><?php echo $user_name; ?></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="old_password">Old Password</label>
                        <div class="controls">
                            <input class="input-xlarge" id="old_password" name="old_password" type="password" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="new_password">New Password</label>
                        <div class="controls">
                            <input class="input-xlarge" id="new_password" name="new_password" type="password" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password_confirm">Confirm Password</label>
                        <div class="controls">
                            <input class="input-xlarge" id="password_confirm" name="password_confirm" type="password" value="">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->

</div><!--/row-->
<?php
include('footer.php');
?>