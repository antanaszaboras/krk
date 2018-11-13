<?php

class Jobs_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    
    public function get_jobs($jobId = FALSE){
        if($jobId === FALSE)
        {
            $query = $this->db->get('job');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('job', array('id' => $jobId));
        return $query->row_array();
    }
    
    public function get_full_job_list($jobId = FALSE){
        if($jobId === FALSE)
        {
            $result = $this->db->query($this->set_job_list_query());
            $rawData = $result->result_array();
            return  $rawData;
        }
    }
    
     public function record_count() {
        $query = $this->db->get($this->set_job_list_query());
        return $query->num_rows();
    }
 
 
 
    public function fetch_jobs($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->set_job_list_query());
        //$this->output->enable_profiler(TRUE);
        if ($query->num_rows() > 0) {
            $rawData = $query->result_array();
            return $rawData;
        }
        return false;
    }
    
    private function get_job_list_query(){
        
        return "SELECT job.id as jobid, "
                    . " job.title,"
                    . " job.description,"
                    . " job.date_created,"
                    . " job.date_updated,"
                    . " user.name,"
                    . " user.surname,"
                    //. " asgn.name AS asigned_name,"
                    //. " asgn,surname AS asigned_surname,"
                    . " job_group.title AS group_title "
                    . ""
                    . " "
                    . " FROM job "
                    . " LEFT JOIN user ON job.created_user_id=user.id "
                    . " LEFT JOIN user asgn ON job.asigned_user_id=asgn.id "
                    . " LEFT JOIN job_group ON job.task_group_id=job_group.id "
                    . "";
    }
    
    private function set_job_list_query(){
        $this->db->select('job.id jobid, '
                . ' job.title,'
                . ' job.description, '
                . ' job.date_created, '
                . ' job.date_updated, '
                . ' user.name,'
                . ' user.surname, '
                . ' job_group.title AS group_title,'
                . ' asgn.name AS asigned_name,'
                . ' asgn.surname AS asigned_surname'
                . '');
        $this->db->from('job');
        $this->db->join('user','job.created_user_id = user.id','left');
        $this->db->join('user asgn','job.asigned_user_id=asgn.id ','left');
        $this->db->join('job_group','job.task_group_id=job_group.id','left');
        $this->db->where('job.is_deleted', 0);
        $this->db->where('job.state', 1);
        $this->db->order_by('job.id', 'DESC');
    }
    
    public function create_job(){
        $this->load->helper('url');
        $this->load->library('session');
        $ids = explode("-", $this->input->post('contact'));
        $data = array(
          'state' => 1,
          'client_id' => $ids[0],
          'contact_id' => $ids[1],
          'title' => $this->input->post('title'),
          'description' => $this->input->post('description'),
          'task_group_id' => $this->input->post('group'),
          'created_user_id' => $this->session->userdata['logged_in']['id'],
          'asigned_user_id' => $this->input->post('assigned_to'),
          'date_created' => date('Y-m-d H:i:s'),
          'is_deleted' => 0
        );   
        return $this->db->insert('job', $data);
    }
    
    public function get_users(){
        $this->db->select("id, CONCAT_WS(' ', name, surname) AS name");
        $this->db->from('user');
        $this->db->where('is_deleted', 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $rawData = $query->result_array();
            return $rawData;
        }
        return false;        
    }
    
    public function get_groups(){
        $this->db->select('id, title');
        $this->db->from('job_group'); 
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $rawData = $query->result_array();
            return $rawData;
        }
        return false;      
    }
    
    public function get_contacts(){
        $this->db->select("CONCAT_WS('-', client.id, contact.id) AS id,"
                . ' client.company_name AS company_name,'
                . " CONCAT_WS(' ', contact.name, contact.surname) AS name");
        $this->db->from('contact');
        $this->db->join('client','contact.client_id = client.id','left');
        $this->db->where('contact.is_deleted', 0);
        $this->db->where('client.is_deleted', 0);
        $this->db->order_by("company_name", "asc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $rawData = $query->result_array();
            return $rawData;
        }
        return false;  
        
    }
}