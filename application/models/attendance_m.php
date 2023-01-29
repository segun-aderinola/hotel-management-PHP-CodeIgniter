<?php

class Attendance_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getAttendance($attendance_id)
    {
        $query = $this->db->get_where('attendance', array('attendance_id' => $attendance_id));
        if($query) {
            return $query->result();
        } else {
            return $query;
        }
    }
  
     function add_attendance($staff_name, $status, $date, $time)
    {
        $data = array('employee_name' => $staff_name, 'status' => $status, 'date_added' => $date, 'time_in' => $time);
        $this->db->insert('attendance', $data);
        return $this->db->affected_rows();
    } 

    
   
    function get_attendance(){
        $query = $this->db->from('attendance')->get();
        $data = array();

        foreach ($query->result() as $row)
        {
            $data[] = $row;
           
        }
        if(count($data))
            return $data;
        return false;
    }   
    

    function editAttendance($attendance_id,$status, $date, $time_out)
    {
        $data = array('status'=> $status, 'date_out'=>$date, 'time_out' => $time_out);

        $this->db->where('attendance_id', $attendance_id);
        $this->db->update('attendance', $data); 
    }
    function deleteAttendance($attendance_id)
    {
        $this->db->delete('attendance', array('attendance_id' => $attendance_id));
        return $this->db->affected_rows();
    }

}
