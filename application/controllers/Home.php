<?php
defined('BASEPATH') OR exit ("No direct script access allowed");
class Home extends CI_Controller{

    public function index(){
        $this->load->view('Header2');
        $this->load->view('Navbar');
        $this->load->view('Home');
        $this->load->view('footer');
       
    }
}
?>