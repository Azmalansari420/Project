<?php 
class Welcome_model extends CI_Model{
	
	public function user_login($email,$password)
	{
	
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$rows = $this->db->get('tbl_users')->result();
		 $this->db->last_query();
		
	
		return $rows;
	}

	public function userregister($data='')
	{
		$this->db->insert('tbl_users',$data);
		return $this->db->insert_id();
	}

	public function ApplyJob()
	{

		$postdata['user_refid'] = $this->session->userdata('USER_ID') ;
		$postdata['job_refid'] = $this->session->userdata('applyid') ;
		$postdata['create_date'] = date('Y-m-d h:i:s');	
		$this->db->insert('tbl_apply',$postdata);
		$this->session->unset_userdata('applyid') ;
		return $this->db->insert_id();
	}
	
}
