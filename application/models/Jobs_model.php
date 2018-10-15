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
            $query = "SELECT job.id as jobid, "
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
            $result = $this->db->query($query);
            $rawData = $result->result_array();
            return  $rawData;
        }
    }
}