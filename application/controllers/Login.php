<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->library('session');
                $this->load->helper('url');
                
	}
	public function index()
	{
            
		$session_data = $this->session->userdata('logged_in');
		$data['state'] = $session_data['state'];
			
		if(!$this->input->post('login') == 'LOGIN')
			{
				if($session_data['state'] == '1')
				{
					redirect('');
				}
				else
				{
                                        $this->load->view('templates\\head');
					$this->load->view('login/index');
				}
			}
		if($this->input->post('login') == 'LOGIN')
			{
				$this->form_validation->set_rules('user', 'Username', 'trim|required');
                                //$this->form_validation->set_rules('pass', 'Password', 'trim|callback_check_details');
				$this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean|callback_check_details');
				if($this->form_validation->run() == FALSE)
				   {
					    $this->session->set_flashdata('message_required','Please fill-in required textbox.');
                                            redirect('login');
				   }
				else
				{
                                           redirect('');
				}
			}
	}
	public function check_details($pass)
	{
	   $user = $this->input->post('user');
	   $result = $this->login_model->know_details($user, $pass);
           $this->session->set_userdata('message_required', $user);
	   if($result)
	   {
		   foreach($result as $row)
		 {
			$sess_array = array('id' => $row->id,
                            'username'=>$row->username,
                            'name'=>$row->name,
                            'surname'=>$row->surname,
                            'email'=>$row->email,
                            'role_id'=>$row->role_id,
                            'state'=>$row->state);
			$this->session->set_userdata('logged_in', $sess_array);
					}
		 return true;
	   }
	   else
	   {
		$this->session->set_flashdata('message_failed', 'Invalid username or password');
		redirect('login');
		return false;
	   }
	}
}	