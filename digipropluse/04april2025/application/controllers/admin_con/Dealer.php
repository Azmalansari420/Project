<?php
require_once APPPATH.'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Dealer extends CI_Controller
{

	//-define everything for here
	protected $arr_values = array(
						   	'page_title'=>'dealer',
						   	'table_name'=>'registration',
						   	'upload_path'=>'media/uploads/',
						   	'load_path'=>'admin/dealer/',
						   	'redirect_path'=>'admin_con/dealer/',
						   	'back_url'=>'dealer',
						   	'add_url'=>'dealer',
						   	'edit_url'=>'dealer',
						   	'delete_url'=>'dealer',
						   	'view_url'=>'dealer',
						   	'table_url'=>'admin/dealer/table',
						   	'status_value'=>'dealer',
						   	'multiple_delete'=>'admin_con/dealer/delete_all',
						   	'pagination_url'=>'admin_con/dealer/get_table_data',
						   	'controller_name'=>'dealer',
						   	'page_name'=>'dealer.php',
						   	'pagination_limit'=>'10',
						   ); 


   //--check user login or not
	public function __construct()
    {
    	parent::__construct(); 
        chech_admin_login(); 
        check_controller_access(7);
    }



	//insert

	function add()
	{
		check_controller_inner_access(7,2);
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
					
			$vendor_id = $this->input->post('vendor_id');	
			$username = $this->input->post('username');	
			$mobile = $this->input->post('mobile');	
			$email = $this->input->post('email');	
			$password = $this->input->post('password');	
			$address = $this->input->post('address');	
			$pincode = $this->input->post('pincode');	
			$state_id = $this->input->post('state_id');	
			$city_id = $this->input->post('city_id');	
			$wallet = $this->input->post('wallet');	
			$comission = $this->input->post('comission');

			$addedby = $this->session->userdata('id');	
			$user_id = 'DP'.rand(99999,999999);	
			
			$status = $this->input->post('status');			
			$addeddate = date('Y-m-d H:i:s');

			$insertdata = array(
				"role"=>2,
				"image"=>$bimage,
				"username"=>$username,
				"addedby"=>$addedby,
				"vendor_id"=>$vendor_id,
				"user_id"=>$user_id,
				"mobile"=>$mobile,				
				"email"=>$email,				
				"password"=>$password,				
				"address"=>$address,				
				"pincode"=>$pincode,				
				"state_id"=>$state_id,				
				"city_id"=>$city_id,				
				"wallet"=>$wallet,				
				"comission"=>$comission,				
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
		check_controller_inner_access(7,1);
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
	  check_controller_inner_access(7,1);
	  $search = $this->input->post('search');
	  $limit = $this->arr_values['pagination_limit'];
	  $offset = $this->input->post('offset');

	  $this->db->where('role', 2);
	  $this->db->group_start();
	  $this->db->like('username', $search);
	  $this->db->or_like('email', $search);
	  $this->db->or_like('mobile', $search);
	  $this->db->or_like('password', $search);
	  $this->db->or_like('pincode', $search);
	  $this->db->order_by('id desc');
	  $this->db->group_end();
	  $data['ALLDATA'] = $this->db->get($this->arr_values['table_name'], $limit, $offset)->result();

	  $this->db->where('role', 2);
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
	  	check_controller_inner_access(7,4);
	  	$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete($this->arr_values['table_name']);
		$this->session->set_flashdata('message','Record has been Successfully Delete..');
	  }

	  /*-------delete multiple*/
	  function delete_all()
		{
			check_controller_inner_access(7,4);
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
		check_controller_inner_access(7,3);		 
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

			$vendor_id = $this->input->post('vendor_id');	
			$username = $this->input->post('username');	
			$mobile = $this->input->post('mobile');	
			$email = $this->input->post('email');	
			$password = $this->input->post('password');	
			$address = $this->input->post('address');	
			$pincode = $this->input->post('pincode');	
			$state_id = $this->input->post('state_id');	
			$city_id = $this->input->post('city_id');	
			$wallet = $this->input->post('wallet');
			$comission = $this->input->post('comission');

			

			$status = $this->input->post('status');						
			$modifieddate = date('Y-m-d H:i:s');
			/*upodate dtaa*/
			$updatedata = array(
				"role"=>2,
				"image"=>$image,
				"vendor_id"=>$vendor_id,
				// "user_id"=>$user_id,
				// "addedby"=>$addedby,
				"username"=>$username,
				"mobile"=>$mobile,				
				"email"=>$email,				
				"password"=>$password,				
				"address"=>$address,				
				"pincode"=>$pincode,				
				"state_id"=>$state_id,				
				"city_id"=>$city_id,				
				"wallet"=>$wallet,						
				"comission"=>$comission,						
				"status"=>$status,
				"modifieddate"=>$modifieddate,
			);


			// print_r($updatedata);
			// die;

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
		check_controller_inner_access(7,5);		 
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


	function history()
	{
		check_controller_inner_access(7,5);		 
		$data['page_title'] = $this->arr_values['page_title'];
		$data['upload_path'] = $this->arr_values['upload_path'];
		$data['back_url'] = base_url('admin_con/'.$this->arr_values['back_url'].'/listing');
		$this->load->view($this->arr_values['load_path'].'history',$data);
	}



	public function export_excel()
	{
	    
	    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
	    $sheet = $spreadsheet->getActiveSheet();

	    // Header
	    $sheet->setCellValue('A1', 'Added By');
	    $sheet->setCellValue('B1', 'User ID');
	    $sheet->setCellValue('C1', 'Vendor ID');
	    // $sheet->setCellValue('D1', 'Dealer ID');
	    $sheet->setCellValue('E1', 'Username');
	    $sheet->setCellValue('F1', 'Mobile');
	    $sheet->setCellValue('G1', 'Email');
	    $sheet->setCellValue('H1', 'Password');
	    $sheet->setCellValue('I1', 'Pincode');
	    $sheet->setCellValue('J1', 'State');
	    $sheet->setCellValue('K1', 'City');
	    $sheet->setCellValue('L1', 'Aadhar No');
	    $sheet->setCellValue('M1', 'Pancard No');
	    $sheet->setCellValue('N1', 'Address');
	    $sheet->setCellValue('O1', 'Margin');
	    $sheet->setCellValue('P1', 'Wallet');
	    $sheet->setCellValue('Q1', 'Bank Name');
	    $sheet->setCellValue('R1', 'IFSC');
	    $sheet->setCellValue('S1', 'A/C');
	    $sheet->setCellValue('T1', 'Firm Name');
	    $sheet->setCellValue('U1', 'Lat');
	    $sheet->setCellValue('V1', 'Long');

	    // Fetch data from DB
	    $this->db->where('role', 2);
	    $this->db->order_by('id desc');
	    $data = $this->db->get($this->arr_values['table_name'])->result_array();

	    // Fill rows
	    $row = 2;
	    foreach ($data as $item) {
	        $sheet->setCellValue('A' . $row, admingetname($item['addedby']));
	        $sheet->setCellValue('B' . $row, $item['user_id']);
	        $sheet->setCellValue('C' . $row, getname($item['vendor_id']));
	        // $sheet->setCellValue('D' . $row, getname($item['dealer_id']));
	        $sheet->setCellValue('E' . $row, $item['username']);
	        $sheet->setCellValue('F' . $row, $item['mobile']);
	        $sheet->setCellValue('G' . $row, $item['email']);
	        $sheet->setCellValue('H' . $row, $item['password']);
	        $sheet->setCellValue('I' . $row, $item['pincode']);
	        $sheet->setCellValue('J' . $row, $item['state_id']);
	        $sheet->setCellValue('K' . $row, $item['city_id']);
	        $sheet->setCellValue('L' . $row, $item['aadharno']);
	        $sheet->setCellValue('M' . $row, $item['pancardno']);
	        $sheet->setCellValue('N' . $row, $item['address']);
	        $sheet->setCellValue('O' . $row, $item['comission']);
	        $sheet->setCellValue('P' . $row, $item['wallet']);
	        $sheet->setCellValue('Q' . $row, $item['bankname']);
	        $sheet->setCellValue('R' . $row, $item['bankifcs']);
	        $sheet->setCellValue('S' . $row, $item['bankac']);
	        $sheet->setCellValue('T' . $row, $item['firmname']);
	        $sheet->setCellValue('U' . $row, $item['lat_no']);
	        $sheet->setCellValue('V' . $row, $item['long_no']);
	        $row++;
	    }

	    // Download file
	    $filename = 'exported_data_'.date('Ymd_His').'.xlsx';
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header("Content-Disposition: attachment; filename=\"$filename\"");
	    header('Cache-Control: max-age=0');

	    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
	    $writer->save('php://output');
	    exit;
	}


	// public function statusupdate()
	// {	
	// 	//echo "string";
	// 	$data['status'] = $_GET['l_status'];
	// 	$this->crud->update($this->arr_values['table_name'],$_GET['ld'],$data);
	// 	redirect($this->arr_values['redirect_path'].'listing');	
	// }



}