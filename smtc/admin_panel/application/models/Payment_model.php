<?php 
class Payment_model extends CI_Model
{	
	protected $table = 'fee_payment_histroy';

	public function save_payment($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function get_all_payment()
	{
	    
	    $this->db->select('p.*, u.name as name , u.reg_id, u.mobile');
        $this->db->from('fee_payment_histroy as p');
        $this->db->join('tbl_user as u','u.id  = p.user_id','left');
        $this->db->order_by('p.id' , 'Desc');
        return   $this->db->get()->result();
	}
	public function get_payment_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}	
	public function get_all_payment_by_user_id($user_id)
	{
		$this->db->where('user_id',$user_id);
		 $this->db->order_by('id' , 'Asc');
		return $this->db->get($this->table)->result();
	}
	public function update_payment_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}

	public function delete_payment_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}	
	public function delete_online_payment_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('online_payment_user');
	}
}
