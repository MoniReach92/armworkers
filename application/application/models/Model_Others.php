<?php 
class Model_Others extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function relatives()
	{
		$result_set = $this->db->get('relatives');
		return $result_set->result_array();
	}
	
	public function educations()
	{
		$result_set = $this->db->get('educations');
		return $result_set->result_array();
	}
	
	
}