<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('id')) {
            redirect('pages/view/home');
        }
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('forgot_model');
    }
    
    public function reset_password() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email',
            array(
                'required'      => 'Email is required.',
                'valid_email'     => 'This email is not valid.'
            )
        );
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('accounts/view_reset_password', array('error' => 'Please supply a valid email address.'));
        } else {
            $email = $this->input->post('email');
            $result = $this->forgot_model->email_exists($email);
            if ($result) {
                $this->send_reset_password_email($email, $result);
                $this->session->set_flashdata('message', 'Check your email to change your password.');
                $this->session->set_flashdata('alert', "alert-success");
                $this->load->view('accounts/view_reset_password', array('email' => $email));
                $this->session->set_flashdata('message', '');
                $this->session->set_flashdata('alert', '');
            } else {
                $this->session->set_flashdata('message', 'Email address not registered.');
                $this->session->set_flashdata('alert', "alert-danger");
                $this->load->view('accounts/view_reset_password', array('email' => $email));
                $this->session->set_flashdata('message', '');
                $this->session->set_flashdata('alert', '');
            }
        }
    }
    
    public function reset_password_form($email, $email_code) {
        if (isset($email, $email_code)) {
            $email_hash = sha1($email . $email_code);
            $verified = $this->forgot_model->verify_reset_password_code($email, $email_code);
            if ($verified) {
                $this->load->view('accounts/view_update_password', array('email_hash' => $email_hash, 'email_code' => $email_code, 'email' => $email));
            } else {
                $this->load->view('accounts/view_reset_password', array('error' => 'There was a problem with your link. Please click it again or request to reset your password again', 'email' => $email));
            }
        }
    }
    
    public function update_password() {
        if (!isset($_POST['email'], $_POST['email_hash']) || $_POST['email_hash'] !== sha1($_POST['email'] . $_POST['email_code'])) {
            die('Error updating your password');
        }
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email_hash', 'Email Hash', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[password_conf]',
            array(
                'required'      => 'New Password is required.',
                'min_length'    => 'Your password must be atleast 6 characters long.',
                'matches'       => "Passwords don't match."
            )
        );
        $this->form_validation->set_rules('password_conf', 'Confirmed Password', 'trim|required|min_length[6]',
            array(
                'required'      => 'Password is required.',
                'min_length'    => 'Your password must be atleast 6 characters long.'
            )
        );
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('accounts/view_update_password');
        } else {
            $result = $this->forgot_model->update_password();
            if ($result) {
                $this->session->set_flashdata('message', 'You succesfully changed your password.');
                $this->session->set_flashdata('alert', "alert-success");
                redirect('login/index');
                $this->session->set_flashdata('message', '');
                $this->session->set_flashdata('alert', '');
            } else {
                $this->load->view('accounts/iew_update_password', array('error' => 'Problem updating your password.'));
            }
        }
    }
    
    private function send_reset_password_email($email, $name) {
        $subject = "Please reset your password";
        $email_code = md5($this->config->item('encryption_key') . $name);
        $message = site_url('forgot/reset_password_form/'.$email.'/'.$email_code);
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
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
}
?>
