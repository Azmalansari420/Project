<?php

class purchase_list extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Purchase List',
						   	'table_name'=>'plan_purchase',
						   	'upload_path'=>'media/uploads/',
						   	'load_path'=>'dealer/purchase_list/',
						   	'redirect_path'=>'dealer/purchase_list/',
						   	'back_url'=>'purchase_list',
						   	'add_url'=>'purchase_list',
						   	'edit_url'=>'purchase_list',
						   	'delete_url'=>'purchase_list',
						   	'view_url'=>'purchase_list',
						   	'status_value'=>'purchase_list',
						   	'multiple_delete'=>'dealer/purchase_list/delete_all',
						   	'controller_name'=>'purchase_list',
						   	'page_name'=>'purchase_list-doctor-profile.php',
						   ); 


   //--check user login or not
	 public function __construct()
    {
        parent::__construct(); 
                chech_dealer_login(); 

    }



	//insert
	function add()
	{
		 
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');
			
			$vendor_id = 0;
      $dealer_id = 0;

			$hospital = dealer_data();
			$dealer_id = $hospital->id;		
			$vendor_id = $hospital->vendor_id;	
      $user_id = $this->input->post("user_id");

			$requestid = time();
      $username = $this->input->post("username");
      $mobile = $this->input->post("mobile");
      $pincode = $this->input->post("pincode");
      $email = $this->input->post("email");

      $product_id = $this->input->post("product_id");
      $plan_id = $this->input->post("hidden_plan_id");
      $device_id = $this->input->post('device_id');
      $purchase_date = $this->input->post('purchase_date');
      $plan_price = $this->input->post("final_amt");
      $gst = $this->input->post("gst");


      $plans = $this->db->get_where('plans',array('id'=>$plan_id))->result_object();
      $plan_name = planname($plans[0]->id);
      $final_amt = $this->input->post("payable_amt");

      $expirey_date = date('Y-m-d H:i:s', strtotime('+1 year'));
      $status = 1; //1=process,2=pending,3=sucess,3=failed
      $addeddate = date('Y-m-d H:i:s');

      $insertdata = array(
          "vendor_id"=>$vendor_id,
          "dealer_id"=>$dealer_id,
          "user_id"=>$user_id,
          "requestid"=>$requestid,
          "username"=>$username,
          "mobile"=>$mobile,
          "pincode"=>$pincode,
          "email"=>$email,
          "product_id"=>$product_id,
          "plan_id"=>$plan_id,
          "device_id"=>$device_id,
          "purchase_date"=>$purchase_date,
          "plan_price"=>$plan_price,
          "gst"=>$gst,
          "plan_name"=>$plan_name,
          "final_amt"=>$final_amt,
          "expirey_date"=>$expirey_date,
          "status"=>$status,
          "addeddate"=>$addeddate,
      );

			$this->crud->insert($this->arr_values['table_name'],$insertdata);
			redirect(base_url('razorpay/pay?requestid='.$requestid));	

			// $this->session->set_flashdata('message','<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><div class="bg-blue rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"><i class="fa fa-bell"></i></div><strong class="me-auto ms-2">Message</strong><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body" style="color:black;">Record has been Successfully Saved..</div></div>');			
			
			// redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('dealer/'.$this->arr_values['back_url'].'/listing');
		$this->load->view($this->arr_values['load_path'].'add',$data);
	}


	//----list dekhney ke lia 

	function listing()
	{
		 
		$hospital = dealer_data();
		// print_r($hospital->id);
		 
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->selectDataByMultipleWhere($this->arr_values['table_name'],array('dealer_id'=>$hospital->id));

		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('dealer/'.$this->arr_values['back_url'].'/listing');
		$data['add_url'] = base_url('dealer/'.$this->arr_values['add_url'].'/add');
		$data['edit_url'] = base_url('dealer/'.$this->arr_values['edit_url'].'/edit/');
		$data['delete_url'] = base_url('dealer/'.$this->arr_values['delete_url'].'/delete/');
		$data['view_url'] = base_url('dealer/'.$this->arr_values['view_url'].'/view/');
		$data['status_value'] = base_url('dealer/'.$this->arr_values['status_value'].'/new_status');
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


			$hospital = dealer_data();
			$data['dealer_id'] = $hospital->id;		
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
		$data['back_url'] = base_url('dealer/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'edit',$data);
	}





	//----------------view

	function view()
	{
		 
		$args=func_get_args();
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('dealer/'.$this->arr_values['back_url'].'/listing');
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



	public function get_device() 
	{
	    $p_id = $this->input->post('p_id');
	    $cities = $this->db->get_where('device', array('product_id' => $p_id, 'status' => 1))->result();

	    echo json_encode($cities);
	}



	public function get_plansperce() 
	{
	    $p_id = $this->input->post('p_id');
	    $plans = $this->db->get_where('plan_percentage', array('p_id' => $p_id))->result();

	    $html = '<option disabled selected>Select Plans</option>';
	    foreach ($plans as $plan) {
	        $html .= '<option value="'.$plan->plan_percentage.'" data-plan_id="'.$plan->plan_id.'">'.planname($plan->plan_id).'</option>';
	    }

	    $data['status'] = "200";
	    $data['data'] = $html;
	    
	    echo json_encode($data);
	}










}