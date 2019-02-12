<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('id')) {
            redirect('pages/view/home');
        }
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('register_model');
    }

    function index() {
        $this->load->view('accounts/register');
    }

    function validation() {
        $this->form_validation->set_rules('user_first_name', 'First Name', 'required|trim',
            array(
                'required'      => 'First Name is required.'
            )
        );
        $this->form_validation->set_rules('user_last_name', 'Last Name', 'required|trim',
            array(
                'required'      => 'Last Name is required.'
            )
        );
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]',
            array(
                'required'      => 'Email is required.',
                'is_unique'     => 'This email already exists.',
                'valid_email'   => 'This email is not valid.'
            )
        );
        $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[6]|matches[user_confirm_password]',
            array(
                'required'      => 'Password is required.',
                'min_length'    => 'Your password must be atleast 6 characters long.',
                'matches'       => "Passwords don't match."
            )
        );
        $this->form_validation->set_rules('user_confirm_password', 'Confirmed Password', 'trim|required|min_length[6]',
            array(
                'required'      => 'Password is required.',
                'min_length'    => 'Your password must be atleast 6 characters long.'
            )
        );
        if($this->form_validation->run()) {
            $verification_key = md5(rand());
            $encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
            $data = array(
                'first_name'  => $this->input->post('user_first_name'),
                'last_name'  => $this->input->post('user_last_name'),
                'email'  => $this->input->post('user_email'),
                'password' => $encrypted_password,
                'verification_key' => $verification_key
            );
            $id = $this->register_model->insert($data);
            if($id > 0) {
                $subject = "Please verify email for login";
                $message = site_url('register/verify_email/'.$verification_key);
                $config = array(
                    'protocol'      => 'smtp',
                    'smtp_host'     => 'ssl://send.one.com',
                    'smtp_port'     => '465',
                    'smtp_timeout'  => '7',
                    'smtp_user'     => 'belgiancarclub@procode.be', 
                    'smtp_pass'     => 'belgiancar', 
                    'mailtype'      => 'text',
                    'newline'       => "\r\n",
                    'charset'       => 'utf-8'
                );
                $this->load->library('email', $config);
                $this->email->from('belgiancarclub@procode.be', 'Mila Lipa');
                $this->email->to($this->input->post('user_email'));
                $this->email->subject($subject);
                $this->email->message($message);
                if($this->email->send()) {
                    $this->session->set_flashdata('message', 'Check your inbox for a verification e-mail to verify your address');
                    $this->session->set_flashdata('alert', "alert-success");
                    redirect('login/index');
                    $this->session->set_flashdata('message', '');
                    $this->session->set_flashdata('alert', '');
                }
            } 
        } else {
            $this->index();
        }
    }
    
    function verify_email() {
        if($this->uri->segment(3)) {
            $verification_key = $this->uri->segment(3);
            $data['title'] = "Email-vertification";
            if($this->register_model->verify_email($verification_key)) {
                $message = 'Your Email has been successfully verified.';
                $alert_type = "alert-success";
            } else {
                $message = 'Invalid Link.';
                $alert_type = "alert-danger";
            }
            $this->session->set_flashdata('message', $message);
            $this->session->set_flashdata('alert', $alert_type);
            redirect('login/index');
            $this->session->set_flashdata('message', '');
            $this->session->set_flashdata('alert', '');
        }
    }
}
?>
