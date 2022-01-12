<?php
class Crud extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database();
		$this->load->model('Crud_model');
	}
	public function register()
	{
		$this->load->view('ajax/register');
	}
	
	public function pass()
	{
		$this->load->view('ajax/pass');
	}
    
	//public function savedata()
//	{
//		if($this->input->post('type')==1)
//		{
//			$name=$this->input->post('name');
//			$email=$this->input->post('email');
//			$phone=$this->input->post('phone');
//			$city=$this->input->post('city');
//			$this->Crud_model->saverecords($name,$email,$phone,$city);	
//			echo json_encode(array(
//				"statusCode"=>200
//			));
//		} 
//	}
	
	public function savedata()
	{
		if($this->input->post('type')==1)
		{
			$new_data['name']=$this->input->post('name');
			$new_data['email']=$this->input->post('email');
			$new_data['phone']=$this->input->post('phone');
			$new_data['city']=$this->input->post('city');
			$this->Crud_model->create($new_data);
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}
	
	public function passdata()
	{
		if($this->input->post('type')==1)
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$city=$this->input->post('city');
			//$this->Crud_model->saverecords($name,$email,$phone,$city);	
			//echo json_encode(array(
//				"statusCode"=>200
//			));
			$output = "<select name=\"cars\" id=\"cars\">";
			$output .= "<option value=\"volvo\">Volvo</option>";
			$output .= "<option value=\"saab\">Saab</option>";
            $output .= "</select>";
			
			echo $output;
		} 
	}
}

?>