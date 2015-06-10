<?php

if (!function_exists('logged_in')) {

    function logged_in() {
        $CI = & get_instance();

        return (bool) $CI->session->userdata('user_id');
    }

}

if (!function_exists('is_cat')) {

    function is_cat() {
        $CI = & get_instance();

        return (bool) $CI->session->userdata('category_id');
    }

}

if (!function_exists('is_admin')) {

    function is_admin() {
        $CI = & get_instance();

        if ($CI->session->userdata('user_type') == '1' || $CI->session->userdata('user_type') == '3') {

            return true;
        } else {

            return false;
        }
    }

}


/**
 * 
 * @param type $timestamp
 * @param type $format
 * @return string
 */
if (!function_exists('check_permission')) {

    function check_permission($permission_name) {
        $CI = & get_instance();

        $role_id = $CI->session->userdata('role_id');
        $sql = "SELECT role_id FROM " . $CI->config->item('TBL_PERMISSIONS', 'DB_TABLES') . " p ," . $CI->config->item('TBL_PERM_TO_ROLES', 'DB_TABLES')
                . " pr WHERE pr.perm_id = p.permission_id 
                    AND pr.role_id = '$role_id' 
                    AND p.action = '$permission_name'";
        $result = $CI->db->query($sql)->result_array();
        return (!empty($result)) ? true : false;
    }

}

function show_date($timestamp = '', $format = 'd-m-Y H:i') {
    if ($timestamp == '' || $timestamp == '0000-00-00 00:00:00' || $timestamp == '0000-00-00') {
        return '';
    }
    try {
        //$mysql_date = strtotime($timestamp);
        $date = new DateTime($timestamp);
        return $date->format($format);
    } catch (Exception $baddob) {
        return '';
    }
}

function add_date($given_date = '', $srttotime = false) {

    if ($given_date == '') {
        return '0000-00-00 00:00:00';
    }
    try {
        if ($srttotime) {

            $date = date('Y-m-d H:i:s', $given_date);
        } else {

            $date = date('Y-m-d H:i:s', strtotime($given_date));
        }

        //return strtotime($given_date);

        return $date;
    } catch (Exception $baddob) {

        return '0000-00-00 00:00:00';
    }
}

function add_date_only($given_date = '', $srttotime = false) {

    if ($given_date == '') {
        return '0000-00-00';
    }
    try {
        if ($srttotime) {

            $date = date('Y-m-d', $given_date);
        } else {

            $date = date('Y-m-d', strtotime($given_date));
        }

        //return strtotime($given_date);

        return $date;
    } catch (Exception $baddob) {

        return '0000-00-00';
    }
}

/**
 * array_search multidimensional
 * @return type
 */
function mult_array_search($serch_val, $source_array, $field_name) {
    $key1 = array();
    if (!empty($source_array)) {
        foreach ($source_array as $key => $val) {
            if ($val[$field_name] == $serch_val) {
                $key1['id'] = $key;
                $key1['status'] = true;
                return $key1;
            }
        }
        $key1['status'] = false;

        return $key1;
    } else {
        $key1['status'] = false;

        return $key1;
    }
}

/**
 * 
 * @return type
 * COmpare date
 */
function date_compare($a, $b) {

    $t1 = strtotime($a);
    $t2 = strtotime($b);
    return $t2 - $t1;
}

