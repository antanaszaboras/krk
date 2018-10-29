<?php 
 
class Login_model extends CI_Model {
 
	public function __construct(){
            parent::__construct();
            $this->load->database();
	}
	public function know_details($user, $pass)
	{

		$this->db->select('u.id,u.username,u.password,u.name, u.surname, u.email, u.role_id, u.state');
		$this->db->from('user as u');
		$this->db->where('u.username',$user);
		$this->db->where('u.password',$pass);
		$this->db->where('u.is_deleted',0);
                $this->db->where('u.state',1);
		$this ->db-> limit(1);
		$query = $this->db->get();
	 
		if($query -> num_rows() == 1) { 
			 return $query->result();
			}
		else {
			 return false;
			}
	}
}