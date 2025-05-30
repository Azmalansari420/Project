<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class Admin_model extends CI_Model {
	function __construct() {
	parent::__construct();
	$this->load->database();
	}


function get_all_employee(){
	$data=$this->db->order_by('id','desc')->get('employee')->result();
	return $data;
}
function get_approved_employee(){
	$data=$this->db->where('verified','1')->order_by('id','desc')->get('employee')->result();
	return $data;
}
function get_unapproved_employee(){
	$data=$this->db->where('verified','0')->order_by('id','desc')->get('employee')->result();
	return $data;
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

public function get_pid(){
    $row = $this->db->order_by('id', 'desc')->get('project')->row();
    if ($row && isset($row->pid)) {
        $id = (int)$row->pid;  // Cast to integer
        return $id + 1;
    } else {
        return 100000;
    }
}


public function get_uid(){
return 130;
}

public function get_all_project()
{
	$data=$this->db->order_by('id','desc')->get('project')->result();
	return $data;
}
public function get_active_project()
{
	$data=$this->db->order_by('id','desc')->where('status <>','Close')->get('project')->result();
	return $data;
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
function get_total_emp()
{
	$data=$this->db->get('employee')->num_rows();
	return $data;
}
function get_total_veremp()
{
	$data=$this->db->where('verified','1')->get('employee')->num_rows();
	return $data;
}
function get_total_unveremp()
{
	$data=$this->db->where('verified','0')->get('employee')->num_rows();
	return $data;
}

function get_total_project()
{
	$data=$this->db->get('project')->num_rows();
	return $data;
}
function get_total_uncomproject()
{
	$data=$this->db->where('status<>','Close')->get('project')->num_rows();
	return $data;
}
function get_total_comproject()
{
	$data=$this->db->where('status','Close')->get('project')->num_rows();
	return $data;
}

function get_total_sur()
{
	$date=date('Y-m-d');
	$data=$this->db->where('DATE(datetime)', $date)->get('redirects')->num_rows();
	return $data;
}
function get_total_comsur()
{
	$date=date('Y-m-d');
	$data=$this->db->where('DATE(datetime)', $date)->where('status','complete')->get('redirects')->num_rows();
	return $data;
}
function get_total_termsur()
{
	$date=date('Y-m-d');
	$data=$this->db->where('DATE(datetime)', $date)->where('status','terminate')->get('redirects')->num_rows();
	return $data;
}
function get_total_quotasur()
{
	$date=date('Y-m-d');
	$data=$this->db->where('DATE(datetime)', $date)->where('status','quotafull')->get('redirects')->num_rows();
	return $data;
}



function send_notification($type1,$id1,$name,$sub,$type2,$id2,$url,$msg,$icon)
{
	$data['send_by']='{"type": "'.$type1.'","id": "'.$id1.'","name": "'.$name.'"}';
	$data['send_to']='[{"type":"'.$type2.'","id":"'.$id2.'","seen":"0"}]';
	$data['send_time']=time();
	$data['url']=$url;
	$data['msg']=$msg;
	$data['subject']=$sub;
	$data['icon']=$icon;
	$data['notify']='1';
	if($this->db->insert('notify',$data))
	{
		return true;
	}
	else
	{
		return false;
	}

}
function update_wallet_amount($id,$total)
{
	$data['wallet_amount']=$total;
	$this->db->where('id',$id)->update('employee',$data);
}

function get_all_transaction(){
	$data=$this->db->order_by('id','desc')->get('transaction')->result();
	return $data;
}

function get_transaction_request(){
	$data=$this->db->order_by('id','desc')->where('status','0')->get('transaction')->result();
	return $data;
}
function get_withdrawal_request(){
	$data=$this->db->order_by('id','desc')->where('status','0')->where('action','debit')->get('transaction')->result();
	return $data;
}
function get_cash_request(){
	$data=$this->db->order_by('id','desc')->where('status','0')->where('type','cash')->get('transaction')->result();
	return $data;
}

function get_all_partner(){
	$data=$this->db->order_by('id','desc')->get('partner')->result();
	return $data;
}

}