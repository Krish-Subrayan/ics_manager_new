<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	public function index()
	{
		$this->load->library('session');
		$this->load->view('user-login');
	}

	public function login_check(){
		
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->load->model('Users_Login_check'); 
		$res = $this->Users_Login_check->users_check($user,$pass);
		$this->load->library('session');
        if($res == 1){
          $this->session->set_userdata('user_login', true);
		  redirect(base_url().'Users/user_home');	
		} else {
			$this->session->set_flashdata('login-fail', 'Login Failed');
		    redirect(base_url().'Users/index');	
		}
	}
	public function user_home()
	{
		$this->load->library('session');
		$this->load->view('users-home');
	}
	
	public function logout(){
		$this->load->library('session');
		$this->session->unset_userdata('user_login');
        redirect(base_url().'users/index');   
  
	}
	
	public function user_exist(){

		$user = $this->input->post('username');
		$this->load->model('Users_Login_check'); 
		echo $res = $this->Users_Login_check->user_exist($user);
	}
	
	
}
