<?php 
class Model_Worker extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function get($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('workers', $where);
		$result_arr = $result_set->result_array();
		return $result_arr[0];
	}

	public function create($new_data)
	{
		$this->db->insert('workers', $new_data);
		$last_id = $this->db->insert_id();
		return $last_id;
	//	$rseult =  $this->db->error();
	//	return $rseult;
	}
	
	public function create_parent($parent_data)
	{
    	return $this->db->insert('worker_parents', $parent_data);
	}
	
	public function create_spouse($spouse_data)
	{
    	return $this->db->insert('worker_spouse', $spouse_data);
	}
	
	public function create_emergency($emergency_data)
	{
    return $this->db->insert('worker_emergency', $emergency_data);
	}
	
	public function create_education($education_data)
	{
    	return $this->db->insert('worker_education', $education_data);
	}
	
	public function create_employment($employment_data)
	{
    	return $this->db->insert('worker_employment', $employment_data);
	}
	
	public function create_files($file_data)
	{
		return $this->db->insert_batch('worker_attached', $file_data);
	}
	
	public function create_file($file_data)
	{
    	return $this->db->insert('worker_attached', $file_data);
   	}
	
	public function update($id, $new_data)
   	{
		$where['id'] = $id;
		$this->db->update('workers', $new_data, $where);
	}
	
	public function update_parent($id, $new_data)
   	{
		$where['worker_id'] = $id;
		$this->db->update('worker_parents', $new_data, $where);
	}
	
	public function update_spouse($id, $new_data)
   	{
		$where['worker_id'] = $id;
		$this->db->update('worker_spouse', $new_data, $where);
	}
	
	public function update_emergency($id, $new_data)
   	{
		$where['worker_id'] = $id;
		$this->db->update('worker_emergency', $new_data, $where);
	}
	
	public function update_education($id, $new_data)
   	{
		$where['worker_id'] = $id;
		$this->db->update('worker_education', $new_data, $where);
	}
	
	public function update_employment($id, $new_data)
   	{
		$where['worker_id'] = $id;
		$this->db->update('worker_employment', $new_data, $where);
	}


	public function all_country()
   	{
		$result_set = $this->db->get('countries');
		return $result_set->result_array();
   }
	
	public function all_file($id)
	{
		$where['worker_id'] = $id;
		$result_set = $this->db->get_where('worker_attached', $where);
		return $result_set->result_array();
	}
	
	public function all_file_by($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('worker_attached', $where);
		$result_arr = $result_set->result_array();
		return $result_arr[0];
	}
	
	public function all_workers()
	{
		$where['status'] = 1;
		$result_set = $this->db->get_where('workers', $where);
		return $result_set->result_array();
	}
	
	public function all_workers_by_group($id)
	{
		$where['status'] = 1;
		$where['group_id'] = $id;
		$result_set = $this->db->get_where('workers', $where);
		return $result_set->result_array();
	}
	
	//public function all_workers()
//	{
//		$sql = "SELECT * ";
//		$sql .= "FROM workers ";
//		$sql .= "ORDER by id DESC ";
//		$result_set = $this->db->query($sql);
//		return $result_set->result_array();
//	}
	
	public function getcountryname($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('countries', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function getpname($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('provinces', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function getdname($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('districts', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function getcname($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('communes', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function getvname($id)
	{
		$where['id'] = $id;
		$result_set = $this->db->get_where('villages', $where);
		$result_arr = $result_set->result_array();
		if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function get_by($id)
	{
		$sql = "Select workers.*, countries.name ";
		$sql .= "FROM workers ";
		$sql .= "INNER JOIN countries ON workers.country = countries.id ";
		$sql .= "WHERE workers.id = {$id} ";
		$result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
    	if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function get_photo($id)
	{
		$sql = "Select worker_photo ";
		$sql .= "FROM workers ";
		$sql .= "WHERE id = {$id} ";
		$result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
    	if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function count_groups($id)
	{
		$sql = "SELECT COUNT(group_id) group_count ";
		$sql .= "FROM workers ";
		$sql .= "WHERE group_id = $id ";
		$result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
    	if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function create_crud($new_data)
	{
		return $this->db->insert('crud', $new_data);
	}
	
	public function destroy_file($id)
	{
		$where['id'] = $id;
		$this->db->delete('worker_attached', $where);
	}
	
	public function update_photo($id, $new_data)
   	{
		$where['id'] = $id;
		$result = $this->db->update('workers', $new_data, $where);
		return $result;
	}
	
	
	   
}