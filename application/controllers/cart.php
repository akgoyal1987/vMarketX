<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function add_to_cart($id){
		$this->load->model("getdb");
    	$product1= $this->getdb->Product($id);
		$data = array(
               'id'      => $id,
               'qty'     => 1,
               'price'   => $product1[0]->selling_price,
               'name'    => $product1[0]->product_name,
               'options' => array('image' =>$product1[0]->image1, 'Color' => 'Red')
            );
		$this->cart->insert($data);
		redirect("");
	}

	public function empty_cart(){

		$this->cart->destroy();
		redirect("");

	}

public function delete_item($id){
	$data = array(
    'rowid'   => $id,
    'qty'     => 0
);
 	$this->cart->update($data);
 	 redirect("");
	}

	
	

}


?>



