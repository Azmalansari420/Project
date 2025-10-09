<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('email'); 
	}
	

		
	function login()
	{

		$user_id = $this->session->userdata('USER_ID');
		$user_id = $this->session->userdata('USER_ID');
		if(($user_id)){ redirect('user/profile'); }

		$redirect_url = 'user/profile';

		if(isset($_POST['login']))
		{
			$reg_id	 = $this->input->post('reg_id');
			$dob = $this->input->post('dob');
			if(empty($reg_id) || empty($dob))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Mandontory Filled Required</div>');
					redirect('user/login');		
			}
			else
			{
				$rows = $this->user_model->user_login($reg_id,$dob);
				if(count($rows)>0)
				{
					if($rows[0]->status==1) {

							$admin_data = array('USER_ID'=>$rows[0]->id,'USER_NAME'=>$rows[0]->name,'USER_EMAIL'=>$rows[0]->email,'USER_ABOUT'=>$rows[0]->course,'USER_EROLLNO'=>$rows[0]->reg_id);
						$this->session->set_userdata($admin_data);	
					
						unset($_SESSION['redirect']);
						unset($_SESSION['verificationtoken']) ;
						unset($_SESSION['verificationEmail']) ;

						redirect($redirect_url);
						
					}else{
						$this->session->set_flashdata('msg','<div class="alert alert-warning">This account is inactive.</div>');
					
						unset($_SESSION['verificationtoken']) ;
						unset($_SESSION['verificationEmail']) ;
							redirect('user/login');

					}	
				}
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Invalid login credentials</div>');

						unset($_SESSION['verificationtoken']) ;
						unset($_SESSION['verificationEmail']) ;
					  redirect('user/login');		

				}			
			}
		}
		
	
		$this->load->view('front/user/login' );
	}
	

	function logout()
	{
		$this->session->unset_userdata('USER_ID');
		$this->session->unset_userdata('USER_EMAIL');
		$this->session->unset_userdata('USER_NAME');
		
        unset($_SESSION['EXAM_ID']) ; 
        unset($_SESSION['exam_session_id']) ; 
	      
		redirect('user/login');
	}


	public function profile()
	{
		$user_id = $this->session->userdata('USER_ID');
		if(empty($user_id)){ redirect('user/login'); }

        unset($_SESSION['EXAM_ID']) ; 
		if(isset($_SESSION['EXAM_ID'])){ redirect('main-paper'); }

		$data['RESULT']  = $this->user_model->get_user_by_id($user_id);
		$data['userActiveExam']  = $this->user_model->get_all_active_user_exam($user_id);
		$data['userProcessExam']  = $this->user_model->getUserProcessExam($user_id);
		$this->load->view('front/account/profile',$data);
	}


 	public function response($value='')
 	{

 		$responce = $this->session->flashdata('msg') ; 
 		if($responce){

 				$_SESSION['responce'] = $this->session->flashdata('msg') ; 
 		}
 		

 		$this->load->view('front/account/response');
 	}



	

 	

}
