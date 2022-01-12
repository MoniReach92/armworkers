<?php 
class Model_Login extends CI_Model
{
	
    public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
		
	public function get_admin_by($username, $password)
	{
		$where['email'] = $username;
		$where['password'] = $password;
		$result_set = $this->db->get_where('tbl_admins', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)) {
			return $result_arr[0];
		}
	}
		
}