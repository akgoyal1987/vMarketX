<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){
		$this->showhome();    
	}
	
	public function about(){
		$this->load->view('about');
	}
	
	public function product($id){
		$this->load->model("getdb");
    	$data['categories']= $this->getdb->getCategory();
    	$data['subcategories']= $this->getdb->getSubcategory();
    	$data['product']= $this->getdb->Product($id);
        $data['related_products']= $this->getdb->relatedProducts($id);
		$this->load->view('product',$data);

	}

    public function contact(){
		$this->load->view('contact');
	}

	
        
    public function showhome(){
    	$this->load->model("getdb");
    	$data['categories']= $this->getdb->getCategory();
    	$data['subcategories']= $this->getdb->getSubcategory();
    	$data['latest_products']= $this->getdb->latestProducts();
    	$data['special_products']= $this->getdb->specialProducts();
		$this->load->view('home',$data);
	}

	public function userhome(){
		if($this->checkSession()){
			$this->load->view('userhome');
		}else{
			redirect("/");
		}
	}

    public function login(){
    	$this->session->set_userdata( array(
              'id'=>1,
              'firstname'=> "Varun",              
              'lastname'=> "Jeesukh",              
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



