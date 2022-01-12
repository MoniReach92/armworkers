<?php 
class Model_JobTitle extends CI_Model
{
	
    public $tbl_name;
	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	  	$this->tbl_name = 'job_title';
	}
	
	public function all()
	{
		$result_set = $this->db->get($this->tbl_name);
		return $result_set->result_array();
	}
	
	public function get_job_by($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where($this->tbl_name, $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function update($id, $new_data)
	{
		$where['id'] = $id;
		$this->db->update($this->tbl_name, $new_data, $where);
	}
	
	public function create($new_data)
	{
		return $this->db->insert($this->tbl_name, $new_data);
	}
	
	


   
}