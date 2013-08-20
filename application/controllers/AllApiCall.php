<?php

class AllApiCall extends CI_Controller{
    
    public function compareStrings($input, $words, $exclude = array()){
	// no shortest distance found, yet
	$shortest = -1;
	
	$input = strtolower($input);
	if(!empty($exclude)) $input = str_ireplace($exclude, "", $input);

	// loop through words to find the closest
	foreach ($words as $key => $word) {
		$stWord = strtolower($word['name']);
		if(!empty($exclude)) $stWord = str_ireplace($exclude, "", $stWord);
	
		// calculate the distance between the input word,
		// and the current word
		$lev = levenshtein($input, $stWord);

		// check for an exact match
		if ($lev == 0) {

			// closest word is this one (exact match)
			$closest = $word['name'];
			$shortest = 0;
                        $delkey=$key;
			// break out of the loop; we've found an exact match
			break;
		}

		// if this distance is less than the next found shortest
		// distance, OR if a next shortest word has not yet been found
		if ($lev <= $shortest || $shortest < 0) {
			// set the closest match, and shortest distance
			$closest  = $word['name'];
			$shortest = $lev;
                        $delkey=$key;
                        
		}
	}

	return array("closest" => $closest, "shortest" => $shortest, "delkey" =>$delkey);
    }
    
    public function formInput($numberOfResult = 150) {
                
                $arrayInfo["city"] = strstr(trim($_POST['fcb']), ',', true);
                //$arrayInfo["city"] = "New Delhi";
                //$arrayInfo['countryCode'] = 'IN';
                $arrayInfo['countryCode'] = strstr(trim($_POST['fcb']), ',',FALSE);
                $arrayInfo['countryCode'] = substr($arrayInfo['countryCode'],1);
                $arrayInfo['checkIn'] = trim($_POST['fcc']);
                //$arrayInfo['checkIn'] = "8/13/2013";
                $arrayInfo['checkOut'] = trim($_POST['fcd']);
                //$arrayInfo['checkOut'] = "8/15/2013";
                //$arrayInfo['rooms'] = "room1=1,3&room2=1,5";
                $arrayInfo['rooms'] = "room1=1,3";
                $arrayInfo['numberOfResult'] = $numberOfResult;
                
                $this->AllsupplierHotelList($arrayInfo);
    }

