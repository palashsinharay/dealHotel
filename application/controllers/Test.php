<?php

class Test extends CI_Controller{
    function __construct()
    {
      parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        
        /* ------------------ */ 
        $config['upload_path'] = './assets/uploads/cv';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|txt';
        $this->load->library('upload', $config);
        $this->load->library('grocery_CRUD');
        $this->load->library('encrypt');
        $this->load->helper('captcha');
        //$this->load->helper('Encrypt');
		//$this->load->library('email');
		//$config['protocol'] = 'sendmail';
		//$config['charset'] = 'utf-8';
		//$config['wordwrap'] = TRUE;
		//$config['mailtype'] = 'html';
		//$this->email->initialize($this->config);

		$this->load->model('Cms');
                $this->load->model('Hotels');
 
    }	
    
    public function index() {
         //echo  ConvertCurrency(1, 'USD', 'INR');
        getCountryName();
    }
    
    public function getReagon()
    {
         $data['reagonData'] = $this->Hotels->get_region_id('in');
         echo "<pre>"; 
         print_r($data['reagonData']);
         echo "</pre>";  
    }
    
   
    
    
    
}
?>
 