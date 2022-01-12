<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Affiliates extends CI_Controller
{
   public function index()
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['affiliates'] = $this->Model_Affiliate->all_set();

      $this->load->view('included/head'); 
	  $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('affiliates/l_affiliates', $data);
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
	    $data['branches'] = $this->Model_Branch->all();
		$data['affiliate'] = $this->Model_Affiliate->get_affiliate_by($id);
	   

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('affiliates/new_affiliate', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }

   
   public function edit($id)
   {

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

	  $this->form_validation->set_rules('name', 'Affiliate Name', 'required');
	     
      if($_POST)
      {

         $new_data['branch'] = $this->input->post('branch');
         $new_data['name'] = $this->input->post('name');
         $new_data['mobile'] = $this->input->post('mobile');
         $new_data['email'] = $this->input->post('email');
         $new_data['address'] = $this->input->post('address');
		  
         if( $this->form_validation->run() )
         {
            $this->Model_Affiliate->update($id, $new_data);
            redirect('Affiliates/index');
         }else
         {
			$userdata['user_name'] = $this->session->fname;
			$userdata['user_email'] = $this->session->email;
			$userdata['user_id'] = $this->session->id;
			$userdata['avata'] = $this->session->image_file;
			 
			$data['id'] = $id;
			 
			$data['affiliate'] = $this->Model_Affiliate->get_affiliate_by($id);
	   
            $this->load->view('included/head'); 
			$this->load->view('included/main_header', $userdata);
            $this->load->view('included/aside', $data);
            $this->load->view('affiliates/new_affiliate', $data);
            $this->load->view('included/footer');
            $this->load->view('included/scripts');
         }         
      }
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['id'] = $id;
	  $data['branches'] = $this->Model_Branch->all();
      $data['affiliate'] = $this->Model_Affiliate->get_affiliate_by($id);
	   
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('affiliates/new_affiliate', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }
	
	public function create()
	{

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

		$this->form_validation->set_rules('name', 'affiliate Name', 'required');
		//$this->form_validation->set_rules('description', 'Description', 'required');
	     
      if($_POST)
      {

         $new_data['branch'] = $this->input->post('branch');
         $new_data['name'] = $this->input->post('name');
         $new_data['mobile'] = $this->input->post('mobile');
         $new_data['email'] = $this->input->post('email');
         $new_data['address'] = $this->input->post('address');

         if( $this->form_validation->run() )
         {
            $this->Model_Affiliate->create($new_data);
            //redirect('industries/index');
            redirect('Affiliates/index');
         }else
         {
            return;
         }
         
      }
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
      $data['branches'] = $this->Model_Branch->all();
      $data['affiliate'] = $this->Model_Affiliate->get_affiliate_by('0');
      $data['user_name'] = $userdata['user_name'];
	   
      $this->load->view('included/head'); 
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('affiliates/new_affiliate', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function destroy($id)
   {
		if($_POST)
		{
			if(!empty($id))
			{
				$this->Model_Affiliate->doestroy_affiliate($id);
          		redirect('Affiliates/index');
			}
		}
		
		$data['call_method'] =  $this->router->fetch_method();
	   
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['id'] = $id;
		$data['affiliate'] = $this->Model_Affiliate->get_affiliate_by($id);
	   

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
        $this->load->view('included/aside', $data);
        $this->load->view('affiliates/new_affiliate', $data);
        $this->load->view('included/footer');
        $this->load->view('included/scripts');
   }
	
	public function get_affiliate_branch()
	{
		$data['call_method'] =  $this->router->fetch_method();
		
		$branch = $this->input->post('branch');
		$data['affiliates'] = $this->Model_Affiliate->get_affiliate_branch($branch);
		
		//$output = "<option>1</option>";
//		$output .= "<option>2</option>";
//		$output .= "<option>3</option>";
//		echo $output;
		$this->load->view('ajax/gazeetteer', $data);
		
	}

}
