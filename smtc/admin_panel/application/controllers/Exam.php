<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller
{
     function __construct(){

	   parent::__construct();
		$admin_id = $this->session->userdata('adminid');
		if(empty($admin_id))
		{
			redirect('admin');
		}
	    $this->load->library('upload');
		$this->load->helper('string');
		$this->load->library('image_lib');
		$this->load->library('form_validation');

	}

	public function listing(){

		$data['RESULT'] = $this->exam_model->get_all_exam();
		$this->load->view('admin/exam/listing', $data);
	}

	public function add_new()
	{
		if (isset($_POST['submitform']))
			{
			$this->form_validation->set_rules('cat_id', 'course', 'trim|required');
			$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('time', 'time', 'trim|required');
			$this->form_validation->set_rules('url_slug', 'Url Slug', 'trim|required|is_unique[tbl_exams.url_slug]');

			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)

				{

				$postdata = $this->input->post();
				unset($postdata['submitform']);
				$postdata['create_date'] = date('Y-m-d H:i:s');
			
				$this->exam_model->save_exam($postdata);
				$exam_id = $this->db->insert_id();
			
				
				$updatedata['examid'] = "examid".$exam_id ;
				$this->exam_model->update_exam_by_id($exam_id , $updatedata);
				
				$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully saved.</div>');
				redirect('exam/listing');
				}
			  $msg =  "<div class='alert alert-success'><font color='red'>" . validation_errors() . "</font>.</div>";
			  $this->session->set_flashdata('msg', $msg);

			}
       
			$data['course'] = $this->course_model->get_all_course();
	  
			$this->load->view('admin/exam/add', $data);

		}



	public function edit(){


		$args = func_get_args();
		$data['RESULT'] = $this->exam_model->get_exam_by_id($args[0]);
		if (isset($_POST['submitform']))
			{
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_rules('time', 'time', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
				{
					
					unset($_FILES['image']['name']);
					$postdata = $this->input->post();
					unset($postdata['submitform']);
					$this->exam_model->update_exam_by_id($args[0], $postdata);
					$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully updated.</div>');

    				redirect('exam/listing');
				}
			}

		$data['course'] = $this->course_model->get_all_course();	
		$this->load->view('admin/exam/edit', $data);

	}

	public function addExamQues(){


		$args = func_get_args();
		$data['RESULT'] = $this->exam_model->get_exam_by_id($args[0]);
		$data['exam'] = $this->exam_model->get_question_by_exam_id($args[0]);
		$data['allexam'] = $this->exam_model->get_all_active_exam();
		$this->load->view('admin/exam/addExamQues', $data);

	}

	public function addExamQueProcess()
	{
		
			$this->form_validation->set_rules('exam_id', 'exam', 'trim|required');
			$this->form_validation->set_rules('marks', 'Title', 'trim|required');
			
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)

			{

			$postdata = $this->input->post();
			unset($postdata['submitform']);
			$this->exam_model->save_exam_Question($postdata);
			$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully saved.</div>');
			redirect('exam/questionlisting/'.$postdata['exam_id']);
		
			}
			 
			$msg =  "<div class='alert alert-success'><font color='red'>" . validation_errors() . "</font>.</div>";
			  $this->session->set_flashdata('msg', $msg);
	  
			redirect('exam/addExamQues/'.$postdata['exam_id']);

		}

	public function questionlisting($value='')
	{

		$args = func_get_args();
		$data['exam'] = $this->exam_model->get_exam_by_id($args[0]);
		$data['RESULT'] = $this->exam_model->get_question_by_exam_id($args[0]);

		$this->load->view('admin/exam/questionlisting', $data);

	}

	public function editExamQuestion($value='')
	{
		$args = func_get_args();
		$data['exam'] = $this->exam_model->get_exam_by_id($args[0]);
		$data['RESULT'] = $this->exam_model->get_question_by_id($args[1]);
		$data['allexam'] = $this->exam_model->get_question_by_exam_id($args[0]);

		$this->load->view('admin/exam/editExamQues', $data);
	}

	public function editExamQueProcess($value='')
	{
		   
			$this->form_validation->set_rules('marks', 'Title', 'trim|required');
			
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)

			{

			$postdata = $this->input->post();
			$exam_id = $postdata['exam_id'];
			$ques_id = $postdata['ques_id'];
			unset($postdata['submitform']);
			unset($postdata['exam_id']);
			unset($postdata['ques_id']);
		
			$this->exam_model->update_question_by_id($ques_id, $postdata);
			$this->session->set_flashdata('msg', '<div class="alert alert-success">Record has been successfully edit.</div>');
			redirect('exam/questionlisting/'.$exam_id);
		
			}
			 
			$msg =  "<div class='alert alert-success'><font color='red'>" . validation_errors() . "</font>.</div>";
			  $this->session->set_flashdata('msg', $msg);
	  
			redirect('exam/editExamQuestion/'.$exam_id.'/'.$ques_id);
	}

	public function video_delete(){


        $id = $_POST['id'];

        $data = $this->exam_model->get_exam_by_id($id);
		delete_file('uploads/exam/',$data->video);

		$postdata['video'] = '';

		$this->exam_model->update_exam_by_id($id, $postdata);
		$this->session->set_flashdata('msg', '<div class="alert alert-success">Video has been successfully deleted.</div>');

		echo 1;
	

	}

	


	public function image_delete()
	{
	if (count($_POST) && isset($_POST['id']) && !empty($_POST['id']))
		{

		$this->exam_model->delete_exam_images($_POST['id']);
		delete_file('uploads/exam/', $_POST['image']);
		echo 1;
		}
	  else
		{
		echo 0;
		}

	}



	public function test()

	{

		$this->course_model->get_all_child_course(0);

	}



	public function upload_files() {

	    $post_data = $this->input->post();
	      $arr['error'] = false;
	      $arr['uploaded_data'] = []; 

	         

	        $files = $_FILES;
             $cpt = count($_FILES['image']['name']);
              for($i=0; $i<$cpt; $i++)
			    {           
			        $_FILES['userfile']['name']= time(). "_" .  $files['image']['name'][$i];
			        $_FILES['userfile']['type']= $files['image']['type'][$i];
			        $_FILES['userfile']['tmp_name']= $files['image']['tmp_name'][$i];
			        $_FILES['userfile']['error']= $files['image']['error'][$i];
			        $_FILES['userfile']['size']= $files['image']['size'][$i];   

			      
			        $config['upload_path'] = 'uploads/exam/';
		            $config['allowed_types'] = 'jpg|png|jpeg|webp';
			      

			        $this->upload->initialize($config);
			      
			      
			        if ($this->upload->do_upload()) {

				            $arr['uploaded_data'][$i] = $this->upload->data();
				          
				            $this->create_thumbnail($arr['uploaded_data'][$i]);

				          } else {

				              return ['error' => true ,  'msg' => $this->upload->display_errors()];
				          }

			    }

			  

	    return $arr;

	}
	

    public function create_thumbnail($uploaded_data) {

 		
		    $config['image_library'] = 'gd2';
		    $config['source_image'] = $uploaded_data['full_path'];
		    $config['create_thumb'] = TRUE;
		    $config['maintain_ratio'] = false;
		    $config['width']         = 150;
		    $config['height']         = 200;
		    

		    $this->image_lib->clear();
		    $this->image_lib->initialize($config);
		    $this->image_lib->resize();

		    if ( ! $this->image_lib->resize()) {

		      echo '<pre>'; 
		      print_r($this->image_lib->display_errors()); 
		      die;

		    }

	}

	public function prodelete()
	{
		$args = func_get_args();
		$exam_data = $this->exam_model->get_exam_by_id($args[0]);
		$this->exam_model->delete_exam($args[0]);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('exam/listing');
	}


	public function allUserExamList($value='')
	{
	
		$data['examlist'] = $this->exam_model->get_all_user_exam() ; 
		$this->load->view('admin/exam/user-exam-list',$data);
	}
	


}