<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		
		$adminid = $this->session->userdata('adminid');
		if(empty($adminid))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
		$this->load->model('setting_model');
	}
	public function listing()

	{

		$data['RESULT'] = $this->setting_model->get_all_setting(); 

		$this->load->view('admin/setting/listing',$data);

	}

	

	public function edit()

	{

		$args = func_get_args();

		$data['RESULT'] = $this->setting_model->get_slider_by_id($args[0]); 

		

		if(isset($_POST['submitform']))
		{
			
			
				$postdata = $this->input->post();

					if(isset($_FILES['logo']['name']) && !empty($_FILES['logo']['name']))
					{
						$allow_ext = array('png','jpg','jpeg','JPEG','gif');
						$file_ext = image_extension($_FILES['logo']['name']);
						if(in_array($file_ext,$allow_ext))
						{
							$postdata['logo']=$file_name = create_image_unique($_FILES['logo']['name']);
							$tmp_name = $_FILES['logo']['tmp_name'];
							$path = 'uploads/logo/'.$file_name;
							move_uploaded_file($tmp_name,$path);
							$postdata['logo'] = $file_name;	
							delete_file('uploads/logo/',$postdata['old_file']);
						}
					}
					else
					{
						$postdata['logo'] = $postdata['old_file'];
					}
					unset($_FILES['logo']['name']);
				
				
			
				unset($postdata['submitform']);

				unset($postdata['old_file']);

				$this->setting_model->update_slider_by_id($args[0],$postdata);

				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully updated.</div>');

				redirect('setting/listing');

		

		}

		$this->load->view('admin/setting/edit',$data);

	}

	

	
	

}