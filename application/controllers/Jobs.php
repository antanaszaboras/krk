<?php

class Jobs extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('jobs_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
    {
        $data['jobs'] = $this->jobs_model->get_full_job_list();
        $data['title'] = 'Job list';
        $data['action_buttons_top'] = '<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#newUserForm">'
                    . '<i class="fa fa-plus-circle"></i> NEW JOB</button>';
        $this->load->view('templates/header', $data);
        $this->load->view('jobs/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($jobId = NULL)
    {
        $data['jobs_item'] = $this->jobs_model->get_jobs($jobId);
    }
}