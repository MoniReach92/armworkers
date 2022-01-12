<?php 
class Model_WorkerEmegency extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function all()
	{
		$result_set = $this->db->get('worker_emergency');
		return $result_set->result_array();
	}
	
	public function get_by($id)
	{
		$where['worker_id'] = $id;
		$result_set = $this->db->get_where('worker_emergency', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
	
	public function get_detail($id)
	{
		$sql = 'Select worker_emergency.*, ';
		$sql .= 'provinces.name empname, ';
		$sql .= 'districts.name emdname, ';
		$sql .= 'communes.name emcname, ';
		$sql .= 'villages.name emvname ';
		$sql .= 'FROM worker_emergency ';
		$sql .= 'INNER JOIN provinces ON (worker_emergency.sos_province = provinces.id) ';
		$sql .= 'INNER JOIN districts ON (worker_emergency.sos_district = districts.id) ';
		$sql .= 'INNER JOIN communes ON (worker_emergency.sos_commune = communes.id) ';
		$sql .= 'INNER JOIN villages ON (worker_emergency.sos_village = villages.id) ';
		$sql .= "WHERE worker_id = {$id}";
        $result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
	
	public function update($id, $new_data)
	{
		$where['worker_id'] = $id;
		$this->db->update('worker_emergency', $new_data, $where);
	}   
}