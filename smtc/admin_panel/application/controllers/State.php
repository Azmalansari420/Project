<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class State extends CI_Controller 
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
		$this->load->model('state_model');
	}
	
	public function listing()
	{
		$data['RESULT'] = $this->state_model->get_all_state(); 
		$this->load->view('admin/state/listing',$data);
	}
	
	
	
	public function add_new()
	{
		if(isset($_POST['submitform']))
		{	 
            $this->form_validation->set_rules('name', 'name', 'trim|required');	
            $this->form_validation->set_rules('code', 'code', 'trim|required');	
			// $this->form_validation->set_rules('status', 'Status', 'trim|required');	
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			  
			if ($this->form_validation->run() == TRUE)
			{
				 
				$postdata =  $this->input->post() ; 		
				unset($postdata['submitform']);
     			$this->state_model->save_state($postdata);
     			 $insert_id = $this->db->insert_id();
     			 if($insert_id){
     			 	 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
					  redirect('state/add_new');
				}else{
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been not saved.Please try again</div>');

				}
              
				
			}				
		}		
		$data['state'] = $this->state_model->get_all_state(); 
		$this->load->view('admin/state/add',$data);
	}
	
	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->state_model->get_state_by_id($args[0]); 

		
		if(isset($_POST['submitform']))
		{

			$this->form_validation->set_rules('name', 'name', 'trim|required');
			 $this->form_validation->set_rules('code', 'code', 'trim|required');	
			// $this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$postdata = $this->input->post();
					
				unset($postdata['submitform']);
                $this->state_model->update_state_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('state/listing');
			}	
		}
		 
		$data['state'] = $this->state_model->get_all_state(); 
		$this->load->view('admin/state/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$blog = $this->state_model->get_state_by_id($args[0]);
		$this->state_model->delete_state_by_id($args[0]);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('state/listing');
	}	
}