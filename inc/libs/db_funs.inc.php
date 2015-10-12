<?php
function Query($Q) {
    /* $r = mysql_query($Q)
      or die(mysql_error()); */
    $r = mysql_query($Q);
    //echo $Q."<br />";
    if (!$r) {

        $error = mysql_error();

        $message = $Q . "<br />";
        $message .= $error . "<br />" . date("F j, Y, G:i:s ") . "<br /><br />URL: " . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "<br />REMOTE ADDRESS: " . $_SERVER['REMOTE_ADDR'];

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Delloite Portal <info@proviso.no>' . "\r\n";
        mail("irshad@it-bees.com", "Singaporedeals4u MySql Error", $message, $headers);

        die("Internal error! please try later.<br />" . $Q . "<br />" . mysql_error());
    } else {
        return $r;
    }
}

function GetObj($r) {
    $o = mysql_fetch_object($r);
    return $o;
}

function GetArr($r) {
    $o = mysql_fetch_assoc($r);
    return $o;
}

function Num($r) {
    $n = mysql_num_rows($r);
    return $n;
}

function Encode($str) {
    return trim(mysql_real_escape_string(($str)));
}

function LastInsertId() {
    mysql_insert_id();
}

function Decode($str) {
    return html_entity_decode($str);
}

function Encrypt($password) {
    return crypt(md5($password), md5($password));
}

function InsertUpdateRecord($fields, $table, $pk = 'id') {

    if (isset($fields[$pk]) && $fields[$pk] > 0) {
        $sql = "UPDATE `$table` SET ";

        foreach ($fields as $k => $v) {
            if ($k == $pk)
                continue;
            else if ($v === 'now()')
                $sql .= "`$k` = now(), ";
            else
                $sql .= "`$k` = '" . Encode($v) . "', ";
        }
        $sql = rtrim($sql, ", ");

        if (is_array($fields[$pk]) && !empty($fields[$pk]))
            $sql .= " where `$pk` in ('" . implode("','", $fields[$pk]) . "') ";
        else
            $sql .= " where `$pk` = '" . Encode($fields[$pk]) . "'";
        //echo $sql; return $fields[$pk];
        Query($sql);
        // if there was no update.. insert the record
        if (mysql_affected_rows() == 0) {
            //echo 'true';
            if (!IsExist($table, $pk, $fields[$pk]))
                return InsertUpdateRecord($fields, $table);
        }
        return $fields[$pk];
    }
    else {
        $sql = "INSERT INTO `$table` (";
        $values = ") VALUES (";

        foreach ($fields as $k => $v) {
            $sql .= "`$k`, ";
            if ($v === 'now()')
                $values .= " now(), ";
            else
                $values .= "'" . Encode($v) . "', ";
        }

        $sql = rtrim($sql, ", ");
        $values = rtrim($values, ", ") . ")";
        //echo $sql.$values; exit;
        if (Query($sql . $values))
            return mysql_insert_id(); //LastInsertID();
        else
            return NULL;
    }
}

/*
 * $selectedValue: whose value you require, a table column
 * $table: table name
 * $where: where clause
 * $returnValue: if no record found it will $return be returned
 */

function GetFieldValue($selectedValue, $table, $where, $returnValue = false) {
    //echo "select `$selectedValue` from `$table` where $where";
    $r = Query("select `$selectedValue` from `$table` where $where");
    if (Num($r) > 0) {
        $o = GetObj($r);
        return Decode($o->$selectedValue);
    }
    else
        return $returnValue;
}

/*
 * $from: table name
 * $where: where clause
 * return: number of rows
 */

function GetCount($from, $where = '') {
    if (!empty($where))
        $where = " where $where";

    //echo "select count(*) as rows from $from $where";
    $r = Query("select count(*) as rows from $from $where");
    $o = GetObj($r);
    return $o->rows;
}

/*
 * $select: select clause
 * $from: table name
 * $where: where clause
 * $order_by: order by clause e.g. 'name asc'
 * $start: starting record for limits
 * $per_page: number of records after $start 
 * return: db result set
 */

function GetResults($select, $from, $where = '', $order_by = NULL, $start = NULL, $per_page = 30) {
    if (!empty($where))
        $where = " where $where ";

    if ($order_by !== NULL)
        $where .= " order by $order_by";

    if ($start !== NULL)
        $where .= " limit $start, $per_page ";
    //echo "select $select from $from $where ";

    $r = Query("select $select from `$from` $where ");
    if (Num($r) > 0)
        return $r;
    else
        return false;
}

function GetResult($select, $from, $where = '', $order_by = NULL) {
    $results = GetResults($select, $from, $where, $order_by);
    if (!$results)
        return $results;
    return GetArr($results);
}

function array_copy($keys, $array = NULL) {
    $tmp = array();
    if ($array === NULL)
        $array = $_POST;
    $keys = explode(',', $keys);
    foreach ($keys as $k) {
        if (isset($array[$k]))
            $tmp[$k] = $array[$k];
    }

    return $tmp;
}

function IsExist($table, $col, $val, $attr = '') {
    $where = "where `$col`='" . Encode($val) . "' ";
    if (!empty($attr))
        $where .= " and $attr";

    $sql = "select `$col` from `$table` $where ";
    $rp = Query($sql);
    if (Num($rp) > 0)
        return true;
    return false;
}
?>