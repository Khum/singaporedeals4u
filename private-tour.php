<?php
include_once 'inc/config.inc.php';
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
     <?php include_once 'head.php'; ?>
     <title>We provide Combo packages for Best Day Tours in Singapore and Attractions</title>
     <meta name="keywords" content="Singapore Day Tours, Singapore Attractions, Singapore Best Tours, Singapore Island Tours, Singapore City Tours, Singapore Private Tours, Singapore Family Tours, Singapore Adventure Tours, Singapore Couple Tours, Singapore Nature Tours">
     <meta name="description" content="We brings best Travel deals for Singapore. We have Singapore best Day Tours & Attractions, short stay in Singapore. Our Professional can provide the best advice to visitors.">
     
     <link rel="stylesheet" href="css/date_time_picker.css">
     
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
        .text-color{
            color:#00CC00 !important;
        }
        .label-font{
            font-size:15px;
        }
        
        
        /**** Funky Radio Buttons Style ****/
    /* @import('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.0/css/bootstrap.min.css'); */   
 
        .funkyradio{
          clear: both;
          overflow: hidden;
          margin-left: -12px;
        }

        .funkyradio label {
          width: 100%;
          border-radius: 3px;
          border: 1px solid #D1D3D4;
          font-weight: normal;
          font-size:15px;
        }

        .funkyradio input[type="radio"]:empty,
        .funkyradio input[type="checkbox"]:empty {
          display: none;
        }

        .funkyradio input[type="radio"]:empty ~ label,
        .funkyradio input[type="checkbox"]:empty ~ label {
          position: relative;
          line-height: 2.5em;
          text-indent: 3.25em;
/*          margin-top: 2em;*/
           margin-bottom: 2em;
          cursor: pointer;
          -webkit-user-select: none;
             -moz-user-select: none;
              -ms-user-select: none;
                  user-select: none;
        }

        .funkyradio input[type="radio"]:empty ~ label:before,
        .funkyradio input[type="checkbox"]:empty ~ label:before {
          position: absolute;
          display: block;
          top: 0;
          bottom: 0;
          left: 0;
          content: '';
          width: 2.5em;
          background: #D1D3D4;
          border-radius: 3px 0 0 3px;
        }

        .funkyradio input[type="radio"]:hover:not(:checked) ~ label,
        .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
          color: #888;
        }

        .funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
        .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
          content: '\2714';
          text-indent: .9em;
          color: #C2C2C2;
        }

        .funkyradio input[type="radio"]:checked ~ label,
        .funkyradio input[type="checkbox"]:checked ~ label {
          /* color: #777; */
          color: #000;
          font-weight:bold;
        }

        .funkyradio input[type="radio"]:checked ~ label:before,
        .funkyradio input[type="checkbox"]:checked ~ label:before {
          content: '\2714';
          text-indent: .9em;
          color: #333;
          background-color: #ccc;
        }

        .funkyradio input[type="radio"]:focus ~ label:before,
        .funkyradio input[type="checkbox"]:focus ~ label:before {
          box-shadow: 0 0 0 3px #999;
        }

        .funkyradio-default input[type="radio"]:checked ~ label:before,
        .funkyradio-default input[type="checkbox"]:checked ~ label:before {
          color: #333;
          background-color: #ccc;
        }

        .funkyradio-primary input[type="radio"]:checked ~ label:before,
        .funkyradio-primary input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #337ab7;
        }

        .funkyradio-success input[type="radio"]:checked ~ label:before,
        .funkyradio-success input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #5cb85c;
        }

        .funkyradio-danger input[type="radio"]:checked ~ label:before,
        .funkyradio-danger input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #d9534f;
        }

        .funkyradio-warning input[type="radio"]:checked ~ label:before,
        .funkyradio-warning input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #f0ad4e;
        }

        .funkyradio-info input[type="radio"]:checked ~ label:before,
        .funkyradio-info input[type="checkbox"]:checked ~ label:before {
          color: #fff;
          background-color: #5bc0de;
        }
        
        a.btn_1.cherry2, .btn_1.cherry2 {
            background: #e04f67 none repeat scroll 0 0;
            color: #fff;
            width: 55%;
            text-align: center;
            height:55px;
            font-size:20px;
            
        }
    </style>
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
  <header id="plain"><?php include_once 'header.php'; ?></header><!-- End Header -->
    
    <!--<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
            <h1>Inquiry Form</h1>
            <p></p>
            </div>
        </div>
    </section>--><!-- End Section -->

    <!--<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Inquiry Form</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div>--><!-- End Position -->
