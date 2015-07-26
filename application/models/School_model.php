<?php

/**
 * Admin_model Class 
 * @package Webpagetest
 * @subpackage admin
 * @category Controller
 * @author AMI 
 * */
class School_model extends MY_Model {


    public function __construct() {

        parent::__construct();


        $this->_table_schools = 'schools';
        $this->_table_districts = 'districts';
        $this->_table_states = 'states';

        $this->_table = 'schools';
        $this->primary_key = 'id';
    }

    function getAllSchools() {

        return $this->db
            ->select($this->_table_schools.".*")
                ->join($this->_table_districts, $this->_table_districts.'.id ='.$this->_table_schools.'.district_id','left')
                ->join($this->_table_states, $this->_table_states.'.id ='.$this->_table_schools.'.state_id','left')
                ->where('deleted','0')
                ->get($this->_table_schools)
                ->result();
    }


}

/* End of file admin_model.php */ 