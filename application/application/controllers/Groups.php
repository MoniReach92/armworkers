<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Groups extends CI_Controller
{
   public function index()
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['groups'] = $this->Model_Group->all();	   
	  
	  //print_r($data['groups']);
//	  print_r($group['0']['name']);
	   
      $this->load->view('included/head'); 
	  $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('worker_group/l_groups', $data);
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
		$data['group'] = $this->Model_Group->get_group_by($id);
	   

		$this->load->view('included/head'); 
        $this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('worker_group/new_group', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
   }
	
	public function destroy($id)
   {
		if($_POST)
		{
			if(!empty($id))
			{
				$this->Model_Group->doestroy_group($id);
          		redirect('Groups/index');
			}
		}
		
		$data['call_method'] =  $this->router->fetch_method();
	   
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['id'] = $id;
		$data['group'] = $this->Model_Group->get_group_by($id);
	   

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('worker_group/new_group', $data);
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
	     
      if($_POST)
      {

         $new_data['name'] = $this->input->post('name');
         $new_data['description'] = $this->input->post('description');
		  
         if( $this->form_validation->run() )
         {
            $this->Model_Group->update($id, $new_data);
            redirect('Groups/index');
         }else
         {
			 
			$userdata['user_name'] = $this->session->fname;
			$userdata['user_email'] = $this->session->email;
			$userdata['user_id'] = $this->session->id;
			$userdata['avata'] = $this->session->image_file;
			 
			$data['id'] = $id;
			 
			$data['group'] = $this->Model_Group->get_group_by($id);
	   
            $this->load->view('included/head'); 
            $this->load->view('included/main_header', $userdata);
            $this->load->view('included/aside', $data);
            $this->load->view('worker_group/new_group', $data);
            $this->load->view('included/footer');
            $this->load->view('included/scripts');
         }         
      }
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['id'] = $id;
	   
      $data['group'] = $this->Model_Group->get_group_by($id);
	   
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('worker_group/new_group', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function create()
	{

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

		$this->form_validation->set_rules('name', 'Group Name', 'required');
		//$this->form_validation->set_rules('description', 'Description', 'required');
	     
      if($_POST)
      {

         $new_data['name'] = $this->input->post('name');
         $new_data['description'] = $this->input->post('description');

         if( $this->form_validation->run() )
         {
            $this->Model_Group->create($new_data);
            //redirect('industries/index');
            redirect('Groups');
         }else
         {
            return;
         }
         
      }
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;

      //$data['group'] = $this->Model_Group->get_group_by('0');
      $data['group'] = NULL;
	   
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('worker_group/new_group', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }

}
