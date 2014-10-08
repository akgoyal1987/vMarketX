<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {
	

	public function completeorders(){
		if($this->checkSession()){
			$this->load->view('orders');
		}else{
			redirect("/");
		}
	}

	public function pendingorders(){
		if($this->checkSession()){
			$this->load->view('pendingorders');
		}else{
			redirect("/");
		}
	}

	public function orderdetail(){
		if($this->checkSession()){
			$this->load->view('orderdetail');
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



