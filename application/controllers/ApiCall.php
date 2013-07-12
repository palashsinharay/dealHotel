<?php

class ApiCall extends CI_Controller{
    
    public function hotelList($param = 0) {
        
       // print_r($_POST);
                $arrayInfo["city"] = trim($_POST['fcb']);
               
                $arrayInfo['countryCode'] = 'US';
                $arrayInfo['checkIn'] = trim($_POST['fcc']);
                $arrayInfo['checkOut'] = trim($_POST['fcd']);
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
                
                $result = $this->ean->HotelLists($arrayInfo);
               echo json_encode($result);
    }
}
?>
