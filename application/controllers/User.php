<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		
	}

	

	public function dashboard()
	{
        
		$this->load->view('dashboardHeader');
		$this->load->view('dashboard');
		$this->load->view('dashboardFooter');
		
	}

	
	
}
?>
