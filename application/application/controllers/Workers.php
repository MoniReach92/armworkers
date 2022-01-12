<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Workers extends CI_Controller
{
	public function index()
	{
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['workers'] = $this->Model_Worker->all_workers();	
				
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('workers/l_workers', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function group($id)
	{
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['workers'] = $this->Model_Worker->all_workers_by_group($id);	
				
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('workers/l_workers', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function worker_photo($id)
	{
		$this->load->helper('form');
		
		if($_POST)
		{
			$file_name1 = FALSE;
			if($_FILES)
			{
				$file_name1 = $this->do_upload9();
				$new_data['worker_photo'] = $file_name1;
				$result = $this->Model_Worker->update_photo($id, $new_data);
				if($result)
				{
					redirect('Workers/index');
				}
					
			}
		}
		
		$userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		$data['id'] = $id;
		$data['worker'] = $this->Model_Worker->get_photo($id);

		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('workers/worker_photo', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function create()
	{
		$data['call_method'] =  $this->router->fetch_method();
		$data['call_class'] = $this->router->fetch_class();
		
		$this->load->helper('form');
		
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		if($_POST)
		{
			$new_data['group_id']=$this->input->post('group_id');
			$new_data['country']=$this->input->post('country');
			$new_data['k_fname']=$this->input->post('k_fname');
			$new_data['k_lname']=$this->input->post('k_lname');
			$new_data['e_fname']=$this->input->post('e_fname');
			$new_data['e_lname']=$this->input->post('e_lname');
			$new_data['gender']=$this->input->post('gender');
			$new_data['dob']=$this->input->post('dob');
			$new_data['nationality']=$this->input->post('nationality');
			$new_data['race']=$this->input->post('race');
			$new_data['religion']=$this->input->post('religion');
			$new_data['title']=$this->input->post('title');
			$new_data['marital']=$this->input->post('marital');
			$new_data['job_title']=$this->input->post('job_title');
			$new_data['industry']=$this->input->post('industry');
			$new_data['mobile']=$this->input->post('mobile');
			$new_data['email']=$this->input->post('email');
			$new_data['birth_province']=$this->input->post('birth_province');
			$new_data['birth_district']=$this->input->post('birth_district');
			$new_data['birth_commune']=$this->input->post('birth_commune');
			$new_data['birth_village']=$this->input->post('birth_village');
			
			echo $new_data['birth_province'] . "b<br />";
			echo $new_data['birth_district'] . "b<br />";
			echo $new_data['birth_commune'] . "b<br />";
			echo $new_data['birth_village'] . "b<br />";
			
			$capchecked = $this->input->post('capchecked');
			if($capchecked != null)
			{
				$new_data['cur_add_province']=$this->input->post('birth_province');
				$new_data['cur_add_district']=$this->input->post('birth_district');
				$new_data['cur_add_commune']=$this->input->post('birth_commune');
				$new_data['cur_add_village']=$this->input->post('birth_village');
			}else{
				$new_data['cur_add_province']=$this->input->post('cur_add_province');
				$new_data['cur_add_district']=$this->input->post('cur_add_district');
				$new_data['cur_add_commune']=$this->input->post('cur_add_commune');
				$new_data['cur_add_village']=$this->input->post('cur_add_village');
			}
			
			echo $new_data['cur_add_province'] . "c<br />";
			echo $new_data['cur_add_district'] . "c<br />";
			echo $new_data['cur_add_commune'] . "c<br />";
			echo $new_data['cur_add_village'] . "c<br />";
			
			$worker_id = $this->Model_Worker->create($new_data);
			
			$parent_data['worker_id']= $worker_id;
			$parent_data['f_k_fname']=$this->input->post('f_k_fname');
			$parent_data['f_k_lname']=$this->input->post('f_k_lname');
			$parent_data['f_e_fname']=$this->input->post('f_e_fname');
			$parent_data['f_e_lname']=$this->input->post('f_e_lname');
			$parent_data['f_dob']=$this->input->post('f_dob');
			$parent_data['f_race']=$this->input->post('f_race');
			$parent_data['f_accupation']=$this->input->post('f_accupation');
			$parent_data['f_mobile']=$this->input->post('f_mobile');
			$parent_data['m_k_fname']=$this->input->post('m_k_fname');
			$parent_data['m_k_lname']=$this->input->post('m_k_lname');
			$parent_data['m_e_fname']=$this->input->post('m_e_fname');
			$parent_data['m_e_lname']=$this->input->post('m_e_lname');
			$parent_data['m_dob']=$this->input->post('m_dob');
			$parent_data['m_race']=$this->input->post('m_race');
			$parent_data['m_accupation']=$this->input->post('m_accupation');
			$parent_data['m_mobile']=$this->input->post('m_mobile');
			$pcur_add_check=$this->input->post('pcur_add_check');
			if($pcur_add_check != null)
			{
				$parent_data['pcur_add_province']=$this->input->post('birth_province');
				$parent_data['pcur_add_district']=$this->input->post('birth_district');
				$parent_data['pcur_add_commune']=$this->input->post('birth_commune');
				$parent_data['pcur_add_village']=$this->input->post('birth_village');
			}else{
				$parent_data['pcur_add_province']=$this->input->post('pcur_add_province');
				$parent_data['pcur_add_district']=$this->input->post('pcur_add_district');
				$parent_data['pcur_add_commune']=$this->input->post('pcur_add_commune');
				$parent_data['pcur_add_village']=$this->input->post('pcur_add_village');
			}
			
//			echo $parent_data['pcur_add_province'] . "p<br />";
//			echo $parent_data['pcur_add_district'] . "p<br />";
//			echo $parent_data['pcur_add_commune'] . "p<br />";
//			echo $parent_data['pcur_add_village'] . "p<br />";
			
			$this->Model_Worker->create_parent($parent_data);
			
			$spouse_data['worker_id']= $worker_id;
			$spouse_data['sp_k_fname']=$this->input->post('sp_k_fname');
			$spouse_data['sp_k_lname']=$this->input->post('sp_k_lname');
			$spouse_data['sp_e_fname']=$this->input->post('sp_e_fname');
			$spouse_data['sp_e_lname']=$this->input->post('sp_e_lname');
			$spouse_data['sp_dob']=$this->input->post('sp_dob');
			$spouse_data['sp_race']=$this->input->post('sp_race');
			$spouse_data['sp_occupation']=$this->input->post('sp_occupation');
			$spouse_data['sp_mobile']=$this->input->post('sp_mobile');
			$scur_add_check=$this->input->post('scur_add_check');
			if($scur_add_check != null)
			{
				$spouse_data['scur_add_province']=$this->input->post('birth_province');
				$spouse_data['scur_add_district']=$this->input->post('birth_district');
				$spouse_data['scur_add_commune']=$this->input->post('birth_commune');
				$spouse_data['scur_add_village']=$this->input->post('birth_village');
			}else{
				$spouse_data['scur_add_province']=$this->input->post('scur_add_province');
				$spouse_data['scur_add_district']=$this->input->post('scur_add_district');
				$spouse_data['scur_add_commune']=$this->input->post('scur_add_commune');
				$spouse_data['scur_add_village']=$this->input->post('scur_add_village');
			}
			
//			echo $spouse_data['scur_add_province'] . "s<br />";
//			echo $spouse_data['scur_add_district'] . "s<br />";
//			echo $spouse_data['scur_add_commune'] . "s<br />";
//			echo $spouse_data['scur_add_village'] . "s<br />";
			
			$this->Model_Worker->create_spouse($spouse_data);
			
			$emergency_data['worker_id']= $worker_id;
			$emergency_data['sos_contact']=$this->input->post('sos_contact');
			$sos_contact = $emergency_data['sos_contact'];
			echo $sos_contact . "<br />";
			if($sos_contact === 'Spouse'){
				$emergency_data['sos_fname']=$this->input->post('sp_k_fname');
				$emergency_data['sos_lname']=$this->input->post('sp_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('sp_mobile');
				if($scur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('sos_province');
					$emergency_data['sos_district']=$this->input->post('sos_district');
					$emergency_data['sos_commune']=$this->input->post('sos_commune');
					$emergency_data['sos_village']=$this->input->post('sos_village');
				}
			}elseif($sos_contact === 'Father'){
				$emergency_data['sos_fname']=$this->input->post('f_k_fname');
				$emergency_data['sos_lname']=$this->input->post('f_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('f_mobile');
				if($pcur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('pcur_add_province');
					$emergency_data['sos_district']=$this->input->post('pcur_add_district');
					$emergency_data['sos_commune']=$this->input->post('pcur_add_commune');
					$emergency_data['sos_village']=$this->input->post('pcur_add_village');
				}
				
			}elseif($sos_contact === 'Mother'){
				$emergency_data['sos_fname']=$this->input->post('m_k_fname');
				$emergency_data['sos_lname']=$this->input->post('m_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('m_mobile');
				if($pcur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('pcur_add_province');
					$emergency_data['sos_district']=$this->input->post('pcur_add_district');
					$emergency_data['sos_commune']=$this->input->post('pcur_add_commune');
					$emergency_data['sos_village']=$this->input->post('pcur_add_village');
				}
			}else{
				$emergency_data['sos_fname']=$this->input->post('sos_fname');
				$emergency_data['sos_lname']=$this->input->post('sos_lname');
				$emergency_data['sos_mobile']=$this->input->post('sos_mobile');
				$emergency_data['relative']=$this->input->post('relative');
				$sos_add=$this->input->post('sos_add');
				if($sos_add != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('sos_province');
					$emergency_data['sos_district']=$this->input->post('sos_district');
					$emergency_data['sos_commune']=$this->input->post('sos_commune');
					$emergency_data['sos_village']=$this->input->post('sos_village');
				}
			}
			
//			echo $emergency_data['sos_province'] . "e<br />";
//			echo $emergency_data['sos_district'] . "e<br />";
//			echo $emergency_data['sos_commune'] . "e<br />";
//			echo $emergency_data['sos_village'] . "e<br />";
			
			$this->Model_Worker->create_emergency($emergency_data);
			
			$education_data['worker_id']= $worker_id;
			$education_data['geducation']=$this->input->post('geducation');
			$education_data['skill']=$this->input->post('skill');
			$education_data['level']=$this->input->post('level');
			$education_data['vocat']=$this->input->post('vocat');
			$education_data['vocalevel']=$this->input->post('vocalevel');
			$education_data['flanguage']=$this->input->post('flanguage');
			$education_data['flanguage_yes_no']=$this->input->post('flanguage_yes_no');
			$education_data['drivelic']=$this->input->post('drivelic');
			
			$this->Model_Worker->create_education($education_data);
			
			$employment_data['worker_id']= $worker_id;
			$employment_data['employer_id']=$this->input->post('employer_id');
			$employment_data['working_status']=$this->input->post('working_status');
			$employment_data['wage']=$this->input->post('wage');
			$employment_data['currency']=$this->input->post('currency');
			$employment_data['contract_start_date']=$this->input->post('contract_start_date');
			$employment_data['contract_end_date']=$this->input->post('contract_end_date');
			$employment_data['departure_date']=$this->input->post('departure_date');
			$employment_data['working_date']=$this->input->post('working_date');
			$employment_data['return_date']=$this->input->post('return_date');
			$employment_data['pre_depart_date']=$this->input->post('pre_depart_date');
			$employment_data['lang_start_date']=$this->input->post('lang_start_date');
			$employment_data['lang_end_date']=$this->input->post('lang_end_date');
			$employment_data['signing_manpow_date']=$this->input->post('signing_manpow_date');
			$employment_data['signing_workin_date']=$this->input->post('signing_workin_date');
			
			$this->Model_Worker->create_employment($employment_data);
		
		}
		
		$data['branches'] = $this->Model_Branch->all();
		$data['groups'] = $this->Model_Group->all_group();
		$data['countries'] = $this->Model_Worker->all_country();
		$data['job_titles'] = $this->Model_JobTitle->all();
		$data['relatives'] = $this->Model_Others->relatives();
		$data['educations'] = $this->Model_Others->educations();
		$data['employers'] = $this->Model_Employer->employers();
		$data['work_statuss'] = $this->Model_WorkStatus->work_statuss();
		$data['industries'] = $this->Model_Industry->all();
		$data['provinces'] = $this->Model_Gazeetteer->provinces();
		//$data['worker'] = $this->Model_Worker->get_by('0');
		//$workers = $data['worker'];
		//print_r($workers);
		//$data['parent'] = $this->Model_WorkerParent->get_by('0');
		$data['parent'] = NULL;
		$data['spouse'] = $this->Model_WorkerSpouse->get_by('0');
		$data['emergency'] = $this->Model_WorkerEmegency->get_by('0');
		$data['educationw'] = $this->Model_WorkerEducation->get_by('0');
		$data['employment'] = $this->Model_WorkerEployment->get_by('0');
				
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('workers/body_head');
		$this->load->view('workers/worker_detail', $data);
		$this->load->view('workers/worker_parents', $data);
		$this->load->view('workers/worker_spouse');
		$this->load->view('workers/worker_emergency', $data);
		$this->load->view('workers/worker_education', $data);
		$this->load->view('workers/worker_employment', $data);
		$this->load->view('workers/body_foot');
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function update_detail($id)
	{
		$data['call_method'] =  $this->router->fetch_method();
		$data['call_class'] = $this->router->fetch_class();
		
		$data['call_'] =  $this->router->fetch_method();
		$this->load->helper('form');
		
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$data['worker_id'] = $id;
		
		if($_POST)
		{
			$new_data['group_id']=$this->input->post('group_id');
			$new_data['country']=$this->input->post('country');
			$new_data['k_fname']=$this->input->post('k_fname');
			$new_data['k_lname']=$this->input->post('k_lname');
			$new_data['e_fname']=$this->input->post('e_fname');
			$new_data['e_lname']=$this->input->post('e_lname');
			$new_data['gender']=$this->input->post('gender');
			$new_data['dob']=$this->input->post('dob');
			$new_data['nationality']=$this->input->post('nationality');
			$new_data['race']=$this->input->post('race');
			$new_data['religion']=$this->input->post('religion');
			$new_data['title']=$this->input->post('title');
			$new_data['marital']=$this->input->post('marital');
			$new_data['job_title']=$this->input->post('job_title');
			$new_data['industry']=$this->input->post('industry');
			$new_data['mobile']=$this->input->post('mobile');
			$new_data['email']=$this->input->post('email');
			$new_data['birth_province']=$this->input->post('birth_province');
			$new_data['birth_district']=$this->input->post('birth_district');
			$new_data['birth_commune']=$this->input->post('birth_commune');
			$new_data['birth_village']=$this->input->post('birth_village');
			$capchecked = $this->input->post('capchecked');
			if($capchecked != null)
			{
				$new_data['cur_add_province']=$this->input->post('birth_province');
				$new_data['cur_add_district']=$this->input->post('birth_district');
				$new_data['cur_add_commune']=$this->input->post('birth_commune');
				$new_data['cur_add_village']=$this->input->post('birth_village');
			}else{
				$new_data['cur_add_province']=$this->input->post('cur_add_province');
				$new_data['cur_add_district']=$this->input->post('cur_add_district');
				$new_data['cur_add_commune']=$this->input->post('cur_add_commune');
				$new_data['cur_add_village']=$this->input->post('cur_add_village');
			}
			
			$this->Model_Worker->update($id, $new_data);
			
			//$parent_data['worker_id']= $id;
			$parent_data['f_k_fname']=$this->input->post('f_k_fname');
			$parent_data['f_k_lname']=$this->input->post('f_k_lname');
			$parent_data['f_e_fname']=$this->input->post('f_e_fname');
			$parent_data['f_e_lname']=$this->input->post('f_e_lname');
			$parent_data['f_dob']=$this->input->post('f_dob');
			$parent_data['f_race']=$this->input->post('f_race');
			$parent_data['f_accupation']=$this->input->post('f_accupation');
			$parent_data['f_mobile']=$this->input->post('f_mobile');
			$parent_data['m_k_fname']=$this->input->post('m_k_fname');
			$parent_data['m_k_lname']=$this->input->post('m_k_lname');
			$parent_data['m_e_fname']=$this->input->post('m_e_fname');
			$parent_data['m_e_lname']=$this->input->post('m_e_lname');
			$parent_data['m_dob']=$this->input->post('m_dob');
			$parent_data['m_race']=$this->input->post('m_race');
			$parent_data['m_accupation']=$this->input->post('m_accupation');
			$parent_data['m_mobile']=$this->input->post('m_mobile');
			$pcur_add_check=$this->input->post('pcur_add_check');
			if($pcur_add_check != null)
			{
				$parent_data['pcur_add_province']=$this->input->post('birth_province');
				$parent_data['pcur_add_district']=$this->input->post('birth_district');
				$parent_data['pcur_add_commune']=$this->input->post('birth_commune');
				$parent_data['pcur_add_village']=$this->input->post('birth_village');
			}else{
				$parent_data['pcur_add_province']=$this->input->post('pcur_add_province');
				$parent_data['pcur_add_district']=$this->input->post('pcur_add_district');
				$parent_data['pcur_add_commune']=$this->input->post('pcur_add_commune');
				$parent_data['pcur_add_village']=$this->input->post('pcur_add_village');
			}
			
			$this->Model_Worker->update_parent($id, $parent_data);
			
			//$spouse_data['worker_id']= $id;
			$spouse_data['sp_k_fname']=$this->input->post('sp_k_fname');
			$spouse_data['sp_k_lname']=$this->input->post('sp_k_lname');
			$spouse_data['sp_e_fname']=$this->input->post('sp_e_fname');
			$spouse_data['sp_e_lname']=$this->input->post('sp_e_lname');
			$spouse_data['sp_dob']=$this->input->post('sp_dob');
			$spouse_data['sp_race']=$this->input->post('sp_race');
			$spouse_data['sp_occupation']=$this->input->post('sp_occupation');
			$spouse_data['sp_mobile']=$this->input->post('sp_mobile');
			$scur_add_check=$this->input->post('scur_add_check');
			if($scur_add_check != null)
			{
				$spouse_data['scur_add_province']=$this->input->post('birth_province');
				$spouse_data['scur_add_district']=$this->input->post('birth_district');
				$spouse_data['scur_add_commune']=$this->input->post('birth_commune');
				$spouse_data['scur_add_village']=$this->input->post('birth_village');
			}else{
				$spouse_data['scur_add_province']=$this->input->post('scur_add_province');
				$spouse_data['scur_add_district']=$this->input->post('scur_add_district');
				$spouse_data['scur_add_commune']=$this->input->post('scur_add_commune');
				$spouse_data['scur_add_village']=$this->input->post('scur_add_village');
			}
			
			$this->Model_Worker->update_spouse($id, $spouse_data);
			
			//$emergency_data['worker_id']= $id;
			$emergency_data['sos_contact']=$this->input->post('sos_contact');
			$emergency_data['sos_fname']=$this->input->post('sos_fname');
			$emergency_data['sos_lname']=$this->input->post('sos_lname');
			$sos_contact = $emergency_data['sos_contact'];
			//echo $sos_contact . "<br />";
			if($sos_contact === 'Spouse'){
				$emergency_data['sos_fname']=$this->input->post('sp_k_fname');
				$emergency_data['sos_lname']=$this->input->post('sp_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('sp_mobile');
				if($scur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('sos_province');
					$emergency_data['sos_district']=$this->input->post('sos_district');
					$emergency_data['sos_commune']=$this->input->post('sos_commune');
					$emergency_data['sos_village']=$this->input->post('sos_village');
				}
			}elseif($sos_contact === 'Father'){
				$emergency_data['sos_fname']=$this->input->post('f_k_fname');
				$emergency_data['sos_lname']=$this->input->post('f_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('f_mobile');
				if($pcur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('pcur_add_province');
					$emergency_data['sos_district']=$this->input->post('pcur_add_district');
					$emergency_data['sos_commune']=$this->input->post('pcur_add_commune');
					$emergency_data['sos_village']=$this->input->post('pcur_add_village');
				}
				
			}elseif($sos_contact === 'Mother'){
				$emergency_data['sos_fname']=$this->input->post('m_k_fname');
				$emergency_data['sos_lname']=$this->input->post('m_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('m_mobile');
				if($pcur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('pcur_add_province');
					$emergency_data['sos_district']=$this->input->post('pcur_add_district');
					$emergency_data['sos_commune']=$this->input->post('pcur_add_commune');
					$emergency_data['sos_village']=$this->input->post('pcur_add_village');
				}
			}else{
				$emergency_data['sos_fname']=$this->input->post('sos_fname');
				$emergency_data['sos_lname']=$this->input->post('sos_lname');
				$emergency_data['sos_mobile']=$this->input->post('sos_mobile');
				$emergency_data['relative']=$this->input->post('relative');
				$sos_add=$this->input->post('sos_add');
				if($sos_add != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('sos_province');
					$emergency_data['sos_district']=$this->input->post('sos_district');
					$emergency_data['sos_commune']=$this->input->post('sos_commune');
					$emergency_data['sos_village']=$this->input->post('sos_village');
				}
			}
			
			$this->Model_Worker->update_emergency($id, $emergency_data);
			
			//$education_data['worker_id']= $id;
			$education_data['geducation']=$this->input->post('geducation');
			$education_data['skill']=$this->input->post('skill');
			$education_data['level']=$this->input->post('level');
			$education_data['vocat']=$this->input->post('vocat');
			$education_data['vocalevel']=$this->input->post('vocalevel');
			$education_data['flanguage']=$this->input->post('flanguage');
			$education_data['flanguage_yes_no']=$this->input->post('flanguage_yes_no');
			$education_data['drivelic']=$this->input->post('drivelic');
			
			$this->Model_Worker->update_education($id, $education_data);
			
			//$employment_data['worker_id']= $id;
			$employment_data['employer_id']=$this->input->post('employer_id');
			$employment_data['working_status']=$this->input->post('working_status');
			$employment_data['wage']=$this->input->post('wage');
			$employment_data['currency']=$this->input->post('currency');
			$employment_data['contract_start_date']=$this->input->post('contract_start_date');
			$employment_data['contract_end_date']=$this->input->post('contract_end_date');
			$employment_data['departure_date']=$this->input->post('departure_date');
			$employment_data['working_date']=$this->input->post('working_date');
			$employment_data['return_date']=$this->input->post('return_date');
			$employment_data['pre_depart_date']=$this->input->post('pre_depart_date');
			$employment_data['lang_start_date']=$this->input->post('lang_start_date');
			$employment_data['lang_end_date']=$this->input->post('lang_end_date');
			$employment_data['signing_manpow_date']=$this->input->post('signing_manpow_date');
			$employment_data['signing_workin_date']=$this->input->post('signing_workin_date');
			
			$this->Model_Worker->update_employment($id, $employment_data);
		
		}
		
		$data['branches'] = $this->Model_Branch->all();
		$data['groups'] = $this->Model_Group->all_group();
		$data['countries'] = $this->Model_Worker->all_country();
		$data['job_titles'] = $this->Model_JobTitle->all();
		$data['relatives'] = $this->Model_Others->relatives();
		$data['educations'] = $this->Model_Others->educations();
		$data['employers'] = $this->Model_Employer->employers();
		$data['work_statuss'] = $this->Model_WorkStatus->work_statuss();
		$data['industries'] = $this->Model_Industry->all();
		$data['provinces'] = $this->Model_Gazeetteer->provinces();
		$data['worker'] = $this->Model_Worker->get_by($id);
		$data['parent'] = $this->Model_WorkerParent->get_by($id);
		$data['spouse'] = $this->Model_WorkerSpouse->get_by($id);
		$data['emergency'] = $this->Model_WorkerEmegency->get_by($id);
		$data['educationw'] = $this->Model_WorkerEducation->get_by($id);
		$data['employment'] = $this->Model_WorkerEployment->get_by($id);
				
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('workers/body_head');
		$this->load->view('workers/worker_detail', $data);
		$this->load->view('workers/worker_parents', $data);
		$this->load->view('workers/worker_spouse', $data);
		$this->load->view('workers/worker_emergency', $data);
		$this->load->view('workers/worker_education', $data);
		$this->load->view('workers/worker_employment', $data);
		$this->load->view('workers/body_foot');
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
	}
	
	public function savedata()
	{
		//if($this->input->post('type')==1)
		if($_POST)
		{
			$new_data['group_id']=$this->input->post('group_id');
			$new_data['country']=$this->input->post('country');
			$new_data['k_fname']=$this->input->post('k_fname');
			$new_data['k_lname']=$this->input->post('k_lname');
			$new_data['e_fname']=$this->input->post('e_fname');
			$new_data['e_lname']=$this->input->post('e_lname');
			$new_data['gender']=$this->input->post('gender');
			$new_data['dob']=$this->input->post('dob');
			$new_data['nationality']=$this->input->post('nationality');
			$new_data['race']=$this->input->post('race');
			$new_data['religion']=$this->input->post('religion');
			$new_data['title']=$this->input->post('title');
			$new_data['marital']=$this->input->post('marital');
			$new_data['job_title']=$this->input->post('job_title');
			$new_data['industry']=$this->input->post('industry');
			$new_data['mobile']=$this->input->post('mobile');
			$new_data['email']=$this->input->post('email');
			$new_data['birth_province']=$this->input->post('birth_province');
			$new_data['birth_district']=$this->input->post('birth_district');
			$new_data['birth_commune']=$this->input->post('birth_commune');
			$new_data['birth_village']=$this->input->post('birth_village');
			
			echo $new_data['birth_province'] . "b<br />";
			echo $new_data['birth_district'] . "b<br />";
			echo $new_data['birth_commune'] . "b<br />";
			echo $new_data['birth_village'] . "b<br />";
			
			$capchecked = $this->input->post('capchecked');
			if($capchecked != null)
			{
				$new_data['cur_add_province']=$this->input->post('birth_province');
				$new_data['cur_add_district']=$this->input->post('birth_district');
				$new_data['cur_add_commune']=$this->input->post('birth_commune');
				$new_data['cur_add_village']=$this->input->post('birth_village');
			}else{
				$new_data['cur_add_province']=$this->input->post('cur_add_province');
				$new_data['cur_add_district']=$this->input->post('cur_add_district');
				$new_data['cur_add_commune']=$this->input->post('cur_add_commune');
				$new_data['cur_add_village']=$this->input->post('cur_add_village');
			}
			
			echo $new_data['cur_add_province'] . "c<br />";
			echo $new_data['cur_add_district'] . "c<br />";
			echo $new_data['cur_add_commune'] . "c<br />";
			echo $new_data['cur_add_village'] . "c<br />";
			
			$worker_id = $this->Model_Worker->create($new_data);
			
			$parent_data['worker_id']= $worker_id;
			$parent_data['f_k_fname']=$this->input->post('f_k_fname');
			$parent_data['f_k_lname']=$this->input->post('f_k_lname');
			$parent_data['f_e_fname']=$this->input->post('f_e_fname');
			$parent_data['f_e_lname']=$this->input->post('f_e_lname');
			$parent_data['f_dob']=$this->input->post('f_dob');
			$parent_data['f_race']=$this->input->post('f_race');
			$parent_data['f_accupation']=$this->input->post('f_accupation');
			$parent_data['f_mobile']=$this->input->post('f_mobile');
			$parent_data['m_k_fname']=$this->input->post('m_k_fname');
			$parent_data['m_k_lname']=$this->input->post('m_k_lname');
			$parent_data['m_e_fname']=$this->input->post('m_e_fname');
			$parent_data['m_e_lname']=$this->input->post('m_e_lname');
			$parent_data['m_dob']=$this->input->post('m_dob');
			$parent_data['m_race']=$this->input->post('m_race');
			$parent_data['m_accupation']=$this->input->post('m_accupation');
			$parent_data['m_mobile']=$this->input->post('m_mobile');
			$pcur_add_check=$this->input->post('pcur_add_check');
			if($pcur_add_check != null)
			{
				$parent_data['pcur_add_province']=$this->input->post('birth_province');
				$parent_data['pcur_add_district']=$this->input->post('birth_district');
				$parent_data['pcur_add_commune']=$this->input->post('birth_commune');
				$parent_data['pcur_add_village']=$this->input->post('birth_village');
			}else{
				$parent_data['pcur_add_province']=$this->input->post('pcur_add_province');
				$parent_data['pcur_add_district']=$this->input->post('pcur_add_district');
				$parent_data['pcur_add_commune']=$this->input->post('pcur_add_commune');
				$parent_data['pcur_add_village']=$this->input->post('pcur_add_village');
			}
			
//			echo $parent_data['pcur_add_province'] . "p<br />";
//			echo $parent_data['pcur_add_district'] . "p<br />";
//			echo $parent_data['pcur_add_commune'] . "p<br />";
//			echo $parent_data['pcur_add_village'] . "p<br />";
			
			$this->Model_Worker->create_parent($parent_data);
			
			$spouse_data['worker_id']= $worker_id;
			$spouse_data['sp_k_fname']=$this->input->post('sp_k_fname');
			$spouse_data['sp_k_lname']=$this->input->post('sp_k_lname');
			$spouse_data['sp_e_fname']=$this->input->post('sp_e_fname');
			$spouse_data['sp_e_lname']=$this->input->post('sp_e_lname');
			$spouse_data['sp_dob']=$this->input->post('sp_dob');
			$spouse_data['sp_race']=$this->input->post('sp_race');
			$spouse_data['sp_occupation']=$this->input->post('sp_occupation');
			$spouse_data['sp_mobile']=$this->input->post('sp_mobile');
			$scur_add_check=$this->input->post('scur_add_check');
			if($scur_add_check != null)
			{
				$spouse_data['scur_add_province']=$this->input->post('birth_province');
				$spouse_data['scur_add_district']=$this->input->post('birth_district');
				$spouse_data['scur_add_commune']=$this->input->post('birth_commune');
				$spouse_data['scur_add_village']=$this->input->post('birth_village');
			}else{
				$spouse_data['scur_add_province']=$this->input->post('scur_add_province');
				$spouse_data['scur_add_district']=$this->input->post('scur_add_district');
				$spouse_data['scur_add_commune']=$this->input->post('scur_add_commune');
				$spouse_data['scur_add_village']=$this->input->post('scur_add_village');
			}
			
//			echo $spouse_data['scur_add_province'] . "s<br />";
//			echo $spouse_data['scur_add_district'] . "s<br />";
//			echo $spouse_data['scur_add_commune'] . "s<br />";
//			echo $spouse_data['scur_add_village'] . "s<br />";
			
			$this->Model_Worker->create_spouse($spouse_data);
			
			$emergency_data['worker_id']= $worker_id;
			$emergency_data['sos_contact']=$this->input->post('sos_contact');
			$sos_contact = $emergency_data['sos_contact'];
			echo $sos_contact . "<br />";
			if($sos_contact === 'Spouse'){
				$emergency_data['sos_fname']=$this->input->post('sp_k_fname');
				$emergency_data['sos_lname']=$this->input->post('sp_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('sp_mobile');
				if($scur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('sos_province');
					$emergency_data['sos_district']=$this->input->post('sos_district');
					$emergency_data['sos_commune']=$this->input->post('sos_commune');
					$emergency_data['sos_village']=$this->input->post('sos_village');
				}
			}elseif($sos_contact === 'Father'){
				$emergency_data['sos_fname']=$this->input->post('f_k_fname');
				$emergency_data['sos_lname']=$this->input->post('f_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('f_mobile');
				if($pcur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('pcur_add_province');
					$emergency_data['sos_district']=$this->input->post('pcur_add_district');
					$emergency_data['sos_commune']=$this->input->post('pcur_add_commune');
					$emergency_data['sos_village']=$this->input->post('pcur_add_village');
				}
				
			}elseif($sos_contact === 'Mother'){
				$emergency_data['sos_fname']=$this->input->post('m_k_fname');
				$emergency_data['sos_lname']=$this->input->post('m_k_lname');
				$emergency_data['sos_mobile']=$this->input->post('m_mobile');
				if($pcur_add_check != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('pcur_add_province');
					$emergency_data['sos_district']=$this->input->post('pcur_add_district');
					$emergency_data['sos_commune']=$this->input->post('pcur_add_commune');
					$emergency_data['sos_village']=$this->input->post('pcur_add_village');
				}
			}else{
				$emergency_data['sos_fname']=$this->input->post('sos_fname');
				$emergency_data['sos_lname']=$this->input->post('sos_lname');
				$emergency_data['sos_mobile']=$this->input->post('sos_mobile');
				$emergency_data['relative']=$this->input->post('relative');
				$sos_add=$this->input->post('sos_add');
				if($sos_add != null)
				{
					$emergency_data['sos_province']=$this->input->post('birth_province');
					$emergency_data['sos_district']=$this->input->post('birth_district');
					$emergency_data['sos_commune']=$this->input->post('birth_commune');
					$emergency_data['sos_village']=$this->input->post('birth_village');
				}else{
					$emergency_data['sos_province']=$this->input->post('sos_province');
					$emergency_data['sos_district']=$this->input->post('sos_district');
					$emergency_data['sos_commune']=$this->input->post('sos_commune');
					$emergency_data['sos_village']=$this->input->post('sos_village');
				}
			}
			
//			echo $emergency_data['sos_province'] . "e<br />";
//			echo $emergency_data['sos_district'] . "e<br />";
//			echo $emergency_data['sos_commune'] . "e<br />";
//			echo $emergency_data['sos_village'] . "e<br />";
			
			$this->Model_Worker->create_emergency($emergency_data);
			
			$education_data['worker_id']= $worker_id;
			$education_data['geducation']=$this->input->post('geducation');
			$education_data['skill']=$this->input->post('skill');
			$education_data['level']=$this->input->post('level');
			$education_data['vocat']=$this->input->post('vocat');
			$education_data['vocalevel']=$this->input->post('vocalevel');
			$education_data['flanguage']=$this->input->post('flanguage');
			$education_data['flanguage_yes_no']=$this->input->post('flanguage_yes_no');
			$education_data['drivelic']=$this->input->post('drivelic');
			
			$this->Model_Worker->create_education($education_data);
			
			$employment_data['worker_id']= $worker_id;
			$employment_data['employer_id']=$this->input->post('employer_id');
			$employment_data['working_status']=$this->input->post('working_status');
			$employment_data['wage']=$this->input->post('wage');
			$employment_data['currency']=$this->input->post('currency');
			$employment_data['contract_start_date']=$this->input->post('contract_start_date');
			$employment_data['contract_end_date']=$this->input->post('contract_end_date');
			$employment_data['departure_date']=$this->input->post('departure_date');
			$employment_data['working_date']=$this->input->post('working_date');
			$employment_data['return_date']=$this->input->post('return_date');
			$employment_data['pre_depart_date']=$this->input->post('pre_depart_date');
			$employment_data['lang_start_date']=$this->input->post('lang_start_date');
			$employment_data['lang_end_date']=$this->input->post('lang_end_date');
			$employment_data['signing_manpow_date']=$this->input->post('signing_manpow_date');
			$employment_data['signing_workin_date']=$this->input->post('signing_workin_date');
			
			$this->Model_Worker->create_employment($employment_data);
			//print_r($result);
			//echo json_encode(array(
//				"statusCode"=>200,
//			));
		} 
	}
	
	public function show_file($id)
	{
		if($_POST)
		{
			$file_name = FALSE;
			if($_FILES)
			{
				$doc_type = $this->input->post('doc_type');
				if(!empty($doc_type))
				{
					$file_name = $this->do_upload1();

					$worker_id = $this->input->post('worker_id');
					$file_data['worker_id'] = $worker_id;
					$file_data['doc_type'] = $this->input->post('doc_type');
					$file_data['number'] = $this->input->post('number');
					$file_data['issue_date'] = $this->input->post('issue_date');
					$file_data['expired_date'] = $this->input->post('expired_date');
					$file_data['description'] = $this->input->post('description');
					$file_data['file_name'] = $file_name;

					$this->Model_Worker->create_file($file_data);

					redirect("workers/show_file/{$worker_id}");
				}				
			}
		}
		
        $userdata['user_name'] = $this->session->fname;
		$userdata['user_email'] = $this->session->email;
		$userdata['user_id'] = $this->session->id;
		$userdata['avata'] = $this->session->image_file;
		
		$this->load->helper('form');
		$data['id'] = $id;
		$data['attachments'] = $this->Model_Worker->all_file($id);
		
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('workers/attachment', $data);
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
		$data['attachment'] = $this->Model_Worker->all_file_by($id);
		
		if($_POST)
		{
			$file_id = $this->input->post('doc_id');
			$worker_id = $this->input->post('worker_id');
			if(!empty($file_id)) 
			{
				$this->Model_Worker->destroy_file($file_id);
				redirect("workers/show_file/{$worker_id}");
			}
		}
		
		
		$this->load->view('included/head'); 
		$this->load->view('included/main_header', $userdata);
		$this->load->view('included/aside', $data);
		$this->load->view('workers/destroy_file', $data);
		$this->load->view('included/footer');
		$this->load->view('included/scripts');
   }
	
	public function do_upload9()
	{
		$config['upload_path'] = './images/worker_photo';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name1');
		$data = $this->upload->data();
		return $data['file_name'];
	}
	
	public function do_upload1()
	{
		$config['upload_path'] = './images/worker_docs';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name1');
		$data = $this->upload->data();
		return $data['file_name'];
	}
	
	public function do_upload2()
	{
		$config['upload_path'] = './images/worker_docs';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_name2');
		$data = $this->upload->data();
		return $data['file_name'];
	}

}
	