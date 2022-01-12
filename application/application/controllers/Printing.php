<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printing extends CI_Controller
{
   public function f_bio($id)
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['worker'] = $this->Model_Worker->get_by($id);
	  
	  $worker = $data['worker'];
	  $pro_id = $worker['birth_province'] ?? NULL ;
	  $dist_id = $worker['birth_district'] ?? NULL ;
	  $comm_id = $worker['birth_commune'] ?? NULL ;
	  $vill_id = $worker['birth_village'] ?? NULL ;
	  
	  $pro_idc = $worker['cur_add_province'] ?? NULL ;
	  $dist_idc = $worker['cur_add_district'] ?? NULL ;
	  $comm_idc = $worker['cur_add_commune'] ?? NULL ;
	  $vill_idc = $worker['cur_add_village'] ?? NULL ;
	   
	  $job_id = $worker['job_title'] ?? NULL ;
	  
      $data['pro_name'] = $this->Model_Gazeetteer->province_name($pro_id);
      $data['dist_name'] = $this->Model_Gazeetteer->district_name($dist_id);
      $data['comm_name'] = $this->Model_Gazeetteer->commune_name($comm_id);
      $data['vill_name'] = $this->Model_Gazeetteer->village_name($vill_id);
	   
	  $data['pro_namec'] = $this->Model_Gazeetteer->province_name($pro_idc);
      $data['dist_namec'] = $this->Model_Gazeetteer->district_name($dist_idc);
      $data['comm_namec'] = $this->Model_Gazeetteer->commune_name($comm_idc);
      $data['vill_namec'] = $this->Model_Gazeetteer->village_name($vill_idc);
	   
      $data['job_name'] = $this->Model_JobTitle->get_job_by($job_id);
      $data['flang'] = $this->Model_WorkerEducation->get_by($id);
	   
      $data['parent'] = $this->Model_WorkerParent->get_by($id);
	  $parent = $data['parent'];
	  $pro_idp = $parent['pcur_add_province'] ?? NULL;
	  $dist_idp = $parent['pcur_add_district'] ?? NULL;
	  $comm_idp = $parent['pcur_add_commune'] ?? NULL;
	  $vill_idp = $parent['pcur_add_village'] ?? NULL;
	  $f_job_id = $parent['f_accupation'] ?? NULL;
	  $m_job_id = $parent['m_accupation'] ?? NULL;
	  $data['pro_namep'] = $this->Model_Gazeetteer->province_name($pro_idp);
      $data['dist_namep'] = $this->Model_Gazeetteer->district_name($dist_idp);
      $data['comm_namep'] = $this->Model_Gazeetteer->commune_name($comm_idp);
      $data['vill_namep'] = $this->Model_Gazeetteer->village_name($vill_idp);
	  $data['f_job_name'] = $this->Model_JobTitle->get_job_by($f_job_id);
	  $data['m_job_name'] = $this->Model_JobTitle->get_job_by($m_job_id);
	   
      $data['spouse'] = $this->Model_WorkerSpouse->get_by($id);
	  $spouse = $data['spouse'];
	  $sp_job_id = $spouse['sp_occupation'] ?? NULL;
	  $data['sp_job_name'] = $this->Model_JobTitle->get_job_by($sp_job_id);

      $this->load->view('included/head'); $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('printing/f_bio', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	
	public function f_bios($id)
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
      $data['user_name'] = $userdata['user_name'];
	   
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
		
		$data['workers'] = $this->Model_Worker->all_workers_by_group($id);
		
		$workers = $data['workers'];
		//print_r($workers);
		foreach($workers as $worker){
          $workier_id = $worker['id'];
	
		  $data['worker'] = $this->Model_Worker->get_by($workier_id);
		  $worker = $data['worker'];
		  $pro_id = $worker['birth_province'] ?? NULL ;
		  $dist_id = $worker['birth_district'] ?? NULL ;
		  $comm_id = $worker['birth_commune'] ?? NULL ;
		  $vill_id = $worker['birth_village'] ?? NULL ;

		  $pro_idc = $worker['cur_add_province'] ?? NULL ;
		  $dist_idc = $worker['cur_add_district'] ?? NULL ;
		  $comm_idc = $worker['cur_add_commune'] ?? NULL ;
		  $vill_idc = $worker['cur_add_village'] ?? NULL ;

		  $job_id = $worker['job_title'] ?? NULL ;

		  $data['pro_name'] = $this->Model_Gazeetteer->province_name($pro_id);
		  $data['dist_name'] = $this->Model_Gazeetteer->district_name($dist_id);
		  $data['comm_name'] = $this->Model_Gazeetteer->commune_name($comm_id);
		  $data['vill_name'] = $this->Model_Gazeetteer->village_name($vill_id);

		  $data['pro_namec'] = $this->Model_Gazeetteer->province_name($pro_idc);
		  $data['dist_namec'] = $this->Model_Gazeetteer->district_name($dist_idc);
		  $data['comm_namec'] = $this->Model_Gazeetteer->commune_name($comm_idc);
		  $data['vill_namec'] = $this->Model_Gazeetteer->village_name($vill_idc);

		  $data['job_name'] = $this->Model_JobTitle->get_job_by($job_id);
		  $data['flang'] = $this->Model_WorkerEducation->get_by($id);

		  $data['parent'] = $this->Model_WorkerParent->get_by($id);
		  $parent = $data['parent'];
		  $pro_idp = $parent['pcur_add_province'] ?? NULL ;
		  $dist_idp = $parent['pcur_add_district'] ?? NULL ;
		  $comm_idp = $parent['pcur_add_commune'] ?? NULL ;
		  $vill_idp = $parent['pcur_add_village'] ?? NULL ;
		  $f_job_id = $parent['f_accupation'] ?? NULL ;
		  $m_job_id = $parent['m_accupation'] ?? NULL ;
		  $data['pro_namep'] = $this->Model_Gazeetteer->province_name($pro_idp);
		  $data['dist_namep'] = $this->Model_Gazeetteer->district_name($dist_idp);
		  $data['comm_namep'] = $this->Model_Gazeetteer->commune_name($comm_idp);
		  $data['vill_namep'] = $this->Model_Gazeetteer->village_name($vill_idp);
		  $data['f_job_name'] = $this->Model_JobTitle->get_job_by($f_job_id);
		  $data['m_job_name'] = $this->Model_JobTitle->get_job_by($m_job_id);

		  $data['spouse'] = $this->Model_WorkerSpouse->get_by($id);
		  $spouse = $data['spouse'];
		  $sp_job_id = $spouse['sp_occupation'] ?? NULL;
		  $data['sp_job_name'] = $this->Model_JobTitle->get_job_by($sp_job_id);

		  $this->load->view('printing/f_bio', $data);
		
      }
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	

	public function request($id)
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['worker'] = $this->Model_Worker->get_by($id);
	  
	  $worker = $data['worker'];
	  $pro_id = $worker['birth_province'] ?? NULL ;
	  $dist_id = $worker['birth_district'] ?? NULL ;
	  $comm_id = $worker['birth_commune'] ?? NULL ;
	  $vill_id = $worker['birth_village'] ?? NULL ;
	  
	  $pro_idc = $worker['cur_add_province'] ?? NULL ;
	  $dist_idc = $worker['cur_add_district'] ?? NULL ;
	  $comm_idc = $worker['cur_add_commune'] ?? NULL ;
	  $vill_idc = $worker['cur_add_village'] ?? NULL ;
	   
	  $job_id = $worker['job_title'] ?? NULL ;
	  
      $data['pro_name'] = $this->Model_Gazeetteer->province_name($pro_id);
      $data['dist_name'] = $this->Model_Gazeetteer->district_name($dist_id);
      $data['comm_name'] = $this->Model_Gazeetteer->commune_name($comm_id);
      $data['vill_name'] = $this->Model_Gazeetteer->village_name($vill_id);
	   
	  $data['pro_namec'] = $this->Model_Gazeetteer->province_name($pro_idc);
      $data['dist_namec'] = $this->Model_Gazeetteer->district_name($dist_idc);
      $data['comm_namec'] = $this->Model_Gazeetteer->commune_name($comm_idc);
      $data['vill_namec'] = $this->Model_Gazeetteer->village_name($vill_idc);
	   
      $data['job_name'] = $this->Model_JobTitle->get_job_by($job_id);
      $data['flang'] = $this->Model_WorkerEducation->get_by($id);
	   
      $data['parent'] = $this->Model_WorkerParent->get_by($id);
	  $parent = $data['parent'];
	  $pro_idp = $parent['pcur_add_province'] ?? NULL;
	  $dist_idp = $parent['pcur_add_district'] ?? NULL;
	  $comm_idp = $parent['pcur_add_commune'] ?? NULL;
	  $vill_idp = $parent['pcur_add_village'] ?? NULL;
	  $f_job_id = $parent['f_accupation'] ?? NULL;
	  $m_job_id = $parent['m_accupation'] ?? NULL;
	  $data['pro_namep'] = $this->Model_Gazeetteer->province_name($pro_idp);
      $data['dist_namep'] = $this->Model_Gazeetteer->district_name($dist_idp);
      $data['comm_namep'] = $this->Model_Gazeetteer->commune_name($comm_idp);
      $data['vill_namep'] = $this->Model_Gazeetteer->village_name($vill_idp);
	  $data['f_job_name'] = $this->Model_JobTitle->get_job_by($f_job_id);
	  $data['m_job_name'] = $this->Model_JobTitle->get_job_by($m_job_id);
	   
      $data['spouse'] = $this->Model_WorkerSpouse->get_by($id);
	  $spouse = $data['spouse'];
	  $sp_job_id = $spouse['sp_occupation'] ?? NULL;
	  $data['sp_job_name'] = $this->Model_JobTitle->get_job_by($sp_job_id);
		
      $data['emergency'] = $this->Model_WorkerEmegency->get_detail($id);
	  
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('printing/worker_request', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }
	
	public function visa($id)
   {
     
      log_message('debug', 'My First Log');
	   
      $userdata['user_name'] = $this->session->fname;
      $userdata['user_email'] = $this->session->email;
      $userdata['user_id'] = $this->session->id;
      $userdata['avata'] = $this->session->image_file;
	   
      $data['worker'] = $this->Model_Worker->get_by($id);
	  
	  $worker = $data['worker'];
	  $pro_id = $worker['birth_province'] ?? NULL ;
	  $dist_id = $worker['birth_district'] ?? NULL ;
	  $comm_id = $worker['birth_commune'] ?? NULL ;
	  $vill_id = $worker['birth_village'] ?? NULL ;
	  
	  $pro_idc = $worker['cur_add_province'] ?? NULL ;
	  $dist_idc = $worker['cur_add_district'] ?? NULL ;
	  $comm_idc = $worker['cur_add_commune'] ?? NULL ;
	  $vill_idc = $worker['cur_add_village'] ?? NULL ;
	   
	  $job_id = $worker['job_title'] ?? NULL ;
	  
      $data['pro_name'] = $this->Model_Gazeetteer->province_name($pro_id);
      $data['dist_name'] = $this->Model_Gazeetteer->district_name($dist_id);
      $data['comm_name'] = $this->Model_Gazeetteer->commune_name($comm_id);
      $data['vill_name'] = $this->Model_Gazeetteer->village_name($vill_id);
	   
	  $data['pro_namec'] = $this->Model_Gazeetteer->province_name($pro_idc);
      $data['dist_namec'] = $this->Model_Gazeetteer->district_name($dist_idc);
      $data['comm_namec'] = $this->Model_Gazeetteer->commune_name($comm_idc);
      $data['vill_namec'] = $this->Model_Gazeetteer->village_name($vill_idc);
	   
      $data['job_name'] = $this->Model_JobTitle->get_job_by($job_id);
      $data['flang'] = $this->Model_WorkerEducation->get_by($id);
	   
      $data['parent'] = $this->Model_WorkerParent->get_by($id);
	  $parent = $data['parent'];
	  $pro_idp = $parent['pcur_add_province'] ?? NULL ;
	  $dist_idp = $parent['pcur_add_district'] ?? NULL ;
	  $comm_idp = $parent['pcur_add_commune'] ?? NULL ;
	  $vill_idp = $parent['pcur_add_village'] ?? NULL ;
	  $f_job_id = $parent['f_accupation'] ?? NULL ;
	  $m_job_id = $parent['m_accupation'] ?? NULL ;
	  $data['pro_namep'] = $this->Model_Gazeetteer->province_name($pro_idp);
      $data['dist_namep'] = $this->Model_Gazeetteer->district_name($dist_idp);
      $data['comm_namep'] = $this->Model_Gazeetteer->commune_name($comm_idp);
      $data['vill_namep'] = $this->Model_Gazeetteer->village_name($vill_idp);
	  $data['f_job_name'] = $this->Model_JobTitle->get_job_by($f_job_id);
	  $data['m_job_name'] = $this->Model_JobTitle->get_job_by($m_job_id);
	   
      $data['spouse'] = $this->Model_WorkerSpouse->get_by($id);
	  $spouse = $data['spouse'];
	  $sp_job_id = $spouse['sp_occupation'] ?? NULL ;
	  $data['sp_job_name'] = $this->Model_JobTitle->get_job_by($sp_job_id);
		
      $data['emergency'] = $this->Model_WorkerEmegency->get_detail($id);
	  
      $this->load->view('included/head');
      $this->load->view('included/main_header', $userdata);
      $this->load->view('included/aside', $data);
      $this->load->view('printing/visa', $data);
      $this->load->view('included/footer');
      $this->load->view('included/scripts');
   }

}
