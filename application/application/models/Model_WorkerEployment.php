<?php 
class Model_WorkerEployment extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function all()
	{
		$result_set = $this->db->get('worker_employment');
		return $result_set->result_array();
	}
	
	public function get_by($id)
	{
		$where['worker_id'] = $id;
		$result_set = $this->db->get_where('worker_employment', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
	
	public function update($id, $new_data)
	{
		$where['worker_id'] = $id;
		$this->db->update('worker_employment', $new_data, $where);
	}   
}