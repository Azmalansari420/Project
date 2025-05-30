<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id!='')
		{
			redirect(base_url('admin/dashboard'));
		}
		else {

          redirect(base_url('admin/login_page'));
		}

	}
	public function check_auth()
	{
		$admin_id = $this->session->userdata('admin_id');
		if($admin_id=='')
		{
			redirect(base_url('admin/login_page'));
		}
	}
	public function login_page()
{
	
	$this->load->view('admin/login');
}
public function login(){
      
			$email = $this->input->post('email');
			$password = $this->input->post('password');
             $this->db->group_start();
				 $this->db->where('mobile',$email);
			 
				$this->db->or_where('email',$email);
			 $this->db->group_end();
			$this->db->where('password', $password);
			
				 $query1 = $this->db->get('admin')->num_rows();
				
				if($query1 > 0)
				{
					$this->db->where(array("email"=>$email,));
					$query = $this->db->get('admin')->row();
				// 	print_r($query);
					if($query->status!=0)
					{
					
					$info=file_get_contents("http://ipinfo.io/");
					if($info!='')
					{
					$data['login_info']=$info;
			   	}
					$data['last_login']=date('Y-m-d h:r:s');
					$this->db->where('admin_id', $query->admin_id);
                    $this->db->update('admin',$data);

					
				// 	$this->session->userdata('admin_id');
					$this->session->set_flashdata('category_success', 'Welcome back <b>'.$query->username.'</b>');
					$session_data=array(
						'admin_id'=>$query->admin_id,
						'username'=>$query->username,
						'email'=>$query->email,
						'mobile'=>$query->mobile,
						'role'=>$query->role,
						'projects'=>$query->projects,
						'image'=>$query->image

					);
				   $this->session->set_userdata($session_data);
				//   die;
				   	if($query->role=="admin")
					   redirect(base_url('admin/dashboard'));
					else
						redirect(base_url('admin/all_project'));
				  }
					else {
						$this->session->set_flashdata('category_error', 'Sorry <b>'.$query->username.'</b> your account has been blocked please contact administrator');
            redirect(base_url('admin'));
					}
				}
				else {
					$this->db->group_start();
					$this->db->where('mobile',$email);
			 
				$this->db->or_where('email',$email);
			 $this->db->group_end();
			$this->db->where('password', $password);
			
				 $query1 = $this->db->get('employee')->num_rows();
				
				if($query1 > 0)
				{
					$query = $this->db->get('employee')->row();
					if($query->verified!=0)
					{
					$session_data=array(
						'employee_id'=>$query->id,
						'name'=>$query->name,
						'email'=>$query->email,
						'mobile'=>$query->mobile
					);
					$info=file_get_contents("http://ipinfo.io/");
					if($info!='')
					{
					$data['login_info']=$info;
			     	}
					$data['last_login']=date('Y-m-d h:r:s');
					$this->db->where('id', $query->id);
          $this->db->update('employee',$data);

					$this->session->set_userdata($session_data);
					$this->session->set_flashdata('category_success', 'Welcome back <b>'.$query->name.'</b>');
				   redirect(base_url('employee/dashboard'));
				   
				  }
					else {
						$this->session->set_flashdata('category_error', 'Sorry <b>'.$query->name.'</b> your account has been blocked please contact administrator');
            redirect(base_url('admin'));
					}
				}
				else
				{
		$this->session->set_flashdata('category_error', 'Sorry We did not find your account please check your email or password');
         redirect(base_url('admin'));
		 
				}
				}
  	}

  	public function dashboard()
{
 
$admin_id = $this->session->userdata('admin_id');
if($admin_id!='')
{
	$data['page']='dashbaord';
	
	//$file='admin/dashbaord';
	$this->load->view('include/header',$data);
	$this->load->view('admin/dashboard');
	$this->load->view('include/footer');
	//$this->load->view($file);
}
else {
  $this->session->set_flashdata('category_error', 'Sorry you do not have rights to access this page or your session expired please login');
 redirect(base_url('admin'));
}


}


	public function logout(){

		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('username');
    $this->session->unset_userdata('role');
    $this->session->unset_userdata('mobile');
	  $this->session->unset_userdata('email');
		$this->session->sess_destroy();
    redirect(base_url('admin'));

	}


	public function profile()
{
	$this->check_auth();
	$this->db->where("admin_id", $this->session->userdata('admin_id'));
	$data['profile'] = $this->db->get('admin')->row();
	$data['page']='profile';
	$this->load->view('include/header',$data);
	$this->load->view('admin/profile');
	$this->load->view('include/footer');
	//$this->load->view('admin/profile',$data);
}

