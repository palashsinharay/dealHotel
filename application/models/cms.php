<?php



class Cms extends CI_Model {

	public $_table = 'dealcmspage';
        public $_user = 'users';
	public $_dealNewsletter = 'dealnewsletter';
	public $_users = 'users';
	public $result = null;

	function __construct()
	{
		//parent::Model();
		parent::__construct();
	}


        
        //function for getting cms page content
	function get_login($username)
	{

            	$query = $this->db->get_where($this->_user, array('username' => $username));
                $this->result = $query->result();
                if($this->result != NULL){
                    return $this->result[0];
                }else{
                    return FALSE;
                }
                
                

	}

	//function for getting cms page content
	function get_page_content($id)
	{

		$query = $this->db->get_where($this->_table,array('id =' => $id));
		$this->result = $query->result();
		/*echo "<pre>";
		print_r($this->result);
		echo "</pre>";*/
		return $this->result[0];

	}
	
	//function for getting gallery page content
	function get_page_content_all()
	{
		$query = $this->db->get($this->_table);
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
	}	
       
        


    
        
        
     
	function get_user($id)
	{
		$query = $this->db->get_where($this->_users,array('id =' => $id));
		
		$this->result = $query->result();
		
                return $this->result[0];

	}
        function get_user_by_email($email)
	{
		$query = $this->db->get_where($this->_users,array('email =' => $email));
		
		$this->result = $query->result();
		
                return $this->result[0];

	}

	

        
        public function newsLetterInsert($email)
        {
            try
            {
// Checking in DB if the email exists or not 
		$this->query = $this->db->select('email')->from($this->_dealNewsletter);
		$this->db->where(array('email'=>$email));
		$query = $this->db->get();
		$rowcount = $query->num_rows();
                if($rowcount==0)
                {
                $this->db->set('email', $email);
                $this->db->set('status','1');
                $this->db->insert($this->_dealNewsletter);
                $i_ret=$this->db->insert_id();
                return $i_ret;
                }
            }
           catch(Exception $err_obj)
            {
                show_error($err_obj->getMessage());
            }
        }
        
        
        
function insert_register_data($posted)
{
        $i_ret_=0; ////Returns false

// echo "<pre>";
// print_r($posted);
// echo "</pre>";
// die();
        if(!empty($posted))
        {
                            $s_qry="Insert Into ".$this->_users." Set ";
                            $s_qry.="username=? ";
                            $s_qry.=",email=? ";
                            $s_qry.=",password=? ";
                            $s_qry.=",fname=? ";
                            $s_qry.=",lname=? ";
                            $s_qry.=",mobile=? ";
                            $s_qry.=",address=? ";
                            $s_qry.=",usertype=? ";
                            $this->db->query($s_qry,array(
                            $posted["email"],
                            $posted["email"],
                            base64_encode($posted["password"]),    
                            $posted["fname"],
                            $posted["lname"],
                            $posted["mobileno"],
                            $posted["address"],    
                           $posted["usertype"],
                           ));
//            echo $this->db->last_query();
//            die();
            $i_ret_=$this->db->insert_id();

        }
        unset($s_qry, $info );
        return $i_ret_;
}

function update_register_status($id)
{
            $data = array(
               'verified' => '1'
            );
        $this->db->where('id', $id);
        $result=$this->db->update($this->_users, $data);
        $count = $this->db->affected_rows(); //should return the number of rows affected by the last query
        return $count;
}
        
   
   
        

	}	


		

	


