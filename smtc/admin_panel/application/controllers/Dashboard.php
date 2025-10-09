<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    
    function __construct()
    {
        parent::__construct();				
        if($this->session->adminid == "")
        {
            redirect('login');
        }
      
        $this->load->model('DashboardModel','Dm');
        $this->load->library('upload');
        

        
    }    
    
    public function index()
    {   
        
        $id = $this->session->adminid;
     
        $data['exam'] = $this->exam_model->get_all_active_type_exam() ; 
        $data['userExam'] = $this->exam_model->get_all_user_exam() ; 
        $data['registration'] = $this->user_model->get_all_user();  
        $data['course'] = $this->course_model->get_all_course(); 
        $this->load->view('admin/dashboard',$data);
    }


    public function profile()
    {
          
            $id = $this->session->adminid;
            if($this->input->Post())
            {
                $post_data =$this->input->Post();
                $result = $this->Dm->UpdateProfile($post_data,$id);
                redirect('Profile');
            }
            $query = $this->db->query("SELECT * FROM  tbl_admin  WHERE id= '$id'");
            $data['result'] = $query->row_array();
            $this->load->load_view('admin/profile',$data);
    }

    public function changepassword()
    {

        
        $user_id = $this->session->adminid;;
        if(isset($_POST['update_password']))
        {
            $npwd = $this->input->post('npwd');
            $opwd = $this->input->post('opwd');
            if(empty($npwd) || empty($opwd))
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger">please fill all fields</div>');
               
            }
            else
            {
                if($npwd!=$opwd)
                {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger">New password and confirm password not matched.</div>');
                  
                }
                else
                {
                   
                   $upd_data['password'] = md5($npwd);
                  
                   $this->db->where('id',$user_id);
                    $result = $this->db->update('tbl_admin', $upd_data);

                    $this->session->set_flashdata('msg','<div class="alert alert-success">password has been updated successfully</div>');
                  
                }   
            }  



        } 

        redirect('Profile'); 
        
    }





    

    
}
