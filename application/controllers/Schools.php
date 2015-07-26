<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Schools extends CI_Controller {

    public $data;

    public function __construct() {

        parent::__construct();

        if (!logged_in()) {
            redirect(site_url('auth/login'));
        }
        $this->load->model('school_model');
        $this->load->model('district_model');
        $this->load->model('state_model');

        $this->_created_at = date("Y-m-d H:i:s");
        $this->_created_by = $this->session->userdata('user_id');
        $this->_updated_at = date("Y-m-d H:i:s");
        $this->_updated_by = $this->session->userdata('user_id');

    }

    public function index() {

        $data['schools'] = $this->school_model->getAllSchools();
        $data['menu'] = 'schools';
        //$data['links'] = $this->pagination->create_links();
        $data['title'] = "List of Schools";

        $data['page'] = 'schools/list_view';
        $this->load->view('templates/admin_template', $data);
    }

    /**
     * Create role
     */
    function create() {


        $this->form_validation->set_rules('school_name', 'School Name', "required|trim|max_length[150]");
        $this->form_validation->set_rules('principal_name', 'Pricipal Name', 'required|trim|max_length[150]');
        $this->form_validation->set_rules('place', 'Place', 'required|trim|max_length[150]');
        $this->form_validation->set_rules('state_id', 'State', 'required');
        $this->form_validation->set_rules('district_id', 'Disctrict', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('address', 'Address', 'max_length[250]');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'max_length[150]');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'required|max_length[12]');
        $this->form_validation->set_rules('details', 'Details', 'trim|max_length[250]');
        $this->form_validation->set_error_delimiters('<span class="help-block has-error">', '</span>');



        if ($this->form_validation->run() == true) {

            /**
             * Create data to insert
             */
            $insert_data = array(
                'school_name' => $this->input->post('school_name'),
                'principal_name' => $this->input->post('principal_name'),
                'place' => $this->input->post('place'),
                'state_id' => $this->input->post('state_id'),
                'district_id' => add_date($this->input->post('district_id')),
                'email' => $this->input->post('email'),
                'address' => add_date($this->input->post('address')),
                'contact_person' => $this->input->post('contact_person'),
                'contact_number' => $this->input->post('contact_number'),
                'details' => $this->input->post('details'),
                'created_at' => $this->_created_at,
                'created_by' => $this->_created_by
            );

            $project_id = $this->school_model->insert($insert_data);
            if (!$project_id) {

                $this->ci_alerts->set('error', 'Sorry ! failed to save, please try again');
                redirect("schools");
            } else {


                $this->ci_alerts->set('success', 'Saved Successfully');
                redirect("schools");
            }
        } else {

            $data['menu'] = 'schools';

            $data['states'] = $this->state_model->get_all();
            $data['districts'] = $this->district_model->get_all();

            $data['page'] = 'schools/create_view';
            $this->load->view('templates/admin_template', $data);

        }
    }

    /**
     * Update Users
     */
    function update($school_id) {

        $this->form_validation->set_rules('school_name', 'School Name', "required|trim|max_length[150]");
        $this->form_validation->set_rules('principal_name', 'Pricipal Name', 'required|trim|max_length[150]');
        $this->form_validation->set_rules('place', 'Place', 'required|trim|max_length[150]');
        $this->form_validation->set_rules('state_id', 'State', 'required');
        $this->form_validation->set_rules('district_id', 'Disctrict', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('address', 'Address', 'max_length[250]');
        $this->form_validation->set_rules('contact_person', 'Contact Person', 'max_length[150]');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'required|max_length[12]');
        $this->form_validation->set_rules('details', 'Details', 'trim|max_length[250]');
        $this->form_validation->set_error_delimiters('<span class="help-block has-error">', '</span>');




        if ($this->form_validation->run() == true) {

            /**
             * Create data to insert
             */
            $insert_data = array(
                'school_name' => $this->input->post('school_name'),
                'principal_name' => $this->input->post('principal_name'),
                'place' => $this->input->post('place'),
                'state_id' => $this->input->post('state_id'),
                'district_id' => add_date($this->input->post('district_id')),
                'email' => $this->input->post('email'),
                'address' => add_date($this->input->post('address')),
                'contact_person' => $this->input->post('contact_person'),
                'contact_number' => $this->input->post('contact_number'),
                'details' => $this->input->post('details'),
                'updated_at' => $this->_created_at,
                'updated_by' => $this->_created_by
            );



            if ($this->school_model->update($school_id, $insert_data)) {

                $this->ci_alerts->set('success', 'Updated Successfully');
                redirect("schools");
            } else {

                $this->ci_alerts->set('error', 'Sorry ! failed to save, please try again');
                redirect("schools");
            }
        } else {

            $data['menu'] = 'schools';

            $data['states'] = $this->state_model->get_all();
            $data['districts'] = $this->district_model->get_all();

            $data['school_data'] = $this->school_model->get($school_id);

            $data['page'] = 'schools/update_view';
            $this->load->view('templates/admin_template', $data);
        }
    }

    /**
     * Project view
     */
    function view($project_id) {

        $data['project'] = $this->projects_model->get_one($project_id);
        $data['assigned_users'] = $this->projects_model->get_assigned_users($project_id);
        $data['project_deatils'] = $this->projects_overview_model->get_project_deatils($project_id);
        $data['project_milestone_deatils'] = $this->projects_overview_model->get_milestone_details($project_id);
        $data['project_resources_deatils'] = $this->projects_overview_model->get_project_resources($project_id);
        $data['project_task_history'] = $this->projects_overview_model->get_task_history($project_id);
        $data['project_task_log'] = $this->projects_overview_model->get_task_log($project_id);
        $data['priority'] = $this->projects_overview_model->get_priority();
        $data['task_count_new'] = $this->projects_overview_model->get_task_count($project_id);
        //print_r($data);

        $data['project_id'] = $project_id;
        $data['menu'] = 'manage_projects';
        $data['main_content'] = $this->load->view('manage_projects/project_view', $data, true);
        $this->load->view('templates/admin_template', $data);
    }

    /**
     * Delete
     */
    public function delete($user_id) {

        $insert_data = array(
            'deleted' => 1,
            'updated_at' => $this->_created_at,
            'updated_by' => $this->_created_by

        );

        if ($this->school_model->update($user_id, $insert_data)) {

            $this->ci_alerts->set('success', 'Deleted Successfully');
            redirect("schools");

        } else {

            $this->ci_alerts->set('error', 'Sorry ! Deleted failed, please try again');
            redirect("schools");
        }
    }

    /**
     * get filter by priority
     */
    public function filter_by_priority($project_id, $priority) {

        $data['project_milestone_deatils'] = $this->projects_overview_model->get_milestone_details($project_id, $priority);
        //$data['priority'] = $this->projects_overview_model->get_priority();
        //print_r($data);
        $data['menu'] = 'manage_projects';
        $data['main_content'] = $this->load->view('manage_projects/filter_by_priority_view', $data, true);
        echo $data['main_content'];

    }
}
