<?php

class ApiCall extends CI_Controller{
    
    public function hotelList($param = 0) {
        
                // print_r($_POST);
                $arrayInfo["city"] = trim($_POST['fcb']);
               // $arrayInfo["city"] = "kolkata";
                $arrayInfo['countryCode'] = 'IN';
                $arrayInfo['checkIn'] = trim($_POST['fcc']);
                //$arrayInfo['checkIn'] = "7/18/2013";
                $arrayInfo['checkOut'] = trim($_POST['fcd']);
                //$arrayInfo['checkOut'] = "7/20/2013";
                //$arrayInfo['rooms'] = "room1=1,3&room2=1,5";
                $arrayInfo['rooms'] = "room1=1,3";
                $arrayInfo['numberOfResult'] = 10;
                //$arrayInfo['propertyCategory'] = 1;
                //$arrayInfo['amenities'] = 1;

                //$arrayInfo['maxStarRating']=5;
                //$arrayInfo['minStarRating']=3;

                //$arrayInfo['minRate'] = 1000;
                //$arrayInfo['maxRate'] = 10000;

                //$arrayInfo['sort'] = "QUALITY";
                
               $result = $this->ean->HotelLists($arrayInfo);
               //echo "<pre>";
               //print_r($result);
                //echo json_encode($result);
                $str = '';
                foreach ($result['HotelListResponse']['HotelList']['HotelSummary'] as $value) {
                    //echo $value['hotelId'];
                    $hotelDetailURL = base_url('ApiCall/hotelDetails/'.$value['hotelId'].'/'.$result['HotelListResponse']['customerSessionId']);
                   $str .="<article>
							<header>
								<h2><a href='".$hotelDetailURL."'>".$value['name']."</a></h2>
								<figure><img src='http://images.travelnow.com".$value['thumbNailUrl']."'  alt='Placeholder' width='70' height='70'> <figcaption>01</figcaption></figure>
								<p><span class='rating-a a'>0/5</span>".$value['locationDescription']." </p>
							</header>
							<p>".$value['shortDescription']."</p>
							<p class='scheme-d'><span>$</span>".$value['lowRate']." <a href='./'>Book</a></p>
							<footer>
								<p>User Rating <span class='rating-b a'>0/5</span></p>
								<p class='link-b'><a href='./'>View Details</a></p>
							</footer>
						</article>";
                }
                
                echo $str;
    }
    public function hotelDetails($hotelId,$customerSessionId) {
       
        $arrayInfo['hotelId'] = $hotelId;
        $arrayInfo['customerSessionId'] = $customerSessionId;
        
        $result = $this->ean->HotelDetails($arrayInfo);
        
       
//        echo "<pre>";
//        print_r($result);
//        echo "</pre>";
         $data['HotelSummary']=$result['HotelInformationResponse']['HotelSummary'];
         $data['HotelDetails']=$result['HotelInformationResponse']['HotelDetails'];
         $data['HotelImages']=$result['HotelInformationResponse']['HotelImages'];
         $data['Facilities']=$result['HotelInformationResponse']['RoomTypes']['RoomType']['0']['roomAmenities']['RoomAmenity'];
         $data['Rooms']=$result['HotelInformationResponse']['RoomTypes']['RoomType'];
//        echo "<pre>";
//        print_r($data['HotelSummary']);
//        echo "</pre>";
         
        
        
        $this->load->view('common/header');
        $this->load->view('hotel-details',$data);
        $this->load->view('common/footer');
    }
}
?>
 