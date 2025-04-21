<?php

class Edit_profile extends CI_Controller
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


	//---edit function in left menu

	function edit()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{

			if($_FILES['image']['name']!='')
			{
				$image = $_FILES['image']['name'];
				$path = 'media/uploads/'.$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$image = $_POST['oldimage'];
			}

			$data['image'] = $image;
			$data['username'] = $this->input->post('username');			
			$data['password'] = $this->input->post('password');	

			
			$this->crud->update('tbl_admin',$this->session->userdata("id"),$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');

			redirect('admin/dashboard');	

		}

		$data['EDITDATA'] = $this->crud->fetchdatabyid($this->session->userdata("id"),'tbl_admin');
		$this->load->view('admin/edit_profile',$data);
	}


}