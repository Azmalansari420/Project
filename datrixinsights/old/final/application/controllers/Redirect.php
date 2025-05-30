<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller {

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
	
	
public function complete()
{
    
	if(isset($_GET['pid']))
	{
	    
		$data['uid']=$_GET['uid'];
		$data['pid']=$_GET['pid'];
		 $data['datetime']=date('Y-m-d H:i:s');
		 
		 $temp_ip = $_SERVER['REMOTE_ADDR'];
		 $ip_temp = $this->db->get_where("redirects",array("ip"=>$temp_ip,"status"=>"complete",))->result_object();
		 if(empty($ip_temp))
		 {
			$ac=$this->db->where('pid',$data['pid'])->get('project')->row()->status;
			// $data['uid'] = $this->db->where('pid',$data['pid'])->get('project')->row()->auto_id;
			//$data['partner_id']=$this->db->where('pid',$data['pid'])->get('project')->row()->partner;
			if($ac=='Active')
			{
			    $data['ip']=$this->getip();
				$data['status']='complete';
				$quad=$this->db->where('pid',$data['pid'])->where('uid',$data['uid'])->get('redirects')->row()->id;
			
				if($quad!='' || $quad!=null)
				{
				   $data1['datetime']=date('Y-m-d H:i:s');
				    $data1['status']='complete';
				    if($this->db->where('id',$quad)->update('redirects',$data1))
				    {
				       $pp=$this->db->where('id',$quad)->get('redirects')->row()->partner_id;
				        
				        $new=$this->db->where('pid',$data['pid'])->get('project')->row();
				  if($new!='' || $new!=null)
				  {
				     $part=explode(',',$new->partner);
				      
				      $key = array_search ($pp, $part);
				     
				      if($key!='' || $new->partner!='')
				      {
				         $comp=explode(',',$new->complete);
				          
				          $com=$comp[$key];
				         if($com!='')
				         {
					      $lat=str_replace('xxxx', $data['uid'], $com);
					      redirect($lat);
				         }
				         else
				         {
				             $page="This survey is completed";
					  $msg="Your destination of survey closed here your survey status is completed";
					  $this->show_page($page,$msg,$data);
				         }
				      }
				      else
				      {
				          
				          $page="This survey is completed";
					  $msg="Your destination of survey closed here your survey status is completed";
					 $this->show_page($page,$msg,$data);
				      }
					 
				  }
				  else
				  {
				      
				      $page="This survey is completed";
					  $msg="Your destination of survey closed here your survey status is completed";
					  $this->show_page($page,$msg,$data);
				  }
				    }
				    else
				    {
				        
				        $page="This survey is completed";
					  $msg="Your destination of survey closed here your survey status is completed";
					  $this->show_page($page,$msg,$data);
				    }
				}
				else
				{
				    
				if($this->db->insert('redirects',$data))
		       {
				  
				      
					  $page="This survey is completed";
					  $msg="Your destination of survey closed here your survey status is completed";
					 $this->show_page($page,$msg,$data);
				  
		        }
				else
				{
				   
					  $page="This survey closed here";
					  $msg="Your destination of survey closed here your survey status is uncompleted";
					  $this->show_page($page,$msg,$data);
				}
				}
			}
			else
			{ 
			    $data['partner_id']=0;
			    $data['status']='complete';
			    $data['ip']=$this->getip();
			   if($this->db->insert('redirects',$data))
		       {
				  
				      
					  $page="This survey is completed";
					  $msg="Your destination of survey closed here your survey status is completed";
					 $this->show_page($page,$msg,$data);
				  
		        }
				else
				{
				   
					  $page="This survey closed here";
					  $msg="Your destination of survey closed here your survey status is uncompleted";
					  $this->show_page($page,$msg,$data);
				}
			}
		}
		else
		{
			$this->load->view('already',$data);
		}
	}
	else
	{
	    
		$page="This survey not found";
		$msg="survey not found please take survey with correct url";
		$this->show_page($page,$msg,$data);
	}

}


public function terminate()
{
	if(isset($_GET['pid']))
	{
		$data['uid']=$_GET['uid'];
		$data['pid']=$_GET['pid'];
		$data['datetime']=date('Y-m-d H:i:s');
		$ac=$this->db->where('pid',$data['pid'])->get('project')->row()->status;


		$temp_ip = $_SERVER['REMOTE_ADDR'];
		 $ip_temp = $this->db->get_where("redirects",array("ip"=>$temp_ip,"status"=>"terminate",))->result_object();
		 if(empty($ip_temp))
		{
			if($ac=='Active')
			{
				$data['ip']=$this->getip();
				$data['status']='terminate';
				$quad=$this->db->where('pid',$data['pid'])->where('uid',$data['uid'])->get('redirects')->row()->id;
				if($quad!='' || $quad!=null)
				{
				   $data1['datetime']=date('Y-m-d H:i:s');
				    $data1['status']='terminate';
				    if($this->db->where('id',$quad)->update('redirects',$data1))
				    {
				       $pp=$this->db->where('id',$quad)->get('redirects')->row()->partner_id;
				        
				        $new=$this->db->where('pid',$data['pid'])->get('project')->row();
				  if($new!='' || $new!=null)
				  {
				     $part=explode(',',$new->partner);
				      
				      $key = array_search ($pp, $part);
				     
				      if($key!='' || $new->partner!='')
				      {
				         $comp=explode(',',$new->terminate);
				          
				          $com=$comp[$key];
				         if($com!='')
				         {
					      $lat=str_replace('xxxx', $data['uid'], $com);
					      redirect($lat);
				         }
				         else
				         {
				             $page="This survey is Terminated";
					  $msg="Your destination of survey closed here your survey status is Terminated";
					  $this->show_page($page,$msg,$data);
				         }
				      }
				      else
				      {
				          
				          $page="This survey is Terminated";
					  $msg="Your destination of survey closed here your survey status is Terminated";
					  $this->show_page($page,$msg,$data);
				      }
					 
				  }
				  else
				  {
				      
				      $page="This survey is Terminated";
					  $msg="Your destination of survey closed here your survey status is Terminated";
					 $this->show_page($page,$msg,$data);
				  }
				    }
				    else
				    {
				        
				        $page="This survey is Terminated";
					  $msg="Your destination of survey closed here your survey status is Terminated";
					  $this->show_page($page,$msg,$data);
				    }
				}
				else
				{
				if($this->db->insert('redirects',$data))
		       {
				  
					  $page="This survey is terminate";
					  $msg="Your destination of survey closed here your survey status is terminated";
					  $this->show_page($page,$msg,$data);
				  
		        }
				else
				{
					  $page="This survey closed here";
					  $msg="Your destination of survey closed here your survey status is uncompleted";
					  $this->show_page($page,$msg,$data);
				}
			}
			}
			else
			{
				$data['partner_id']=0;
			    $data['status']='terminate';
			    $data['ip']=$this->getip();
			   if($this->db->insert('redirects',$data))
		       {
				  
				      
					  $page="This survey is terminated";
					  $msg="Your destination of survey closed here your survey status is terminated";
					 $this->show_page($page,$msg,$data);
				  
		        }
				else
				{
				   
					  $page="This survey closed here";
					  $msg="Your destination of survey closed here your survey status is uncompleted";
					  $this->show_page($page,$msg,$data);
				}
			}
		}
		else
		{
			$this->load->view('already',$data);
		}
	}
	else
	{
		$page="This survey not found";
					  $msg="survey not found please take survey with correct url";
					  $this->show_page($page,$msg,$data);
	}
}

public function quotafull()
{
	if(isset($_GET['pid']))
	{
		$data['uid']=$_GET['uid'];
		$data['pid']=$_GET['pid'];
		$data['datetime']=date('Y-m-d H:i:s');
		$ac=$this->db->where('pid',$data['pid'])->get('project')->row()->status;
	
		
		$temp_ip = $_SERVER['REMOTE_ADDR'];
		 $ip_temp = $this->db->get_where("redirects",array("ip"=>$temp_ip,"status"=>"quotafull",))->result_object();
		 if(empty($ip_temp))
		{
			if($ac=='Active')
			{
				$data['ip']=$this->getip();
				$data['status']='quotafull';
				$quad=$this->db->where('pid',$data['pid'])->where('uid',$data['uid'])->get('redirects')->row()->id;
			
				if($quad!='' || $quad!=null)
				{
				   $data1['datetime']=date('Y-m-d H:i:s');
				    $data1['status']='quotafull';
				    if($this->db->where('id',$quad)->update('redirects',$data1))
				    {
				       $pp=$this->db->where('id',$quad)->get('redirects')->row()->partner_id;
				        
				        $new=$this->db->where('pid',$data['pid'])->get('project')->row();
				  if($new!='' || $new!=null)
				  {
				     $part=explode(',',$new->partner);
				      
				      $key = array_search ($pp, $part);
				     
				      if($key!='' || $new->partner!='')
				      {
				         $comp=explode(',',$new->quotafull);
				          
				          $com=$comp[$key];
				         if($com!='')
				         {
					      $lat=str_replace('xxxx', $data['uid'], $com);
					      redirect($lat);
				         }
				         else
				         {
				             $page="This survey is quotafull";
					  $msg="Your destination of survey closed here your survey status is quotafull";
					  $this->show_page($page,$msg,$data);
				         }
				      }
				      else
				      {
				          
				          $page="This survey is quotafull";
					  $msg="Your destination of survey closed here your survey status is quotafull";
					  $this->show_page($page,$msg,$data);
				      }
					 
				  }
				  else
				  {
				      
				      $page="This survey is quotafull";
					  $msg="Your destination of survey closed here your survey status is quotafull";
					 $this->show_page($page,$msg,$data);
				  }
				    }
				    else
				    {
				        
				        $page="This survey is quotafull";
					  $msg="Your destination of survey closed here your survey status is quotafull";
					  $this->show_page($page,$msg,$data);
				    }
				}
				else
				{
				if($this->db->insert('redirects',$data))
		       {
				  
					  $page="This survey is quotafull";
					  $msg="Your destination of survey closed here your survey status is quotafull";
					  $this->show_page($page,$msg,$data);
				  
		        }
				
			}
			}
			else
			{
				$data['partner_id']=0;
			    $data['status']='quotafull';
			    $data['ip']=$this->getip();
			   if($this->db->insert('redirects',$data))
		       {
				  
				      
					  $page="This survey is Quotafull";
					  $msg="Your destination of survey closed here your survey status is quotafull";
					  $this->show_page($page,$msg,$data);
				  
		        }
				else
				{
				   
					  $page="This survey closed here";
					  $msg="Your destination of survey closed here your survey status is uncompleted";
					 $this->show_page($page,$msg,$data);
				}
			}
		}
		else
		{
			$this->load->view('already',$data);
		}
	}
	else
	{
		$page="This survey not found";
					  $msg="survey not found please take survey with correct url";
					  $this->show_page($page,$msg,$data);
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
	
	
	function show_page($page,$msg,$total)
	{
	$data['page']=$page;
	$data['msg']=$msg;
	$data['total']=$total;
	$this->load->view('response',$data);
	
	}
	
	
}

?>