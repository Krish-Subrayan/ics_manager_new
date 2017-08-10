<?php 
class Users_Login_check extends CI_Model {
	public function users_check($user,$pass){
	
		 $query = $this->db->get_where('users', array('username' => $user,'password'=>$pass), 0, 1);
         $row = $query->result_array();
         $this->session->set_userdata('user_url', $row[0]['file']);

        return $query->num_rows();
	}
	
	public function user_exist($user){
		$query = $this->db->get_where('users', array('username' => $user), 0, 1);
        return ($query->num_rows());
      
	 	 
	}
}