<?php 
class Model_Test extends CI_Model
{
	
    public $tbl_name;
	
	public function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	  	$this->tbl_name = 'tests';
	}
	
	public function create($new_data)
	{
		return $this->db->insert('tests', $new_data);
	}
	
	public function create_batch($new_data)
	{
		return $this->db->insert_batch('tests', $new_data);
	}
	
	public function create_querys($name)
	{
		$sql = "INSERT INTO `tests`(`name`) VALUES (";
		$sql .= "'$name'";
		$sql .= ")";
		$result_set = $this->db->query($sql);
      	return $result_set;
	}
	
	public function create_query($names)
	{
		foreach($names as $name)
		{
			$sql = "INSERT INTO `tests`(`name`) VALUES (";
			$sql .= "'$name'";
			$sql .= ")";
			$result_set = $this->db->query($sql);
		}
		return $result_set;
	}
	
	


   
}