<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller {
	public function index(){
		if($this->checkSession()){
			redirect('logins/home');
		}else{
			redirect('logins/login');
		}
	}
	
	public function home(){
		if($this->checkSession()){
			$data['pagename'] = "Dashboard";
			$this->load->view('home', $data);
		}else{
			$this->login();
		}		
	}
	
	public function login(){
		if($this->checkSession()){
			redirect('logins/home');
		}else{
			$data['pagename'] = "Vmarketx Login";
			$this->load->view('index', $data);
		}
	}
	
	public function signin(){
		if($this->validate_credentials()){			
         	redirect('logins/home');
		}else{
         	redirect('logins/');
		}		
	}
	
	function validate_credentials(){
		$this->load->model('admin');
		return $this->admin->can_login();
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('logins/index');
	}
	
	public function registration(){
		$data['pagename'] = "Vmarketx Register";
		$this->load->view('registration', $data);
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



