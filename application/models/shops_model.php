<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shops_model extends CI_Model {

public function createshop($image){
        $now = date('Y-m-d H:i:s');
        $sql = "INSERT INTO create_shop (shop_name,shop_category,address,location,city,state,postal_code,phone_no,email,min_ammount,description,user_id,image1,image2,image3,image4,date_time)
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
                    	,".$this->db->escape($this->session->userdata('username'))."
                        ,".$this->db->escape($image[0])."
                        ,".$this->db->escape($image[1])."
                        ,".$this->db->escape($image[2])."
                        ,".$this->db->escape($image[3])."
                        ," . $this->db->escape($now) . ")";
                return ($this->db->query($sql)>0)?TRUE:FALSE;
}
public function myshops() 
    {
        $this->db->select('*');
        $this->db->from('create_shop');
        $this->db->where('user_id',$this->session->userdata('username'));
        $query=$this->db->get();
		return $query->result();
    }

public function selectshop($id) 
    {
        $this->db->select('*');
        $this->db->from('create_shop');
        $this->db->where('s_id',$id);
        $query=$this->db->get();
        return $query->result();
    }

public function delete($id)
{
    $this->db->delete('create_shop', array('s_id' => $id)); 
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}
public function update($id,$image)
{
    $data = array(
        'shop_name' => $this->input->post('shop_name'),
        'shop_category' => $this->input->post('shop_category'),
        'address' => $this->input->post('address'),
        'location' => $this->input->post('location'),
        'city' => $this->input->post('city'),
        'state' => $this->input->post('state'),
        'postal_code' => $this->input->post('postal_code'),
        'phone_no' => $this->input->post('phone_no'),
        'email' => $this->input->post('email'),
        'min_ammount' => $this->input->post('min_ammount'),
        'description' => $this->input->post('description'),
        'image1' => $image[0],
        'image2' => $image[1],
        'image3' => $image[2],
        'image4' => $image[3]
    );
    $this->db->where('s_id', $id);
    $this->db->update('create_shop', $data); 
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}
}
