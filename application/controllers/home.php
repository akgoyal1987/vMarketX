<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){
		$this->load->library('facebook');
		$login_url = $this->facebook->get_login_url();
    	echo($login_url);
    	die();
    	redirect($login_url);
		//$this->showhome();    
	}
	
	public function about(){
		$this->load->view('about');
	
	}

    public function contact(){
		$this->load->view('contact');
	
	}
        
    public function showhome(){
		$this->load->view('home');
	}


    public function login(){    	
		$this->load->view('login');
	}

}


?>



