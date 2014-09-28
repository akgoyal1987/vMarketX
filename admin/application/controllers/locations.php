<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Locations extends CI_Controller {

	public function index(){
		if($this->checkSession()){
			$data['pagename'] = "Locations";
			$this->load->view('locations', $data);
		}else{
			redirect('logins/login');
		}
	}
	
	
	function checkSession(){
		if($this->session->userdata('isLoggedIn')){
			return true;
		}
		else{
			return false;
		}
	}
}


?>



