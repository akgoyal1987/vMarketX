<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getdb extends CI_Model {

	
public function getCity()
{
	$query = $this->db->query("SELECT * FROM cities");
    return $query->result();
}

public function getLocation()
{
	$query = $this->db->query("SELECT * FROM locations");
    return $query->result();
}

public function getState()
{
	$query = $this->db->query("SELECT * FROM states");
    return $query->result();
}

public function getCategory()
{
	$query = $this->db->query("SELECT * FROM categories");
    return $query->result();
}

public function getSubcategory()
{
	$query = $this->db->query("SELECT * FROM sub_categories");
    return $query->result();
}

public function latestProducts(){
	$query = $this->db->query("SELECT * FROM products ORDER BY p_id DESC LIMIT 4");
    return $query->result();
}

public function specialProducts(){
	$query = $this->db->query("SELECT * FROM products LIMIT 4");
    return $query->result();
}

public function Product($id){
	$query = $this->db->query("
		SELECT  
		products.p_id,
		products.user_id,
		products.s_id,
		products.product_name,
		products.product_category,
		products.product_subcategory,
		products.min_quantity,
		products.unit,
		products.mrp_price,
		products.selling_price,
		products.description,
		products.image1,
		products.image2,
		products.image3,
		products.image4,
		products.date_time,
		create_shop.shop_name
		FROM products inner join create_shop on create_shop.s_id = products.s_id where p_id =".$id);
    return $query->result();
}

public function relatedProducts($id){
	$query = $this->db->query("
		select  
		  *
		from products where product_subcategory in (select product_subcategory from products where p_id=".$id.") and p_id !=".$id. " LIMIT 4");
    return $query->result();
}
}


