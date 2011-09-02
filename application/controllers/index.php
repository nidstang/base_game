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
	
	function index()
	{    
          $data = array('error' => '');

		$this->form_validation->set_rules('nombre', 'Nombre','required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		
		$this->form_validation->set_message('required', "El campo de %s es requerido");
		
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
     
	function Registro()
	{	

		$this->form_validation->set_rules('nombre', 'Nombre','callback_username_Check');
		$this->form_validation->set_rules('pass', 'Password', 'callback_pass_Check');
		
		$this->form_validation->set_message('required', "El campo de %s es requerido");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('reg_view');
		}
		else
		{
			$this->load->model('registro');
			if($this->registro->sendUser($_POST))
			{
				echo "registro listo";
				redirect("index.php");
			}
			else
			{
				echo "ocurrio un error";
			}
		}
	}

}

?>