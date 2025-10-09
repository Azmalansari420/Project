<?php
class DashboardModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
        
	function UpdateProfile($post_data,$id)
	{
		$data = array( 
		    'name'      => $post_data['name'] , 
		    'email'     => $post_data['email'],
		    'phone'    => $post_data['phone'],
		  
		);

		$this->db->where('id',$id);
		$result = $this->db->update('tbl_admin', $data);

		if($result){

			 $this->session->email =  $post_data['email'];	
			 $this->session->name =  $post_data['name'];	
			 $this->session->set_flashdata('msg','<div class="alert alert-success">Updated Successfully</div>');
			
		}else{

			$this->session->set_flashdata('msg','<div class="alert alert-danger">Not Upadted, Please Try Again!!!</div>');
		}
		
	}



	
}