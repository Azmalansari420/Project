<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
      
    }    
    


    public function index()
    {

        if($this->session->adminid != "")
        {
            redirect('dashboard');
        }
      

        if(!empty($_POST))
        {
        
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $this -> db->select(' * ');
            $this -> db->from('tbl_admin');
            $this -> db->where('email', $email);
            $this -> db->where('password', $password);
            $result = $this->db->get(); 
            $result->num_rows() ;
           
            if($result->num_rows() > 0)
            {
                
                foreach ($result->result() as $row)
                {
                    
                    $this->session->adminid = $row->id;
                     $this->session->name = $row->name;
                    $this->session->role =  $row->role;
                    $this->session->permission =  $row->permission;
                  
                }
                 redirect('dashboard');
            }
            else
            {   

               
                $data['email'] = $email;
                $data['password'] = $password;
                $this->session->set_flashdata('MSG','<div class="alert alert-danger">Email and Password is Wrong</div>');
                //redirect();
            }
        }
         $this->load->view('admin/login');   
        
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }





    
}
