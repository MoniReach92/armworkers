<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
	
	if($_POST)
	{
		$email = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$session_data = $this->Model_Login->get_admin_by($email, $pass);
		//$session = $this->Model_Home->user_login();
		if(!empty($session_data))
		{
			$this->session->set_userdata($session_data);
			redirect('home');
		}
		
	}
		
		$this->load->view('auth_login');
		
	}
	
	public function logout()
	{
		$this->session->unset_userdata($session_data);
		redirect('Login');
	}
	
	
	
}

?>