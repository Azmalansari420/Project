<?php

class Country extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Country',
						   	'table_name'=>'country',
						   	'upload_path'=>'media/uploads/country/',
						   	'load_path'=>'admin/country/',
						   	'redirect_path'=>'admin_con/country/',
						   	'back_url'=>'country',
						   	'add_url'=>'country',
						   	'edit_url'=>'country',
						   	'delete_url'=>'country',
						   	'view_url'=>'country',
						   	'status_value'=>'country',
						   	'multiple_delete'=>'admin_con/country/delete_all',
						   ); 


   //--check user login or not
	 public function __construct()
    {
        parent::__construct(); 
        chech_admin_login(); 
    }



	//insert

	function add()
	{
		 
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				// $bimage = time().$_FILES['image']['name'];
				$bimage = time().'.'.explode(".", $_FILES['image']['name'])[1];
				$path = $this->arr_values['upload_path'].$bimage;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}
			else
			{
				$bimage = "";
			}
			$data['image'] = $bimage;
			
			$data['type'] = $this->input->post('type');			
			$data['title'] = $this->input->post('title');			
			$data['name'] = $this->input->post('name');	
			$data['slug'] = $this->input->post('slug');
			if(empty($data['slug']))
			{
				$slug = slug($data['name']);
			}			
			else
			{
				$slug = slug($data['slug']);
			}
			$data['slug'] = $slug;			
			$data['content'] = $this->input->post('content');	

			/*document*/
			$document_data = [];

			$doc_weight = $this->input->post('doc_weight');
			$doc_dhl = $this->input->post('doc_dhl');
			$doc_fedex = $this->input->post('doc_fedex');
			$doc_aramex = $this->input->post('doc_aramex');
			$doc_ups = $this->input->post('doc_ups');

			if(!empty($doc_weight))
			{
				foreach($doc_weight as $key => $value)
				{
					$document_data[] = array(
						"doc_weight"=>$doc_weight[$key],
						"doc_dhl"=>$doc_dhl[$key],
						"doc_fedex"=>$doc_fedex[$key],
						"doc_aramex"=>$doc_aramex[$key],
						"doc_ups"=>$doc_ups[$key],
					);
				}
			}

			$document_data = json_encode($document_data);
			$data['document'] = $document_data;

			/*non document*/
			$nonument_data = [];

			$non_weight = $this->input->post('non_weight');
			$non_dhl = $this->input->post('non_dhl');
			$non_fedex = $this->input->post('non_fedex');
			$non_aramex = $this->input->post('non_aramex');
			$non_ups = $this->input->post('non_ups');
			if(!empty($non_weight))
			{
				foreach($non_weight as $key2 => $value2)
				{
					$nonument_data[] = array(
						"non_weight"=>$non_weight[$key2],
						"non_dhl"=>$non_dhl[$key2],
						"non_fedex"=>$non_fedex[$key2],
						"non_aramex"=>$non_aramex[$key2],
						"non_ups"=>$non_ups[$key2],
					);
				}
			}

			$nonument_data = json_encode($nonument_data);
			$data['nondocument'] = $nonument_data;

			$data['status'] = $this->input->post('status');			
			$data['addeddate'] = date('Y-m-d H:i:s');

			$this->crud->insert($this->arr_values['table_name'],$data);
			$this->session->set_flashdata('message','<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><div class="bg-blue rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"><i class="fa fa-bell"></i></div><strong class="me-auto ms-2">Message</strong><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body" style="color:black;">Record has been Successfully Saved..</div></div>');			
			redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$this->load->view($this->arr_values['load_path'].'add',$data);
	}


	//----list dekhney ke lia 

	function listing()
	{
		 
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data($this->arr_values['table_name']);

		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['add_url'] = base_url('admin_con/'.$this->arr_values['add_url'].'/add');
		$data['edit_url'] = base_url('admin_con/'.$this->arr_values['edit_url'].'/edit/');
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['view_url'] = base_url('admin_con/'.$this->arr_values['view_url'].'/view/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
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
          echo "Success";
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

			$data['type'] = $this->input->post('type');			
			$data['title'] = $this->input->post('title');			
			$data['name'] = $this->input->post('name');	
			$data['slug'] = $this->input->post('slug');
			if(empty($data['slug']))
			{
				$slug = slug($data['name']);
			}			
			else
			{
				$slug = slug($data['slug']);
			}
			$data['slug'] = $slug;			
			$data['content'] = $this->input->post('content');	

			/*document*/
			$document_data = [];
			
			$doc_weight = $this->input->post('doc_weight');
			$doc_dhl = $this->input->post('doc_dhl');
			$doc_fedex = $this->input->post('doc_fedex');
			$doc_aramex = $this->input->post('doc_aramex');
			$doc_ups = $this->input->post('doc_ups');

			if(!empty($doc_weight))
			{
				foreach($doc_weight as $key => $value)
				{
					$document_data[] = array(
						"doc_weight"=>$doc_weight[$key],
						"doc_dhl"=>$doc_dhl[$key],
						"doc_fedex"=>$doc_fedex[$key],
						"doc_aramex"=>$doc_aramex[$key],
						"doc_ups"=>$doc_ups[$key],
					);
				}
			}

			$document_data = json_encode($document_data);
			$data['document'] = $document_data;

			/*non document*/
			$nonument_data = [];

			$non_weight = $this->input->post('non_weight');
			$non_dhl = $this->input->post('non_dhl');
			$non_fedex = $this->input->post('non_fedex');
			$non_aramex = $this->input->post('non_aramex');
			$non_ups = $this->input->post('non_ups');
			if(!empty($non_weight))
			{
				foreach($non_weight as $key2 => $value2)
				{
					$nonument_data[] = array(
						"non_weight"=>$non_weight[$key2],
						"non_dhl"=>$non_dhl[$key2],
						"non_fedex"=>$non_fedex[$key2],
						"non_aramex"=>$non_aramex[$key2],
						"non_ups"=>$non_ups[$key2],
					);
				}
			}

			$nonument_data = json_encode($nonument_data);
			$data['nondocument'] = $nonument_data;
					
			$data['status'] = $this->input->post('status');						
			$data['modifieddate'] = date('Y-m-d H:i:s');

			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><div class="bg-blue rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"><i class="fa fa-bell"></i></div><strong class="me-auto ms-2">Message</strong><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body" style="color:black;">Record has been successfully Updated..</div></div>');
		    redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'edit',$data);
	}





	//----------------view

	function view()
	{
		 
		$args=func_get_args();
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
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


		public function addmore_document()
		{
			$data = array();
			$data['i'] = $this->input->post("i");
			$this->load->view("admin/country/add-document",$data);
		}



		public function addmore_nondocument()
		{
			$data = array();
			$data['i'] = $this->input->post("i");
			$this->load->view("admin/country/add-nondocument",$data);
		}



	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}