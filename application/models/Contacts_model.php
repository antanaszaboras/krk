<?php

class Contacts_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_contacts($contactId = FALSE){
        if($contactId === FALSE)
        {
            $this->db->select('contact.id, contact.name, contact.surname, contact.phone, contact.email, '
                    . 'client.company_name');
            $this->db->from('contact');
            $this->db->join('client', 'client.id = client_id');
            $this->db->where('contact.is_deleted !=', 1);
            $query = $this->db->get();
            
            return $query->result_array();
        }
        
        $query = $this->db->get_where('contact', array('id' => $contactId));
        
        return $query->row_array();
    }
    
    public function get_companies(){
        
        $this->db->select('id, company_name');
        $this->db->from('client');
        $this->db->where('is_deleted', '0');
        $this->db->where('state', '1');
        $this->db->order_by('company_name', 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $rawData = $query->result_array();
            return $rawData;
        }
        return false;
    }
    
    public function set_contact()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $data = array(
          'state' => $this->input->post('state'),
          'name' => $this->input->post('name'),
          'surname' => $this->input->post('surname'),
          'phone' => $this->input->post('phone'),
          'email' => $this->input->post('email'),
          'updated_by_user' => $this->session->userdata['logged_in']['id'],
          'client_id' => $this->input->post('company'),
          'date_created' => date('Y-m-d H:i:s'),
          'is_default' => 0,
          'is_deleted' => 0
        );
        
        return $this->db->insert('contact', $data);
    }
    
    public function update_contact()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $data = array(
          'state' => $this->input->post('state'),
          'name' => $this->input->post('name'),
          'surname' => $this->input->post('surname'),
          'phone' => $this->input->post('phone'),
          'email' => $this->input->post('email'),
          'updated_by_user' => $this->session->userdata['logged_in']['id'],
          'client_id' => $this->input->post('company'),
          'date_updated' => date('Y-m-d H:i:s')
        );
        $this->db->where('id', $this->input->post('contact_id'));
        return $this->db->update('contact', $data);
    }
    
    public function delete_contact($id)
    {
        //check if has rights
        //  <...>
        $data = array(
            'is_deleted' => 1,
            'date_updated' => date('Y-m-d H:i:s')
        );
        $this->db->where('id', $id);
        return $this->db->update('contact', $data);
    }
}