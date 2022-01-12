<?php 
class Model_Affiliate extends CI_Model
{
	
    public $tbl_name;
	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	  	$this->tbl_name = 'affiliates';
	}
	
	public function all()
	{
		$result_set = $this->db->get($this->tbl_name);
		return $result_set->result_array();
	}
	
	public function all_set()
	{
		$sql = "Select affiliates.*, branches.name branch_name ";
		$sql .= "FROM affiliates ";
		$sql .= "INNER JOIN branches ON affiliates.branch = branches.id ";
		$result_set = $this->db->query($sql);
		return $result_set->result_array();
	}
	
	public function get_affiliate_branch($branch)
	{
		$sql = "Select affiliates.*, branches.name branch_name ";
		$sql .= "FROM affiliates ";
		$sql .= "INNER JOIN branches ON affiliates.branch = branches.id ";
		$sql .= "WHERE affiliates.branch = {$branch} ";
		$result_set = $this->db->query($sql);
		return $result_set->result_array();
	}
	
	public function get_affiliate_by($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where($this->tbl_name, $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
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
	
	public function doestroy_affliate($id)
	{
		$where['id'] = $id;
    	$this->db->delete($this->tbl_name, $where);
	}
	
	


   
}