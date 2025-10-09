<?php 
class User_model extends CI_Model
{	
	protected $table = 'tbl_user';

	
	public function get_user_by_id($id)
	{

		 $this->db->select('u.*, c.title as course , c.code as course_code  ,  c.total_semester');
        $this->db->from('tbl_user as u');
        $this->db->join('tbl_course as c','c.id = u.course_id','left');
		$this->db->where('u.id',$id);
		return $this->db->get()->result();
	}


	public function user_login($reg_id,$dob)
	{
		$this->db->where('reg_id',$reg_id);
		$this->db->where('dob',$dob);	
		$rows = $this->db->get($this->table)->result();
		return $rows;
	}
	

	public function get_all_active_user_exam($user_id='')
	{

		$this->db->select('uExam.status as examStatus,uExam.create_date as active_date,  exams.*') ; 
		$this->db->from('tbl_user_active_exam as uExam');
		$this->db->join('tbl_exams as exams', 'exams.id = uExam.exam_refid','left');
		$this->db->where('uExam.user_refid',$user_id);
		$this->db->where('uExam.status','Active');
		$this->db->order_by('id','Desc');
		$rows = $this->db->get()->result();
		return $rows;
	}
    
    public function getUserActiveExam($user_id='')
	{

		$this->db->select('uExam.status as examStatus,  exams.*') ; 
		$this->db->from('tbl_user_active_exam as uExam');
		$this->db->join('tbl_exams as exams', 'exams.id = uExam.exam_refid','left');
		$this->db->where('uExam.user_refid',$user_id);
		$this->db->where('uExam.status','Active');
		$this->db->order_by('id','Desc');
		$rows = $this->db->get()->row_array();
		return $rows;
	}

	public function getUserProcessExam($user_id='')
	{

		$this->db->select('uExam.status as examStatus,  exams.*') ; 
		$this->db->from('tbl_user_active_exam as uExam');
		$this->db->join('tbl_exams as exams', 'exams.id = uExam.exam_refid','left');
		$this->db->where('uExam.user_refid',$user_id);
		$this->db->where('uExam.status','Process');
		$this->db->order_by('id','Desc');
		$rows = $this->db->get()->row_array();
		return $rows;
	}


	public function checkUserExam($user_refid='' , $exam_refid)
	{
		$this->db->where('user_refid',$user_refid);
		$this->db->where('exam_refid',$exam_refid);	
		$this->db->where('status','Complete');	
		return $this->db->get('tbl_user_exam')->num_rows();
	}

	public function updateUserExam($user_refid,$exam_refid,$status)
	{
		$post_data['status'] = $status ; 
		$post_data['exam_session_id'] = $_SESSION['exam_session_id'] ; 
		$this->db->where('exam_refid',$exam_refid);
		$this->db->where('user_refid',$user_refid);
		$this->db->update('tbl_user_active_exam',$post_data);
	}



}
