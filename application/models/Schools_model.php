<?php

/**
 * Admin_model Class 
 * @package Webpagetest
 * @subpackage admin
 * @category Controller
 * @author AMI 
 * */
class Schools_model extends CI_Model {



    public function __construct() {
        $this->output->enable_profiler(TRUE);
        $this->_table_schools = 'schools';
        $this->_table_districts = 'districts';
        $this->_table_states = 'states';
    }

    function get_all() {

        return $this->db->join($this->_table_districts, $this->_table_districts.'.id ='.$this->_table_schools.'.district_id')
                ->join($this->_table_states, $this->_table_states.'.id ='.$this->_table_schools.'.state_id')->get($this->_table_schools)
                ->result();
    }


}

/* End of file admin_model.php */ 