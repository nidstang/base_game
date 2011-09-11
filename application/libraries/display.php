<?php
class Display
{   
    public $idioma;
    
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
        $this->language = $this->CI->lang;
        
        $datos_top = $this->CI->common->getInfo();
        $datos_top->juego = $this->language->line('game_name');
        $datos_top->race_name = $this->CI->common->getRace();
        $datos_top->menu_opt = array(
                        array(
                            'overview' => $this->language->line('overview'),
                            'inv' => $this->language->line('inv'),
                            'shop' => $this->language->line('shop'),
                            'map' => $this->language->line('map'),
                            'duelo' => $this->language->line('duelo'),
                            'hunt' => $this->language->line('hunt'),
                            'ali' => $this->language->line('ali'),
                            'mensj' => $this->language->line('mensj'),
                            'forum' => $this->language->line('forum'),
                            'sts' => $this->language->line('sts'),
                            'opt' => $this->language->line('opt'),
                            'logout' => $this->language->line('logout')
                            ),
                    );
        
        return $datos_top;
    }
}

?>
