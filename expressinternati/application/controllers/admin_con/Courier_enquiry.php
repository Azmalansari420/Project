<?php

class Courier_enquiry extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Enquiry',
						   	'table_name'=>'courier_enquiry',
						   	'upload_path'=>'media/uploads/courier_enquiry/',
						   	'load_path'=>'admin/courier_enquiry/',
						   	'redirect_path'=>'admin_con/courier_enquiry/',
						   	'back_url'=>'courier_enquiry',
						   	'edit_url'=>'courier_enquiry',
						   	'delete_url'=>'courier_enquiry',
						   	'view_url'=>'courier_enquiry',
						   	'status_value'=>'courier_enquiry',
						   	'multiple_delete'=>'admin_con/courier_enquiry/delete_all',
						   );
	

	///------author for login--
	 public function __construct()
    {
        parent::__construct(); 
        chech_admin_login(); 
    }

	
	//----listing list dekhney ke lia 

	function listing()
	{
		 
		$this->db->order_by("id desc");
		$data['ALLDATA'] = $this->crud->get_data($this->arr_values['table_name']);
		$data['page_title'] = $this->arr_values['page_title'];
		$data['edit_url'] = base_url('admin_con/'.$this->arr_values['edit_url'].'/edit/');
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['view_url'] = base_url('admin_con/'.$this->arr_values['view_url'].'/view/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
		$data['multiple_delete'] = base_url($this->arr_values['multiple_delete']);
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}


	//--delete ke lia

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

	  /*-------delete multiple*/
	  function delete_all()
		{
			$ids = $this->input->post('id');
		    if (!empty($ids)) {
		        $this->db->where_in('id', $ids);
		        $this->db->delete($this->arr_values['table_name']);
		    }
		}


	function view()
	{
		 
		$args=func_get_args();
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['EDITDATA'] = $this->crud->fetchdatabyid($args[0],$this->arr_values['table_name']);
		$this->load->view($this->arr_values['load_path'].'view',$data);
	}




}