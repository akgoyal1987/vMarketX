<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {

	public function createproduct(){
         $now = date('Y-m-d H:i:s');
		 $sql = "INSERT INTO products (user_id,product_name,product_category,product_subcategory,unit,mrp_price,selling_price,description,date_time)
                VALUES(".$this->db->escape($this->session->userdata('username'))."
                	    ," . $this->db->escape($this->input->post('product_name')) . "
                    	," . $this->db->escape($this->input->post('product_category')) . "
                    	," . $this->db->escape($this->input->post('product_subcategory')) . "
                    	," . $this->db->escape($this->input->post('unit')) . "
                    	," . $this->db->escape($this->input->post('mrp_price')) . "
                    	,".$this->db->escape($this->input->post('selling_price'))."
                    	,".$this->db->escape($this->input->post('description'))."
                        ," . $this->db->escape($now) . ")";
                return ($this->db->query($sql)>0)?TRUE:FALSE;
	}

	public function myproducts($id) 
    {
        $query = $this->db->query("SELECT * FROM products");
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
public function update($id)
{
    $data = array(
        'product_name' => $this->input->post('product_name'),
        'product_category' => $this->input->post('product_category'),
        'product_subcategory' => $this->input->post('product_subcategory'),
        'unit' => $this->input->post('unit'),
        'mrp_price' => $this->input->post('mrp_price'),
        'selling_price' => $this->input->post('selling_price'),   
        'description' => $this->input->post('description'),     
    );
    $this->db->where('p_id', $id);
    $this->db->update('products', $data); 
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}

}