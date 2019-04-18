<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Home extends CI_Controller {

    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
               
    }

    public function index()
    {
        # code..
            $this->load->view('includes/header');
            $this->load->view('pages/home');
            $this->load->view('includes/footer'); 
            //show_404();
    }
    public function OurSolution()
    {
        # code...
            $this->load->view('includes/header');
            $this->load->view('pages/our-solution');
            $this->load->view('includes/footer');
    }
    public function ListParking()
    {
        # code...
            $this->load->view('includes/header');
            $this->load->view('pages/list-parking');
            $this->load->view('includes/footer');
    }


    
	
}

