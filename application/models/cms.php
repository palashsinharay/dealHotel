<?php



class Cms extends CI_Model {

	public $_table = 'dealcmspage';
	public $_meduiatable = 'media_gallery';
	public $_topmenu = 'topmenu';
	public $_products = 'products';
    public $_tender = 'tender';
	public $_resource_center = 'resource_center';
	public $_categories = 'categories';
	public $_lowerSlider = 'lower_slider';
    public $_user = 'users';
	public $_newstable = 'news';
	
	public $result = null;

	function __construct()
	{
		//parent::Model();
		parent::__construct();
	}
        function get_topmenu()
        {
                $query = $this->db->get_where($this->_topmenu,array ('status' => '1'));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
        }
        function get_product_cat()
        {
        $query = $this->db->get_where($this->_categories,array ('status' => '1'));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
        }
        function get_category_name($catID)
        {
                $query = $this->db->get_where($this->_categories,array ('categories_id' => $catID));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result[0];
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
       
        
        //function to get featured menu list
        function get_featured_menu() {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->join('featured_menu', 'featured_menu.id ='.$this->_table.'.id');
                $this->db->where('featured_menu.status', 1); 
                $query = $this->db->get();
            	
                $this->result = $query->result();
		
                return $this->result;
        }
        
        //function for getting gallery page content
	function get_gallery_content_all()
	{
		$query = $this->db->get_where($this->_meduiatable,array());
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
	}
	
        //function for getting gallery page content
	function get_news_list($limit=50)
	{
      $query = $this->db->get($this->_newstable, $limit);
		
		$this->result = $query->result();
	
		return $this->result;
	}	
	
	//function for getting cms page content
	function get_news_content($id)
	{
		$query = $this->db->get_where($this->_newstable,array('id =' => $id));
		
		$this->result = $query->result();
		
		return $this->result[0];
	}
	
        //function for getting gallery page content

	function get_fetured_product()
	{
		$query = $this->db->get_where($this->_product,array('featured' => 1),4);
		
                
		$this->result = $query->result();

		return $this->result;
	}        
        
        
        function get_productDetail($product_id) {
                $query = $this->db->get_where($this->_products,array('pid' => $product_id));
		
		$this->result = $query->result();

		return $this->result[0];
        }
     //function for getting gallery page content
	function get_productList($limit=50)
	{
                $query = $this->db->get($this->_products, $limit);
		
		$this->result = $query->result();
	
		return $this->result;
	}        
	function get_recruitment_content($id)
	{
		$query = $this->db->get_where($this->_job,array('id =' => $id));
		
		$this->result = $query->result();
		
                return $this->result[0];

	}
        function get_tender_list()
        {
            
            $query = $this->db->get_where($this->_tender,array());
	
            $this->result = $query->result();

            return $this->result;
        }
	
        //function for getting gallery page content
	function get_resource_center_list_all($limit,$type)
	{
		$query = $this->db->where('type', $type);
		$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get($this->_resource_center, $limit);
		
		$this->result = $query->result();

		return $this->result;
	}
        
        function get_page_basedonCatId($catName) 
        {
 		
		$query = $this->db->where('category_name', $catName);
		//$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get($this->_categories);
		
		$this->result = $query->result();       
		$cat_id=$this->result[0]->categories_id;
	
                //get list of all page based on cat_id 
		$query = $this->db->where('categories_id', $cat_id);
		//$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get($this->_table);
		
		$this->result = $query->result();
	
		return $this->result;

		   
        }
		
        public function get_lowerSlider_content()
        {

        $query = $this->db->get($this->_lowerSlider);

        $this->result = $query->result();

        foreach($this->result as $values){
         $object_cms = $this->get_page_content($values->id);
         $object_cms->image = $values->image;
         $object_cms->short_title = $values->short_title;
         $data[] = $object_cms;
   
        }
        $this->result = $data;

        return $this->result;


        }
        

	}	


		

	


