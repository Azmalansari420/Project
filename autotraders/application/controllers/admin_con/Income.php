<?php

class Income extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Income',
						   	'table_name'=>'income',
						   	'upload_path'=>'media/uploads/income/',
						   	'load_path'=>'admin/income/',
						   	'redirect_path'=>'admin_con/income/',
						   	'back_url'=>'income',
						   	'add_url'=>'income',
						   	'edit_url'=>'income',
						   	'delete_url'=>'income',
						   	'view_url'=>'income',
						   	'status_value'=>'income',
						   ); 



	public function create_income()
	{
		$date = date("Y-m-d");
		$date_time = date("Y-m-d H:i:s");
		$get_user = $this->crud->get_data('registration');
		foreach($get_user as $user)
		{
			$check = $this->crud->selectDataByMultipleWhere('income',array('user_id'=>$user->id,"date"=>$date,));
			if(empty($check))
			{
				$wallet_amount = $this->crud->selectDataByMultipleWhere('wallet',array('user_id'=>$user->id,));
				if(!empty($wallet_amount))
				{
					$principleamount = $wallet_amount[0]->principal_amt;
					$amount = $principleamount*1/100;
					$data_array = array(
						'user_id'=>$user->id,
						'date'=>$date,
						'date_time'=>$date_time,
						'amount'=>$amount,
						'percent'=>1,
					);
					$this->db->insert("income",$data_array);
				}
			}
		}
	}

	//insert

	// function add()
	// {
		
	// 	if(isset($_POST['submit']))
	// 	{
	// 		date_default_timezone_set('Asia/Kolkata');

			
	// 		$data['title'] = $this->input->post('title');			
	// 		$data['sub_title'] = $this->input->post('sub_title');			
	// 		$data['url'] = $this->input->post('url');			
	// 		$data['url_name'] = $this->input->post('url_name');			
	// 		$data['status'] = $this->input->post('status');			
	// 		$data['addeddate'] = date('y-m-d h:i:sA');

	// 		$this->crud->insert($this->arr_values['table_name'],$data);
	// 		$this->session->set_flashdata('message','<div class="alert alert-success">Record has been successfully saved.</div>');			
	// 		redirect($this->arr_values['redirect_path'].'listing');	
	// 	}
	// 	$data['page_title'] = $this->arr_values['page_title'];
	// 	$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
	// 	$this->load->view($this->arr_values['load_path'].'add',$data);
	// }


	//----list dekhney ke lia 

	

}