<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Specialization extends CI_Controller 
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
		$this->load->model('specialization_model');
	}
	
	public function listing()
	{
		$data['RESULT'] = $this->specialization_model->get_all_specialization(); 
		$this->load->view('admin/specialization/listing',$data);
	}
	
	
	
	public function add_new()
	{
		if(isset($_POST['submitform']))
		{	 
			// $name = $this->input->post('name');	
			// $status = $this->input->post('status');	
			// $insertdata = array(
			// 	"name"=>$name,
			// 	"status"=>$status,
			// );
			// if($this->db->insert('specialization',$insertdata))
			// {
			// 	$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
			// 		  redirect('specialization/add_new');
			// }
			// else
			// {
			// 	$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been not saved.Please try again</div>');
			// }
            $this->form_validation->set_rules('name', 'name', 'trim|required');	
			$this->form_validation->set_rules('status', 'Status', 'trim|required');	
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			  
			if ($this->form_validation->run() == TRUE)
			{
				 
				$postdata =  $this->input->post() ; 		
				unset($postdata['submitform']);
     			$this->specialization_model->save_specialization($postdata);
     			 $insert_id = $this->db->insert_id();
     			 if($insert_id){
     			 	 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
					  redirect('specialization/add_new');
				}else{
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been not saved.Please try again</div>');

				}
              
				
			}				
		}		
		$data['specialization'] = $this->specialization_model->get_all_specialization(); 
		$this->load->view('admin/specialization/add',$data);
	}
	
	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->specialization_model->get_specialization_by_id($args[0]); 

		
		if(isset($_POST['submitform']))
		{

			// $name = $this->input->post('name');	
			// $status = $this->input->post('status');	
			// $insertdata = array(
			// 	"name"=>$name,
			// 	"status"=>$status,
			// );
			// $this->db->update('specialization',$insertdata,array('id'=>$args[0]));

			// $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
			// 	redirect('specialization/listing');
			
			

			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$postdata = $this->input->post();
					
				unset($postdata['submitform']);
                $this->specialization_model->update_specialization_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('specialization/listing');
			}	
		}
		 
		$data['specialization'] = $this->specialization_model->get_all_specialization(); 
		$this->load->view('admin/specialization/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$blog = $this->specialization_model->get_specialization_by_id($args[0]);
		$this->specialization_model->delete_specialization_by_id($args[0]);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('specialization/listing');
	}	
}