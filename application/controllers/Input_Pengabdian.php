<?php
defined('BASEPATH') OR exit ("No direct script access allowed");
class Input_Pengabdian extends CI_Controller{

    public function index(){
        
            $this->load->view('Header2');
            $this->load->view('Navbar');
            $this->load->view('V_input_data_pengabdian');
            $this->load->view('footer');
       
            
        }
    }


?>