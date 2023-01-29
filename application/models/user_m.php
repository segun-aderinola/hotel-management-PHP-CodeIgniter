<?php

class User_m extends CI_Model{

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    function check_login($username, $password)
    {
        $query = $this->db->from('employee')->join('department','employee.department_id=department.department_id')->where('employee_username', $username)->where('employee_password', $password)->get();
        $data = array();

        foreach(@$query->result() as $row)
        {
            $data[] = $row;
            
        }
        if(count($data))
            return $data;
        return false;
    }
}
