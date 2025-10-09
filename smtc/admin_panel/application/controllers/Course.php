<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class course extends CI_Controller 
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
		$this->load->model('course_model');
	}
	
	public function listing()
	{
		$data['RESULT'] = $this->course_model->get_all_course(); 
		$this->load->view('admin/course/listing',$data);
	}
	
	
	
	public function add_new()
	{
		if(isset($_POST['submitform']))
		{	 
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
		    $this->form_validation->set_rules('url_slug', 'Url Slug', 'trim|required'); 	
			$this->form_validation->set_rules('status', 'Status', 'trim|required');	
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			  
			if ($this->form_validation->run() == TRUE)
			{
				$semester_1=$semester_2=$semester_3=$semester_4 =$semester_5=$semester_6=$semester_7=$semester_8 = null;;
				$postdata =  $this->input->post() ; 

				if($postdata['semesterone']){
					$semester_1 = $postdata['semesterone'];
				}
				if($postdata['semestertwo']){
				$semester_2 = $postdata['semestertwo'];
				}
				if($postdata['semesterthree']){
				$semester_3 = $postdata['semesterthree'];
				}
				if($postdata['semesterfour']){
				$semester_4 = $postdata['semesterfour'];
				}
				if($postdata['semesterfive']){
				$semester_5 = $postdata['semesterfive'];
				}
				if($postdata['semestersix']){
				$semester_6 = $postdata['semestersix'];
				}
				if($postdata['semesterseven']){
				$semester_7 = $postdata['semesterseven'];
				}
				if($postdata['semestereight']){
				$semester_8 = $postdata['semestereight'];
				}
				 
				unset($postdata['semesterone']);
				unset($postdata['semestertwo']);
				unset($postdata['semesterthree']);
				unset($postdata['semesterfour']);
				unset($postdata['semesterfive']);
				unset($postdata['semestersix']);
				unset($postdata['semesterseven']);
				unset($postdata['semestereight']);
				unset($postdata['submitform']);

			    $postdata['create_date'] = date('Y-m-d h:i:s');	
     			$this->course_model->save_course($postdata);
     			$insert_id = $this->db->insert_id();

     			 if($insert_id){

     			 	if($semester_1){ 		
	     			 	foreach ($semester_1 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 1;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}
	     			 			
	     			 	}
	     			 }
	     			if($semester_2){ 	
	     			 	foreach ($semester_2 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 2;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_3){ 	
	     			 	foreach ($semester_3 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 3;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_4){ 	
	     			 	foreach ($semester_4 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 4;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_5){ 	
	     			 	foreach ($semester_5 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 5;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_6){ 	
	     			 	foreach ($semester_6 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 6;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_7){ 	
	     			 	foreach ($semester_7 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 7;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_8){ 	
						foreach ($semester_8 as $key => $value) {
							if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 8;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}

	     			 	

     			 	 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully saved.</div>');
					 redirect('course/add_new');
					 
				}else{
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Record has been not saved.Please try again</div>');

				}
              
				
			}				
		}		
		$data['course'] = $this->course_model->get_all_course(); 
		$this->load->view('admin/course/add',$data);
	}
	
	public function edit()
	{
		$args = func_get_args();
		$data['RESULT'] = $this->course_model->get_course_by_id($args[0]); 

		
		if(isset($_POST['submitform']))
		{
			$this->form_validation->set_rules('parent_id', 'Parent course', 'trim|required');
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('url_slug', 'Url Slug', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<div class="error"><i class="fa fa-warning"></i>&nbsp', '</div>');
			if ($this->form_validation->run() == TRUE)
			{
				$semester_1=$semester_2=$semester_3=$semester_4 =$semester_5=$semester_6=$semester_7=$semester_8 = null;
				$postdata =  $this->input->post() ;

				// Update Semester Subject

				if(isset ( $postdata['semesteronesubject_id']  ))  {

					$subject = $postdata['semesteronesubject'] ;
					foreach ($subject as $key => $value) {
						$updatedata['subject'] = $value ; 
 						$this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semesteronesubject_id'][$key]));
					}
					
		            unset($postdata['semesteronesubject_id']); 
		            unset($postdata['semesteronesubject']);
				}
				
				if( isset ($postdata['semestertwosubject_id'] )) {  
					$subject = $postdata['semestertwosubject'] ;
					foreach ($subject as $key => $value) {
						 $updatedata['subject'] = $value ; 
		           		 $this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semestertwosubject_id'][$key]));
		       		 }
		            unset($postdata['semestertwosubject_id']); 
		            unset($postdata['semestertwosubject']);
				}


				if(isset ( $postdata['semesterthreesubject_id' ] )  ){

					$subject = $postdata['semesterthreesubject'] ;
					foreach ($subject as $key => $value) {
						 $updatedata['subject'] = $value ; 
		           		 $this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semesterthreesubject_id'][$key]));
		       		 }
		            unset($postdata['semesterthreesubject_id']); 
		            unset($postdata['semesterthreesubject']);
				}
				

				if(isset ( $postdata['semesterfoursubject_id']  )  ){

					$subject = $postdata['semesterfoursubject'] ;
					foreach ($subject as $key => $value) {
						 $updatedata['subject'] = $value ; 
		           		 $this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semesterfoursubject_id'][$key]));
		       		 }
		            
		            unset($postdata['semesterfoursubject_id']); 
		            unset($postdata['semesterfoursubject']);
				}
				

				if(isset ( $postdata['semesterfivesubject_id']  )  ){
					$subject = $postdata['semesterfivesubject'] ;
					foreach ($subject as $key => $value) {
						 $updatedata['subject'] = $value ; 
		           		 $this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semesterfivesubject_id'][$key]));
		       		 }
		            unset($postdata['semesterfivesubject_id']); 
		            unset($postdata['semesterfivesubject']);
				}
				

				if(isset ( $postdata['semestersixsubject_id']  ) ) {

					$subject = $postdata['semestersixsubject'] ;
					foreach ($subject as $key => $value) {
						 $updatedata['subject'] = $value ; 
		           		 $this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semestersixsubject_id'][$key]));
		       		 }
		            unset($postdata['semestersixsubject_id']); 
		            unset($postdata['semestersixsubject']);
				}
				

				if(isset ( $postdata['semestersevensubject_id' ]  ) ){
					 
					$subject = $postdata['semestersevensubject'] ;
					foreach ($subject as $key => $value) {
						 $updatedata['subject'] = $value ; 
		           		 $this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semestersevensubject_id'][$key]));
		       		 }
		          
		            unset($postdata['semestersevensubject_id']); 
		            unset($postdata['semestersevensubject']);
				}
				

				if(isset ( $postdata['semestereightsubject_id' ] )  ){
					$subject = $postdata['semestereightsubject'] ;
					foreach ($subject as $key => $value) {
						 $updatedata['subject'] = $value ; 
		           		 $this->db->update('tbl_course_subject',$updatedata , array('id' => $postdata['semestereightsubject_id'][$key]));
		       		 }
		            
		            unset($postdata['semestereightsubject_id']); 
		            unset($postdata['semestereightsubject']);
				}
				
				
				if( isset ($postdata['semesterone']) ) {
					$semester_1 = $postdata['semesterone'];unset($postdata['semesterone']);			
				}

				if( isset ($postdata['semestertwo']) ) {
					$semester_2 = $postdata['semestertwo'];unset($postdata['semestertwo']);
				}

				if( isset ($postdata['semesterthree']) ) {
					$semester_3 = $postdata['semesterthree'];unset($postdata['semesterthree']);
				}

				if( isset ($postdata['semesterfour']) ) {
				$semester_4 = $postdata['semesterfour'];unset($postdata['semesterfour']);
				}

				if( isset ($postdata['semesterfive']) ) {
				$semester_5 = $postdata['semesterfive'];unset($postdata['semesterfive']);
				}

				if( isset ($postdata['semestersix']) ) {
				$semester_6 = $postdata['semestersix'];unset($postdata['semestersix']);
				}

				if( isset ($postdata['semesterseven']) ) {
				$semester_7 = $postdata['semesterseven'];unset($postdata['semesterseven']);
				}

				if( isset ($postdata['semestereight']) ) {
				$semester_8 = $postdata['semestereight'];unset($postdata['semestereight']);
				}
				 

				unset($postdata['submitform']);
                $this->course_model->update_course_by_id($args[0],$postdata);

                $insert_id = $args[0] ; 

                	if($semester_1){ 		
	     			 	foreach ($semester_1 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 1;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			 }
	     			if($semester_2){ 	
	     			 	foreach ($semester_2 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 2;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_3){ 	
	     			 	foreach ($semester_3 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 3;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_4){ 	
	     			 	foreach ($semester_4 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 4;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_5){ 	
	     			 	foreach ($semester_5 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 5;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_6){ 	
	     			 	foreach ($semester_6 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 6;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_7){ 	
	     			 	foreach ($semester_7 as $key => $value) {
	     			 		if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 7;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}
	     			if($semester_8){ 	
						foreach ($semester_8 as $key => $value) {
							if($value){
	     			 		$subjectdata['subject'] = $value;
	     			 		$subjectdata['course_id'] = $insert_id;
	     			 		$subjectdata['semester'] = 8;
	     			 		$this->db->insert('tbl_course_subject',$subjectdata);
	     			 		}	
	     			 	}
	     			}

				$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully updated.</div>');
				redirect('course/listing');
			}	
		}
		 
		$data['course'] = $this->course_model->get_all_course(); 
		$this->load->view('admin/course/edit',$data);
	}

	public function delete()
	{
		$args = func_get_args();
		$blog = $this->course_model->get_course_by_id($args[0]);
		$this->course_model->delete_course_by_id($args[0]);
	
		$this->session->set_flashdata('msg','<div class="alert alert-success">Record has been successfully deleted.</div>');
		redirect('course/listing');
	}	
}