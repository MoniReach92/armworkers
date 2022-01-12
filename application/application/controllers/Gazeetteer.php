<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gazeetteer extends CI_Controller
{
	public function index()
	{
		log_message('debug', 'My First Log');
		$data['user_name'] = 'RattanakUNG';
	}
	
	public function provinces()
	{
		$data['provinces'] = $this->Model_Gazeetteer->provinces();
	}
	
	public function districts()
	{
		$data['call_method'] =  $this->router->fetch_method();
		
		$province = $this->input->post('province');
		$data['districts'] = $this->Model_Gazeetteer->districts($province);
		
		$this->load->view('ajax/gazeetteer', $data);
		
	}
	
	public function communes()
	{
		$data['call_method'] =  $this->router->fetch_method();
		
		$district = $this->input->post('district');
		$data['communes'] = $this->Model_Gazeetteer->commmunes($district);
		
		$this->load->view('ajax/gazeetteer', $data);
	}
	
	public function villages()
	{
		$data['call_method'] =  $this->router->fetch_method();
		
		$commune = $this->input->post('commune');
		$data['villages'] = $this->Model_Gazeetteer->villages($commune);
		
		$this->load->view('ajax/gazeetteer', $data);
	}
}
?>