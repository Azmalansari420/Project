<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

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
	public function index()
	{
		echo '<center><h3>Sorry no any survey found please try again with correct url</h3></center>';
	}
	
	public function start()
	{
		if(isset($_GET['pid']) && isset($_GET['uid']))
		{
			$pid=$_GET['pid'];
			$uid=$_GET['uid'];
		if($pid=='')
		{
			echo '<center><h3>Sorry no any survey found please try again with correct url</h3></center>';
		}
		else
		{
			if($uid=='')
			{
				echo '<center><h3>This survey is already taken try with new user id thank you</h3></center>';
			}
			else
			{
			    
			    $pp=explode('Pe',$pid);
				$data=$this->db->where('id',$pp[1])->get('project')->row_array();
				
				if(!empty($data))
				{
				    $check=$this->db->where('pid',$data['pid'])->where('uid',$uid)->get('redirects')->num_rows();
				   
				    if($check!=0)
				    {
				       echo '<center><h3>This survey already taken with this uid. Please try with another uid</h3></center>';
				    }
				    else
				    {
					if($data['status']=='Active')
					{
					
					
		$data1['uid']=$uid;			
		$data1['pid']=$data['pid'];
		$data1['partner_id']=$pp[0];
		$data1['ip']=$this->getip();
		$data1['status']='terminated';
		$data1['datetime']=date('Y-m-d H:i:s');
		if($this->db->insert('redirects',$data1))
		{
		    $url=$data['link'];
					$new=$url.''.$uid;
					redirect($new);
		}
		else
		{
		    echo '<center><h3>Not valid survey please try again</h3></center>';
		}
				
					
					}
					else
					{
						echo '<center><h3>This survey is expired or removed please come with correct url</h3></center>';
					}
				    }
				}
				else
				{
					echo '<center><h3>This survey is not found please try with new url</h3></center>';
				}
			}
		}
	}
	else
	{
		echo '<center><h3>This survey is already completed try with correct url</h3></center>';
	}
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
	
}