<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Result extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$admin_id = $this->session->userdata('adminid');
		if(empty($admin_id))
		{
			redirect('admin');
		}
		$this->load->library('form_validation');
		$this->load->library('upload');
		 $this->load->library('image_lib');
		
	}
	
	public function listing()
	{
		$data['RESULT'] = $this->result_model->get_all_result(); 
		$this->load->view('admin/result/listing',$data);
	}
	
	public function add_new()
	{
		if(isset($_POST['submitform']))
		{			
			$this->form_validation->set_rules('eno', 'Eno', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$post_data = $this->input->post();

				 if(isset($_POST['subjectName'] ) ) { 


				$subjectNameArray = $post_data['subjectName'];
			    $subjet_max_marksArray = $post_data['subjet_max_marks'];
			    $subjet_marks_theory_firstArray = $post_data['subjet_marks_theory_first'];
			    $subjet_marks_theory_secondArray = $post_data['subjet_marks_theory_second'];
			    $subjet_marks_praticalArray = $post_data['subjet_marks_pratical'];
			    $total_marksArray = $post_data['total_marks'];
			    $post_data['create_date'] = date('Y-m-d H:i');
			  
			    unset($post_data['Submit']) ;
			    unset($post_data['subjectName']) ;
			    unset($post_data['subjet_max_marks']) ;
			    unset($post_data['subjet_marks_theory_first']) ;
			    unset($post_data['subjet_marks_theory_second']) ;
			    unset($post_data['subjet_marks_pratical']) ;
			    unset($post_data['total_marks']) ;

			   }
				unset($post_data['submitform']);
			    $this->db->insert('tbl_result',$post_data);

			     $insert_id = $this->db->insert_id() ; 

			    if(isset($_POST['subjectName'] ) ) { 

				    foreach ($subjectNameArray as $key => $value) {
				    	
				    	$resultdata['subject'] = $subjectNameArray[$key];
				    	$resultdata['eno'] =$post_data['eno'];
				    	$resultdata['max_marks'] = $subjet_max_marksArray[$key];
				    	$resultdata['theory_first'] = $subjet_marks_theory_firstArray[$key];
				    	$resultdata['theory_second'] = $subjet_marks_theory_secondArray[$key];
				    	$resultdata['marks_pratical'] = $subjet_marks_praticalArray[$key];
				    	$resultdata['total_marks'] = $total_marksArray[$key];
				    	$resultdata['result_id'] =   $insert_id;
				    	$this->db->insert('tbl_result_marksheet' , $resultdata) ; 
				       
				    }
				}

				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully saved.</div>');
			    redirect('result/listing');

				
			}else{

				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.  validation_errors()  .'</div>');
			}				
		}		
		$this->load->view('admin/result/add');
	}
	
	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->result_model->get_result_by_id($args[0]); 
		
		if(isset($_POST['submitform']))
		{
				$this->form_validation->set_rules('Eno', 'Eno', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$post_data = $this->input->post();

				if(isset($post_data['subjectName'] ) ) {
						$subjectNameArray = $post_data['subjectName'];
					    $subjet_max_marksArray = $post_data['subjet_max_marks'];
					    $subjet_marks_theory_firstArray = $post_data['subjet_marks_theory_first'];
					    $subjet_marks_theory_secondArray = $post_data['subjet_marks_theory_second'];
					    $subjet_marks_praticalArray = $post_data['subjet_marks_pratical'];
					    $total_marksArray = $post_data['total_marks'];
					    $post_data['create_date'] = date('Y-m-d H:i');
					  
					    unset($post_data['Submit']) ;
					    unset($post_data['subjectName']) ;
					    unset($post_data['subjet_max_marks']) ;
					    unset($post_data['subjet_marks_theory_first']) ;
					    unset($post_data['subjet_marks_theory_second']) ;
					    unset($post_data['subjet_marks_pratical']) ;
					    unset($post_data['total_marks']) ;

					    foreach ($subjectNameArray as $key => $value) {
			    	
					    	$resultdata['subject'] = $subjectNameArray[$key];
					    	$resultdata['max_marks'] = $subjet_max_marksArray[$key];
					    	$resultdata['theory_first'] = $subjet_marks_theory_firstArray[$key];
					    	$resultdata['theory_second'] = $subjet_marks_theory_secondArray[$key];
					    	$resultdata['marks_pratical'] = $subjet_marks_praticalArray[$key];
					    	$resultdata['total_marks'] = $total_marksArray[$key];
					    	$resultdata['result_id'] =   $args[0];
					    	$this->db->insert('tbl_result_marksheet' , $resultdata) ; 
					       
					    }

				}
		      

				unset($post_data['submitform']);

				$this->result_model->update_result_by_id($args[0],$post_data);

				 


				$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully updated.</div>');
				redirect('result/edit/'.$args[0]);
			}	
		}
		$this->load->view('admin/result/edit',$data);
	}
	


	public function delete_result()
	{
		$args = func_get_args();
		$result = $this->result_model->get_result_by_id($args[0]);
		$this->result_model->delete_result_by_id($args[0]);
		$this->db->where('result_id',$args[0]);
		$this->db->delete('tbl_result_marksheet');
		$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('result/listing');
	}
	public function delete_result_marksheet($value='')
	{
		$args = func_get_args();
		$this->db->where('id',$args[1]);
		$this->db->delete('tbl_result_marksheet');
		$this->session->set_flashdata('msg','<div class="alert alert-success">record has been successfully deleted.</div>');
		redirect('result/edit/'.$args[0]);
	}

	public function upload_files() {

	    $post_data = $this->input->post();
	      $arr['error'] = false;
	      $arr['uploaded_data'] = []; 



	      foreach ($_FILES as $key => $value) {
	          if ( ! $value['name']) {
	            continue;
	          }

	          $config['upload_path'] = 'uploads/result/';
	          $config['allowed_types'] = 'jpg|png|jpeg';
	          $config['file_name'] = time(). "_" . $value['name'];
	          $config['max_width']            = 600;
	          $config['max_height']           = 600;
	         
	          $this->upload->initialize($config);
	         

	          if ($this->upload->do_upload($key)) {

	            $arr['uploaded_data'][$key] = $this->upload->data();
	          

	          } else {

	              return ['error' => true , 'file_name' => $key, 'msg' => $this->upload->display_errors()];
	          	
	           
	          }
	    } 



	    return $arr;

	}
	

    public function create_thumbnail($uploaded_data) {

 		
		    $config['image_library'] = 'gd2';
		    $config['source_image'] = $uploaded_data['full_path'];
		    $config['create_thumb'] = TRUE;
		    $config['maintain_ratio'] = false;
		    $config['width']         = 200;
		    $config['height']         = 300;
		    

		    $this->image_lib->clear();
		    $this->image_lib->initialize($config);
		    $this->image_lib->resize();

		    if ( ! $this->image_lib->resize()) {

		      echo '<pre>'; 
		      print_r($this->image_lib->display_errors()); 
		      die;

		    }

	}
}