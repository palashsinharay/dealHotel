<?php

class Dhbcity extends CI_Model {

    function __construct()
    {
        
    }
    
    function getUfi($city,$country_code){
       $query = $this->db->get_where('dhbcity', array('full_name' => $city, 'country_code' => $country_code), 1);
       return $query->result();
    }
}
?>
