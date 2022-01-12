<?php
class Model_Subject extends CI_Model
{
	public function _construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function get($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('admins', $where );
		$result_arr = $result_set->result_array();
    	return $result_arr[0];
	}
	
	public function update($id, $new_data)
	{
		$where['id'] = $id;
		$this->db->update('admins', $new_data, $where);
	}
	
	public function delete($id)
   {
    $where['id'] = $id;
    $this->db->delete('admins', $where);
   }
	
	
	public function get_version()
	{
		$result_set = $this->db->query('SELECT VERSION()');
		return $result_set;
	}
	
	public function all()
	{
		$result_set = $this->db->get('tbl_admins');
		return $result_set->result_array();
	}
}
?>