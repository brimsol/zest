<?php

/**
 * Admin_model Class 
 * @package Webpagetest
 * @subpackage admin
 * @category Controller
 * @author AMI 
 * */
class Auth_model extends CI_Model {

    public function __construct() {
        //$this->output->enable_profiler(TRUE);
        //$this->cat_id = $this->session->userdata('category_id');
        
    }

    public function verify_user($username, $password) {
        $q = $this->db->where('email_id', $username)->where('password', sha1($password))->where('deleted_status', 0)->limit(1)->get('users');
        
       // print_r($q);
        
        
        if ($q->num_rows() > 0) {
            // person has account with us
            return $q;
        }
        return false;
    }

    function change_password($id, $password) {

        $data = array('password' => sha1($password),);
        $this->db->update('users', $data);
        $this->db->where('user_id', $id);
        if ($this->db->affected_rows() == '1') {
            return TRUE;
        }

        return FALSE;
    }

    function get_count($type = "") {

        if ($type == "users") {

            $this->db->where('deleted_status', 1);
            $this->db->from('users');
            return $this->db->count_all_results();
        } elseif ($type == "admins") {

            $this->db->where('status', 1);
            $this->db->where('user_type', 1);
            $this->db->from('users');
            return $this->db->count_all_results();
        } elseif ($type == "members") {

            $this->db->where('status', 1);
            $this->db->where('user_type', 2);
            $this->db->from('users');
            return $this->db->count_all_results();
        } elseif ($type == "files") {
            $this->db->where('file_status', 0);
            $this->db->from('data_files_index');
            return $this->db->count_all_results();
        } else {

            return 0;
        }
    }

    function get_all($tbl) {

        $this->db->where('deleted_status', 1);
        return $this->db->get($tbl);
    }
    
    
    function GetAllWorkDate($mindate = '', $maxdate = '') {


        $this->db->select('*');
        $this->db->from('customer_works');
        $this->db->join('customers', 'customers.customer_id = customer_works.work_id');
        $this->db->where('customers.deleted', '0');
        $this->db->where('customer_works.deleted', '0');
        if ($mindate != '' && $maxdate != '') {
            $this->db->where("customer_works.work_starting_date BETWEEN '$mindate' AND '$maxdate'");
        }
        $this->db->order_by('customer_works.created_at', 'DESC');
        //print_r($mindate);
        return $this->db->get()->result();
    }

    /**
     * Update user login details with the given info
     *
     * @param int $idx Current user idx value
     * @param string $current_time Current time
     * @param string $ip_address User's current IP address
     */
    function update_login($idx, $current_time, $ip_address) {
        $query = $this->db->update('users', array(
            'last_loggedin' => $current_time,
            'last_loggedin_ip' => $ip_address
                ), "user_id = {$idx}");
    }

}

/* End of file admin_model.php */ 