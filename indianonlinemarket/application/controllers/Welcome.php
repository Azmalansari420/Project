<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}


	public function project_details($id)
	{
		// $data['EDITDATA'] = 
		$this->load->view('project-details',$id);
	}


	public function checkout()
	{
		$this->session->set_userdata(array("redirect_url"=>base_url('checkout')));
		// $user_id = temp_session_id();
		// $this->db->delete("orders",array("user_id"=>$user_id,"status"=>0,));
		// $this->db->delete("finalorder",array("user_id"=>$user_id,"status"=>0,));


		$this->load->view('checkout');
	}



	public function shop($id='')
	{
		if(!empty($id))
		{
			$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('categories',array('slug'=>$id,));			
			if(!empty($slugdata))
				$slugdata = $slugdata[0];
				$sub_cate_id = $slugdata->id;
				$where = array("cat_id"=>$sub_cate_id,"status"=>1,);
		}
		else
		{
			$where = array("status"=>1,);
		}
		$this->db->order_by('id desc');
		$productlist = $this->crud->selectDataByMultipleWhere('product',$where);
		$data['productlist'] = $productlist; 
		$this->load->view('shop',$data);
	}

	public function serch()
	{
		$search = $this->input->get("search");
		$this->db->where('status',1);
		$this->db->from('product');
		$this->db->like('name', $search);
		$this->db->order_by('id desc');
		$query = $this->db->get()->result_object();
		$data['productlist'] = $query;
		// print_r($query);
		$this->load->view('shop',$data);

	}


	public function product_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('product',array('slug'=>$id,));
		$slugid = $slugdata[0]->id;
		$this->load->view('product-details',$data);
	}





	/*---------for all pages-----*/
	public function all($page)
	{
		$data = array();		
		$check_page = FCPATH.'application/views/'.$page.'.php';
		if(file_exists($check_page))
		{
			$this->load->view($page,$data);
		}
		else
		{
			$this->load->view('error');
		}		
	}



	

	/*----contact form--------*/
	public function enquiry_form()
	{
		if(isset($_POST['submit']))
		{
			$data2['name'] = $this->input->post('name');
			$data2['email'] = $this->input->post('email');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['subject'] = $this->input->post('subject');
			$data2['message'] = $this->input->post('message');

			$this->crud->insert('contact',$data2);
			redirect('thankyou');
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
		}
	}




	/*----contact form--------*/
	public function product_review()
	{
		if(isset($_POST['submit']))
		{
			$data2['product_id'] = $this->input->post('product_id');
			$data2['product_name'] = $this->input->post('product_name');
			$data2['name'] = $this->input->post('name');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['rating'] = $this->input->post('rating');
			$data2['message'] = $this->input->post('message');
			$data2['addeddate'] = date('Y-m-d H:i:s');
			$data2['status'] = 0;

			$this->crud->insert('product_review',$data2);
			redirect('thankyou-review');
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
		}
	}






	// public function contact()
	// {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		$data2['name'] = $this->input->post('name');
	// 		$data2['email'] = $this->input->post('email');
	// 		$data2['mobile'] = $this->input->post('mobile');
	// 		$data2['subject'] = $this->input->post('subject');
	// 		$data2['regarding'] = $this->input->post('regarding');
	// 		$data2['message'] = $this->input->post('message');

	// 		$this->crud->insert('contact',$data2);

	// 		$message = '
	// 		 <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
	// 		    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"font-family: sans-serif;">
	// 		        <tr>
	// 		            <td>
	// 		                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
	// 		                    align="center" cellpadding="0" cellspacing="0">
	// 		                    <tr>
	// 		                        <td style="height:80px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <!-- Logo -->
	// 		                    <tr>
	// 		                        <td style="text-align:center;">
	// 		                          <a href="https://rakeshmandal.com" title="logo" target="_blank">
	// 		                            <img width="60" src="http://smartacademy.life/media/uploads/site_setting/hjh.png" title="logo" alt="logo">
	// 		                          </a>
	// 		                        </td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="height:20px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <!-- Email Content -->
	// 		                    <tr>
	// 		                        <td>
	// 		                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
	// 		                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
	// 		                                <tr>
	// 		                                    <td style="height:40px;">&nbsp;</td>
	// 		                                </tr>
	// 		                                <!-- Title -->
	// 		                                <tr>
	// 		                                    <td style="padding:0 15px; text-align:center;">
	// 		                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:sans-serif;">Join us as a Trainee Form</h1>
	// 		                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
	// 		                                        width:100px;"></span>
	// 		                                    </td>
	// 		                                </tr>
	// 		                                <!-- Details Table -->
	// 		                                <tr>
	// 		                                    <td>
	// 		                                        <table cellpadding="0" cellspacing="0"
	// 		                                            style="width: 100%; border: 1px solid #ededed">
	// 		                                            <tbody>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Name:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["name"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Email:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["email"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Mobile:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["mobile"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Regarding:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["regarding"].'</td>
	// 		                                                </tr>
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                       Subject:</td>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
	// 		                                                        '.$_POST["subject"].'</td>
	// 		                                                </tr>
			                                                                                               
	// 		                                                <tr>
	// 		                                                    <td
	// 		                                                        style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
	// 		                                                        Message:</td>
	// 		                                                    <td style="padding: 10px; color: #455056;">'.$_POST["message"].'</td>
	// 		                                                </tr>
	// 		                                            </tbody>
	// 		                                        </table>
	// 		                                    </td>
	// 		                                </tr>
	// 		                                <tr>
	// 		                                    <td style="height:40px;">&nbsp;</td>
	// 		                                </tr>
	// 		                            </table>
	// 		                        </td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="height:20px;">&nbsp;</td>
	// 		                    </tr>
	// 		                    <tr>
	// 		                        <td style="text-align:center;">
	// 		                                <p style="font-size:14px; color:#455056bd; line-height:18px; margin:0 0 0;">&copy; <strong>http://smartacademy.life/</strong></p>
	// 		                        </td>
	// 		                    </tr>
	// 		                </table>
	// 		            </td>
	// 		        </tr>
	// 		    </table>
	// 		</body>
	// 		 ';


	// 	  $this->mail->sendmail($message);

	// 	  $this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');

	// 	}
	// 	$this->load->view('contact');
	// }




	// public function career_form()
	// {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		if($_FILES['image']['name']!='')
	// 		{
	// 			$bimage = $_FILES['image']['name'];
	// 			$path = 'media/uploads/career/'.$bimage;
	// 			move_uploaded_file($_FILES['image']['tmp_name'],$path);
	// 		}
	// 		else
	// 		{
	// 			$bimage = "";
	// 		}
	// 		$data['image'] = $bimage;
	// 		$data['name'] = $this->input->post('name');			
	// 		$data['email'] = $this->input->post('email');			
	// 		$data['mobile'] = $this->input->post('mobile');			
	// 		$data['job_profile'] = $this->input->post('job_profile');			
	// 		$data['message'] = $this->input->post('message');

	// 		$this->crud->insert('career',$data);
	// 		redirect($_SERVER['HTTP_REFERER']);
	// 	}

	// }











}
