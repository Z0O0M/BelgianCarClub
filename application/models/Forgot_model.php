<?php
class Forgot_model extends CI_Model {
    public function email_exists($email) {
        $sql = "SELECT first_name, email FROM users WHERE email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        
        return ($result->num_rows() === 1 && $row->email) ? $row->first_name : false;
    }
    
    public function verify_reset_password_code($email, $code) {
        $sql = "SELECT first_name, email FROM users WHERE email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        
        if ($result->num_rows() === 1) {
            return ($code == md5($this->config->item('encryption_key') . $row->first_name)) ? true : false;
        } else {
            return false;
        }
    }
    
    public function update_password() {
        $email = $this->input->post('email');
        $password = $this->encryption->encrypt($this->input->post('password'));
        
        $sql = "UPDATE users SET password = '{$password}' WHERE email = '{$email}' LIMIT 1";
        $this->db->query($sql);
        
        if ($this->db->affected_rows() === 1) {
            return true;
        } else {
            return false;
        }
    }
}
?>