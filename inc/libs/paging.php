<?php

/* * **********************************************************************
  Paging ver. 1.01
  Use this class to handle MySQL record sets and get page navigation links

  Copyright (C) 2005 - Olaf Lederer

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

  _________________________________________________________________________
  available at http://www.finalwebsites.com/
  Comments & suggestions: http://www.finalwebsites.com/contact.php

  Updates & bugfixes

  ver. 1.01 - There was a small bug inside the page_info() method while showing
  the last page (set). The error (last record) is fixed. There is also a small
  update in the method set_page(), the check is now with $_REQUEST values in
  place of $_GET values.

 * *********************************************************************** */

//require($_SERVER['DOCUMENT_ROOT']."/classes/my_pagina/db_config.php");
//error_reporting(E_ALL); // only for testing

class Paging {

    var $sql;
    var $result;
    var $get_var;
    var $rows_on_page;
    var $str_forward;
    var $str_backward;
    var $num_links;
    var $all_rows;
    var $num_rows;
    var $page;
    var $number_pages;
    var $conn;
    var $curlstr;

    // constructor
    function Paging($Conn, $QS_VAR, $NUM_ROWS, $STR_FWD, $STR_BWD, $NUM_LINKS, $CurlStr) {
        $this->conn = $Conn;
        $this->get_var = $QS_VAR;
        $this->rows_on_page = $NUM_ROWS;
        $this->str_forward = $STR_FWD;
        $this->str_backward = $STR_BWD;
        $this->num_links = $NUM_LINKS;
        $this->curlstr = $CurlStr;
    }

    // sets the current page number
    function set_page() {
        $this->page = (isset($_REQUEST[$this->get_var]) && $_REQUEST[$this->get_var] != "") ? $_REQUEST[$this->get_var] : 0;
        return $this->page;
    }

    // gets the total number of records 
    function get_total_rows() {
        $tmp_result = mysql_query($this->sql, $this->conn);
        $this->all_rows = @mysql_num_rows($tmp_result);
        @mysql_free_result($tmp_result);
        return $this->all_rows;
    }

    // database connection
    /* function connect_db() {
      $conn_str = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
      mysql_select_db(DB_NAME, $conn_str);
      } */
    // get the totale number of result pages
    function get_num_pages() {
        $this->number_pages = ceil($this->get_total_rows() / $this->rows_on_page);
        return $this->number_pages;
    }

    // returns the records for the current page
    function get_page_result() {
        $start = $this->set_page() * $this->rows_on_page;
        $page_sql = sprintf("%s LIMIT %s, %s", $this->sql, $start, $this->rows_on_page);
        $this->result = mysql_query($page_sql, $this->conn);
        return $this->result;
    }

    // get the number of rows on the current page
    function get_page_num_rows() {
        $this->num_rows = @mysql_num_rows($this->result);
        return $this->num_rows;
    }

    // free the database result
    function free_page_result() {
        mysql_free_result($this->result);
    }

