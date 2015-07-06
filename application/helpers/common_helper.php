<?php

/**
 * Check is logged in
 */
if (!function_exists('logged_in')) {

    function logged_in() {
        $CI = & get_instance();

        return (bool) $CI->session->userdata('user_id');
    }

}

/**
 * Check is admin
 */

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
 * @param string $timestamp
 * @param string $format
 * @return string
 */

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

/**
 * @param string $given_date
 * @param bool $srttotime
 * @return bool|string
 */
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

/**
 * @param string $given_date
 * @param bool $srttotime
 * @return bool|string
 */
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


