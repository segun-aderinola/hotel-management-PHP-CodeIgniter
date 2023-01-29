<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function checkin()
	{
		$this->check_login();
		
		if($this->input->post("staff_name") && $this->input->post("status"))
		{
			$staff_name = $this->input->post("staff_name");
			$shift_period = $this->input->post("shift_period");
			$status = $this->input->post("status");
			
			$date = date('d-m-Y');
			$time = date('h:i A');
			
			
			$this->attendance_m->add_attendance($staff_name, $status, $date, $time);
			redirect("/attendance/");
		}

		$data = array('title' => 'Check In - ', 'page' => 'attendance');
		$this->load->view('header', $data);

		$employees = $this->employee_m->get_employees();
		// print_r($employees);

		$viewdata = array('employee' => $employees);
		$this->load->view('attendance/checkin', $viewdata);
		$this->load->view('footer');
	}
	public function edit($attendance_id)
	{
		$this->check_login();

		if($this->input->post("status"))
		{
			$status = $this->input->post("status");
			$time_out = date('h:i A');
			$date = date('d-m-Y');
			
			$this->attendance_m->editAttendance($attendance_id, $status, $date, $time_out);
			redirect("/attendance");
		}
		
		$data = array('title' => 'Edit Attendance - ', 'page' => 'attendance');
		$this->load->view('header', $data);

		$attendances = $this->attendance_m->getAttendance($attendance_id);
		// print_r(($attendances[0]));
		
		$viewdata = array('attendance' => $attendances[0]);
		
		$this->load->view('attendance/edit',$viewdata);

		$this->load->view('footer');
	}
function delete($attendance_id)
	{
		$this->attendance_m->deleteAttendance($attendance_id);
		redirect("/attendance");
	}
	public function index()
	{
		$this->check_login();
		
		$attendance = $this->attendance_m->get_attendance();

		$viewdata = array('attendance' => $attendance);

		$data = array('title' => 'Attendance - ', 'page' => 'attendance');
		$this->load->view('header', $data);
		$this->load->view('attendance/list',$viewdata);
		$this->load->view('footer');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */