<?php
	/*
	 * Defines all functionality for checking if answers are correct
	 */
	class Answer extends CI_Model 
	{
		/*
		 * Returns true if the user entered the correct answer for this question
		 */			
		function checkAnswer($question, $answer, $points, $checksum)
		{
			return $checksum == md5($question.strtolower($answer).$points);
		}
    }
?>
