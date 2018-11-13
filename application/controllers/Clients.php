<?php

class Clients extends MY_Controller {
    
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
                    '<div class="btn-group"><a href="/clients/create" class="btn btn-secondary" role="button">'
                    . '<i class="fa fa-plus-circle"></i> ADD CLIENT</a></div>';
        $this->load->view('templates/header', $data);
        $this->load->view('clients/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($clientId = NULL)
    {
        if($clientId != NULL){
            $this->load->helper('form');
            $this->load->library('form_validation');
        
            //$this->form_validation->set_rules('companyname', 'Company Name', 'required');
            //$this->form_validation->set_rules('shortname', 'Company short name', 'required');
            
            $data['clients_item'] = $this->clients_model->get_clients($clientId);
            $data['title'] = 'Client: ' . $data['clients_item']['company_name'];

                $this->load->view('templates/header', $data);
                $this->load->view('clients/client', $data);
                $this->load->view('templates/footer');
        }
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add new Client';

        $this->form_validation->set_rules('companyname', 'Company Name', 'required');
        $this->form_validation->set_rules('shortname', 'Company short name', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('clients/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $result = $this->clients_model->set_client();
            $this->create_response($result, 'Client created.', 'Client creation failed.');
            redirect('clients/index');
        }   
    }
    
    public function update()
    {
            $this->load->helper('form');
            $this->load->library('form_validation');
        
            $this->form_validation->set_rules('companyname', 'Company Name', 'required');
            $this->form_validation->set_rules('shortname', 'Company short name', 'required');
            
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('clients/client', $data);
                $this->load->view('templates/footer');
            }
            else
            {
                $result = $this->clients_model->update_client();
                $this->create_response($result, 'Client updated.', 'Client update failed.');
                redirect('clients/index');
            }   
    }
    
    public function delete()
    {
        $this->load->library('session');
        $result = $this->clients_model->delete_client($this->uri->segment(3));
        $this->create_response($result, 'Client deleted.', 'Client deletion failed.');
        redirect('clients/index');   
    }
    
   private function create_response($result, $success_text, $error_text){
        if($result){
            $this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success!</strong> ' . $success_text . '</div>');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error!</strong> ' . $error_text . '</div>');
        }
   }
}