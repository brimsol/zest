<?php

/**
 * Admin_model Class 
 * @package Webpagetest
 * @subpackage admin
 * @category Controller
 * @author AMI 
 * */
class Schools_model extends MY_Model {

    public $_table = 'schools';
    public $primary_key = 'id';

    public function __construct() {
        $this->output->enable_profiler(TRUE);
        $this->_table_schools = 'schools';
        $this->_table_districts = 'districts';
        $this->_table_states = 'states';
    }

    function getAllSchools() {

        return $this->db
                ->join($this->_table_districts, $this->_table_districts.'.id ='.$this->_table_schools.'.district_id','left')
                ->join($this->_table_states, $this->_table_states.'.id ='.$this->_table_schools.'.state_id','left')
                ->where('deleted','0')
                ->get($this->_table_schools)
                ->result();
    }


}

/* End of file admin_model.php */ 