<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function productsbyCategory($id){
	$query = $this->db->query("SELECT * FROM products p, ( select name,category from sub_categories WHERE id =".$id.") s where p.`product_category`= s.category AND p.`product_subcategory` = s.name");
    return $query->result();
    }

    public function maxpricebysc($id)
    {
    	$query = $this->db->query("SELECT max(selling_price) FROM `products` inner join sub_categories as sc on sc.name = products.product_subcategory  WHERE sc.id = $id");
        return $query->result();
    }
    public function get_locations($id)
    {
    	$query = $this->db->query("SELECT DISTINCT cs.location FROM `products` inner join sub_categories as sc on sc.name = products.product_subcategory inner join create_shop as cs on cs.s_id = products.s_id where sc.id = $id ");
        return $query->result();
    }

}