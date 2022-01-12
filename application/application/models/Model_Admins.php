<?php 
class Model_Admins extends CI_Model
{
	
   public $tbl_name;
	
   public function __construct()
   {
       parent::__construct();
       $this->db = $this->load->database('default', TRUE);
	   $this->table_name = 'tbl_admins';
   }

   public function get($id)
   {
    $where['id'] = $id;
   	$result_set = $this->db->get_where('tbl_admins', $where);
    $result_arr = $result_set->result_array();
    return $result_arr[0];
   }

   public function create($new_data)
   {
    return $this->db->insert('tbl_admins', $new_data);
   }
	
	public function update($id, $new_data)
   {
    $where['id'] = $id;
    $this->db->update('tbl_admins', $new_data, $where);
   }

   public function connection_test()
   {
   	
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
	
	public function all_admin_role()
   {
     $result_set = $this->db->get('admin_roles');
     return $result_set->result_array();
   }
	
	public function get_admins()
	{
		$sql = 'Select tbl_admins.*, admin_roles.name ';
		$sql .= 'FROM tbl_admins ';
		$sql .= 'INNER JOIN admin_roles ON tbl_admins.admin_role = admin_roles.id';
		//$sql = 'Select * from tbl_admins ';
        $result_set = $this->db->query($sql);
        return $result_set->result_array();
	}
	
	public function get_admin_by($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('tbl_admins', $where);
		$result_arr = $result_set->result_array();
		if($id != '0') {
			return $result_arr[0];
		}
	}
	
	public function password_update($id, $password)
   {
    $where['id'] = $id;
    $new_data['password'] = $password;
		$options = [
			'cost' => 16,
		];
	$new_data['hashed_password'] = password_hash("$password", PASSWORD_BCRYPT, $options);
    return $this->db->update('tbl_admins', $new_data, $where);
   }


   
}