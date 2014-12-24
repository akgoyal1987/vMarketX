<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {

	public function createproduct($id,$image){
		 date_default_timezone_set("Asia/Kolkata");
         $now = date('Y-m-d H:i:s');
		 $sql = "INSERT INTO products (user_id,product_name,product_category,product_subcategory,unit,mrp_price,selling_price,description,image1,image2,image3,image4,date_time,s_id)
                VALUES(".$this->db->escape($this->session->userdata('username'))."
                	    ," . $this->db->escape($this->input->post('product_name')) . "
                    	," . $this->db->escape($this->input->post('product_category')) . "
                    	," . $this->db->escape($this->input->post('product_subcategory')) . "
                    	," . $this->db->escape($this->input->post('unit')) . "
                    	," . $this->db->escape($this->input->post('mrp_price')) . "
                    	,".$this->db->escape($this->input->post('selling_price'))."
                    	,".$this->db->escape($this->input->post('description'))."
                         ,".$this->db->escape($image[0])."
                        ,".$this->db->escape($image[1])."
                        ,".$this->db->escape($image[2])."
                        ,".$this->db->escape($image[3])."
                        ," . $this->db->escape($now) . "
                        ," . $this->db->escape($id) . ")";
                return ($this->db->query($sql)>0)?TRUE:FALSE;
	}

	public function myproducts($id) 
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('s_id',$id);
        $query=$this->db->get();
        return $query->result();
    }
    public function selectShop($id) 
    {
        $this->db->select('*');
        $this->db->from('create_shop');
        $this->db->where('s_id',$id);
        $query=$this->db->get();
        return $query->result();
    }

    public function deleteProduct($id)
{
    $this->db->delete('products', array('p_id' => $id)); 
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}

public function selectProduct($id) 
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('p_id',$id);
        $query=$this->db->get();
        return $query->result();
    }
public function update($id,$image)
{
    $data = array(
        'product_name' => $this->input->post('product_name'),
        'product_category' => $this->input->post('product_category'),
        'product_subcategory' => $this->input->post('product_subcategory'),
        'unit' => $this->input->post('unit'),
        'mrp_price' => $this->input->post('mrp_price'),
        'selling_price' => $this->input->post('selling_price'),   
        'description' => $this->input->post('description'),   
        'image1' => $image[0],
        'image2' => $image[1],
        'image3' => $image[2],
        'image4' => $image[3]  
    );
    $this->db->where('p_id', $id);
    $this->db->update('products', $data); 
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}

}