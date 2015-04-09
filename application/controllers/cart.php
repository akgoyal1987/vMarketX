<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
	
	public function add_to_cart($id,$quantity,$s_id){
		$this->load->model("getdb");
		$this->load->model('shops_model');
		$ins=TRUE;
    	$product1= $this->getdb->Product($id);
    	$price1 = $quantity/$product1[0]->min_quantity;
		foreach ($this->cart->contents() as $items) {
			if($items['id']==$id){
		// 		$ins=FALSE;
		// 		$data = array(	
		// 	  'rowid'	 => $items['rowid'],
		//              'id'      => $id,
		//              'price'   => $product1[0]->selling_price*$price1,
		//              'name'    => $product1[0]->product_name,
		//              'options' => array('image' =>$product1[0]->image1, 'unit' => $product1[0]->unit, 'quantity' => $quantity)
		//           );
		// $this->cart->update($data);
			print "<script>alert('This Product is already added in the Cart');
			 window.location.href = '" . base_url() . "';
             </script>";
			 return false;
			}
		}if($ins){
		$data = array(
               'id'      => $id,
               'qty'     => 1,
               'price'   => $product1[0]->selling_price*$price1,
               'name'    => $product1[0]->product_name,
               'options' => array('image' =>$product1[0]->image1, 'unit' => $product1[0]->unit, 'quantity' => $quantity)
            );
		 // get shop id using $id
		 $data['shops_id_data']= $this->shops_model->getshopiddata($id);
		 $a = end(end($data['shops_id_data']));
		 $data1['results1'] = $this->shops_model->getshopdata($a);
		 $this->session->set_userdata($data1['results1']);
		 if(!empty($this->cart->contents()))
		  {
		  	// for get all shop id
		  	foreach ($this->cart->contents() as $item)
		  	{
			$parent_cat_data[] = $item['shops_id_data'];
			foreach($item['shops_id_data'] as $data_arr)
			 {
			 	$p_id[] = $data_arr->s_id;
			 }
			}

		if(in_array($a, $p_id))
			{
				 $this->cart->insert($data);
				 // redirect('Shops/shop_page/'.$a);
			print "<script>
             window.location.href = '" . base_url() . "Shops/shop_page/".$s_id."';
             </script>";
				 // redirect('/');
			}
		else
			{
			 print "<script>alert('This  product is Different Shop, To Add This Product First You Have To Empty The Cart');
			 window.location.href = '" . base_url() . "';
             </script>";
			 return false;
			}
		  }
		 else
		  {
		  	    $this->cart->insert($data);
				// redirect('Shops/shop_page/'.$a);
				// redirect('/');
					print "<script>
             window.location.href = '" . base_url() . "Shops/shop_page/".$s_id."';
             </script>";
		  }
		}
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

	public function add_to_cart_qty(){
		$this->load->model("getdb");
		$this->load->model('shops_model');
		$id = $_POST['main_p_val'];
		$quantity = $_POST['input_quan'];
		$s_id = $_POST['main_s_val'];
		$ins=TRUE;
    	$product1= $this->getdb->Product($id);
    	$price1 = $quantity/$product1[0]->min_quantity;
		foreach ($this->cart->contents() as $items) {
			if($items['id']==$id){
			print "<script>alert('This Product is already added in the Cart');
			 window.location.href = '" . base_url() . "';
             </script>";
			 return false;
			}
		}if($ins){
		$data = array(
               'id'      => $id,
               'qty'     => 1,
               'price'   => $product1[0]->selling_price*$price1,
               'name'    => $product1[0]->product_name,
               'options' => array('image' =>$product1[0]->image1, 'unit' => $product1[0]->unit, 'quantity' => $quantity)
            );
		 // get shop id using $id
		 $data['shops_id_data']= $this->shops_model->getshopiddata($id);
		 $a = end(end($data['shops_id_data']));
		 $data1['results1'] = $this->shops_model->getshopdata($a);
		 $this->session->set_userdata($data1['results1']);
		 if(!empty($this->cart->contents()))
		  {
		  	// for get all shop id
		  	foreach ($this->cart->contents() as $item)
		  	{
			$parent_cat_data[] = $item['shops_id_data'];
			foreach($item['shops_id_data'] as $data_arr)
			 {
			 	$p_id[] = $data_arr->s_id;
			 }
			}

		if(in_array($a, $p_id))
			{
				 $this->cart->insert($data);
				 // redirect('Shops/shop_page/'.$a);
			print "<script>
             window.location.href = '" . base_url() . "Shops/shop_page/".$s_id."';
             </script>";
				 // redirect('/');
			}
		else
			{
			 print "<script>alert('This  product is Different Shop, To Add This Product First You Have To Empty The Cart');
			 window.location.href = '" . base_url() . "';
             </script>";
			 return false;
			}
		  }
		 else
		  {
		  	    $this->cart->insert($data);
				// redirect('Shops/shop_page/'.$a);
				// redirect('/');
					print "<script>
             window.location.href = '" . base_url() . "Shops/shop_page/".$s_id."';
             </script>";
		  }
		}
		}
	




	
	

}


?>



