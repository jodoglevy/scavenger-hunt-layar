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
            "question" => $this->input->get_post('question'),
            "checksum" => $this->input->get_post('checksum'),
            "points" => $this->input->get_post('points'),
            "answer" => $this->input->get_post('answer'),
            "error" => ""
        );

        if(strlen($data["answer"]) > 0) 
        {
            $this->load->model('answer');
            if(!$this->answer->checkAnswer($data["question"],$data["answer"],$data["points"],$data["checksum"]))
            {
                $data["error"] = "That answer was incorrect";
            }
            else
            {
                $this->load->view('correct', $data);	
                return;
            }
        }

        $this->load->view('hunt', $data);
	}
}
