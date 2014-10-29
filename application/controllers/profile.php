<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	

	public function change_password(){
		if($this->checkSession()){
			$this->load->view('change_password');
		}else{
			redirect("/");
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



