<?php 
class Specialization_model extends CI_Model
{	
	protected $table = 'specialization';

	public function save_specialization($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function get_all_specialization()
	{
		return $this->db->get($this->table)->result();
	}
	public function get_specialization_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_specialization_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function get_all_active_specialization()
	{
		$this->db->where('status',1);
		return $this->db->get($this->table)->result();
	}
	
	public function delete_specialization_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}