    public function AllsupplierHotelList($arrayInfo) {
                $this->session->unset_userdata('hotels');
                
                
                $result['EAN'] = $this->ean->HotelLists($arrayInfo);
               if(array_key_exists('EanWsError', $result['EAN']['HotelListResponse'])){
                if($result['EAN']['HotelListResponse']['EanWsError']['verboseMessage'] == 'Multiple locations found, please refine your search criteria.')
                    {
                    $arrayInfo['cityId'] = $result['EAN']['HotelListResponse']['LocationInfos']['LocationInfo'][0]['destinationId'];
                    $result['EAN'] = $this->ean->HotelLists($arrayInfo);
                    }
               }
//                echo '<pre>';
//                print_r($result);
//                echo '</pre>';
//                die();
                
               
               $this->load->model('Dhbcity');
                $city = $this->Dhbcity->getUfi($arrayInfo["city"],$arrayInfo['countryCode']);
                $arrayInfo['city'] = $city[0]->ufi;
                
                $hotelAvailable = $this->booking->HotelAvailability($arrayInfo);
        
        foreach ($hotelAvailable as $key => $value) {
            $hotelids[] = $value['hotel_id'];
        }
        $hotelidsstr = implode(',', $hotelids);
        $result['Booking'] = $this->booking->HotelDetails($hotelidsstr);
//                echo "<pre>";
//                print_r($result);
//                echo "</pre>";
//                //echo json_encode($result);
//                die();
//               $result['BookingDesc'] = $this->booking->HotelDescription($hotelidsstr);
//              // die();
//               foreach ($result['Booking'] as $key => $value) {
//                   
//                   foreach ($result['BookingDesc'] as $value2) {
//                       
//                       if($value['hotel_id'] == $value2['hotel_id'])
//                       $result['Booking'][$key]['desc'] = $value2['description'] ;
//                   }
//                   
//               }
               
//                echo "<pre>";
//                print_r($result['BookingDesc']);
//                echo "</pre>";
                //echo json_encode($result);
                //die();
        foreach ($result['EAN']['HotelListResponse']['HotelList']['HotelSummary'] as $value) {
                  $hotelnameEAN[] = array(
                      'supplier' => 'expedia.com',
                      'hotelId' =>$value['hotelId'],
                      'name' =>$value['name'],
                      'address' =>$value['address1'],
                      'city' =>$value['city'],
                      'postalCode' =>$value['postalCode'],
                      'countryCode' =>$value['countryCode'],
                      'CurrencyCode' =>$value['rateCurrencyCode'],
                      'latitude' =>$value['latitude'],
                      'longitude' =>$value['longitude'],
                      'hotelRating' =>$value['hotelRating'],
                      'thumbNailUrl' =>$value['thumbNailUrl'],
                      'shortDescription'=>strip_tags(htmlspecialchars_decode($value['shortDescription'])),
                      'url' => $value['deepLink'],
                      'highRate' =>$value['highRate'],
                      'lowRate' =>$value['lowRate']);
                  
               }
//                echo "<pre>";
//                print_r($hotelnameEAN);
//                echo "</pre>";
                
        foreach ($result['Booking'] as $value) {
                  $hotelnameBooking[] = array(
                      'supplier' => 'booking.com',
                      'hotelId' =>$value['hotel_id'],
                      'name' =>$value['name'],
                      'address' =>$value['address'],
                      'city' =>$value['city'],
                      'postalCode' =>$value['zip'],
                      'countryCode' =>$value['countrycode'],
                      'hotelRating' =>$value['class'],
                      'CurrencyCode' =>$value['currencycode'],
                      'latitude' =>$value['location']['latitude'],
                      'longitude' =>$value['location']['longitude'],
                      //'thumbNailUrl' =>$value['thumbNailUrl'],
                      //'shortDescription'=>$value['shortDescription'],
                      'url' => $value['url'],
                      'highRate' =>$value['maxrate'],
                      'lowRate' =>$value['minrate']);
                  
               }
//                echo "<pre>";
//                print_r($hotelnameBooking);
//                echo "</pre>";
                
        //exclude those words
        $exclude = array(" ", "\"", "'", "&", "-", "_", "and", "casino", "club", "spa", "the", "hotel");


        $commonMatch = 0;
        foreach ($hotelnameBooking as $key => $input) {
    
            //do the string compare, get the closest match and the similarity level (shortest=0 means Exact match)
            $ret = $this->compareStrings($input['name'], $hotelnameEAN, $exclude);

            //echo "<hr>";
            //echo "Input word:".$input['name']."<br>\n";
            if ($ret['shortest'] == 0 || $ret['shortest'] == 1 ||  $ret['shortest'] == 2) {
                $commonMatch++;
                //echo "Exact match found: $ret[closest]\n";
                //echo "<br>";
                //merging logic
                $hotelnameBooking[$key] = null;
                $hotelnameBooking[$key][] = $input;
                array_push($hotelnameBooking[$key], $hotelnameEAN[$ret['delkey']]);
                unset($hotelnameEAN[$ret['delkey']]);
                }

             else {
            	$hotelnameBooking[$key] = null;
                $hotelnameBooking[$key][] = $input;
            }
    
        }
        foreach ($hotelnameEAN as $key => $value) {
            
            $hotelnameEAN[$key] = null;
            $hotelnameEAN[$key][] = $value;
        }
        
        $finalResult = array_merge($hotelnameBooking,$hotelnameEAN);
       
        $this->session->set_userdata(array('hotels' => $finalResult));
        //echo $commonMatch." common match hotels";
        //echo "<pre>"; print_r($this->session->all_userdata()) ; echo "</pre>";
        //redirect('/HotelList/index','refresh');
        $this->session->unset_userdata('hotels_shorted');
        $this->hotelPagination($offset = 1,$finalResult);

                
                
    }
    
