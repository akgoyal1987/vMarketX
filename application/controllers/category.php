<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function categoryGrid($id){
		$this->load->model("getdb");
		$this->load->model("category_model");
    	$data['categories']= $this->getdb->getCategory();
    	$data['subcategories']= $this->getdb->getSubcategory();
    	$data['products'] = $this->category_model->productsbyCategory($id);
		$this->load->view('category-grid',$data);
	}

}