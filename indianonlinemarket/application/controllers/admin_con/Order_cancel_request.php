<?php

class Order_cancel_request extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Cancel Orders',
						   	'table_name'=>'order_cancel_request',
						   	'upload_path'=>'media/uploads/order_cancel_request/',
						   	'load_path'=>'admin/order_cancel_request/',
						   	'redirect_path'=>'admin_con/order_cancel_request/',
						   	'back_url'=>'order_cancel_request',
						   	'add_url'=>'order_cancel_request',
						   	'edit_url'=>'order_cancel_request',
						   	'invoice_url'=>'order_cancel_request',
						   	'delete_url'=>'order_cancel_request',
						   	'view_url'=>'order_cancel_request',
						   	'status_value'=>'order_cancel_request',
						   ); 


   //--check user login or not
	function chech_admin_login()
	{
		$ci = & get_instance();
	    if(empty($ci->session->userdata('id')))
	    {
	      redirect(base_url().'admin');
	    }
	}




	//----list dekhney ke lia 

	function listing()
	{
		$this->chech_admin_login();
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data($this->arr_values['table_name']);

		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['add_url'] = base_url('admin_con/'.$this->arr_values['add_url'].'/add');
		$data['edit_url'] = base_url('admin_con/'.$this->arr_values['edit_url'].'/edit/');
		$data['invoice_url'] = base_url('admin_con/'.$this->arr_values['invoice_url'].'/invoice/');
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['view_url'] = base_url('admin_con/'.$this->arr_values['view_url'].'/view/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
		$data['upload_path'] = $this->arr_values['upload_path'];
		
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}


	//------------delete 

	 public function delete($id)//for deleting the user
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






	function invoice()
	{
		$this->chech_admin_login();
		$args=func_get_args();
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$data['page_title'] = $this->arr_values['page_title'];
		$this->load->view($this->arr_values['load_path'].'invoice',$data);
	}



	public function status_change()
	{
		if(isset($_POST['submit']))
		{						
			$id = $this->input->post('id');						
			$data['status'] = $this->input->post('status');		
			$this->db->update('finalorder',$data,array("id"=>$id));
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		   redirect($_SERVER['HTTP_REFERER']);
		}
	}
	







	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}