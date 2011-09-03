<?php
class Display
{   
    function __construct() 
    {
        $this->CI = & get_instance();
    }
    
    function assign($tpl, $datos=array())
    {
        $footer = array();
        
        $header = $this->topnav();
        
        $this->CI->parser->parse('top', $header);
        $this->CI->parser->parse($tpl, $datos);
        $this->CI->parser->parse('foot', $footer);
    }
    
    function topnav()
    {
        $datos_top = $this->CI->common->getInfo();
        $datos_top->juego = "Moon of blood";
        
        return $datos_top;
    }
}

?>
