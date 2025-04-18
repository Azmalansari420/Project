<?php

class Product extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'Product',
						   	'table_name'=>'product',
						   	'upload_path'=>'media/uploads/product/',
						   	'load_path'=>'admin/product/',
						   	'redirect_path'=>'admin_con/product/',
						   	'back_url'=>'product',
						   	'add_url'=>'product',
						   	'edit_url'=>'product',
						   	'delete_url'=>'product',
						   	'view_url'=>'product',
						   	'table_url'=>'admin/product/table',
						   	'status_value'=>'product',
						   	'multiple_delete'=>'admin_con/product/delete_all',
						   	'pagination_url'=>'admin_con/product/get_table_data',
						   	'controller_name'=>'product',
						   	'page_name'=>'product-details.php',
						   	'pagination_limit'=>'10',
						   ); 


   //--check user login or not
	public function __construct()
    {
    	parent::__construct(); 
        chech_admin_login(); 
        check_controller_access(3);
    }



	//insert

	function add()
	{
		check_controller_inner_access(3,2);
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				// $bimage = time().$_FILES['image']['name'];
				$bimage = rand().'.'.explode(".", $_FILES['image']['name'])[1];
				$path = $this->arr_values['upload_path'].$bimage;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}
			else
			{
				$bimage = "";
			}

			$filename = $_FILES['multiple_image_json']['name'];
			$tempname = $_FILES['multiple_image_json']['tmp_name'];
			$allimage = array();
			foreach ($filename as $key => $value) 
			{
			  $imagename = $filename[$key];
			  if(!empty($imagename))
			  {
				  $path = $this->arr_values['upload_path'].$imagename;
				  move_uploaded_file($tempname[$key],$path);
				  $allimage[] = $imagename;
			  }
			}
			if(empty($allimage)) 
			{
			    $multiple_image_json = '';
			} 
			else 
			{
			    $multiple_image_json = json_encode($allimage);
			}
			
			$cat_id = $this->input->post('cat_id');			
			$sub_cat_id = $this->input->post('sub_cat_id');			
			$name = $this->input->post('name');			
			$slug = slug($name);
			$brand_name = $this->input->post('brand_name');			
			$material = $this->input->post('material');			
			$cultivation_type = $this->input->post('cultivation_type');			
			$color = $this->input->post('color');			
			$application = $this->input->post('application');			
			$bussiness_type = $this->input->post('bussiness_type');			
			$amount = $this->input->post('amount');			
			$moq = $this->input->post('moq');			
			$prefered_buyer = $this->input->post('prefered_buyer');			
			$product_details = $this->input->post('product_details');

			$featured_pro = $this->input->post('featured_pro');						
			$hot_pro = $this->input->post('hot_pro');
			$status = $this->input->post('status');			
			$addeddate = date('Y-m-d H:i:s');


			$insertdata = array(
				"image"=>$bimage,
				"multiple_image_json"=>$multiple_image_json,
				"cat_id"=>$cat_id,
				"sub_cat_id"=>$sub_cat_id,
				"name"=>$name,
				"slug"=>slug($name),
				"brand_name"=>$brand_name,
				"material"=>$material,
				"cultivation_type"=>$cultivation_type,
				"color"=>$color,
				"application"=>$application,
				"bussiness_type"=>$bussiness_type,
				"amount"=>$amount,
				"moq"=>$moq,
				"prefered_buyer"=>$prefered_buyer,
				"product_details"=>$product_details,
				"featured_pro"=>$featured_pro,
				"hot_pro"=>$hot_pro,
				"status"=>$status,
				"addeddate"=>$addeddate,
			);

			$this->crud->insert($this->arr_values['table_name'],$insertdata);
			$insert_id = $this->db->insert_id();
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
		check_controller_inner_access(3,1);
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
	  check_controller_inner_access(3,1);
	  $search = $this->input->post('search');
	  $limit = $this->arr_values['pagination_limit'];
	  $offset = $this->input->post('offset');

	  $this->db->like('name', $search);
	  $this->db->or_like('id', $search);
	  $this->db->or_like('brand_name', $search);
	  $this->db->or_like('material', $search);
	  $this->db->or_like('cultivation_type', $search);
	  $this->db->or_like('color', $search);
	  $this->db->or_like('application', $search);
	  $this->db->order_by('id desc');
	  $data['ALLDATA'] = $this->db->get($this->arr_values['table_name'], $limit, $offset)->result();

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
	  	check_controller_inner_access(3,4);
	  	$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete($this->arr_values['table_name']);
		$this->session->set_flashdata('message','Record has been Successfully Delete..');
	  }

	  /*-------delete multiple*/
	  function delete_all()
		{
			check_controller_inner_access(3,4);
			$ids = $this->input->post('id');
		    if (!empty($ids)) 
		    {
		    	$this->db->where_in('id', $ids);
		        $this->db->delete($this->arr_values['table_name']);
		        $this->session->set_flashdata('message','Record has been Successfully Delete..');
		    }
		}


	//----------------edit

	function edit()
	{
		check_controller_inner_access(3,3);		 
		$args=func_get_args();
		if(isset($_POST['submit']))
		{
			date_default_timezone_set('Asia/Kolkata');

			if($_FILES['image']['name']!='')
			{
				$image = rand().'.'.explode(".", $_FILES['image']['name'])[1];
				$path = $this->arr_values['upload_path'].$image;
				move_uploaded_file($_FILES['image']['tmp_name'],$path);
			}
			else
			{
				$image = $_POST['oldimage'];
			}

			$filename = $_FILES['multiple_image_json']['name'];
			$tempname = $_FILES['multiple_image_json']['tmp_name'];
			$oldimage = $this->input->post('oldmultiple_image_json');

			$allimage = array();
			$newimage = array();
			foreach ($filename as $key => $value) {
			  if(!empty($value)) {
			    $imagename = $filename[$key];
			    $path = $this->arr_values['upload_path'].$imagename;
			    move_uploaded_file($tempname[$key],$path);
			    $newimage[] = $imagename;
			  }
			}
			$oldimage = $this->input->post('oldmultiple_image_json');
			if (!is_array($oldimage)) {
			    $oldimage = array();
			}
			$allimage = array_merge($oldimage, $newimage);

			$multiple_image_json = json_encode($allimage);
			
			$cat_id = $this->input->post('cat_id');			
			$sub_cat_id = $this->input->post('sub_cat_id');			
			$name = $this->input->post('name');			
			$slug = slug($name);
			$brand_name = $this->input->post('brand_name');			
			$material = $this->input->post('material');			
			$cultivation_type = $this->input->post('cultivation_type');			
			$color = $this->input->post('color');			
			$application = $this->input->post('application');			
			$bussiness_type = $this->input->post('bussiness_type');			
			$amount = $this->input->post('amount');			
			$moq = $this->input->post('moq');			
			$prefered_buyer = $this->input->post('prefered_buyer');			
			$product_details = $this->input->post('product_details');

			$featured_pro = $this->input->post('featured_pro');						
			$hot_pro = $this->input->post('hot_pro');						
			$status = $this->input->post('status');						
			$modifieddate = date('Y-m-d H:i:s');

			$updatedata = array(
				"image"=>$image,
				"multiple_image_json"=>$multiple_image_json,
				"cat_id"=>$cat_id,
				"sub_cat_id"=>$sub_cat_id,
				"name"=>$name,
				"slug"=>slug($name),
				"brand_name"=>$brand_name,
				"material"=>$material,
				"cultivation_type"=>$cultivation_type,
				"color"=>$color,
				"application"=>$application,
				"bussiness_type"=>$bussiness_type,
				"amount"=>$amount,
				"moq"=>$moq,
				"prefered_buyer"=>$prefered_buyer,
				"product_details"=>$product_details,
				"featured_pro"=>$featured_pro,
				"hot_pro"=>$hot_pro,
				"status"=>$status,
				"modifieddate"=>$modifieddate,
			);

			$this->crud->update($this->arr_values['table_name'],$args[0],$updatedata);
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
		check_controller_inner_access(3,5);		 
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



	public function sub_categ()
	{	
		$cat_id = $this->input->post('cat_id');
		$city = $this->db->get_where('sub_categories',array('cat_id'=>$cat_id,))->result_object();
		$html = '<option disabled selected>Select Sub Categogies</option>';
		foreach ($city as $key => $value) {
			$html .= '
				<option value="'.$value->id.'">'.$value->name.'</option>
			';
		}		
			$data['status'] = "200";
			$data['data'] = $html;		
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