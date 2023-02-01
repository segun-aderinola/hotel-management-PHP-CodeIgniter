<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends CI_Controller {

	

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function history()
	{
		$this->check_login();
		$viewdata = [];

		
		if($this->input->post("date_of_transaction"))
		{
            $date = $this->input->post("date_of_transaction");

		    $reservation = $this->reservation_m->getReservation_by_date($date);
            
            $customer_list = [];
            $room_list = [];

            $room_price = [];
            
            if($reservation){

                $rooms = $reservation[0]->room_id;
                
                // $room_type = $this->room_m->getSingleRoom($rooms);                			
	           
	    	   
                foreach($reservation as $reserve){
                    $customer_list[] = $reserve->customer_id;
                    $room_list[] = $reserve->room_id;                
                }
                

                
                
	    $customers = [];
	    foreach($customer_list as $customer){
	        $customers[] = $this->customer_m->getCustomer($customer);
	    }
	    
	     $rooms = [];
         $room_amount = [];
	     
	    foreach($room_list as $room){
	        $rooms[] = $this->room_m->getSingleRoom($room);
	        
	    }
        
        foreach($rooms as $rrr){
            $room_amount[] = $this->room_m->getRoomType($rrr[0]->room_type);
        }

        
        // print_r($room_->room_price);


	   
		if(!$reservation) {
			$viewdata['error'] = "Customer does not exist";
		}else{
		  

		$viewdata = array('reservation' => $reservation, 'customers'=> $customers, 'room'=>$rooms,'room_price'=> $room_amount);
		}

            }
            else{
                $viewdata['error'] = 'No Transaction on this date';
            }



            $data = array('title' => 'Transactions - ', 'page' => 'transactions');
		    $this->load->view('header', $data);

		    // $viewdata = array('transaction' => $transaction);
		    $this->load->view('transactions/history', $viewdata);
		    $this->load->view('footer');
	}
}
	

    public function index()
	{
		$this->check_login();

		$data = array('title' => 'Transactions - ', 'page' => 'transactions');
		$this->load->view('header', $data);
		$this->load->view('transactions/history','');
		$this->load->view('footer');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */