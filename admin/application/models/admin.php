<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

	
	public function can_login()
	{

		$this->db->where('username', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$result= $this->db->get('admin')->result();
    if ( is_array($result) && count($result) == 1 )
	{
        $this->set_session($result[0]);
        return true;
    }
    else
	{
			return false;
	}
	}

  public function change_pswd($pswd,$user_name)
     {
        $data = array(
               'password' => $pswd
            );

        $this->db->where('username', $user_name);
        $this->db->update('admin', $data); 
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

  function set_session($userinfo) {
      // session->set_userdata is a CodeIgniter function that
      // stores data in CodeIgniter's session storage.  Some of the values are built in
      // to CodeIgniter, others are added.  See CodeIgniter's documentation for details.
      $this->session->set_userdata( array(
              'id'=>$userinfo->id,
              'username'=> $userinfo->username,              
              'isLoggedIn'=>true
          )
      );
  }
}







