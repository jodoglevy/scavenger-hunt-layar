<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * This is the controller for all of the functionality the admin has
 */
class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * Controller for the main admin page where he/she can choose what to administrate
	 */
	function index()
	{
		$str = $_SERVER["REQUEST_URI"];	
		if($str[strlen($str)-1] != '/')
		{
			header('Location: ' . $str . '/');
		}
		
		$this->load->model('passwords'); 
		if($this->passwords->checkLogin($this,'Admin'))
		{			
			$this->load->view('admin');
		}
	}

    function createUrl() {
        $this->load->model('passwords'); 
		if($this->passwords->checkLogin($this,'Admin'))
		{			
			$this->load->view('createUrl');
		}
    }

    function createVisionUrl() {
        $this->load->model('passwords'); 
		if($this->passwords->checkLogin($this,'Admin'))
		{			
			$this->load->view('createVisionUrl');
		}
    }
	
	/*
	 * Controller for the pages where the admin can change the password
	 */
	function passwords($user_type)
	{
		$user_type = ucwords($user_type);
		$data = array("user_type" => $user_type, "message" => "");

		$this->load->model('passwords'); 
		if($this->passwords->checkLogin($this,'Admin'))
		{
			if($this->input->post('changepword') != NULL)
			{
				$msg = $this->passwords->changePassword($this->input->post('old_password'),$this->input->post('new_password'),$this->input->post('new_password2'),$user_type);
				$data["message"] = $msg;
			}	
			$this->load->view('admin_passwords',$data);
		}
	}	
}
