<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function categoryGrid($id){
		$this->load->model("getdb");
		$this->load->model("category_model");
    	$data['categories']= $this->getdb->getCategory();
    	$data['subcategories']= $this->getdb->getSubcategory();
    	$data['products'] = $this->category_model->productsbyCategory($id);
    	$data['max_price_sc'] = $this->category_model->maxpricebysc($id);
    	$data['locations'] = $this->category_model->get_locations($id);
		$this->load->view('category-grid',$data);
	}

}