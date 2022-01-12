<?php 
class Model_Admin_Roles extends CI_Model
{
	
   //public $tbl_name;
	
   public function __construct()
   {
       parent::__construct();
       $this->db = $this->load->database('default', TRUE);
	  // $this->table_name = 'tbl_admins';
   }

   public function all()
   {
     $result_set = $this->db->get('admin_roles');
     return $result_set->result_array();
   }
	
	


   
}