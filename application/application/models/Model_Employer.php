<?php 
class Model_Employer extends CI_Model
{
	
   public $tbl_name;
	
   public function __construct()
   {
       parent::__construct();
       $this->db = $this->load->database('default', TRUE);
	   $this->table_name = 'employers';
   }

   public function get($id)
   {
    $where['id'] = $id;
   	$result_set = $this->db->get_where($this->tbl_name, $where);
    $result_arr = $result_set->result_array();
    return $result_arr[0];
   }

   public function create($new_data)
   {
    $this->db->insert('employers', $new_data);
    $last_id = $this->db->insert_id();
	return $last_id;
   }
	
	public function create_files($file_data)
   {
    return $this->db->insert_batch('employer_attached', $file_data);
   }
	
	public function create_file($file_data)
   {
    return $this->db->insert('employer_attached', $file_data);
   }
	
	public function update($id, $new_data)
   {
    $where['id'] = $id;
    $this->db->update('employers', $new_data, $where);
   }


	public function all_country()
   {
     $result_set = $this->db->get('countries');
     return $result_set->result_array();
   }
	
	public function all_file($id)
   {
	 $where['employer_id'] = $id;
     $result_set = $this->db->get_where('employer_attached', $where);
     return $result_set->result_array();
   }
	
	public function all_file_by($id)
   {
	 $where['id'] = $id;
     $result_set = $this->db->get_where('employer_attached', $where);
     $result_arr = $result_set->result_array();
      return $result_arr[0];
   }
	
	public function all_employers()
	{
		$sql = "Select employers.*, countries.name, industries.name iname ";
		$sql .= "FROM employers ";
		$sql .= "INNER JOIN countries ON (employers.country = countries.id) ";
		$sql .= "INNER JOIN industries ON (employers.business_industry = industries.id) ";
		//return $sql ;
        $result_set = $this->db->query($sql);
        return $result_set->result_array();
	}
	
	public function employers()
	{
        $result_set = $this->db->get('employers');
        return $result_set->result_array();
	}
	
	public function all_employers_by($id)
	{
		$sql = "Select employers.*, countries.name ";
		$sql .= "FROM employers ";
		$sql .= "INNER JOIN countries ON employers.country = countries.id ";
		$sql .= "WHERE employers.id = {$id} ";
		$result_set = $this->db->query($sql);
		$result_arr = $result_set->result_array();
    	if(!empty($result_arr)){
			return $result_arr[0];
		}
	}
	
	public function destroy_file($id)
   {
    $where['id'] = $id;
    $this->db->delete('employer_attached', $where);
   }
	   
}