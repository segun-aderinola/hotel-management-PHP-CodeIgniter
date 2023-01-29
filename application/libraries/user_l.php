<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_l{

	public function __construct() {
		
	}
	public function login($user)
	{
		
		$data = array(
			'uid' => $user[0]->employee_id,
			'username' => $user[0]->employee_username,
			'fullname' => $user[0]->employee_firstname." ".$user[0]->employee_lastname,
			'department_name' => $user[0]->department_name,
			'employee_type' => $user[0]->employee_type
		);
		$CI = &get_instance();
		$CI->session->set_userdata($data);
		// $_SESSION["uid"] = $user[0]->employee_id				
	}
	public function logout()
	{
		$CI = &get_instance();
		$CI->session->sess_destroy();
	}
}
