<?php
/**
* @author Poltero
* @package Moon of Blood
*/
class Game extends CI_Controller
{
    
     public $CurrentUser;
     public $datos;
     public $data = array();
	
	function __construct()
	{
		parent::__construct();
        //inicializamos variables en el controlador
        $this->CurrentUser = $this->common->getUser();
        $this->datos = $this->common->getInfo();
        $this->load->helper(array('form', 'url'));
	}
	
	function index()
	{
		return $this->visiongeneral();
	}
     
     function visiongeneral()
     {   
        $this->display->assign('visiongeneral_view', $this->data);   
     }
     
     function mapa()
     {
         
     }
     
     function duelo()
     {
         
     }
     
     function cazar()
     {
         
     }
     
     function tienda()
     {
         
     }
     
     function estadisticas()
     {
         
     }
     
     function opciones($select_idioma=null)
     {   
         $this->data = array(
                    'change_lang' => $this->lang->line('change_lang'),
                    'opt' => $this->lang->line('opt'),
                    'change' => $this->lang->line('change')
         );
         
         if($select_idioma!=null)
         {
             $this->load->model('option_model');
             
             if($this->option_model->change_lang($this->input->post('option'), $this->CurrentUser))
             {
                $this->entry->login($this->datos->name,$this->datos->pass);
             }
         }
         
         $this->display->assign('option_view', $this->data);
     }
     
     function clan()
     {
         
     }
     
     function mensajes()
     {
         
     }
     
     function salir()
     {
         $this->entry->logout();
         redirect('index/login');
     }
     
     function current()
     {
         echo "El usuario (encriptado) actual es: ". $this->CurrentUser ."<br>";
         echo "Cuyo nombre es: ". $this->datos->name ."<br>";
         echo "y el idioma seleccionado es ". $this->session->userdata('idioma');
     }
}

?>