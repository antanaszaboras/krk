<?php
class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $CI = & get_instance();
        $CI->load->library('session');
        $CI->load->helper('url');
        
        if ( !$this->session->userdata('logged_in'))
        { 
            redirect('login');
        }
    }
}