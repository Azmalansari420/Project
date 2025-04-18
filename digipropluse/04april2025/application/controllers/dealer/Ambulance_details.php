<?php

class Ambulance_details extends CI_Controller
{
	///------author for login--


	protected $arr_values = array(
						   	'page_title'=>'Ambulance Details',
						   	'table_name'=>'registration',
						   	'upload_path'=>'media/uploads/ambulance/',
						   	'load_path'=>'ambulance/',
						   ); 




	 public function __construct()
    {
        parent::__construct(); 
              chech_dealer_login(); 

    }


	//---edit function in left menu

	function edit()
	{
		 
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['logo']['name'])
			{
				$logo = time().'.'.explode(".", $_FILES['logo']['name'])[1];
				$path = $this->arr_values['upload_path'].$logo;
				move_uploaded_file($_FILES['logo']['tmp_name'],$path); 
			}
			else
			{
				$logo = $_POST['oldlogo'];
			}
			$data['logo'] = $logo;

			if($_FILES['image']['name'])
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

			$data['username'] = $username = $this->input->post('username');
			$data['slug'] = slug($username);
			$data['username'] = $this->input->post('username');
			$data['mobile'] = $this->input->post('mobile');			
			$data['ambulance_status'] = $this->input->post('ambulance_status');			

			$data['address'] = $this->input->post('address');
			$data['opning_time'] = $this->input->post('opning_time');

			$data['location'] = $this->input->post('location');


			// print_r($_POST);
			// // die;

			$this->crud->update($this->arr_values['table_name'],$args[0],$data);
			$this->session->set_flashdata('message','<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><div class="bg-blue rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"><i class="fa fa-bell"></i></div><strong class="me-auto ms-2">Message</strong><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body" style="color:black;">Record has been successfully Updated..</div></div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'ambulance-about',$data);
	}


}