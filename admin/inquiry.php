<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg(true, 'order.php');
include('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
        <li>Inquiry</li>
    </ul>
</div>
<?php echo $msg; ?>
<div id="message_container"></div>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-info-sign"></i> Inquiries</h2>
            <div class="box-icon">
                <!--<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>-->
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable" id="table_<?php echo DB_TABLE_PREFIX . "inquiry"; ?>">
                <thead>
                    <tr>
                       
                        <th>Agent Name</th>                        
                        <th>Client Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Destination(s)</th>                        
                        <th>Persons Traveling</th>
                        <th>Date</th>
                        <!--<th>Pick time</th>-->                       
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
					$where = "WHERE is_deleted = 'N'";
                    $rows_data = getRows(DB_TABLE_PREFIX . 'inquiry', $where);
					$inquiry_data = $rows_data['data'];
					$counter=0;
                    if ($rows_data['total_recs'] > 0) {
                        foreach ($inquiry_data as $inquiry) {
                            extract($inquiry);  
							$counter++;                          
                            ?>    
                            <tr id="row_<?php echo $id; ?>">                                
                                <td><?php echo $agent_name; ?></td> 
                                <td><?php echo $client_name; ?></td>                        
                                <td><?php echo $country_residence; ?></td>
                                <td><?php echo $destination; ?></td>                 
                                <td><?php echo $email; ?></td> 
                                 <td><?php echo "Adult: ".$adults."<br />Child: ".$child."<br />Infant: ".$infant; ?></td>                      
                                <!--<td><?php //echo $pickup_time; ?></td>-->                        
                                <td><?php echo '<b>Inquery Date</b>: '.$in_date.'</br> <b>Travelling Date From</b>: '.$tr_date_from.'</br> <b>Travelling Date To</b>: '.$tr_date_to; ?></td>                        
                                <td><?php echo " From " .$currency. $budget_from ." To " . $currency . $budget_to; ?></td>                        
                               <td style="color:#0C0;">
                                <span name="sub_cat" id="sub_cat" class="sub_cat<?=$counter?>">
                                 <?php 
								 if($status==1)
                                    {
                                    echo "New";
                                    }
                                    elseif($status==2)
                                    {
                                    echo "<span style='color:#FC0;'>InProcess</span>";	
                                    }
                                    elseif($status==3)
                                    {
                                    echo "<span style='color:#600;'>Quoted</span>";	
                                    }
                                    elseif($status==4)
                                    {
                                    echo "<span style='color:#666;'>Confirm</span>";	
                                    }
                                    elseif($status==5)
                                    {
                                    echo "<span style='color:#C00;'>Expired</span>";	
									}

?>                                                                
                                 </span> 
                                </br></br>

                                <input type="hidden" id="id" name="id" class="id" value="<?php echo $id; ?>">
                                <select  id="parent_cat" name="parent_cat" class="status_ch parent_cat">
                                    <option value="">Change Status</option>
                                    <option value="1-<?=$counter?>">New</option>
                                    <option value="2-<?=$counter?>">InProcess</option>
                                    <option value="3-<?=$counter?>">Quoted</option>
                                    <option value="4-<?=$counter?>">Confirm</option>
                                    <option value="5-<?=$counter?>">Expired</option>                                      
                                </select>
                                   </td>
<!--                                <td class="center">
                                    <span class="label label-<?php echo ($is_active == 'Y' ? 'success' : 'important'); ?>"><?php echo ($is_active == 'Y' ? 'Active' : 'Inactive'); ?></span>
                                </td>-->
                                <td class="center">
                                	 <a class="btn btn-info" href="inquiry-update.php?id=<?php echo $id; ?>">
                                        <i class="icon-edit icon-white hidden-tablet"></i>  Edit                                            
                                    </a>
                                                                
                                    <a class="btn btn-danger delete-rec" href="javascript:{};" data-id="<?php echo $id; ?>" data-table="<?php echo DB_TABLE_PREFIX . 'inquiry' ?>">
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