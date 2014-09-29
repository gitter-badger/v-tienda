<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login_check extends CI_Controller {

      function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('user_id'))
        { 
            redirect('users/registrar');
        }
    }
}