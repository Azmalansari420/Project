<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// error_reporting(0);
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library("pagination");
		$this->load->model('admin_model');
	   $this->load->helper(array('url', 'html', 'cookie', 'form', 'file'));
	
		
	}
	public function index()
	{
		$pid=0;
		$status='none';
		if(isset($_GET['pid']))
		   {
		$data['status']=$_GET['return'];
		$data['uid']=$_GET['uid'];
		$data['pid']=$_GET['pid'];
		
		$ac=$this->db->where('pid',$data['pid'])->get('project')->row()->status;
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
			      $page="This survery is ". $data['status'];
				  $msg="Your destination of survery closed here your survey status is".$data['status'];
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
		              $new=$this->db->where('pid',$_GET['pid'])->get('project')->row();
				  if($new!='' || $new!=null)
				  {
				      
				      
					 $com=explode('&',$new->$status);
					 $com[1]='uid='.$data['uid'];
					 $lat=implode('&',$com);
					  redirect($lat);
				  }
				  else
				  {
					  $page="This survery is ". $data['status'];
					  $msg="Your destination of survery closed here your survey status is".$data['status'];
				  }
				  }
		           else
		           {
					  $page="They is an problem during survery";
					  $msg="Hi! there is an problem occure on completing of your survey please try gain";
		           }
		
		          }
				 }
				 else
				 {
					 $page="Survery has been expired or removed";
					 $msg="This survery link has been expired or removed from server please go back Thank You!";
				 }
		
		      }
			  else
			  {
				  $page="The Survery not found";
				  $msg="This survery link may be broken or wrong we don't have found survery link please try again";
			  }
		   }
		else
		{
			$page='404 page error';
			$msg='As we know that your are entering in wrong page which is not in our server please go back and come with right direction. Thank You';
			
		}
		
		
$this->show_page($page,$msg,$pid,$status);
	}
	
	function getip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
           }
	
	
	function show_page($page,$msg,$pid,$status)
	{
	$data['page']=$page;
	$data['msg']=$msg;
	if($pid!=0 && $status!='none')
	{
		$res=$this->db->where('pid',$pid)->get('project')->row();
		if($status=='complete')
		{
			redirect($res->complete); 
		}
		elseif($status=='terminate')
		{
			redirect($res->terminate); 
		}
		elseif($status=='quotafull')
		{
			redirect($res->quotafull); 
		}
		else
		{
			$this->load->view('response',$data);
		}
	}
	else
	{
	$this->load->view('response',$data);
	}
	}
	
}

?>