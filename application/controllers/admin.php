<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller {
 
    function __construct()
    {
        
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
        $this->load->library('grocery_CRUD');
        $this->load->model('Cms');
       
    }
    
    function login() {
        
        
        $username = trim($this->input->post("username"));;
        $password = trim($this->input->post("password"));
        $data = $this->Cms->get_login($username);
        if($data != FALSE && $data->password == md5($password)){
            //return TRUE;
            $loginData = array(
                   'username'  => $data->username,
                   'email'     => $data->email,
                   'logged_in' => TRUE
               );

            $this->session->set_userdata($loginData);
            $this->index();
        }else{
            //return FALSE;
            $datalogin['message'] = "login failed";
            $this->load->view('fe/login.php',$datalogin);
        }
        
        //print_r($data);
    }
    
    public function logout(){
        $loginData = array(
                   'username'  => '',
                   'email'     => '',
                   'logged_in' => FALSE
               );

        $this->session->unset_userdata($loginData);
        redirect('admin/index');
    }
    
    public function check_login() {
            return $this->session->userdata('logged_in');
            
    }


    public function index() {
       if($this->check_login()){
            redirect('admin/cms_page');
        } else {
            $datalogin['message'] = NULL;
            $this->load->view('login.php',$datalogin);
        }
        
    }
    
    function _example_output($output = null) {
        
                    $this->load->view('example.php',$output);
                
                  
    }
 
   
//    function short() {
//        $crud = new grocery_CRUD();
//        $crud->set_table('employees');
//        $crud->columns('lastName','firstName','email','jobTitle');
//
//        $output = $crud->render();
//
//        $this->_example_output($output);
//    }
//    
//    function full() {
//        $crud = new grocery_CRUD();
//
//        //below code is for datagrid view
//        $crud->set_theme('datatables');
//        $crud->set_table('employees')
//            ->set_subject('employees_bal')
//            ->columns('lastName','firstName','email','jobTitle','file_url')
//            ->display_as('lastName','LName')
//            ->display_as('firstName','FName');
//        
//        
//        //below code is for edit and add
//        $crud->fields('lastName','firstName','email','file_url');
//        //$crud->required_fields('lastName','firstName');
//        
//        
//        
//        //below is validation
//        $crud->set_rules('lastName','last name nnn','numeric|required')
//             ->set_rules('firstName','first name nnn','integer|required')
//             ->set_rules('email','email nnn','valid_email|required');
//        //below code is for file upload
//        $crud->set_field_upload('file_url','assets/uploads/files');
//        
//        $output = $crud->render();
//
//        $this->_example_output($output);
//    }
    
 
    function cms_page() {
        $crud = new grocery_CRUD();
        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('dealcmspage')
        ->set_subject('CMS PAGE')
        ->columns('languageCode','PTitle','PContent','type','file_url','metaTitle','metaDesc','metaKey','status')               
        ->display_as('languageCode','Language Code')
        ->display_as('PTitle','Title')
        ->display_as('PContent','Content')
        ->display_as('type','Type')
        ->display_as('file_url','Image')
        ->display_as('metaTitle','Meta Title')
        ->display_as('metaDesc','Meta Description')
        ->display_as('metaKey','Meta Key')
        ->display_as('status','Status');
        //below code is for edit and add
        //$crud->add_fields('menutitle','content','type','metatitle','metadesc','metakey','status','pid','date','filename','cid');
        //$crud->edit_fields('menutitle','content','type','metatitle','metadesc','metakey','status','pid','date','filename','cid');
        $crud->fields('languageCode','PTitle','PContent','type','file_url','metaTitle','metaDesc','metaKey','status');
        $crud->required_fields('PTitle','PContent','status','file_url');	
        $crud->set_field_upload('file_url','assets/uploads/files');

        $output = $crud->render();
        $this->_example_output($output);
    }


//    function topmenu() {
//        $crud = new grocery_CRUD();
//
//        //below code is for datagrid view
//        $crud->set_theme('datatables');
//        $crud->set_table('topmenu')
//            ->set_subject('Topmenu PAGE')
//          //  ->columns('mid','title','p_mid','cid','status')
//           ->columns('mid','title','cid','status')
//            ->display_as('mid','Menu Id')
//            ->display_as('title','Title')
//           // ->display_as('p_mid','Parent Menu Id')
//			->display_as('cid','Linked With')
//			->display_as('status','Status')
//        	->display_as('Linked With','cid');
//        
//        //below code is for edit and add
//       // $crud->fields('title','p_mid','cid','status');
//         $crud->fields('title','cid','status');
//       // $crud->required_fields('title','p_mid','p_mid','status','cid');
//          $crud->required_fields('title','status','cid');
//        
//        $crud->set_relation('cid','cmspage','menutitle');
//        
//        //below is validation
//        //$crud->set_rules('lastName','last name nnn','numeric|required')
//        //     ->set_rules('firstName','first name nnn','integer|required')
//        //     ->set_rules('email','email nnn','valid_email|required');
//        //below code is for file upload
//        //$crud->set_field_upload('filename','assets/uploads/files');
//        
//        $output = $crud->render();
//        $this->_example_output($output);
//    }
	
//    function  upperslider() {
//    $crud = new grocery_CRUD();
//
//    //below code is for datagrid view
//    $crud->set_theme('datatables');
//    $crud->set_table('upperslider')
//        ->set_subject('Upper Slider PAGE')
//        ->columns('mediatitle','mediadetails','mediaimage','status','date')
//        ->display_as('mediatitle','Media Title')
//        ->display_as('mediadetails','Media Details')
//		->display_as('mediaimage','Media Image')
//		->display_as('status','Status')
//        ->display_as('date','Date');
//
//
//    //below code is for edit and add
//    $crud->fields('mediatitle','mediadetails','date','status','mediaimage');
//    $crud->required_fields('mediatitle','date','status');
//
//
//
//    //below is validation
//    $crud->set_rules('mediaimage','mediaimage ','required');
//    //     ->set_rules('firstName','first name nnn','integer|required')
//    //     ->set_rules('email','email nnn','valid_email|required');
//	
//    //below code is for file upload
//    $crud->set_field_upload('mediaimage','assets/uploads/files');
//
//    $output = $crud->render();
//    $this->_example_output($output);
//}

// 
//    function  categories() {
//    $crud = new grocery_CRUD();
//
//    //below code is for datagrid view
//    $crud->set_theme('datatables');
//    $crud->set_table('categories')
//        ->set_subject('Product Categories')
//        ->columns('categories_id','category_name','status')
//        ->display_as('categories_id','Categories ID')
//        ->display_as('category_name','Categories Name')
//        ->display_as('status','Status');
//        
//
//
//    //below code is for edit and add
//    $crud->fields('category_name','status');
//    //below is validation
//         $crud->set_rules('categories_name','Categories Mame ','required')
//               ->set_rules('status','Status','required');
//    //below code is for file upload
//    $output = $crud->render();
//    $this->_example_output($output);
//}

//    function featured_menu() {
//        $crud = new grocery_CRUD();
//
//        //below code is for datagrid view
//        $crud->set_theme('datatables');
//        $crud->set_table('featured_menu')
//            ->set_subject('Featured menu')
//            ->columns('featured_menu_id','id','icon','status')
//            ->display_as('featured_menu_id','featured menu id') 
//            ->display_as('id','menutitle')
//            ->display_as('icon','icon');
//            
//        
//         $crud->set_relation('id','cms_page','menutitle');
//        //below code is for edit and add
//        //$crud->fields('menutitle','icon');
//        //$crud->required_fields('menutitle','content');
//        
//        
//        
//        //below is validation
//        //$crud->set_rules('lastName','last name nnn','numeric|required')
//        //     ->set_rules('firstName','first name nnn','integer|required')
//        //     ->set_rules('email','email nnn','valid_email|required');
//        //below code is for file upload
//        $crud->set_field_upload('icon','assets/uploads/files');
//        
//        $output = $crud->render();
//        $this->_example_output($output);
//    }

 

  

}
 
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */