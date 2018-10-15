<?php

class Clients extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('clients_model');
        $this->load->model('contacts_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
    {
        $data['clients'] = $this->clients_model->get_clients();
        $data['contacts'] = $this->contacts_model->get_contacts();
        $data['badges'] = $this->clients_model->get_client_contact_sum();
        $data['title'] = 'Client list';
        $data['action_buttons_top'] = 
                    '<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#newClientForm">'
                    . '<i class="fa fa-plus-circle"></i> ADD CLIENT</button>';
        $data['action_buttons_top'] .= 
                    '<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="modal" data-target="#newContactForm">'
                    . '<i class="fa fa-plus-circle"></i> ADD CONTACT</button>';
        $this->load->view('templates/header', $data);
        $this->load->view('clients/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($clientId = NULL)
    {
        if($clientId != NULL){
            
            $data['clients_item'] = $this->clients_model->get_clients($clientId);
            $data['title'] = 'Client: ' . $data['clients_item']['company_name'];
            $this->load->view('templates/header', $data);
            $this->load->view('clients/client', $data);
            $this->load->view('templates/footer');
        }

    }
}