<?php

class Reservation_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_available_rooms($room_type, $checkin_date, $checkout_date)
    {
        $query = $this->db->query("CALL get_available_rooms('$room_type')");
        
        $this->db->reconnect();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    }

    public function add_reservation($data, $date=NULL)
    {
        $data['reservation_date'] = $date;
        $query = $this->db->insert('reservation', $data);
//        return $query->affected_rows();
    }
      function get_reservationn($kk)
    {
        $query = $this->db->get_where('reservation', array('status' => $kk));
       
        $result = $query->result();
        // $tx = mysqli_fetch_array($result);
        return $result;
    } 

    function getReservation_by_date($date)
    {
        $query = $this->db->get_where('reservation', array('checkin_date' => $date));
       
        $result = $query->result();
        // $tx = mysqli_fetch_array($result);
        return $result;
    } 


    function getReservation($kk)
    {
        $query = $this->db->get_where('reservation', array('reserve_id' => $kk));
       
        $result = $query->result();
        // $tx = mysqli_fetch_array($result);
        return $result;
    } 

     function get_reservation()
    {
        
        $query = $this->db->from('reservation')->get();
        $data = array();

        foreach ($query->result() as $row)
        {
            $data[] = $row;
            
        }
        if(count($data))
            return $data;
        return false;
    
    
    } 

    public function updateReservation($reservation_id, $status, $timeout, $room_id){


        $data = array('status' => $status, 'time_out' => $timeout);

        $this->db->where('reserve_id', $reservation_id);        
        $this->db->update('reservation', $data);
        $this->db->delete('room_sales', array('room_id' => $room_id));
       
    
    }
public function editReservation($reservation_id, $checkout_date, $status, $time_out){

        $data = array('checkout_date' => $checkout_date, 'status'=>$status, 'time_out'=> $time_out);

        $this->db->where('reserve_id', $reservation_id);
        
        $this->db->update('reservation', $data);
        $this->db->update('room_sales', $data);
    
    }

     function deleteReservation($reservation_id)
    {
        $this->db->delete('reservation', array('reserve_id' => $reservation_id));
        return $this->db->affected_rows();
    }
}
