<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                $arrayInfo["city"] = 'kolkata';
               
                $arrayInfo['countryCode'] = 'US';
                $arrayInfo['checkIn'] = "07/15/2013";
                $arrayInfo['checkOut'] = "07/16/2013";
                //$arrayInfo['rooms'] = "room1=1,3&room2=1,5";
                $arrayInfo['rooms'] = "room1=1,3";
                $arrayInfo['numberOfResult'] = 10;

                //$arrayInfo['propertyCategory'] = 1;
                //$arrayInfo['amenities'] = 1;

                $arrayInfo['maxStarRating']=5;
                $arrayInfo['minStarRating']=3;

                //$arrayInfo['minRate'] = 1000;
                //$arrayInfo['maxRate'] = 10000;

                $arrayInfo['sort'] = "QUALITY";
            
                //$this->load->library('ean');
                $this->load->library('myclass');
                
             // $tt = $this->ean->HotelLists($arrayInfo);
               
             //  echo "<pre>";print_r($tt); echo "</pre>";
                
	    //  $this->load->view('welcome_message');
                $this->load->view('common/header');
                $this->load->view('hotel-list');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */