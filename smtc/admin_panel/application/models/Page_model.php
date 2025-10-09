<?php 
class Page_model extends CI_Model
{	
	protected $table = 'tbl_page';
	public function save_page($data)
	{
		$this->db->insert($this->table,$data);
	}
	public function save_page_images($data)
	{
		$this->db->insert('tbl_page_images',$data);
	}
	public function get_all_page()
	{
		$this->db->order_by('id' , 'Desc');
		return $this->db->get($this->table)->result();
	}
	public function select_page_images($id)
	{
		$this->db->where('page_id',$id);
		$this->db->order_by('id' , 'Desc');
		return $this->db->get('tbl_page_images')->result();
	}
	public function get_page_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
		
	}
	public function update_page_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function get_all_active_page()
	{
		$this->db->where('status',1);
		return $this->db->get($this->table)->result();
	}
	public function delete_page_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	public function delete_product_images($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_page_images');
	}
}
