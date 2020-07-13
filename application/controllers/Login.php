<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function proses_login(){
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        if(isset($username) && isset($pass)){
            $this->db->where('username',$username);
            $this->db->where('password',$pass);
            $q = $this->db->get('login');
            if($q->num_rows() > 0){
                $this->session->set_flashdata('info', 'Login sukses');
                $_SESSION['authenticated'] = $q->result()[0]->Nama;
                redirect('home');
            }else{
                $this->session->set_flashdata('error', 'Password Atau NIDN Salah ');
                redirect('login');
            }
        }
    }

    public function index(){
        if(isset($_SESSION['authenticated'])){
            redirect('home');
        }else{
            $this->load->view('header');
            $this->load->view('Login');
        }
    }
}
?>
