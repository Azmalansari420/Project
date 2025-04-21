<?php

class Site_setting extends CI_Controller
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
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['logo']['name'])
			{
				$image = $_FILES['logo']['name'];
				$path = 'media/uploads/site_setting/'.$image;
				move_uploaded_file($_FILES['logo']['tmp_name'],$path); 
			}

			else
			{
				$image = $_POST['oldimage'];
			}

			$data['logo'] = $image;
			$data['mobile'] = $this->input->post('mobile');
			// $data['alt_mobile'] = $this->input->post('alt_mobile');			
			$data['email'] = $this->input->post('email');
			// $data['alt_email'] = $this->input->post('alt_email');
			$data['address'] = $this->input->post('address');
			// $data['map'] = $this->input->post('map');
			// $data['linkdin'] = $this->input->post('linkdin');
			$data['facebook'] = $this->input->post('facebook');
			$data['instragram'] = $this->input->post('instragram');
			$data['twitter'] = $this->input->post('twitter');
			
			

			$this->crud->update('site_setting',$args[0],$data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			// redirect('admin_con/site_setting/edit');	

		}

		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],'site_setting');
		$this->load->view('admin/site_setting/edit',$data);
	}


}