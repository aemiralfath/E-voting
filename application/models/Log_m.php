<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'login_log';
        $this->data['primary_key'] = 'id';
    }
    

}

/* End of file Log_m.php */
