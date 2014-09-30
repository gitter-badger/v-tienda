<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Users_Model');
        $this->load->helper('form');
		
        $this->load->library('form_validation');
        $this->load->library('email');
		
        
    }

   

    function index() {
		// Cargar login si no hay session
		if(! $this->session->userdata('user_id')){ 
			$data['main_content'] = 'users/login';
			$this->load->view('/includes/template', $data);
		}else{
		    redirect('dashboard');
		}
    }

   

    function verify_login() {
		// Validacion de formulario de login
        $this->form_validation->set_rules('username', 'Nombre de usuario', 'trim|required|callback__username_login_check');
        $this->form_validation->set_rules('password', 'Clave', 'trim|required|callback__password_login_check');
        $this->form_validation->set_message('required', 'El campo %s es requerido');
        $this->form_validation->set_message('_username_login_check', 'El %s no existe');
		$this->form_validation->set_message('_password_login_check', 'La %s es incorrecta');

        if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		// Si el login es correcto se guardan los datos de session y se pasa a verificar si es una cuenta confirmada o no
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
            $login = $this->Users_Model->verify_login($username, $password);

            if ($login) {
				$data = array(
					'is_loged_in' => TRUE,
                    'nombre_usuario' => $login[0]->usuario,
                    'user_id' => $login[0]->idUsua,
                    'status' => $login[0]->status,
                 );

                 $this->session->set_userdata($data);
                 $this->verify_status();
            }

	
		}

       
    }

    function verify_status() {
		// Verificacion de la cuenta si esta confirmada o no
        $status = $this->session->userdata('status');
        if ($status == 0) {
            $this->session->sess_destroy();
            $this->verify_mail();
        } else {
            redirect('dashboard');
        }
    }

    function verify_mail() {
        $data['main_content'] = 'users/verify_mail';
        
    }
	
	
   

    function registrar() {
        $data['main_content'] = 'users/signup';
	$this->load->view('/includes/template', $data);
        
    }
	
	

    function create_account() {
		// Verificacion de formulario de registro, creacion de cuenta y envio de mail
        $this->form_validation->set_rules('username', 'Nombre de usuario', 'trim|required|callback__username_check');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback__email_check');
        $this->form_validation->set_rules('password', 'Clave', 'trim|required|md5');
        $this->form_validation->set_rules('re_password', 'Confirmar clave', 'trim|required|matches[password]|md5');
        $this->form_validation->set_message('required', 'El campo %s es requerido');
        $this->form_validation->set_message('_username_check', 'El %s ya existe');
        $this->form_validation->set_message('valid_email', 'El %s no es valido');
        $this->form_validation->set_message('_email_check', 'El %s ya existe');
        $this->form_validation->set_message('matches', 'Las contraseñas no coinciden');
        if ($this->form_validation->run() == FALSE) {
            $this->registrar();
        } else {
                $name = $this->input->post('name');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $activation_code = $this->_random_string(10);

                $this->email->set_newline("\r\n");
				$this->email->to($email);
				$this->email->subject('v-tienda.com.ar - Confirmacion de correo electronico');
                $this->email->message('Por favor verifique su registro' . anchor('http://v-tienda.com.ar/users/register_confirm/' . $activation_code, ' Valide su correo'));
                $this->email->from('cuentas@v-tienda.com.ar', 'Tienda Virtual');

                $result = $this->email->send();
				
                if($result){
                    $insert = $this->Users_Model->insert_user($name, $username, $email, $password, $activation_code);
					$data['main_content'] = 'users/cuenta_creada';
					$this->load->view('/includes/template', $data);
                }else{
                        show_error($this->email->print_debugger());
                    }
               }
         }

    function register_confirm($activation_code = '') {
		// Confirmacion de cuenta
        if ($activation_code == '') {
            die('Código de verificación errrado');
        } else {
            $update = $this->Users_Model->confirm_registration($activation_code);
            if ($update) {
                $data['main_content'] = 'users/registro_completo';
				$this->load->view('/includes/template', $data);
            } else {
                echo 'Su verificación de registro falló';
            }
        }
    }
	
	// Validaciones
    function _username_login_check($username) {
        return $this->Users_Model->username_login_check($username);
    }

    function _password_login_check($password) {
        return $this->Users_Model->password_login_check($password);
    }

    function _username_check($username) {
        return $this->Users_Model->username_check($username);
    }

    function _email_check($email) {
        return $this->Users_Model->email_check($email);
    }

    function _random_string($length) {
		// Filtro para caracteres raros
        $base = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $max = strlen($base) - 1;
        $activation_code = '';
        while (strlen($activation_code) < $length)
            $activation_code .= $base{mt_rand(0, $max)};
        return $activation_code;
    }

    function username_check_ajax() {
        if ($this->input->is_ajax_request()) {
            $username = $this->input->post('nombre_usuario');
            if ($this->Users_Model->username_check($username)) {
                echo 'TRUE';
            } else {
                echo 'FALSE';
            }
        }
    }

}
?>