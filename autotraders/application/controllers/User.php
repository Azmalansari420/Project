<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function registration()
	{
		if(isset($_POST['submit']))
		{
			$data2['image'] = "user.jpg";
			$data2['sponser_id'] = $this->input->post('sponser_id');
			$data2['username'] = $this->input->post('username');
			$data2['email'] = $this->input->post('email');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['password'] = $this->input->post('password');
			$data2['status'] = '1';
			$data2['addeddate'] = date('y-m-d');
			$this->db->order_by("id desc");
			$this->db->limit(1);
			$user_ex = $this->db->get("registration")->result_object();
            if(!empty($user_ex))
            {
                $user_ex = $user_ex[0];
                $data2['user_id'] = $user_ex->user_id+1;
            }
            else
                $data2['user_id'] = 100;
			$this->crud->insert('registration',$data2);
			$user_id = $this->db->insert_id();
            $this->crud->create_wallet($user_id);
			redirect('login');	
		}
	}



	public function user_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$row = $this->crud->selectDataByMultipleWhere('registration',array('email'=>$email,'password'=>$password,));
		$temp_session_id = temp_session_id();
		if(count($row)==1)
		{
			foreach($row as $user)
			{
				$data = array('USERID'=>$user->id,
							  'EMAIL' =>$user->email,
							  'logged_in' => true,
							  'id' => $user->id,
							);
				$this->session->set_userdata($data);
				$user_id = $user->id;
			}
			redirect('userassets');
		}
		else
		{
		  $this->session->set_flashdata('message','<div class="alert alert-danger">Invalid Username and Password.</div>');
		  redirect($_SERVER['HTTP_REFERER']);
		}

	}


	public function userlogout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message','<div class="alert alert-success">You have been successsully logout.</div>');
		redirect('');
	}



	public function user_update()
	{
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$image = $_FILES['image']['name'];
				$path = 'media/uploads/user/'.$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}

			else
			{
				$image = $_POST['oldimage'];
			}
			$data2['image'] = $image;

			$id = temp_session_id();
			$data2['username'] = $this->input->post('username');
			$data2['password'] = $this->input->post('password');
			
			$data2['status'] = 1;

			$this->db->update('registration',$data2,array("id"=>$id,));
			
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully updated.</div>');
			redirect($_SERVER['HTTP_REFERER']);

		}		
	}






	public function check_login()
	{
	    if(empty($this->session->userdata("USERID")))
	    {
	    	$this->load->view("login");
	    }
	    else
	    {
	    	echo "200";
	    }
	}


	public function userkyc()
	{
		if(isset($_POST['submit']))
		{
			if($_FILES['pancard']['name']!='')
			{
				$bpancard = $_FILES['pancard']['name'];
				$path = 'media/uploads/'.$bpancard;
				move_uploaded_file($_FILES['pancard']['tmp_name'],$path);
			}
			else
			{
				$bpancard = "";
			}
			$data['pancard'] = $bpancard;

			if($_FILES['adharcard']['name']!='')
			{
				$badharcard = $_FILES['adharcard']['name'];
				$path = 'media/uploads/'.$badharcard;
				move_uploaded_file($_FILES['adharcard']['tmp_name'],$path);
			}
			else
			{
				$badharcard = "";
			}
			$data['adharcard'] = $badharcard;

			if($_FILES['bankstatement']['name']!='')
			{
				$bbankstatement = $_FILES['bankstatement']['name'];
				$path = 'media/uploads/'.$bbankstatement;
				move_uploaded_file($_FILES['bankstatement']['tmp_name'],$path);
			}
			else
			{
				$bbankstatement = "";
			}
			$data['bankstatement'] = $bbankstatement;

			if($_FILES['profilepic']['name']!='')
			{
				$bprofilepic = $_FILES['profilepic']['name'];
				$path = 'media/uploads/'.$bprofilepic;
				move_uploaded_file($_FILES['profilepic']['tmp_name'],$path);
			}
			else
			{
				$bprofilepic = "";
			}
			$data['profilepic'] = $bprofilepic;

			$data['username'] = $this->input->post('username');			
			
			$this->crud->insert('userkyc',$data);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	
	public function userhelp()
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['mobile'] = $this->input->post('mobile');
		$data['subject'] = $this->input->post('subject');
		$data['message'] = $this->input->post('message');

		$this->crud->insert('userhelp',$data);
		$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
		redirect($_SERVER['HTTP_REFERER']);

	}


}
