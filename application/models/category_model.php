<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function productsbyCategory($id){
	$query = $this->db->query("SELECT * FROM products where product_subcategory IN ( select name from sub_categories WHERE id =".$id.")");
    return $query->result();
}

}