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
}