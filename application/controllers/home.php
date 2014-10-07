<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){
		$this->showhome();    
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
    	$this->session->set_userdata( array(
              'id'=>1,
              'firstname'=> "Ankit",              
              'lastname'=> "Goyal",              
              'email'=> "ak.goyal1987@gmail.com",              
              'username'=> "user",              
              'isLoggedIn'=>true
            )
        );
        redirect('/');
	  //$this->load->view('login');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
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



