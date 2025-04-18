<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller 

{

	// ----------------index---------

	function index()
	{
		$this->Isadmin_login();
		if(isset($_POST['submit']))
		{
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			$row= $this->admins->adminLogin($username, $password);
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
			}
		}
		$this->load->view('admin/index');
	}


// ----------dashboard---------

	function dashboard()
	{
		$this->chech_admin_login();
		$this->load->view('admin/dashboard');
	}

//---------------logout---

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','<div class="alert alert-success">You have been successsully logout.</div>');
		redirect('');
	}



// -------------chech_admin_login-----------


	function chech_admin_login()
	{
		$ci = & get_instance();
		$USERID      = $ci->session->userdata('USERID');	
		$USERNAME      = $ci->session->userdata('USERNAME');	
		$logged_in      = $ci->session->userdata('logged_in');	
		if($USERID=="" && $USERNAME=="")
		{
			redirect('index.php/admin/index');
		}
	}



// ---------------------Isadmin_login-------

	function Isadmin_login()
	{
		$ci = & get_instance();
		$USERID      = $ci->session->userdata('USERID');	
		$USERNAME      = $ci->session->userdata('USERNAME');	
		$logged_in      = $ci->session->userdata('logged_in');	
		if($USERID!="" && $USERNAME!="")
		{
			redirect('admin/dashboard');
		}
	}




}