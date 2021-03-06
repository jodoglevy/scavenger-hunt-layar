<?php
	class Teams extends CI_Model 
	{
		function create($teamName, $teamEmail)
		{
            $name = strtolower($teamName);
            $empty_array = array();
            
            $this->load->database();

            $results = $this->db->query("SELECT * FROM tbl_teams WHERE name = ".$this->db->escape($name));
            
            if ($results->num_rows() > 0)
            {
                 return "Team " . $teamName . " already exists!"; 
            }

            $this->db->query("INSERT INTO tbl_teams (name, email, score, questions_answered) VALUES 
            (".$this->db->escape($name).",".$this->db->escape($teamEmail).",0,".$this->db->escape(serialize($empty_array)).")");
            
            return NULL;
		}

        function answerQuestion($teamName, $questionID)
		{
            $this->load->database();
            
            $name = strtolower($teamName);
            $results = $this->db->query("SELECT * FROM tbl_teams WHERE name = ".$this->db->escape($name));
            
            if ($results->num_rows() === 1)
            {
                $teamInfo = $results->row_array(0);

                $questions_answered = unserialize($teamInfo["questions_answered"]);
                $score = $teamInfo["score"];

                if(in_array($questionID, $questions_answered))
                {
                    return "Team " . $teamName . " has already answered this question!";
                }
                else
                {
                    $this->load->model('question');
                    $questionData = $this->question->get($questionID);

                    array_push($questions_answered, $questionID);
                    $score = $score + $questionData["points"];

                    $this->db->query("UPDATE tbl_teams SET questions_answered = ".$this->db->escape(serialize($questions_answered))
                        .", score=".$score." WHERE name = ".$this->db->escape($name)
                    );
                    
                    return NULL;
                }
            }
            else
            {
                return "Team " . $teamName . " does not exist!";
            }
		}

        function deleteAll()
        {
            $this->load->database();
            $this->db->query("DELETE FROM tbl_teams");
        }

        function getAllSortedByScore()
        {
            $this->load->database();
            $results = $this->db->query("SELECT * FROM tbl_teams ORDER BY score DESC");
            return $results->result_array();
        }
    }
?>
