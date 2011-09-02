<?php
/**
* 
*/
class Game extends CI_Controller
{
    
     public $CurrentUser;
	
	function __construct()
	{
		parent::__construct();
          //inicializamos variables en el controlador
          $this->CurrentUser = $this->common->getUser();
	}
	
	function index()
	{
		return $this->visiongeneral();
	}
     
     function visiongeneral()
     {
         $data = array('nombre' => 'Moon of Blood', 'hora_servidor' => Common::time());
         
         $this->display->assign('visiongeneral_view', $data);
         
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
     
     function opciones()
     {
         
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
         redirect('index');
     }
     
     function prueba()
     {
         echo $this->CurrentUser;
     }
}

?>