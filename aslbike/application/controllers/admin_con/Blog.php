<?php

class Blog extends CI_Controller
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

	//insert

	function add()
	{
		$this->chech_admin_login();
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$bimage = $_FILES['image']['name'];
				$path = 'media/uploads/blog/'.$bimage;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$bimage = "";
			}

			$data['image'] = $bimage;
			
			$data['title'] = $this->input->post('title');		
			$data['slug'] = $this->input->post('slug');
			if(empty($data['slug']))
			{
				$slug = slug($data['title']);
			}
			else
			{
				$slug = slug($data['slug']);
			}
			$data['slug'] = $slug;	
			$data['content'] = $this->input->post('content');			
			// $data['url'] = $this->input->post('url');			
			$data['status'] = $this->input->post('status');			
			$data['addeddate'] = date('y-m-d h:i:sA');

			$this->crud->insert('blog',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully saved.</div>');
			
			redirect('admin_con/blog/listing');	
		}

		$this->load->view('admin/blog/add');
	}


	//----listing list dekhney ke lia 

	function listing()
	{
		$this->chech_admin_login();
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data('blog');
		$this->load->view('admin/blog/list',$data);
	}


	//--delete ke lia

	function delete()
	{
		$args=func_get_args();
		$data=$this->crud->selectDataByMultipleWhere('blog',array('id'=>$args[0]));
		$path = 'media/uploads/blog/'.$data[0]->image;
		@unlink($path);
		$this->crud->delete('blog',$args[0]);
		$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('admin_con/blog/listing');

	}


	//----------------edit

	function edit()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$image = $_FILES['image']['name'];
				$path = 'media/uploads/blog/'.$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$image = $_POST['oldimage'];
			}

			$data['image'] = $image;
			$data['title'] = $this->input->post('title');		
			$data['slug'] = $this->input->post('slug');
			if(empty($data['slug']))
			{
				$slug = slug($data['title']);
			}
			else
			{
				$slug = slug($data['slug']);
			}
			$data['slug'] = $slug;	
			$data['content'] = $this->input->post('content');			
			// $data['url'] = $this->input->post('url');	
			$data['status'] = $this->input->post('status');						
			$data['modifieddate'] = date('y-m-d h:i:sA');

			$this->crud->update('blog',$args[0],$data);

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
		    redirect('admin_con/blog/listing');
		}

		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],'blog');
		$this->load->view('admin/blog/edit',$data);
	}





	//----------------view

	function view()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$image = $_FILES['image']['name'];
				$path = 'media/uploads/blog/'.$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$image = $_POST['oldimage'];
			}

			$data['image'] = $image;

			$data['title'] = $this->input->post('title');
			$data['slug'] = $this->input->post('slug');
			if(empty($data['slug']))
			{
				$slug = slug($data['title']);
			}
			else
			{
				$slug = slug($data['slug']);
			}		
			$slug['slug'] = $slug;
			$data['content'] = $this->input->post('content');			
			// $data['url'] = $this->input->post('url');	
			$data['status'] = $this->input->post('status');						
			$data['modifieddate'] = date('y-m-d h:i:sA');

			$this->crud->update('blog',$args[0],$data);

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully deleted.</div>');
		    // redirect('admin_con/blog/listing');
		}

		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],'blog');
		$this->load->view('admin/blog/view',$data);
	}





}