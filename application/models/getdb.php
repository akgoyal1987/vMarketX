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
}


