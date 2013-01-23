<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

   
    function __construct() {
        parent::__construct();
        $this->load->library('skebby');
    }

    public function index() {
        $this->skebby->set_recipients(array('393291677525'));
        $this->skebby->set_text('Test SMS');
        $sms = $this->skebby->send_sms();
        $credito = $this->skebby->get_credit();
        var_dump($sms);
        var_dump($credito);
    }

 
    
   

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */