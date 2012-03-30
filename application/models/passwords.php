<?php
	/*
	 * Defines all functionality for checking and changing passwords, as well as logging in and out
	 */
	class Passwords extends CI_Model 
	{
		/*
		 * Returns true if the user has the correct log in permissions or has just posted the correct password, otherwise
		 * shows the log in page
		 * 
		 * @param page - the current page. The controller should pass 'this' as this paramater
		 * @param user_level - user_level to determine which password should be compared against
		 */			
		function checkLogIn($page, $user_level)
		{
			session_start();
			$message = '';	
			
			if(!isset($_SESSION[$user_level]))
			{
				if($page->input->post('password') != NULL)
				{
					$data = $this->checkPassword($page->input->post('password'), $user_level);
					
					if($data === true)
					{
						$_SESSION[$user_level] = true;
						return true;
					}
					else
					{
						$message = $data;
						$data = array('message' => $message);
						$page->load->view('log_in',$data);	
						return false;	
					}
				}
				else
				{	
					$data = array('message' => $message);
					$page->load->view('log_in',$data);	
					return false;
				}
			}	
			else
			{
				return true;		
			}
		}

        function isLoggedIn($user_level)
        {
            session_start();
            return isset($_SESSION[$user_level]);
        }
		
		/*
		 * Logs the user out
		 */
		function logOut()
		{
			session_start();
			unset($_SESSION);
		}	
		
		/*
		 * Encrypts the passsword for storage in the DB, or comparision to stored password in DB
		 */
		function encrypt($password)
		{
			return sha1($password);
		}
		
		/*
		 * Checks if the password entered is the correct password for the specified user level
		 * 
		 * returns true if correct, an error message otherwise
		 */
		function checkPassword($password,$user_level)
		{
			$this->load->database();
			$query = $this->db->query("SELECT * FROM tbl_passwords WHERE user_level = ".$this->db->escape($user_level)."
				&& password = '" . $this->encrypt($password) . "'");
				
				if($query->num_rows() > 0)
				{
					return true;
				}
				else
				{
					return "Password Incorrect";		
				}
		}
		
		/*
		 * Changes the password for the specified user level is $old_password if correct and 
		 * the new passwords match. Returns true if password changed, an error message otherwise
		 */
		function changePassword($old_password,$new_password,$new_password_confirm,$user_level)
		{
			
			if($this->checkPassword($old_password,$user_level) === true)
			{
				if(strlen($new_password) < 4)
				{
					return "New password must be atleast 4 characters long";
				}	
				elseif($new_password != $new_password_confirm)
				{
					return "The new passwords do not match";
				}	
				else
				{
					$query = $this->db->query("UPDATE tbl_passwords SET password = '" . $this->encrypt($new_password) . "'
					WHERE user_level = ".$this->db->escape($user_level)."
					&& password = '" . $this->encrypt($old_password) . "'");	
					return "Password changed!";
				}
			}
			else
			{
				return "Old Password incorrect";		
			}
		}
	}
	
?>
