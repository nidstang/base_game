<?php
class Option_model extends CI_Model
{
    function __construct() 
    {
        parent::__construct();
    }
    
    function change_lang($lang,$user)
    {
        if($this->db->update('users', array('lang' => $lang), array('sha1name' => $user)))
        {
            return true;
        }
    }
}
?>
