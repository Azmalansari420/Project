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


	public function facalty_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('facalty',array('slug'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('facalty-details',$data);
		}
		else
		{
			$this->load->view('error');
		}
	}

	public function diesese_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('diesese',array('slug'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('diesese-details',$data);
		}
		else
		{
			$this->load->view('error');
		}
	}


	public function special_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('special',array('slug'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('special-details',$data);
		}
		else
		{
			$this->load->view('error');
		}
	}


	public function blog_details($id)
	{
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('blog',array('slug'=>$id,));
		if(!empty($slugdata))
		{
			$this->load->view('blog-details',$data);
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
			redirect('thankyou');
			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully Submit.</div>');
		}
	}




	/*----contact form--------*/
	public function bboking()
	{
		if(isset($_POST['submit']))
		{
			$data2['name'] = $this->input->post('name');
			$data2['email'] = $this->input->post('email');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['age'] = $this->input->post('age');
			$data2['bookingservice'] = $this->input->post('bookingservice');
			$data2['dates'] = $this->input->post('dates');
			$data2['times'] = $this->input->post('times');
			$data2['message'] = $this->input->post('message');

			$this->crud->insert('booking',$data2);
			redirect('thankyou');
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
