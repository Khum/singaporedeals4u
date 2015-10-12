<?php
include_once '../inc/config.inc.php';
require_once '../inc/admin_secure.inc.php';
$msg = deQueueMsg();
$var_clear = true;
if (!empty($_POST)) {
    extract($_POST);
            
//         if($_POST['quotation_day_tours']!='on'){
//             $quotation_day_tours = 0;
//         }else{
//             $quotation_day_tours = 1;
//         }
//         if($_POST['quotation_attraction_tickets']!='on'){
//             $quotation_attraction_tickets = 0;
//         }else{
//             $quotation_attraction_tickets = 1;
//         }
//         if($_POST['quotation_meals']!='on'){
//             $quotation_meals = 0;
//         }else{
//             $quotation_meals = 1;
//         }
//         if($_POST['quotation_transfers']!='on'){
//             $quotation_transfers = 0;
//         }else{
//             $quotation_transfers = 1;
//         }
        
    $update_data = array();
    $update_data = array_copy('id,country_residence,destination,source,handled_by,agent_name,client_name,email,in_date,tr_date,arrival_date,arrival_option,number_of_night,adults,child,infant,currency,budget_from,budget_to,remarks,hotel_start_preference,status' . $dated, $_POST);
    InsertUpdateRecord($update_data, DB_TABLE_PREFIX . 'inquiry', 'id');
    
    $message = "Inquiry has beed updated";
    enqueueMsg($message, "success", "inquiry.php");
}
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $where = array('id' => $id);
    $result_arr = getRows(DB_TABLE_PREFIX . 'inquiry', $where);
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
}

