<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admins extends CI_Controller
{
   public function index()
   {

      $faker = Faker\Factory::create();
      
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
	  $data['file_root'] = 'application/views/';
	   
      $data['admins'] = $this->Model_Admins->get_admins();

      $data['selected_filter'] = $this->session->selected_filter;

      $this->load->view('included/head');
	  $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('admins/l_admins', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }

   public function view_image()
   {
      $image = file_get_contents('assets/images/ThinkstockPhotos-145054512_small.jpg');
      $this->output->set_content_type('jpeg')->set_output($image);
   }

   public function set_filter()
   {
      $session_data['selected_filter'] = $this->input->get('filter');
      $this->session->set_userdata($session_data);
      redirect('admins/index');
   }

   public function show($id)
   {
		$data['call_method'] =  $this->router->fetch_method();
	   
	    $data['message_error'] = '';

		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
	   
		$data['id'] = $id;
		$data['admins'] = $this->Model_Admins->get_admin_by($id);
		$data['admin_roles'] = $this->Model_Admin_Roles->all();
	   

		$this->load->view('included/head'); 
	    $this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('admins/new_admin', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }

   public function db_test()
   {
      
      $this->Model_Admins->connection_test();
   }

   public function edit($id)
   {

	  $data['call_method'] =  $this->router->fetch_method();
	  //$data['call_class'] = $this->router->fetch_class();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

	  $this->form_validation->set_rules('admin_role', 'Admin Role', 'required');
	  $this->form_validation->set_rules('status', 'Status', 'required');
	     
      if($_POST)
      {

         $image = FALSE;

         if($_FILES)
         {
            $image = $this->do_upload();
         }
		 if($image)
         {
            $new_data['image_file'] = $image;
         }

         $new_data['admin_role'] = $this->input->post('admin_role');
         $new_data['status'] = $this->input->post('status');
         $new_data['fname'] = $this->input->post('fname');
         $new_data['lname'] = $this->input->post('lname');
         $new_data['mobile'] = $this->input->post('mobile');
         $new_data['email'] = $this->input->post('email');
         $new_data['address'] = $this->input->post('address');
         $new_data['description'] = $this->input->post('description');
		  
		  $password = $this->input->post('password');
		  $confirm_password = $this->input->post('confirm_password');
		  if(!empty($password) && ($password === $confirm_password))
		  {
			  $new_data['password'] = $password;
		  }

         if( $this->form_validation->run() )
         {
            $this->Model_Admins->update($id, $new_data);
            redirect('admins/index');
         }else
         {
			 
			$data['message_error'] = 'You are not update.';
			 
            $userdata['user_name'] = $this->session->fname;
            $userdata['user_email'] = $this->session->email;
            $userdata['user_id'] = $this->session->id;
            $userdata['avata'] = $this->session->image_file;
			 
			$data['id'] = $id;
			$data['admins'] = $this->Model_Admins->get_admin_by($id);
			$data['admin_roles'] = $this->Model_Admin_Roles->all();
			 
            $this->load->view('included/head'); 
			$this->load->view('included/main_header', $userdata);
			$this->load->view('included/aside', $data);
			$this->load->view('admins/new_admin', $data);
			$this->load->view('included/footer');
			$this->load->view('included/scripts');
            return;
         }

         //$this->Property->update($id, $new_data);
         
      }
	   
	  $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['id'] = $id;
      $data['admins'] = $this->Model_Admins->get_admin_by($id);
      $data['admin_roles'] = $this->Model_Admin_Roles->all();
	   
      $this->load->view('included/head');
	  $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('admins/new_admin', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function create()
   {

	  $data['call_method'] =  $this->router->fetch_method();
	   
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

	  $this->form_validation->set_rules('admin_role', 'Admin Role', 'required');
	  $this->form_validation->set_rules('status', 'Status', 'required');
	     
      if($_POST)
      {

         $image = FALSE;

         if($_FILES)
         {
            $image = $this->do_upload();
         }
		 if($image)
         {
            $new_data['image_file'] = $image;
         }

         $new_data['admin_role'] = $this->input->post('admin_role');
         $new_data['status'] = $this->input->post('status');
         $new_data['fname'] = $this->input->post('fname');
         $new_data['lname'] = $this->input->post('lname');
         $new_data['mobile'] = $this->input->post('mobile');
         $new_data['email'] = $this->input->post('email');
         $new_data['address'] = $this->input->post('address');
         $new_data['description'] = $this->input->post('description');
		  
		  $password = $this->input->post('password');
		  $confirm_password = $this->input->post('confirm_password');
		  if(!empty($password) && ($password === $confirm_password))
		  {
			  $new_data['password'] = $password;
		  }

         if( $this->form_validation->run() )
         {
            $this->Model_Admins->create($new_data);
            redirect('admins/index');
         }else
         {
            return;
         }

         //$this->Property->update($id, $new_data);
         
      }
	   
      $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;

      $data['admins'] = $this->Model_Admins->get_admin_by('0');
      $data['admin_roles'] = $this->Model_Admin_Roles->all();
	   
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('admins/new_admin', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function admin_role()
   {

      log_message('debug', 'My First Log');

      $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;

      $data['admin_roles'] = $this->Model_Admins->all_admin_role();

      $this->load->view('included/head'); 
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('admins/l_admins_roles', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }

   public function do_upload()
   {
      $config['upload_path'] = './images/uploads';
      $config['allowed_types'] = 'gif|jpg|png';
      $this->load->library('upload', $config);
      $this->upload->do_upload('image_file');
      $data = $this->upload->data();
      return $data['file_name'];
   }
	
  public function password($id)
   {
	  if($_POST)
      {

         $password = $this->input->post('password');
         $password2 = $this->input->post('password2');
		 
         if($password === $password2)
		 {
			$updatepass = $this->Model_Admins->password_update($id, $password);
			redirect('admins/index'); 
		 }
      }
		
      log_message('debug', 'My First Log');

      $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;

      $data['admin_roles'] = $this->Model_Admins->all_admin_role();

      $this->load->view('included/head'); 
	  $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('admins/password', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	

}
