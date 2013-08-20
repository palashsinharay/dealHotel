<?php

class Autocomplete extends CI_Controller{
    
    public function index() {
        $city = trim($_GET['term']);
        $this->load->model('Dhbcity');
        $cities = $this->Dhbcity->getCity($city);
        //print_r($cities);
        foreach ($cities as $key => $value) {
          $citiesArray[] = $value->full_name.",".$value->country_code; 
        }
        
       echo json_encode($citiesArray);
       
    }
}
?>
 