include('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a> <span class="divider">/</span></li>
        <li><a href="inquiry.php">Inquiry</a></li>
        <span class="divider">/</span></li>
        <li>Inquiry Update</li>
    </ul>
</div>
<?php echo $msg; ?>
<div id="message_container"></div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Update Inquiry - <?php echo $product_name; ?></h2>
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
                        <label class="control-label" for="destination">Inquiry No: </label>
                        <div class="controls">
        		
                            <input class="input-xlarge" type="text" value="<?php echo $id; ?>" disabled="disabled">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="mobile">Agent Name</label>
                        <div class="controls">
                            <input class="input-xlarge" id="agent_name" name="agent_name" type="text" value="<?php echo $agent_name; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="client_name">Client Name</label>
                        <div class="controls">
                            <input class="input-xlarge" id="client_name" name="client_name" type="text" value="<?php echo $client_name; ?>">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input class="input-xlarge" id="email" name="email" type="text" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    
               		<div class="control-group">
                        <label class="control-label" for="Country">Country</label>
                        <div class="controls">
                                <select class="form-select" name="country_residence" id="edit-field-country-residence--2">
                                <option value="">Select Country</option>                                
                                <option <?php if ($country_residence == 'India' ) echo 'selected'; ?> value="India">India</option>
                                <option <?php if ($country_residence == 'Philippines' ) echo 'selected'; ?> value="Philippines">Philippines</option>
                                <option <?php if ($country_residence == 'Vietnam' ) echo 'selected'; ?> value="Vietnam">Vietnam</option>
                                <option <?php if ($country_residence == 'Middle East' ) echo 'selected'; ?> value="Middle East">Middle East</option>
                                <option <?php if ($country_residence == 'Indonesia' ) echo 'selected'; ?> value="Indonesia">Indonesia</option>
                                <option <?php if ($country_residence == 'Europe/US' ) echo 'selected'; ?> value="Europe/US">Europe/US</option>
                                <option <?php if ($country_residence == 'China' ) echo 'selected'; ?> value="China">China</option>
                                <option <?php if ($country_residence == 'Others' ) echo 'selected'; ?> value="Others">Others</option>
                                
<!--                <option <?php if ($country_residence == 'Afghanistan' ) echo 'selected'; ?> value="Afghanistan">Afghanistan</option>
                <option <?php if ($country_residence == 'Aland' ) echo 'selected'; ?> value="Aland">Aland</option>
                <option <?php if ($country_residence == 'Albania' ) echo 'selected'; ?> value="Albania">Albania</option>
                <option <?php if ($country_residence == 'Algeria' ) echo 'selected'; ?> value="Algeria">Algeria</option>
                <option <?php if ($country_residence == 'American Samoa' ) echo 'selected'; ?> value="American Samoa">American Samoa</option>
                <option <?php if ($country_residence == 'Andorra' ) echo 'selected'; ?> value="Andorra">Andorra</option>
                <option <?php if ($country_residence == 'Angola' ) echo 'selected'; ?> value="Angola">Angola</option>
                <option <?php if ($country_residence == 'Anguilla' ) echo 'selected'; ?> value="Anguilla">Anguilla</option>
                <option <?php if ($country_residence == 'Antarctica' ) echo 'selected'; ?> value="Antarctica">Antarctica</option>
                <option <?php if ($country_residence == 'Antigua and Barbuda' ) echo 'selected'; ?> value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option <?php if ($country_residence == 'Argentina' ) echo 'selected'; ?> value="Argentina">Argentina</option>
                <option <?php if ($country_residence == 'Armenia' ) echo 'selected'; ?> value="Armenia">Armenia</option>
                <option <?php if ($country_residence == 'Aruba' ) echo 'selected'; ?> value="Aruba">Aruba</option>
                <option <?php if ($country_residence == 'Australia' ) echo 'selected'; ?> value="Australia">Australia</option>
                <option <?php if ($country_residence == 'Austria' ) echo 'selected'; ?> value="Austria">Austria</option>
                <option <?php if ($country_residence == 'Azerbaijan' ) echo 'selected'; ?> value="Azerbaijan">Azerbaijan</option>
                <option <?php if ($country_residence == 'Bahamas' ) echo 'selected'; ?> value="Bahamas">Bahamas</option>
                <option <?php if ($country_residence == 'Bahrain' ) echo 'selected'; ?> value="Bahrain">Bahrain</option>
                <option <?php if ($country_residence == 'Bangladesh' ) echo 'selected'; ?> value="Bangladesh">Bangladesh</option>
                <option <?php if ($country_residence == 'Barbados' ) echo 'selected'; ?> value="Barbados">Barbados</option>
                <option <?php if ($country_residence == 'Belarus' ) echo 'selected'; ?> value="Belarus">Belarus</option>
                <option <?php if ($country_residence == 'Belgium' ) echo 'selected'; ?> value="Belgium">Belgium</option>
                <option <?php if ($country_residence == 'Belize' ) echo 'selected'; ?> value="Belize">Belize</option>
                <option <?php if ($country_residence == 'Benin' ) echo 'selected'; ?> value="Benin">Benin</option>
                <option <?php if ($country_residence == 'Bermuda' ) echo 'selected'; ?> value="Bermuda">Bermuda</option>
                <option <?php if ($country_residence == 'Bhutan' ) echo 'selected'; ?> value="Bhutan">Bhutan</option>
                <option <?php if ($country_residence == 'Bolivia' ) echo 'selected'; ?> value="Bolivia">Bolivia</option>
                <option <?php if ($country_residence == 'Bonaire' ) echo 'selected'; ?> value="Bonaire">Bonaire</option>
                <option <?php if ($country_residence == 'Bosnia and Herzegovina' ) echo 'selected'; ?> value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option <?php if ($country_residence == 'Botswana' ) echo 'selected'; ?> value="Botswana">Botswana</option>
                <option <?php if ($country_residence == 'Bouvet Island' ) echo 'selected'; ?> value="Bouvet Island">Bouvet Island</option>
                <option <?php if ($country_residence == 'Brazil' ) echo 'selected'; ?> value="Brazil">Brazil</option>
                <option <?php if ($country_residence == 'British Indian Ocean Territory' ) echo 'selected'; ?> value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option <?php if ($country_residence == 'British Virgin Islands' ) echo 'selected'; ?> value="British Virgin Islands">British Virgin Islands</option>
                <option <?php if ($country_residence == 'Brunei' ) echo 'selected'; ?> value="Brunei">Brunei</option>
                <option <?php if ($country_residence == 'Bulgaria' ) echo 'selected'; ?> value="Bulgaria">Bulgaria</option>
                <option <?php if ($country_residence == 'Burkina Faso' ) echo 'selected'; ?> value="Burkina Faso">Burkina Faso</option>
                <option <?php if ($country_residence == 'Burundi' ) echo 'selected'; ?> value="Burundi">Burundi</option>
                <option <?php if ($country_residence == 'Cambodia' ) echo 'selected'; ?> value="Cambodia">Cambodia</option>
                <option <?php if ($country_residence == 'Cameroon' ) echo 'selected'; ?> value="Cameroon">Cameroon</option>
                <option <?php if ($country_residence == 'Canada' ) echo 'selected'; ?> value="Canada">Canada</option>
                <option <?php if ($country_residence == 'Cape Verde' ) echo 'selected'; ?> value="Cape Verde">Cape Verde</option>
                <option <?php if ($country_residence == 'Cayman Islands' ) echo 'selected'; ?> value="Cayman Islands">Cayman Islands</option>
                <option <?php if ($country_residence == 'Central African Republic' ) echo 'selected'; ?> value="Central African Republic">Central African Republic</option>
                <option <?php if ($country_residence == 'Chad' ) echo 'selected'; ?> value="Chad">Chad</option>
                <option <?php if ($country_residence == 'Chile' ) echo 'selected'; ?> value="Chile">Chile</option>
                <option <?php if ($country_residence == 'China' ) echo 'selected'; ?> value="China">China</option>
                <option <?php if ($country_residence == 'Christmas Island' ) echo 'selected'; ?> value="Christmas Island">Christmas Island</option>
                <option <?php if ($country_residence == 'Cocos [Keeling] Islands' ) echo 'selected'; ?> value="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                <option <?php if ($country_residence == 'Colombia' ) echo 'selected'; ?> value="Colombia">Colombia</option>
                <option <?php if ($country_residence == 'Comoros' ) echo 'selected'; ?> value="Comoros">Comoros</option>
                <option <?php if ($country_residence == 'Cook Islands' ) echo 'selected'; ?> value="Cook Islands">Cook Islands</option>
                <option <?php if ($country_residence == 'Costa Rica' ) echo 'selected'; ?> value="Costa Rica">Costa Rica</option>
                <option <?php if ($country_residence == 'Croatia' ) echo 'selected'; ?> value="Croatia">Croatia</option>
                <option <?php if ($country_residence == 'Cuba' ) echo 'selected'; ?> value="Cuba">Cuba</option>
                <option <?php if ($country_residence == 'Curacao' ) echo 'selected'; ?> value="Curacao">Curacao</option>
                <option <?php if ($country_residence == 'Cyprus' ) echo 'selected'; ?> value="Cyprus">Cyprus</option>
                <option <?php if ($country_residence == 'Czech Republic' ) echo 'selected'; ?> value="Czech Republic">Czech Republic</option>
                <option <?php if ($country_residence == 'Democratic Republic of the Congo' ) echo 'selected'; ?> value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                <option <?php if ($country_residence == 'Denmark' ) echo 'selected'; ?> value="Denmark">Denmark</option>
                <option <?php if ($country_residence == 'Djibouti' ) echo 'selected'; ?> value="Djibouti">Djibouti</option>
                <option <?php if ($country_residence == 'Dominica' ) echo 'selected'; ?> value="Dominica">Dominica</option>
                <option <?php if ($country_residence == 'Dominican Republic' ) echo 'selected'; ?> value="Dominican Republic">Dominican Republic</option>
                <option <?php if ($country_residence == 'East Timor' ) echo 'selected'; ?> value="East Timor">East Timor</option>
                <option <?php if ($country_residence == 'Ecuador' ) echo 'selected'; ?> value="Ecuador">Ecuador</option>
                <option <?php if ($country_residence == 'Egypt' ) echo 'selected'; ?> value="Egypt">Egypt</option>
                <option <?php if ($country_residence == 'El Salvador' ) echo 'selected'; ?> value="El Salvador">El Salvador</option>
                <option <?php if ($country_residence == 'Equatorial Guinea' ) echo 'selected'; ?> value="Equatorial Guinea">Equatorial Guinea</option>
                <option <?php if ($country_residence == 'Eritrea' ) echo 'selected'; ?> value="Eritrea">Eritrea</option>
                <option <?php if ($country_residence == 'Estonia' ) echo 'selected'; ?> value="Estonia">Estonia</option>
                <option <?php if ($country_residence == 'Ethiopia' ) echo 'selected'; ?> value="Ethiopia">Ethiopia</option>
                <option <?php if ($country_residence == 'Falkland Islands' ) echo 'selected'; ?> value="Falkland Islands">Falkland Islands</option>
                <option <?php if ($country_residence == 'Faroe Islands' ) echo 'selected'; ?> value="Faroe Islands">Faroe Islands</option>
                <option <?php if ($country_residence == 'Fiji' ) echo 'selected'; ?> value="Fiji">Fiji</option>
                <option <?php if ($country_residence == 'Finland' ) echo 'selected'; ?> value="Finland">Finland</option>
                <option <?php if ($country_residence == 'France' ) echo 'selected'; ?> value="France">France</option>
                <option <?php if ($country_residence == 'French Guiana' ) echo 'selected'; ?> value="French Guiana">French Guiana</option>
                <option <?php if ($country_residence == 'French Polynesia' ) echo 'selected'; ?> value="French Polynesia">French Polynesia</option>
                <option <?php if ($country_residence == 'French Southern Territories' ) echo 'selected'; ?> value="French Southern Territories">French Southern Territories</option>
                <option <?php if ($country_residence == 'Gabon' ) echo 'selected'; ?> value="Gabon">Gabon</option>
                <option <?php if ($country_residence == 'Gambia' ) echo 'selected'; ?> value="Gambia">Gambia</option>
                <option <?php if ($country_residence == 'Georgia' ) echo 'selected'; ?> value="Georgia">Georgia</option>
                <option <?php if ($country_residence == 'Germany' ) echo 'selected'; ?> value="Germany">Germany</option>
                <option <?php if ($country_residence == 'Ghana' ) echo 'selected'; ?> value="Ghana">Ghana</option>
                <option <?php if ($country_residence == 'Gibraltar' ) echo 'selected'; ?> value="Gibraltar">Gibraltar</option>
                <option <?php if ($country_residence == 'Greece' ) echo 'selected'; ?> value="Greece">Greece</option>
                <option <?php if ($country_residence == 'Greenland' ) echo 'selected'; ?> value="Greenland">Greenland</option>
                <option <?php if ($country_residence == 'Grenada' ) echo 'selected'; ?> value="Grenada">Grenada</option>
                <option <?php if ($country_residence == 'Guadeloupe' ) echo 'selected'; ?> value="Guadeloupe">Guadeloupe</option>
                <option <?php if ($country_residence == 'Guam' ) echo 'selected'; ?> value="Guam">Guam</option>
                <option <?php if ($country_residence == 'Guatemala' ) echo 'selected'; ?> value="Guatemala">Guatemala</option>
                <option <?php if ($country_residence == 'Guernsey' ) echo 'selected'; ?> value="Guernsey">Guernsey</option>
                <option <?php if ($country_residence == 'Guinea' ) echo 'selected'; ?> value="Guinea">Guinea</option>
                <option <?php if ($country_residence == 'Guinea-Bissau' ) echo 'selected'; ?> value="Guinea-Bissau">Guinea-Bissau</option>
                <option <?php if ($country_residence == 'Guyana' ) echo 'selected'; ?> value="Guyana">Guyana</option>
                <option <?php if ($country_residence == 'Haiti' ) echo 'selected'; ?> value="Haiti">Haiti</option>
                <option <?php if ($country_residence == 'Heard Island and McDonald Islands' ) echo 'selected'; ?> value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option <?php if ($country_residence == 'Honduras' ) echo 'selected'; ?> value="Honduras">Honduras</option>
                <option <?php if ($country_residence == 'Hong Kong' ) echo 'selected'; ?> value="Hong Kong">Hong Kong</option>
                <option <?php if ($country_residence == 'Hungary' ) echo 'selected'; ?> value="Hungary">Hungary</option>
                <option <?php if ($country_residence == 'Iceland' ) echo 'selected'; ?> value="Iceland">Iceland</option>
                
                
                <option <?php if ($country_residence == 'Iran' ) echo 'selected'; ?> value="Iran">Iran</option>
                <option <?php if ($country_residence == 'Iraq' ) echo 'selected'; ?> value="Iraq">Iraq</option>
                <option <?php if ($country_residence == 'Ireland' ) echo 'selected'; ?> value="Ireland">Ireland</option>
                <option <?php if ($country_residence == 'Isle of Man' ) echo 'selected'; ?> value="Isle of Man">Isle of Man</option>
                <option <?php if ($country_residence == 'Israel' ) echo 'selected'; ?> value="Israel">Israel</option>
                <option <?php if ($country_residence == 'Italy' ) echo 'selected'; ?> value="Italy">Italy</option>
                <option <?php if ($country_residence == 'Ivory Coast' ) echo 'selected'; ?> value="Ivory Coast">Ivory Coast</option>
                <option <?php if ($country_residence == 'Jamaica' ) echo 'selected'; ?> value="Jamaica">Jamaica</option>
                <option <?php if ($country_residence == 'Japan' ) echo 'selected'; ?> value="Japan">Japan</option>
                <option <?php if ($country_residence == 'Jersey' ) echo 'selected'; ?> value="Jersey">Jersey</option>
                <option <?php if ($country_residence == 'Jordan' ) echo 'selected'; ?> value="Jordan">Jordan</option>
                <option <?php if ($country_residence == 'Kazakhstan' ) echo 'selected'; ?> value="Kazakhstan">Kazakhstan</option>
                <option <?php if ($country_residence == 'Kenya' ) echo 'selected'; ?> value="Kenya">Kenya</option>
                <option <?php if ($country_residence == 'Kiribati' ) echo 'selected'; ?> value="Kiribati">Kiribati</option>
                <option <?php if ($country_residence == 'Kosovo' ) echo 'selected'; ?> value="Kosovo">Kosovo</option>
                <option <?php if ($country_residence == 'Kuwait' ) echo 'selected'; ?> value="Kuwait">Kuwait</option>
                <option <?php if ($country_residence == 'Kyrgyzstan' ) echo 'selected'; ?> value="Kyrgyzstan">Kyrgyzstan</option>
                <option <?php if ($country_residence == 'Laos' ) echo 'selected'; ?> value="Laos">Laos</option>
                <option <?php if ($country_residence == 'Latvia' ) echo 'selected'; ?> value="Latvia">Latvia</option>
                <option <?php if ($country_residence == 'Lebanon' ) echo 'selected'; ?> value="Lebanon">Lebanon</option>
                <option <?php if ($country_residence == 'Lesotho' ) echo 'selected'; ?> value="Lesotho">Lesotho</option>
                <option <?php if ($country_residence == 'Liberia' ) echo 'selected'; ?> value="Liberia">Liberia</option>
                <option <?php if ($country_residence == 'Libya' ) echo 'selected'; ?> value="Libya">Libya</option>
                <option <?php if ($country_residence == 'Liechtenstein' ) echo 'selected'; ?> value="Liechtenstein">Liechtenstein</option>
                <option <?php if ($country_residence == 'Lithuania' ) echo 'selected'; ?> value="Lithuania">Lithuania</option>
                <option <?php if ($country_residence == 'Luxembourg' ) echo 'selected'; ?> value="Luxembourg">Luxembourg</option>
                <option <?php if ($country_residence == 'Macao' ) echo 'selected'; ?> value="Macao">Macao</option>
                <option <?php if ($country_residence == 'Macedonia' ) echo 'selected'; ?> value="Macedonia">Macedonia</option>
                <option <?php if ($country_residence == 'Madagascar' ) echo 'selected'; ?> value="Madagascar">Madagascar</option>
                <option <?php if ($country_residence == 'Malawi' ) echo 'selected'; ?> value="Malawi">Malawi</option>
                <option <?php if ($country_residence == 'Malaysia' ) echo 'selected'; ?> value="Malaysia">Malaysia</option>
                <option <?php if ($country_residence == 'Maldives' ) echo 'selected'; ?> value="Maldives">Maldives</option>
                <option <?php if ($country_residence == 'Mali' ) echo 'selected'; ?> value="Mali">Mali</option>
                <option <?php if ($country_residence == 'Malta' ) echo 'selected'; ?> value="Malta">Malta</option>
                <option <?php if ($country_residence == 'Marshall Islands' ) echo 'selected'; ?> value="Marshall Islands">Marshall Islands</option>
                <option <?php if ($country_residence == 'Martinique' ) echo 'selected'; ?> value="Martinique">Martinique</option>
                <option <?php if ($country_residence == 'Mauritania' ) echo 'selected'; ?> value="Mauritania">Mauritania</option>
                <option <?php if ($country_residence == 'Mauritius' ) echo 'selected'; ?> value="Mauritius">Mauritius</option>
                <option <?php if ($country_residence == 'Mayotte' ) echo 'selected'; ?> value="Mayotte">Mayotte</option>
                <option <?php if ($country_residence == 'Mexico' ) echo 'selected'; ?> value="Mexico">Mexico</option>
                <option <?php if ($country_residence == 'Micronesia' ) echo 'selected'; ?> value="Micronesia">Micronesia</option>
                <option <?php if ($country_residence == 'Moldova' ) echo 'selected'; ?> value="Moldova">Moldova</option>
                <option <?php if ($country_residence == 'Monaco' ) echo 'selected'; ?> value="Monaco">Monaco</option>
                <option <?php if ($country_residence == 'Mongolia' ) echo 'selected'; ?> value="Mongolia">Mongolia</option>
                <option <?php if ($country_residence == 'Montenegro' ) echo 'selected'; ?> value="Montenegro">Montenegro</option>
                <option <?php if ($country_residence == 'Montserrat' ) echo 'selected'; ?> value="Montserrat">Montserrat</option>
                <option <?php if ($country_residence == 'Morocco' ) echo 'selected'; ?> value="Morocco">Morocco</option>
                <option <?php if ($country_residence == 'Mozambique' ) echo 'selected'; ?> value="Mozambique">Mozambique</option>
                <option <?php if ($country_residence == 'Myanmar [Burma]' ) echo 'selected'; ?> value="Myanmar [Burma]">Myanmar [Burma]</option>
                <option <?php if ($country_residence == 'Namibia' ) echo 'selected'; ?> value="Namibia">Namibia</option>
                <option <?php if ($country_residence == 'Nauru' ) echo 'selected'; ?> value="Nauru">Nauru</option>
                <option <?php if ($country_residence == 'Nepal' ) echo 'selected'; ?> value="Nepal">Nepal</option>
                <option <?php if ($country_residence == 'Netherlands' ) echo 'selected'; ?> value="Netherlands">Netherlands</option>
                <option <?php if ($country_residence == 'New Caledonia' ) echo 'selected'; ?> value="New Caledonia">New Caledonia</option>
                <option <?php if ($country_residence == 'New Zealand' ) echo 'selected'; ?> value="New Zealand">New Zealand</option>
                <option <?php if ($country_residence == 'Nicaragua' ) echo 'selected'; ?> value="Nicaragua">Nicaragua</option>
                <option <?php if ($country_residence == 'Niger' ) echo 'selected'; ?> value="Niger">Niger</option>
                <option <?php if ($country_residence == 'Nigeria' ) echo 'selected'; ?> value="Nigeria">Nigeria</option>
                <option <?php if ($country_residence == 'Niue' ) echo 'selected'; ?> value="Niue">Niue</option>
                <option <?php if ($country_residence == 'Norfolk Island' ) echo 'selected'; ?> value="Norfolk Island">Norfolk Island</option>
                <option <?php if ($country_residence == 'North Korea' ) echo 'selected'; ?> value="North Korea">North Korea</option>
                <option <?php if ($country_residence == 'Northern Mariana Islands' ) echo 'selected'; ?> value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option <?php if ($country_residence == 'Norway' ) echo 'selected'; ?> value="Norway">Norway</option>
                <option <?php if ($country_residence == 'Oman' ) echo 'selected'; ?> value="Oman">Oman</option>
                <option <?php if ($country_residence == 'Pakistan' ) echo 'selected'; ?> value="Pakistan">Pakistan</option>
                <option <?php if ($country_residence == 'Palau' ) echo 'selected'; ?> value="Palau">Palau</option>
                <option <?php if ($country_residence == 'Palestine' ) echo 'selected'; ?> value="Palestine">Palestine</option>
                <option <?php if ($country_residence == 'Panama' ) echo 'selected'; ?> value="Panama">Panama</option>
                <option <?php if ($country_residence == 'Papua New Guinea' ) echo 'selected'; ?> value="Papua New Guinea">Papua New Guinea</option>
                <option <?php if ($country_residence == 'Paraguay' ) echo 'selected'; ?> value="Paraguay">Paraguay</option>
                <option <?php if ($country_residence == 'Peru' ) echo 'selected'; ?> value="Peru">Peru</option>
                <option <?php if ($country_residence == 'Philippines' ) echo 'selected'; ?> value="Philippines">Philippines</option>
                <option <?php if ($country_residence == 'Pitcairn Islands' ) echo 'selected'; ?> value="Pitcairn Islands">Pitcairn Islands</option>
                <option <?php if ($country_residence == 'Poland' ) echo 'selected'; ?> value="Poland">Poland</option>
                <option <?php if ($country_residence == 'Portugal' ) echo 'selected'; ?> value="Portugal">Portugal</option>
                <option <?php if ($country_residence == 'Puerto Rico' ) echo 'selected'; ?> value="Puerto Rico">Puerto Rico</option>
                <option <?php if ($country_residence == 'Qatar' ) echo 'selected'; ?> value="Qatar">Qatar</option>
                <option <?php if ($country_residence == 'Republic of the Congo' ) echo 'selected'; ?> value="Republic of the Congo">Republic of the Congo</option>
                <option <?php if ($country_residence == 'Réunion' ) echo 'selected'; ?> value="Réunion">Réunion</option>
                <option <?php if ($country_residence == 'Romania' ) echo 'selected'; ?> value="Romania">Romania</option>
                <option <?php if ($country_residence == 'Russia' ) echo 'selected'; ?> value="Russia">Russia</option>
                <option <?php if ($country_residence == 'Rwanda' ) echo 'selected'; ?> value="Rwanda">Rwanda</option>
                <option <?php if ($country_residence == 'Saint Barthélemy' ) echo 'selected'; ?> value="Saint Barthélemy">Saint Barthélemy</option>
                <option <?php if ($country_residence == 'Saint Helena' ) echo 'selected'; ?> value="Saint Helena">Saint Helena</option>
                <option <?php if ($country_residence == 'Saint Kitts and Nevis' ) echo 'selected'; ?> value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option <?php if ($country_residence == 'Saint Lucia' ) echo 'selected'; ?> value="Saint Lucia">Saint Lucia</option>
                <option <?php if ($country_residence == 'Saint Martin' ) echo 'selected'; ?> value="Saint Martin">Saint Martin</option>
                <option <?php if ($country_residence == 'Saint Pierre and Miquelon' ) echo 'selected'; ?> value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option <?php if ($country_residence == 'Saint Vincent and the Grenadines' ) echo 'selected'; ?> value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option <?php if ($country_residence == 'Samoa' ) echo 'selected'; ?> value="Samoa">Samoa</option>
                <option <?php if ($country_residence == 'San Marino' ) echo 'selected'; ?> value="San Marino">San Marino</option>
                <option <?php if ($country_residence == 'São Tomé and Príncipe' ) echo 'selected'; ?> value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                <option <?php if ($country_residence == 'Saudi Arabia' ) echo 'selected'; ?> value="Saudi Arabia">Saudi Arabia</option>
                <option <?php if ($country_residence == 'Senegal' ) echo 'selected'; ?> value="Senegal">Senegal</option>
                <option <?php if ($country_residence == 'Serbia' ) echo 'selected'; ?> value="Serbia">Serbia</option>
                <option <?php if ($country_residence == 'Seychelles' ) echo 'selected'; ?> value="Seychelles">Seychelles</option>
                <option <?php if ($country_residence == 'Sierra Leone' ) echo 'selected'; ?> value="Sierra Leone">Sierra Leone</option>
                <option <?php if ($country_residence == 'Singapore' ) echo 'selected'; ?> value="Singapore">Singapore</option>
                <option <?php if ($country_residence == 'Sint Maarten' ) echo 'selected'; ?> value="Sint Maarten">Sint Maarten</option>
                <option <?php if ($country_residence == 'Slovakia' ) echo 'selected'; ?> value="Slovakia">Slovakia</option>
                <option <?php if ($country_residence == 'Slovenia' ) echo 'selected'; ?> value="Slovenia">Slovenia</option>
                <option <?php if ($country_residence == 'Solomon Islands' ) echo 'selected'; ?> value="Solomon Islands">Solomon Islands</option>
                <option <?php if ($country_residence == 'Somalia' ) echo 'selected'; ?> value="Somalia">Somalia</option>
                <option <?php if ($country_residence == 'South Africa' ) echo 'selected'; ?> value="South Africa">South Africa</option>
                <option <?php if ($country_residence == 'South Georgia and the South Sandwich Islands' ) echo 'selected'; ?> value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option <?php if ($country_residence == 'South Korea' ) echo 'selected'; ?> value="South Korea">South Korea</option>
                <option <?php if ($country_residence == 'South Sudan' ) echo 'selected'; ?> value="South Sudan">South Sudan</option>
                <option <?php if ($country_residence == 'Spain' ) echo 'selected'; ?> value="Spain">Spain</option>
                <option <?php if ($country_residence == 'Sri Lanka' ) echo 'selected'; ?> value="Sri Lanka">Sri Lanka</option>
                <option <?php if ($country_residence == 'Sudan' ) echo 'selected'; ?> value="Sudan">Sudan</option>
                <option <?php if ($country_residence == 'Suriname' ) echo 'selected'; ?> value="Suriname">Suriname</option>
                <option <?php if ($country_residence == 'Svalbard and Jan Mayen' ) echo 'selected'; ?> value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option <?php if ($country_residence == 'Swaziland' ) echo 'selected'; ?> value="Swaziland">Swaziland</option>
                <option <?php if ($country_residence == 'Sweden' ) echo 'selected'; ?> value="Sweden">Sweden</option>
                <option <?php if ($country_residence == 'Switzerland' ) echo 'selected'; ?> value="Switzerland">Switzerland</option>
                <option <?php if ($country_residence == 'Syria' ) echo 'selected'; ?> value="Syria">Syria</option>
                <option <?php if ($country_residence == 'Taiwan' ) echo 'selected'; ?> value="Taiwan">Taiwan</option>
                <option <?php if ($country_residence == 'Tajikistan' ) echo 'selected'; ?> value="Tajikistan">Tajikistan</option>
                <option <?php if ($country_residence == 'Tanzania' ) echo 'selected'; ?> value="Tanzania">Tanzania</option>
                <option <?php if ($country_residence == 'Thailand' ) echo 'selected'; ?> value="Thailand">Thailand</option>
                <option <?php if ($country_residence == 'Togo' ) echo 'selected'; ?> value="Togo">Togo</option>
                <option <?php if ($country_residence == 'Tokelau' ) echo 'selected'; ?> value="Tokelau">Tokelau</option>
                <option <?php if ($country_residence == 'Tonga' ) echo 'selected'; ?> value="Tonga">Tonga</option>
                <option <?php if ($country_residence == 'Trinidad and Tobago' ) echo 'selected'; ?> value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option <?php if ($country_residence == 'Tunisia' ) echo 'selected'; ?> value="Tunisia">Tunisia</option>
                <option <?php if ($country_residence == 'Turkey' ) echo 'selected'; ?> value="Turkey">Turkey</option>
                <option <?php if ($country_residence == 'Turkmenistan' ) echo 'selected'; ?> value="Turkmenistan">Turkmenistan</option>
                <option <?php if ($country_residence == 'Turks and Caicos Islands' ) echo 'selected'; ?> value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option <?php if ($country_residence == 'Tuvalu' ) echo 'selected'; ?> value="Tuvalu">Tuvalu</option>
                <option <?php if ($country_residence == 'U.S. Minor Outlying Islands' ) echo 'selected'; ?> value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                <option <?php if ($country_residence == 'U.S. Virgin Islands' ) echo 'selected'; ?> value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                <option <?php if ($country_residence == 'Uganda' ) echo 'selected'; ?> value="Uganda">Uganda</option>
                <option <?php if ($country_residence == 'Ukraine' ) echo 'selected'; ?> value="Ukraine">Ukraine</option>
                <option <?php if ($country_residence == 'United Arab Emirates' ) echo 'selected'; ?> value="United Arab Emirates">United Arab Emirates</option>
                <option <?php if ($country_residence == 'United Kingdom' ) echo 'selected'; ?> value="United Kingdom">United Kingdom</option>
                <option <?php if ($country_residence == 'United States' ) echo 'selected'; ?> value="United States">United States</option>
                <option <?php if ($country_residence == 'Uruguay' ) echo 'selected'; ?> value="Uruguay">Uruguay</option>
                <option <?php if ($country_residence == 'Uzbekistan' ) echo 'selected'; ?> value="Uzbekistan">Uzbekistan</option>
                <option <?php if ($country_residence == 'Vanuatu' ) echo 'selected'; ?> value="Vanuatu">Vanuatu</option>
                <option <?php if ($country_residence == 'Vatican City' ) echo 'selected'; ?> value="Vatican City">Vatican City</option>
                <option <?php if ($country_residence == 'Venezuela' ) echo 'selected'; ?> value="Venezuela">Venezuela</option>
                <option <?php if ($country_residence == 'Vietnam' ) echo 'selected'; ?> value="Vietnam">Vietnam</option>
                <option <?php if ($country_residence == 'Wallis and Futun' ) echo 'selected'; ?> value="Wallis and Futuna">Wallis and Futuna</option>
                <option <?php if ($country_residence == 'Western Sahara' ) echo 'selected'; ?> value="Western Sahara">Western Sahara</option>
                <option <?php if ($country_residence == 'Yemen' ) echo 'selected'; ?> value="Yemen">Yemen</option>
                <option <?php if ($country_residence == 'Zambia' ) echo 'selected'; ?> value="Zambia">Zambia</option>
                <option <?php if ($country_residence == 'Zimbabwe' ) echo 'selected'; ?> value="Zimbabwe">Zimbabwe</option>           -->
                </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="destination">Destination(s)</label>
                        <div class="controls">
        		<select id="destination" name="destination">
                            <option <?php if ($destination == '' ){ ?> selected="selected" <?php }?> value="">---Select One---</option>
                            <option <?php if ($destination == 'Singapore' ){ ?> selected="selected" <?php }?> value="Singapore">Singapore</option>
                            <option <?php if ($destination == 'Thailand' ){ ?> selected="selected" <?php }?> value="Thailand">Thailand</option>
                            <option <?php if ($destination == 'Malaysia' ){ ?> selected="selected" <?php }?> value="Malaysia">Malaysia</option>
                         </select>
                        </div>
                    </div>
                    
<!--                    <div class="control-group">
                        <label class="control-label" for="source">Source</label>
                        <div class="controls">
                            <input class="input-xlarge" id="source" name="source" type="text" value="<?php echo $source; ?>">
                        </div>
                    </div>-->
<!--                    <div class="control-group">
                        <label class="control-label" for="handled_by">Handled By</label>
                        <div class="controls">
                            <input class="input-xlarge" id="handled_by" name="handled_by" type="text" value="<?php echo $handled_by; ?>">
                        </div>
                    </div>-->
                    
                    
                     <div class="control-group">
                        <label class="control-label" for="inquiry_date">Inquiry Date</label>
                        <div class="controls">
                            <input class="input-xlarge date-picker" id="in_date" name="in_date" type="text" value="<?php echo $in_date; ?>">
                     </div></br>
                        
                    <div class="control-group">
                        <label class="control-label" for="tour_date">Travelling Date From</label>
                        <div class="controls">
                            <input class="input-xlarge date-picker" id="tr_date" name="tr_date" type="text" value="<?php echo $tr_date_from; ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="tour_date">Travelling Date To</label>
                        <div class="controls">
                            <input class="input-xlarge date-picker" id="arrival_date" name="arrival_date" type="text" value="<?php echo $tr_date_to; ?>">
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="tour_date">Arrival Option</label>
                        <div class="controls">
                            <select id="arrival_option" name="arrival_option">
                                <option <?php if ($arrival_option == 'fixed' ){ ?> selected="selected" <?php }?> value="fixed">Fixed</option>
                                <option <?php if ($arrival_option == 'tentative' ){ ?> selected="selected" <?php }?> value="tentative">Tentative</option>                            
                            </select>                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="tour_date">Number of Night</label>
                        <div class="controls">
                            <div class="numbers-row">
                                <input type="number" value="<?php echo $number_of_night; ?>" id="number_of_night" class="qty2 form-control" name="number_of_night" min="0" maxlength="30">
                             </div>                       
                        </div>
                    </div>
                     
                    <div class="control-group">
                        <label class="control-label" for="total_adult">Adults</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input id="total_adult" name="adults" size="16" type="text" value="<?php echo $adults; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="total_child">Child</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <input id="total_child" name="child" size="16" type="text" value="<?php echo $child; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="tour_date">Infant</label>
                        <div class="controls">
                            <div class="numbers-row">
                                <input type="number" value="<?php echo $infant; ?>" id="infant" class="qty2 form-control" name="infant" min="0" maxlength="15">
                             </div>                       
                        </div>
                    </div>        
                    <div class="control-group">
                        <label class="control-label" for="budget">Budget</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <select id="currency" name="currency" class="bud" style="">
                                <option <?php if ($currency == 'AUD' ) echo 'selected'; ?> value="AUD">AUD</option>
                                <option <?php if ($currency == 'GBP' ) echo 'selected'; ?>  value="GBP">GBP</option>
                                <option <?php if ($currency == 'BGN' ) echo 'selected'; ?>  value="BGN">BGN</option>
                                <option <?php if ($currency == 'CAD' ) echo 'selected'; ?>  value="CAD">CAD</option>
                                <option <?php if ($currency == 'CZK' ) echo 'selected'; ?>  value="CZK">CZK</option>
                                <option <?php if ($currency == 'DKK' ) echo 'selected'; ?>  value="DKK">DKK</option>
                                <option <?php if ($currency == 'EUR' ) echo 'selected'; ?>  value="EUR">EUR</option>
                                <option <?php if ($currency == 'HKD' ) echo 'selected'; ?>  value="HKD">HKD</option>
                                <option <?php if ($currency == 'HUF' ) echo 'selected'; ?>  value="HUF">HUF</option>
                                <option <?php if ($currency == 'INR' ) echo 'selected'; ?>  value="INR">INR</option>
                                <option <?php if ($currency == 'IDR' ) echo 'selected'; ?>  value="IDR">IDR</option>
                                <option <?php if ($currency == 'JPY' ) echo 'selected'; ?>  value="JPY">JPY</option>
                                <option <?php if ($currency == 'NOK' ) echo 'selected'; ?>  value="NOK">NOK</option>
                                <option <?php if ($currency == 'PHP' ) echo 'selected'; ?>  value="PHP">PHP</option>
                                <option <?php if ($currency == 'PLN' ) echo 'selected'; ?>  value="PLN">PLN</option>
                                <option <?php if ($currency == 'SGD' ) echo 'selected'; ?>  value="SGD">SGD</option>
                                <option <?php if ($currency == 'SEK' ) echo 'selected'; ?>  value="SEK">SEK</option>
                                <option <?php if ($currency == 'THB' ) echo 'selected'; ?>  value="THB">THB</option>
                                <option <?php if ($currency == 'USD' ) echo 'selected'; ?>  value="USD">USD</option>
                                </select>
                                &nbsp; &nbsp;<span class="add-on">From</span><input id="budget_from" name="budget_from" size="16" type="text" value="<?php echo $budget_from; ?>"> &nbsp; &nbsp;
                                <span class="add-on">To</span><input id="budget_to" name="budget_to" size="16" type="text" value="<?php echo $budget_to; ?>">
                            </div>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="sort_order">Quotation Needed For</label>
                        <div class="controls top_m">                        	
                            <input type="checkbox" name="quotation-day-tours" class="other_services_checkbox" <?php if(isset($quotation_day_tours)){ echo ($quotation_day_tours == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Day Tours</label>
                            <input type="checkbox" name="quotation-attraction-tickets" class="other_services_checkbox" <?php if(isset($quotation_attraction_tickets)){ echo ($quotation_attraction_tickets == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Attraction Tickets</label>
                            <input type="checkbox" name="quotation-meals" class="other_services_checkbox" <?php if(isset($quotation_meals)){ echo ($quotation_meals == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services"> Meals </label> 
                            <input type="checkbox" name="quotation-transfers" class="other_services_checkbox" <?php if(isset($quotation_transfers)){ echo ($quotation_transfers == '1' ? ' checked="checked"' : ''); }else{ ?>   <?php } ?>/><label class="other_services">Transfers</label>
                                                
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="tour_date">Hotel Preference</label>
                        <div class="controls">
                            <div class="numbers-row">
                                <input type="number" value="<?php echo $hotel_start_preference; ?>" class="qty2 form-control" name="hotel_start_preference" min="1" max="5">
                             </div>                       
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="remarks">Remarks</label>
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <textarea name="remarks" id="remarks" class="remarks" rows="10" style=" width:200px;"><?php echo $remarks; ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                     
                                        
                    <div class="control-group">
                        <label class="control-label" for="status">Status</label>
                        <div class="controls">
                            <?php
                                $order_status_array = array('1' => 'New', '2' => 'InProcess', '3' => 'Quoted', '4' => 'Confirm', '5' => 'Expired');
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
