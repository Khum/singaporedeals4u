<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;
if (!empty($_POST)) {
    extract($_POST);    
    if (isset($_POST['is_active']))
        $_POST['is_active'] = 'Y';
    else
        $_POST['is_active'] = 'N';
    
    if(empty($services)){
        $msg = displayMsg('Enter Service name.', 'error');
        $var_clear = false;
    }else{
                  
            $update_data = array();
            $update_data = array_copy('id,services,price,sort_order,is_active');
            $new_id = InsertUpdateRecord($update_data, DB_TABLE_PREFIX . 'services', 'id');        
            $message = "Record has beed " . ($id > 0 ? 'updated' : 'added') . ".";
            enqueueMsg($message, $message_type);
       
    }
    
}
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $where = array('id' => $id);
    $result_arr = getRows(DB_TABLE_PREFIX . 'services', $where);
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
    $title = "";
    $slug = "";
    $description = "";
    $sort_order = "";
    $is_active = "Y";
}

include('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
        <li>Services</li>
    </ul>
</div>
<?php echo $msg; ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Define Services</h2>
            <div class="box-icon">
                <!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form action="" id="category_form" name="category_form" method="post" class="form-horizontal">
                <input name="id" value="<?php echo $id; ?>" type="hidden" />
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="services">Service Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="services" name="services" type="text" value="<?php echo $services; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="price">Price</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="price" name="price" type="text" value="<?php echo $price; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sort_order">Sort Order</label>
                        <div class="controls">
                            <input class="input-xlarge" id="sort_order" name="sort_order" type="text" value="<?php echo $sort_order; ?>">
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
<div id="message_container"></div>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> Services</h2>
            <div class="box-icon">
                <!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable" id="table_<?php echo DB_TABLE_PREFIX . "services"; ?>">
                <thead>
                    <tr>
                        <th width="15%">Services</th>
                        <th class="hidden-tablet">Price</th>
                        <th width="3%">Order</th>
                        <th width="10%">Status</th>
                        <th width="15%">Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    $select = array('*');
                    $where = array('is_deleted' => 'N');
                    $rows_data = getRows(DB_TABLE_PREFIX . 'services', $where, $select, 'sort_order');
                    $category_data = $rows_data['data'];
                    if ($rows_data['total_recs'] > 0) {
                        foreach ($category_data as $category) {
                            ?>    
                            <tr id="row_<?php echo $category['id']; ?>">
                                <td><?php echo $category['services']; ?></td>
                                <td class="center hidden-tablet"><?php echo $category['price']; ?></td>                        
                                <td class="center hidden-tablet"><?php echo $category['sort_order']; ?></td>                        
                                <td class="center">
                                    <span class="label label-<?php echo ($category['is_active'] == 'Y' ? 'success' : 'important'); ?>"><?php echo ($category['is_active'] == 'Y' ? 'Active' : 'Inactive'); ?></span>
                                </td>
                                <td class="center">                            
                                    <a class="btn btn-info" href="services.php?id=<?php echo $category['id']; ?>">
                                        <i class="icon-edit icon-white hidden-tablet"></i>  Edit                                            
                                    </a>
                                    <a class="btn btn-danger delete-rec" href="javascript:{};" data-id="<?php echo $category['id']; ?>" data-table="<?php echo DB_TABLE_PREFIX . "services" ?>">
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
    </div><!--/span-->

</div><!--/row-->
<?php
include('footer.php');
?>