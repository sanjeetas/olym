<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Welcome_model');
			$this->load->helper(array('html' ,'url' ,'form'));
	}
	public function index()
	    {
		
		$result = $this->Welcome_model->catch_data();
		
	
		if($result>0)
		{
				// echo "fetch success";
				$this->load->view('header');
				$this->load->view('welcome_message' ,$result);
				// print_r($result);
			
		}
		else
		{
			echo "invalid fetch";
			
			
		}

		$create = $this->Welcome_model->create();	
		print_r($create);				
			if($create == true) {
				
				$validator['success'] = true;
				$validator['messages'] = "Successfully added";
			}
			else 
			{
				$validator['success'] = false;
				$validator['messages'] = "Error while inserting the information into the database";
			}		

		

	}

	 

	
	public function fetch()
	{
		
		$result = $this->Welcome_model->fetch_data();
		
	
		if($result>0)
		{
			
			echo "fetch success";
			$this->load->view('welcome_message',$result);
		}
		else
		{
			echo "invalid fetch";
		}
	}



	
	
	







































	public function getData()
	{
		echo "this is get data function";
		echo '<pre>';

		//echo base_url();
		// blank array 

		$course = array();

		// index array

		$course = array("php","java","angular");
		//$course[0] = "php"; 
		//$course[1] = "java";
		//$course[2] = "angular";
		//echo $course[0];

		// Associative array
		$user = array("name"=>"Suman","address"=>"howrah");
		//echo $user['name'];
		echo count($user);
		
		echo '<pre>';
		print_r($user);


	}
}
?>
