<?php
class Entry
{
    function __construct() 
    {
        $this->CI = & get_instance();
        $this->CI->load->helper('url');
    }
    
    function login($user, $pass)
    {
        //comprobamos que ususario y contraseña estan en la db
        $login=$this->CI->db->get_where('users', array('name' => $user, 'pass' => $pass));
        
        if($login->num_rows()>0)
        {
            $this->CI->session->sess_destroy();
            $this->CI->session->set_userdata(array('login' => TRUE, 'name_session' => $login->row()->md5name));
            redirect('game');
        }
        else
        {
            return FALSE;
        }
        
       
    }
    
    function registro()
    {
        //ingresamos los datos del nuevo usuario en la BD
        return $this->CI->db->insert('users', $_POST);
    }


    function logout()
    {
        //destruimos la sesion actual
        $this->CI->session->sess_destroy();
    }
    
    function lost_password()
    {
        
    }
}
?>
