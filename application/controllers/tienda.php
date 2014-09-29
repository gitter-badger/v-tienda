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
	 
	 // Datos de la tienda de un usuario
	$user_id = $_GET['id'];
	
	if ($user_id == $this->session->userdata('user_id')) {
		redirect('mi_tienda');
	}else{
	
	$select_tienda = $this->Tienda_Model->mostrar_tienda($user_id);
	$data['objetos'] = $select_tienda;
	foreach ($data['objetos'] as $objeto)
	{		
		$nombre = $objeto->nombre;
	}
	$nombre = $this->strip_special_characters($objeto->nombre);
	$data['main_content'] = 'tienda/'.$nombre.'/'.$nombre;
	$this->load->view('/includes/template_tienda', $data);
			
    }
    
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