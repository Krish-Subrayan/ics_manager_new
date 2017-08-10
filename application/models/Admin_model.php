<?php 
class Admin_model extends CI_Model {
	public function add_ics($user,$pass,$url,$isadmin){
		$data = array(
			'username' => $user,
			'password' => $pass,
			'file' => $url,
			'created' => date('Y-m-d h:i:s')
	);
    	return $this->db->insert('users', $data);

	}

	public function get_user(){
	 $query = $this->db->get('users');
	 return $query->result_array(); 
	}
}