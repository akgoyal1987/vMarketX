<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views extends CI_Controller {
		
	public function home(){
		if($this->checkSession()){
			$this->load->view('partials/home');			
		}else{
			echo "You Are Not Logged In, Please Login First";
		}
	}

	public function home_alt(){
		if($this->checkSession()){
			$this->load->view('partials/home_alt');			
		}else{
			echo "You Are Not Logged In, Please Login First";
		}
	}

	public function xyz(){
		if($this->checkSession()){
			$this->load->view('partials/xyz');			
		}else{
			echo "You Are Not Logged In, Please Login First";
		}
	}
	
	public function checkSession(){
		if($this->session->userdata('is_loggedin')==1){
			return true;
		}
		else{
			return false;
		}
	}
}


?>