<br><br><br><br>
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="form_title">
                    <h3><strong><i class="icon-pencil"></i></strong>Fill the Inquiry Form below</h3>
                    <?php 
				 if($_GET['msg']=='ok')
				 {
				 ?>
                 <!--<script type="text/javascript">
				 alert('Message Successfully Sent. Our Agent Will Contact You Soon');
				 </script>-->
                <h4 style="color:#18D310; font-weight:bold; text-transform:capitalize;">Your Inquiry form has been successfully submitted thank you.<i class="icon-smile"></i></h4>
                 <?php } ?>
                    <p></p>
                </div>
                <div class="step">
                    <div id="message-contact"></div>
                    <form action="private-tour-process.php" method="post">
                        <div class="row">
                            <div class="f-item">
                                <!--<label for="your_name">Agent name <span class="required">*</span></label>-->
                                <input type="hidden" id="your_name" name="agent_name" value="SDFU" class="form-control fcpt">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 col-sm-6 inquiry">
                                <div class="f-item">
                                    <label for="your_name">Client name <span class="required">*</span></label>
                                    <input type="text" id="your_name" name="client_name" class="form-control fcpt" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 inquiry">
                                <div class="f-item">
                                    <label for="Email">Email <span class="required">*</span></label>
                                    <input type="email" id="Email" name="Email" class="form-control fcpt" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 inquiry" >
                            <div class="f-item select p-group">
                                <label for="your_phone">Country <span class="required">*</span></label>
                                <select class="form-select" name="field_country_residence" id="edit-field-country-residence--2" required="true"> 
                                <option value="">Select Country</option>                                
                                <option value="India">India</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Middle East"> Middle East</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Europe/US"> Europe/US</option>
                                <option value="China">China</option>
                                <option value="Others">Others</option>
                               
                                <!--<option value="Aland">Aland</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire">Bonaire</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar [Burma]">Myanmar [Burma]</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Republic of the Congo">Republic of the Congo</option><option value="Réunion">Réunion</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin">Saint Martin</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="São Tomé and Príncipe">São Tomé and Príncipe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten">Sint Maarten</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Korea">South Korea</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option><option value="U.S. Virgin Islands">U.S. Virgin Islands</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>           -->
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-6 inquiry">
                            <div class="f-item">
                                <label for="your_name"><i class="icon-calendar-7"></i> Inquiry Date <span class="required">*</span></label>            
                                <input  class="date-pick form-control" data-date-format="M d, D" type="text" name="in_dates" value="<?php echo date('M d, D'); ?>" required>
                            </div>
                            </div>
                        </div>
                        
                        <!--<div class="row">
                            <div class="f-item">
                                <label for="your_name">Source <span class="required">*</span></label>
                                <input type="text" id="source" name="source" class="form-control fcpt" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="f-item">
                                <label for="your_name">Handled by <span class="required">*</span></label>
                                <input type="text" id="handled_by" name="handled_by" class="form-control fcpt" required>
                            </div>
                        </div>-->
                                                
                        <div class="row">
                            <div class="col-md-12 col-sm-12 inquiry">
                            <div class="f-item p-group select">
                                <label for="your_name">Destination(s)</label>
                                <select  class="form-select" name="destination" id="destination">                                    
                                    <option value="Singapore">Singapore</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Malaysia">Malaysia</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        
                         <div class="row">
                            <div class="col-md-4 col-sm-4 inquiry">
                             <div class="f-item">
                                <label for="your_name"><i class="icon-calendar-7"></i> Travelling Date From<span class="required">*</span></label>            
                                <input  class="date-pick form-control" data-date-format="M d, D" type="text" name="tr_date_from" id="tr_date_from" value="" required>
                            </div>
                            </div>
                             
                            <div class="col-md-4 col-sm-4 inquiry">
                            <div class="f-item">
                                <label for="your_name"><i class="icon-calendar-7"></i> Travelling Date To<span class="required">*</span></label>            
                                <input  class="date-pick form-control" data-date-format="M d, D" type="text" name="tr_date_to" id="tr_date_to" value="" required>
                            </div>
                            </div>
                             
                            <div class="col-md-4 col-sm-4 inquiry">
                            <label for="your_name">Number of Night</label>
                            <div class="numbers-row">
                                <input type="text" value="1" id="adults" class="qty2 form-control nights" name="number-of-night" style="pointer-events: none;">
                            </div>
                            </div>
                             
                        </div>
                        
                        
                        
                        <div class="row">
                             <div class="col-md-12 col-sm-12 inquiry">
                            <div class="f-item">
                                <label for="arrival-option"> Arrival Dates are: </label>   &nbsp;    &nbsp;     
                                <input type="radio" name="arrival-option" class="" value="fixed">Fixed &nbsp;    &nbsp;   
                                <input type="radio" name="arrival-option" class="" value="tentative" checked="checked">Tentative
                            </div>
                            </div>
                        </div>
 

                    <!--<div class="row">
                        <div class="f-item p-group select">
                            <label for="your_name">Number of Adults</label>
                            <select name="adults" id="adults" class="form-select">
                                <option value="">Adults</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="f-item p-group select">
                            <label for="your_name">Number of Child (Below 12 Years)</label>
                            <select name="child" id="child" class="form-select">
                                <option value="">Child</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="f-item p-group select">
                            <label for="your_name">Number of Infant (Below 2 Years)</label>
                            <select name="child" id="child" class="form-select">
                                <option value="">Infant</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>-->
                    
                    
                    <div class="row">                         
                        <div class="col-md-4 col-sm-3 inquiry">
                            <div class="form-group">
                                <label><i class="icon-adult"></i> Adults</label>
                                <div class="numbers-row">
                                    <input type="text" value="1" id="adults" class="qty2 form-control" name="adults" style="pointer-events: none;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 inquiry">
                            <div class="form-group">
                                <label>Child (Below 12 Years)</label>
                                <div class="numbers-row">
                                    <input type="text" value="0" id="children" class="qty2 form-control" name="child" style="pointer-events: none;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 inquiry">
                            <div class="form-group">
                                <label> Infant (Below 2 Years)</label>
                                <div class="numbers-row">
                                    <input type="text" value="0" id="children" class="qty2 form-control" name="infant"  style="pointer-events: none;">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    

                    <div class="row">
                        <div class="col-md-12 col-sm-12 inquiry">
                            <br>
                        <div class="f-item" style="padding:0">
                           <label for="your_email" style="padding:0">Hotel Budget [Per Room Per Night]</label>
                        </div>

                        

                        <div class="col-md-3 col-sm-3 inquiry">
                            
                            <div class="form-group">
                               <label >From</label>                                
                               <input type="text" placeholder="0000" id="budget" name="budget-from" class="form-control fcpt">
                            </div>
                           
                        </div>
                        <div class="col-md-3 col-sm-3 inquiry">                            
                           <div class="form-group">
                               <label>To</label>                                
                               <input type="text" placeholder="0000" id="budget" name="budget-to" class="form-control fcpt">
                            </div>                        
                        </div>
                        
                        <div class="col-md-3 col-sm-3 inquiry">
                            <div class="form-group">
                             <label style="margin:5px;">Currency</label>
