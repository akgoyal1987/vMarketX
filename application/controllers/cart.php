<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function add_to_cart($id,$quantity){
		$this->load->model("getdb");
		$ins=TRUE;
    	$product1= $this->getdb->Product($id);
    	$price1 = $quantity/$product1[0]->min_quantity;
		foreach ($this->cart->contents() as $items) {
			if($items['id']==$id){
				$ins=FALSE;
				$data = array(	
			  'rowid'	 => $items['rowid'],
               'id'      => $id,
               'price'   => $product1[0]->selling_price*$price1,
               'name'    => $product1[0]->product_name,
               'options' => array('image' =>$product1[0]->image1, 'unit' => $product1[0]->unit, 'quantity' => $quantity)
            );
		$this->cart->update($data);
			}
		}if($ins){
		$data = array(
               'id'      => $id,
               'qty'     => 1,
               'price'   => $product1[0]->selling_price*$price1,
               'name'    => $product1[0]->product_name,
               'options' => array('image' =>$product1[0]->image1, 'unit' => $product1[0]->unit, 'quantity' => $quantity)
            );
		$this->cart->insert($data);
		}
		redirect("");
	}

	public function empty_cart(){

		$this->cart->destroy();
		redirect("");
	}

	public function add_to_cart1($id)
	{

		redirect("cart/add_to_cart/".$id."/".$this->input->post('quantity'));
	}

	public function delete_item($id){
	$data = array(
    'rowid'   => $id,
    'qty'     => 0
	);
 	$this->cart->update($data);
 	 redirect("");
	}

	public function update_item($id){
	$data = array(
    'rowid'   => $id,
    'qty'     => 0
	);
 	$this->cart->update($data);
 	 redirect("");
	}

	public function view_cart()
	{
	    $this->load->model("getdb");
	    $data['categories']= $this->getdb->getCategory();
	    $data['subcategories']= $this->getdb->getSubcategory();
		$this->load->view('cart',$data);
	}

	
	

}


?>



