<?php

/**
 * Admin_model Class 
 * @package Webpagetest
 * @subpackage admin
 * @category Controller
 * @author AMI 
 * */
class District_model extends MY_Model {


    public function __construct() {

        parent::__construct();

        $this->_table_schools = 'schools';
        $this->_table_districts = 'districts';
        $this->_table_states = 'states';

        $this->_table = 'districts';
        $this->primary_key = 'id';

    }


}

/* End of file admin_model.php */ 