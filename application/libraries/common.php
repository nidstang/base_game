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
}
?>
