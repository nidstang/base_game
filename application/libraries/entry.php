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
            $this->CI->session->set_userdata(array('login' => TRUE, 'name_session' => $login->row()->sha1name, 'idioma' => $login->row()->lang));
            redirect('game');
        }
        else
        {
            return FALSE;
        }
        
       
    }
    
    function registro($username, $password, $email, $race)
    {
        //ingresamos los datos del nuevo usuario en la BD
        
        $namesha1 = sha1($username);
        
        $dataNewUser = array(
                        'name' => $username,
                        'sha1name' => $namesha1,
                        'pass' => $password,
                        'mail' => $email,
                        'race' => $race
        );
        
        return $this->CI->db->insert('users', $dataNewUser);
    }
    
    function validateUser($user)
    {
        $query = $this->CI->db->get_where('users', array('name' => $user));
        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function validateMail($mail)
    {
        $query = $this->CI->db->get_where('users', array('mail' => $mail));
        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
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
