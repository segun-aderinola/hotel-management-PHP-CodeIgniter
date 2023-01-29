<?php

class Customer_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_customer($TCno)
    {
        $query = $this->db->get_where('customer', array('customer_TCno' => $TCno));
        if($query) {
            return $query->result();
        } else {
            return $query;
        }
    }
    function getCustomer($customer_id)
    {
        $query = $this->db->get_where('customer', array('customer_id' => $customer_id));
        return $query->result();
    } 
    function add_customer($data)
    {
        $this->db->insert('customer', $data);
//        return $this->db->affected_rows();
    }

    function get_active_customers()
    {
        $date = date('Y-m-d');
        $q = $this->db->query("CALL get_customers('$date')");

        $data = array();
        foreach ($q->result() as $customer) {
            $data[] = $customer;
        }
        return $data;
    }
   
    function get_customers(){
        $query = $this->db->from('customer')->get();
        $data = array();

        foreach ($query->result() as $row)
        {
            $data[] = $row;
            // $row->customer_id
            // $row->customer_username
            // $data[0]->customer_id
        }
        if(count($data))
            return $data;
        return false;
    }   
    

    function editCustomer($customer_id, $firstname, $lastname, $telephone, $email, $country, $city)
    {
        $data = array('customer_firstname' => $firstname, 'customer_lastname' => $lastname, 'customer_telephone' => $telephone, 'customer_email' => $email, 'customer_country' => $country, 'customer_city' => $city);

        $this->db->where('customer_id', $customer_id);
        $this->db->update('customer', $data); 
    }
    function deleteCustomer($customer_id)
    {
        $this->db->delete('customer', array('customer_id' => $customer_id));
        return $this->db->affected_rows();
    }

}
