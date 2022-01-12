<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employers extends CI_Controller
{
	public function index()
	{
		log_message('debug', 'My First Log');
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['employers'] = $this->Model_Employer->all_employers();
				
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('employers/l_employers', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function create()
	{
		$data['call_method'] =  $this->router->fetch_method();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		log_message('debug', 'Form parameters' . print_r( $_POST, true ));

		$this->form_validation->set_rules('country', 'Country Can not be blank', 'required');
//		$this->form_validation->set_rules('k_name', 'Khmer Name Cannot be blank', 'required');
//		$this->form_validation->set_rules('e_name', 'Latin Name Cannot be blank', 'required');
	     
		if($_POST)
		{
			$new_data['country'] = $this->input->post('country');
			$new_data['empl_id'] = $this->input->post('empl_id');
			$new_data['k_name'] = $this->input->post('k_name');
			$new_data['title'] = $this->input->post('title');
			$new_data['e_name'] = $this->input->post('e_name');
			$new_data['ab_name'] = $this->input->post('ab_name');
			$new_data['mobile'] = $this->input->post('mobile');
			$new_data['email'] = $this->input->post('email');
			$new_data['add1'] = $this->input->post('add1');
			$new_data['add2'] = $this->input->post('add2');
			$new_data['postal'] = $this->input->post('postal');
			$new_data['agency'] = $this->input->post('agency');
			$new_data['business_industry'] = $this->input->post('business_industry');
			$new_data['quota'] = $this->input->post('quota');
			$new_data['quo_f'] = $this->input->post('quo_f');
			$new_data['quo_m'] = $this->input->post('quo_m');
			$new_data['worker_total'] = $this->input->post('worker_total');
			$new_data['worker_f'] = $this->input->post('worker_f');
			$new_data['worker_m'] = $this->input->post('worker_m');
			$new_data['worker_total'] = $this->input->post('worker_total');
			$new_data['worker_f'] = $this->input->post('worker_f');
			$new_data['worker_m'] = $this->input->post('worker_m');
			$new_data['created_by'] = $this->input->post('created_by');
			
			$file_name1 = FALSE;
			if($_FILES)
			{
				$file_name1 = $this->do_upload1();
			}
			
			$file_name2 = FALSE;
			if($_FILES)
			{
				$file_name2 = $this->do_upload2();
			}
			
			if( $this->form_validation->run() )
			{
				$last_id = $this->Model_Employer->create($new_data);
				
				$file_data = array(
				   array(
					  'employer_id' => $last_id,
					  'doc_type' => $this->input->post('doc_type1'),
					  'number' => $this->input->post('number1'),
					  'issue_date' => $this->input->post('issue_date1'),
					  'expired_date' => $this->input->post('expired_date1'),
					  'file_name' => $file_name1,
				   ),
				   array(
					  'employer_id' => $last_id,
					  'doc_type' => $this->input->post('doc_type2'),
					  'number' => $this->input->post('number2'),
					  'issue_date' => $this->input->post('issue_date2'),
					  'expired_date' => $this->input->post('expired_date2'),
					  'file_name' => $file_name2,
				   )
				);
				
				$this->Model_Employer->create_files($file_data);
				
				redirect('employers/index');
			} else 
			{
				redirect('employers/create');
			}
		}
	   
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;

		//$data['employers'] = $this->Model_Employer->all_employers();
		$data['employer'] = $this->Model_Employer->all_employers_by('0');
		$data['industries'] = $this->Model_Industry->all();
		$data['countries'] = $this->Model_Worker->all_country();

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('employers/new_employer', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }
	
	public function edit($id)
	{
		$data['call_method'] =  $this->router->fetch_method();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		log_message('debug', 'Form parameters' . print_r( $_POST, true ));

		$this->form_validation->set_rules('country', 'Country Can not be blank', 'required');
//		$this->form_validation->set_rules('k_name', 'Khmer Name Cannot be blank', 'required');
//		$this->form_validation->set_rules('e_name', 'Latin Name Cannot be blank', 'required');
	     
		if($_POST)
		{
			$new_data['country'] = $this->input->post('country');
			$new_data['empl_id'] = $this->input->post('empl_id');
			$new_data['k_name'] = $this->input->post('k_name');
			$new_data['title'] = $this->input->post('title');
			$new_data['e_name'] = $this->input->post('e_name');
			$new_data['ab_name'] = $this->input->post('ab_name');
			$new_data['mobile'] = $this->input->post('mobile');
			$new_data['email'] = $this->input->post('email');
			$new_data['add1'] = $this->input->post('add1');
			$new_data['add2'] = $this->input->post('add2');
			$new_data['postal'] = $this->input->post('postal');
			$new_data['agency'] = $this->input->post('agency');
			$new_data['business_industry'] = $this->input->post('business_industry');
			$new_data['quota'] = $this->input->post('quota');
			$new_data['quo_f'] = $this->input->post('quo_f');
			$new_data['quo_m'] = $this->input->post('quo_m');
			$new_data['worker_total'] = $this->input->post('worker_total');
			$new_data['worker_f'] = $this->input->post('worker_f');
			$new_data['worker_m'] = $this->input->post('worker_m');
			$new_data['worker_total'] = $this->input->post('worker_total');
			$new_data['worker_f'] = $this->input->post('worker_f');
			$new_data['worker_m'] = $this->input->post('worker_m');
			$new_data['created_by'] = $this->input->post('created_by');
			
			
			if( $this->form_validation->run() )
			{
				$last_id = $this->Model_Employer->update($id, $new_data);
				redirect('employers/index');
			} else 
			{
				redirect('employers/edit');
			}
		}
	   
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;

		$data['employer'] = $this->Model_Employer->all_employers_by($id);
		$data['industries'] = $this->Model_Industry->all();
		$data['countries'] = $this->Model_Employer->all_country();

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('employers/new_employer', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }

	public function show_file($id)
	{
		if($_POST)
		{
			$file_name = FALSE;
			if($_FILES)
			{
				$file_name = $this->do_upload1();
				
				$employer_id = $this->input->post('employer_id');
				$file_data['employer_id'] = $employer_id;
				$file_data['doc_type'] = $this->input->post('doc_type');
				$file_data['number'] = $this->input->post('number');
				$file_data['issue_date'] = $this->input->post('issue_date');
				$file_data['expired_date'] = $this->input->post('expired_date');
				$file_data['file_name'] = $file_name;
				
				$this->Model_Employer->create_file($file_data);
				
				redirect("employers/show_file/{$employer_id}");
			}
		}
		
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$this->load->helper('form');
		$data['id'] = $id;
		$data['attachments'] = $this->Model_Employer->all_file($id);
		
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('employers/attachment', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }
	
	public function destroy_file($id)
	{
		
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['id'] = $id;
		$data['attachment'] = $this->Model_Employer->all_file_by($id);
		
		if($_POST)
		{
			$file_id = $this->input->post('doc_id');
			$employer_id = $this->input->post('employer_id');
			if(!empty($file_id)) 
			{
				$this->Model_Employer->destroy_file($file_id);
				redirect("employers/show_file/{$employer_id}");
			}
		}
		
		
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('employers/destroy_file', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }
	
	
	
	public function do_upload1()
	{
		$config['upload_path'] = './images/employer_docs';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name1');
		$data = $this->upload->data();
		return $data['file_name'];
	}
	
	public function do_upload2()
	{
		$config['upload_path'] = './images/employer_docs';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name2');
		$data = $this->upload->data();
		return $data['file_name'];
	}
	
}
