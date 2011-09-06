<?php
/**
* Controlador de Login y registro
*/
class Index extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
          $this->load->library('form_validation');
	}
	
	function index($success='')
	{    
          $success = str_replace('_', ' ', $success);
          $data = array('error' => '', 'suceso' => $success);

		$this->form_validation->set_rules('nombre', 'Nombre','required');
		$this->form_validation->set_rules('pass', 'Password', 'required|sha1');
		
		$this->form_validation->set_message('required', "");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->parser->parse('login_view', $data);
		}
		else
		{
			$login = $this->entry->login($this->input->post('nombre'), $this->input->post('pass'));
               if($login==FALSE){
                   $data['error'] = 'Usuario o Pass inconrrectos';
                   $this->parser->parse('login_view', $data);
               }
		}
	}
     
	function registro()
	{	
          $data = array(); 
         
		$this->form_validation->set_rules('nombre', 'Nombre','required|trim|callback_username_Check|xss_clean');
		$this->form_validation->set_rules('pass', 'Password', 'required|trim|sha1');
          $this->form_validation->set_rules('passver', 'Repite Password', 'required|trim|matches[pass]');
          $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|callback_mail_Check');
          $this->form_validation->set_rules('race', 'Raza', 'required');
		
		$this->form_validation->set_message('required', "El campo de %s es requerido");
          $this->form_validation->set_message('valid_email', "¡Introduzca un Email valido!");
          $this->form_validation->set_message('matches', "Las passwords no coinciden");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->parser->parse('reg_view', $data);
		}
		else
		{
			$this->entry->registro($this->input->post('nombre'),$this->input->post('pass'),$this->input->post('email'),$this->input->post('race'));
               redirect('index/index/Registro_completado');
		}
	}
     
     function username_Check($username)
     {
         if($this->entry->validateUser($username))
         {
             $this->form_validation->set_message('username_Check', 'El nombre de usuario ya esta en uso!');
             return false;
         }
         else
         {
             return true;
         }
     }
     
     function mail_Check($email)
     {
         if($this->entry->validateMail($email))
         {
             $this->form_validation->set_message('mail_Check', 'El email ya esta en uso');
             return false;
         }
         else
         {
             return true;
         }
     }
}

?>