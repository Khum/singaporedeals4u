<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();

?>
<?php include('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>Home</li>
    </ul>
</div>
<div class="sortable row-fluid">
    <?php
    $where = "WHERE is_deleted = 'N' AND `status` != 'pending'";
    $rows_data = getRows(DB_TABLE_PREFIX . 'order', $where);
    $order_data = $rows_data['data'];
    $total_orders = $rows_data['total_recs'];
    $new_orders = 0;
    $total_sale = 0;
    $today_sale = 0;
    if ($rows_data['total_recs'] > 0) {
        foreach ($order_data as $order) {
            $total_sale += $order['total_price']; 
            if($order['status'] == 'new'){
                $new_orders++;
                $today_sale += $order['total_price']; 
            }
        }
    }
    ?>
    <a data-rel="tooltip" title="<?php echo $new_orders; ?> new orders." class="well span3 top-block" href="order.php">
        <span class="icon32 icon-red icon-user"></span>
        <div>Total Orders</div>
        <div><?php echo $total_orders; ?></div>
        <span class="notification"><?php echo $new_orders; ?></span>
    </a>

    <a data-rel="tooltip" title="<?php echo CURRENCY_SYMBOL.$today_sale; ?> Today sale." class="well span3 top-block" href="order.php">
        <span class="icon32 icon-color icon-cart"></span>
        <div>Sales</div>
        <div><?php echo CURRENCY_SYMBOL.$total_sale; ?></div>
        <span class="notification yellow"><?php echo CURRENCY_SYMBOL.$today_sale; ?></span>
    </a>
    <?php
    $product_where = array('is_deleted' => 'N');
    $product_rows_data = getRows(DB_TABLE_PREFIX . 'product', $product_where);
//    $product_data = $product_rows_data['data'];
    ?>
    <a data-rel="tooltip" title="Click to view" class="well span3 top-block" href="product.php">
        <span class="icon32 icon-color icon-star-on"></span>
        <div>Total Products</div>
        <div><?php echo $product_rows_data['total_recs']; ?></div>
<!--        <span class="notification green">4</span>-->
    </a>
    <?php
    $where = array('is_deleted' => 'N');
    $category_rows_data = getRows(DB_TABLE_PREFIX . 'category', $where, "*", 'sort_order');
    ?>

    <a data-rel="tooltip" title="Click to view" class="well span3 top-block" href="category.php">
        <span class="icon32 icon-color icon-envelope-closed"></span>
        <div>Categories</div>
        <div><?php echo $category_rows_data['total_recs']; ?></div>
        <!--<span class="notification red">12</span>-->
    </a>
</div>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i> New Orders</h2>
            <div class="box-icon">
                <!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable" id="table_<?php echo DB_TABLE_PREFIX . "order"; ?>">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Product</th>
                        <th>Persons Traveling</th>
                        <th>Tour Date</th>
                        <th>Pick time</th>
                        <th>Payment</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    $where = "WHERE is_deleted = 'N' AND `status` = 'new'";
                    $rows_data = getRows(DB_TABLE_PREFIX . 'order', $where);
                    $order_data = $rows_data['data'];
                    if ($rows_data['total_recs'] > 0) {
                        foreach ($order_data as $order) {
                            extract($order);                            
                            ?>    
                            <tr id="row_<?php echo $id; ?>">
                                <td><?php echo $id; ?></td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><?php echo $product_name; ?></td>                        
                                <td><?php echo "Adult: ".$total_adult."<br />Child: ".$total_child; ?></td>                        
                                <td><?php echo $tour_date; ?></td>                        
                                <td><?php echo $pickup_time; ?></td>                        
                                <td><?php echo ucwords(str_replace("_", " ", $payment_mod)); ?></td>                        
                                <td><?php echo CURRENCY_SYMBOL.$total_price; ?></td>                        
                                <td><?php echo ucwords($status); ?></td>      
<!--                                <td class="center">
                                    <span class="label label-<?php echo ($is_active == 'Y' ? 'success' : 'important'); ?>"><?php echo ($is_active == 'Y' ? 'Active' : 'Inactive'); ?></span>
                                </td>
                                <td class="center">                            
                                    <a class="btn btn-info" href="product.php?id=<?php echo $id; ?>">
                                        <i class="icon-edit icon-white hidden-tablet"></i>  Edit                                            
                                    </a>
                                    <a class="btn btn-danger delete-rec" href="javascript:{};" data-id="<?php echo $id; ?>" data-table="<?php echo DB_TABLE_PREFIX . "product" ?>">
                                        <i class="icon-trash icon-white hidden-tablet"></i> Delete
                                    </a>
                                </td>-->
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

<?php include('footer.php'); ?>

                            