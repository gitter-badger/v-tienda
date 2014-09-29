<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mi_Tienda extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		
        $this->load->model('Tienda_Model');
		$this->load->helper('form');
        $this->load->library('form_validation');
		
    }
	
     function index() {
	 
	 // Verificar si el usuario ya tiene una tienda creada
	$select_tienda = $this->Tienda_Model->verify_tienda();
		if ($select_tienda == FALSE) {
			$data['main_content'] = 'tienda/verify_tienda';
			$this->load->view('/includes/template_dashboard', $data);
		}else{
					
	// Datos de la tienda de un usuario
	
	
	$select_tienda = $this->Tienda_Model->mostrar_mi_tienda();
	$data['objetos'] = $select_tienda;
	foreach ($data['objetos'] as $objeto)
	{		
		$nombre = $objeto->nombre;
	}
	$nombre = $this->strip_special_characters($nombre);
	$data['main_content'] = 'tienda/'.$nombre.'/'.$nombre;
	$this->load->view('/includes/template_tienda', $data);
					
	}

	
	}
	
	
	function crear_tienda() {
		// Validación de formulario crear tienda
		$this->form_validation->set_rules('nombre', 'Nombre de tienda', 'trim|required|callback__nombre_tienda_check');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required');
        $this->form_validation->set_message('required', 'El campo %s es requerido');
		$this->form_validation->set_message('_nombre_tienda_check', 'El %s ya existe');
		
		 if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
      
		// Guardar datos de tienda
		$nombre = $this->input->post('nombre');
		
		$descripcion = $this->input->post('descripcion');
		
        $insert_tienda = $this->Tienda_Model->crear_tienda($nombre,$descripcion);
		$nombre = $this->strip_special_characters($nombre);
		$descripcion = $this->strip_special_characters($descripcion);
		// Creacion de directorio y escritura de las vistas de tienda 
		
		mkdir("application/views/tienda/$nombre"); 
		$open = fopen("application/views/tienda/$nombre/$nombre.php", 'w');
		fwrite($open,"
			<div class='container_12'>
			<div class='grid_10'>
				
				<img src='/images/construccion.png' >
				
					
			</div>
			</div>
		");
		fclose($open);
		

		// Info.php
		$open = fopen("application/views/tienda/$nombre/info.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Información
			</div> 
			</div>");
		fclose($open);
		// Soft.php
		$open = fopen("application/views/tienda/$nombre/soft.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Software
			</div> 
			</div>");
		fclose($open);
		// Web.php
		$open = fopen("application/views/tienda/$nombre/web.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Mini-Web
			</div> 
			</div>");
		fclose($open);
		// Contacto.php
		$open = fopen("application/views/tienda/$nombre/contacto.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Contacto
			</div> 
			</div>");
		fclose($open);
		
		
		
		// Creacion de directorio y escritura de controladores
		mkdir("application/controllers/$nombre");
			
		$model = '$this->load->model(\'Tienda_Model\')';
		$form =  '$this->load->helper(\'form\')';
		$form_validation = '$this->load->library(\'form_validation\')';
		$user_id = '$user_id = $_GET[\'id\']';
		$user_id_var = '$user_id';
		$class_user_id = '$this->session->userdata(\'user_id\')';
		
		
		$data = '$data[\'objetos\'] = $select_tienda';
		$select_tienda = '$user_id = $_GET[\'id\'];
		$select_tienda = $this->Tienda_Model->mostrar_tienda($user_id)';
		
		
		$main_content = '$data[\'main_content\']';
		
		$load_view = '$this->load->view(\'includes/template_tienda\', $data)';
		
		// Info.php
		$open = fopen("application/controllers/$nombre/info.php", 'w');	
		fwrite($open," <?php
		if (!defined('BASEPATH'))
						exit('No direct script access allowed');

						class Info extends CI_Controller {
						

						function __construct() {
							parent::__construct();
							$model;
							$form;
							$form_validation;
						}
						
						function index() {     
						    $select_tienda;
							
							$data;
							
							$main_content = 'tienda/$nombre/info';
							$load_view;
							
						}
						
						
						}
		
		?>");
		fclose($open);
		// Soft.php
		
		$open = fopen("application/controllers/$nombre/soft.php", 'w');	
		fwrite($open,"<?php
			if (!defined('BASEPATH'))
						exit('No direct script access allowed');

						class Soft extends CI_Controller {
						

						function __construct() {
							parent::__construct();
							$model;
							$form;
							$form_validation;
						}
						
						function index() {     
							$select_tienda;
							$data;
							
							$main_content = 'tienda/$nombre/soft';
							$load_view;
							
						}
						
						
						}
		?>");
		fclose($open);
		// Web.php
		
		$open = fopen("application/controllers/$nombre/web.php", 'w');	
		fwrite($open,"<?php
				if (!defined('BASEPATH'))
						exit('No direct script access allowed');

						class Web extends CI_Controller {
						

						function __construct() {
							parent::__construct();
							$model;
							$form;
							$form_validation;
						}
						
						function index() {     
							$select_tienda;
							$data;
							
							$main_content = 'tienda/$nombre/web';
							$load_view;
							
						}
						
						
						}
				
				?>");
		fclose($open);
		// Contacto.php
		$open = fopen("application/controllers/$nombre/contacto.php", 'w');	
		fwrite($open,"<?php

				if (!defined('BASEPATH'))
						exit('No direct script access allowed');

						class Contacto extends CI_Controller {
						

						function __construct() {
							parent::__construct();
							$model;
							$form;
							$form_validation;
						}
						
						function index() {     
							$select_tienda;
							$data;
							
							$main_content = 'tienda/$nombre/contacto';
							$load_view;
							
						}
						
						
						}
						?>");
		fclose($open);
		
		// Creacion de directorio y escritura del modelo
		mkdir("application/models/$nombre");
		$open = fopen("application/models/$nombre/model_$nombre.php", 'w');
		fwrite($open," <?php
			class model_$nombre extends CI_Model { } 
			?>");
		fclose($open);
		
		}
		
		$this->index();
    }
	
	
	
	function strip_special_characters($string){    
			$from = 'ÀÁÂÃÄÅÆÞÇÐÈÉÊËÌÍÎÏÑÒÓÔÕÖØŔßÙÚÛÜÝªàáâãäåæþçðèéêëìíîïñºòóôõöøŕùúûüýýÿ^´`¨~ ';
			$to = 'AAAAAAABCDEEEEIIIINOOOOOORSUUUUYaaaaaaaabcdeeeeiiiinoooooooruuuuyyy-----_';
			$string = strtr(utf8_decode($string), utf8_decode($from), $to);
    
			return utf8_encode($string);
		}
	  
	function _nombre_tienda_check($nombre) {
        return $this->Tienda_Model->nombre_tienda_check($nombre);
    }

	
	}