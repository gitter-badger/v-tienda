<?php
	if (!defined('BASEPATH'))
						exit('No direct script access allowed');

						class Motoshop extends CI_Controller {
						

						function __construct() {
							parent::__construct();
							$this->load->model('Tienda_Model');
							$this->load->helper('form');
							$this->load->library('form_validation');
						}
						
						function index() {     
							$select_tienda = $this->Tienda_Model->mostrar_mi_tienda();
								$data['objetos'] = $select_tienda;
								foreach ($data['objetos'] as $objeto)
								{		
									$nombre = $objeto->nombre;
								}
								$nombre = $this->strip_special_characters($nombre);
								
						    $seccion = $_GET['seccion'];
							switch($seccion){
							case "info":
								
								$data['main_content'] = 'tienda/'.$nombre.'/info.php';
								
							break;
							
							case "soft":
								
								$data['main_content'] = 'tienda/'.$nombre.'/soft.php';
							
							break;
							
							case "web":
								
								$data['main_content'] = 'tienda/'.$nombre.'/web.php';
							
							break;
							
							case "contacto":
								
								$data['main_content'] = 'tienda/'.$nombre.'/contacto.php';
								
							break;
							
							}
							
							$this->load->view('/includes/template_tienda', $data);
							
						}
						
							function strip_special_characters($string){    
								$from = 'ְֱֲֳִֵֶÞַ׀ָֹÊֻּֽ־ֿׁׂ׃װױײ״RßÙÚÛÜÝ×אבגדהוז‏חנטיךכלםמןס÷עףפץצרrשתûü‎‎ÿ^´`¨~ ';
								$to = 'AAAAAAABCDEEEEIIIINOOOOOORSUUUUYaaaaaaaabcdeeeeiiiinoooooooruuuuyyy-----_';
								$string = strtr(utf8_decode($string), utf8_decode($from), $to);
    
							return utf8_encode($string);
		}
						
						}
?>