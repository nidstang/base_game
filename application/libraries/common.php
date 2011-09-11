<?php

class Common
{
    function __construct() 
    {
        $this->CI = & get_instance();
    }
    
    function getUser()
    {
        if($this->CI->session->userdata('login') == TRUE)
        {
            $CurrentUser = $this->CI->session->userdata('name_session');
            
            return $CurrentUser;
        }
    }
    
    function getInfo()
    {
        $datos = $this->CI->db->get_where('users', array('sha1name' => $this->getUser()));
        return $datos->row();
    }
    
    function getRace()
    {
        $this->language = $this->CI->lang;
        $query = $this->getInfo();
        if($query->race == 0)
        {
            $race = $this->language->line('race0');
        }
        else
        {
            $race = $this->language->line('race1');
        }
       
        return $race;
    }
    
    //Metodos estaticos
    
    static function time()
    {
        return date("h:i:s A");
    }
    
    static function date()
    {
        return date("d-m-y");
    }
    
}
?>
