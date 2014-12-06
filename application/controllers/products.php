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

	public function createproductview(){
		if($this->checkSession()){
			$this->load->model("getdb");
	        $data['categories']= $this->getdb->getCategory();
	        $data['subcategories']= $this->getdb->getSubcategory();
		$this->load->view('createproduct',$data);
		}
		else
		{
			redirect("/");
		}
	}

	public function createproduct(){
		if($this->checkSession()){
            $this->load->model('product_model');
            if($this->product_model->createproduct()){
             print "<script>alert('Product Successfully Added');
             window.location.href = '" . base_url() . "shops/myshops';
             </script>";
             }
             else{
             print "<script>alert('Product Creation Failed');
             window.location.href = '" . base_url() . "shops/myshops';
             </script>";
             }
         }
		else{
		   redirect("vmarketx");	
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
             window.location.href = '" . base_url() . "products/shophome';
             </script>";
	        }
	        else
	        {
	        	$this->load->view("myproducts",$data);
	        }
		}
		    else{
			redirect("vmarketx");
		}
	}

	public function deleteProduct($id){
		if($this->checkSession()){
			$this->load->model("product_model");
			if($this->product_model->deleteProduct($id))
			{
			print "<script>alert('Delete Successfully');
             window.location.href = '" . base_url() . "products/myproducts';
             </script>";
			}
		}
	}

	public function selectProduct($id){
		if($this->checkSession()){
			$this->load->model("product_model");
	        $data['results']= $this->product_model->selectProduct($id);
	        $this->load->model("getdb");
	        $data['categories']= $this->getdb->getCategory();
	        $data['subcategories']= $this->getdb->getSubcategory();
	        $this->load->view("edit_product",$data);
		}
		else{
			redirect("vmarketx");
		}
	}

	public function update($id){
			if($this->checkSession()){
			$this->load->model("product_model");
	        if($this->product_model->update($id))
	        {
	        print "<script>
	        window.location.href = '" . base_url() . "products/myproducts';
             alert('Product Has Been Successfully Updated');
             </script>";	
	        }
	        else
	        {
	        print "<script>alert('You Didn`t Have Any Changes');
             window.location.href = '" . base_url() . "products/myproducts';
             </script>";
	        }
		}
		else{
			redirect("vmarketx");
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