<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Media extends CI_Controller 
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
		$this->load->model('media_model');
	}
	
	public function listing()
	{
		$data['RESULT'] = $this->media_model->get_all_media(); 
		$data['course'] = $this->course_model->get_all_course(); 
		$this->load->view('admin/media/listing',$data);
	}
	
	public function add_new()
	{
		if(isset($_POST['submitform']))
		{	 
            $this->form_validation->set_rules('course_id', 'Course', 'trim|required');	
			$this->form_validation->set_rules('type', 'type', 'trim|required');	
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			  
			if ($this->form_validation->run() == TRUE)
			{
				 
				$postdata =  $this->input->post() ;
				unset($postdata['submitform']);
				if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name']))
				{
					$allow_ext = array('png','jpg','jpeg','JPEG','gif','Pdf','pdf','docx','doc');
					$file_ext = image_extension($_FILES['file']['name']);
					if(in_array($file_ext,$allow_ext))
					{
						$postdata['file']=$file_name = create_image_unique($_FILES['file']['name']);
						$tmp_name = $_FILES['file']['tmp_name'];
						$path = 'uploads/user/'.$file_name;
						move_uploaded_file($tmp_name,$path);
						$postdata['file'] = $file_name;	
					}
				}
     			$this->media_model->save_media($postdata);
     			 $insert_id = $this->db->insert_id();
     			 if($insert_id){
     			 	 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
					  redirect('media/add_new');
				}else{
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been not saved.Please try again</div>');

				}
              
				
			}				
		}		
		$data['user'] = $this->user_model->get_all_user(); 
		$this->load->view('admin/media/add',$data);
	}
	
	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->media_model->get_media_by_id($args[0]); 

		
		if(isset($_POST['submitform']))
		{

		    $this->form_validation->set_rules('course_id', 'Course', 'trim|required');	
			$this->form_validation->set_rules('type', 'type', 'trim|required');		
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$postdata = $this->input->post();
				if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name']))
				{
					$allow_ext = array('png','jpg','jpeg','JPEG','gif','Pdf','pdf','docx','doc');
					$file_ext = image_extension($_FILES['file']['name']);
					if(in_array($file_ext,$allow_ext))
					{
						$postdata['file']=$file_name = create_image_unique($_FILES['file']['name']);
						$tmp_name = $_FILES['file']['tmp_name'];
						$path = 'uploads/user/'.$file_name;
						move_uploaded_file($tmp_name,$path);
						$postdata['file'] = $file_name;	
					}
				}	
				unset($postdata['submitform']);
                $this->media_model->update_media_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('media/listing');
			}	
		}
		 
			$data['user'] = $this->user_model->get_all_user(); 
		$this->load->view('admin/media/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$this->media_model->delete_media_by_id($args[0]);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('media/listing');
	}	
}