<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;
if (!empty($_POST)) {
    extract($_POST);    
    $_POST['last_updated'] = date("Y-m-d H:i:s");
    $_total_adult_price = $per_adult_price * $total_adult;
    $_total_child_price = $per_child_price * $total_child;
    $_total_price = $_total_adult_price + $_total_child_price;
    
    $_POST['total_adult_price'] = $_total_adult_price;
    $_POST['total_child_price'] = $_total_child_price;
    $_POST['total_price'] = $_total_price;

	if($_POST['guide'] == 'on'){
		echo $_POST['guide'] = '1';
		}else{
			echo $_POST['guide'] = '0';
			}	
	if($_POST['pickup'] == 'on'){
		$_POST['pickup'] = '1';
		}else{
			$_POST['pickup'] = '0';
			}
	if($_POST['insurance'] == 'on'){
		$_POST['insurance'] = '1';
		}else{
			$_POST['insurance'] = '0';
			}
	if($_POST['coffee'] == 'on'){
		$_POST['coffee'] = '1';
		}else{
			$_POST['coffee'] = '0';
			}
	if($_POST['welcome'] == 'on'){
		$_POST['welcome'] = '1';
		}else{
			$_POST['welcome'] = '0';
		}
	if($_POST['dinner'] == 'on'){
		$_POST['dinner'] = '1';
	}else{
			$_POST['dinner'] = '0';
			}
	if($_POST['bike'] == 'on'){
		$_POST['bike'] = '1';
	}else{
			$_POST['bike'] = '0';
			}
			
    
    $update_data = array();
    $update_data = array_copy('id,full_name,email,mobile,hotel_name,hotel_address,room_no,total_adult,total_child,tour_date,per_adult_price,per_child_price,total_adult_price,total_child_price,total_price,payment_mod,status,last_updated,guide,pickup,insurance,coffee,coffee,welcome,dinner,bike,delivery_type,delivery_time' . $dated, $_POST);
    InsertUpdateRecord($update_data, DB_TABLE_PREFIX . 'order', 'id');
    
    $message = "Order has beed updated";
    enqueueMsg($message, "success", "order.php");
}
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $where = array('id' => $id);
    $result_arr = getRows(DB_TABLE_PREFIX . 'order', $where);
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
    $full_name = "";
    $email = "";
    $mobile = "";
    $hotel_name = "";
    $room_no = "";
    $hotel_address = "";
    $total_adult = "";
    $total_child = "";
    $tour_datedate = "";
    $pickup_timetime = "";
    $product_id = "";
    $product_name = "";
    $per_adult_price = "";
    $per_child_price = "";
    $total_adult_price = "";
    $total_child_price = "";
    $total_price = "";
    $payment_mod = "";
    $paypal_transaction_id = "";
    $status = "";
    $delivery_type = "";
    $delivery_time = "";
}

