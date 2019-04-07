<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Login extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    
	        $this->load->model('Form_model');
	        $this->load->model('Login_model');
	
		    
    }
    public function index()
    {
        # code...
        if($this->session->userdata('current_user_role') ==  true){

            redirect('Dashboard');
            
        }else{

            $this->load->view('pages/login-home');
        }
        
    }
    public function CheckLoginData(Type $var = null)
    {
        # code...
        if($_POST){

            $user_email = $this->input->post('e');
            $user_password = md5($this->input->post('p'));

            $AdminData = array(

                'user_email' => $user_email,
                'user_password' => $user_password,
                'role' => 'admin'
            );

            $result = $this->Login_model->AuthenticateAdminLoginCredentials($AdminData);
            if($result){
                    
                redirect('Dashboard');
            }
            else{

                $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>Email or Password is not matched</div>');
                redirect('Login');
            }


        }
    }
    public function Logout($user){
        
        if($user == 'admin'){
            $this->session->unset_userdata('current_user_id');
            $this->session->unset_userdata('current_user_name');
            $this->session->unset_userdata('current_user_role');
        
             $this->session->sess_destroy();
        
                 redirect('Login?logout=success');
        }
        
                        
                            
    }
    public function Registration()
    {
        # code...
        $this->load->view('pages/registration-home');

    }
    public function CheckRegistrationData(Type $var = null)
    {
        # code...
        if($_POST){
            //echo "<pre>";print_r($_POST);exit;
            $user_email = $this->input->post('e');
            $user_name = $this->input->post('n');
            $user_gender = $this->input->post('g');
            $user_password = md5($this->input->post('p'));
            $confirm_password = md5($this->input->post('c_p'));
            $user_phone = $this->input->post('m');
            // $query = $this->db->query("SELECT user_email FROM user_table WHERE user_email = '$user_email'");
            
            // $uniq_email;
            // foreach($query->result() as $res){
            //     $uniq_email = $res->user_email;
            // }
            
            if($confirm_password != $user_password){

                $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>Given passwords are not matched</div>');
                redirect('registration-portal');
            }else{

                $UserData = array(

                    'user_email' => $user_email,
                    'user_password' => $user_password,
                    'role' => 'admin',
                    'user_phone' => $user_phone,
                    'user_name' => $user_name,
                    'user_gender' => $user_gender
                );
    
                $result = $this->Login_model->InsertRegistrationCredentials($UserData);
                if($result){
                        
                    $this->session->set_flashdata('success','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>Registration Completed. You may login now</div>');
                    redirect('login');
                }
                else{
    
                    $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>Something weng wrong</div>');
                    redirect('registration-portal');
                }


            }
            


        }
    }
	
}

