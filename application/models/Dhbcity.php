<?php

class Dhbcity extends CI_Model {

    function __construct()
    {
        
    }
    
    function getUfi($city,$country_code){
       $query = $this->db->get_where('dhbcity', array('full_name' => $city, 'country_code' => $country_code), 1);
       return $query->result();
    }
//    function getCity($city,$country_code = 'in'){
//       
//         $q = $this->db->select('full_name,country_code')
//                  ->from('dhbcity')
//                  ->like('LOWER(full_name)', strtolower($city))
//                  ->get();
//        return $q->result();
//      
//    }
    
    function getCity($city){
       
        //echo $city;
         
        $query = $this->db->query("
SELECT a.full_name,a.country_code, b.country
FROM dhbcity a, dealcountries b
WHERE a.country_code=b.countryID AND
      (a.full_name LIKE '%".$city."%' OR b.country LIKE '%".$city."%')
LIMIT 100
    	");
        //print_r($query->result());

return $query->result();
      
    }
}
?>
