<?php 
class Model_WorkerParent extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function all()
	{
		$result_set = $this->db->get('worker_parents');
		return $result_set->result_array();
	}
	
	public function get_by($id)
	{
		$where['worker_id'] = $id;
		$result_set = $this->db->get_where('worker_parents', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
	
	public function update($id, $new_data)
	{
		$where['worker_id'] = $id;
		$this->db->update('worker_parents', $new_data, $where);
	}
	
	public function get_detail_by($id)
	{
		$sql = "SELECT worker_parents.*, job_title.name ";
		$sql .= "FROM worker_parents ";
		$sql .= "INNER JOIN job_title ON (worker_parents.f_accupation = job_title.id) ";
		$sql .= "WHERE worker_parents.worker_id = $id ";
		
		$result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
}