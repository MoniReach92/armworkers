<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Properties extends CI_Controller
{
   public function index()
   {

      $faker = Faker\Factory::create();
      
      log_message('debug', 'My First Log');
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['status_group'] = ['All', 'Available', 'Unavailable'];
      $data['properties'] = $this->Property->all();

      $data['selected_filter'] = $this->session->selected_filter;

      $this->load->view('included/head'); 
	  $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('Admins/l_admins', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }

   public function kml_export()
   {
      //$this->output->set_content_type('application/xml');
      $this->output->set_content_type('application/octet-stream');
      header('Content-Disposition: inline; filename="real_estate_kml_export.kml"');
      $this->load->view('properties/kml_export');
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
      redirect('properties/index');
   }

   public function show($id)
   {
      $data['id'] = $id;
      

      $data['name'] =$this->Property->get();
      $version = $this->Property->get_version();
      $data['version'] = $version->conn_id->server_info;
      $this->load->view('properties/show', $data);
   }

   public function db_test()
   {
      
      $this->Property->connection_test();
   }

   public function edit($id)
   {
      $this->load->helper('form');
      $this->load->library('form_validation');

      log_message('debug', 'Form parameters' . print_r( $_POST, true ));

      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');

      if($_POST)
      {

         $image = FALSE;

         if($_FILES)
         {

            $image = $this->do_upload();

         }

         $name = $this->input->post('name');
         $description = $this->input->post('description');
         $new_data['name'] = $name;
         $new_data['description'] = $description;

         if($image)
         {

            $new_data['image'] = $image;

         }

         if( $this->form_validation->run() )
         {
            $this->Property->update($id, $new_data);
            redirect('properties/index');
         }else
         {
            $data['property']['name'] = $this->input->post('name');
            $data['property']['description'] = $this->input->post('description');
            $this->load->view('included/head'); $this->load->view('included/main_header', $userdata);
            $this->load->view('included/aside', $data);
            $this->load->view('Admins/l_admins', $data);
            $this->load->view('included/footer');
            $this->load->view('included/scripts');
            return;
         }

         //$this->Property->update($id, $new_data);
         
      }

      $data['property'] = $this->Property->get($id);
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('Admins/l_admins', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }

   public function do_upload()
   {
      $config['upload_path'] = './assets/images/';
      $config['allowed_types'] = 'gif|jpg|png';
      $this->load->library('upload', $config);
      $this->upload->do_upload('image_file');
      $data = $this->upload->data();
      return $data['file_name'];
   }

}
