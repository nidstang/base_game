<?php
class Access
{
    function identified()
    {
        $CI = &get_instance();
        
        $private = array('game');
        
        if($CI->session->userdata('login')==true && $CI->router->method == 'login')
        {
            redirect('game');
        }
        if($CI->session->userdata('login')!=true && $CI->router->method != 'login' && in_array($CI->router->class, $private))
        {
            redirect('index/login');
        }
    }
    
    function languages()
    {
        $this->CI = &get_instance();
        
        $lang = $this->CI->session->userdata('idioma');
        if(empty($lang))
        {
            $lang = "spanish";
            $this->CI->session->set_userdata(array('idioma' => $lang));
        }
        
        $this->CI->lang->load('game', $lang);
    }
}
?>
