<?php
function site_url($url = '', $forceHttps = false) {
    //|| !empty($_SERVER['HTTPS'])
    global $is_http, $server, $local_list, $demo_list;
    if ($forceHttps) {
        if (!in_array($server, $local_list) && !in_array($server, $demo_list))
            return 'https://' . ltrim(DOMAIN_URL, "http://") . '/' . $url;
        else
            return 'http://' . ltrim(DOMAIN_URL, "http://") . '/' . $url;
    }else {
        return DOMAIN_URL . '/' . $url;
    }
}

function enqueueMsg($msg, $type = "error", $ref = '', $redirect = true) {
    if (empty($ref))
        $ref = $_SERVER['PHP_SELF'];

    if (!isset($_SESSION['ERROR_QUEUE']))
        $_SESSION['ERROR_QUEUE'] = array();

    if (!isset($_SESSION['ERROR_QUEUE'][$ref]))
        $_SESSION['ERROR_QUEUE'][$ref] = array();

    if (!isset($_SESSION['ERROR_QUEUE'][$ref][$type]))
        $_SESSION['ERROR_QUEUE'][$ref][$type] = array();

    $_SESSION['ERROR_QUEUE'][$ref][$type][] = $msg;
    $_SESSION['ERROR_QUEUE'][$ref]['expiration'] = 0;

    if ($redirect && !empty($ref)) {
        header('Location:' . $ref);
        exit;
    }
}

function deQueueMsg($checkSelf = true, $ref = '') {

    if (empty($ref))
        $ref = $_SERVER['HTTP_REFERER'];

    if (!isset($_SESSION['ERROR_QUEUE']))
        return '';

    if (!isset($_SESSION['ERROR_QUEUE'][$ref]) && $checkSelf)
        $ref = $_SERVER['PHP_SELF'];

    if (!isset($_SESSION['ERROR_QUEUE'][$ref]))
        return '';

    $allMsgs = $_SESSION['ERROR_QUEUE'][$ref];

    $return = "";
    $msg_count = 1;
    foreach ($allMsgs as $type => $msgs) {
        if ($type == 'expiration')
            continue;
        foreach ($msgs as $msg) {
            $return .= displayMsg($msg, $type);
        }
        $msg_count++;
    }

    unset($_SESSION['ERROR_QUEUE'][$ref]);
    return $return;
}

function isError($checkSelf = true, $ref = '') {
    if (empty($ref))
        $ref = $_SESSION['HTTP_REFERER'];

    if (!isset($_SESSION['ERROR_QUEUE']))
        return false;

    if (!isset($_SESSION['ERROR_QUEUE'][$ref]) && $checkSelf)
        $ref = $_SESSION['PHP_SELF'];

    if (!isset($_SESSION['ERROR_QUEUE'][$ref]))
        return false;

    $allMsgs = $_SESSION['ERROR_QUEUE'][$ref];

    $return = "";
    foreach ($allMsgs as $type => $msgs) {
        if ($type == 'expiration')
            continue;
        if ($type == 'info')
            continue;
        foreach ($msgs as $msg)
            return true;
    }

    return false;
}

function displayMsg($message, $type = "success") {
    $output = "";
    $output .= '<div class="alert alert-' . $type . '"><button data-dismiss="alert" class="close">x</button>' . $message . '</div>';
    return $output;
}

function tosql($date, $format = 'Y-m-d H(idea)(worry)') {
    return date($format, strtotime($date));
}

function create_guid() {
    if (function_exists('com_create_guid')) {
        return com_create_guid();
    } else {
        mt_srand((double) microtime() * 10000); //optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45); // "-"
        $uuid = chr(123)// "{"
                . substr($charid, 0, 8) . $hyphen
                . substr($charid, 8, 4) . $hyphen
                . substr($charid, 12, 4) . $hyphen
                . substr($charid, 16, 4) . $hyphen
                . substr($charid, 20, 12)
                . chr(125); // "}"
        return $uuid;
    }
}

function sanitizeInputs() {
    if (!empty($_POST)) {
        foreach ($_POST as $k => $v) {
            if (!is_array($v)) {
                $v = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $v);
                $v = preg_replace('/<object\b[^>]*>(.*?)<\/object>/is', "", $v);
                $_POST[$k] = htmlentities($v); //htmlentities(strip_tags($v,'<p>'));
            } else {
                foreach ($v as $k1 => $v1) {
                    $v1 = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $v1);
                    $v1 = preg_replace('/<object\b[^>]*>(.*?)<\/object>/is', "", $v1);
                    $v[$k1] = htmlentities($v1); //htmlentities(strip_tags($v,'<p>'));
                }
                $_POST[$k] = $v;
            }
        }
    }
    if (!empty($_GET)) {
        foreach ($_GET as $k => $v) {
            if (!is_array($v)) {
                $v = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $v);
                $v = preg_replace('/<object\b[^>]*>(.*?)<\/object>/is', "", $v);
                $_GET[$k] = htmlentities($v); //htmlentities(strip_tags($v,'<p>'));
            } else {
                foreach ($v as $k1 => $v1) {
                    $v1 = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $v1);
                    $v1 = preg_replace('/<object\b[^>]*>(.*?)<\/object>/is', "", $v1);
                    $v[$k1] = htmlentities($v1); //htmlentities(strip_tags($v,'<p>'));
                }
                $_GET[$k] = $v;
            }
        }
    }
}

