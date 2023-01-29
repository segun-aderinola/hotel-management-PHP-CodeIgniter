<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Room extends CI_Controller {

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

	public function add()
	{
		$this->check_login();

		$viewdata = array();
		if($this->input->post("room_type") && $this->input->post("room_number"))
		{
			$room_type = $this->input->post("room_type");
			$room_number = intval($this->input->post("room_number"));
			
			$rooms_avail = count($this->room_m->getRoomRange($room_type, $room_number));

			// echo $rooms_avail;

			if($rooms_avail!==0) {
				$viewdata['error'] = "Room is already inserted [$room_number]";
			} else {
				$this->room_m->addRoomRange($room_type, $room_number);
				redirect("/room");
			}
		}
		$data = array('title' => 'Add Rooms - ', 'page' => 'room');
		$this->load->view('header', $data);

		$room_types = $this->room_m->get_room_types();
		$viewdata['room_types'] = $room_types;
		$this->load->view('room/add',$viewdata);

		$this->load->view('footer');
	}

	function delete($room_number)
	{
		$this->room_m->deleteRoomRange($room_number);
		redirect("/room");
	}

	public function edit($room_type, $room_number)
	{
		$this->check_login();

		$viewdata = array();
		if($this->input->post("room_type") && $this->input->post("room_number"))
		{
			$new_room_type = $this->input->post("room_type");
			$room_number = intval($this->input->post("room_number"));
			

			$rooms_avail = count($this->room_m->isAvailRange($room_type, $room_number));

			if($rooms_avail!==0) {
				$viewdata['error'] = "Room is not available [$room_number]";
			} else {
				$this->room_m->deleteRoomRange($room_number);
				$this->room_m->addRoomRange($new_room_type, $room_number);
				redirect("/room");
			}
		}
		$data = array('title' => 'Edit Rooms - ', 'page' => 'room');
		$this->load->view('header', $data);

		$room_types = $this->room_m->get_room_types();

		$room_range = new stdClass();
		$room_range->room_type = $room_type;
		$room_range->room_id = $room_number;
		
		$viewdata['room_range'] = $room_range;
		$viewdata['room_types'] = $room_types;
		$this->load->view('room/edit',$viewdata);

		$this->load->view('footer');
	}

	public function index()
	{
		$this->check_login();
		
		$rooms = $this->room_m->get_rooms();

		$viewdata = array('rooms' => $rooms);

		$data = array('title' => 'Rooms - ', 'page' => 'room');
		$this->load->view('header', $data);
		$this->load->view('room/list',$viewdata);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */