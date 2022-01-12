<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['country'] = $this->Model_Home->count_country();
		$data['industry'] = $this->Model_Home->count_industry();
		$data['workerf'] = $this->Model_Home->count_workerf();
		$data['workerm'] = $this->Model_Home->count_workerm();
		
		
		$this->load->view('included/head');
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('home', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
		
	}
	
	public function countries()
	{
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['countries'] = $this->Model_Home->country_list();
		
		
		$this->load->view('included/head'); $this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('home/l_country', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function industries()
	{
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		$data['industries'] = $this->Model_Home->industry_list();
		
		
		$this->load->view('included/head'); $this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('home/l_industry', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
}

?>