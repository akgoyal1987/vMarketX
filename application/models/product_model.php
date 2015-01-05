<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product_model extends CI_Model {

	public function createproduct($id){
		 date_default_timezone_set("Asia/Kolkata");
         $now = date('Y-m-d H:i:s');
          $f_name = $_FILES['image1']['name'];
        $f_tmp = $_FILES['image1']['tmp_name'];
        $f_size = $_FILES['image1']['size'];
        $f_extension = explode('.',$f_name); //To breaks the string into array
        $f_extension = strtolower(end($f_extension)); //end() is used to retrun a last element to the array
        $f_newfile="";
        if($f_name){
        $f_newfile = uniqid().'.'.$f_extension; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store = "uploads/products/" . $f_newfile;
        $image1 =  move_uploaded_file($f_tmp,$store);}

        $f_name1 = $_FILES['image2']['name'];
        $f_tmp1 = $_FILES['image2']['tmp_name'];
        $f_size1 = $_FILES['image2']['size'];
        $f_extension1 = explode('.',$f_name1); //To breaks the string into array
        $f_extension1 = strtolower(end($f_extension1)); //end() is used to retrun a last element to the array
        $f_newfile1="";
        if($f_name1){
        $f_newfile1 = uniqid().'.'.$f_extension1; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store1 = "uploads/products/" . $f_newfile1;
        $image2 =  move_uploaded_file($f_tmp1,$store1);}

        $f_name2 = $_FILES['image3']['name'];
        $f_tmp2 = $_FILES['image3']['tmp_name'];
        $f_size2 = $_FILES['image3']['size'];
        $f_extension2 = explode('.',$f_name2); //To breaks the string into array
        $f_newfile2="";
        if($f_name2){
        $f_extension2 = strtolower(end($f_extension2)); //end() is used to retrun a last element to the array
        $f_newfile2 = uniqid().'.'.$f_extension2; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store2 = "uploads/products/" . $f_newfile2;
        $image3 =  move_uploaded_file($f_tmp2,$store2);}

        $f_name3 = $_FILES['image4']['name'];
        $f_tmp3 = $_FILES['image4']['tmp_name'];
        $f_size3 = $_FILES['image4']['size'];
        $f_extension3 = explode('.',$f_name3); //To breaks the string into array
        $f_extension3 = strtolower(end($f_extension3));
        $f_newfile3="";
        if($f_name3){
        $f_newfile3 = uniqid().'.'.$f_extension3; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store3 = "uploads/products/" . $f_newfile3;
        $image3 =  move_uploaded_file($f_tmp3,$store3);}
		 $sql = "INSERT INTO products (user_id,product_name,product_category,product_subcategory,min_quantity,unit,mrp_price,selling_price,description,image1,image2,image3,image4,date_time,s_id)
                VALUES(".$this->db->escape($this->session->userdata('username'))."
                	    ," . $this->db->escape($this->input->post('product_name')) . "
                    	," . $this->db->escape($this->input->post('product_category')) . "
                    	," . $this->db->escape($this->input->post('product_subcategory')) . "
                        ," . $this->db->escape($this->input->post('min_quantity')) . "
                    	," . $this->db->escape($this->input->post('unit')) . "
                    	," . $this->db->escape($this->input->post('mrp_price')) . "
                    	,".$this->db->escape($this->input->post('selling_price'))."
                    	,".$this->db->escape($this->input->post('description'))."
                         ,".$this->db->escape($f_newfile)."
                        ,".$this->db->escape($f_newfile1)."
                        ,".$this->db->escape($f_newfile2)."
                        ,".$this->db->escape($f_newfile3)."
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
public function update($id)
{
    $f_name = $_FILES['image1']['name'];
        $f_tmp = $_FILES['image1']['tmp_name'];
        $f_size = $_FILES['image1']['size'];
        $f_extension = explode('.',$f_name); //To breaks the string into array
        $f_extension = strtolower(end($f_extension)); //end() is used to retrun a last element to the array
        $f_newfile = uniqid().'.'.$f_extension; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store = "uploads/products/" . $f_newfile;
        $image1 =  move_uploaded_file($f_tmp,$store);

        $f_name1 = $_FILES['image2']['name'];
        $f_tmp1 = $_FILES['image2']['tmp_name'];
        $f_size1 = $_FILES['image2']['size'];
        $f_extension1 = explode('.',$f_name1); //To breaks the string into array
        $f_extension1 = strtolower(end($f_extension1)); //end() is used to retrun a last element to the array
        $f_newfile1 = uniqid().'.'.$f_extension1; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store1 = "uploads/products/" . $f_newfile1;
        $image2 =  move_uploaded_file($f_tmp1,$store1);

        $f_name2 = $_FILES['image3']['name'];
        $f_tmp2 = $_FILES['image3']['tmp_name'];
        $f_size2 = $_FILES['image3']['size'];
        $f_extension2 = explode('.',$f_name2); //To breaks the string into array
        $f_extension2 = strtolower(end($f_extension2)); //end() is used to retrun a last element to the array
        $f_newfile2 = uniqid().'.'.$f_extension2; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store2 = "uploads/products/" . $f_newfile2;
        $image3 =  move_uploaded_file($f_tmp2,$store2);

        $f_name3 = $_FILES['image4']['name'];
        $f_tmp3 = $_FILES['image4']['tmp_name'];
        $f_size3 = $_FILES['image4']['size'];
        $f_extension3 = explode('.',$f_name3); //To breaks the string into array
        $f_extension3 = strtolower(end($f_extension3)); //end() is used to retrun a last element to the array
        $f_newfile3 = uniqid().'.'.$f_extension3; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store3 = "uploads/products/" . $f_newfile3;
        $image4 =  move_uploaded_file($f_tmp3,$store3);
    $data = array(
        'product_name' => $this->input->post('product_name'),
        'product_category' => $this->input->post('product_category'),
        'product_subcategory' => $this->input->post('product_subcategory'),
        'min_quantity' => $this->input->post('min_quantity'),
        'unit' => $this->input->post('unit'),
        'mrp_price' => $this->input->post('mrp_price'),
        'selling_price' => $this->input->post('selling_price'),   
        'description' => $this->input->post('description')
    );
    if($f_name){
        $data = array('image1' => $f_newfile);
    }
    if($f_name1){
        $data = array('image2' => $f_newfile1);

    }
    if($f_name2){
        $data = array('image3' => $f_newfile2);

    }
    if($f_name3){
        $data = array('image4' => $f_newfile3);
    }
    $this->db->where('p_id', $id);
    $this->db->update('products', $data); 
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}

}