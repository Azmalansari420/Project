<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller 

{

	function index()

	{

		$this->Isadmin_login();

		if(isset($_POST['submit']))

		{

			$username= $this->input->post('username');

			$password= $this->input->post('password');

			$row= $this->admins->adminLogin($username, $password);

			//print_r($row); die();

			if(count($row)==1)

			{

					foreach($row as $val)

					{

							$data= array('USERID' =>$val->id,

									'USERNAME' => $val->username,

									'logged_in' => true,

									'id' => $val->id,

									);

							$this->session->set_userdata($data);

					}

				redirect('admin/dashboard');

			}

			else

			{

				$this->session->set_flashdata('message','<div class="alert alert-danger">Invalid Username and Password.</div>');

				//redirect('index.php/admin/');

			}

		}

		$this->load->view('admin/index');

	}







	function dashboard()

	{

		$this->chech_admin_login();

		$this->load->view('admin/dashboard');

	}







	function logout()

	{

		$this->session->sess_destroy();

		$this->session->set_flashdata('message','<div class="alert alert-success">You have been successsully lougout.</div>');

		redirect('');

	}







	function chech_admin_login()

	{

		$ci = & get_instance();

		$USERID      = $ci->session->userdata('USERID');	

		$USERNAME      = $ci->session->userdata('USERNAME');	

		$logged_in      = $ci->session->userdata('logged_in');	

		//echo $USERNAME;

		if($USERID=="" && $USERNAME=="")

		{

			redirect('index.php/admin/index');

		}

	}







	function Isadmin_login()

	{

		$ci = & get_instance();

		$USERID      = $ci->session->userdata('USERID');	

		$USERNAME      = $ci->session->userdata('USERNAME');	

		$logged_in      = $ci->session->userdata('logged_in');	

		//echo $USERNAME;

		if($USERID!="" && $USERNAME!="")

		{

			redirect('admin/dashboard');

		}

	}





	function forgotpass()

	{

		if(isset($_POST['submit']))

		{

			$email= $this->input->post('email');

			$row = $this->admins->checkadminemail($email);

			if(count($row)==1)

			{

				$token= sha1($row[0]->id.time());

							$url= base_url('index.php/admin/resetpassword/'.$token);

							$message  = '<html><body>';

				 			$message .= '<p>Dear '.$_POST['email'].',</p><p>Please click bellow link to reset your password.</p>';

				 			$message .= '<br/><a href="'.$url.'" ;>Click Here For Reset Password</a>';

				 			$message .= '<br/><br/><p>Thank You<br/>Admin</p>';

							$to = $_POST['email'];

							$subject = 'Password Reset';

							$from= "support@dvdadglobal.com";

							$headers = "From: " .$from. "\r\n";

							$headers .= "MIME-Version: 1.0\r\n";

							$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

							mail($to, $subject, $message, $headers);

				$data['forgot_key']=$token;

				$this->admins->updatetoken($row[0]->id,$data);

				$this->session->set_flashdata('message','<div class="alert alert-success">we have sent password reset instructions to your email address.</div>');

				//$this->session->set_flashdata('error_msg', 'we have sent password reset instructions to your email address');

				redirect('index.php/admin/index');

			}

			else

			{

				$this->session->set_flashdata('message','<div class="alert alert-danger">Your email address is invalid please check.</div>');

				redirect('index.php/admin/forgotpass');

			}

		}

		$this->load->view('admin/fogot-password');

	}







	

	function resetpassword()

	{

		$arg= func_get_args();

		$result= $this->admins->selectAdminForgotkey($arg[0]);

		//print_r($result);

		if($arg[0]=='')

		{

			redirect('index.php/admin/index');

		}

		if(count($result)==0)

		{

			redirect('index.php/admin/index');

		}

		if(isset($_POST['submit']))

		{

				if($_POST['npwd']!='' and $_POST['cpwd']!='')

				{

						if($_POST['npwd']==$_POST['cpwd'])

						{

							$data['password'] = $_POST['npwd'];

							$data['forgot_key'] = '';

							$this->db->where('forgot_key', $arg[0]);

							$this->admins->updateAdminDetails($data);

						}

						else

						{

							$this->session->set_flashdata('message','<div class="alert alert-danger">Password Not Match.</div>');

							redirect('index.php/admin/resetpassword/'.$arg[0]);

						}

				}

				else

				{

						$this->session->set_flashdata('message','<div class="alert alert-danger">Please Enter Password.</div>');

						redirect('index.php/admin/resetpassword/'.$arg[0]);

				}

			$this->session->set_flashdata('error_msg','Password changed successfully');

			redirect('index.php/admin/index');

		}

		$this->load->view('admin/reset-password');		

	}






	function setting()

	{

		$this->chech_admin_login();

		$adminID = $this->session->userdata('USERID');

		if(isset($_POST['submit']))

		{

			if($_POST['npwd']!='' and $_POST['cpwd']!='')

			{

				if($_POST['npwd']==$_POST['cpwd'])

				{

					$pwd= $_POST['npwd'];

				}

				else

				{

					$this->session->set_flashdata('message','<div class="alert alert-danger">Password Not Match.</div>');

					redirect("index.php/admin/setting");

				}

			}

			else

			{

				$pwd= $_POST['opwd'];

			}

			$data['username'] = $this->input->post('username');

			$data['emailid'] = $this->input->post('email');

			$data['phone'] = $this->input->post('phone');

			$data['facebook'] = $this->input->post('facebook');

			$data['twitter'] = $this->input->post('twitter');

			$data['google'] = $this->input->post('google');

			$data['youtube'] = $this->input->post('youtube');
			
			$data['Linkedin'] = $this->input->post('Linkedin');
			
			$data['instagram'] = $this->input->post('instagram');
			
			$data['address'] = $this->input->post('address');
			
			$data['telegram'] = $this->input->post('telegram');
			$data['discord'] = $this->input->post('discord');

			$data['password'] = $pwd;			

			$this->admins->updateAdmin($adminID,$data);

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');

			redirect("index.php/admin/setting");

		}

		///$this->IsAdmin_login();

		$data['adminData']=$this->admins->selectAdminData($adminID);//selectAdmin();

		$this->load->view('admin/setting/edit',$data);

	}






	function destination()

	{

		$this->chech_admin_login();

		$this->load->view('admin/destinations/add-destination');

	}





	// public function social_icon($id,$id2)
	// {
	// 	echo "string";
	// }

}