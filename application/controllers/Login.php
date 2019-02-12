<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id')) {
            redirect('pages/view/home');
        }
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('login_model');
    }

    function index() {
        $this->load->view('accounts/login');
    }

    function validation() {
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run()) {
            $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
            if($result == '') {
                redirect('pages/view/home');
            } else {
                $this->session->set_flashdata('message', $result);
                $this->session->set_flashdata('alert', "alert-danger");
                $this->index();
                $this->session->set_flashdata('message', '');
                $this->session->set_flashdata('alert', '');
            }
        } else {
            $this->index();
        }
    }
    
    function logout() {
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value) {
            $this->session->unset_userdata($row);
        }
        redirect('pages/view/home');
    }
}
?>