<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class postControllerHook{

	function check_login()
	{
		$CI =& get_instance();

		// $CI->output->enable_profiler(TRUE);
		
		define('UID', $CI->session->userdata('uid'));
		define('USERNAME', $CI->session->userdata('username'));
		define('FULLNAME', $CI->session->userdata('fullname'));
		define('DEPARTMENT_NAME', $CI->session->userdata('department_name'));
		define('EMPLOYEE_TYPE', $CI->session->userdata('employee_type'));

		// define("SHOW_GUIDE", !$CI->session->userdata('show_guide'));
	}
}

?>