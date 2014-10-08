<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shops extends CI_Controller {
	

	public function createshop(){
		if($this->checkSession()){
			$this->load->view('createshop');
		}else{
			redirect("/");
		}
	}

	public function myshops(){
		if($this->checkSession()){
			$this->load->view('myshops');
		}else{
			redirect("/");
		}
	}

	public function cart(){
		if($this->checkSession()){
			$this->load->view('cart');
		}else{
			redirect("/");
		}
	}

	public function viewshop(){
		if($this->checkSession()){
			$this->load->view('viewshop');
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



