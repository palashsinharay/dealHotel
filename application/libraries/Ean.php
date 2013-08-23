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
class Ean {
	
        public  $cid;
	public  $apiKey;
	public  $local;
	public  $currency;
        public  $customerUserAgent;
        public  $customerIpAddress;
	
	function __construct($_cid = '55505' ,$_apiKey = "mshaz2hh57nw2xy8p3kd272j" ,$_local = "en_US",$_currency = "USD"){
       // $this->CI =& get_instance();
        //$this->CI->load->library('upload', $config);
        $this->cid = $_cid;
	$this->apiKey = $_apiKey;
	$this->local = $_local;
	$this->currency = $_currency;
        $this->customerUserAgent = trim($_SERVER['HTTP_USER_AGENT']);
        $this->customerIpAddress = trim($_SERVER['REMOTE_ADDR']);
	
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
            

            
            $header[] = "Accept: application/json";
            $header[] = "Accept-Encoding: gzip";
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
            curl_setopt($ch,CURLOPT_ENCODING , "gzip");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt( $ch, CURLOPT_URL, $url );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            $response = json_decode(curl_exec($ch),true);
            
            $curlinfo = curl_getinfo($ch); 
            
//            echo "<pre>";
//            print_r($curlinfo);
            
            if(array_key_exists('EanWsError',$response)){
                echo "<pre>";
                print_r($response);
                echo "<pre>";
                die();
                
            } else{
                return $response;  
            }
            
			
        }
        
        /*
         * funtion to get the list of hotels
         */
	function HotelLists($arrayInfo){
            
            $city = $arrayInfo['city'];
            $cityId = array_key_exists('cityId', $arrayInfo) ? $arrayInfo['cityId'] : '' ;
            $countryCode = $arrayInfo['countryCode'];
            $checkIn = $arrayInfo['checkIn'];
            $checkOut = $arrayInfo['checkOut'];
            $rooms = $arrayInfo['rooms'];
            $numberOfResult = array_key_exists('numberOfResult', $arrayInfo) ? $arrayInfo['numberOfResult'] :10;
            
            /*filtering
             * please check the Filtering Methods section for compleate list http://developer.ean.com/docs/read/hotel_list
             */
            $propertyCategory = array_key_exists('propertyCategory', $arrayInfo) ? $arrayInfo['propertyCategory'] : '' ;
            $amenities = array_key_exists('amenities', $arrayInfo) ? $arrayInfo['amenities'] : '' ;
            $maxStarRating = array_key_exists('maxStarRating', $arrayInfo) ? $arrayInfo['maxStarRating'] : '' ;
            $minStarRating = array_key_exists('minStarRating', $arrayInfo) ? $arrayInfo['minStarRating'] : '' ;
            $minRate = array_key_exists('minRate', $arrayInfo) ? $arrayInfo['minRate'] : '' ;
            $maxRate = array_key_exists('maxRate', $arrayInfo) ? $arrayInfo['maxRate'] : '' ;
            
            /*
             * sorting
             * please check the Sorting Options section for compleate list http://developer.ean.com/docs/read/hotel_list
             * 
             */
            $sort = $arrayInfo['sort'] = array_key_exists('sort', $arrayInfo) ? $arrayInfo['sort'] : 'NO_SORT' ;
            
           $str= 'http://api.ean.com/ean-services/rs/hotel/v3/list?minorRev=21&cid='.$this->cid.
                    '&apiKey='.$this->apiKey.'&customerSessionId&customerUserAgent&customerIpAddress&locale='.$this->local.
                    '&currencyCode='.$this->currency.
                    '&city='.$city.
                    '&destinationId='.$cityId.
                    '&countryCode='.$countryCode.
                    '&propertyCategory='.$propertyCategory.
                    '&amenities='.$amenities.
                    '&maxStarRating='.$maxStarRating.
                    '&minStarRating='.$minStarRating.
                    '&minRate='.$minRate.
                    '&maxRate'.$maxRate.
                    '&sort='.$sort.
                    '&supplierCacheTolerance=MED&arrivalDate='.$checkIn.
                    '&departureDate='.$checkOut.'&'.$rooms.'&numberOfResults='.$numberOfResult.
                    '&supplierCacheTolerance=MED_ENHANCED';
            
            return $this->apiCall($str);
	}
        
        /*
         * function to get hotelList more page
         */
        function HotelListsMore($arrayInfo){
            
            $customerSessionId = trim($arrayInfo['customerSessionId']);
            $cacheKey = trim($arrayInfo['cacheKey']);
            $cacheLocation = trim($arrayInfo['cacheLocation']);
            
            $str = "http://api.ean.com/ean-services/rs/hotel/v3/list?minorRev=21&cid=".$this->cid.
                    "&apiKey=".$this->apiKey.
                    "&customerUserAgent=".$this->customerUserAgent.
                    "customerIpAddress=".$this->customerIpAddress.
                    "&customerSessionId=".$customerSessionId.
                    "&locale=".$this->local.
                    "&currencyCode=".$this->currency.
                    "&cacheKey=".$cacheKey.
                    "&cacheLocation=".$cacheLocation;
            
            return $this->apiCall($str);
            
            
        }
        
