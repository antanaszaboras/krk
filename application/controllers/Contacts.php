<?php

class Contacts extends MY_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('contacts_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
    {
        $data['contacts'] = $this->contacts_model->get_contacts();
        $data['title'] = 'Contact list';
        $data['action_buttons_top'] = '<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#newUserForm">'
                    . '<i class="fa fa-plus-circle"></i> ADD CONTACT</button>';
        $this->load->view('templates/header', $data);
        $this->load->view('contacts/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($contactId = NULL)
    {
        if($contactId != NULL){
            $data['contacts_item'] = $this->contacts_model->get_contacts($contactId);
            
            $data['title'] = 'Contact: ' . $data['contacts_item']['name'] . ' ' . $data['contacts_item']['surname'];
           // $data['action_buttons_top'] = '<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#newUserForm">'
           //             . '<i class="fa fa-plus-circle"></i> SAVE</button>';
            $this->load->view('templates/header', $data);
            $this->load->view('contacts/contact', $data);
            $this->load->view('templates/footer');
        }
    }
}