public function profile_update()
{

	$username=$this->input->post('username');
	$email=$this->input->post('email');
	$data['username']=$username;
	$data['email']=$email;
	$this->db->where('admin_id', $this->session->userdata('admin_id'));
	if($this->db->update('admin', $data))
	{
		$this->session->set_flashdata('category_success', 'Profile Updated Successfully');
	}
	else {
		$this->session->set_flashdata('category_error', 'Sorry profile not updated');
	}
	redirect(base_url('admin/profile'));
}

public function password_change()
{
	$old=$this->input->post('old_pass');
	$new1=$this->input->post('new_pass1');
	$new2=$this->input->post('new_pass2');
	if($new1==$new2)
	{
		$pwd=$this->db->get_where('admin', array('admin_id' => $this->session->userdata('admin_id')))->row()->password;
		if($pwd==sha1($old))
		{
			$data['password']=sha1($new1);
			$this->db->where('admin_id', $this->session->userdata('admin_id'));
				if($this->db->update('admin', $data))
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
	redirect(base_url('admin/profile'));
}

function add_employee()
{
	$this->check_auth();
	$this->db->where("admin_id", $this->session->userdata('admin_id'));
	$data['profile'] = $this->db->get('admin')->row();
	$data['page']='New employee';
	$this->load->view('include/header',$data);
	$this->load->view('admin/new_employee');
	$this->load->view('include/footer');
}
function add_new_employee()
{
	
	$data['name']=$this->input->post('name');
	$data['email']=$this->input->post('email');
	$data['mobile']=$this->input->post('mobile');
	$data['password']=$this->input->post('password');
$this->db->where('mobile',$data['mobile']);
$employee=$this->db->get('employee')->row()->id;
if($employee!='')
{
	$this->session->set_flashdata('category_error', 'This Mobile number already in used');
	redirect(base_url('admin/add_employee'));
}
else
{
	$this->db->insert('employee',$data);
	redirect(base_url('admin/all_unapproved_employee'));
}

}

function all_employee()
{
	$this->check_auth();
$data['partners']=$this->admin_model->get_all_employee();
$data['page']='All employees';
$this->load->view('include/header',$data);
	$this->load->view('admin/all_employee');
	$this->load->view('include/footer');
}

function all_approved_employee()
{
	$this->check_auth();
$data['partners']=$this->admin_model->get_approved_employee();
$data['page']='All Approved employee';
$this->load->view('include/header',$data);
	$this->load->view('admin/all_approved_employee');
	$this->load->view('include/footer');
}

function all_unapproved_employee()
{
	$this->check_auth();
$data['partners']=$this->admin_model->get_unapproved_employee();
$data['page']='All Unapproved employee';
$this->load->view('include/header',$data);
	$this->load->view('admin/all_unapproved_employee');
	$this->load->view('include/footer');
}
function status_change($app)
{

	$id=$this->admin_model->url_decode($app);
	
	$ver=$this->db->where('id',$id)->get('employee')->row()->verified;
	if($ver==0)
	{
		$ver=1;
	}
	else{
		$ver=0;
	}
	$data['verified']=$ver;
	if($this->db->where('id',$id)->update('employee',$data))
	{
		$this->session->set_flashdata('category_success', 'Status changed Successfully');
	}
	else
	{
		$this->session->set_flashdata('category_error', 'There is an error occure please try again');
	}
	
	redirect(base_url('admin/all_employee'));
}

function delete_employee($app)
{
	$id=$this->admin_model->url_decode($app);
	$this->db->where('id',$id);
	
	if($this->db->delete('employee'))
	{
		$this->session->set_flashdata('category_success', 'employee deleted Successfully');
	}
	else
	{
		$this->session->set_flashdata('category_error', 'There is an error occure please try again');
	}
	
	redirect(base_url('admin/all_employee'));
}

function edit_employee($app)
{
	$id=$this->admin_model->url_decode($app);
	$this->check_auth();
	$this->db->where('id',$id);
	$data['partner']=$this->db->get('employee')->row();
	$data['page']='Edit employee';
	
	$this->load->view('include/header',$data);
	$this->load->view('admin/edit_employee');
	$this->load->view('include/footer');
}
function update_employee(){
	$id=$this->input->post('id');
	$data['name']=$this->input->post('name');
	$data['email']=$this->input->post('email');
	$data['mobile']=$this->input->post('mobile');
	$data['password']=$this->input->post('password');
$this->db->where('mobile',$data['mobile'])->where('id <>',$id);
$employee=$this->db->get('employee')->row()->id;
if($employee!='')
{
	$this->session->set_flashdata('category_error', 'This Mobile number already in used');
	redirect(base_url('admin/all_employee'));
}
else
{
	$this->db->where('id',$id);
	$this->db->update('employee',$data);
	$this->session->set_flashdata('category_success', 'employee Details updated');
	redirect(base_url('admin/all_employee'));
}
}

function view_profile($app)
{
	$this->check_auth();
	$id=$this->admin_model->url_decode($app);
	$this->db->where('id',$id);
	$data['partner']=$this->db->get('employee')->row();
	$data['page']='employee Profile';
	$this->load->view('include/header',$data);
	$this->load->view('admin/view_employee');
	$this->load->view('include/footer');
}


function add_partners()
{
	$this->check_auth();
	$this->db->where("admin_id", $this->session->userdata('admin_id'));
	$data['profile'] = $this->db->get('admin')->row();
	$data['page']='New Patner';
	$this->load->view('include/header',$data);
	$this->load->view('admin/add_partner');
	$this->load->view('include/footer');
}
function add_new_partner()
{
	
	$data['name']=$this->input->post('name');
	$data['email']=$this->input->post('email');
	$data['mobile']=$this->input->post('mobile');
	$data['complete']=$this->input->post('complete');
	$data['terminate']=$this->input->post('terminate');
	$data['quotafull']=$this->input->post('quotafull');
$this->db->where('email',$data['email']);
$partner=$this->db->get('partner')->row()->id;
if($partner!='')
{
	$this->session->set_flashdata('category_error', 'This Email ID already in used');
	redirect(base_url('admin/add_partners'));
}
else
{
	$this->db->insert('partner',$data);
	redirect(base_url('admin/all_partners'));
}

}

function all_partners()
{
	$this->check_auth();
$data['partners']=$this->admin_model->get_all_partner();
$data['page']='All Partners';
$this->load->view('include/header',$data);
	$this->load->view('admin/all_partner');
	$this->load->view('include/footer');
}

function edit_partner($app)
{
	$id=$this->admin_model->url_decode($app);
	$this->check_auth();
	$this->db->where('id',$id);
	$data['partner']=$this->db->get('partner')->row();
	$data['page']='Edit Partner';
	
	$this->load->view('include/header',$data);
	$this->load->view('admin/edit_partner');
	$this->load->view('include/footer');
}
function update_partner(){
	$id=$this->input->post('id');
	$data['name']=$this->input->post('name');
	$data['email']=$this->input->post('email');
	$data['mobile']=$this->input->post('mobile');
	$data['complete']=$this->input->post('complete');
	$data['terminate']=$this->input->post('terminate');
	$data['quotafull']=$this->input->post('quotafull');
$this->db->where('email',$data['email'])->where('id <>',$id);
$partner=$this->db->get('partner')->row()->id;
if($partner!='')
{
	$this->session->set_flashdata('category_error', 'This Email ID already in used');
	redirect(base_url('admin/all_partners'));
}
else
{
	$this->db->where('id',$id);
	$this->db->update('partner',$data);
	$this->session->set_flashdata('category_success', 'Partner Details updated');
	redirect(base_url('admin/all_partners'));
}
}

public function add_new_project(){
	$this->check_auth();
	$data['page']='Add New Project';
	// $this->db->where("role !=", "admin");
	$data['clients'] = $this->db->get("admin")->result_object();


	$this->load->view('include/header',$data);
	$this->load->view('admin/add_new_project',$data);
	$this->load->view('include/footer');
}

public function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

public function project_add_action(){

$data['pid']=$this->input->post('pid');
$data['uid']=$this->input->post('uid');
$data['name']=$this->input->post('project');
$data['client']=$this->input->post('client');
$data['link']=$this->input->post('link');
$data['cid']=$this->input->post('cid');


 $s = '';
    for ($i = 0; $i < 5; $i++) {
        if ($s) {
            $s .= '-';
        }
        $s .= bin2hex(openssl_random_pseudo_bytes(2));
    }
   $s;


$data['auto_id'] = $s;
$data['cpi']=number_format($this->input->post('cpi'),2);
$data['description']=$this->input->post('msg');
  $id=$this->db->where('pid',$this->input->post('pid'))->get('project')->row()->id;
  if($id!='' || $id!=null)
  {
	  $this->session->set_flashdata('category_error', 'This PID already exist please try with another PID');
   	$this->redirect_back();
  }
  else
  {
	  if($this->db->insert('project',$data))
	  {
		  $this->session->set_flashdata('category_success', 'New project created successfully');
	redirect(base_url('admin/all_project'));
	  }
	  else{
	  
	  $this->session->set_flashdata('category_error', 'There is a techincal issue please try again or contact support');
   	$this->redirect_back();
	  }
	
  }
}

function all_project()
{
	$this->check_auth();
	if($this->session->userdata('role')=="admin"){
		$data['project']=$this->admin_model->get_all_project();
	}
	else
	{

		$projects = $this->db->get_where("project",array("cid"=>$this->session->userdata("admin_id"),))->result_object();
		$data['project'] = $projects;
		// $data['project'] = $this->db->get_where("project",$projects);
	}

$data['page']='All Projects';
$this->load->view('include/header',$data);
	$this->load->view('admin/all_project');
	$this->load->view('include/footer');
}
 function project_payroll($app)
 {
	 $id=$this->admin_model->url_decode($app);
	$pay=$this->db->where('id',$id)->get('project')->row()->payroll;
	if($pay==0)
	{
		$data['payroll']='1';
		$data['status']='Close';
		if($this->db->where('id',$id)->update('project',$data))
		{
			$this->session->set_flashdata('category_success', 'Payroll has been done now this project is closed');
		$this->redirect_back();
		}
		else
		{
			$this->session->set_flashdata('category_error', 'There is a techincal issue please try again or contact support');
   	$this->redirect_back();
		}
	}
	else
	{
		$this->session->set_flashdata('category_error', 'Payroll aleady created for this project');
   	$this->redirect_back();
	}
	
 }
 
 function project_status($id,$status)
 {
	 $data['status']=$status;
	 if($this->db->where('id',$id)->update('project',$data))
	 {
		 echo 'yes';
	 }
	 else
	 {
		 echo 'no';
	 }
 }
function get_team($id)
{
	$emp=$this->db->where('verified','1')->get('employee')->result();
	$html='';
	$team=$this->db->where('id',$id)->get('project')->row()->team;
	if($team!='' || $team!=null)
	{
		$res=explode(',',$team);	
	}
	else
	{
		$res[0]=0;
	}
	foreach($emp as $e)
	{
		if(in_array($e->id,$res)){
		$html=$html.'<option value="'.$e->id.'" selected >'.$e->name.'</option>';
		}
		else
		{
			$html=$html.'<option value="'.$e->id.'" >'.$e->name.'</option>';
		}
	}
	echo $html;
	
	
}
function project_add_member()
{
	$team=$this->input->post('team');
	$id=$this->input->post('id');
	$tt=implode(',',$team);
	$data['team']=$tt;
	if($this->db->where('id',$id)->update('project',$data))
	{
		$this->session->set_flashdata('category_success', 'Team assigned successfully');
		$this->redirect_back();
	}
	else
	{
		$this->session->set_flashdata('category_error', 'A problem occure during team assign try again');
		$this->redirect_back();
	}
}


function get_partner($id)
{
	$part=$this->db->order_by('id','desc')->get('partner')->result();
	$html='';
	$partn=$this->db->where('id',$id)->get('project')->row();
	
	$pp=explode(',',$partn->partner);
	$com=explode(',',$partn->complete);
	$term=explode(',',$partn->terminate);
	$quot=explode(',',$partn->quotafull);
	if(empty($pp))
	{
	   $html='	 <div class="talk">
										<div class="form-group">
								<label>Choose Partner</label>
								<select id="new1" name="partner[]" required class="form-control new1" >';
								foreach($part as $e){
			
			$html=$html.'<option value="'.$e->id.'" >'.$e->name.'</option>';
		
	   }
	   $html=$html.'</select>
									</div>
									
									<div class="form-group same">
									<label>Complete URL</label>
									<input type="text" name="complete[]" class="form-control com1" data="com" placeholder="Enter complete URL" id="com1" />
									</div>
									<div class="form-group same">
									<label>Terminate URL</label>
									<input type="text" name="terminate[]" class="form-control term1" dat="term" placeholder="Enter terminate URL" id="term1" />
									</div>
									<div class="form-group same">
									<label>Quotafull URL</label>
									<input type="text" name="quotafull[]" class="form-control quota1" data="quota" placeholder="Enter quotafull URL" id="quota1" />
									</div>
									</div>'; 
	}
	else
	{
	   foreach($pp as $key=>$p)
	   {
	       $html=$html.'	 <div class="talk">
										<div class="form-group">
								<label>Choose Partner</label>
								<select id="new1" name="partner[]" required class="form-control new1" >';
								foreach($part as $e){
								if($e->id==$p){
		$html=$html.'<option value="'.$e->id.'" selected >'.$e->name.'</option>';
		}
		else
		{
			$html=$html.'<option value="'.$e->id.'" >'.$e->name.'</option>';
		}
	   }
	   $html=$html.'</select>
									</div>
									
									<div class="form-group same">
									<label>Complete URL</label>
									<input type="text" name="complete[]" class="form-control com1" data="com" placeholder="Enter complete URL" id="com1" value="'.$com[$key].'" />
									</div>
									<div class="form-group same">
									<label>Terminate URL</label>
									<input type="text" name="terminate[]" class="form-control term1" dat="term" placeholder="Enter terminate URL" id="term1" value="'.$term[$key].'" />
									</div>
									<div class="form-group same">
									<label>Quotafull URL</label>
									<input type="text" name="quotafull[]" class="form-control quota1" data="quota" placeholder="Enter quotafull URL" id="quota1" value="'.$quot[$key].'" />
									</div>
									</div>'; 
	   }
	}

	echo $html;
	
	
}

function get_linkss($id)
{
    //$id=$this->admin_model->url_decode($app);
    $link=$this->db->where('id',$id)->get('project')->row()->partner;
    $html='';
    if($link=='' || $link==null)
    {
       
    }
    else
    {
        $ex=explode(',',$link);
        foreach($ex as $e)
        {
            $l="pe".$e;
            $val=$e."Pe".$id;
            $name=$this->db->where('id',$e)->get('partner')->row()->name;
            $html=$html.'<div class="form-group col-md-12">
												<label>Redirect URL for Partner <b>'.$name.'</b></label>
												<div class="input-group">
													<input type="text" id="'.$l.'" class="form-control " value="'.base_url().'survey/start?pid='.$val.'&uid=" placeholder="Last Name" readonly>
												<div class="input-group-prepend">	<span class="input-group-text bg-transparent url_re" onclick="copyToClipboard('.$l.')">copy</span>
													</div>
												</div>
										</div>';
        }
    }
    echo $html;
    
}

function get_partner_links($id)
{
	$links=$this->db->where('id',$id)->get('partner')->row_array();
	echo json_encode($links);
}
function assign_partner()
{
	$id=$this->input->post('id');
	$partner=$this->input->post('partner');
	$complete=$this->input->post('complete');
	$terminate=$this->input->post('terminate');
	$quotafull=$this->input->post('quotafull');
	
	$keys=array();
	
	$count=count($partner);
	for($i=0; $i>$count; $i++)
	{
	    if($partner[$i]!='')
	    {
	        
	    }
	    else
	    {
	       array_push($keys,$i); 
	    }
	}
	foreach($keys as $key)
	{
	    unset($partner[$key]); 
	   unset($complete[$key]); 
	   unset($terminate[$key]); 
	   unset($quotafull[$key]); 
	}
	$data['partner']=implode(',',$partner);
	$data['complete']=implode(',',$complete);
	$data['terminate']=implode(',',$terminate);
	$data['quotafull']=implode(',',$quotafull);
	
	if($this->db->where('id',$id)->update('project',$data))
	{
		$this->session->set_flashdata('category_success', 'Partner assigned successfully');
	
	}
	else
	{
		$this->session->set_flashdata('category_error', 'There is an error occure please try again');
	}
	$this->redirect_back();
}

function delete_project($app)
{
	$id=$this->admin_model->url_decode($app);
	$this->db->where('id',$id);
	
	if($this->db->delete('project'))
	{
		$this->session->set_flashdata('category_success', 'Project deleted Successfully');
	}
	else
	{
		$this->session->set_flashdata('category_error', 'There is an error occure please try again');
	}
	
	$this->redirect_back();
}

function active_project()
{
	$this->check_auth();
$data['project']=$this->admin_model->get_active_project();
$data['page']='Active Projects';
$this->load->view('include/header',$data);
	$this->load->view('admin/active_project');
	$this->load->view('include/footer');
}
function show_report($app)
{
	$this->check_auth();
	$pid=$this->admin_model->url_decode($app);
	$data['project']=$this->admin_model->get_project_info($pid);
	$data['total']=$this->admin_model->get_total_survery($pid);
	$data['com']=$this->admin_model->get_total_action($pid,'complete');
	$data['term']=$this->admin_model->get_total_action($pid,'terminate');
	$data['quota']=$this->admin_model->get_total_action($pid,'quotafull');
	$data['list']=$this->admin_model->get_survery_list($pid);
	$data['page']='Project Report';
$this->load->view('include/header',$data);
	$this->load->view('admin/project_report');
	$this->load->view('include/footer');
}

function all_reports()
{
	$this->check_auth();
	
	if($this->input->post('date')!=null || $this->input->post('date')!='')
	{
		$date=$this->input->post('date');
		$date1=$this->input->post('date1');
		$uid=$this->input->post('uid');
		$pid=$this->input->post('pid');
		$client=$this->input->post('client');
		$project=$this->input->post('proejct');
		$status=$this->input->post('status');
		$partner=$this->input->post('partner');
		$ip=$this->input->post('ip');
		if($date!='')
		{
// 			$this->db->where('datetime >=', $date);
		}
		if($date1!='')
		{
// 			$this->db->where('datetime <=', $date1);
		}
		if($pid!='')
		{
			$this->db->where('pid',$pid);
		}
		if($uid!='')
		{
			$this->db->where('uid',$uid);
		}
		if($partner!='')
		{
			$this->db->where('partner_id',$partner);
		}
		if($client!='')
		{
			$cl=$this->db->query("select * from project where client='".$client."'")->result();
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
			$cl=$this->db->query("select * from project where name='".$project."'")->result();
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
		 $date=date('Y-m-d', strtotime('-365 days'));
		$date1=date('Y-m-d');
// 		$this->db->where('datetime >=', $date);
// 		$this->db->where('datetime <=', $date1);
	}
	$data['date']=$date;
	$data['date1']=$date1;
	if($pid==null || $pid==''){ $pid='';}
	if($uid==null || $uid==''){ $uid='';}
	if($status==null || $status==''){ $status='';}
	if($client==null || $client==''){ $client='';}
	if($project==null || $project==''){ $project='';}
	if($partner==null || $partner==''){ $partner='';}
	if($ip==null || $ip==''){ $ip='';}
	$data['pid']=$pid;
	$data['uid']=$uid;
	$data['status']=$status;
	$data['client']=$client;
	$data['project']=$project;
	$data['partner']=$partner;
	$data['ip']=$ip;
	$data['list']=$this->db->order_by('id','desc')->get('redirects')->result();
// 		$data['list']=$this->db->order_by('id','desc')->get('redirects')->result();
	$data['page']='All Reports';
$this->load->view('include/header',$data);
	$this->load->view('admin/all_reports');
	$this->load->view('include/footer');
}

function summary_reports()
{
	$this->check_auth();
$data['project']=$this->admin_model->get_all_project();
$data['page']='Summary records';
$this->load->view('include/header',$data);
	$this->load->view('admin/summery_records');
	$this->load->view('include/footer');
}
function all_transaction()
{
   $this->check_auth();
$data['transaction']=$this->admin_model->get_all_transaction();
$data['page']='All Transaction';
$this->load->view('include/header',$data);
	$this->load->view('admin/all_transaction');
	$this->load->view('include/footer');	
}

function transaction_request()
{
   $this->check_auth();
$data['transaction']=$this->admin_model->get_transaction_request();
$data['page']='All Transaction';
$this->load->view('include/header',$data);
	$this->load->view('admin/transaction_request');
	$this->load->view('include/footer');	
}
function withdrawal_request()
{
   $this->check_auth();
$data['transaction']=$this->admin_model->get_withdrawal_request();
$data['page']='All Transaction';
$this->load->view('include/header',$data);
	$this->load->view('admin/withdrawal_request');
	$this->load->view('include/footer');	
}
function cash_request()
{
   $this->check_auth();
$data['transaction']=$this->admin_model->get_cash_request();
$data['page']='All Transaction';
$this->load->view('include/header',$data);
	$this->load->view('admin/cash_request');
	$this->load->view('include/footer');	
}




function send_sms($mobile,$reason)
{
	$setup=$this->db->where('name','sms_setup')->get('settings')->row();
	if($setup->value=='on')
	{
	if($reason=='send_sms')
	{

	}
   }
   else
   {
   	$this->session->set_flashdata('category_error', 'SMS not send due to sms settings off');
   	$this->redirect_back();
   }
}

 function redirect_back()
    {
        if(isset($_SERVER['HTTP_REFERER']))
        {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        }
        else
        {
            header('Location: http://'.$_SERVER['SERVER_NAME']);
        }
        exit;
    }

    public function all_admins()
    {
    	$data['page']='All Admins';

    	$data['admins'] = $this->db->get_where("admin",array("status"=>1,))->result_object();

		$this->load->view('include/header',$data);
		$this->load->view('admin/all_admins');
		$this->load->view('include/footer');
    }
    public function admin_edit($id)
    {
    	$data['page']='Edit Admin';

    	$data['row'] = $this->db->get_where("admin",array("status"=>1,"admin_id"=>$id,))->result_object();
		$data['project'] = $this->db->get_where("project")->result_object();
		$this->load->view('include/header',$data);
		$this->load->view('admin/form_admin');
		$this->load->view('include/footer');
    }
    public function admin_add($id='')
    {
    	$data['page']='Add Admin';

    	$data['row'] = $this->db->get_where("admin",array("status"=>1,"admin_id"=>$id,))->result_object();
    	$data['project'] = $this->db->get_where("project")->result_object();
		$this->load->view('include/header',$data);
		$this->load->view('admin/form_admin');
		$this->load->view('include/footer');
    }

    public function admin_add_edit($id='')
    {
    	$result = array();
        $user_data = array();
        $user_id = $id;
     	$name = $this->input->post('name');
     	$email = $this->input->post('email');
     	$password = $this->input->post('password');
     	$projects = implode(",",$this->input->post('projects'));

        $user_data = array(
        	"username"=>$name,
        	"email"=>$email,
        	"password"=>$password,
        	"role"=>"subadmin",
        	"status"=>1,
        	"projects"=>$projects,
        );
        $upload_img = $_FILES['image']['name'];
        if ($upload_img) {


        	$config['upload_path'] = FCPATH.'upload/';
            $config['allowed_types'] = '*';
            $config['max_size']     = '20048';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                // $old_img = $data['user']['image'];
                // if ($old_img != 'default.jpg') {
                //     unlink(FCPATH . 'assets/img/profile/' . $old_img);
                // }
                $new_img = $this->upload->data('file_name');
                $user_data['image']=$new_img;
            } 
        }
        
        
        if(empty($id))
        {
        	$this->db->insert("admin",$user_data);
        	redirect($this->input->post('call_back'));
	        
        }
        else
        {
        	$this->db->update("admin",$user_data,array('admin_id' => $user_id, ));
        	// echo $this->input->post('call_back');
	        redirect($this->input->post('call_back'));
        }
    }





}
