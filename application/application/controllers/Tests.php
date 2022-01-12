<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tests extends CI_Controller
{
	public function index()
	{
		if($_POST)
		{
			$data['care_name'] = $this->input->post('care_name');
			//$this->Model_Test->create_batch($new_data);
//			redirect('Tests/index');
			log_message('debug', 'My First Log');

			$data['user_name'] = 'RattanakUNG';
			$hellos = $data['care_name'];
			
			//foreach($hellos as $hello){
				//echo $hello . '<br />';
				$this->Model_Test->create_query($hellos);
			//}
			redirect('Tests/index');
			

			$this->load->view('included/head'); 
			$this->load->view('included/main_header', $userdata);
			$this->load->view('included/aside', $data);
			$this->load->view('tests/forms', $data);
			$this->load->view('included/footer');
			$this->load->view('included/scripts');
		}
     
		log_message('debug', 'My First Log');

		$data['user_name'] = 'RattanakUNG';

		$data['industries'] = $this->Model_Industry->all();

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('tests/forms', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function multiple_files()
	{
		$this->load->helper('form');
		
		if($_POST)
		{
			$data['care_name'] = $this->input->post('care_name');

			log_message('debug', 'My First Log');
			$data['user_name'] = 'RattanakUNG';
			
			$file_data['doc_type'] = $this->input->post('doc_type');
            $file_data['number'] = $this->input->post('number');
            $file_data['issue_date'] = $this->input->post('issue_date');
            $file_data['expired_date'] = $this->input->post('expired_date');
			
			$new_file = $file_data;
			//print_r($new_file);
			//$this->Model_Test->create_query($hellos);
			//redirect('Tests/index');
			

			$this->load->view('included/head'); 
			$this->load->view('included/main_header', $userdata);
			$this->load->view('included/aside', $data);
			$this->load->view('tests/new_file', $new_file);
			$this->load->view('included/footer');
			$this->load->view('included/scripts');
		}
     
		log_message('debug', 'My First Log');

		$data['user_name'] = 'RattanakUNG';

		

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('tests/new_file', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}

}
