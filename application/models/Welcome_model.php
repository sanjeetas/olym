


<?php
class Welcome_model extends CI_Model {

        public function __construct()
        {
        parent::__construct();
        }
        public function index()
        {

        } 
        public function create()
        {
                        
    
            $insert_data = array(
                            'usr_fname'             => $this->input->post('usr_fname'),
                            'usr_lname'     	=> $this->input->post('usr_lname'),  
                            'usr_email'   		=> $this->input->post('usr_email'),  
                            'usr_zip_code' 		=> $this->input->post('usr_zip_code'),
                            'usr_no_guest'		=>$this->input->post('usr_no_guest'),
                            'usr_signup_type'	=>$this->input->post('usr_signup_type'),
                            
    
                            
                    );
                   
    
                    $status = $this->db->insert('user', $insert_data);
                    // redirect('welcome');		
                    return ($status == true ? true : false);
                    
            }


        public function catch_data(){
            $insert_data = array(
                'usr_fname'             => $this->input->post('usr_fname'),
                'usr_lname'     	=> $this->input->post('usr_lname'),  
                'usr_email'   		=> $this->input->post('usr_email'),  
                'usr_zip_code' 		=> $this->input->post('usr_zip_code'),
                'usr_no_guest'		=>$this->input->post('usr_no_guest'),
                'usr_signup_type'	=>$this->input->post('usr_signup_type'),
                'addfriends'	=>$this->input->post('addfriends'),
                

        );
                 return $insert_data;
                
                
        }
    

        
public function fetch_data(){
                $this->db->select('*');
                $this->db->from('user');
                $query = $this->db->get();
               
                $data['count'] = $query->num_rows();
                if($data>0){
                    $data['results'] = $query->result();
                    return $data;

                }else{
                    return FALSE;
                }
                
 }



}
?>














