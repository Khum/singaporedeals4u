<?php
function GenerateDDL($name, $attributes, $selectedValue, $valueColum, $displayTextColumn, $query, $extraOption = NULL, $extraOption2 = NULL) {
    $r = Query($query);

    $result = "<select name='$name' id='$name' $attributes>";

    if ($extraOption !== NULL) {
        $selected = ( $selectedValue == 0 ) ? 'selected=selected ' : '';
        $result .= "<option value='0' $selected >$extraOption</option>";
    }

    if ($extraOption2 !== NULL) {
        $selected = ( $selectedValue == -1 ) ? 'selected=selected ' : '';
        $result .= "<option value='-1' $selected >$extraOption2</option>";
    }

    if (Num($r) != 0) {
        while ($row = mysql_fetch_array($r)) {
            if ((is_array($selectedValue) && in_array($row[$valueColum], $selectedValue) ) || ( $row[$valueColum] == $selectedValue ))
                $result .= "<option selected value='" . $row[$valueColum] . "'>" . Decode($row[$displayTextColumn]) . "</option>";
            else
                $result .= "<option value='" . $row[$valueColum] . "'>" . Decode($row[$displayTextColumn]) . "</option>";
        }
    }
    $result .= "</select>";

    return $result;
}

function show_dropdown($table_name, $s_name, $o_name, $o_id, $selected = 0, $default_select = "", $attr = "", $where = "", $sort_order = "sort_order", $s_id = "") {
    $output = "";
    $s_id = ($s_id == "") ? $s_name : $s_id;
    $where = ($where != "") ? " WHERE $where" : "";
    $sort_order = ($sort_order != "") ? " ORDER BY $sort_order" : "";

    $sql = "select * from $table_name $where $sort_order";
    $r = Query($sql);

    $output .= "<select id=\"$s_id\" name=\"$s_name\" $attr >";

    if ($default_select != "")
        $output .= "<option value=\"0\">$default_select</option>";
    if (is_array($selected) && count($selected) > 0) {
        while ($o = GetObj($r)) {
            if (in_array($o->$o_id,$selected))
                $output .= '<option selected="selected" value="' . $o->$o_id . '">' . $o->$o_name . '</option>';
            else
                $output .= '<option value="' . $o->$o_id . '">' . $o->$o_name . '</option>';
        }
        $output .= '</select>';
    }else {
        while ($o = GetObj($r)) {
            if ($o->$o_id == $selected)
                $output .= '<option selected="selected" value="' . $o->$o_id . '">' . $o->$o_name . '</option>';
            else
                $output .= '<option value="' . $o->$o_id . '">' . $o->$o_name . '</option>';
        }
        $output .= '</select>';
    }
    return $output;
}

function show_dropdown2($sql, $s_name, $table_field_name, $match_selected = "", $default_select = "", $attr = "", $table_field_id = 'id', $default_select_value = "0", $s_id = "") {
    $output = "";
    $r = Query($sql);
    $s_id = ($s_id == "") ? $s_name : $s_id;

    $output .= "<select id=\"$s_id\" name=\"$s_name\" $attr >";

    if ($default_select != "")
        $output .= "<option value=\"$default_select_value\" >$default_select</option>";

    while ($o = GetObj($r)) {
        if ($o->$table_field_id == $match_selected && $match_selected != "")
            $output .= "<option value=\"" . $o->$table_field_id . "\" selected=\"selected\"  >" . $o->$table_field_name . "</option>";
        else
            $output .= "<option value=\"" . $o->$table_field_id . "\" >" . $o->$table_field_name . "</option>";
    }
    $output .= "</select>";

    return $output;
}

function show_array_dropdown($s_name, $value_array, $selected = "", $default_select = "", $attr = "", $default_select_value = "0", $s_id="") {
    $output = "";
    $select_str = "";
    $s_id = ($s_id == "") ? $s_name : $s_id;
    $output .= "<select id=\"$s_id\" name=\"$s_name\" $attr >";
    if ($default_select != "")
        $output .= "<option value=\"$default_select_value\">$default_select</option>";

    if (is_array($value_array)) {
        foreach ($value_array as $key => $value) {
            $select_str = "";
            if ($key == $selected && $selected != "") {
                $select_str = 'selected="selected"';
            }
            $output .= "<option $select_str value=\"$key\" >$value</option>";
        }
    }

    $output .= '</select>';

    return $output;
}

//-------
// this function use "_tree_dropdown" function
// "no_include" is the id of a specific record which should not display in the true
function show_tree_dropdown($table_name, $s_name, $o_name, $selected = 0, $default_select = "", $attr = "", $where = "active='Y'", $sort_order = "sort_order", $no_include = 0, $parent_id = 0) {
    $output = "";

    $output .= "<select id=\"$s_name\" name=\"$s_name\" $attr >";

    if ($default_select != "")
        $output .= "<option value=\"0\">$default_select</option>";

    $output .= _tree_dropdown($table_name, $o_name, $selected, $where, $sort_order, $no_include, $parent_id, 0);

    $output .= '</select>';

    return $output;
}

function _tree_dropdown($table_name, $o_name, $selected, $where, $sort_order, $no_include, $parent_id, $level = 0) {
    $output = "";
    $where2 = " WHERE parent_id = '$parent_id'";
    $where2 .= ($where != "") ? " AND $where" : "";
    $sort_order2 = ($sort_order != "") ? " ORDER BY $sort_order" : "";

    $sql = "select * from $table_name $where2 $sort_order2";
    $r = Query($sql);

    while ($o = GetObj($r)) {
        $select_str = "";
        $indent = str_repeat('-', $level * 3);

        if ($o->id == $selected) {
            $select_str = 'selected="selected"';
        }

        if ($o->id != $no_include) {
            $output .= "<option $select_str value=\"$o->id\" >" . $indent . $o->$o_name . "</option>";
            $output .= _tree_dropdown($table_name, $o_name, $selected, $where, $sort_order, $no_include, $o->id, $level + 1);
        }
    }
    return $output;
}
//-------
?>