<?php 
class exam_model extends CI_Model
{	
	protected $table = 'tbl_exams';
	/*start forum exam model*/
	public function save_exam($data)
	{

		$this->db->insert($this->table,$data);
	}
	public function save_exam_Question($data)
	{

		$this->db->insert('tbl_question',$data);
	}
		public function get_all_exam()
	{

		$this->db->select('b.*, c.title as category');
        $this->db->from('tbl_exams as b');
        $this->db->join('tbl_course as c','c.id = b.cat_id','left');
        $this->db->order_by('b.id');
       return   $this->db->get()->result();

	}
	public function get_all_active_type_exam(  )
	{
        $this->db->select('o.* , c.title as category');
        $this->db->from('tbl_exams as o');
        $this->db->join('tbl_course as c','c.id = o.cat_id','left');
        $this->db->where('o.status' , '1') ; 
        $this->db->order_by('o.id','desc');
  
       $res=   $this->db->get()->result();
 
       return $res ;

	}
	public function get_all_active_exam_by_course_id($course_id  )
	{
        $this->db->select('o.* , c.title as category');
        $this->db->from('tbl_exams as o');
        $this->db->join('tbl_course as c','c.id = o.cat_id','left');
        $this->db->where('o.status' , '1') ; 
        $this->db->where('o.cat_id' , $course_id) ; 
        $this->db->order_by('o.id','desc');
       $res=   $this->db->get()->result();
 
       return $res ;

	}
	public function get_exam_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function get_question_by_exam_id($exam_id)
	{
		$this->db->where('exam_id',$exam_id);
		return $this->db->get('tbl_question')->result();
	}
	public function get_question_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tbl_question')->result();
	}
	public function update_exam_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function update_question_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_question',$data);
	}
	public function get_all_active_exam()
	{
		$this->db->where('status','1');
	    $this->db->order_by('id' , 'desc') ;
		return $this->db->get($this->table)->result(); 
	}

	public function delete_exam($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	
	public function rowof_question_by_exam_id($exam_id)
	{
		$this->db->where('exam_id',$exam_id);
		return $this->db->get('tbl_question')->num_rows();
	}


	public function get_all_user_exam($limit='')
	{
		$this->db->select('o.*, e.title, e.time as totalTime, e.semester as semester,c.title as category,u.name as username ,u.reg_id as reg_id') ; 
		$this->db->from('tbl_user_exam as o');
        $this->db->join('tbl_exams as e','e.id = o.exam_refid','left');
        $this->db->join('tbl_course as c','c.id = e.cat_id','left');
        $this->db->join('tbl_user as u','u.id = o.user_refid','left');
        $this->db->order_by('id' , 'desc' ) ; 
        if($limit){
        	  $this->db->limit(10) ; 
        }
      
		return $this->db->get()->result();
	}


	public function get_user_exam($user_refid)
	{
		$this->db->select('o.*, e.title, e.time as totalTime, e.semester as semester,c.title as category,u.name as username ,u.reg_id as reg_id') ; 
		$this->db->from('tbl_user_exam as o');
        $this->db->join('tbl_exams as e','e.id = o.exam_refid','left');
        $this->db->join('tbl_course as c','c.id = e.cat_id','left');
        $this->db->join('tbl_user as u','u.id = o.user_refid','left');
        $this->db->where('user_refid',$user_refid) ; 
        $this->db->order_by('id' , 'desc' ) ;  
		return $this->db->get()->result();
	}


	public function getUserExamByUserExamId($id='')
	{
		$this->db->select('o.*, e.title, e.time as totalTime, e.semester as semester,c.title as category') ;
		$this->db->from('tbl_user_exam as o');
        $this->db->join('tbl_exams as e','e.id = o.exam_refid','left');
        $this->db->join('tbl_course as c','c.id = e.cat_id','left');
        $this->db->where('o.id',$id);
		return $this->db->get()->row_array();
	}

		public function countExamObatainedMarksByExamId($userExam_refid)
	{


		$this->db->where('userExam_refid',$userExam_refid);
		$this->db->where('status','Right');
		$res =  $this->db->get('tbl_user_exam_ans')->result();
		$marksCount = 0 ; 

		foreach ($res as $key => $value) {

			$marksCount = $value->marks + $marksCount ; 
			# code...
		}

		return $marksCount ;
	}

	public function getAnswerOfQuestion($questionId , $userExamId)
	{
		$this->db->where('userExam_refid',$userExamId);
		$this->db->where('question_id',$questionId);
		return  $this->db->get('tbl_user_exam_ans')->row_array();
	}
	

	public function getUserExamAttemptStatus($exam_refid='' ,$user_refid , $exam_session_id)
	{
		 
		$this->db->from('tbl_user_exam as o');
		$this->db->where('exam_refid',$exam_refid);
		$this->db->where('user_refid',$user_refid);
		$this->db->where('exam_session_id',$exam_session_id);
		$this->db->where('status','Completed');
		return $this->db->get()->row_array();
	}	
	


}
