<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller 
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
	
	public function course()
	{
	    $this->db->order_by('id' ,'asc') ; 
	    $this->db->group_by('name');
	    $course = $this->db->get('course')->result() ;
	    echo count($course) ; 
	    echo "<pre>" ; 
	    foreach($course as $key=>$value){
	       echo "<br>";
	      echo " <br>Course Id: - " .$value->id ;   
	      echo " <br>Course Name: - " .$value->name ;   
	      echo "<br>Course Code: - " .$value->c_code ;   
	    }

	}	
	
	public function student()
	{
	    $this->db->order_by('id' ,'asc') ; 
	    $course = $this->db->get('user_register')->result() ; 
	    echo "<pre>" ; 
	  
	     
	     foreach($course as $key=>$value){
	         
	         if($value->gender == '1'){
	             $gender = "Male" ; 
	         }else if($value->gender == '2'){
	             $gender = "Female" ; 
	         }else{
	             $gender = "Others" ; 
	         }
	         
	          if($value->marital_status == '2'){
	             $marital_status = "Married" ; 
	         }else{
	             $marital_status = "Unmarried" ; 
	         }
	         if($value->student_id_number){
			   $student_id_number = $value->student_id_number ; 
			}else{
			    $student_id_number ='' ;
			} 
			if($value->last_qualification){
			   $last_qualification = $value->last_qualification ; 
			}else{
			    $last_qualification ='' ;
			}
			if($value->exam_session){
			   $exam_session = $value->exam_session ; 
			}else{
			    $exam_session ='' ;
			}
			if($value->result){
			   $result = $value->result ; 
			}else{
			    $result ='' ;
			}
			if($value->marksheet){
			   $marksheet = $value->marksheet ; 
			}else{
			    $marksheet ='' ;
			}
			if($value->certificate){
			   $certificate = $value->certificate ; 
			}else{
			    $certificate ='' ;
			}
			if($value->year_of_passing){
			   $year_of_passing = $value->year_of_passing ; 
			}else{
			    $year_of_passing ='' ;
			}
			
	       $col_val = array(
			'id '=>$value->id ,
			'oauth_uid'=>$value->oauth_uid,
			'oauth_provider'=>$value->oauth_provider,
			'reg_id'=>$value->reg_id,
		    'student_id_number'=>$student_id_number ,
			'password'=>$value->password,
			'date_of_addmission'=>$value->join_date,
			'name'=>$value->first_name,
			'father_name'=>$value->father_name,
			'mother_name'=>$value->mother_name,  
			'email'=>$value->email,
			'mobile'=>$value->mobile,  
			'gender'=>$gender,  
			'dob'=>$value->dob, 
			'course_id'=>$value->course_id,
			'marital_status'=>$marital_status,
			'state_id'=>$value->state,
			'district_id'=>$value->district,
			'city_id'=>$value->city,
			'address'=>$value->address,
			'postcode'=>$value->postcode,
			'payment_status'=>1,
			'order_id'=>$value->order_id,
			'last_qualification'=>$last_qualification,
			'work_experience'=>$value->work_experience,
            'exam_option'=>$value->exam_option,
            'exam_session'=>$exam_session,
            'fee'=>$value->received_amount,
            'payment_mode'=>$value->payment_mode,
            'late_fees'=>$value->late_fees,
            'exam_fees'=>$value->exam_fees,
            'reg_fees'=>$value->reg_fees,
			'specialization'=>$value->specialization,
			'result_status'=>$value->result_status,
			'result'=>$result,
			'marksheet_status'=>$value->marksheet_status,
			'marksheet'=>$marksheet,
			'certificate_status'=>$value->certificate_status,
			'certificate'=>$certificate,
			'result_status'=>$value->result_status,
			'year_of_passing'=>$year_of_passing,
			'admit_card'=>$value->admit_card,
			'photo'=>$value->picture,
			'cover'=>$value->cover,
			'adhar_pic'=>$value->adhar_pic,
			'student_signature'=>$value->student_signature,
			
			);

			print_r($col_val) ;
	     }
	     
	        

	}
	

}