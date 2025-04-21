<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}


	public function about()
	{
		$this->load->view('about');
	}


	public function blog_details($id)
	{
		$args = func_get_args(); 

		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('blog',array('slug'=>$id));

		$slugid = $slugdata[0]->id;

		$this->load->view('blog-details',$data);
	}

	public function blog()
	{
		$this->load->view('blog');
	}

	public function contact()
	{

		$this->load->view('contact');
	}

	public function our_price()
	{
		$this->load->view('our-price');
	}

	public function service()
	{
		$this->load->view('service');
	}


	public function term_condition()
	{
		$this->load->view('term-condition');
	}


	public function privecy_policie()
	{
		$this->load->view('privecy-policie');
	}
	




	public function enquiry()
	{
		if(isset($_POST['submit']))
		{

			$data2['name'] = $this->input->post('name');
			$data2['email'] = $this->input->post('email');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['address'] = $this->input->post('address');
			$data2['subject'] = $this->input->post('subject');
			$data2['message'] = $this->input->post('message');

			$this->crud->insert('contact',$data2);

			$message = '
		    <h3 align="center">Contact Mail</h3>
		    <table border="1" width="100%" cellpadding="5" cellspacing="5">
		      <tr>
		        <td width="30%"> Name</td>
		        <td width="70%">'.$_POST["name"].'</td>
		      </tr>
		      <tr>
		        <td width="30%">Email Id</td>
		        <td width="70%">'.$_POST["email"].'</td>
		      </tr>
		      <tr>
		        <td width="30%">Mobile</td>
		        <td width="70%">'.$_POST["mobile"].'</td>
		      </tr>
		      <tr>
		        <td width="30%">Address</td>
		        <td width="70%">'.$_POST["address"].'</td>
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
		  $this->mail->sendmail($message);
		  

			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully saved.</div>');
		}
	}





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

	// 		redirect('career');	
	// 	}

	// }


	// public function contact_form()
	// {
	// 	if(isset($_POST['submit']))
	// 	{

	// 		$data2['name'] = $this->input->post('name');
	// 		$data2['email'] = $this->input->post('email');
	// 		$data2['subject'] = $this->input->post('subject');
	// 		$data2['message'] = $this->input->post('message');

	// 		$this->crud->insert('contact',$data2);

	// 		redirect('contact');	


	// 	}
	// }












}