<!--                            <select id="currency" name="currency" class="form-select2" style=" width: 100%;"><option value="AUD">AUD</option><option value="GBP">GBP</option><option value="BGN">BGN</option><option value="CAD">CAD</option><option value="CZK">CZK</option><option value="DKK">DKK</option><option value="EUR">EUR</option><option value="HKD">HKD</option><option value="HUF">HUF</option><option value="INR">INR</option><option value="IDR">IDR</option><option value="JPY">JPY</option><option value="NOK">NOK</option><option value="PHP">PHP</option><option value="PLN">PLN</option><option value="SGD">SGD</option><option value="SEK">SEK</option><option value="THB">THB</option><option selected="" value="USD">USD</option></select>-->
                             <select id="currency" name="currency" class="form-select2" style=" width: 100%;"><option value="EUR">EUR</option><option value="SGD">SGD</option><option selected="" value="USD">USD</option></select>
                        </div>
                        </div>
                            
                        <div style="clear:both"></div>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 inquiry">
                            <br>
                            <div class="form-group">
                            <label for="your_name"><i class="icon_set_1_icon-81"></i> Hotel Preference </label>
                                <div class="numbers-row">
                                    <input type="text" value="4" id="adults" class="qty2 form-control" name="hotel-start-preference" max="5" style="pointer-events: none;">
                                </div>
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="row">                         
                        <div class="f-item">
                            <label for="your_name"><i class="icon_set_1_icon-17"></i> Quotation Needed For<span></span></label>
                        </div>
                        
                        <div class="col-md-12 funkyradio" id="time_slots">
                                            <div class="col-md-6 funkyradio-success">
                                                <input type="checkbox" class="label-font" name="quotation-day-tours" id="radio1" />
                                                <label for="radio1" id="slot1">Day Tours</label>
                                            </div>
                                            <div class="col-md-6 funkyradio-success">
                                                <input type="checkbox" class="label-font" name="quotation-attraction-tickets" id="radio2" />
                                                <label for="radio2" id="slot2">Attraction Tickets</label>
                                            </div>
                                            <div class="col-md-6 funkyradio-success">
                                                <input type="checkbox" class="label-font" name="quotation-meals" id="radio3" />
                                                <label for="radio3" id="slot3" >Meals</label>
                                            </div>
                                            <div class="col-md-6 funkyradio-success">
                                                <input type="checkbox" class="label-font" name="quotation-transfers" id="radio4" />
                                                <label for="radio4" id="slot4">Transfers</label>
                                            </div>
                                        </div> 


                    </div>
                     
                    <div class="row">
                        <div class="f-item">
                            <label for="your_name">What would you like to see and do? </label>
                            <p>Any specific destinations or interests (e.g culture, food, wine, romance, adventure, wildlife, etc.)?
