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
    }
}