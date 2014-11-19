<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shops extends CI_Controller {
	

	public function createshopview(){
		if($this->checkSession()){
			$this->load->view('createshop');
		}else{
			redirect("vmarketx");
		}
	}
	
	public function createshop(){
		if($this->checkSession()){
            $this->load->model('shops_model');
            if($this->shops_model->createshop()){
             print "<script>alert('Shop Successfully Created');
             window.location.href = '" . base_url() . "home/userhome';
             </script>";
             }
             else{
             print "<script>alert('Shop Creation Failed');
             window.location.href = '" . base_url() . "home/userhome';
             </script>";
             }
         }
		else{
		   redirect("vmarketx");	
		}
	}

	public function myshops(){
		if($this->checkSession()){
			$this->load->model("shops_model");
	        $data['results']= $this->shops_model->myshops();
	        if(count($data['results'])==0){
	         print "<script>alert('No Record Found');
             window.location.href = '" . base_url() . "home/userhome';
             </script>";	
	        }
	        else{
	        	$this->load->view("myshops",$data);
	        }
		}
		else{
			redirect("vmarketx");
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



