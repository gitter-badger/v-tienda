<?php
			if (!defined('BASEPATH'))
						exit('No direct script access allowed');

						class Soft extends CI_Controller {
						

						function __construct() {
							parent::__construct();
							$this->load->model('Tienda_Model');
							$this->load->helper('form');
							$this->load->library('form_validation');
						}
						
						function index() {     
							$user_id = $_GET['id'];
		$select_tienda = $this->Tienda_Model->mostrar_tienda($user_id);
							$data['objetos'] = $select_tienda;
							
							$data['main_content'] = 'tienda/prueba_nombre_1/soft';
							$this->load->view('includes/template_tienda', $data);
							
						}
						
						
						}
		?>