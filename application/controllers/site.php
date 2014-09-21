<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	
	public function index()
	{
		
		$this->login();
                
               
             
               
		
	}
	
	public function about(){
		$this->load->view('about');
	
	}
        public function contact(){
		$this->load->view('contact');
	
	}
        
        public function login(){
		$this->load->view('home');
	
	}
        
	
	public function admin(){
		$this->load->view('admin_access');
	
	}
        public function thanks(){
		$this->load->view('thanks_page');
	
	}
        

    
       
	
	
	public function login_validation(){
            
		$this->load->library('form_validation');
             
		
		$this->form_validation->set_rules('email', 'Email', 'required|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		
		if ($this->form_validation->run()){
			$data=array('email'=>$this->input->post('email'),
				'is_loggedin'=>1		
			);
			$this->session->set_userdata($data);
			redirect('site/admin');
		}else{
			$this->load->view('home');
		}
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
		redirect('site/login');
            
	
	}
        
        
	
       public function registration(){
             $this->load->library('javascript');
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
   
        

     

   
                       
                     


}


?>



