<?php

class Jobs extends MY_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('jobs_model');
        $this->load->helper('url_helper');
        $this->load->library('pagination');
    }
    
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['job_groups'] = $this->jobs_model->get_groups();
        $data['users'] = $this->jobs_model->get_users();
        $data['contacts'] = $this->jobs_model->get_contacts();
        
        //Pagination init
        $config = array();
        $config['base_url'] = base_url() .'jobs';
        $config['total_rows'] = $this->jobs_model->record_count();
        $config['per_page'] = 25;
        $config["uri_segment"] = 2;
        $config['num_links'] = 5;
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;
        $config['attributes'] = array('class' => 'page-link');
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href=# class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["jobs"] = $this->jobs_model->fetch_jobs( $config['per_page'], $page);
        $data["pagination"] = $this->pagination->create_links();
        
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
    
    public function create()
    {
        $this->load->library('session');
        $result = $this->jobs_model->create_job();
        $this->create_response($result, 'Job Created.', 'Job creation failed.');
        redirect('jobs/index');   
    }
    
    
    
    private function create_response($result, $success_text, $error_text){
        if($result){
            $this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success!</strong> ' . $success_text . '</div>');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error!</strong> ' . $error_text . '</div>');
        }
   }
    
}