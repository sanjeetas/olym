<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
        parent::__construct();
       
        }
        public function index()
        {

        } 
        public function login_check($email,$password)
        {
             
            $que=$this->db->query("select * from admin where email='".$email."' and password='$password'");
            $row = $que->num_rows();
            print_r($row);
			if($row)
			{
                 return $row;
                 
			}
			else
			{
		          echo"invalid";
		}
				
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
	}
}
?>



        

        



        

        

