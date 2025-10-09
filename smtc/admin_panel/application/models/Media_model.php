<?php 
class Media_model extends CI_Model
{	
	protected $table = 'tbl_media';

	public function save_media($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function get_all_media()
	{
	    
	    $this->db->select('m.*, c.title as course, c.code');
        $this->db->from('tbl_media as m');
        $this->db->join('tbl_course as c','c.id  = m.course_id','left');
        $this->db->order_by('m.id' , 'Desc');
        return   $this->db->get()->result();
	}
	public function get_media_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_media_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}

	public function delete_media_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}
