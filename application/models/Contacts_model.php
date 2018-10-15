<?php

class Contacts_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function get_contacts($contactId = FALSE){
        if($contactId === FALSE)
        {
            $query = $this->db->get('contact');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('contact', array('id' => $contactId));
        return $query->row_array();
    }
}