Special occasion? Relaxing vs. fast-paced trip? What make this your dream trip?</p>
                            <textarea name="remarks" id="remarks" class="form-control" maxlength="200" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="f-item">   
                            <!--<a title="Cancel" id="cancel-inquiry" class="gradient-button cancel-tour-inquiry" href="#">Cancel</a>-->			
                            <input type="submit" value="Submit Inquiry" name="submit-tour-inquiry" id="submit-tour-inquiry" class="btn btn-primary gradient-button">		
                        </div>
                    </div>

                </form>
                    
                    
            </div>
            </div><!-- End col-md-8 -->

            <div class="col-md-4 col-sm-4 inquiry">
                <div class="box_style_4">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://006581615060" class="phone">+65 8161 5060</a>
                    <!--<small>Monday to Friday 9.00am - 7.30pm</small>-->
                    <a href="mailto:Sales@SingaporeDeals4u.com" id="email_footer">Sales@SingaporeDeals4u.com</a>
                </div>
            </div><!-- End col-md-4 -->
        </div><!-- End row -->
    </div><!-- End container -->
    <script type="text/javascript" src="js/date.js"></script>
    	<script type="text/javascript">
            $(document).ready(function(){
                $('#tr_date_from').datepicker().on('changeDate', function(ev) {
                
    		var minutes = 1000*60;
    		var hours = minutes*60;
    		var days = hours*24;
                //var date_from = $('#tr_date_from').val();
                var date_frm = $("#tr_date_from").datepicker('getDate');
                var date_to = $('#tr_date_to').datepicker('getDate');
                
                day  = date_frm.getDate(),  
                month = date_frm.getMonth() + 1,              
                year =  date_frm.getFullYear();
                var dat_frm = month + '/' + day + '/' + year;
                
                
                day_to  = date_to.getDate(),  
                month_to = date_to.getMonth() + 1,              
                year_to =  date_to.getFullYear();
                var dat_to = month_to + '/' + day_to + '/' + year_to;
                
                var foo_date1 = getDateFromFormat(dat_frm, "M/d/y");
    		var foo_date2 = getDateFromFormat(dat_to, "M/d/y");
                   
    		var diff_date = Math.round((foo_date2 - foo_date1)/days);
                if(diff_date < 0 ){
                    diff_date = 0;
                }
    		//alert("Diff date is: " + diff_date );
                $('.nights').val(diff_date);
            });
            $('#tr_date_to').datepicker().on('changeDate', function(ev) {
                
    		var minutes = 1000*60;
    		var hours = minutes*60;
    		var days = hours*24;
                //var date_from = $('#tr_date_from').val();
                var date_frm = $("#tr_date_from").datepicker('getDate');
                var date_to = $('#tr_date_to').datepicker('getDate');
                
                day  = date_frm.getDate(),  
                month = date_frm.getMonth() + 1,              
                year =  date_frm.getFullYear();
                var dat_frm = month + '/' + day + '/' + year;
                
                
                day_to  = date_to.getDate(),  
                month_to = date_to.getMonth() + 1,              
                year_to =  date_to.getFullYear();
                var dat_to = month_to + '/' + day_to + '/' + year_to;
                
                var foo_date1 = getDateFromFormat(dat_frm, "M/d/y");
    		var foo_date2 = getDateFromFormat(dat_to, "M/d/y");
                   
    		var diff_date = Math.round((foo_date2 - foo_date1)/days);
                if(diff_date < 0 ){
                    diff_date = 0;
                }
    		//alert("Diff date is: " + diff_date );
                $('.nights').val(diff_date);
            });
            
            });
    	</script>
    
    <!-- Start footer -->
    <?php include_once 'footer.php'; ?>
    <!-- End footer -->


 <!-- Specific scripts -->
<script src="<?=site_url('assets/validate.js');?>"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?=site_url('js/map_contact.js');?>"></script>
<script src="<?=site_url('js/infobox.js');?>"></script>

<!-- Date and time pickers -->
<script src="<?=site_url('js/bootstrap-datepicker.js');?>"></script>
<script>
  //$('input.date-pick').datepicker('setDate','today');
  $('input.date-pick').datepicker({
      startDate: '+0d'
  });
 
</script>

  </body>
</html>
