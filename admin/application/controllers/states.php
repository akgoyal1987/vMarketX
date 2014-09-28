<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class States extends CI_Controller {

	public function index(){
		if($this->checkSession()){
			$data['pagename'] = "States";
			$this->load->view('states', $data);
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



