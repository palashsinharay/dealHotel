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
		//$this->load->library('email');
		//$config['protocol'] = 'sendmail';
		//$config['charset'] = 'utf-8';
		//$config['wordwrap'] = TRUE;
		//$config['mailtype'] = 'html';
		//$this->email->initialize($this->config);

		$this->load->model('Cms');
 
    }	
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
               
               //echo "<pre>";print_r($tt); echo "</pre>";
                
	    //  $this->load->view('welcome_message');
                $this->load->view('common/header');
                $this->load->view('hotel-list');
                $this->load->view('common/footer');
	}
        public function hotelDetails($param) {
                $this->load->view('common/header');
                $this->load->view('hotel-details');
                $this->load->view('common/footer');
        }
        
         public function _renderView($page,$data) {
                
/*                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $data['news'] = $this->Cms->get_news_list(1);
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
*/             // $data['top_menu']=$this->Cms->get_topmenu(); 
                //$data['product_cat']=$this->Cms->get_product_cat();
//                echo "<pre>";
//                print_r($data['top_menu']);
//		echo "</pre>";
//		die();
           
                 $this->load->view('common/header');
                 $this->load->view($page.'.php',$data);
                 $this->load->view('common/footer');
    }

    public function _renderViewContact($page,$data) {
                
                //$data['featured_menu'] = $this->Cms->get_featured_menu();
                //$data['news'] = $this->Cms->get_news_list(1);
                //$data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
               // echo "hiii";
                //$data['top_menu']=$this->Cms->get_topmenu();
//                $data['product_cat']=$this->Cms->get_product_cat();
//                $this->load->view('fe/common/product_gallery_header.php',$data);
                  $this->load->view('common/header');
                  $this->load->view($page.'.php',$data);
                  $this->load->view('common/footer');
      //          $this->load->view('fe/common/footer.php',$data);
    }
        
    public function page($id)
    {
                $data['pageDetail'] = $this->Cms->get_page_content($id);
//		echo "<pre>";
//                print_r($data['pageDetail']);
//		echo "</pre>";
//		die();
                switch ($data['pageDetail']->type) {
                    case 'content':$this->_renderView('page',$data);
                        break;
                    case 'contact':$this->_renderViewContact('contact',$data);
                        break;
                   default:
                      $this->_renderView('inner_page',$data);
                        break;
                                                    }
 	    
    }
    public function newsletter()
    {
                $email=$_POST['na'];
                $i_newid=$this->Cms->newsLetterInsert($email);
 //               echo $i_newid;
                if($i_newid)
                {
                    echo " You are subscribed for the news latter .";
                }
                else
                {
                    echo " Newsletter Subscription failed !!!!";
                }
                
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */