<?php

class Users_Model extends CI_Model {

	function username_login_check($username) {
        $this->db->where('usuario', $username);
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
	
	function password_login_check($password) {
        $this->db->where('clave', md5($password));
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function username_check($username) {
        $this->db->where('usuario', $username);
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    function email_check($email) {
        $this->db->where('mail', $email);
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    function insert_user($name, $username, $email, $password, $activation_code) {
        $data = array(
            'usuario' => $username,
            'mail' => $email,
            'clave' => $password,
            'activation_code' => $activation_code,
        );
        return $this->db->insert('usuario', $data);
    }

 

    function confirm_registration($activation_code) {
        $this->db->select('idUsua');
        $this->db->where('activation_code', $activation_code);
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            $data = array(
                'status' => 1
            );
            $this->db->where('activation_code', $activation_code);
            return $this->db->update('usuario', $data);
        } else {
            return false;
        }
    }

    function verify_login($username, $password) {
        $this->db->where('usuario', $username);
        $this->db->where('clave', $password);
        $query = $this->db->get('usuario');

        

        if ($query->num_rows() > 0) {
            return $query->result();
            
        } else {
            return false;
        }
    }
    
}