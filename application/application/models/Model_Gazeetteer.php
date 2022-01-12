<?php 
class Model_Gazeetteer extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function provinces()
	{
		$result_set = $this->db->get('provinces');
		return $result_set->result_array();
	}
	
	public function province_name($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('provinces', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function districts($id)
	{
		$where['province_id'] = $id;
		$result_set = $this->db->get_where('districts', $where);
		return $result_set->result_array();
	}
	
	public function district_name($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('districts', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function commmunes($id)
	{
		$where['district_id'] = $id;
		$result_set = $this->db->get_where('communes', $where);
		return $result_set->result_array();
	}
	
	public function commune_name($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('communes', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function villages($id)
	{
		$where['commune_id'] = $id;
		$result_set = $this->db->get_where('villages', $where);
		return $result_set->result_array();
	}
	
	public function village_name($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('villages', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
}