<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * This is the controller for all of the functionality the admin has
 */
class Hunt extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * Controller for the page that shows and allows you to answer questions
	 */
	function index()
	{
		$data = array(
            "question" => $this->input->get('q'),
            "checksum" => $this->input->get('checksum'),
            "points" => $this->input->get('points')
        );

		$this->load->view('hunt', $data);
	}
}
