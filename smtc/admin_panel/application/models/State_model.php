<?php 
class State_model extends CI_Model
{	
	protected $table = 'state';

	public function save_state($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function get_all_state()
	{
		return $this->db->get($this->table)->result();
	}
	public function get_state_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_state_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function get_all_active_state()
	{
		$this->db->where('status',1);
		return $this->db->get($this->table)->result();
	}
	
	public function delete_state_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}
