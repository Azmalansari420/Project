<?php

class Registration extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Registration',
						   	'table_name'=>'registration',
						   	'upload_path'=>'media/uploads/user/',
						   	'load_path'=>'admin/registration/',
						   	'redirect_path'=>'admin_con/registration/',
						   	'back_url'=>'registration',
						   	'edit_url'=>'registration',
						   	'delete_url'=>'registration',
						   	'view_url'=>'registration',
						   	'status_value'=>'registration',
						   );
	

	///------author for login--
	function chech_admin_login()
	{
		$ci = & get_instance();
	    if(empty($ci->session->userdata('id')))
	    {
	      redirect(base_url().'admin');
	    }
	}

	
	//----listing list dekhney ke lia 

	function listing()
	{
		$this->chech_admin_login();
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data($this->arr_values['table_name']);
		$data['page_title'] = $this->arr_values['page_title'];
		$data['edit_url'] = base_url('admin_con/'.$this->arr_values['edit_url'].'/edit/');
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['view_url'] = base_url('admin_con/'.$this->arr_values['view_url'].'/view/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
		$data['upload_path'] = $this->arr_values['upload_path'];
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}


	//--delete ke lia

	function delete()
	{
		$args=func_get_args();
		$data=$this->crud->selectDataByMultipleWhere($this->arr_values['table_name'],array('id'=>$args[0]));
		// $path = $this->arr_values['upload_path'].$data[0]->image;
		@unlink($path);
		$this->crud->delete($this->arr_values['table_name'],$args[0]);
		$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully deleted.</div>');		
		redirect($this->arr_values['redirect_path'].'listing');	
	}


	function view()
	{
		$this->chech_admin_login();
		$args=func_get_args();
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'view',$data);
	}



	// ------

	function useramount()
	{
		$this->chech_admin_login();
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			$principal_amt = $this->input->post('principal_amt');			
			$user_id = $this->input->post('user_id');
			$amount_type = $this->input->post('amount_type');

			$this->crud->create_wallet($user_id);	

			$wallet = $this->db->get_where('wallet',array('user_id'=>$user_id,))->result_object();
			if($amount_type==1)
			{
				$final_amount = $wallet[0]->principal_amt+$principal_amt;
				$amount_data = array("principal_amt"=>$final_amount,);
			}
			else if($amount_type==2)
			{
				$final_amount = $wallet[0]->total_amount+$principal_amt;
				$amount_data = array("total_amount"=>$final_amount,);
			}
			else if($amount_type==3)
			{
				$final_amount = $wallet[0]->refferal_amt+$principal_amt;
				$amount_data = array("refferal_amt"=>$final_amount,);
			}


			$this->db->update('wallet',$amount_data,array("user_id"=>$user_id,));

			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		    redirect($this->arr_values['redirect_path'].'listing');
		}
	}



	public function status_change()
	{

		if(isset($_POST['submit']))
		{						
			$id = $this->input->post('id');						
			$data['kyc_datails'] = $this->input->post('kyc_datails');		
			$this->db->update('registration',$data,array("id"=>$id));
			$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully Updated.</div>');
		   redirect($_SERVER['HTTP_REFERER']);
		}

		// $data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],'order_address');
		// $this->load->view('admin/order_address/edit',$data);

	}



}