<?php 
class Exam_model extends CI_Model
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
		$this->db->order_by('id' , 'desc') ;
		return $this->db->get($this->table)->result();
	}

	public function get_exam_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}

	public function get_exam_by_examid($examid)
	{
		$this->db->where('examid',$examid);
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

	public function get_all_active_exam($limit=null)
	{

        $this->db->select('o.* , c.title as categoryTitle');
        $this->db->from('tbl_exams as o');
        $this->db->join('tbl_course as c','c.id = o.cat_id','left');
        $this->db->where('o.status','1');
        $this->db->order_by('o.id' ,'desc');
        if($limit){

        	$this->db->limit($limit) ; 
        }
       return   $this->db->get()->result();

	}

	public function get_all_active_exam_by_ptype($type)
	{

        $this->db->select('o.* , c.title as categoryTitle');
        $this->db->from('tbl_exams as o');
        $this->db->join('tbl_course as c','c.id = o.cat_id','left');
        $this->db->where('o.status','1');
        $this->db->where('o.type',$type);
        $this->db->order_by('o.id' ,'desc');
       
       return   $this->db->get()->result();

	}


	public function countQuestionByExamId($exam_id)
	{
		$this->db->where('exam_id',$exam_id);
		return $this->db->get('tbl_question')->num_rows();
	}


	public function countQuestionMarksByExamId($exam_id)
	{
		$this->db->where('exam_id',$exam_id);
		$res =  $this->db->get('tbl_question')->result();
		$marksCount = 0 ; 

		foreach ($res as $key => $value) {

			$marksCount = $value->marks + $marksCount ; 
			# code...
		}

		return $marksCount ;
	}




	public function delete_exam($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	

	public function getUserExamByUserExamId($id='')
	{
		$this->db->select('o.*, e.title, e.time as totalTime') ; 
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

}
