<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shops_model extends CI_Model {

public function createshop(){
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
        $store = "uploads/shops/" . $f_newfile;
        $image1 =  move_uploaded_file($f_tmp,$store);}

        $f_name1 = $_FILES['image2']['name'];
        $f_tmp1 = $_FILES['image2']['tmp_name'];
        $f_size1 = $_FILES['image2']['size'];
        $f_extension1 = explode('.',$f_name1); //To breaks the string into array
        $f_extension1 = strtolower(end($f_extension1)); //end() is used to retrun a last element to the array
        $f_newfile1="";
        if($f_name1){
        $f_newfile1 = uniqid().'.'.$f_extension1; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store1 = "uploads/shops/" . $f_newfile1;
        $image2 =  move_uploaded_file($f_tmp1,$store1);}

        $f_name2 = $_FILES['image3']['name'];
        $f_tmp2 = $_FILES['image3']['tmp_name'];
        $f_size2 = $_FILES['image3']['size'];
        $f_extension2 = explode('.',$f_name2); //To breaks the string into array
        $f_newfile2="";
        if($f_name2){
        $f_extension2 = strtolower(end($f_extension2)); //end() is used to retrun a last element to the array
        $f_newfile2 = uniqid().'.'.$f_extension2; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store2 = "uploads/shops/" . $f_newfile2;
        $image3 =  move_uploaded_file($f_tmp2,$store2);}

        $f_name3 = $_FILES['image4']['name'];
        $f_tmp3 = $_FILES['image4']['tmp_name'];
        $f_size3 = $_FILES['image4']['size'];
        $f_extension3 = explode('.',$f_name3); //To breaks the string into array
        $f_extension3 = strtolower(end($f_extension3));
        $f_newfile3="";
        if($f_name3){
        $f_newfile3 = uniqid().'.'.$f_extension3; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store3 = "uploads/shops/" . $f_newfile3;
        $image3 =  move_uploaded_file($f_tmp3,$store3);}
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
                        ,".$this->db->escape($f_newfile)."
                        ,".$this->db->escape($f_newfile1)."
                        ,".$this->db->escape($f_newfile2)."
                        ,".$this->db->escape($f_newfile3)."
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
    $this->db->delete('products', array('s_id' => $id));  
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}
public function update($id)
{
        $f_name = $_FILES['image1']['name'];
        $f_tmp = $_FILES['image1']['tmp_name'];
        $f_size = $_FILES['image1']['size'];
        $f_extension = explode('.',$f_name); //To breaks the string into array
        $f_extension = strtolower(end($f_extension)); //end() is used to retrun a last element to the array
        $f_newfile = uniqid().'.'.$f_extension; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store = "uploads/shops/" . $f_newfile;
        $image1 =  move_uploaded_file($f_tmp,$store);

        $f_name1 = $_FILES['image2']['name'];
        $f_tmp1 = $_FILES['image2']['tmp_name'];
        $f_size1 = $_FILES['image2']['size'];
        $f_extension1 = explode('.',$f_name1); //To breaks the string into array
        $f_extension1 = strtolower(end($f_extension1)); //end() is used to retrun a last element to the array
        $f_newfile1 = uniqid().'.'.$f_extension1; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store1 = "uploads/shops/" . $f_newfile1;
        $image2 =  move_uploaded_file($f_tmp1,$store1);

        $f_name2 = $_FILES['image3']['name'];
        $f_tmp2 = $_FILES['image3']['tmp_name'];
        $f_size2 = $_FILES['image3']['size'];
        $f_extension2 = explode('.',$f_name2); //To breaks the string into array
        $f_extension2 = strtolower(end($f_extension2)); //end() is used to retrun a last element to the array
        $f_newfile2 = uniqid().'.'.$f_extension2; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store2 = "uploads/shops/" . $f_newfile2;
        $image3 =  move_uploaded_file($f_tmp2,$store2);

        $f_name3 = $_FILES['image4']['name'];
        $f_tmp3 = $_FILES['image4']['tmp_name'];
        $f_size3 = $_FILES['image4']['size'];
        $f_extension3 = explode('.',$f_name3); //To breaks the string into array
        $f_extension3 = strtolower(end($f_extension3)); //end() is used to retrun a last element to the array
        $f_newfile3 = uniqid().'.'.$f_extension3; // It`s use to stop overriding if the image will be same then uniqid() will generate the unique name of both file.
        $store3 = "uploads/shops/" . $f_newfile3;
        $image4 =  move_uploaded_file($f_tmp3,$store3);
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
    $this->db->where('s_id', $id);
    $this->db->update('create_shop', $data); 
    return ($this->db->affected_rows()>0)? TRUE:FALSE;
}
}
