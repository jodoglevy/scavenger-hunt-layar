<?php
	/*
	 * Defines all functionality for questions
	 */
	class Question extends CI_Model 
	{
		function create($question, $answer, $points)
		{
            $this->load->database();
            
            $results = $this->db->query("SELECT MAX(id) FROM tbl_questions");
            $row = $results->row_array(0);
            $auto_id = $row['MAX(id)'] + 1;

            $this->db->query("INSERT INTO tbl_questions (question, points, answer) VALUES ('".$question."',".$points.", '".strtolower($answer)."')");

            return "http://" . $_SERVER['HTTP_HOST'] . "/hunt/?id=" . $auto_id;
		}

        function get($id)
		{
            $this->load->database();
            
            $results = $this->db->query("SELECT * FROM tbl_questions WHERE id =" . $id);
            return $results->row_array(0);
		}
    }
?>