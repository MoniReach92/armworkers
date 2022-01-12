<?php 
class Model_Group extends CI_Model
{
	
    public $tbl_name;
	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	  	$this->tbl_name = 'groups';
	}
	
	public function all()
	{
		$result_set = $this->db->get($this->tbl_name);
		return $result_set->result_array();
	}
	
	public function all_group()
	{
		$result_set = $this->db->get($this->tbl_name);
		return $result_set->result_array();
	}
	
	public function get_group_by($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where($this->tbl_name, $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}else{
			return $result_arr;
		}
	}
	
	public function doestroy_group($id)
	{
		$where['id'] = $id;
    	$this->db->delete('groups', $where);
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