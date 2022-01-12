<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class ItemController extends CI_Controller {


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();
      $this->load->database();
   }


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function ajaxRequest()
   {
       $data['job_titles'] = $this->db->get("job_title")->result();
       $this->load->view('itemlist', $data);
   }


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function ajaxRequestPost()
   {
      $new_data['name'] = $this->input->post('name');
      $new_data['description'] = $this->input->post('description');
		  
      $this->db->insert('job_title', $new_data);


      echo 'Added successfully.';  
   }
}

?>