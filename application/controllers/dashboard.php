<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {

        parent::__construct();
   
        $this->load->model('Users_Model');
		$this->load->model('Tienda_Model');
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('login_check');
        
    }

    function index() {     
		$select_tienda = $this->Tienda_Model->mostrar_tiendas();
		$data['objetos'] = $select_tienda;
        $data['main_content'] = 'dashboard/index';
		
        
        $this->load->view('includes/template_dashboard', $data);
    }

    

    function logout() {

        $this->session->sess_destroy();

        redirect('users');
    }
  
  


}



?>