include('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
        <li><a href="order.php">Order</a></li>
        <span class="divider">/</span></li>
        <li>Order Update</li>
    </ul>
</div>
<?php echo $msg; ?>
<div id="message_container"></div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Update Order - <?php echo $product_name; ?></h2>
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
                        <label class="control-label" for="full_name">Order No</label>
                        <div class="controls">
                            <input class="input-xlarge" id="Order_No" name="Order_No" type="text" value="<?php echo $id; ?>" disabled="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="full_name">Full name</label>
                        <div class="controls">
                            <input class="input-xlarge" id="full_name" name="full_name" type="text" value="<?php echo $full_name; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-xlarge" id="email" name="email" type="text" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="mobile">Mobile</label>
                        <div class="controls">
                            <input class="input-xlarge" id="mobile" name="mobile" type="text" value="<?php echo $mobile; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="hotel_name">Hotel Name</label>
                        <div class="controls">
                            <input class="input-xlarge" id="hotel_name" name="hotel_name" type="text" value="<?php echo $hotel_name; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="hotel_name">Room No</label>
                        <div class="controls">
                            <input class="input-xlarge" id="room_no" name="room_no" type="text" value="<?php echo $room_no; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="hotel_address">Hotel Address</label>
                        <div class="controls">
                            <input class="input-xlarge" id="hotel_address" name="hotel_address" type="text" value="<?php echo $hotel_address; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="tour_date">Tour Date</label>
                        <div class="controls">
                            <input class="input-xlarge date-picker" id="tour_date" name="tour_date" type="text" value="<?php echo $tour_date; ?>">
                        </div>
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" for="total_adult">Total Adult</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input id="total_adult" name="total_adult" size="16" type="text" value="<?php echo $total_adult; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_child">Total Child</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input id="total_child" name="total_child" size="16" type="text" value="<?php echo $total_child; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="per_adult_price">Per Adult Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on"><?php echo CURRENCY_SYMBOL; ?></span><input id="per_adult_price" name="per_adult_price" size="16" type="text" value="<?php echo $per_adult_price; ?>"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="per_child_price">Per Child Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on"><?php echo CURRENCY_SYMBOL; ?></span><input id="per_child_price" name="per_child_price" size="16" type="text" value="<?php echo $per_child_price; ?>"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_adult_price">Total Adult Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on"><?php echo CURRENCY_SYMBOL; ?></span><input id="total_adult_price" name="total_adult_price" size="16" type="text" value="<?php echo $total_adult_price; ?>" readonly="readonly"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_child_price">Total Child Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on"><?php echo CURRENCY_SYMBOL; ?></span><input id="total_child_price" name="total_child_price" size="16" type="text" value="<?php echo $total_child_price; ?>" readonly="readonly"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_price">Total Price</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on"><?php echo CURRENCY_SYMBOL; ?></span><input id="total_price" name="total_price" size="16" type="text" value="<?php echo $total_price; ?>" readonly="readonly"><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_child">Payment Mode</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input id="payment_mod" name="payment_mod" size="16" type="text" value="<?php echo $payment_mod; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_child">Delivery Type</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input id="delivery_type" name="delivery_type" size="16" type="text" value="<?php echo $delivery_type; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_child">Delivery Time</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input id="delivery_time" name="delivery_time" size="16" type="text" value="<?php echo $delivery_time; ?>">
                            </div>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="sort_order">Services</label>
                        <div class="controls top_m"> 
                            <input data-no-uniform="true" type="checkbox" name="guide" id="guide" class="other_services_checkbox" <?php if(isset($guide)){ echo ($guide == '1' ? ' checked="checked"' : ''); }else{ ?>  checked="checked <?php } ?>/><label class="other_services">Dedicated Tour guide</label>
                            
                            <input data-no-uniform="true" type="checkbox" name="pickup" id="pickup" class="other_services_checkbox" <?php if(isset($pickup)){ echo ($pickup == '1' ? ' checked="checked"' : ''); }else{ ?>  checked="checked <?php } ?>/><label class="other_services">Pick up service</label>
                            <input data-no-uniform="true" type="checkbox" name="insurance" id="insurance" class="other_services_checkbox" <?php if(isset($insurance)){ echo ($insurance == '1' ? ' checked="checked"' : ''); }else{ ?>  checked="checked <?php } ?>/><label class="other_services">Insurance</label></br></br>
                            <input data-no-uniform="true" type="checkbox" name="coffee" id="coffee" class="other_services_checkbox" <?php if(isset($coffee)){ echo ($coffee == '1' ? ' checked="checked"' : ''); }else{ ?>  checked="checked <?php } ?>/><label class="other_services">Coffe break</label>
                            <input data-no-uniform="true" type="checkbox" name="welcome" id="welcome" class="other_services_checkbox" <?php if(isset($welcome)){ echo ($welcome == '1' ? ' checked="checked"' : ''); }else{ ?>  checked="checked <?php } ?>/><label class="other_services">Welcome bottle </label>
                            <input data-no-uniform="true" type="checkbox" name="dinner" id="dinner" class="other_services_checkbox" <?php if(isset($dinner)){ echo ($dinner == '1' ? ' checked="checked"' : ''); }else{ ?>  checked="checked <?php } ?>/><label class="other_services">Dinner </label>
                             <input data-no-uniform="true" type="checkbox" name="bike" id="bike" class="other_services_checkbox" <?php if(isset($bike)){ echo ($bike == '1' ? ' checked="checked"' : ''); }else{ ?>  checked="checked <?php } ?>/><label class="other_services">Bike rent  </label>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="status">Status</label>
                        <div class="controls">
                            <?php
                                $order_status_array = array('new' => 'New', 'confirm' => 'Confirm', 'cancel' => 'Cancel');
                                echo show_array_dropdown('status', $order_status_array, $status);
                            ?>
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
<?php
include('footer.php');
?>
