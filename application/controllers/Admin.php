<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function add_ics(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$url  = $this->input->post('url');
        $isadmin = $this->input->post('isadmin');
		$this->load->model('Admin_model'); 
		$res = $this->Admin_model->add_ics($user,$pass,$url,$isadmin);
		$this->load->library('session');
          $this->session->set_userdata('add_ics', 'Added');
		  redirect(base_url().'admin/viewuser');	
		
	}
	public function viewuser(){
		
		$this->load->library('session');
		$this->load->model('Admin_model'); 
		$data['info'] = $this->Admin_model->get_user();
		$this->load->view('user-list',$data);
	}
	public function logout(){
		
		$this->load->library('session');
		$this->session->unset_userdata('admin_login');
        redirect(base_url().'welcome/admin_login');   
   }
	
	
}
