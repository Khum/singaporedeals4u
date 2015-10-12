<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;
if (!empty($_POST)) {
    extract($_POST);
    if ($id == 0) {
        $dated = ',dated';
        $_POST['dated'] = date("Y-m-d H:i:s");
    } else {
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
    $update_data = array();
    $update_data = array_copy('id,category_id,code,title,short_description,long_description,adult_price,child_price,sort_order,is_active,is_feature' . $dated, $_POST);
    $product_id = InsertUpdateRecord($update_data, DB_TABLE_PREFIX . 'product', 'id');
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    if (!empty($_FILES["image"]["name"])) {
        $path_parts = pathinfo($_FILES["image"]["name"]);
        $extension = $path_parts['extension'];
        if ((($_FILES["image"]["type"] == "image/gif") || ($_FILES["image"]["type"] == "image/jpeg") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/pjpeg") || ($_FILES["image"]["type"] == "image/x-png") || ($_FILES["image"]["type"] == "image/png")) && in_array($extension, $allowedExts)) {
            $fileName = "product_" . $product_id . '.' . $extension;
            move_uploaded_file($_FILES["image"]["tmp_name"], "../images/products/" . $fileName);
            $update_image = array('image' => $fileName, 'id' => $product_id);
            InsertUpdateRecord($update_image, DB_TABLE_PREFIX . 'product', 'id');
        } else {
            enqueueMsg("Image type does not uploaded, Invalid image file.", "error", 'product.php', false);
        }
    }
    $message = "Record has been " . ($id > 0 ? 'updated' : 'added') . ".";
    enqueueMsg($message, "success");
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
    $short_description = "";
    $long_description = "";
    $adult_price = "0.00";
    $child_price = "0.00";
    $image = "";
    $sort_order = "";
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
            <form action="" id="product_form" name="product_form" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input name="id" value="<?php echo $id; ?>" type="hidden" />
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
                        <label class="control-label" for="code">Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="code" name="code" type="text" value="<?php echo $code; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="short_description">Short Description</label>
                        <div class="controls">
                            <input class="input-xlarge" id="short_description" name="short_description" type="text" value="<?php echo $short_description; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="long_description">Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="long_description" name="long_description" rows="3"><?php echo stripcslashes(Decode($long_description)); ?></textarea>
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" for="adult_price">Adult Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on"><?php echo CURRENCY_SYMBOL; ?></span><input id="adult_price" name="adult_price" size="16" type="text" value="<?php echo $adult_price; ?>"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="child_price">Child Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on"><?php echo CURRENCY_SYMBOL; ?></span><input id="child_price" name="child_price" size="16" type="text" value="<?php echo $child_price; ?>"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="image">File input</label>
                        <?php
                        $image_path = '../images/products/' . $image;
                        if ($image == "" || !file_exists($image_path))
                            $image_path = '../images/products/noimage.jpeg';
                        ?>
                        <img src="<?php echo $image_path; ?>" style="margin-left: 17px; height: 100px;" />
                        <div class="controls">
                            <input class="input-file uniform_on" id="image" name="image" type="file">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sort_order">Sort Order</label>
                        <div class="controls">
                            <input class="input-xlarge" id="sort_order" name="sort_order" type="text" value="<?php echo $sort_order; ?>">
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
<div id="message_container"></div>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> Products</h2>
            <div class="box-icon">
                <!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
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
                    $where = array('product.is_deleted' => 'N');
                    $rows_data = getRows(DB_TABLE_PREFIX . 'product', $where, 'product.*,category.title AS category', '', 'LEFT JOIN category ON category.id = product.category_id');
                    $product_data = $rows_data['data'];
                    if ($rows_data['total_recs'] > 0) {
                        foreach ($product_data as $product) {
                            extract($product);
                            $image_path = '../images/products/' . $image;
                            if ($image == "" || !file_exists($image_path))
                                $image_path = '../images/products/noimage.jpeg';
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
    </div><!--/span-->

</div><!--/row-->
<?php
include('footer.php');
?>