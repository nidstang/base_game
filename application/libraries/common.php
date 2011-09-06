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
    
    static function time()
    {
        return date("h:i:s A");
    }
    
    function getInfo()
    {
        $datos = $this->CI->db->get_where('users', array('sha1name' => $this->getUser()));
        return $datos->row();
    }
}
?>
