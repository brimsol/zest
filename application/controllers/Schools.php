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
        $this->load->model('schools_model');

    }

    public function index() {

        $data['schools'] = $this->schools_model->get_all();
        $data['menu_active'] = 'schools';
        //$data['links'] = $this->pagination->create_links();
        $data['title'] = "List of Schools";

        $data['main_content'] = $this->load->view('schools/list_view', $data, true);
        $this->load->view('templates/admin_template', $data);
    }

    /**
     * Create role
     */
    function create() {


        $this->data['title'] = "Create Project";

        $this->form_validation->set_rules('project_name', 'Project Name', "required|trim|xss_clean|max_length[100]");
        $this->form_validation->set_rules('project_type_id', 'Proejct Type', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('assigned_user_id[]', 'Assigned Users', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('client_id', 'Client Name', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('estimated_start_date', 'Estimated Start date', 'required|trim|xss_clean');
        //$this->form_validation->set_rules('duration', 'Duration', 'required|trim|xss_clean|max_length[100]|numeric');
        $this->form_validation->set_rules('estimated_end_date', 'Estimated end date', 'required|trim|xss_clean');
        $this->form_validation->set_rules('short_description', 'Short description', 'required|trim|xss_clean|max_length[300]');
        $this->form_validation->set_rules('description', 'Description', 'required|trim|xss_clean|max_length[500]');
        $this->form_validation->set_rules('project_progress', 'Project progress', 'required|trim|xss_clean|less_than_equal_to[100]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');



        if ($this->form_validation->run() == true) {

            /**
             * Create data to insert
             */
            $insert_data = array(
                'project_name' => $this->input->post('project_name'),
                'project_type_id' => $this->input->post('project_type_id'),
                'client_id' => $this->input->post('client_id'),
                'project_mode' => $this->input->post('project_mode'),
                'estimated_start_date' => add_date($this->input->post('estimated_start_date')),
                'duration' => $this->input->post('duration'),
                'estimated_end_date' => add_date($this->input->post('estimated_end_date')),
                'short_description' => $this->input->post('short_description'),
                'description' => $this->input->post('description'),
                'project_progress' => $this->input->post('project_progress'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $this->session->userdata('user_id')
            );

            $project_id = $this->projects_model->create($insert_data);
            if (!$project_id) {

                $this->ci_alerts->set('error', 'Sorry ! failed to save, please try again');
                redirect("manage_projects");
            } else {

                $assigned_users = $this->input->post('assigned_user_id');
                if (count($assigned_users) > 0) {

                    $as_user = array();

                    foreach ($assigned_users as $key => $value) {


                        $as_user[] = array('project_id' => $project_id, 'user_id' => $value);
                    }

                    $this->projects_model->add_assign_users($as_user);
                }

                $this->ci_alerts->set('success', 'Saved Successfully');
                redirect("manage_projects");
            }
        } else {
            //display the create user form
            //set the flash data error message if there is one
            $data['users'] = $this->users_model->get_all();
            $data['project_types'] = $this->projects_model->get_all_project_types();
            $data['clients'] = $this->projects_model->get_all_clients();

            $data['action_url'] = 'manage_projects/create';
            $data['menu'] = 'manage_projects';
            $data['main_content'] = $this->load->view('manage_projects/create_view', $data, true);
            $this->load->view('templates/admin_template', $data);
        }
    }

    /**
     * Update Users
     */
    function update($project_id) {
        $this->data['title'] = "Update Project";


        $this->form_validation->set_rules('project_name', 'Project Name', "required|trim|xss_clean|max_length[100]");
        $this->form_validation->set_rules('project_type_id', 'Proejct Type', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('assigned_user_id[]', 'Assigned Users', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('client_id', 'Client Name', 'required|trim|xss_clean|numeric');
        $this->form_validation->set_rules('estimated_start_date', 'Estimated Start date', 'required|trim|xss_clean');
        //$this->form_validation->set_rules('duration', 'Duration', 'required|trim|xss_clean|max_length[100]|numeric');
        $this->form_validation->set_rules('estimated_end_date', 'Estimated end date', 'required|trim|xss_clean');
        $this->form_validation->set_rules('short_description', 'Short description', 'required|trim|xss_clean|max_length[300]');
        $this->form_validation->set_rules('description', 'Description', 'required|trim|xss_clean|max_length[500]');
        $this->form_validation->set_rules('project_progress', 'Project progress', 'required|trim|xss_clean|less_than_equal_to[100]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');



        if ($this->form_validation->run() == true) {

            /**
             * Create data to insert
             */
            $insert_data = array(
                'project_name' => $this->input->post('project_name'),
                'project_type_id' => $this->input->post('project_type_id'),
                'client_id' => $this->input->post('client_id'),
                'project_mode' => $this->input->post('project_mode'),
                'estimated_start_date' => add_date($this->input->post('estimated_start_date')),
                'duration' => $this->input->post('duration'),
                'estimated_end_date' => add_date($this->input->post('estimated_end_date')),
                'short_description' => $this->input->post('short_description'),
                'description' => $this->input->post('description'),
                'project_progress' => $this->input->post('project_progress'),
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $this->session->userdata('user_id')
            );



            if ($this->projects_model->update($project_id, $insert_data)) {
                $assigned_users = $this->input->post('assigned_user_id');
                if (count($assigned_users) > 0) {

                    $as_user = array();

                    foreach ($assigned_users as $key => $value) {


                        $as_user[] = array('project_id' => $project_id, 'user_id' => $value);
                    }
                    $this->projects_model->del_assign_users($project_id);
                    $this->projects_model->add_assign_users($as_user);
                }
                $this->ci_alerts->set('success', 'Updated Successfully');
                redirect("manage_projects");
            } else {

                $this->ci_alerts->set('error', 'Sorry ! failed to save, please try again');
                redirect("manage_projects");
            }
        } else {
            //display the create user form
            //set the flash data error message if there is one
            $data['users'] = $this->users_model->get_all();
            $data['project_types'] = $this->projects_model->get_all_project_types();
            $data['clients'] = $this->projects_model->get_all_clients();

            $data['project'] = $this->projects_model->get_one($project_id);
            $asgd_users = $this->projects_model->get_assigned_users($project_id);
            $asu = array();
            if (count($asgd_users->result()) > 0) {

                foreach ($asgd_users->result() as $au) {

                    $asu[] = $au->user_id;
                }
            }
            $data['assigned_users'] = $asu;
            $data['action_url'] = 'manage_projects/create';
            $data['menu'] = 'manage_projects';
            $data['main_content'] = $this->load->view('manage_projects/update_view', $data, true);
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
            'deleted_status' => 1,
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by' => $this->session->userdata('user_id'));

        if ($this->users_model->update($user_id, $insert_data)) {

            $this->ci_alerts->set('success', 'Deleted Successfully');
            redirect("manage_users");
        } else {

            $this->ci_alerts->set('error', 'Sorry ! Deleted failed, please try again');
            redirect("manage_users");
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
