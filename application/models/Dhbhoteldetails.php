<?php

class Dhbhoteldetails extends CI_Model {

    function __construct()
    {
        
    }
    
    function getBookingDetails($booking_id){
       $query = $this->db->get_where('dhbsupplierdetails', array('booking_id' => $booking_id));
       $result = $query->result();
       if(empty($result)){
           return NULL;
       }
       $query2 = $this->db->get_where('dhbhoteldetails', array('id' => $result[0]->id));
       return $query2->result();
    }
}
?>