    // function to handle other querystring than the page variable
    function rebuild_qs($curr_var) {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $parts = explode("&", $_SERVER['QUERY_STRING']);
            $newParts = array();
            foreach ($parts as $val) {
                if (stristr($val, $curr_var) == false) {
                    array_push($newParts, $val);
                }
            }
            if (count($newParts) != 0) {
                $qs = "&" . implode("&", $newParts);
            } else {
                return false;
            }
            return $qs; // this is your new created query string
        } else {
            return false;
        }
    }

    // this method will return the navigation links for the conplete recordset
    function navigation_curl($separator = " | ", $css_current = "", $back_forward = false) {
        $max_links = $this->num_links;
        $curr_pages = $this->set_page();
        $all_pages = $this->get_num_pages() - 1;
        $var = $this->get_var;
        $navi_string = "";
        if (!$back_forward) {
            $max_links = ($max_links < 2) ? 2 : $max_links;
        }
        if ($curr_pages <= $all_pages && $curr_pages >= 0) {
            if ($curr_pages > ceil($max_links / 2)) {
                $start = ($curr_pages - ceil($max_links / 2) > 0) ? $curr_pages - ceil($max_links / 2) : 1;
                $end = $curr_pages + ceil($max_links / 2);
                if ($end >= $all_pages) {
                    $end = $all_pages + 1;
                    $start = ($all_pages - ($max_links - 1) > 0) ? $all_pages - ($max_links - 1) : 1;
                }
            } else {
                $start = 0;
                $end = ($all_pages >= $max_links) ? $max_links : $all_pages + 1;
            }
            if ($all_pages >= 1) {
                $forward = $curr_pages + 1;
                $backward = $curr_pages - 1;
                $backward = ($backward > 0) ? $backward : '';
                $navi_string = ($curr_pages > 0) ? "<a href=\"" . $this->curlstr . "/index$backward" . ".html" . "\">" . $this->str_backward . "</a>&nbsp;" : $this->str_backward . "&nbsp;";
                if (!$back_forward) {
                    for ($a = $start + 1; $a <= $end; $a++) {
                        $theNext = $a - 1; // because a array start with 0
                        if ($theNext != $curr_pages) {
                            $CtheNext = ( $theNext > 0 ) ? $theNext : '';
                            $navi_string .= "<a href=\"" . $this->curlstr . "/index$CtheNext" . ".html" . "\">";
                            $navi_string .= $a . "</a>";
                            $navi_string .= ($theNext < ($end - 1)) ? $separator : "";
                        } else {
                            $navi_string .= ($css_current != "") ? "<span class=\"" . $css_current . "\">" . $a . "</span>" : $a;
                            $navi_string .= ($theNext < ($end - 1)) ? $separator : "";
                        }
                    }
                }
                $navi_string .= ($curr_pages < $all_pages) ? "&nbsp;<a href=\"" . $this->curlstr . "/index$forward" . ".html" . "\">" . $this->str_forward . "</a>" : "&nbsp;" . $this->str_forward;
            }
        }
        return $navi_string;
    }

    function navigation($separator = " | ", $css_current = "", $back_forward = false, $rewrite_url = false) {
        //var_dump($rewrite_url);
        $max_links = $this->num_links;
        $curr_pages = $this->set_page();
        $all_pages = $this->get_num_pages() - 1;
        $var = $this->get_var;
        $navi_string = "";
        $PHP_SELF = $_SERVER['PHP_SELF'];
        if($rewrite_url == true){
            $fileNameArr = explode('?',$_SERVER['REQUEST_URI']);
            $PHP_SELF = $fileNameArr[0];
        }
        //var_dump($PHP_SELF);
        if (!$back_forward) {
            $max_links = ($max_links < 2) ? 2 : $max_links;
        }
        if ($curr_pages <= $all_pages && $curr_pages >= 0) {
            if ($curr_pages > ceil($max_links / 2)) {
                $start = ($curr_pages - ceil($max_links / 2) > 0) ? $curr_pages - ceil($max_links / 2) : 1;
                $end = $curr_pages + ceil($max_links / 2);
                if ($end >= $all_pages) {
                    $end = $all_pages + 1;
                    $start = ($all_pages - ($max_links - 1) > 0) ? $all_pages - ($max_links - 1) : 1;
                }
            } else {
                $start = 0;
                $end = ($all_pages >= $max_links) ? $max_links : $all_pages + 1;
            }
            if ($all_pages >= 1) {
                $forward = $curr_pages + 1;
                $backward = $curr_pages - 1;
                $navi_string = "<li>" . (($curr_pages > 0) ? "<a href=\"" . $PHP_SELF . "?" . $var . "=" . $backward . ($rewrite_url === false ? $this->rebuild_qs($var) : '') . "\" class=\"btn btn-sm btn-default\">" . $this->str_backward . "</a>" : '<a class="btn btn-sm btn-default" href="javascript:{};">' . $this->str_backward . "</a>") . "</li>";
                if (!$back_forward) {
                    for ($a = $start + 1; $a <= $end; $a++) {
                        $theNext = $a - 1; // because a array start with 0
                        if ($theNext != $curr_pages) {
                            $navi_string .= "<li><a href=\"" . $PHP_SELF . "?" . $var . "=" . $theNext . ($rewrite_url === false ? $this->rebuild_qs($var) : '') . "\" class=\"btn btn-sm btn-default\">";
                            $navi_string .= $a . "</a></li>";
                            $navi_string .= ($theNext < ($end - 1)) ? $separator : "";
                        } else {
                            $navi_string .= "<li>" . (($css_current != "") ? "<a class=\"btn btn-sm btn-primary\" href=\"javascript:{};\">" . $a . "</a>" : $a) . "</li>";
                            $navi_string .= ($theNext < ($end - 1)) ? $separator : "";
                        }
                    }
                }
                $navi_string .= "<li>" . (($curr_pages < $all_pages) ? "<a href=\"" . $PHP_SELF . "?" . $var . "=" . $forward . ($rewrite_url === false ? $this->rebuild_qs($var) : '') . "\" class=\"btn btn-sm btn-default\">" . $this->str_forward . "</a>" : '<a class="btn btn-sm btn-default" href="javascript:{};">' . $this->str_forward . '</a>') . "</li>";
            }
        }
        return $navi_string;
    }

    // this info will tell the visitor which number of records are shown on the current page
    function page_info($to = "-") {
        $first_rec_no = ($this->set_page() * $this->rows_on_page) + 1;
        $last_rec_no = $first_rec_no + $this->rows_on_page - 1;
        $last_rec_no = ($last_rec_no > $this->get_total_rows()) ? $this->get_total_rows() : $last_rec_no;
        $to = trim($to);
        $info = $first_rec_no . " " . $to . " " . $last_rec_no . " out of " . $this->get_total_rows();
        return $info;
    }

    // simple method to show only the page back and forward link.
    function back_forward_link() {
        $simple_links = $this->navigation(" ", "", true);
        return $simple_links;
    }

}

?>