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
            "team" => $this->input->get_post('team'),
            "error" => "",
            "message" => ""
        );

        $this->load->model('question');
        $returnData = $this->question->get($data["id"]);

        $data["question"] = $returnData["question"];
       
        if(strlen($data["answer"]) > 0) 
        {
            if(trim(strtolower($data["answer"])) != trim(strtolower($returnData["answer"])))
            {
                $data["error"] = "That answer was incorrect";
            }
            else
            {
                $data["message"] = "Correct!";
                $this->load->view('correct', $data);	
                return;
            }
        }

        $this->load->view('hunt', $data);
	}

    function createteam()
	{
        $this->load->model('teams');
        
        $data = array(
            "team" => $this->input->get_post('team'),
            "id" => $this->input->get_post('id'),
            "answer" => $this->input->get_post('answer'),
            "error" => "",
            "message" => ""
        );

        if(strlen($data["team"]) > 0)
        {    
            $data["error"] = $this->teams->create($data["team"]);

            if($data["error"] === NULL)
            {
                $data["message"] = "Team " . $data["team"] . " created!";
                $data["error"] = "";

                if(strlen($data["id"]) > 0)
                {
                    header('Location: /hunt/team/?id='.$data['id'].'&answer='.$data['answer'].'&team='.$data['team']);
                    return;
                }
            }
        }

        $this->load->view('createTeam', $data);
    }

    /*
	 * Controller for submitting your team after you have answered a question correctly
	 */
	function team()
	{
		 $data = array(
            "id" => $this->input->get_post('id'),
            "answer" => $this->input->get_post('answer'),
            "team" => $this->input->get_post('team'),
            "error" => "",
            "message" => ""
        );

        $this->load->model('question');
        $returnData = $this->question->get($data["id"]);
       
        if(trim(strtolower($data["answer"])) != trim(strtolower($returnData["answer"])))
        {
            $data["error"] = "That answer was incorrect";
        }
        else
        {
            $this->load->model('teams');
            $data["error"] = $this->teams->answerQuestion($data["team"],$data["id"]);
        }

        if(strlen($data["error"]) > 0)
        {
             $this->load->view('correct', $data);
        }
        else
        {
            $data["message"] = "Team " . $data["team"] . " earned " . $returnData["points"] . " points!";
            $this->load->view('team', $data);
	    }
    }
}
