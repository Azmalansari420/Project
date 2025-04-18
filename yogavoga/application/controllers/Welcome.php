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
		$data['EDITDATA'] = $slugdata = $this->crud->selectDataByMultipleWhere('blog',array('slug'=>$id,));
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

	public function courses()
	{
		$this->load->view('courses');
	}

	public function error()
	{
		$this->load->view('error');
	}

	public function heal_body()
	{
		$this->load->view('heal-body');
	}

	public function stress_relif()
	{
		$this->load->view('stress-relif');
	}


	public function yoga_corporate()
	{
		$this->load->view('yoga-corporate');
	}

	public function yoga_home()
	{
		$this->load->view('yoga-home');
	}

	public function yoga_type()
	{
		$this->load->view('yoga-type');
	}

	public function yoga_with_anit()
	{
		$this->load->view('yoga-with-anit');
	}

	public function ytype_details()
	{
		$this->load->view('ytype-details');
	}


	public function product()
	{
		$this->load->view('product');
	}




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
			 <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
			    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"font-family: sans-serif;">
			        <tr>
			            <td>
			                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
			                    align="center" cellpadding="0" cellspacing="0">
			                    <tr>
			                        <td style="height:80px;">&nbsp;</td>
			                    </tr>
			                   
			                    <!-- Email Content -->
			                    <tr>
			                        <td>
			                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
			                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
			                                <tr>
			                                    <td style="height:40px;">&nbsp;</td>
			                                </tr>
			                                <!-- Title -->
			                                <tr>
			                                    <td style="padding:0 15px; text-align:center;">
			                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:sans-serif;">Enquiry Form</h1>
			                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
			                                        width:100px;"></span>
			                                    </td>
			                                </tr>
			                                <!-- Details Table -->
			                                <tr>
			                                    <td>
			                                        <table cellpadding="0" cellspacing="0"
			                                            style="width: 100%; border: 1px solid #ededed">
			                                            <tbody>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Name:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["name"].'</td>
			                                                </tr>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Email:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["email"].'</td>
			                                                </tr>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Mobile:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["mobile"].'</td>
			                                                </tr>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                       Subject:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["subject"].'</td>
			                                                </tr>
			                                                                                               
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Message:</td>
			                                                    <td style="padding: 10px; color: #455056;">'.$_POST["message"].'</td>
			                                                </tr>
			                                            </tbody>
			                                        </table>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td style="height:40px;">&nbsp;</td>
			                                </tr>
			                            </table>
			                        </td>
			                    </tr>
			                </table>
			            </td>
			        </tr>
			    </table>
			</body>
			 ';


		  $this->webmail->sendmail($message);

			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully saved.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function reviewform()
	{
		if(isset($_POST['submit']))
		{
			$data2['name'] = $this->input->post('name');
			$data2['email'] = $this->input->post('email');
			$data2['mobile'] = $this->input->post('mobile');
			$data2['message'] = $this->input->post('message');

			$this->crud->insert('review',$data2);
			$message = '
			 <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
			    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"font-family: sans-serif;">
			        <tr>
			            <td>
			                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
			                    align="center" cellpadding="0" cellspacing="0">
			                    <tr>
			                        <td style="height:80px;">&nbsp;</td>
			                    </tr>
			                   
			                    <!-- Email Content -->
			                    <tr>
			                        <td>
			                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
			                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
			                                <tr>
			                                    <td style="height:40px;">&nbsp;</td>
			                                </tr>
			                                <!-- Title -->
			                                <tr>
			                                    <td style="padding:0 15px; text-align:center;">
			                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:sans-serif;">Review Form</h1>
			                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
			                                        width:100px;"></span>
			                                    </td>
			                                </tr>
			                                <!-- Details Table -->
			                                <tr>
			                                    <td>
			                                        <table cellpadding="0" cellspacing="0"
			                                            style="width: 100%; border: 1px solid #ededed">
			                                            <tbody>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Name:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["name"].'</td>
			                                                </tr>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Email:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["email"].'</td>
			                                                </tr>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Mobile:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["mobile"].'</td>
			                                                </tr>			                                                                                               
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Message:</td>
			                                                    <td style="padding: 10px; color: #455056;">'.$_POST["message"].'</td>
			                                                </tr>
			                                            </tbody>
			                                        </table>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td style="height:40px;">&nbsp;</td>
			                                </tr>
			                            </table>
			                        </td>
			                    </tr>
			                </table>
			            </td>
			        </tr>
			    </table>
			</body>
			 ';


		    $this->webmail->sendmail($message);

			$this->session->set_flashdata('message','<div class="alert alert-success">Form has been successfully saved.</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function joinastainning()
	{
		if(isset($_POST['submit']))
		{
			if($_FILES['aadhar_card']['name']!='')
			{
				$aadhar_card = time().'aadhar'.$_FILES['aadhar_card']['name'];
				$path = 'media/uploads/trainning_partner/'.$aadhar_card;
				move_uploaded_file($_FILES['aadhar_card']['tmp_name'],$path);
			}
			else
			{
				$aadhar_card = "";
			}
			$data2['aadhar_card'] = $aadhar_card;

			if($_FILES['yoga_certificate']['name']!='')
			{
				$yoga_certificate = time().'yoga'.$_FILES['yoga_certificate']['name'];
				$path = 'media/uploads/trainning_partner/'.$yoga_certificate;
				move_uploaded_file($_FILES['yoga_certificate']['tmp_name'],$path);
			}
			else
			{
				$yoga_certificate = "";
			}
			$data2['yoga_certificate'] = $yoga_certificate;

			$data2['name'] = $this->input->post('name');			
			$data2['mobile'] = $this->input->post('mobile');			
			$data2['emergency_details'] = $this->input->post('emergency_details');			
			// print_r($data2);
			// die;
			$this->crud->insert('trainning_partner',$data2);

			$this->crud->insert('trainning_partner',$data2);

			$message = '
			 <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
			    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"font-family: sans-serif;">
			        <tr>
			            <td>
			                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
			                    align="center" cellpadding="0" cellspacing="0">
			                    <tr>
			                        <td style="height:80px;">&nbsp;</td>
			                    </tr>
			                   
			                    <!-- Email Content -->
			                    <tr>
			                        <td>
			                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
			                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
			                                <tr>
			                                    <td style="height:40px;">&nbsp;</td>
			                                </tr>
			                                <!-- Title -->
			                                <tr>
			                                    <td style="padding:0 15px; text-align:center;">
			                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:sans-serif;"> Joining for new Trainer 
                                                     Form</h1>
			                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
			                                        width:100px;"></span>
			                                    </td>
			                                </tr>
			                                <!-- Details Table -->
			                                <tr>
			                                    <td>
			                                        <table cellpadding="0" cellspacing="0"
			                                            style="width: 100%; border: 1px solid #ededed">
			                                            <tbody>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Name:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["name"].'</td>
			                                                </tr>
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Mobile:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["mobile"].'</td>
			                                                </tr>	

			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Email:</td>
			                                                    <td
			                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
			                                                        '.$_POST["emergency_details"].'</td>
			                                                </tr>		                                                                                               
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Yoga Certificate:</td>
			                                                   
			                                                    <td style="padding: 10px; color: #455056;"><img src="'.base_url().'media/uploads/trainning_partner/'.$yoga_certificate.'"></td>

			                                                </tr>		                                                                                               
			                                                <tr>
			                                                    <td
			                                                        style="padding: 10px; border-right: 1px solid #ededed; width: 35%;font-weight:500; color:rgba(0,0,0,.64)">
			                                                        Aadhar Certificate:</td>
			                                                    <td style="padding: 10px; color: #455056;"><img src="'.base_url().'media/uploads/trainning_partner/'.$aadhar_card.'"></td>
			                                                </tr>
			                                            </tbody>
			                                        </table>
			                                    </td>
			                                </tr>
			                                <tr>
			                                    <td style="height:40px;">&nbsp;</td>
			                                </tr>
			                            </table>
			                        </td>
			                    </tr>
			                </table>
			            </td>
			        </tr>
			    </table>
			</body>
			 ';

		    $this->webmail->sendmail($message);
			redirect($_SERVER['HTTP_REFERER']);
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




	











}
