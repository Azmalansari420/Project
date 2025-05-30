<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// error_reporting(0);
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library("pagination");
		$this->load->model('admin_model');
	   $this->load->helper(array('url', 'html', 'cookie', 'form', 'file'));
	date_default_timezone_set("Asia/Kolkata");
		
	}
	public function redirect()
	{
		$pid=0;
		$status='none';
		if(isset($_GET['pid']))
		   {
		$data['status']=$_GET['return'];
		$data['uid']=$_GET['uid'];
		$data['pid']=$_GET['pid'];
		
		$ac=$this->db->where('pid',$data['pid'])->get('project')->row()->status;
		$data['partner_id']=$this->db->where('pid',$data['pid'])->get('project')->row()->partner;
		   if($ac!='' && $ac!=null)
		     {
				 if($ac=='Active')
				 {
					 
		       $data['ip']=$this->getip();
		       $info=file_get_contents("http://ipinfo.io/");
		       if($info!='')
			   {
			    $data['info']=$info;
			    }
		       if($this->db->insert('redirects',$data))
		       {
				   $pid=$data['pid'];
		$status=$data['status'];
			      $page="This survey is ". $data['status'];
				  $msg="Your destination of survey closed here your survey status is".$data['status'];
		        }
		        else
		        {
			     $data['status']=$_GET['return'];
				$data['uid']=$_GET['pid'];
				$data['pid']=$_GET['pid'];
				$data['ip']=$this->getip();
				
				  if($this->db->insert('redirects',$data))
				  {
					  $pid=$data['pid'];
		$status=$data['status'];
					  $page="This survey is ". $data['status'];
					  $msg="Your destination of survey closed here your survey status is".$data['status'];
				  }
		           else
		           {
					  $page="They is an problem during survey";
					  $msg="Hi! there is an problem occure on completing of your survey please try gain";
		           }
		
		          }
				 }
				 else
				 {
					 $page="survey has been expired or removed";
					 $msg="This survey link has been expired or removed from server please go back Thank You!";
				 }
		
		      }
			  else
			  {
				  $page="The survey not found";
				  $msg="This survey link may be broken or wrong we don't have found survey link please try again";
			  }
		   }
		else
		{
			$page='404 page error';
			$msg='As we know that your are entering in wrong page which is not in our server please go back and come with right direction. Thank You';
			
		}	
		
$this->show_page($page,$msg,$data);
	}
	
}