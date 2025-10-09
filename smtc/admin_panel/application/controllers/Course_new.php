<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Course_new extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('adminid');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
		$this->load->model('course_new_model');
	}
	
	public function listing()
	{
		$data['RESULT'] = $this->course_new_model->get_all_course_new(); 
		$this->load->view('admin/course_new/listing',$data);
	}
	
	
	
	public function add_new()
	{
		if(isset($_POST['submitform']))
		{	 
            $this->form_validation->set_rules('name', 'name', 'trim|required');	
            $this->form_validation->set_rules('content', 'content', 'trim|required');	
			$this->form_validation->set_rules('status', 'Status', 'trim|required');	
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			  
			if ($this->form_validation->run() == TRUE)
			{
				 
				$postdata =  $this->input->post() ; 		
				unset($postdata['submitform']);
     			$this->course_new_model->save_course_new($postdata);
     			 $insert_id = $this->db->insert_id();
     			 if($insert_id){
     			 	 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
					  redirect('course_new/add_new');
				}else{
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been not saved.Please try again</div>');

				}
              
				
			}				
		}		
		$data['course_new'] = $this->course_new_model->get_all_course_new(); 
		$this->load->view('admin/course_new/add',$data);
	}
	
	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->course_new_model->get_course_new_by_id($args[0]); 

		if(isset($_POST['submitform']))
		{

			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('content', 'content', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');

			// if ($this->form_validation->run() == TRUE)
			// {
				$postdata = $this->input->post();
					
				unset($postdata['submitform']);
                $this->course_new_model->update_course_new_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('course_new/listing');
			// }	
		}
		 
		$data['course_new'] = $this->course_new_model->get_all_course_new(); 
		$this->load->view('admin/course_new/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$blog = $this->course_new_model->get_course_new_by_id($args[0]);
		$this->course_new_model->delete_course_new_by_id($args[0]);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('course_new/listing');
	}	
}