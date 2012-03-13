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
            "id" => $this->input->get_post('id'),
            "answer" => $this->input->get_post('answer'),
            "error" => ""
        );

        $this->load->model('question');
        $returnData = $this->question->get($data["id"]);

        $data["question"] = $returnData["question"];
       
        if(strlen($data["answer"]) > 0) 
        {
            if(strtolower($data["answer"]) != strtolower($returnData["answer"]))
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

    /*
	 * Controller for submitting your team after you have answered a question correctly
	 */
	function team()
	{
		 $data = array(
            "id" => $this->input->post('id'),
            "answer" => $this->input->post('answer'),
            "team" => $this->input->post('team'),
            "error" => "",
            "message" => ""
        );

        $this->load->model('question');
        $returnData = $this->question->get($data["id"]);
       
        if(strtolower($data["answer"]) != strtolower($returnData["answer"]))
        {
            $data["error"] = "That answer was incorrect";
        }
        else
        {
            // TODO: do db stuff to record points for team and check that they haven't already answered this.
            $data["message"] = "Team " . $data["team"] . " earned " . $returnData["points"] . " points!";
        }

        $this->load->view('team', $data);
	}
}
