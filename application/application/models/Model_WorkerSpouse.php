<?php 
class Model_WorkerSpouse extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function all()
	{
		$result_set = $this->db->get('worker_spouse');
		return $result_set->result_array();
	}
	
	public function get_by($id)
	{
		$where['worker_id'] = $id;
		$result_set = $this->db->get_where('worker_spouse', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
	
	public function update($id, $new_data)
	{
		$where['worker_id'] = $id;
		$this->db->update('worker_spouse', $new_data, $where);
	}   
}