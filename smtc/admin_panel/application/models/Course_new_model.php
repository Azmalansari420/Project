<?php 
class Course_new_model extends CI_Model
{	
	protected $table = 'course_new';

	public function save_course_new($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function get_all_course_new()
	{
		return $this->db->get($this->table)->result();
	}
	public function get_course_new_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_course_new_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function get_all_active_course_new()
	{
		$this->db->where('status',1);
		return $this->db->get($this->table)->result();
	}
	
	public function delete_course_new_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}