function forceSSL($redirect = false) {
    global $is_http, $server, $local_list, $demo_list;
    if (!in_array($server, $local_list) && !in_array($server, $demo_list)) {
        if (!$is_http) {
            if ($redirect) {
                header("location: https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
                exit;
            }
            header("location: error.php");
        }
    }
}

function GetRandCode($tokenSize = 10) {
    $token = md5(uniqid(rand()));
    return substr($token, 0, $tokenSize);
}

// it is using paging class
function customPaging($sql, $ListRecPerPage = 20) {
    global $link;
    //===============Paging========================
    //$ListRecPerPage = 10;
    $pg = new paging($link, "page", $ListRecPerPage, "&laquo;", "&raquo;", 5, @$CurlLink);
    $pg->sql = $sql;
    $r = $pg->get_page_result(); // result set
    $num_rows = $pg->get_page_num_rows(); // number of records in result set 
    $data = array();
    if ($num_rows > 0) {
        while ($o = GetArr($r)) {
            array_push($data, $o);
        }
    }
    mysql_data_seek($r, 0);
    //if( @$iscurl )
    //$nav_links = $pg->navigation_curl(" | ", "price" ); // the navigation links (define a CSS class selector for the current link)
    //else
    $nav_links = $pg->navigation(" ", "current"); // the navigation links (define a CSS class selector for the current link)
    $nav_info = $pg->page_info("to"); // information about the number of records on page ("to" is the text between the number)
    $simple_nav_links = $pg->back_forward_link(); // the navigation with only the back and forward links
    $total_recs = $pg->get_total_rows(); // the total number of records*/
    //============================================= 

    return array('data' => $data, 'result' => $r, 'total_recs' => $total_recs, 'nav_links' => $nav_links, 'nav_info' => $nav_info, 'simple_nav_links' => $simple_nav_links);
}
function formatDate($date, $myFormat = "Y-m-d") {
    $date = strtotime($date);
    return date($myFormat, $date);
}
function getRows($from, $where = '', $select = '*', $sort_order = '', $join = '', $group_by = '', $do_paging = "N", $record_per_page = '20') {
    $order_by = "";
    $sqlWhere = "";
    $joinSql = "";
    if (is_array($select)) {
        $select = implode(",", $select);
    }
    $sqlWhere2 = array();
    if (is_array($where) && count($where) > 0) {
        foreach ($where as $col => $val) {
            $sqlWhere2[] = $col . " = '" . Encode($val) . "'";
        }
    } else if (!empty($where)) {
        $sqlWhere = $where;
    }
    if ($sort_order != "")
        $order_by = "ORDER BY $sort_order";

    if ($group_by != "")
        $group_by = "GROUP BY $group_by";

    if (count($sqlWhere2))
        $sqlWhere = " WHERE " . implode(' AND ', $sqlWhere2);

    if (is_array($join) && !empty($join)) {
        foreach ($join as $tbl => $con) {
            $tmp = explode("|", $tbl);
            if (isset($tmp[1]))
                $joinSql .= ' ' . strtoupper($tmp[0]) . ' JOIN ' . $tmp[1] . ' ON ' . $con;
            else
                $joinSql .= ' JOIN ' . $tbl . ' ON ' . $con;
        }
    }else if (!empty($join)) {
        $joinSql = $join;
    }
    $sql = "SELECT " . $select . " FROM `" . $from . '` ' . $joinSql . " $sqlWhere $group_by $order_by";
    //echo $sql; //exit;
    if ($do_paging == "Y")
        return customPaging($sql, $record_per_page);
    else {
        $r = Query($sql);
        $num_rows = Num($r);
        $data = array();
        if ($num_rows > 0) {
            while ($o = GetArr($r)) {
                array_push($data, $o);
            }
        }
        mysql_data_seek($r, 0);
        return array('data' => $data, 'result' => $r, 'total_recs' => $num_rows);
    }
}
function getorderRows($from, $where = '', $select = '*', $sort_order = '', $join = '', $group_by = '', $do_paging = "N", $record_per_page = '20') {
    $order_by = "";
    $sqlWhere = "";
    $joinSql = "";
    if (is_array($select)) {
        $select = implode(",", $select);
    }
    $sqlWhere2 = array();
    if (is_array($where) && count($where) > 0) {
        foreach ($where as $col => $val) {
            $sqlWhere2[] = $col . " = '" . Encode($val) . "'";
        }
    } else if (!empty($where)) {
        $sqlWhere = $where;
    }
    if ($sort_order != "")
        $order_by = "ORDER BY $sort_order";

    if ($group_by != "")
        $group_by = "GROUP BY $group_by";

    if (count($sqlWhere2))
        $sqlWhere = " WHERE " . implode(' AND ', $sqlWhere2);

    if (is_array($join) && !empty($join)) {
        foreach ($join as $tbl => $con) {
            $tmp = explode("|", $tbl);
            if (isset($tmp[1]))
                $joinSql .= ' ' . strtoupper($tmp[0]) . ' JOIN ' . $tmp[1] . ' ON ' . $con;
            else
                $joinSql .= ' JOIN ' . $tbl . ' ON ' . $con;
        }
    }else if (!empty($join)) {
        $joinSql = $join;
    }
    $sql = "SELECT " . $select . " FROM `" . $from . '` ' . $joinSql . " $sqlWhere $group_by $order_by";
    //echo $sql; //exit;
    if ($do_paging == "Y")
        return customPaging($sql, $record_per_page);
    else {
        $r = Query($sql);
        $num_rows = Num($r);
        $data = array();
        if ($num_rows > 0) {
            while ($o = GetArr($r)) {
                array_push($data, $o);
            }
        }
        mysql_data_seek($r, 0);
        return array('data' => $data, 'result' => $r, 'total_recs' => $num_rows);
    }
}
function downloadFile($fullPath) {
    if (file_exists($fullPath)) {
        // Parse Info / Get Extension
        $fsize = filesize($fullPath);
        $path_parts = pathinfo($fullPath);
        $ext = strtolower($path_parts["extension"]);
        // Determine Content Type
        switch ($ext) {
            case "pdf": $ctype = "application/pdf";
                break;
            case "exe": $ctype = "application/octet-stream";
                break;
            case "zip": $ctype = "application/zip";
                break;
            case "doc": $ctype = "application/msword";
                break;
            case "xls": $ctype = "application/vnd.ms-excel";
                break;
            case "ppt": $ctype = "application/vnd.ms-powerpoint";
                break;
            case "gif": $ctype = "image/gif";
                break;
            case "png": $ctype = "image/png";
                break;
            case "jpeg":
            case "jpg": $ctype = "image/jpg";
                break;
            default: $ctype = "application/force-download";
        }
        header("Pragma: public"); // required
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false); // required for certain browsers
        header("Content-Type: $ctype");
        header("Content-Disposition: attachment; filename=\"" . basename($fullPath) . "\";");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . $fsize);
        ob_clean();
        flush();
        readfile($fullPath);
    } else {
        return false;
    }
}

