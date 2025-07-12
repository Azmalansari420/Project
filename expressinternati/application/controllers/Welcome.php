<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}


	public function service_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('services',array('slug'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('service-details',$data);
		}
		else
		{
			$this->load->view('error');
		}
	}




	public function country_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('country',array('slug'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('country-details',$data);
		}
		else
		{
			$this->load->view('error');
		}
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
			$message = '
	        <h3 align="center"> Form Details</h3>
	        <table border="1" width="100%" cellpadding="5" cellspacing="5">
           <tr>
             <td width="30%"> Name</td>
             <td width="70%">'.$_POST["name"].'</td>
           </tr>
           <tr>
             <td width="30%">Phone</td>
             <td width="70%">'.$_POST["mobile"].'</td>
           </tr>
           <tr>
             <td width="30%">Email</td>
             <td width="70%">'.$_POST["email"].'</td>
           </tr>
            <tr>
             <td width="30%">Subject</td>
             <td width="70%">'.$_POST["subject"].'</td>
           </tr>
            <tr>
             <td width="30%">Message</td>
             <td width="70%">'.$_POST["message"].'</td>
           </tr>
          
         </table>
	      ';
	      $this->webmail->sendmail($message);

			redirect('thankyou');
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
		}
	}



	/*----contact form--------*/
	public function courier_enquiry()
	{
		if(isset($_POST['submit']))
		{
			$get_country = $this->input->post('country');
			$data2['p_type'] = $this->input->post('p_type');
			$data2['weight'] = $this->input->post('weight');
			$data2['mobile'] = $this->input->post('mobile');

			$getcountry = $this->crud->selectDataByMultipleWhere('country',array('id'=>$get_country));
			if(!empty($getcountry))
				$slug = base_url('country-details/'.$getcountry[0]->slug);
			  $data2['country'] = $getcountry[0]->name;

			$this->crud->insert('courier_enquiry',$data2);

			 $message = '
	        <h3 align="center"> Form Details</h3>
	        <table border="1" width="100%" cellpadding="5" cellspacing="5">
	          <tr>
	            <td width="30%"> Country</td>
	            <td width="70%">'.$_POST["country"].'</td>
	          </tr>
	          <tr>
	            <td width="30%">Package Type</td>
	            <td width="70%">'.$_POST["p_type"].'</td>
	          </tr>
	          <tr>
	            <td width="30%">Weight</td>
	            <td width="70%">'.$_POST["weight"].'</td>
	          </tr>
	           <tr>
	            <td width="30%">Mobile</td>
	            <td width="70%">'.$_POST["mobile"].'</td>
	          </tr>	          
	        </table>
	      ';
	      $this->webmail->sendmail($message);

			redirect($slug);
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
		}
	}



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
	// 		$data2['name'] = $this->input->post('name');
	// 		$data2['email'] = $this->input->post('email');
	// 		$data2['mobile'] = $this->input->post('mobile');
	// 		$data2['subject'] = $this->input->post('subject');
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

	// 	  $this->webmail->sendmail($message);

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
