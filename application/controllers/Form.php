<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Form extends CI_Controller {

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
            $this->load->view('pages/form-entry');
            $this->load->view('includes/footer');

        }else{
            $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>You have to login first to access dashboard</div>');
            redirect('Login');
           
        }
        
    }
    public function Calculation(Type $var = null)
    {
        # code...
        if($this->session->userdata('current_user_role') ==  true){
          $BMI;$Weight_Status = '';  
        if($_GET['Is_this_Calculation_True?']){
            //echo "<pre>"; print_r($_GET);exit;
            $height_feet = $this->input->get('height_feet');
            $height_inch = $this->input->get('height_inch');
            $weight = $this->input->get('weight');

            $full_height = $height_feet + ($height_inch/12);
            $meter = $full_height * 0.3048;
            $cent = $meter /0.010000;
            $bmi_fraction = $weight / ($cent * $cent) * 10000;
            $bmi_full = number_format((float)$bmi_fraction, 1, '.', '');;
            $BMI = $bmi_full;
            if($bmi_full <= 18.5){
                //echo "under Weight";
                $Weight_Status = "Under Weight";
            }
            if($bmi_full >= 18.5 && $bmi_full <= 24.9){

                //echo "Normal Weight";
                $Weight_Status = "Normal Weight";

            }
            if($bmi_full >25){
                //echo "Over Weight";
                $Weight_Status = "Over Weight";
            }
            $data = array(

                'BMI' => $BMI,
                'weight_status' => $Weight_Status,
                'current_height' => $height_feet.' Feet -'.$height_inch.' Inch',
                'current_weight' => $weight
            );
            $this->load->view('includes/header');
            $this->load->view('includes/sidebar');
            $this->load->view('pages/dashboard-home',$data);
            $this->load->view('includes/footer');


        }
        }else{
            $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-warning"></i>You have to login first to access dashboard</div>');
            redirect('Login');
        
        }
    }
    
	
}

