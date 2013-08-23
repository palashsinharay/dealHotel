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
    public function search($numberOfResult = 150)
    {
                $arrayInfo["city"] = trim($_POST['fea']);
                //$arrayInfo["city"] = "New Delhi";
                //$arrayInfo['countryCode'] = 'IN';
                //$arrayInfo['countryCode'] = strstr(trim($_POST['fea']), ',',FALSE);
                //$arrayInfo['countryCode'] = substr($arrayInfo['countryCode'],1);
                $arrayInfo['checkIn'] = trim($_POST['fcc']);
                //$arrayInfo['checkIn'] = "8/13/2013";
                $arrayInfo['checkOut'] = trim($_POST['fcd']);
                //$arrayInfo['checkOut'] = "8/15/2013";
                //$arrayInfo['rooms'] = "room1=1,3&room2=1,5";
                //$arrayInfo['rooms'] = "room1=1,3";
                //$arrayInfo['numberOfResult'] = $numberOfResult;
                
	    //  $this->load->view('welcome_message');
                $this->load->view('common/header');
                $this->load->view('hotel-list',$arrayInfo);
                $this->load->view('common/footer');
	}
//        public function hotelDetails($hotelId,$customerSessionId) {
//            
//                
//                
//                $this->load->view('common/header');
//                $this->load->view('hotel-details');
//                $this->load->view('common/footer');
//        }
    public function index() {
      $this->load->view('index.php');  
    }


    public function _renderView($page,$data) 
    {
                
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

    public function _renderViewContact($page,$data)
    {
                
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
    
    public function _renderViewRegister($page,$data)
    {
                
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

    public function register()
    {
             $this->_renderViewRegister('register',$data);
                
    }

    public function registerUser()
    {
           //  $this->_renderViewRegister('register',$data);
           
                    try
                    {
                            unset($_POST['action']);
                            $posted=array();
                            $posted["usertype"]  	= trim($this->input->post("usertype"));
                            $posted["fname"]            = trim($this->input->post("fname"));
                            $posted["lname"]    	= trim($this->input->post("lname"));
                            $posted["address"]          = trim($this->input->post("address"));
                            $posted["mobileno"]         = trim($this->input->post("mobileno"));
                            $posted["email"]            = trim($this->input->post("email"));
                            $posted["password"]            = trim($this->input->post("password"));
//                            echo "hello";
//                            echo "<pre>";
//                            print_r($posted);
//                            echo "</pre>";
//                            die();
                                                           
                         $i_newid=$this->Cms->insert_register_data($posted);
                         //echo $i_newid;
                         if($i_newid!=0){
  // send email for verification
echo $message='
                            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
                            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                            <html xmlns="http://www.w3.org/1999/xhtml">
                            <head></head>
                            <body>
                            <table>
                            <tr><td><h2> DealHotel User Registration </h2></td></tr>
                            <tr><td>Click on the below link to veify your registration </td></tr>
                            <tr><td><a href="'.  base_url('welcome/verifyMe/'.$i_newid).'">Verify Yourself</a></td></tr>
                            </table>
                            </body>
                            </html>
                            ';

//                        $this->load->library('email');
//                        $email_setting = array('mailtype'=>'html');
//                        $this->email->initialize($email_setting);
//                        // Give Probir da's email id here
//                        $this->email->from('sahani.bunty9@gmail.com', 'Dealhotel');
//                        //$this->email->to($data['userDetail']->email);
//                        $this->email->to($posted["email"]);
//                        //Give Probir da's email id here
//                        //$this->email->bcc('palash.sinharay2000@gmail.com');
//                        $this->email->subject('Dealhotel :');
//                        $this->email->message($message);
//                        if($this->email->send())
//                        {
//                            echo "please check your email for verification link "; 
//                        }
//                       else {
//                               echo "Message sending failed !"; 
//                            } 
                        
                   
                             
                         }
                         
                                                    					
                    }
                    catch(Exception $err_obj)
                    {
                                    show_error($err_obj->getMessage());
                    }
        
        
                
    }
    
    public function verifyMe($id) 
    {
        //echo "you r verified";
        
        $i_updateid=$this->Cms->update_register_status($id);
        $data['user_details'] = $this->Cms->get_user($id);
//        echo "<pre>";
//        print_r($data['user_details']);
//        echo $data['user_details']->email;
//        echo "</pre>";
        
        
//       if($i_updateid!=0)
//       {echo "verified !";}
        
         if($i_updateid!=0)
                       {
             
 
 
                         $message='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<table>
<tr><td colspan="2"><h2> DealHotel User Registration </h2></td></tr>
<tr><td colspan="2">Congradulation !!!! Your registration is successfully verified .</td></tr>
</table>
</body>
</html>
';
 
                           
                        $this->load->library('email');
                        $email_setting = array('mailtype'=>'html');
                        $this->email->initialize($email_setting);
                        // Give Probir da's email id here
                        $this->email->from('sahani.bunty9@gmail.com', 'Dealhotel');
                        //$this->email->to($data['userDetail']->email);
                        $this->email->to($data['user_details']->email);
                        //Give Probir da's email id here
                        //$this->email->bcc('palash.sinharay2000@gmail.com');
                        $this->email->subject('Dealhotel :');
                        $this->email->message($message);
                        $this->email->send();
                           
                       }
        
        
    }

    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */