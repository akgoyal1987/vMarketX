<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller {

	public function index(){
		if($this->checkSession()){
			$this->home();
		}else{
			$this->login();
		}
	}
	
	public function home(){
		$this->load->view('home');
	}
	
	public function login(){
		$this->load->view('index');
	}
	
	public function signin(){
		$this->session->set_userdata(array('is_loggedin'=>1));
        redirect('logins/home');
	}
	
	public function validate_credentials(){
		$this->load->model('model_users');
		
		if ($this->model_users->can_login()){
			return true;
		}else{
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
			return false;
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('logins/index');
	}
	
	public function registration(){
		$this->load->view('registration');
	} 
	
	public function signup_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('date', 'Walk In Date', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required|alpha');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|numeric|exact_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[reg_user.email]');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('registration');
		}	
		else{
			$this->load->model('model_users');
			$this->model_users->insert_user();
			redirect('site/thanks');              
        }
	}
	
	function checkSession(){
		if($this->session->userdata('is_loggedin')==1){
			return true;
		}
		else{
			return false;
		}
	}
}


?>



