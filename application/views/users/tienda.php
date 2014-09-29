<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tienda extends CI_Controller {
    
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
					$this->mi_tienda();
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
		$nombre = $this->strip_special_characters($nombre);
		$descripcion = $this->input->post('descripcion');
		$descripcion = $this->strip_special_characters($descripcion);
        $insert_tienda = $this->Tienda_Model->crear_tienda($nombre,$descripcion);
		
		// Creacion de directorio y escritura de la vista de tienda y demo de tienda
		$objetos = '$objetos as $objeto';
		$objeto = '$objeto';
		mkdir("application/views/tienda/$nombre"); 
		$open = fopen("application/views/tienda/$nombre/$nombre.php", 'w');
		fwrite($open,"
			<div class='container_12'>
			<div class='grid_10'>
				<?php
					foreach ($objetos)
					{		
						echo '<div class=/'entry-title/'><a> - /'.$objeto->nombre./'</a></div> ';
						echo ' - ( ' . $objeto->descripcion . ' ) '; 
					}
					echo /'<br><br>/';

				?>
	
				<div id='menu-tienda'>
					<ul>
						<li class='active'><a href='$nombre/info'><span>Información</span></a></li>
						<li><a href='$nombre/soft'><span>Software</span></a></li>
						<li><a href='$nombre/web'><span>Mini-Web</span></a></li>
						<li class='last'><a href='$nombre/contacto'><span>Contacto</span></a></li>
					</ul>
				</div>
					<br><img src='/images/construccion.png' >
			</div>
			</div>
		");
		fclose($open);
		
		$open = fopen("application/views/tienda/$nombre/demo_$nombre.php", 'w');
		fwrite($open,"
		<div class='container_12'>
			<div class='grid_10'>
				<?php
					foreach ($objetos)
					{		
						echo '<div class=/'entry-title/'><a> - /'.$objeto->nombre./'</a></div> ';
						echo ' - ( ' . $objeto->descripcion . ' ) '; 
					}
					echo /'<br><br>/';

				?>
				<div id='menu-tienda'>
					<ul>
						<li class='active'><a href='$nombre/info'><span>Información</span></a></li>
						<li><a href='$nombre/soft'><span>Software</span></a></li>
						<li><a href='$nombre/web'><span>Mini-Web</span></a></li>
						<li class='last'><a href='$nombre/contacto'><span>Contacto</span></a></li>
					</ul>
					</div>
					<br><img src='/images/construccion.png' >
			</div>
		</div>");
		fclose($open);
		
		// Creacion de directorio y escritura de controladores
		mkdir("application/controllers/$nombre");
		$open = fopen("application/controllers/$nombre/$nombre.php", 'w');	
		$model = '$this->load->model(\'Tienda_Model\')';
		$form =  '$this->load->helper(\'form\')';
		$form_validation = '$this->load->library(\'form_validation\')';
		$user_id = '$user_id = $_GET[\'id\']';
		$class_user_id = '$this->session->userdata(\'user_id\')';
		$main_content = '$data[\'main_content\']';

		$load_view = '$this->load->view(\'includes/template_dashboard\', $data)';
		fwrite($open,"<?php

						if (!defined('BASEPATH'))
						exit('No direct script access allowed');

						class $nombre extends CI_Controller {
						

						function __construct() {
							parent::__construct();
							$model;
							$form;
							$form_validation;
						}
				
						  function index() {     
							$user_id;
							if($user_id == $class_user_id ){
							redirect('tienda/mi_tienda');
							}else{
							$main_content = 'tienda/$nombre/demo_$nombre';
							$load_view;
							}
						}
						
						function info() {     
							$main_content = 'tienda/$nombre/info';
							$load_view
							}
							
						function soft() {     
							$main_content = 'tienda/$nombre/soft';
							$load_view
							}
							
						function web() {     
							$main_content = 'tienda/$nombre/web';
							$load_view
							}
							
						function contacto() {     
							$main_content = 'tienda/$nombre/contacto';
							$load_view
							}
						

				}
	
		?>");
		fclose($open);
		// Info.php
		$open = fopen("application/controllers/$nombre/info.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Información
			</div> 
			</div>");
		fclose($open);
		// Soft.php
		$open = fopen("application/controllers/$nombre/soft.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Software
			</div> 
			</div>");
		fclose($open);
		// Web.php
		$open = fopen("application/controllers/$nombre/web.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Mini-Web
			</div> 
			</div>");
		fclose($open);
		// Contacto.php
		$open = fopen("application/controllers/$nombre/contacto.php", 'w');	
		fwrite($open," <div class='container_12'>
			<div class='grid_10'>
			 Contacto
			</div> 
			</div>");
		fclose($open);
		
		// Creacion de directorio y escritura del modelo
		mkdir("application/models/$nombre");
		$open = fopen("application/models/$nombre/model_$nombre.php", 'w');
		fwrite($open," <?php
			class model_$nombre extends CI_Model { } 
			?>");
		fclose($open);
		$this->index();
		}
    }


	function mi_tienda(){
	// Datos de la tienda de un usuario
	$select_tienda = $this->Tienda_Model->mostrar_mi_tienda();
	$data['objetos'] = $select_tienda;
	$data['main_content'] = 'tienda/'.$nombre;
	$this->load->view('/includes/template_dashboard', $data);

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
?>