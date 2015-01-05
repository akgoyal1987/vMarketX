	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function shophome($id){
		if($this->checkSession()){
	        $this->load->model("product_model");
	        $data['results1']=  $this->product_model->selectShop($id);
	        $data['results']= $this->product_model->myproducts($id);
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
   			$this->load->model('product_model');
   			$data['id']=$id;
  		 if($this->product_model->createproduct($id)){
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
   			$this->load->model('product_model');
   			$data['id']=$id;
  		 if($this->product_model->update($p_id)){
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