function putContents($contents, $mode = 'a') {
    // $mode = 'a' for append
    //$LOG_FILE_CONTENTS.= $contents;
    $fp = fopen(PAYPAL_LOG_FILE, $mode);
    fwrite($fp, $contents);
    fclose($fp);
}

function OrderConfirmed($order_id){
    $orderDetailsRes = getRows(DB_TABLE_PREFIX .'order', array('id' => $order_id));
    $orderDetails = $orderDetailsRes['data'];
    $orderDetails = $orderDetails[0];
    
    $client = "Thanks you for your order. Your order details are below.<br />";
    $supplier = "Following order have been confirmed on Singaporedeals4u website.<br>";
    $subject = "Singaporedeals4u Order confirmation";
    
    $message ='<table cellspacing="0" cellpadding="5" border="1" width="700">
                    <tr>
                        <td width="30%">Full name</td>
                        <td>'.$orderDetails['full_name'].'</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>'.$orderDetails['email'].'</td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td>'.$orderDetails['mobile'].'</td>
                    </tr>
                    <tr>
                        <td>Hotel Name</td>
                        <td>'.$orderDetails['hotel_name'].'</td>
                    </tr>
                    <tr>
                        <td>Hotel Address</td>
                        <td>'.$orderDetails['hotel_address'].'</td>
                    </tr>
                    <tr>
                        <td>Tour Date</td>
                        <td>'.$orderDetails['tour_date'].'</td>
                    </tr>
                    <tr>
                        <td>Tour Pick up time</td>
                        <td>'.$orderDetails['pickup_time'].'</td>
                    </tr>
                    <tr>
                        <td>Number of persons travelling</td>
                        <td>Adult: '.$orderDetails['total_adult'].'<br />Child: '.$orderDetails['total_child'].'</td>
                    </tr>                                            
                    <tr>
                        <td><strong>Total Amont</strong></td>
                        <td><strong>'.CURRENCY_SYMBOL . $orderDetails['total_price'].'</strong>
                        </td>
                    </tr>
            </table>';
    
    
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers    
    $headers .= 'From: Singaporedeals4u <order@singaporedeals4u.com>' . "\r\n";

    // Mail it to Client
    mail($orderDetails['email'], $subject, $client.$message, $headers);
    
    // Mail it to Admin
    $adminDetailsRes = getRows(DB_TABLE_PREFIX .'admin_user', array('id' => 1));
    $adminDetails = $adminDetailsRes['data'];
    $adminDetails = $adminDetails[0];
    mail($adminDetails['email'], $subject, $supplier.$message, $headers);
}
?>