        /*
         * function to get hoteldetails 
         */
        function HotelDetails($arrayInfo) {
            
            $hotelId = trim($arrayInfo['hotelId']);
            $customerSessionId = trim($arrayInfo['customerSessionId']);
            
            $str = "http://api.ean.com/ean-services/rs/hotel/v3/info?minorRev=21&cid=".$this->cid.
                    "&apiKey=".$this->apiKey.
                    "&customerUserAgent=".$this->customerUserAgent.
                    "&customerIpAddress=".$this->customerIpAddress.
                    "&customerSessionId=".$customerSessionId.
                    "&locale=".$this->local.
                    "&currencyCode=".$this->currency.
                    "&hotelId=".$hotelId.
                    "&options=0";
            
            return $this->apiCall($str);
        }
        
        /*
         * function to get hotel room Availability
         */
        function HotelRoomAvailability($arrayInfo){
            //TODO
            $hotelId = trim($arrayInfo['hotelId']);
            $customerSessionId = trim($arrayInfo['customerSessionId']);
            $checkIn = $arrayInfo['checkIn'];
            $checkOut = $arrayInfo['checkOut'];
            $rooms = $arrayInfo['rooms'];
            
            $str = "http://api.ean.com/ean-services/rs/hotel/v3/avail?minorRev=21&cid=".$this->cid.
                    "&apiKey=".$this->apiKey.
                    "&customerUserAgent=".$this->customerUserAgent.
                    "&customerIpAddress=".$this->customerIpAddress.
                    "&customerSessionId=".$customerSessionId.
                    "&locale=".$this->local.
                    "&currencyCode=".$this->currency.
                    "&hotelId=".$hotelId.
                    "&arrivalDate=".$checkIn.
                    "&departureDate=".$checkOut.
                    "&includeDetails=true&includeRoomImages=true&".$rooms;
            return $this->apiCall($str);
        }
        
        /*
         * function to book hotel room Reservation
         */
//        function HotelRoomReservation($arrayInfo) {
//            //TODO
//            $hotelId = trim($arrayInfo['hotelId']);
//            $customerSessionId = trim($arrayInfo['customerSessionId']);
//            $checkIn = $arrayInfo['checkIn'];
//            $checkOut = $arrayInfo['checkOut'];
//            $rooms = $arrayInfo['rooms'];
//            
//            $str = "http://api.ean.com/ean-services/rs/hotel/v3/avail?minorRev=21&cid=".$this->cid.
//                    "&apiKey=".$this->apiKey.
//                    "&customerUserAgent=".$this->customerUserAgent.
//                    "&customerIpAddress=".$this->customerIpAddress.
//                    "&customerSessionId=".$customerSessionId.
//                    "&locale=".$this->local.
//                    "&currencyCode=".$this->currency.
//                    "&hotelId=".$hotelId.
//                    "&arrivalDate=".$checkIn.
//                    "&departureDate=".$checkOut.
//                    "&supplierType=E".
//                    "&rateKey=ab20d08f-831a-4d64-9b71-9d71ae1b75c5".
//                    "&roomTypeCode=198058".
//                    "&rateCode=484072".
//                    "&chargeableRate=231.18".
//                    "&room1=2,5,7".
//                    "&room1FirstName=test".
//                    "&room1LastName=testers".
//                    "&room1BedTypeId=23".
//                    "&room1SmokingPreference=NS".
//
//                    "&email=test@yourSite.com".
//                    "&firstName=tester".
//                    "&lastName=testing".
//                    "&homePhone=2145370159".
//                    "&workPhone=2145370159".
//                    "&creditCardType"=CA
//                    "&creditCardNumber"=5401999999999999
//                    "&creditCardIdentifier"=123
//                    "&creditCardExpirationMonth"=11
//                    "&creditCardExpirationYear"=2012
//
//                    "&address1"=travelnow
//                    "&city"=Bellevue
//                    "&stateProvinceCode"=WA
//                    "&countryCode"=US
//                    "&postalCode"="98004";
//                    
//            
//            
//            
//            return $this->apiCall($str);
// 
//            
//        }
//        /*
//         * function to cancel hotel room Booking
//         */
        
        function HotelRoomCancellation($arrayInfo) {
            //TODO
        }
        
        function LocationInfo($arrayInfo) {
            
            //TODO
            $city = $arrayInfo["city"];
            
            $customerSessionId = '';
            $address = '';
            $stateProvinceCode = '';
            $countryCode = $arrayInfo['countryCode'];
            
             $str = "http://api.ean.com/ean-services/rs/hotel/v3/geoSearch?minorRev=21&cid=".$this->cid.
                    "&apiKey=".$this->apiKey.
                    "&customerUserAgent=".$this->customerUserAgent.
                    "&customerIpAddress=".$this->customerIpAddress.
                    "&customerSessionId=".$customerSessionId.
                    "&locale=".$this->local.
                    "&currencyCode=".$this->currency.
                    "&address=".$address.
                    "&city=".$city.
                    "&stateProvinceCode=".$stateProvinceCode.
                    "&countryCode=".$countryCode;
            return $this->apiCall($str);
        }

	

}






