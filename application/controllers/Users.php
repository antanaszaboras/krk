<?php

class Users extends MY_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
    {
        $data['users'] = $this->users_model->get_users();
        $data['title'] = 'User list';
        $data['action_buttons_top'] = '<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#newUserForm">'
                    . '<i class="fa fa-plus-circle"></i> ADD USER</button>';
        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($userId = NULL)
    {
        if($userId != NULL){
            $data['users_item'] = $this->users_model->get_users($userId);
            
            $data['title'] = 'User: ' . $data['users_item']['name'] . ' ' . $data['users_item']['surname'];
           // $data['action_buttons_top'] = '<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#newUserForm">'
           //             . '<i class="fa fa-plus-circle"></i> SAVE</button>';
            $this->load->view('templates/header', $data);
            $this->load->view('users/user', $data);
            $this->load->view('templates/footer');
        }
    }
}