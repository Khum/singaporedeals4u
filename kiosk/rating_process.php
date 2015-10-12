<?php
/*include_once 'inc/config.inc.php';

include('inc/db_con.inc.php');

if($_POST['submit-tour-review'])
{  
	if($_POST['reviewField_review_overall']=='' and $_POST['reviewField_review_transport']=='' and $_POST['reviewField_review_meals']=='' and $_POST['reviewField_review_guide']=='' and $_POST['reviewField_review_value_for_money']=='' and $_POST['reviewField_review_program_accuracy']=='' and $_POST['likes']=='' and $_POST['dislikes']==''){
	
	header("location:rating.php?msg=empty&id=".$_POST['product_id']);
	}else{	
	
	 $product_id = $_POST['product_id'];
	 $user_id = $_POST['user_id'];
	 $email = $_POST['email'];
	 $username = $_POST['username'];
	 $reviewField_review_overall = $_POST['reviewField_review_overall'];
	 //$reviewField_review_accommodation = $_POST['reviewField_review_accommodation'];
	 $reviewField_review_transport = $_POST['reviewField_review_transport'];
	 //$reviewField_review_meals = $_POST['reviewField_review_meals']; 
	 $reviewField_review_guide = $_POST['reviewField_review_guide'];
	 $reviewField_review_value_for_money = $_POST['reviewField_review_value_for_money']; 
	 $reviewField_review_program_accuracy = $_POST['reviewField_review_program_accuracy'];
	 $likes = mysql_real_escape_string($_POST['likes']);
	 $dislikes = mysql_real_escape_string($_POST['dislikes']);
	 $date = date("Y-m-d h:i:sa"); 
	
	
	
	$query=mysql_query("insert into reviews(product_id,user_id,review_overall,review_accommodation,review_transport,review_meals,review_guide, review_money,review_program_accuracy,likes,dislikes,date,username,email) values ('$product_id','$user_id','$reviewField_review_overall','$reviewField_review_accommodation','$reviewField_review_transport','$reviewField_review_meals','$reviewField_review_guide','$reviewField_review_value_for_money','$reviewField_review_program_accuracy','$likes','$dislikes','$date','$username','$email')");
	
	header("location:single_tour.php?msg=success&id=".$product_id);
	
	}
}*/
include_once 'inc/config.inc.php';

if($_POST['submit-tour-review'])
{  
	if($_POST['reviewField_review_overall']=='' and $_POST['reviewField_review_transport']=='' and $_POST['reviewField_review_meals']=='' and $_POST['reviewField_review_guide']=='' and $_POST['reviewField_review_value_for_money']=='' and $_POST['reviewField_review_program_accuracy']=='' and $_POST['likes']=='' and $_POST['dislikes']==''){
	
	header("location:rating.php?msg=empty&id=".$_POST['product_id']);
	}else{	
	
	 $product_id = $_POST['product_id'];
	 $user_id = $_POST['user_id'];
	 $email = $_POST['email'];
	 $username = $_POST['username'];
	 $reviewField_review_overall = $_POST['reviewField_review_overall'];
	 //$reviewField_review_accommodation = $_POST['reviewField_review_accommodation'];
	 $reviewField_review_transport = $_POST['reviewField_review_transport'];
	 //$reviewField_review_meals = $_POST['reviewField_review_meals']; 
	 $reviewField_review_guide = $_POST['reviewField_review_guide'];
	 $reviewField_review_value_for_money = $_POST['reviewField_review_value_for_money']; 
	 $reviewField_review_program_accuracy = $_POST['reviewField_review_program_accuracy'];
	 $likes = mysql_real_escape_string($_POST['likes']);
	 $dislikes = mysql_real_escape_string($_POST['dislikes']);
	 $date = date("Y-m-d h:i:sa"); 
	
	$where2 = array('product_id' => $product_id);
        $rows_data2 = getRows(DB_TABLE_PREFIX . 'reviews', $where2, 'review_overall');
        $product_data2 = $rows_data2['data'];
        
        if ($rows_data2['total_recs'] > 0) {
            $total_votes = count($product_data2);

            foreach ($product_data2 as $product) {
                extract($product);

                //--------------All users rating calculation-----//
                if ($review_overall >= 1 and $review_overall <= 2) {
                    $rating_1 += 1;
                }
                if ($review_overall > 2 and $review_overall <= 4) {
                    $rating_2 += 1;
                }
                if ($review_overall > 4 and $review_overall <= 6) {
                    $rating_3 += 1;
                }
                if ($review_overall > 6 and $review_overall <= 8) {
                    $rating_4 += 1;
                }
                if ($review_overall > 8 and $review_overall <= 10) {
                    $rating_5 += 1;
                }
            }
            if ($rating_1 == "") {
                $rating_1 = 0;
            }
            if ($rating_2 == "") {
                $rating_2 = 0;
            }
            if ($rating_3 == "") {
                $rating_3 = 0;
            }
            if ($rating_4 == "") {
                $rating_4 = 0;
            }
            if ($rating_5 == "") {
                $rating_5 = 0;
            }
        }
        //--------------Single Person rating calculation-----    
        if ($reviewField_review_overall >= 1 and $reviewField_review_overall <= 2) {
            $rating1_1 += 1;
        }
        if ($reviewField_review_overall > 2 and $reviewField_review_overall <= 4) {
            $rating2_2 += 1;
        }
        if ($reviewField_review_overall > 4 and $reviewField_review_overall <= 6) {
            $rating3_3 += 1;
        }
        if ($reviewField_review_overall > 6 and $reviewField_review_overall <= 8) {
            $rating4_4 += 1;
        }
        if ($reviewField_review_overall > 8 and $reviewField_review_overall <= 10) {
            $rating5_5 += 1;
        }

        $per_total_rating = ($rating_1 + $rating_2 * 2 + $rating_3 * 3 + $rating_4 * 4 + $rating_5 * 5) / $total_votes;
        $per_single_person = ($rating1_1 + $rating2_2 * 2 + $rating3_3 * 3 + $rating4_4 * 4 + $rating5_5 * 5) / 1;

        $total_rating = $per_single_person + $per_total_rating;
        $avg_rating = $total_rating / 2;

        
	
	$query=mysql_query("insert into reviews(product_id,user_id,review_overall,review_accommodation,review_transport,review_meals,review_guide, review_money,review_program_accuracy,likes,dislikes,date,username,email) values ('$product_id','$user_id','$reviewField_review_overall','$reviewField_review_accommodation','$reviewField_review_transport','$reviewField_review_meals','$reviewField_review_guide','$reviewField_review_value_for_money','$reviewField_review_program_accuracy','$likes','$dislikes','$date','$username','$email')");
	$query_rating = mysql_query("update product set rating='$avg_rating' where id='$product_id'");
	header("location:single_tour.php?msg=success&id=".$product_id);
	
	}
}
?>