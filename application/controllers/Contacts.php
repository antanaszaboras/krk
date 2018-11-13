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
        $data['action_buttons_top'] = 
                    '<div class="btn-group"><a href="/contacts/create" class="btn btn-secondary" role="button">'
                    . '<i class="fa fa-plus-circle"></i> ADD CONTACT</a></div>';
        $this->load->view('templates/header', $data);
        $this->load->view('contacts/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($contactId = NULL)
    {
        if($contactId != NULL){
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            $data['contacts_item'] = $this->contacts_model->get_contacts($contactId);
            $data['company'] = $this->contacts_model->get_companies();
                    
            $data['title'] = 'Contact: ' . $data['contacts_item']['name'] . ' ' . $data['contacts_item']['surname'];
            $this->load->view('templates/header', $data);
            $this->load->view('contacts/contact', $data);
            $this->load->view('templates/footer');
        }
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add new Contact';
        $data['company'] = $this->contacts_model->get_companies();
        
            $this->form_validation->set_rules('name', 'Contact name', 'required');
            $this->form_validation->set_rules('surname', 'Contact surname', 'required');
            $this->form_validation->set_rules('email', 'Email address', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('contacts/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $result = $this->contacts_model->set_contact();
            $this->create_response($result, 'Contact created.', 'Contact creation failed.');
            redirect('contacts/index');
        }   
    }
    
    public function update()
    {
            $this->load->helper('form');
            $this->load->library('form_validation');
        
            $this->form_validation->set_rules('name', 'Contact name', 'required');
            $this->form_validation->set_rules('surname', 'Contact surname', 'required');
            $this->form_validation->set_rules('email', 'Email address', 'required');
                    
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('clients/client', $data);
                $this->load->view('templates/footer');
            }
            else
            {
                $result = $this->contacts_model->update_contact();
                $this->create_response($result, 'Contact updated.', 'Contact update failed.');
                redirect('contacts/index');
            }   
    }
    
    public function delete()
    {
        $this->load->library('session');
        $result = $this->contacts_model->delete_contact($this->uri->segment(3));
        $this->create_response($result, 'Contact deleted.', 'Contact deletion failed.');
        redirect('contacts/index');   
    }
    
   private function create_response($result, $success_text, $error_text){
        if($result){
            $this->session->set_flashdata('message','<div class="alert alert-success"><strong>Success!</strong> ' . $success_text . '</div>');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger"><strong>Error!</strong> ' . $error_text . '</div>');
        }
   }
}