<?php
include_once 'inc/config.inc.php';
require_once 'inc/admin_secure.inc.php';
$msg = deQueueMsg();


?>
<?php include('header_dashboard.php'); ?>
<?php
    $sql = "select * from users where email = '".$_SESSION['Auth_user']."'";
    $sql_user = Query($sql);
    $obj = GetArr($sql_user);
    
?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
        
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Profile</h2>
            <div class="box-icon">
                <!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal">
                <input name="id" value="" type="hidden" />
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="title">Password</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="title" name="title" type="password" value="<?php echo $obj['name'];?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="slug">New Password</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="slug" name="slug" type="text" value="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="slug">Confirm Password</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="slug" name="slug" type="text" value="">
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </div><!--/span-->
</div><!--/row-->


                            