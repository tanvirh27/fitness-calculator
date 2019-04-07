<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function AuthenticateAdminLoginCredentials($AdminData)
    {
          
            $QueryResult = $this->db->get_where('user_table', $AdminData); // select query for code igniter
			
			if($QueryResult -> num_rows() == 1){

				

				$attribute_session = array(

					'current_user_id'  => $QueryResult->row(0)->user_id,
					'current_user_name'  => $QueryResult->row(1)->user_name,
					'current_user_role' => $QueryResult->row(4)->role,
					'current_user_gender' => $QueryResult->row(2)->user_gender,
				);
				
                
            

				$this->session->set_userdata($attribute_session); // session set afte login succeess
				return TRUE;

			}
			else
			{
				return FALSE;
				
			}
	}
	public function is_admin_logged_in(){
		return $this->session->userdata('current_user_role')!= FALSE;
	}
	public function InsertRegistrationCredentials($UserData)
	{
		# code...
		$this->db->insert('user_table',$UserData);
		return true;
	}
  

    
    
}