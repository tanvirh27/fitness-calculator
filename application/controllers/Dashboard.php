<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Dashboard extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    
	        $this->load->model('Form_model');
	
		    
    }
    public function index()
    {
        # code...
        if($this->session->userdata('current_user_role') ==  true){
            
            $this->load->view('includes/header');
            $this->load->view('includes/sidebar');
            $this->load->view('pages/dashboard-home');
            $this->load->view('includes/footer');
            //echo "hello";
        }
        else{
            $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>You have to login first to access dashboard</div>');
                redirect('Login');
           
        }
        
    }

    public function Nutrition()
    {
        # code...
        echo "Page Under Construction";
    }
  
	
}