    public function hotelShort($type,$order) {
        //$hotelsArray = $this->session->userdata('hotels');
        $hotelsArray = $this->session->userdata('hotels_shorted') != NULL ? $this->session->userdata('hotels_shorted') : $this->session->userdata('hotels') ;
//                echo "<pre>"; 
//                print_r($hotelsArray); 
//                echo "</pre>";
        
        foreach ($hotelsArray as $key => $row) {
        $lowRate[]  = array( 'rate' => $row[0]['lowRate'],'hotelId' => $row[0]['hotelId'] );
        //$highRate[] = array( 'rate' => $row[0]['highRate'],'hotelId' => $row[0]['hotelId'] );
        $hotelRating[] = array( 'star' => $row[0]['hotelRating'],'hotelId' => $row[0]['hotelId'] );
      }
      
        if($type == 'price'){
          $shortparameter = $lowRate;
        }  elseif ($type == 'star') {
          $shortparameter = $hotelRating;
        } else {
            echo 'no short type parameter passed';
                  die();
        }
            
              if($order == 'l2h'){
                sort($shortparameter);   
              }  elseif ($order == 'h2l') {
                 rsort($shortparameter); 
              } else {
                  echo 'no short order parameter passed';
                  die();
              }
                          
//            echo 'gandu';
//            echo '<pre>';
//            print_r($shortparameter);
//            die();
                foreach ($shortparameter as $row) {
                    foreach ($hotelsArray as $key => $value) {

                       if($row['hotelId'] == $value[0]['hotelId']){
                           $AllHotelsSorted[] = $value;
                       }
                    }
               }
           $this->session->unset_userdata('hotels_shorted');
           $this->session->set_userdata(array('hotels_shorted' => $AllHotelsSorted));
           $this->hotelPagination($offset = 1,$AllHotelsSorted);
//            echo 'gandu2';
//            echo '<pre>';
//            print_r($AllHotelsSorted);
        
        
    }

    public function hotelPagination($offset = 1,$finalResult = NULL) {
             $offset = $offset  - 1;

             if($finalResult == NULL){
                $AllHotels = $this->session->userdata('hotels_shorted') != NULL ? $this->session->userdata('hotels_shorted') : $this->session->userdata('hotels') ;   
             } else {
                $AllHotels  = $finalResult;
             }
             
//              echo "palash";
//              echo '<pre>';
//              print_r($AllHotelsSorted);
//              die();
              $output = array_slice($AllHotels, $offset, 20);
              $this->load->model('Dhbhoteldetails');
//              echo '<pre>';
//              print_r($output);
//              die();
              
              foreach ($output as $key => $value) {
                  foreach ($value as $key2 => $value2) {
                      if($value2['supplier'] == 'booking.com'){
                        $data = $this->Dhbhoteldetails->getBookingDetails($value2['hotelId']);
                        //echo '<br>fff '.$value2['name']."-".$value2['supplier'];
                        if($data[0] != NULL){
                        
                        $output[$key][$key2]['thumbNailUrl'] = $data[0]->photo_url;
                        $output[$key][$key2]['shortDescription'] =$data[0]->desc_en;
                        //$output[$key][$key2]['hotelRating'] =$data[0]->class;
                        
                        } else{
                             $output[$key][$key2]['thumbNailUrl'] = 'fetch image from api';
                             $output[$key][$key2]['shortDescription'] = '....';
                        }
                      }
                  }
              }
              
              $this->ajaxRenderView($output);
    }
    
