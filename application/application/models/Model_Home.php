<?php 
class Model_Home extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}
	
	public function all_country123()
	{
		$result_set = $this->db->get($this->tbl_name);
		return $result_set->result_array();
	}
	
	public function count_country()
	{
		$sql = "SELECT country ";
		$sql .= "FROM workers ";
		$sql .= "GROUP by country ";
		$result_set = $this->db->query($sql);
		$num = $result_set->num_rows();
    	if(!empty($num)){
			return $num;
		}
	}
	
	public function country_list()
	{
		$sql = "SELECT COUNT(workers.id) as workers, countries.name ";
		$sql .= "FROM workers ";
		$sql .= "INNER JOIN countries ON (workers.country = countries.id) ";
		$sql .= "GROUP by workers.country ";
		
		$result_set = $this->db->query($sql);
		return $result_set->result_array();
	}
	
	public function industry_list()
	{
		$sql = "SELECT COUNT(workers.id) as workers, industries.name ";
		$sql .= "FROM workers ";
		$sql .= "INNER JOIN industries ON (workers.industry = industries.id) ";
		$sql .= "GROUP by workers.industry ";
		
		$result_set = $this->db->query($sql);
		return $result_set->result_array();
	}
	
	public function count_industry()
	{
		$sql = "SELECT industry ";
		$sql .= "FROM workers ";
		$sql .= "GROUP by industry ";
		$result_set = $this->db->query($sql);
		$num = $result_set->num_rows();
    	if(!empty($num)){
			return $num;
		}
	}
	
	public function count_workerf()
	{
		$sql = "SELECT gender ";
		$sql .= "FROM workers ";
		$sql .= "WHERE gender = 'Female' ";
		$result_set = $this->db->query($sql);
		$num = $result_set->num_rows();
    	if(!empty($num)){
			return $num;
		}
	}
	
	public function count_workerm()
	{
		$sql = "SELECT gender ";
		$sql .= "FROM workers ";
		$sql .= "WHERE gender = 'Male' ";
		$result_set = $this->db->query($sql);
		$num = $result_set->num_rows();
    	if(!empty($num)){
			return $num;
		}
	}
	
	
}