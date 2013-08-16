<?php

class ApiCallBooking extends CI_Controller{
    
    public function hotelListBooking($param = 0) {
        
                
                $arrayInfo['countryCode'] = 'be';
                $arrayInfo['checkIn'] = '2013-08-13';
                $arrayInfo['checkOut'] = '2013-08-15';
                
                
               $result = $this->booking->HotelLists($arrayInfo);
                echo "<pre>";
                print_r($result);
                echo json_encode($result);
                
    }
    
}
?>
 