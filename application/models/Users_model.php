<?php

class Users_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function get_users($userId = FALSE){
        if($userId === FALSE)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('user', array('id' => $userId));
        return $query->row_array();
    }
}