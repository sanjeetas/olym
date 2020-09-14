<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Admin_model');
			$this->load->helper(array('html' ,'url' ,'form'));
    }
			
    public function index()
    {
        $this->load->view('adminheader');
        $this->load->view('admin');
    }

	    
public function do_login()
	{
		
		$email = $this->input->post('email');
		
		$password = $this->input->post('password');
	
	
		$result = $this->Admin_model->login_check($email,$password);
		echo $result;
		if($result>0)
		{
			echo "login success";
			redirect('User/dashboard');
		}
		else
		{
			echo "invalid login";
		}

	}


	
}  
	
?>
