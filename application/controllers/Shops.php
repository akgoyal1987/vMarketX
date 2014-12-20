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
			redirect("/");
		}
	}
	
	public function createshop(){
		if($this->checkSession()){
        $config['upload_path'] = './uploads/shops';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['overwrite'] = false;
		$config['remove_spaces'] = true;
		$this->load->library('upload');
		$image = array();
		$i=0;
		$upload1 = true;
		foreach(array_keys($_FILES) as $h) {
   		$this->upload->initialize($config);
   		if ($this->upload->do_upload($h)) 
   		{
           $arr_file_data  =   $this->upload->data();
           $image[$i]=$arr_file_data['file_name'];
        }
       else
        {
   	      $upload1 = true;
        }
        $i++;
        }
		if ($upload1)
        {
   			$this->load->model('shops_model');
  		 if($this->shops_model->createshop($image)){
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
  		else
  		{
  			echo "error";
  		}
        }
		else{
		   redirect("/");	
		}
	}

	public function myshops(){
		if($this->checkSession()){
			$this->load->model("shops_model");
	        $data['results']= $this->shops_model->myshops();
	        if(count($data['results'])==0)
	        {
	         print "<script>alert('No Shops Found');
             window.location.href = '" . base_url() . "home/userhome';
             </script>";	
	        }
	        else
	        {
	        	$this->load->view("myshops",$data);
	        }
		}
		else{
			redirect("/");
		}
	}

	public function delete($id){
		if($this->checkSession()){
			$this->load->model("shops_model");
			if($this->shops_model->delete($id))
			{
			print "<script>alert('Shop Successfully Deleted');
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
			redirect("/");
		}
	}

	public function update($id){
		if($this->checkSession()){
        $config['upload_path'] = './uploads/shops';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['overwrite'] = false;
		$config['remove_spaces'] = true;
		$this->load->library('upload');
		$image = array();
		$i=0;
		$upload1 = true;
		foreach(array_keys($_FILES) as $h) {
   		$this->upload->initialize($config);
   		if ($this->upload->do_upload($h)) 
   		{
           $arr_file_data  =   $this->upload->data();
           $image[$i]=$arr_file_data['file_name'];
        }
       else
        {
   	      $upload1 = true;
        }
        $i++;
        }
        
		if ($upload1)
        {
   			$this->load->model('shops_model');
  		 if($this->shops_model->update($id,$image)){
             print "<script>alert('Shop Has Been Successfully Updated');
             window.location.href = '" . base_url() . "Shops/myshops';
             </script>";
             }
        else{
             print "<script>alert('You Didn`t Have Any Changes');
             window.location.href = '" . base_url() . "Shops/myshops';
             </script>";
             }
  		}
  		else
  		{
  			echo "error";
  		}
        }
		else{
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



