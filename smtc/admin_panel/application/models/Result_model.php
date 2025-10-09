<?php 
class Result_model extends CI_Model
{	
	protected $table = 'tbl_result';
	public function save_result($data)
	{
		$this->db->insert($this->table,$data);
	}
	public function get_all_result()
	{
		$this->db->order_by('id','Desc') ; 
		return $this->db->get($this->table)->result();
	}

	public function get_result_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_result_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function get_all_active_result()
	{
		$this->db->where('status',1);
			$this->db->order_by('id','Desc') ; 

		return $this->db->get($this->table)->result();
	}
	public function delete_result_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	public function delete_result_by_Eno($Eno)
	{
		$this->db->where('Eno',$Eno);
		$this->db->delete($this->table);
	}
	
	function getMarksheetOFResult($result_id){
		 $this->db->select('marksheet.*');
        $this->db->from('tbl_result_marksheet as marksheet');
        $this->db->where('marksheet.result_id',$result_id);
        return $this->db->get()->result_array();
	}
	
}
