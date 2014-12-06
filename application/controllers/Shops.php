<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shops extends CI_Controller {
	

	public function createshopview(){
		if($this->checkSession()){
			$this->load->model("getdb");
	        $data['cities']= $this->getdb->getCity();
	        $data['locations']= $this->getdb->getLocation();
	        $data['states']= $this->getdb->getState();
			$this->load->view('createshop',$data);
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
	        if(count($data['results'])==0)
	        {
	         print "<script>alert('No Record Founds');
             window.location.href = '" . base_url() . "home/userhome';
             </script>";	
	        }
	        else
	        {
	        	$this->load->view("myshops",$data);
	        }
		}
		else{
			redirect("vmarketx");
		}
	}

	public function delete($id){
		if($this->checkSession()){
			$this->load->model("shops_model");
			if($this->shops_model->delete($id))
			{
			print "<script>alert('Delete Successfully');
             window.location.href = '" . base_url() . "Shops/myshops';
             </script>";
			}
		}

	}

	public function selectShop($id){
		if($this->checkSession()){
			$this->load->model("shops_model");
	        $data['results']= $this->shops_model->selectshop($id);
	        $this->load->model("getdb");
	        $data['cities']= $this->getdb->getCity();
	        $data['locations']= $this->getdb->getLocation();
	        $data['states']= $this->getdb->getState();
	        $this->load->view("editshop",$data);
		}
		else{
			redirect("vmarketx");
		}
	}

	public function update($id){
			if($this->checkSession()){
			$this->load->model("shops_model");
	        if($this->shops_model->update($id))
	        {
	        print "<script>
	        window.location.href = '" . base_url() . "Shops/myshops';
             alert('Shop Has Been Successfully Updated');
             </script>";	
	        }
	        else
	        {
	        print "<script>alert('You Didn`t Have Any Changes');
             window.location.href = '" . base_url() . "Shops/myshops';
             </script>";
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



