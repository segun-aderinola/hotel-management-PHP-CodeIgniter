<?php

class Room_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_room_types(){
        $query = $this->db->get('room_type');
        $data = array();

        if($query)
            foreach($query->result() as $row)
            {
                $data[] = $row;
            }
        if(count($data))
            return $data;
        return false;
    } 

    function get_rooms(){
        $query = $this->db->from('room')->get();
        $data = array();

        foreach ($query->result() as $row)
        {
            $data[] = $row;
           
        }
        if(count($data))
            return $data;
        return false;
    }


    function addRoomType($type, $price, $details, $quantity)
    {
        $data = array('room_type' => $type, 'room_price' => $price, 'room_details' => $details, 'room_quantity' => $quantity);
        $this->db->insert('room_type', $data);
        return $this->db->affected_rows();
    }

    function deleteRoomType($room_type)
    {
        $this->db->delete('room_type', array('room_type' => $room_type));
        return $this->db->affected_rows();
    }

    function getRoomType($room_type)
    {
        $query = $this->db->get_where('room_type', array('room_type' => $room_type));
        return $query->result();
    }

    function editRoomType($type, $price, $details, $quantity)
    {
        $data = array('room_type' => $type, 'room_price' => $price, 'room_details' => $details, 'room_quantity' => $quantity);

        $this->db->where('room_type', $type);
        $this->db->update('room_type', $data); 
    }

    function getRoom($room_type)
    {
        $query = $this->db->get_where('room', array('room_type' => $room_type));
        return $query->result();
    }

    function getSingleRoom($room_id)
    {
        $query = $this->db->get_where('room', array('room_id' => $room_id));
        return $query->result();
    }

    function getRoomSale($room_id)
    {
        $query = $this->db->get_where('room_sales', array('room_id' => $room_id));
        return $query->result();
    }

    function isAvailRange($room_type, $room_number) {
        $query = $this->db->get_where('room', array('room_type !=' => $room_type, 'room_id =' => $room_number));
        return $query->result();
    }

    
    function getRoomRange($room_type, $room_number) {
        $query = $this->db->get_where('room', array('room_id =' => $room_number));
        return $query->result();
    }


    function deleteRoomRange($room_number) {
        $this->db->delete('room', array('room_id =' => $room_number));
        return $this->db->affected_rows();
    }


    function addRoomRange($room_type, $room_number) {
        
    
        $data = array('room_type' => $room_type, 'room_id' => $room_number);

        $this->db->insert('room', $data);
        return $this->db->affected_rows();
    }

    function add_room_sale($data) {
        $query = $this->db->join("room_type","room_type.room_type = room.room_type", "left")->get_where("room", array('room_id' => $data['room_id']));
        if(!$query || $query->num_rows() == 0) {
            return false;
        }
        $price = $query->result();
        $data['room_sales_price'] = $price[0]->room_price;
        $data['total_service_price'] = 0;
        $this->db->insert('room_sales', $data);
    }
}