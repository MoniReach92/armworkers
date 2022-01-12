<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Industries extends CI_Controller
{
   public function index()
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['industries'] = $this->Model_Industry->all();

      $this->load->view('included/head'); $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('industries/l_industries', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	

   public function show($id)
   {
		$data['call_method'] =  $this->router->fetch_method();
	   
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
	   
		$data['id'] = $id;
		$data['industry'] = $this->Model_Industry->get_industry_by($id);
	   

		$this->load->view('included/head'); $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('industries/new_industry', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
   }

   
   public function edit($id)
   {

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

	  $this->form_validation->set_rules('name', 'Industry Name', 'required');
	  $this->form_validation->set_rules('description', 'Description', 'required');
	     
      if($_POST)
      {

         $new_data['name'] = $this->input->post('name');
         $new_data['description'] = $this->input->post('description');
		  
         if( $this->form_validation->run() )
         {
            $this->Model_Industry->update($id, $new_data);
            redirect('industries/index');
         }else
         {
			 
			$userdata['user_name'] = $this->session->fname;
			$userdata['user_email'] = $this->session->email;
			$userdata['user_id'] = $this->session->id;
			$userdata['avata'] = $this->session->image_file;
			 
			$data['id'] = $id;
			 
			$data['industry'] = $this->Model_Industry->get_industry_by($id);
	   
            $this->load->view('included/head'); $this->load->view('included/main_header', $userdata);
            $this->load->view('included/aside', $data);
            $this->load->view('industries/new_industry', $data);
            $this->load->view('included/footer');
            $this->load->view('included/scripts');
         }         
      }
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['id'] = $id;
	   
      $data['industry'] = $this->Model_Industry->get_industry_by($id);
	   
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('industries/new_industry', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function create()
	{

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

		$this->form_validation->set_rules('name', 'Industry Name', 'required');
		//$this->form_validation->set_rules('description', 'Description', 'required');
	     
      if($_POST)
      {

         $new_data['name'] = $this->input->post('name');
         $new_data['description'] = $this->input->post('description');

         if( $this->form_validation->run() )
         {
            $this->Model_Industry->create($new_data);
            //redirect('industries/index');
            redirect('industries/create');
         }else
         {
            return;
         }
         
      }
	   
	  $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;

      $data['industry'] = $this->Model_Industry->get_industry_by('0');
	   
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('industries/new_industry', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function destroy($id)
   {
		if($_POST)
		{
			if(!empty($id))
			{
				$this->Model_Industry->doestroy_industry($id);
          		redirect('Industries/index');
			}
		}
		
		$data['call_method'] =  $this->router->fetch_method();
	   
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['id'] = $id;
		$data['industry'] = $this->Model_Industry->get_industry_by($id);
	   

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('industries/new_industry', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
   }

}
