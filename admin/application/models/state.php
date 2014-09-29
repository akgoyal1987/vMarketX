<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class State extends CI_Model {

	
	public function get_all_states()
	{

		$result= $this->db->get('states')->result_array();
    // The results of the query are stored in $login.
    // If a value exists, then the user account exists and is validated
    if ( is_array($result)) {
        return $result;
    }
    else{
			return array();
		}
	}
  public function insert_user(){
      $date = $this->input->post('date');
      $name = $this->input->post('name');
      $mobile = $this->input->post('mobile');
      $email = $this->input->post('email');


      $degree_name= $this->input->post('degree');
      $college= $this->input->post('college');
      $branch= $this->input->post('branch');
      $marks= $this->input->post('gmarks');
      $course= $this->input->post('course');

      $sql = "INSERT INTO reg_user (date,name,mobile,email)
      VALUES(" . $this->db->escape($date) . "," . $this->db->escape($name) . "," . $this->db->escape($mobile) . "," . $this->db->escape($email) . ")";
      $sqll = "INSERT INTO graduation (email,degree,college,branch,marks,course)
      VALUES(" . $this->db->escape($email) . "," . $this->db->escape($degree_name) . "," . $this->db->escape($college) . "," . $this->db->escape($branch) . "," . $this->db->escape($marks) . "," . $this->db->escape($course) . ")";

      $this->db->query($sql);
      $this->db->query($sqll);
  }

  public function delete(){
    $this->db->where('state_id',$this->input->post('id'))->delete('states');
    return ($this->db->affected_rows()>0)? TRUE:FALSE;

  } 

  public function update(){
    $this->db->where('state_id',$this->input->post('id'));
    $data = array('state_name'=>$this->input->post('state_name'));
    $this->db->update('states',$data);
    return ($this->db->affected_rows()>0)? TRUE:FALSE;

 } 
}







