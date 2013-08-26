<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
The MIT License (MIT)

Copyright (c) 2013 Palash Sinha Ray

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

 */
class Booking {
	
        public  $userId;
	public  $password;
	public  $local;
	public  $currency;
        
	
	function __construct($_userId = 'ninioe' ,$_password = "9887"){
        //$this->CI =& get_instance();
        //$this->CI->load->library('upload', $config);
        $this->userId  = $_userId;
	$this->password = $_password;
	
	
	}
   
        /*
         * function for API call using curl
         */
	function apiCall($url){
            
            $url = str_replace(" ", '%20', $url);   // url encode for space
//            $ch=curl_init($url);
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            $r=curl_exec($ch);
//            curl_close($ch);
//            $response = json_decode($r,true);
            

            
//            $header[] = "Accept: application/json";
//            $header[] = "Accept-Encoding: gzip";
//            $ch = curl_init();
//            curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
//            curl_setopt($ch,CURLOPT_ENCODING , "gzip");
//            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
//            curl_setopt( $ch, CURLOPT_URL, $url );
//            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//            $response = json_decode(curl_exec($ch),true);
            
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($curl, CURLOPT_AUTOREFERER, 0);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60);
            curl_setopt($curl, CURLOPT_TIMEOUT, 60);
            curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($curl, CURLOPT_COOKIESESSION, TRUE);
            curl_setopt($curl, CURLOPT_COOKIE, session_name() . '=' . session_id());
            curl_setopt($curl, CURLOPT_URL, $url);

   // $a = curl_exec ($curl);

    $response = json_decode(curl_exec ($curl),true);
    
            
            $curlinfo = curl_getinfo($curl); 
            
//            echo "<pre>";
//            print_r($curlinfo);
            
            if(array_key_exists('code',$response)){
                echo "<pre>";
                print_r($response);
                echo "<pre>";
                die();
                
            } else{
                return $response;  
            }
            
			
        }
        
        function HotelDetailsDateless($arrayInfo) {
            $str='https://'.$this->userId.':'.$this->password.'@distribution-xml.booking.com/json/bookings.getHotels?'.
                    '&languagecodes=en-us'.
                    '&city_ids='.$city.
                    '&countrycodes='.$countryCode.
                    '&rows='.$numberOfResult;
            return $this->apiCall($str);
        }
        
        /*
         * funtion to get the list of hotels
         */
	function HotelAvailability($arrayInfo){
            $dateIN = date_create($arrayInfo['checkIn']);
            $dateOUT = date_create($arrayInfo['checkOut']);
                       
            $city = $arrayInfo['city'];
            $countryCode = $arrayInfo['countryCode'];
            $checkIn = date_format($dateIN, 'Y-m-d');
            $checkOut = date_format($dateOUT, 'Y-m-d');
            $rooms = $arrayInfo['rooms'];
            $no_of_rooms = $arrayInfo['no_of_rooms'];
            $adults = $arrayInfo['adults'];
            $child = $arrayInfo['child'];
            $numberOfResult = $arrayInfo['numberOfResult'];
            
            //https://distribution-xml.booking.com/json/bookings.getHotelAvailability?arrival_date=2013-08-13&departure_date=2013-08-15&countrycodes=be
           $str='https://'.$this->userId.':'.$this->password.'@distribution-xml.booking.com/json/bookings.getHotelAvailability?'.
                'arrival_date='.$checkIn.
                '&departure_date='.$checkOut.
                '&available_rooms='.$no_of_rooms.
                '&guest_qty='.$adults.
                '&children_qty='.$child.
                '&city_ids='.$city.
                '&countrycodes='.$countryCode.
                '&rows='.$numberOfResult;
                    
            
            return $this->apiCall($str);
	}
        
        function HotelDetails($hotelidsstr) {
            $str='https://'.$this->userId.':'.$this->password.'@distribution-xml.booking.com/json/bookings.getHotels?'.
                    'hotel_ids='.$hotelidsstr.
                    '&languagecodes=en-us';
            return $this->apiCall($str);
        }
        
        function HotelDescription($hotelidsstr) {
            $str='https://'.$this->userId.':'.$this->password.'@distribution-xml.booking.com/json/bookings.getHotelDescriptionTranslations?'.
                    'hotel_ids='.$hotelidsstr;
                    //'&languagecodes=en-us';
            return $this->apiCall($str);
        }
        
        function HotelPhoto($hotelidsstr) {
            $str='https://'.$this->userId.':'.$this->password.'@distribution-xml.booking.com/json/bookings.getHotels?'.
                    'hotel_ids='.$hotelidsstr.
                    '&languagecodes=en-us';
            return $this->apiCall($str);
        }

}






