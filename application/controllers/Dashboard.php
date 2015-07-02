<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('auth_model');
        //$this->output->enable_profiler(TRUE);
    }

    public function index() {

       $this->load->view('templates/admin_template');

    }


}
