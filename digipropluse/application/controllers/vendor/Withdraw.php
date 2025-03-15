<?php

class Withdraw extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Withdraw',
						   	'table_name'=>'withdraw_request',
						   	'upload_path'=>'media/uploads/',
						   	'load_path'=>'vendor/withdraw/',
						   	'redirect_path'=>'vendor/withdraw/',
						   	'back_url'=>'withdraw',
						   	'add_url'=>'withdraw',
						   	'edit_url'=>'withdraw',
						   	'delete_url'=>'withdraw',
						   	'view_url'=>'withdraw',
						   	'status_value'=>'withdraw',
						   	'multiple_delete'=>'vendor/withdraw/delete_all',
						   	'controller_name'=>'withdraw',
						   	'page_name'=>'withdraw-doctor-profile.php',
						   ); 


   //--check user login or not
	 public function __construct()
    {
        parent::__construct(); 
                chech_vendor_login(); 

    }



	//insert
	function add()
	{
		 
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			

			if($_FILES['image']['name']!='')
			{
				$bimage = rand().'.'.explode(".", $_FILES['image']['name'])[1];
				$path = $this->arr_values['upload_path'].$bimage;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}
			else
			{
				$bimage = "";
			}
			$data['image'] = $bimage;	

			$hospital = vendor_data();
			$data['vendor_id'] = $hospital->id;

			$data['amount'] = $this->input->post('amount');
			
			$data['bankifcs'] = $this->input->post('bankifcs');
			$data['bankac'] = $this->input->post('bankac');
			$data['firmname'] = $this->input->post('firmname');
			$data['lat_no'] = $this->input->post('lat_no');
			$data['long_no'] = $this->input->post('long_no');

			$data['status'] = $this->input->post('status');			
			$data['addeddate'] = date('Y-m-d H:i:s');


			$this->crud->insert($this->arr_values['table_name'],$data);
			$this->session->set_flashdata('message','<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><div class="bg-blue rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"><i class="fa fa-bell"></i></div><strong class="me-auto ms-2">Message</strong><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body" style="color:black;">Record has been Successfully Saved..</div></div>');			
			redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('vendor/'.$this->arr_values['back_url'].'/listing');
		$this->load->view($this->arr_values['load_path'].'add',$data);
	}


	//----list dekhney ke lia 

	function listing()
	{
		 
		$hospital = vendor_data();
		// print_r($hospital->id);
		 
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->selectDataByMultipleWhere($this->arr_values['table_name'],array('user_id'=>$hospital->id));

		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('vendor/'.$this->arr_values['back_url'].'/listing');
		$data['add_url'] = base_url('vendor/'.$this->arr_values['add_url'].'/add');
		$data['edit_url'] = base_url('vendor/'.$this->arr_values['edit_url'].'/edit/');
		$data['delete_url'] = base_url('vendor/'.$this->arr_values['delete_url'].'/delete/');
		$data['view_url'] = base_url('vendor/'.$this->arr_values['view_url'].'/view/');
		$data['status_value'] = base_url('vendor/'.$this->arr_values['status_value'].'/new_status');
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['multiple_delete'] = base_url($this->arr_values['multiple_delete']);
		
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}


	//------------delete 

	public function delete($id)
	  {
	    $delete=$this->crud->delete($this->arr_values['table_name'],$id);
	    if($delete)
        {
          // echo "Success";
          redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
          echo "Error";
        }
	  }

	  /*-------delete multiple*/
	  function delete_all()
		{
			$ids = $this->input->post('id');
		    if (!empty($ids)) {
		        $this->db->where_in('id', $ids);
		        $this->db->delete($this->arr_values['table_name']);
		    }
		}


	//----------------edit

	function edit()
	{
		 
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$image = time().'.'.explode(".", $_FILES['image']['name'])[1];
				$path = $this->arr_values['upload_path'].$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}
			else
			{
				$image = $_POST['oldimage'];
			}
			$data['image'] = $image;


			$hospital = vendor_data();
			$data['vendor_id'] = $hospital->id;		
			$data['role'] = 2;

			
			$data['username'] = $this->input->post('username');			
			$data['slug'] = slug($data['username']);
			$data['mobile'] = $this->input->post('mobile');			
			$data['email'] = $this->input->post('email');			
			$data['password'] = $this->input->post('password');			
			$data['pincode'] = $this->input->post('pincode');			
			$data['state_id'] = $this->input->post('state_id');			
			$data['city_id'] = $this->input->post('city_id');
			$data['address'] = $this->input->post('address');

			$data['bankname'] = $this->input->post('bankname');
			$data['bankifcs'] = $this->input->post('bankifcs');
			$data['bankac'] = $this->input->post('bankac');
			$data['firmname'] = $this->input->post('firmname');
			$data['lat_no'] = $this->input->post('lat_no');
			$data['long_no'] = $this->input->post('long_no');

			$data['status'] = $this->input->post('status');						
			$data['modifieddate'] = date('Y-m-d H:i:s');

			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			

			$this->session->set_flashdata('message','<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><div class="bg-blue rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"><i class="fa fa-bell"></i></div><strong class="me-auto ms-2">Message</strong><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body" style="color:black;">Record has been successfully Updated..</div></div>');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('vendor/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'edit',$data);
	}





	//----------------view

	function view()
	{
		 
		$args=func_get_args();
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('vendor/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'view',$data);
	}


//---------------------status

	public function status_change()
	{
		if(isset($_POST['submit']))
		{						
			$id = $this->input->post('id');						
			$data['status'] = $this->input->post('status');		
			$this->db->update($this->arr_values['table_name'],$data,array("id"=>$id));
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}

	}



	public function new_status()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$this->db->update($this->arr_values['table_name'],array('status'=>$status),array('id'=>$id));
		$status_html = status($status);
		$data['data'] = array("status"=>$status_html,);
		echo json_encode($data);
	}



	 public function withdraw_request()
    {
        $result = array();

        $hospital = vendor_data();

        $requestid = time();
		$user_id = $hospital->id;
		$bankname = $hospital->bankname;
		$bankifcs = $hospital->bankifcs;
		$bankac = $hospital->bankac;
		$amount = $this->input->post('amount');

        $addeddate = date('Y-m-d H:i:s ');
        $status = 1; //1=process,2=pending,3=sucess,3=failed

        $insertdata = array(
            "requestid"=>$requestid,
            "user_id"=>$user_id,
            "bankname"=>$bankname,
            "bankifcs"=>$bankifcs,
            "bankac"=>$bankac,
            "amount"=>$amount,
            "addeddate"=>$addeddate,
            "status"=>$status,
        );

        $wallet_amount = $this->crud->wallet($user_id);
        if ($amount > $wallet_amount) 
        {
            echo json_encode(["status" => 400, "message" => "Low balance.", "data" => []]);
            return;
        }

        if(!empty($insertdata))
        {
            $this->db->insert("withdraw_request",$insertdata);

            $url = base_url("vendor/withdraw/listing");

            // print_r($url);
            // die	;

            $request_id = $requestid;
            $user_id = $user_id;
            $add_type = 2;
            $type = "debit";
            $amount = $amount;
            $message = 'Withdraw Amount';

            $this->crud->wallet_credit_debit($request_id,$user_id, $type, $add_type,$amount, $message, );
            $update_wallet_amount = $this->crud->wallet($user_id);

            
            $result['status']  = "200";
            $result['message'] = "Submit Successfully.";
            $result['data']  = $insertdata;
            $result['url']  = $url;
            $result['update_wallet_amount']  = $update_wallet_amount;
        }
        else
        {
            $result['message'] = "User not found";
            $result['status']  = "400";
            $result['data']    = array();
        }
        echo json_encode($result);
    }






















	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}