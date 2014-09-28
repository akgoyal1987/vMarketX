<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cities extends CI_Controller {

	public function index(){
		if($this->checkSession()){
			$data['pagename'] = "Cities";
			$this->load->view('cities', $data);
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



