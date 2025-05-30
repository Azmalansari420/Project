<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// error_reporting(0);
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library("pagination");
		$this->load->model('emp_model');
	   $this->load->helper(array('url', 'html', 'cookie', 'form', 'file'));
	
		
	}
	public function index()
	{
		$emp_id = $this->session->userdata('employee_id');
		if($emp_id!='')
		{
			redirect(base_url('employee/dashboard'));
		}
		else {

          redirect(base_url('admin/login_page'));
		}

	}
	public function check_auth()
	{
		$emp_id = $this->session->userdata('employee_id');
		if($emp_id=='')
		{
			redirect(base_url('admin/login_page'));
		}
	}
	
	public function dashboard()
{

$emp_id = $this->session->userdata('employee_id');
if($emp_id!='')
{
	$data['page']='dashbaord';
	
	//$file='admin/dashbaord';
	$this->load->view('emp/header',$data);
	$this->load->view('emp/dashboard');
	$this->load->view('emp/footer');
	//$this->load->view($file);
}
else {
  $this->session->set_flashdata('category_error', 'Sorry you do not have rights to access this page or your session expired please login');
 redirect(base_url('admin'));
}


}


	public function logout(){

		$this->session->unset_userdata('employee_id');
		$this->session->unset_userdata('name');
    $this->session->unset_userdata('mobile');
	  $this->session->unset_userdata('email');
		$this->session->sess_destroy();
    redirect(base_url('admin'));

	}
	
	
		public function profile()
{
	$this->check_auth();
	$this->db->where("id", $this->session->userdata('employee_id'));
	$data['profile'] = $this->db->get('employee')->row();
	$data['page']='profile';
	$this->load->view('emp/header',$data);
	$this->load->view('emp/profile');
	$this->load->view('emp/footer');
	//$this->load->view('admin/profile',$data);
}

public function profile_update()
{

	$username=$this->input->post('username');
	$email=$this->input->post('email');
	$mobile=$this->input->post('mobile');
	$address=$this->input->post('address');
	$data['name']=$username;
	$data['email']=$email;
	$data['mobile']=$mobile;
	$data['address']=$address;
	$this->db->where('id', $this->session->userdata('employee_id'));
	if($this->db->update('employee', $data))
	{
		$this->session->set_flashdata('category_success', 'Profile Updated Successfully');
	}
	else {
		$this->session->set_flashdata('category_error', 'Sorry profile not updated');
	}
	redirect(base_url('employee/profile'));
}

public function password_change()
{
	$old=$this->input->post('old_pass');
	$new1=$this->input->post('new_pass1');
	$new2=$this->input->post('new_pass2');
	if($new1==$new2)
	{
		$pwd=$this->db->get_where('employee', array('id' => $this->session->userdata('employee_id')))->row()->password;
		if($pwd==$old)
		{
			$data['password']=$new1;
			$this->db->where('id', $this->session->userdata('employee_id'));
				if($this->db->update('employee', $data))
				{
					$this->session->set_flashdata('category_success', 'Your Password has been changed');
				}
				else {
					  $this->session->set_flashdata('category_error', 'Sorry Password not changed due to technical issue please try again');
				}
		}
		else {
		$this->session->set_flashdata('category_error', 'Your old password not matched please enter right password to change');
		}
	}
	else {
		$this->session->set_flashdata('category_error', 'New passwords not matched please try again');
	}
	redirect(base_url('employee/profile'));
}

function all_project()
{
	$this->check_auth();
$data['project']=$this->emp_model->get_my_project();
$data['page']='My Projects';
$this->load->view('emp/header',$data);
	$this->load->view('emp/all_project');
	$this->load->view('emp/footer');
}
function show_report($app)
{
	$this->check_auth();
	$pid=$this->emp_model->url_decode($app);
	$data['project']=$this->emp_model->get_project_info($pid);
	$data['total']=$this->emp_model->get_total_survery($pid);
	$data['com']=$this->emp_model->get_total_action($pid,'complete');
	$data['term']=$this->emp_model->get_total_action($pid,'terminate');
	$data['quota']=$this->emp_model->get_total_action($pid,'quotafull');
	$data['list']=$this->emp_model->get_survery_list($pid);
	$data['page']='Project Report';
$this->load->view('emp/header',$data);
	$this->load->view('emp/project_report');
	$this->load->view('emp/footer');
}

function active_project()
{
	$this->check_auth();
$data['project']=$this->emp_model->get_active_project();
$data['page']='My active Projects';
$this->load->view('emp/header',$data);
	$this->load->view('emp/active_project');
	$this->load->view('emp/footer');
}
function all_reports()
{
	$this->check_auth();
	
	if($this->input->post('date')!=null || $this->input->post('date')!='')
	{
		$date=$this->input->post('date');
		$uid=$this->input->post('uid');
		$pid=$this->input->post('pid');
		$client=$this->input->post('client');
		$project=$this->input->post('proejct');
		$status=$this->input->post('status');
		$ip=$this->input->post('ip');
		$emp_id = $this->session->userdata('employee_id');
	        
		if($date!='')
		{
			$this->db->where('DATE(datetime)', $date);
		}
		if($pid!='')
		{
			$this->db->where('pid',$pid);
		}
		if($uid!='')
		{
			$this->db->where('uid',$uid);
		}
		if($client!='')
		{
			$cl=$this->db->query("select * from project where client='".$client."' and where FIND_IN_SET('".$emp_id."', team)")->result();
			if($cl!='' || $cl!=null)
			{
			$this->db->group_start();
			foreach($cl as $c)
			{
			$this->db->or_where('pid',$c->pid);
			}
			$this->db->group_end();
			}
		}
		if($project!='')
		{
			$cl=$this->db->query("select * from project where name='".$project."'and where FIND_IN_SET('".$emp_id."', team)")->result();
			if($cl!='' || $cl!=null)
			{
			$this->db->group_start();
			foreach($cl as $c)
			{
			$this->db->or_where('pid',$c->pid);
			}
			$this->db->group_end();
			}
		}
		if($status!='')
		{
			$this->db->where('status',$status);
		}
		if($ip!='')
		{
			$this->db->where('ip',$ip);
		}
		
	}
	else
	{
		$date=date('Y-m-d');
		$emp_id = $this->session->userdata('employee_id');
	        
		$this->db->where('DATE(datetime)', $date);
	}
	$data['date']=$date;
	if($pid==null || $pid==''){ $pid='';}
	if($uid==null || $uid==''){ $uid='';}
	if($status==null || $status==''){ $status='';}
	if($client==null || $client==''){ $client='';}
	if($project==null || $project==''){ $project='';}
	if($ip==null || $ip==''){ $ip='';}
	$data['pid']=$pid;
	$data['uid']=$uid;
	$data['status']=$status;
	$data['client']=$client;
	$data['project']=$project;
	$data['ip']=$ip;
	$data['list']=$this->db->order_by('id','desc')->get('redirects')->result();
	$data['page']='All Reports';
$this->load->view('emp/header',$data);
	$this->load->view('emp/all_reports');
	$this->load->view('emp/footer');
}

function summary_reports()
{
	$this->check_auth();
$data['project']=$this->emp_model->get_my_project();
$data['page']='Summary records';
$this->load->view('emp/header',$data);
	$this->load->view('emp/summary_records');
	$this->load->view('emp/footer');
}



}