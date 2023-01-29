<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

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
	
	public function isEmailExist($email) {
    $this->load->library('form_validation');
    $this->load->model('Employee_m');
    $is_exist = $this->Employee_m->isEmailExist($email);

    if ($is_exist) {
        $this->form_validation->set_message(
            'isEmailExist', 'Email address is already exist.'
        );    
        return false;
    } else {
        return true;
    }
}

	public function add()
	{
		$this->check_login();
		
		if($this->input->post("firstname") && $this->input->post("lastname") && $this->input->post("email"))
		{
			
			$firstname = $this->input->post("firstname");
			$lastname = $this->input->post("lastname");
			$telephone = $this->input->post("telephone");
			$email = $this->input->post("email");
			$department_id = $this->input->post("department_id");
			$type = $this->input->post("type");
			$salary = $this->input->post("salary");
			$hiring_date = $this->input->post("hiring_date");
			$username = $this->input->post("email");
			$password = 12345;
									
			if(!($this->isEmailExist($email))){?>
			    <script>
			        alert('Email already exist!!!');
			    </script>
		<?php	}
		else{
		    			
			$this->employee_m->addEmployee($firstname, $lastname, $telephone, $email, $department_id, $type, $salary, $hiring_date, $username, $password);
			redirect("/employee");
		}
		}

		$data = array('title' => 'Add Employee - ', 'page' => 'employee');
		$this->load->view('header', $data);
		$departments = $this->employee_m->getDepartments();
		$viewdata = array('departments' => $departments);
		$this->load->view('employee/add',$viewdata);
		$this->load->view('footer');
	}

	function delete($employee_id)
	{
		$this->employee_m->deleteEmployee($employee_id);
		redirect("/employee");
	}

	public function edit($employee_id)
	{
		$this->check_login();

		if($this->input->post("firstname") && $this->input->post("lastname") && $this->input->post("email"))
		{
			
			$firstname = $this->input->post("firstname");
			$lastname = $this->input->post("lastname");
			$telephone = $this->input->post("telephone");
			$email = $this->input->post("email");
			$department_id = $this->input->post("department_id");
			$type = $this->input->post("type");
			$salary = $this->input->post("salary");
			$hiring_date = $this->input->post("hiring_date");
			
			$this->employee_m->editEmployee($employee_id, $firstname, $lastname, $telephone, $email, $department_id, $type, $salary, $hiring_date);
			redirect("/employee");
		}
		
		$data = array('title' => 'Edit Employee - ', 'page' => 'employee');
		$this->load->view('header', $data);

		$departments = $this->employee_m->getDepartments();
		$employee = $this->employee_m->getEmployee($employee_id);
		
		$viewdata = array('departments' => $departments, 'employee'  => $employee[0]);
		
		$this->load->view('employee/edit',$viewdata);

		$this->load->view('footer');
	}

	public function index()
	{
		$this->check_login();
		
		$employees = $this->employee_m->get_employees();

		$viewdata = array('employees' => $employees);

		$data = array('title' => 'Employees - ', 'page' => 'employee');
		$this->load->view('header', $data);
		$this->load->view('employee/list',$viewdata);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */