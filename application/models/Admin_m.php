<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'admin';
        $this->data['primary_key'] = 'username';
    }
    
    public function cek_login($user)
    {
        $num = $this->get_row(array('username' => $user['username'], 'password' => md5($user['password'])));
        if(isset($num)) {
            $array = array(
                'username' => $num->username,
                'id_role' => $num->id_role
            );
            $this->session->set_userdata($array);
            return true;
        } return false;
    }

}

/* End of file Admin.php */