    public function ajaxRenderView($output) {
              $nil= '';
              $str = '';
              foreach ($output as $key =>$value) {
//                    echo '<pre>';
//                    print_r($value);
//                    echo '</pre>';
                    //echo $value['hotelId'];
                    //$hotelDetailURL = 
                    $image = '';
                    $desc = '';
                    $rating = '';
                    if (trim($value[0]['supplier']) == 'expedia.com' ){
                       $image = "http://images.travelnow.com".$value[0]['thumbNailUrl'];
                       $desc  = $value[0]['shortDescription'];
                       $value[0]['rating'];
                       $rating = $value[0]['hotelRating'];
                    } elseif(trim($value[0]['supplier']) == 'booking.com'){
                        if(array_key_exists('thumbNailUrl', $value[0]) && array_key_exists('shortDescription', $value[0]) )
                        $image = $value[0]['thumbNailUrl'];
                        $desc  = $value[0]['shortDescription'];
                        $rating = (int)$value[0]['hotelRating'];
                    }
                    switch ($rating) {
                        case 0:
                            $rateClass = 'a';
                            break;
                        case 1:
                            $rateClass = 'b';
                            break;
                         case 2:
                            $rateClass = 'c';
                            break;
                         case 3:
                            $rateClass = 'd';
                            break;
                         case 4:
                            $rateClass = 'e';
                            break;
                         case 5:
                            $rateClass = 'f';
                            break;
                        default:
                             $rateClass = 'a';
                            break;
                    }
                    
                    
                    
                   $EAN = array_key_exists('1',$value) == TRUE ? '<hr><a href='.$value[1]['url'].'>'.$value[1]['supplier'].'</a> : &nbsp'.$value[0]['CurrencyCode'].'&nbsp'.$value[1]['lowRate'].'<hr>' : '&nbsp';
                   //TODO
                    //$AGODA = array_key_exists('1',$value) == TRUE ? '<hr><a href='.$value[1]['url'].'>'.$value[1]['supplier'].'</a> : &nbsp'.$value[0]['CurrencyCode'].'&nbsp'.$value[1]['lowRate'].'<hr>' : '&nbsp';
                   
                   $str .="<article>
							<header>
								<h2><a href='".$value[0]['url']."'>".$value[0]['name']."</a></h2><a href='".$value[0]['url']."'>".$value[0]['supplier']."</a>
								<figure><img style='max-height:102px;max-width:128px' src='". $image."'  alt='No Image' width='128' height='102'></figure>
								<p><span class='rating-a ".$rateClass."'>".$value[0]['hotelRating']."</span>".$value[0]['address']." </p>
							</header>
							<p>".$desc."</p>".
                                                            $EAN
							."<p class='scheme-d'><span>".$value[0]['CurrencyCode']."</span>".round($value[0]['lowRate'])." <a href='".$value[0]['url']."'>Book</a></p>
							<!--<footer>
								<p>User Rating <span class='rating-b a'>0/5</span></p>
								<p class='link-b'><a href='./'>View Details</a></p>
							</footer> -->
						</article>";
                        
                    
                    
                }
                
              echo $str;
    }
    
    public function hotelPaginationLink() {
        $hotelsArray = $this->session->userdata('hotels');
       
        $Nopage = count($hotelsArray)/20;
        echo '<li><a id="1" >1</a></li>';
        echo '<li><a id="20" >2</a></li>';
        for($i=3;$i<=$Nopage;$i++) {
           echo '<li><a id="'.(($i+1)*10).'" >'.$i.'</a></li>';
        }
								
    }
    public function filter($param) {
//        echo '<pre>';
//        print_r($_REQUEST);
        $this->hotelRangeFilter($_POST['pr_min'], $_POST['pr_max'], $_POST['star_min'], $_POST['star_max']) ;       
                
    }
    public function hotelRangeFilter($priceMin,$priceMax,$starMin,$starMax) {
        $hotelsArray = $this->session->userdata('hotels');
//                echo "<pre>"; 
//                print_r($hotelsArray); 
//                echo "</pre>";
       //echo  $priceMin; echo $priceMax;
        foreach ($hotelsArray as $key => $row) {
        if( ($row[0]['lowRate'] >= $priceMin ) && ($row[0]['lowRate'] <= $priceMax) )
            {
         if( ($row[0]['hotelRating'] >= $starMin ) && ($row[0]['hotelRating'] <= $starMax) )
         { 
             $AllHotelsSorted[] = $row;  
         }
         
        }
        
      } 
      echo count($AllHotelsSorted);      //die();

        $this->session->unset_userdata('hotels_shorted');
        $this->session->set_userdata(array('hotels_shorted' => $AllHotelsSorted));
        $this->hotelPagination($offset = 1,$AllHotelsSorted);
//            echo 'gandu2';
//            echo '<pre>';
//            print_r($AllHotelsSorted);
        
        
    }
       
}
?>
 