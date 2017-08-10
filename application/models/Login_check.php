<?php 
class Login_check extends CI_Model {
	public function admin_users($user,$pass){
	
		$query = $this->db->get_where('admin-users', array('username' => $user,'password'=>$pass), 0, 1);
        return $query->num_rows();
	}
}