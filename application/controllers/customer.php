<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Africa/Lagos');
class Customer extends CI_Controller {

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

	public function add($ref="")
	{
		$this->check_login();

		
		$data = $this->input->post();
		if(isset($data["customer_TCno"]) && $data["customer_TCno"])
		{
			$this->customer_m->add_customer($data);
			redirect("/$ref");
		}

		$viewdata = array('reference' => 'reservation');
		$data = array('title' => 'Add Customer - ', 'page' => 'reservation');
		$this->load->view('header', $data);
		$this->load->view('customer/add',$viewdata);
		$this->load->view('footer');
	}

	function delete($customer_id)
	{
		$this->customer_m->deleteCustomer($customer_id);
		redirect("/customer");
	}

	public function edit($customer_id)
	{
		$this->check_login();

		if($this->input->post("firstname") && $this->input->post("lastname") && $this->input->post("telephone"))
		{
			
			$firstname = $this->input->post("firstname");
			$lastname = $this->input->post("lastname");
			$telephone = $this->input->post("telephone");
			$email = $this->input->post("email");
			$country = $this->input->post("country");
			$city = $this->input->post("city");
		
			
			$this->customer_m->editCustomer($customer_id, $firstname, $lastname, $telephone, $email, $country, $city);
			redirect("/customer");
		}
		
		$data = array('title' => 'Edit Customer - ', 'page' => 'customer');
		$this->load->view('header', $data);

		// $departments = $this->customer_m->getDepartments();
		$customer = $this->customer_m->getCustomer($customer_id);
		// print_r($customer);
		
		$viewdata = array('customer' => $customer[0]);
		$this->load->view('customer/edit',$viewdata);

		$this->load->view('footer');
	}

  function active()
	{
		$this->check_login();

		$kk = 'in';

		$viewdata = [];
		

		$reservation = $this->reservation_m->get_reservationn($kk);
		
		 $customer_list = [];
	    $room_list = [];
	    
	    
	    foreach($reservation as $reserve){
	        $customer_list[] = $reserve->customer_id;
	       $room_list[] = $reserve->room_id;
	    }
	    
	    $customers = [];
	    foreach($customer_list as $customer){
	        $customers[] = $this->customer_m->getCustomer($customer);
	    }
	    
	     $rooms = [];
	    foreach($room_list as $room){
	        $rooms[] = $this->room_m->getSingleRoom($room);
	    }
	   
		if(!$reservation) {
			$viewdata['error'] = "Customer does not exist";
		}else{
		  

		$viewdata = array('reservation' => $reservation, 'customer_info'=> $customers, 'room'=>$rooms);
		}
		
		$data = array('title' => 'Customer - ', 'page' => 'customer/active');
		$this->load->view('header',$data);
		$this->load->view('customer/active',$viewdata);
		$this->load->view('footer');
	}
function all_reservation()
	{
		$this->check_login();
		

		$viewdata = [];
		

		$reservation = $this->reservation_m->get_reservation();
	    $customer_list = [];
	    $room_list = [];
	    
	    if($reservation){
	    foreach($reservation as $reserve){
	        $customer_list[] = $reserve->customer_id;
	       $room_list[] = $reserve->room_id;
	    }
	}
	    
	    $customers = [];
	    foreach($customer_list as $customer){
	        $customers[] = $this->customer_m->getCustomer($customer);
	    }
	    
	     $rooms = [];
	    foreach($room_list as $room){
	        $rooms[] = $this->room_m->getSingleRoom($room);
	    }
	   
		if(!$reservation) {
			$viewdata['error'] = "Customer does not exist";
		}else{
		  

		$viewdata = array('reservation' => $reservation, 'customer_info'=> $customers, 'room'=>$rooms);
		}

		$data = array('title' => 'Customer - ', 'page' => 'customer/active');
		$this->load->view('header',$data);
		$this->load->view('customer/all_reservation',$viewdata);
		$this->load->view('footer');
	}

	public function index()
	{
		$this->check_login();

		$customers = $this->customer_m->get_customers();

		$viewdata = array('customers' => $customers);

		$data = array('title' => 'Customer - ', 'page' => 'customer');
		$this->load->view('header', $data);
		$this->load->view('customer/list',$viewdata);
		$this->load->view('footer');
	}
	public function make($year, $month, $day)
	{
		$this->check_login();
		
		$data = array('title' => 'Reservation - ', 'page' => 'reservation');
		$this->load->view('header', $data);
		echo $year." ".$month." ".$day;
		// $this->load->view('reservation/make');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */