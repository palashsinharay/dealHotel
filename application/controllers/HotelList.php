<?php

class HotelList extends CI_Controller{
    
    public function index($offset = 0) {
             //echo    $offset;
             //$this->session->sess_destroy();
              $AllHotels = $this->session->userdata('hotels');
              $output = array_slice($AllHotels, $offset, 10);
              $this->load->model('Dhbhoteldetails');
              
              foreach ($output as $key => $value) {
                  foreach ($value as $key2 => $value2) {
                      if($value2['supplier']== 'booking.com'){
                        $data = $this->Dhbhoteldetails->getBookingDetails($value2['hotelId']);
                        $output[$key][$key2]['thumbNailUrl'] = $data[0]->photo_url;
                        $output[$key][$key2]['shortDescription'] =$data[0]->desc_en;
                        $output[$key][$key2]['hotelRating'] =$data[0]->review_score;
                      }
                  }
              }
              
              $str = '';
                foreach ($output as $key =>$value) {
                    //echo $value['hotelId'];
                    //$hotelDetailURL = 
                   $EAN = array_key_exists('1',$value) == TRUE ? '<a href='.$value[1]['url'].'>'.$value[1]['supplier'].'</a> : '.$value[1]['lowRate'] : '&nbsp';
                    
                   $str .="<article>
							<header>
								<h2><a href='".$value[0]['url']."'>".$value[0]['name']."</a></h2>
								<figure><img src='".$value[0]['thumbNailUrl']."'  alt='Placeholder' width='70' height='70'> <figcaption>01</figcaption></figure>
								<p><span class='rating-a a'>0/5</span>".$value[0]['address']." </p>
							</header>
							<p>".$value[0]['shortDescription']."</p>".
                                                            $EAN
							."<p class='scheme-d'><span>$</span>".$value[0]['lowRate']." <a href='./'>Book</a></p>
							<footer>
								<p>User Rating <span class='rating-b a'>0/5</span></p>
								<p class='link-b'><a href='./'>View Details</a></p>
							</footer>
						</article>";
                        
                    
                    
                }
                
                echo $str;
              
                
    }
    
   
    
    
    
}
?>
 