<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shops_model extends CI_Model {

public function createshop(){
        $sql = "INSERT INTO create_shop (shop_name,shop_category,address,location,city,state,postal_code,phone_no,email,min_ammount,description,user_id)
                VALUES(" . $this->db->escape($this->input->post('shop_name')) . "
                    	," . $this->db->escape($this->input->post('shop_category')) . "
                    	," . $this->db->escape($this->input->post('address')) . "
                    	," . $this->db->escape($this->input->post('location')) . "
                    	," . $this->db->escape($this->input->post('city')) . "
                    	," . $this->db->escape($this->input->post('state')) . "
                    	," . $this->db->escape($this->input->post('postal_code')) . "
                    	," . $this->db->escape($this->input->post('phone_no')) . "
                    	," . $this->db->escape($this->input->post('email')) . "
                    	," . $this->db->escape($this->input->post('min_ammount')) . "
                    	," . $this->db->escape($this->input->post('description')) . "
                    	,".$this->db->escape($this->session->userdata('username')).")";
                return ($this->db->query($sql)>0)?TRUE:FALSE;
}
public function myshops() 
    {
        $query = $this->db->query("SELECT shop_name,shop_category,email FROM create_shop");
		return $query->result();
    }
}
