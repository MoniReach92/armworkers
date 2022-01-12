<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branches extends CI_Controller
{
   public function index()
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
	   
      $data['branches'] = $this->Model_Branch->all();

      $this->load->view('included/head'); 
	  $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('branches/l_branches', $data);
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
		$data['branch'] = $this->Model_Branch->get_branch_by($id);
	   

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('branches/new_branch', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }

   
   public function edit($id)
   {

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

	  $this->form_validation->set_rules('name', 'Branch Name', 'required');
	     
      if($_POST)
      {

         $new_data['name'] = $this->input->post('name');
         $new_data['address'] = $this->input->post('address');
		  
         if( $this->form_validation->run() )
         {
            $this->Model_Branch->update($id, $new_data);
            redirect('Branches/index');
         }else
         {
			$userdata['user_name'] = $this->session->fname;
			$userdata['user_email'] = $this->session->email;
			$userdata['user_id'] = $this->session->id;
			$userdata['avata'] = $this->session->image_file;
			 
			$data['id'] = $id;
			 
			$data['branch'] = $this->Model_Branch->get_branch_by($id);
	   
            $this->load->view('included/head'); 
			$this->load->view('included/main_header', $userdata);
            $this->load->view('included/aside', $data);
            $this->load->view('Branches/new_branches', $data);
            $this->load->view('included/footer');
            $this->load->view('included/scripts');
         }         
      }
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['id'] = $id;
	   
      $data['branch'] = $this->Model_Branch->get_branch_by($id);
	   
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('branches/new_branch', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }
	
	public function create()
	{

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

		$this->form_validation->set_rules('name', 'Branch Name', 'required');
		//$this->form_validation->set_rules('description', 'Description', 'required');
	     
      if($_POST)
      {

         $new_data['name'] = $this->input->post('name');
         $new_data['address'] = $this->input->post('address');

         if( $this->form_validation->run() )
         {
            $this->Model_Branch->create($new_data);
            //redirect('industries/index');
            redirect('Branches/index');
         }else
         {
            return;
         }
         
      }
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;

      $data['branch'] = $this->Model_Branch->get_branch_by('0');
      $data['user_name'] = $userdata['user_name'];
	   
      $this->load->view('included/head'); 
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('branches/new_branch', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function destroy($id)
   {
		if($_POST)
		{
			if(!empty($id))
			{
				$this->Model_Branch->doestroy_branch($id);
          		redirect('Branches/index');
			}
		}
		
		$data['call_method'] =  $this->router->fetch_method();
	   
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['id'] = $id;
		$data['branch'] = $this->Model_Branch->get_branch_by($id);
	   

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('branches/new_branch', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
   }

}
