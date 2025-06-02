<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function user_registration()
	{
		$result = array();

		$username = $this->input->post('username');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$role = 3;
		$image = '1677049590.jpg';
		$status = 1;
		$addeddate = date('Y-m-d');

		$check_email = $this->crud->selectDataByMultipleWhere('tbl_admin',array('email'=>$email,));

		if(empty($check_email))
		{
			$insert_data = array(
				"username"=>$username,
				"mobile"=>$mobile,
				"email"=>$email,
				"password"=>$password,
				"role"=>$role,
				"image"=>$image,
				"status"=>$status,
				"addeddate"=>$addeddate,
			);

			$this->crud->insert('tbl_admin',$insert_data);
			$this->session->set_flashdata('message','<div class="alert alert-success">Registration Succefully Done...</div>');
			$result['status'] = '200';
			$result['message'] = 'Registration Succefully Done..';
			$result['data'] = $insert_data;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Email Already Registerd..';
			$result['data'] = [];
		}
		echo json_encode($result);
	}



	public function user_login()
	{
		$result = array();

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$check = $this->crud->selectDataByMultipleWhere('tbl_admin',array('email'=>$email,'password'=>$password,'status'=>1,'role'=>3,));

		if(!empty($check))
		{
			$session_data = array(
				"id"=>$check[0]->id,
				"userdashboard"=>$check[0]->id,
				"email"=>$check[0]->email,
				"password"=>$check[0]->password,
				"role"=>$check[0]->role,
			);

			$id = $check[0]->id;
			$temp_session_id = temp_session_id();

			$this->session->set_userdata($session_data);

			$this->db->update("add_to_temp_cart",array("temp_user_id"=>$id,),array("temp_user_id"=>$temp_session_id,));
            $this->db->update("add_to_wishlist",array("temp_user_id"=>$id,),array("temp_user_id"=>$temp_session_id,));
            // $this->db->update("add_to_compare_product",array("temp_user_id"=>$id,),array("temp_user_id"=>$temp_session_id,));

			$result['status'] = '200';
			$result['message'] = 'Login Succefully Done..';
			$result['data'] = $session_data;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Wrong Email ID or Password..';
			$result['data'] = [];
		}
		echo json_encode($result);

	}

/*-------user logout---*/

	public function userlogout()
    {
        $this->session->sess_destroy();
        redirect("");
    }


/*-------user_profile_update---*/

	public function user_update_profile()
	{
		$result = array();

		// $user_id = $this->input->post('user_id');
		$user_id = temp_session_id();

		$username = $this->input->post('username');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$password = $this->input->post('password');
		$image = $this->input->post('image');

		if(!empty($username))
			$user_data['username'] = $username;
		if(!empty($first_name))
			$user_data['first_name'] = $first_name;
		if(!empty($last_name))
			$user_data['last_name'] = $last_name;
		if(!empty($email))
			$user_data['email'] = $email;
		if(!empty($mobile))
			$user_data['mobile'] = $mobile;
		if(!empty($password))
			$user_data['password'] = $password;

		if(!empty($user_id))
		{
			if(isset($_FILES['image']))
			{
				if($_FILES['image']['name']!='')
				{
					$bimage = time().'.'.explode(".", $_FILES['image']['name'])[1];
					$path = 'media/uploads/'.$bimage;
					move_uploaded_file($_FILES['image']['tmp_name'],$path);
				}
				else
				{
					$bimage = "";
				}
				$user_data['image'] = $bimage;
			}

			$this->db->update("tbl_admin",$user_data,array('id' => $user_id,));

            $result['status']  = "200";
            $result['message'] = "Update Successfully";
            $result['data']    = $user_data;
		}
		else
        {
            $result['status']  = "400";
            $result['message'] = "Login Please..";
            $result['data']    = "";
        }

        echo json_encode($result);
	}


/*user invoice*/

	public function userinvoice()
	{
		$args=func_get_args();  //get id
		$data['EDITDATA']= $this->crud->fetchdatabyid($args[0],'finalorder');
		$this->load->view('userinvoice',$data);
	}

/*----order cancel---*/
	
	public function order_cancel()
	{
		$result = array();

		date_default_timezone_set('Asia/Kolkata');
		// $user_id = $this->input->post('user_id');
		$user_id = temp_session_id();
		$order_id = $this->input->post('order_id');
		$cancel_date = date('Y-m-d');

		$insert_data = array(
			"user_id"=>$user_id,
			"order_id"=>$order_id,
			"cancel_date"=>$cancel_date,
		);

		if(!empty($insert_data))
		{
			$this->crud->insert('order_cancel_request',$insert_data);
			$this->db->update('finalorder',array('status'=>6,),array('order_id'=>$order_id,));

			$result['status'] = '200';
			$result['message'] = 'Order Exchange Request Send successfully..';
			$result['data'] = $insert_data;
		}
		else
		{
			$result['status'] = '400';
			$result['message'] = 'Somthing Wrong..';
			$result['data'] = [];
		}
		echo json_encode($result);
	}

















}