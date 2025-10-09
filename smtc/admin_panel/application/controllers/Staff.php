<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class staff  extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
	
		$role = $this->session->userdata('ADMIN_ROLE');
		if($this->session->adminid == "")
        {
            redirect('login');
        }

		if($role =='2')
		{
			redirect('admin');
		}	
   
    }


	public function add_new()
	{   	$link = $this->setting_model->get_all_setting();
		if(isset($_POST['submitform']))
		{	
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
              $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[tbl_admin.email]',array(
            'required'      => 'You have not provided %s.',
            'is_unique'     => 'Email already Exists or his Email has already an account with '.$link[0]->title
            )  );
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$postdata = $this->input->post();
				unset($postdata['submitform']);
				$postdata['create_date'] = date('Y-m-d h:i:s');				
				$postdata['role'] =2;				
				$postdata['permission'] =implode('@' ,$postdata['permission'] );				
				$postdata['password'] = md5($postdata['password']);				
				$this->staff_model->save_staff($postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
				$this->load->library('email');	
				$this->email->set_mailtype("html");
				$this->email->set_newline("\r\n");				
				$htmlContent = 'Thanks for signing up!<br>
								Your account has been created, you can login with the following credentials<br>
								<strong>Email: </strong>'.$_POST['email'].'<br><strong>Password: </strong>'.$_POST['password'].'<br><br>
								<br> <br><br><br>Thanks<br>'.$link[0]->title;;
				$this->email->to(trim($_POST['email']));
				$this->email->from($link[0]->email,$link[0]->title);
				$this->email->subject($link[0]->title.':: Account Details');
				$this->email->message($htmlContent);				
				$this->email->send(); 
				redirect('staff/listing');

			}				
		}
			
		$this->load->view('admin/staff/add');
	}
	
	public function listing()
	{
		$data['result'] = $this->staff_model->get_all_staff(); 
		$this->load->view('admin/staff/listing',$data);
	}
		
	public function delete_staff()
	{
		$args = func_get_args();
		$this->staff_model->delete_staff_by_id($args[0]);
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('staff/listing');
	}

	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->staff_model->get_staff_by_id($args[0]); 
		
		if(isset($_POST['submitform']))
		{
			
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$postdata = $this->input->post();
				unset($postdata['submitform']);
				$postdata['permission'] =implode('@' ,$postdata['permission'] );				
				$this->staff_model->update_staff_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('staff/listing');
			}	
		}
		
	
		$this->load->view('admin/staff/edit',$data);
	}
	
	public function password()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->staff_model->get_staff_by_id($args[0]); 
		
		if(isset($_POST['submitform']))
		{
			
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$postdata = $this->input->post();
				$postdata['password'] = md5($postdata['password']);	
				unset($postdata['submitform']);
				$this->staff_model->update_staff_by_id($args[0],$postdata);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('staff/listing');
			}	
		}
		
	
		$this->load->view('admin/staff/password',$data);
	}	

}