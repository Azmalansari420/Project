<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class Emp_model extends CI_Model {
	function __construct() {
	parent::__construct();
	$this->load->database();
	}
	
	function get_total_project()
{
	$emp_id = $this->session->userdata('employee_id');
	$data=$this->db->where('FIND_IN_SET("'.$emp_id.'", team)')->get('project')->num_rows();
	return $data;
}
function get_total_uncomproject()
{
	$emp_id = $this->session->userdata('employee_id');
	$data=$this->db->where('FIND_IN_SET("'.$emp_id.'", team)')->where('status<>','Close')->get('project')->num_rows();
	return $data;
}
function get_total_comproject()
{
	$emp_id = $this->session->userdata('employee_id');
	$data=$this->db->where('FIND_IN_SET("'.$emp_id.'", team)')->where('status','Close')->get('project')->num_rows();
	return $data;
}
function get_my_project()
{
	$emp_id = $this->session->userdata('employee_id');
	$data=$this->db->where('FIND_IN_SET("'.$emp_id.'", team)')->get('project')->result();
	return $data;
}

function get_active_project()
{
	$emp_id = $this->session->userdata('employee_id');
	$data=$this->db->where('FIND_IN_SET("'.$emp_id.'", team)')->where('status','Active')->get('project')->result();
	return $data;
}
function get_total_sur()
{
	$date=date('Y-m-d');
	$pro=$this->get_my_project();
	$count=0;
	foreach($pro as $p)
	{
		$c=$this->db->where('DATE(datetime)', $date)->where('pid',$p->pid)->get('redirects')->num_rows();
		$count=$count+$c;
	}
	return $count;
}
function get_total_comsur()
{
	$date=date('Y-m-d');
	$pro=$this->get_my_project();
	$count=0;
	foreach($pro as $p)
	{
		$c=$this->db->where('DATE(datetime)', $date)->where('pid',$p->pid)->where('status','complete')->get('redirects')->num_rows();
		$count=$count+$c;
	}
	return $count;
	
}
function get_total_termsur()
{
	$date=date('Y-m-d');
	$pro=$this->get_my_project();
	$count=0;
	foreach($pro as $p)
	{
		$c=$this->db->where('DATE(datetime)', $date)->where('pid',$p->pid)->where('status','terminate')->get('redirects')->num_rows();
		$count=$count+$c;
	}
	return $count;
}
function get_total_quotasur()
{
	$date=date('Y-m-d');
	$pro=$this->get_my_project();
	$count=0;
	foreach($pro as $p)
	{
		$c=$this->db->where('DATE(datetime)', $date)->where('pid',$p->pid)->where('status','quotafull')->get('redirects')->num_rows();
		$count=$count+$c;
	}
	return $count;
}

function url_encode($id)
{
	$txt="this url is encoded with base_".$id."_alfa. thank you";
	$code=base64_encode($txt);
	return $code;
}
function url_decode($id)
{
	$cc=base64_decode($id);
	$data=explode('_',$cc);
	$txt=$data[1];
	
	return $txt;
}

function get_project_info($pid)
{
	$data=$this->db->where('pid',$pid)->get('project')->row();
	return $data;
}
function get_total_survery($pid)
{
	$data=$this->db->where('pid',$pid)->get('redirects')->num_rows();
	return $data;
}
function get_total_action($pid,$status)
{
	$data=$this->db->where('pid',$pid)->where('status',$status)->get('redirects')->num_rows();
	return $data;

}
function get_survery_list($pid)
{
	$data=$this->db->where('pid',$pid)->get('redirects')->result();
	return $data;
}
	
	
}