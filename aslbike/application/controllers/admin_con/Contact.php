<?php

class Contact extends CI_Controller
{
	///------author for login--

	function chech_admin_login()
	{
		$ci = & get_instance();
	    if(empty($ci->session->userdata('id')))
	    {
	      redirect(base_url().'admin');
	    }
	}

	
	//----listing list dekhney ke lia 

	function listing()
	{
		$this->chech_admin_login();
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data('contact');
		$this->load->view('admin/contact/list',$data);
	}


	//--delete ke lia

	function delete()
	{
		$args=func_get_args();
		$data=$this->crud->selectDataByMultipleWhere('contact',array('id'=>$args[0]));
		// $path = 'media/uploads/contact/'.$data[0]->image;
		@unlink($path);
		$this->crud->delete('contact',$args[0]);
		$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('admin_con/contact/listing');

	}




}