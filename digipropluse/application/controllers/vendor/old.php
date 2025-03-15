<?php

class Dealers extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Dealer',
						   	'table_name'=>'registration',
						   	'upload_path'=>'media/uploads/',
						   	'load_path'=>'vendor/dealers/',
						   	'redirect_path'=>'vendor/dealers/',
						   	'back_url'=>'dealers',
						   	'add_url'=>'dealers',
						   	'edit_url'=>'dealers',
						   	'delete_url'=>'dealers',
						   	'view_url'=>'dealers',
						   	'status_value'=>'dealers',
						   	'multiple_delete'=>'vendor/dealers/delete_all',
						   	'controller_name'=>'dealers',
						   	'page_name'=>'dealers-doctor-profile.php',
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

			$hospital = vendor_data();
			$data['vendor_id'] = $hospital->id;		
			$data['role'] = 2;


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



			if($_FILES['invoice_image']['name']!='')
			{
				$invoice_image = rand().'.'.explode(".", $_FILES['invoice_image']['name'])[1];
				$path = $this->arr_values['upload_path'].$invoice_image;
				move_uploaded_file($_FILES['invoice_image']['tmp_name'],$path);
			}
			else
			{
				$invoice_image = "";
			}
			$data['invoice_image'] = $invoice_image;

			if($_FILES['kyc_image']['name']!='')
			{
				$kyc_image = rand().'.'.explode(".", $_FILES['kyc_image']['name'])[1];
				$path = $this->arr_values['upload_path'].$kyc_image;
				move_uploaded_file($_FILES['kyc_image']['tmp_name'],$path);
			}
			else
			{
				$kyc_image = "";
			}
			$data['kyc_image'] = $kyc_image;

			if($_FILES['aadhar_image']['name']!='')
			{
				$aadhar_image = rand().'.'.explode(".", $_FILES['aadhar_image']['name'])[1];
				$path = $this->arr_values['upload_path'].$aadhar_image;
				move_uploaded_file($_FILES['aadhar_image']['tmp_name'],$path);
			}
			else
			{
				$aadhar_image = "";
			}
			$data['aadhar_image'] = $aadhar_image;
			
			if($_FILES['upload_pancard']['name']!='')
			{
				$upload_pancard = rand().'.'.explode(".", $_FILES['upload_pancard']['name'])[1];
				$path = $this->arr_values['upload_path'].$upload_pancard;
				move_uploaded_file($_FILES['upload_pancard']['tmp_name'],$path);
			}
			else
			{
				$upload_pancard = "";
			}
			$data['upload_pancard'] = $upload_pancard;

			$data['username'] = $this->input->post('username');			
			$slug = slug($data['username']);
			$data['mobile'] = $this->input->post('mobile');			
			$data['email'] = $this->input->post('email');			
			$data['password'] = $this->input->post('password');			
					
			$data['aadharno'] = $this->input->post('aadharno');			
			$data['pancardno'] = $this->input->post('pancardno');
			$data['address'] = $this->input->post('address');

			$data['pincode'] = $this->input->post('pincode');			
			$data['state_id'] = $this->input->post('state_id');			
			$data['city_id'] = $this->input->post('city_id');

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
		$data['ALLDATA'] = $this->crud->selectDataByMultipleWhere($this->arr_values['table_name'],array('vendor_id'=>$hospital->id));

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

			if($_FILES['invoice_image']['name']!='')
			{
				$invoice_image = rand().'.'.explode(".", $_FILES['invoice_image']['name'])[1];
				$path = $this->arr_values['upload_path'].$invoice_image;
				move_uploaded_file($_FILES['invoice_image']['tmp_name'],$path);
			}
			else
			{
				$invoice_image = $_POST['oldinvoice_image'];
			}
			$data['invoice_image'] = $invoice_image;


			if($_FILES['kyc_image']['name']!='')
			{
				$kyc_image = rand().'.'.explode(".", $_FILES['kyc_image']['name'])[1];
				$path = $this->arr_values['upload_path'].$kyc_image;
				move_uploaded_file($_FILES['kyc_image']['tmp_name'],$path);
			}
			else
			{
				$kyc_image = $_POST['oldkyc_image'];
			}
			$data['kyc_image'] = $kyc_image;

			if($_FILES['aadhar_image']['name']!='')
			{
				$aadhar_image = rand().'.'.explode(".", $_FILES['aadhar_image']['name'])[1];
				$path = $this->arr_values['upload_path'].$aadhar_image;
				move_uploaded_file($_FILES['aadhar_image']['tmp_name'],$path);
			}
			else
			{
				$aadhar_image = $_POST['oldaadhar_image'];
			}
			$data['aadhar_image'] = $aadhar_image;

			if($_FILES['upload_pancard']['name']!='')
			{
				$upload_pancard = rand().'.'.explode(".", $_FILES['upload_pancard']['name'])[1];
				$path = $this->arr_values['upload_path'].$upload_pancard;
				move_uploaded_file($_FILES['upload_pancard']['tmp_name'],$path);
			}
			else
			{
				$upload_pancard = $_POST['oldupload_pancard'];
			}
			$data['upload_pancard'] = $upload_pancard;

			
			$data['username'] = $this->input->post('username');			
			$slug = slug($data['username']);
			$data['mobile'] = $this->input->post('mobile');			
			$data['email'] = $this->input->post('email');			
			$data['password'] = $this->input->post('password');			
					
			$data['aadharno'] = $this->input->post('aadharno');			
			$data['pancardno'] = $this->input->post('pancardno');
			$data['address'] = $this->input->post('address');

			$data['pincode'] = $this->input->post('pincode');			
			$data['state_id'] = $this->input->post('state_id');			
			$data['city_id'] = $this->input->post('city_id');

			$data['status'] = $this->input->post('status');						
			$data['modifieddate'] = date('Y-m-d H:i:s');

			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$insert_id = $args[0];
			$old_slug = '';
			$old_slug_data = $this->db->select("slug")->get_where($this->arr_values['table_name'],array("id"=>$insert_id,))->result_object();
			if(!empty($old_slug_data))
    	{
    		$old_slug = $old_slug_data[0]->slug;
    	}
			$slug = $this->crud->insert_slug($slug,$insert_id,$this->arr_values['table_name'],$this->arr_values['controller_name'],$old_slug,$this->arr_values['page_name']);
			$this->crud->insert_meta_tags($slug,$old_slug);
			$update_data['slug'] = $slug;
			$this->db->update($this->arr_values['table_name'],$update_data,array("id"=>$insert_id,));

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



	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}