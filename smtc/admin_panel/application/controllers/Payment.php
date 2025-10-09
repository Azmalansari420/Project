<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller 
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
		$this->load->model('payment_model');
	}
	
	public function listing()
	{
		$data['RESULT'] = $this->payment_model->get_all_payment(); 
		$data['user'] = $this->user_model->get_all_user(); 
		$this->load->view('admin/payment/listing',$data);
	}
	
	public function online()
	{
		$data['RESULT'] = $this->db->get('online_payment_user')->result(); 
        	$this->load->view('admin/payment/online_payment',$data);
	}
	
	
	
	public function add_new()
	{
		if(isset($_POST['submitform']))
		{	 
            $this->form_validation->set_rules('user_id', 'Title', 'trim|required');	
			$this->form_validation->set_rules('price', 'price', 'trim|required');	
			$this->form_validation->set_rules('payment_mode', 'payment_mode', 'trim|required');	
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			  
			if ($this->form_validation->run() == TRUE)
			{
				 
				$postdata =  $this->input->post() ; 		
				unset($postdata['submitform']);
     			$this->payment_model->save_payment($postdata);
     			 $insert_id = $this->db->insert_id();
     			 if($insert_id){
     			 	 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
					  redirect('payment/add_new');
				}else{
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been not saved.Please try again</div>');

				}
              
				
			}				
		}		
		$data['user'] = $this->user_model->get_all_user(); 
		$this->load->view('admin/payment/add',$data);
	}
	
	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->payment_model->get_payment_by_id($args[0]); 

		
		if(isset($_POST['submitform']))
		{

			$this->form_validation->set_rules('user_id', 'Title', 'trim|required');	
			$this->form_validation->set_rules('price', 'price', 'trim|required');	
			$this->form_validation->set_rules('payment_mode', 'payment_mode', 'trim|required');	
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$postdata = $this->input->post();
					
				unset($postdata['submitform']);
                $this->payment_model->update_payment_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('payment/listing');
			}	
		}
		 
			$data['user'] = $this->user_model->get_all_user(); 
		$this->load->view('admin/payment/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$this->payment_model->delete_payment_by_id($args[0]);
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('payment/listing');
	}
	
	public function online_delete()
	{
		$args = func_get_args();
		$this->payment_model->delete_online_payment_by_id($args[0]);
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('payment/online');
	}	
}