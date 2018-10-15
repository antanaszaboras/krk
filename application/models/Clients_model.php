<?php

class Clients_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function get_clients($clientId = FALSE){
        if($clientId === FALSE)
        {
            $query = $this->db->get_where('client', array('is_deleted =' => '0'));
            return $query->result_array();
        }
        
        $query = $this->db->get_where('client', array('id' => $clientId));
        return $query->row_array();
    }
    
    public function get_client_contact_sum($clientId = FALSE){
        if($clientId === FALSE)
        {
            $query = "SELECT client.id, COUNT(contact.id) as ct_sum FROM client LEFT JOIN contact ON client.id=contact.client_id GROUP BY client.id";
            $result = $this->db->query($query);
            $rawData = $result->result_array();
            $resultArray = array();
            foreach ($rawData as $item){
                $resultArray[$item['id']] = $item['ct_sum'];
            }
            return  $resultArray;
        }
    }
}