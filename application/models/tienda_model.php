<?php
class Tienda_Model extends CI_Model {

function nombre_tienda_check($nombre){
		$this->db->where('nombre', $nombre);
        $query = $this->db->get('tienda');
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }

	}


function verify_tienda(){

		$this->db->where('idUsua', $this->session->userdata('user_id'));
        $query = $this->db->get('tienda');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
	
function crear_tienda($nombre,$descripcion){
		
		$datos_tienda = array(
			'idUsua' => $this->session->userdata('user_id'),
			'nombre' => $nombre,
			'descripcion' => $descripcion
		);
  
		return $this->db->insert('tienda', $datos_tienda);
		
    }
	
	 function mostrar_mi_tienda(){
 
		$this->db->select('nombre, descripcion');
		$this->db->where('idUsua', $this->session->userdata('user_id'));
  
		return $this->db->get('tienda')->result();
	}
	
	function mostrar_tienda ($user_id) {
	$this->db->select('nombre, descripcion');
		$this->db->where('idUsua', $user_id);
  
		return $this->db->get('tienda')->result();
	
	}
	
	 function mostrar_tiendas(){
 
		$this->db->select('idUsua,nombre, descripcion');
		return $this->db->get('tienda')->result();
	}

	
	
}
?>
