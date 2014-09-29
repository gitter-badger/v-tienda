<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faq extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('login_check');
    }
	
	function index() {

        $data['main_content'] = 'dashboard/faq';
        $this->load->view('/includes/template_dashboard', $data);
    }
	
	
	}
	
	
	?>