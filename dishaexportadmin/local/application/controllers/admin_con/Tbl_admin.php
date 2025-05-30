<?php

class Tbl_admin extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Role Wise User',
						   	'table_name'=>'tbl_admin',
						   	'upload_path'=>'media/uploads/tbl_admin/',
						   	'load_path'=>'admin/tbl_admin/',
						   	'redirect_path'=>'admin_con/tbl_admin/',
						   	'back_url'=>'tbl_admin',
						   	'add_url'=>'tbl_admin',
						   	'edit_url'=>'tbl_admin',
						   	'delete_url'=>'tbl_admin',
						   	'view_url'=>'tbl_admin',
						   	'table_url'=>'admin/tbl_admin/table',
						   	'status_value'=>'tbl_admin',
						   	'multiple_delete'=>'admin_con/tbl_admin/delete_all',
						   	'pagination_url'=>'admin_con/tbl_admin/get_table_data',
						   	'controller_name'=>'tbl_admin',
						   	'page_name'=>'tbl_admin.php',
						   	'pagination_limit'=>'10',
						   ); 


   //--check user login or not
	 public function __construct()
    {
        parent::__construct(); 
        chech_admin_login(); 
        check_controller_access(1);
    }



	//insert

	function add()
	{
		check_controller_inner_access(1,2);
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$type = 2;		
			$role = $role = $this->input->post('role');
			$getrole_access = $this->crud->selectDataByMultipleWhere('role',array('id'=>$role));
			$access = $getrole_access[0]->role_access;
			$username = $this->input->post('username');			
			$password = $this->input->post('password');	
			$status = $this->input->post('status');			
			$addeddate = date('Y-m-d H:i:s');

			$insertdata = array(
				"type"=>$type,
				"role"=>$role,
				"access"=>$access,
				"username"=>$username,
				"password"=>$password,
				"status"=>$status,
				"addeddate"=>$addeddate,
			);

			$this->crud->insert($this->arr_values['table_name'],$insertdata);
			$this->session->set_flashdata('message','Record has been Successfully Saved..');
			redirect($this->arr_values['redirect_path'].'listing');	
		}
		$data['page_title'] = $this->arr_values['page_title'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$this->load->view($this->arr_values['load_path'].'add',$data);
	}


	//----list dekhney ke lia 

	function listing()
	{		
		check_controller_inner_access(1,1);
		$data['page_title'] = $this->arr_values['page_title'];
		$data['add_url'] = base_url('admin_con/'.$this->arr_values['add_url'].'/add');
		
		$data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');
		$data['status_value'] = base_url('admin_con/'.$this->arr_values['status_value'].'/new_status');
		$data['pagination_url'] = $this->arr_values['pagination_url'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['multiple_delete'] = base_url($this->arr_values['multiple_delete']);
		$this->load->view($this->arr_values['load_path'].'list',$data);
	}


	public function get_table_data() 
	{
		check_controller_inner_access(1,1);
	  $search = $this->input->post('search');
	  $limit = $this->arr_values['pagination_limit'];
	  $offset = $this->input->post('offset');

	  $this->db->like('username', $search);
	  $this->db->order_by('id desc');
	  $this->db->where('type',2);
	  $data['ALLDATA'] = $this->db->get($this->arr_values['table_name'], $limit, $offset)->result();

	  $this->db->where('type',2);
	  $total_rows = $this->db->count_all_results($this->arr_values['table_name']);
	  $pagination_links = '';
	  $current_page = ($offset / $limit) + 1;

	  if ($total_rows > $limit) {
	    for ($i = 0; $i < ceil($total_rows / $limit); $i++) 
	    {
			  $pagination_links .= '<a href="#" class="pagination-link btn btn-primary btn-sm ' . ($i == $current_page - 1 ? 'active-page' : '') . '" style="margin: 5px 3px; border-radius: 25%; font-weight: bold;" data-offset="' . ($i * $limit) . '">' . ($i + 1) . '</a>';
			}
	  }

	  if (!empty($pagination_links)) {
	    $data['pagination_links'] = $pagination_links;
	  } else {
	    $data['pagination_links'] = '';
	  }

	  $total_pages = ceil($total_rows / $limit);

	  $data['upload_path'] = $this->arr_values['upload_path'];
	  $data['view_url'] = base_url('admin_con/'.$this->arr_values['view_url'].'/view/');
	  $data['edit_url'] = base_url('admin_con/'.$this->arr_values['edit_url'].'/edit/');
	  $data['delete_url'] = base_url('admin_con/'.$this->arr_values['delete_url'].'/delete/');

	  $definevariable = array(
	  	'ALLDATA' => $data['ALLDATA'],
	  	'upload_path'=>$data['upload_path'],
	  	'view_url'=>$data['view_url'],
	  	'edit_url'=>$data['edit_url'],
	  	'delete_url'=>$data['delete_url'],
	  	'limit'=>$limit,
	  	'total_rows'=>$total_rows,
	  	'offset'=>$offset,
	  	'total_pages'=>$total_pages,
	  );

	  $html = $this->load->view($this->arr_values['table_url'], $definevariable, true);
	  echo json_encode(array('html' => $html, 'pagination_links' => $data['pagination_links'],'limit'=>$limit));
}




	//------------delete 

	public function delete()
	  {
	  	check_controller_inner_access(1,4);
	  	$id = $this->input->post('id');
		  $this->db->where('id', $id);
		  $this->db->delete($this->arr_values['table_name']);
		  $this->session->set_flashdata('message','Record has been Successfully Delete..');
	  }

	  /*-------delete multiple*/
	  function delete_all()
		{
			check_controller_inner_access(1,4);
			$ids = $this->input->post('id');
		    if (!empty($ids)) {
		        $this->db->where_in('id', $ids);
		        $this->db->delete($this->arr_values['table_name']);
		        $this->session->set_flashdata('message','Record has been Successfully Delete..');
		    }
		}


	//----------------edit

	function edit()
	{
		check_controller_inner_access(1,3);
		$args=func_get_args();

		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			$type = 2;		
			$role = $role = $this->input->post('role');
			$getrole_access = $this->crud->selectDataByMultipleWhere('role',array('id'=>$role));
			$access = $getrole_access[0]->role_access;
			$username = $this->input->post('username');			
			$password = $this->input->post('password');
			$status = $this->input->post('status');						
			$modifieddate = date('Y-m-d H:i:s');


			$updatedata = array(
				"type"=>$type,
				"role"=>$role,
				"access"=>$access,
				"username"=>$username,
				"password"=>$password,
				"status"=>$status,
				"modifieddate"=>$modifieddate,
			);

			$this->crud->update($this->arr_values['table_name'],$args[0],$updatedata);
			$this->session->set_flashdata('message','Record has been successfully Updated.');
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
		check_controller_inner_access(1,5);
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



	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}