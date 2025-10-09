<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exam extends CI_Controller
{

    function __construct(){
	 	parent::__construct();
	 	$user_id = $this->session->userdata('USER_ID');
		if(empty($user_id)){redirect('user/login');}
	    
	 }
  

	public function StartExam($examid='')
	{
		$user_id = $this->session->userdata('USER_ID');
		if(empty($user_id))
		{
			$_SESSION['redirect'] = 'start-exam/'.$examid ; 
			redirect('user/login');
		}
		$data['exam'] =  $this->exam_model->get_exam_by_examid($examid);
		redirect('terms-and-conditions/'.$examid) ; 
	}

	public function termsCondition($examid = 0)
	{	 
	 	$user_id = $this->session->userdata('USER_ID');
	    if(isset($_SESSION['exam_session_id']) ){redirect('main-paper'); }

	 	$data['exam'] =  $this->exam_model->get_exam_by_examid($examid);
		$res =   $this->user_model->checkUserExam($user_id , $examid) ;

		///When user has give ony one time exam
		 if($res > 0 ){
		     $this->session->set_flashdata('msg','<div class="alert alert-warning">You already given <b>'.$data['exam'][0]->title.'</b>  exam, <br> you can not reattempt this exam. </div>');
		 	redirect('error') ; 
		} 

		$_SESSION['EXAM_ID'] = $examid; 
	    $this->load->view('front/exam/terms_condition' , $data);
	}


	public function mainExam($parent = 0)
	{	
	 	$user_id = $this->session->userdata('USER_ID');

		if(!isset($_SESSION['EXAM_ID'])){ redirect(); }
		$data['exam'] =$exam =   $this->exam_model->get_exam_by_examid($_SESSION['EXAM_ID']);

	    // Check user Exam
		$res =   $this->user_model->checkUserExam($user_id , $exam[0]->id ) ;
		 if($res > 0 ){ 
	       $this->session->set_flashdata('msg','<div class="alert alert-warning">You already given <b>'.$data['exam'][0]->title.'</b>  exam, <br> you can not reattempt this exam. </div>');
			 redirect("user/response");
		 } 

		if(!isset($_SESSION['exam_session_id'])){

				$insertData['exam_session_id'] = $_SESSION['exam_session_id'] = time() ; 
				$insertData['user_refid'] = $user_id ; 
				$insertData['exam_refid'] = $exam[0]->id ; 
				$insertData['date'] = date('Y-m-d') ;
				$insertData['startTime'] = date('H:i:s') ;
				$totalMarks =  $this->exam_model->countQuestionMarksByExamId($exam[0]->id) ; 
				$insertData['totalMarks'] = $totalMarks ;
				$totalQues =  $this->exam_model->countQuestionByExamId($exam[0]->id) ; 
				$insertData['totalQues'] = $totalQues ;
				$this->db->insert('tbl_user_exam' , $insertData) ;
				$lastinsertId = $this->db->insert_id() ; 

				$this->user_model->updateUserExam($user_id , $exam[0]->id ,'Process' ) ; //  Update user active exam status 'Held' ;
				$_SESSION['user-exam-id'] =$lastinsertId  ;
			 	$_SESSION['EXAM_START_TIME'] = $exam_current_time = $exam_start_time =  new DateTime();

		}else{

			$exam_start_time = 	$_SESSION['EXAM_START_TIME'] ; 
			$exam_current_time = new DateTime(); 

		}	 

	 
	 	$data['exam_duration_mintues_seconds'] = $this->getTimeDurationOFExam($exam_start_time ,$exam_current_time , $data['exam'][0]->time) ; 	 	
	 	$data['question'] =  $this->exam_model->get_question_by_exam_id($data['exam'][0]->id);
	 	$data['answersave']  = $data['saveQuestionNo']  = '' ; 
	 
	 	if (isset($_SESSION['answersave'])) {
			$data['answersave'] = $_SESSION['answersave'];
            foreach ($data['answersave']['question'] as $key => $value) {
               $saveQuestionNo[]  =   $value['question_no'];

            } 

            $data['saveQuestionNo'] = $saveQuestionNo ; 
		}
		
	    $this->load->view('front/exam/main-paper' ,$data );
	}

	public function getTimeDurationOFExam($exam_start_time='' ,$exam_current_time , $duration)
	{
		$timediff = $exam_start_time->diff($exam_current_time);
	    $exam_remain_time = $timediff->h.':'.$timediff->i.":".$timediff->s.".000000";
	    $exam_remain_time =  new DateTime($exam_remain_time);
	    $duration =  new DateTime($duration);
	 	$exam_duration = $duration->diff($exam_remain_time);
	    return 	$exam_duration->format('%r%a') * 24 * 60 + $exam_duration->h * 60 +  $exam_duration->i.':'.$exam_duration->s ;

	}


	public function saveQuestionAnswer()
	{	

		if($this->input->post('question_no')){
			$array['user_id'] = $this->session->userdata('USER_ID');
			$array['exam_session_id'] = $this->session->userdata('exam_session_id');
			$array['user-exam-id'] = $this->session->userdata('user-exam-id');
			$array['exam_refid'] = $this->input->post('exam_refid');
			$question_no = $this->input->post('question_no') ;
			$array['question'][$question_no ] =[

				'question_no' => $this->input->post('question_no'),
				'question_id' => $this->input->post('question_id'),
				'answer' => $this->input->post('answer'),

			];

			if (isset($_SESSION['answersave'])) {
				
				$res = $_SESSION['answersave'] ; 
				//$Question  = array_merge($res['question'] ,$array['question'] ) ; 
				//$res['question'] =array_unique($Question, SORT_REGULAR);
				$res['question'][$question_no] = $array['question'][$question_no ] ; 
				
				$_SESSION['answersave'] = $res ;


			}else{

				$_SESSION['answersave'] = $array ;

			}
		}
	}

	public function clearQuestionAnswer($value='')
	{
		$question_no = $this->input->post('question_no') ;
		if (isset($_SESSION['answersave'])) {
				$res = $_SESSION['answersave'] ; 
				unset($res['question'][$question_no]);
				$_SESSION['answersave'] = $res ;
		}
	}

	public function examSubmit($value='')
	{

		if(isset($_SESSION['exam_session_id'])){

				$exam =  $this->exam_model->get_exam_by_examid($_SESSION['EXAM_ID']);
				$exam_refid = $exam[0]->id;
				$user_refid = $this->session->userdata('USER_ID');

				$question =  $this->exam_model->get_question_by_exam_id($exam_refid);; 
				$userExam_refid = $_SESSION['user-exam-id'] ; 

				$totalQues =  $this->exam_model->countQuestionByExamId($exam_refid) ; 
				$totalMarks = 0 ; 

				for ($i=1; $i <= $totalQues ; $i++) { 
						
						$question_id = "question_id".$i ; 
						$question = "question".$i ; 
						$answer = "answersave".$i ; 
						$insertData['exam_session_id'] = $exam_session_id=$_SESSION['exam_session_id'];

						$insertData['question_id'] = $_POST[$question_id];
						$insertData['markAnswer'] = $_POST[$answer];
						$insertData['userExam_refid'] = $userExam_refid;

						$questionArray =  $this->db->get_where('tbl_question' ,array('id'=>$_POST[$question_id]) )->row_array() ;  
						$insertData['correctAnswer'] =$questionArray['correct'];
						$insertData['question'] =$questionArray['question'];
					    $insertData['option'] =$questionArray['option'.$questionArray['correct']];

			
						if($questionArray['correct'] == $_POST[$answer] ){

							$insertData['status'] = 'Right';
							$insertData['marks']= $questionArray['marks'];
							$totalMarks = $questionArray['marks']+$totalMarks;
						}else{
							if($answer){
					
								$insertData['status'] = 'Wrong';
							    $insertData['marks']= 0 ;
							}else{
							     $insertData['status'] = 'Not Attempt';
							     $insertData['marks']= 0 ;
							}
						}

						 $rows = 	$this->db->get_where('tbl_user_exam_ans' ,array('userExam_refid'=>$userExam_refid,'question_id'=>$question_id,'exam_session_id'=>$exam_session_id ) )->num_rows()  ; 
						 if($rows  == 0 ){
						 	$this->db->insert('tbl_user_exam_ans' , $insertData ) ; 	
						 }
				}

				$updateData['status'] = 'Completed' ; 
				$updateData['endTime'] =date('H:i:s') ;  

				$this->db->where('markAnswer !=' ,'') ; 			
			    $this->db->where('userExam_refid',$userExam_refid) ; 
		        $updateData['totalAttemptQue'] =  $this->db->get('tbl_user_exam_ans')->num_rows() ; 	
				
				$updateData['totalCorrectAns'] =  $this->db->get_where('tbl_user_exam_ans' , array('userExam_refid' =>$userExam_refid,'status'=>'Right'))->num_rows() ;
				 
				$updateData['obtained_marks'] =	$totalMarks; 

				$this->db->where('id', $userExam_refid) ; 
				$this->db->update('tbl_user_exam' , $updateData ) ; 


				$this->user_model->updateUserExam($user_refid , $exam_refid ,'Exam Held' ) ; //  Update user active exam status 'Held' ;

				


				unset($_SESSION['EXAM_ID']);
				unset($_SESSION['exam_session_id']);
				unset($_SESSION['answersave']);
				redirect('exam-submit-successfully') ; 
		}else{
			 $this->session->set_flashdata('msg','<div class="alert alert-warning">Unauthorize acesss, Please Contact to admin </div>');
			 redirect("user/response");
		}
	}


	public function examSubmitPage($value='')
	{
		
		 $userExam_refid = $_SESSION['user-exam-id'] ; 
		 $data['exam'] = $this->exam_model->getUserExamByUserExamId($userExam_refid) ; 
		 $this->load->view('front/exam/exam-submit' ,$data);
	}
	public function examResponce($value='')
	{
		 $userExam_refid = $_SESSION['user-exam-id'] ; 
		 $data['exam'] = $this->exam_model->getUserExamByUserExamId($userExam_refid) ; 
		 $this->load->view('front/exam/exam-responce' ,$data);
	}
	

	public function viewAnswerSheet($value='')
	{
		 $userExam_refid = $_SESSION['user-exam-id'] ; 
		 $data['exam'] = $this->exam_model->getUserExamByUserExamId($userExam_refid) ; 
		 $data['question'] =  $this->exam_model->get_question_by_exam_id($data['exam']['exam_refid']);
		 $this->load->view('front/exam/answer-sheet' ,$data);
	}
	public function examErrorThankyou($value='')
	{
		$responce = $this->session->flashdata('msg') ; 
 		if($responce){

 				$_SESSION['responce'] = $this->session->flashdata('msg') ; 
 		}
 		

 		$this->load->view('front/account/response');
	}

}

