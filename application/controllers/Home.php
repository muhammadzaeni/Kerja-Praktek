<?php
defined('BASEPATH') OR exit ("No direct script access allowed");
class Home extends CI_Controller{

    public function index(){
        if(isset($_SESSION["authenticated"])){
            $this->load->view('Header2');
            $this->load->view('Navbar');
            $this->load->view('Home');
            $this->load->view('footer');
        }else{
            redirect('login');
        }
    }

    public function logout(){
        session_destroy();
        redirect('login');
    }
}
?>