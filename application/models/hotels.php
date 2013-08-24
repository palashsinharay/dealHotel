<?php



class Hotels extends CI_Model {

	public $_dealbookingdetails = 'dealbookingdetails';
        public $_countries_ip = 'countries_ip';
        public $_dhbhoteldetails = 'dhbhoteldetails';
       
	public $result = null;

	function __construct()
	{
		//parent::Model();
		parent::__construct();
	}


      

	
	//function for getting gallery page content
	function get_ids_recently_booked()
	{
		$SqlInfo="SELECT dbd.HotelID, cip.country_name FROM  dealbookingdetails dbd, countries_ip cip WHERE ('".str_replace(".", "", getenv("REMOTE_ADDR")) ."' BETWEEN cip.ip_from AND cip.ip_to) AND cip.country_code = dbd.countryCode  ORDER BY dbd.BTime DESC";
                $query = $this->db->query($SqlInfo);
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();
//                echo "<pre>";
//                print_r($this->result);
//		echo "</pre>";
                //return $this->result;
                
               
                
            foreach ($this->result as $value)
                {
                    $_SESSION['CountryName'] = $value->country_name;
                    $data['recently_booked_hotel_details'][]=$this->get_hoteldetails_recently_booked($value->HotelID);
                }
                $this->result=$data['recently_booked_hotel_details'];
//                echo "<pre>";
//                print_r($this->result);
//		echo "</pre>";      
//                die();
                return $this->result;
                
	}
        
        function get_hoteldetails_recently_booked($id)
	{

		$query = $this->db->get_where($this->_dhbhoteldetails,array('id =' => $id));
		$this->result = $query->result();
		//echo $this->db->last_query();
//                echo "<pre>";
//		print_r($this->result);
//		echo "</pre>";
               // die();
	       return $this->result;

	}
       
        function get_top_destination($country)
	{
            $query = $this->db->query('SELECT * FROM dhbtopdestination WHERE Status = \'1\' LIMIT 4');
            $this->result = $query->result();
            return $this->result;
	}        


    
        
        
     
        
   
   
        

	}	


		

	


