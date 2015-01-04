<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function productsbyCategory($id){
	$query = $this->db->query("SELECT * FROM products p, ( select name,category from sub_categories WHERE id =".$id.") s where p.`product_category`= s.category AND p.`product_subcategory` = s.name");
    return $query->result();
}

}