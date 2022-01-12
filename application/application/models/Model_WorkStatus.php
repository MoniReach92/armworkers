<?php 
class Model_WorkStatus extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function work_statuss()
	{
		$result_set = $this->db->get('work_status');
		return $result_set->result_array();
	}
	
	
}