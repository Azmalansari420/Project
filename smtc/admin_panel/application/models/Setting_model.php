<?php 

class Setting_model extends CI_Model

{	

	protected $table = 'tbl_setting';

	public function save_slider($data)

	{

		$this->db->insert($this->table,$data);

	}

	public function get_all_setting()

	{

		return $this->db->get($this->table)->result();

	}
	


	public function get_slider_by_id($id)

	{

		$this->db->where('id',$id);

		return $this->db->get($this->table)->result();

	}

	public function update_slider_by_id($id,$data)

	{

		$this->db->where('id',$id);

		$this->db->update($this->table,$data);

	}

	public function get_all_active_slider()

	{

		$this->db->where('status',1);

		return $this->db->get($this->table)->result();

	}

	public function delete_slider_by_id($id)

	{

		$this->db->where('id',$id);

		$this->db->delete($this->table);

	}
	
	/*====get social data====*/
		public function delete_astrology_by_id($id)
	{


		$this->db->where('id',$id);
		$this->db->delete('tbl_social_home');
	}

  			public function get_all_social_front()

	{
       $this->db->where('status','1');
		return $this->db->get('tbl_social_home')->result();

	}


			public function get_all_social()

	{
       // $this->db->where('status','1');
		return $this->db->get('tbl_social_home')->result();

	}
    	public function get_astrology_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('tbl_social_home')->result();
	}
	public function update_astrology_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_social_home',$data);
	}


}

