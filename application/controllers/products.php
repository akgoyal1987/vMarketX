	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function shophome($id){
		if($this->checkSession()){
	        $this->load->model("product_model");
	        $data['results']=  $this->product_model->selectShop($id);
	       $data['id']= $id;
	       
			$this->load->view('shop_home',$data);
		}else{
			redirect("/");
		}
	}

	public function createproductview($id){
		if($this->checkSession()){
			$this->load->model("getdb");
	        $data['categories']= $this->getdb->getCategory();
	        $data['subcategories']= $this->getdb->getSubcategory();
	        $data['id']=$id;
		$this->load->view('createproduct',$data);
		}
		else
		{
			redirect("/");
		}
	}

	public function createproduct($id){
		if($this->checkSession()){
        $config['upload_path'] = './uploads/products';
		$config['allowed_types'] = 'jpg|png';
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
   			$this->load->model('product_model');
   			$data['id']=$id;
  		 if($this->product_model->createproduct($id,$image)){
             print "<script>alert('Product Successfully Created');
             window.location.href = '" . base_url() . "products/myproducts/$id';
             </script>";
             }
        else{
             print "<script>alert('Product Creation Failed');
             window.location.href = '" . base_url() . "shops/myshops';
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

	public function myproducts($id){
		if($this->checkSession()){
			$this->load->model("product_model");
	        $data['results']= $this->product_model->myproducts($id);
	        $data['id']=$id;
	        if(count($data['results'])==0)
	        {
	         print "<script>alert('No Products Found');
             window.location.href = '" . base_url() . "products/shophome/$id';
             </script>";
	        }
	        else
	        {
	        	$this->load->view("myproducts",$data);
	        }
		}
		    else{
			redirect("/");
		}
	}

	public function deleteProduct($id,$p_id){
		if($this->checkSession()){
			$this->load->model("product_model");
			$data['id']=$id;
			if($this->product_model->deleteProduct($p_id))
			{
			print "<script>alert('Product Successfully Deleted');
             window.location.href = '" . base_url() . "products/myproducts/$id';
             </script>";
			}
		}
	}

	public function selectProduct($id,$p_id){
		if($this->checkSession()){
			$this->load->model("product_model");
			$data['id']=$id;
	        $data['results']= $this->product_model->selectProduct($p_id);
	        $this->load->model("getdb");
	        $data['categories']= $this->getdb->getCategory();
	        $data['subcategories']= $this->getdb->getSubcategory();
	        $this->load->view("edit_product",$data);
		}
		else{
			redirect("/");
		}
	}

	public function update($id,$p_id){
		if($this->checkSession()){
        $config['upload_path'] = './uploads/products';
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
   			$this->load->model('product_model');
   			$data['id']=$id;
  		 if($this->product_model->update($p_id,$image)){
            print "<script>
	        window.location.href = '" . base_url() . "products/myproducts/$id';
             alert('Product Has Been Successfully Updated');
             </script>";
             }
        else{
             print "<script>alert('You Didn`t Have Any Changes');
             window.location.href = '" . base_url() . "products/myproducts/$id';
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

function checkSession(){
		if($this->session->userdata('isLoggedIn')){
			return true;
		}
		else{
			return false;
		}
	}



}