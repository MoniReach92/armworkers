<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subjects extends CI_Controller {
	public function index()
	{
		
		log_message('debug', 'User login in Index');
		//$data['servername'] = $_SERVER['SERVER_NAME'];
		
		
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['faculties'] = ['faculty 1', 'faculty 2', 'and faculty 3'];
		$data['subjects'] = $this->Model_Subject->all();
		
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
		//$this->output->set_content_type('application/octet-stream');
//		header('Content-Disposition: inline; filename="hello_xml.kml"');
//		$this->load->view('subjects/kml_export');
	}
	
	public function view_image()
	{
		$image = file_get_contents('assets/images/products/subject_1.jpg');
		$this->output->set_content_type('jpg')->set_output($image);
	}
	
	public function set_filter()
	{
		$session_data['selected_filter'] = $this->input->get('filter');
		$this->session->set_userdata($session_data);
		redirect('subjects/index');
	}
	
	public function show($id)
	{
		log_message('debug', "User show product detail id: {$id}");
		$data['id'] = $id;
		
		$data['subject'] = $this->Model_Subject->get($id);

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('Admins/l_admins', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function destroy($id)
   {
      $this->Model_Subject->delete($id);
      redirect('subjects/index');
   }
	
	public function db_test()
	{
		$this->Model_Subject->connection_test();
		
	}
	
	public function edit($id)
	{	
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		log_message('debug', 'Form parameters' . print_r( $_POST, true ));
		
		$this->form_validation->set_rules('product_name', 'Product_Name', 'required');
		$this->form_validation->set_rules('product_rating', 'Product_Rating', 'required');
		
		if($_POST)
		{
			$image = FALSE;
			
			if($_FILES)
			{
				$image = $this->do_upload();
			}
			$product_name = $this->input->post('product_name');
			$product_rating = $this->input->post('product_rating');
			$product_review = $this->input->post('product_review');
			
			$new_data['product_name'] = $product_name;
			$new_data['product_rating'] = $product_rating;
			$new_data['product_review'] = $product_review;
			
			if($image)
			{
				$new_data['product_image'] = $image;
			}
			
			if($this->form_validation->run())
			{
				$this->Model_Subject->update($id, $new_data);
				redirect('subjects/index');
			}else
			{
				$data['subject']['product_name'] = $this->input->post('product_name');
				$data['subject']['product_rating'] = $this->input->post('product_rating');
				$data['subject']['product_review'] = $this->input->post('product_review');
				$this->load->view('included/head'); 
				$this->load->view('included/main_header', $userdata);
				$this->load->view('included/aside', $data);
				$this->load->view('Admins/l_admins', $data);
				$this->load->view('included/footer');
				$this->load->view('included/scripts');
			}
		}
		
		
        $data['subject'] = $this->Model_Subject->get($id);
        $this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('Admins/l_admins', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
		
	}
	
   public function do_upload()
   {
      $config['upload_path'] = './assets/images/products';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $this->load->library('upload', $config);
      $this->upload->do_upload('product_image');
      $data = $this->upload->data();
      return $data['file_name'];
   }
}

?>