<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {

	
	public function can_login()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query= $this->db->get('admin');
		
		if ($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}
         public function insert_user()
        {
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
        
//       
//		}
//        
        
      
        
        
    
        
     
}







