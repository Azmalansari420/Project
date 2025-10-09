<?php 
class Staff_model extends CI_Model
{	
	protected $table = 'tbl_admin';
	/*start forum product model*/
	public function save_staff($data)
	{
  
		$this->db->insert($this->table,$data);
	}

     public function get_all_staff()
	{
		return $this->db->get($this->table)->result();
	}


	public function get_staff_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_staff_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	
	public function delete_staff_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}



}
