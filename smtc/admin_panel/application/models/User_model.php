<?php 
class User_model extends CI_Model
{	
	protected $table = 'tbl_user';
	public function save_user($data)
	{
		$this->db->insert($this->table,$data);
	}
	public function get_all_user()
	{
	    
	    
		$this->db->select('u.*, c.title as course , c.code as course_code  ,  c.total_semester,c.year as course_year');
        $this->db->from('tbl_user as u');
        $this->db->join('tbl_course as c','c.id = u.course_id','left');
        $this->db->order_by('u.id' , 'Desc');
        return   $this->db->get()->result();
	}

	public function get_user_by_id($id)
	{
	   $this->db->select('u.*, c.title as course , c.code as course_code  ,  c.total_semester,c.year as course_year');
        $this->db->from('tbl_user as u');
        $this->db->join('tbl_course as c','c.id = u.course_id','left');
		$this->db->where('u.id',$id);
		return $this->db->get($this->table)->result();
		
	}

	public function get_userresults_by_id($id)
	{
	    $this->db->order_by('semester' );
		$this->db->where('user_refid',$id);
		return $this->db->get('tbl_result')->result();
		
	}
	public function get_userlast_results_by_id($id)
	{
	    $this->db->order_by('semester' , 'desc');
	    $this->db->limit(1) ;
		$this->db->where('user_refid',$id);
		return $this->db->get('tbl_result')->result();
		
	}
	public function update_user_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function get_all_active_user($limit=null)
	{
	    $this->db->select('u.*, c.title as course , c.code as course_code  ,  c.total_semester,c.year as course_year');
        $this->db->from('tbl_user as u');
        $this->db->join('tbl_course as c','c.id = u.course_id','left');
        $this->db->where('u.status',1);
		if($limit){

			$this->db->limit($limit ) ;
		}
	}
	public function delete_user_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}
