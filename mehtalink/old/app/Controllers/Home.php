<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use Config\Database;
class Home extends BaseController
{
	//protected=$uri;
	function __construct()
    {
		
        helper(['form', 'url']);
		$validation =  \Config\Services::validation();
		helper("MY_helper");
		helper('text');
		
		$db=Database::connect();
    }
	public function adminlogout() {
		     $session=session();
			 //session()->unset('id');
			 unset($_SESSION['id']);
			 $url=(base_url('c-panel'));
			 echo "<script>window.location='$url'</script>";
	}
	
	public function userlogout() {
		     $session=session();
			 //session()->unset('id');
			 unset($_SESSION['uid']);
			 $url=(base_url('login'));
			 echo "<script>window.location='$url'</script>";
	}
	
	
	public function about()
	{   $data['title']='About Us';
	    $data['view']='about';
		return view('index',$data);
		
	}
	
	public function default_page()
	{   
	    $uri=current_url(true);
	    $data['uri']='';
		$user=getdatasingle('tbl_setting',array('status'=>'1'));
		$data['title']=$user->site_brand_name;
		return view('default_page',$data);
		
	}
	public function suspend(){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		if(in_array(1,$arrw)) {
		return redirect()->to(base_url()); 	
		
		}
		if(in_array(3,$arrw)) {
		return view('suspend');	
		
		}
		
		if(in_array(12,$arrw)) {
		return redirect()->to(base_url()); 	
		//return view('suspend');
		}
		
	}
	
	  public function default_f(){
		 $data['title']='';
		 return view('default_f',$data);
	}
	public function index()
	{   
	    $userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		if(in_array(3,$arrw)) {
		return redirect()->to(base_url('cgi-sys/suspendedpage.cgi')); 	
		}
		if(in_array(12,$arrw)) {
		return view('bandwidth');
		//return redirect()->to(base_url('bandwidth')); 	
		} 
	    $data['setting2']=getdatasingle('tbl_settings',array('id'=>'2'));
	    $data['setting3']=getdatasingle('tbl_settings',array('id'=>'3'));
	    $data['setting4']=getdatasingle('tbl_settings',array('id'=>'4'));
		$data['site_name']=$data['setting3']->setting1;
	    $uri=current_url(true);
	    $data['uri']='';
		$user=getdatasingle('tbl_setting',array('status'=>'1'));
		$data['title']=$user->site_brand_name;
		$data['classhtml']='agileits-banner jarallax';
		$data['view']='main';
		return view('index',$data);
		
	}
	public function dynamic_pages(){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		if(in_array(3,$arrw)) {
		return redirect()->to(base_url('cgi-sys/suspendedpage.cgi')); 	
		}
		if(in_array(12,$arrw)) {
		return redirect()->to(base_url()); 	
		}
		if($this->request->getMethod() == "post"){
			if(isset($_POST['contact_form1'])){
			  $name=$this->request->getPost('name');
			  $email=$this->request->getPost('email');
			  $mobile=$this->request->getPost('number');
			  $reason=$this->request->getPost('reason');
			  $message1=$this->request->getPost('message');
			  $send_email=$this->request->getPost('send_email');
			  
			    $to = $send_email;
         $subject = "Contact Enquiry";
         
         $message = "<b>Contact Enquiry.</b>";
         $message .= "<p>Name : $name.</p>";
         $message .= "<p>Email : $email.</p>";
         $message .= "<p>Mobile : $mobile.</p>";
         $message .= "<p>Subject : $reason.</p>";
         $message .= "<p>Message : $message1.</p>";
         $header = "From:$email \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            $data['success']="<p style='color:green'>Enquiry successfully...</p>";
         }else {
              $data['success']="<p style='color:green'>Enquiry unsuccessfully...</p>";
         }
							
			}	
		}
		$uri=current_url(true);
		if($this->request->uri->getSegment(2)){
			$slug= $this->request->uri->getSegment(2);
		} else {
			$slug= $this->request->uri->getSegment(1);
		}
		if($slug){
		$data['user']=getdatasingle('tbl_pages',array('status'=>'1','slug'=>$slug));
        
        if($data['user']->menu_name=='') {		
		$data['page_title']=$data['user']->title;
        } else { 
		$data['page_title']=$data['user']->menu_name;
		}
		$data['meta_tags']=$data['user']->meta_tags;
		$data['meta_content']=$data['user']->meta_description;
		$data['view']='front/page';
		} 
		$data['classhtml']='agileits-banner about-w3lsbnr';
		return view('index',$data);
	}
	
	public function icard(){
	$data['title']='Icard';
	return view('front/icard',$data);	
	}
	public function login(){
	
	    $session=session();
		if($session->get('uid')){
		echo "<script>window.location='".base_url('user-dashboard')."'</script>";
		}
		
	if(isset($_POST['login'])){
		$userdata = [
                   'email'=>$_POST['email'],
                    'password'=>$_POST['password'],
					'status'=>'1',
                ];
				$db=Database::connect();
				$query=$db->table('tbl_user')->where($userdata)->get();
				$result=$query->getRow();
				if($result) {
				$session=session();
				$session->set('uid',$result->id);
				header('Refresh:1; url= '. base_url().'/user-dashboard'); 
				} else {
					$data['error']='<p style="color:red;">Invalid Login</p>';
				}
	}	
		
	$data['title']='Login';
	$data['view']='front/login';
	return view('index',$data);	
	}
	
	public function register(){
	
	 $session=session();
		if($session->get('uid')){
		echo "<script>window.location='".base_url('user-dashboard')."'</script>";
		}
		
	if(isset($_POST['submit'])){
		
		$already=getdatasingle('tbl_user',array('email'=>$_POST['email']));
		if($already) {
			$data['error']="<strong style='color:red;'>Already register</strong>";
		} else {
			$array=array(
			             'name'=>$_POST['name'],
			             'email'=>$_POST['email'],
			             'mobile'=>$_POST['mobile'],
			             'password'=>$_POST['password'],
						 'status'=>'1',
						 );
						 
						 //echo "<pre>";
						 //print_r($array);
		               $msg=insertquery('tbl_user',$array);
					  $array1=array(
			             
			             'email'=>$_POST['email'],
						 'status'=>'1',
						 );
					   
					   $msg=insertquery('tbl_user',$array);
						if($msg) {
						    $db=Database::connect();
							$query=$db->table('tbl_user')->where($array1)->get();
							$result=$query->getRow();
							if($result) {
							$session=session();
							$session->set('uid',$result->id);
							header('Refresh:1; url= '. base_url().'/user-dashboard'); 
							} else {
								$data['error']='<p style="color:red;">Invalid Login</p>';
							}
							}
		
		
		}
		
		//echo "<pre>";
		//print_r($_POST);
	}	
		
	$data['title']='Register';
	$data['view']='front/register';
	return view('index',$data);	
	}
	
	public function Resume(){
	$data['title']='Resume';
	$data['view']='front/resume';
	return view('index',$data);	
	}
	
	public function salary_slip(){
	$data['title']='Salary Slip';
	return view('front/salary_slip',$data);	
	}
	
	
	
	public function category(){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		if(in_array(3,$arrw)) {
		return redirect()->to(base_url('cgi-sys/suspendedpage.cgi')); 	
		}
		if(in_array(12,$arrw)) {
		return redirect()->to(base_url()); 	
		}
		$uri=current_url(true);
		$slug= $this->request->uri->getSegment(2);
		if($this->request->uri->getSegment(2)){
		$data['user']=getdatasingle('tbl_pages',array('status'=>'1','slug'=>$slug,'page_type'=>'1'));
        
        if($data['user']->menu_name=='') {		
		$data['page_title']=$data['user']->title;
        } else { 
		$data['page_title']=$data['user']->menu_name;
		}
		$data['meta_tags']=$data['user']->meta_tags;
		$data['meta_content']=$data['user']->meta_description;
		$data['view']='front/category';
		} 
		return view('index',$data);
	}
	
	public function admin_login(){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		if(in_array(3,$arrw)) {
		return redirect()->to(base_url('cgi-sys/suspendedpage.cgi')); 	
		}
		if($this->request->getMethod() == "post"){
		$check=$this->validate([
		'email'=>'required|valid_email',
		'password'=>'required',
		                  ]);
			if(!$check)	{
				return view('front/adminlogin',['validation'=>$this->validator]);
			} else {
				$userdata = [
                    "email" => $this->request->getVar("email"),
                    "password" => md5($this->request->getVar("password")),
                ];
				$db=Database::connect();
				$query=$db->table('tbl_admin')->where($userdata)->get();
				$result=$query->getRow();
				if($result) {
				$session=session();
				$session->set('id',$result->id);
				$session->set('role',$result->role);
				header('Refresh:1; url= '. base_url().'/dashboard'); 
				} else {
					$data['error']='<p style="color:red;">Invalid Login</p>';
				}
			}
	}
		    
			$data['title']     ='Admin Login';
			return view('front/adminlogin',$data);
	}

	
	public function detail(){
		
		$data['page_title']='Detail';
		$data['view']='front/detail';
		return view('index',$data);
	}
	public function physical(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('language')); 
		}
		$data['page_title']='Physical';
		$data['view']='front/physical';
		return view('index',$data);
	}
	 public function language(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			//echo "<pre>";
			//print_r($_POST);exit;
			return redirect()->to(base_url('personalattitude')); 
		}
		$data['page_title']='Language';
		$data['view']='front/language';
		return view('index',$data);
	}
	public function personalattitude(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('residency')); 
		}
		$data['page_title']='Personalattitude';
		$data['view']='front/personalattitude';
		return view('index',$data);
	}
	public function residency(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('spiritual')); 
		}
		$data['page_title']='Residency';
		$data['view']='front/residency';
		return view('index',$data);
	} 
	public function spiritual(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('lifestyle')); 
		}
		$data['page_title']='Spiritual';
		$data['view']='front/spiritual';
		return view('index',$data);
	}
	public function lifestyle(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('astronomic')); 
		}
		$data['page_title']='Lifestyle';
		$data['view']='front/lifestyle';
		return view('index',$data);
	}
	public function astronomic(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('permanentaddress')); 
		}
		$data['page_title']='Astronomic';
		$data['view']='front/astronomic';
		return view('index',$data);
	}
	public function permanentaddress(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('additionalpersonal')); 
		}
		$data['page_title']='permanentaddress';
		$data['view']='front/permanentaddress';
		return view('index',$data);
	}
	public function additionalpersonal(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('partnerexpectation')); 
		}
		$data['page_title']='Additionalpersonal';
		$data['view']='front/additionalpersonal';
		return view('index',$data);
	}
	public function partnerexpectation(){
		$session=session();
		if($this->request->getMethod() == "post"){
			$session->set($_POST);
			return redirect()->to(base_url('thanks')); 
		}
		$data['page_title']='Partnerexpectation';
		$data['view']='front/partnerexpectation';
		return view('index',$data);
	}
    public function thanks(){
		$session=session();
		
		
		$array=array(
		            'f_name'=>$session->get('f_name'),
		            'l_name'=>$session->get('l_name'),
		            'gender'=>$session->get('gender'),
		            'email'=>$session->get('email'),
		            'dob'=>$session->get('dob'),
		            'marital_status'=>$session->get('marital_status'),
		            'number_children'=>$session->get('number_children'),
		            'area'=>$session->get('area'),
		            'behalf'=>$session->get('behalf'),
		            'mobile'=>$session->get('mobile'),
		            'budget'=>$session->get('budget'),
		            'family_annual_income'=>$session->get('family_annual_income'),
		            'annual_income_bride_groom'=>$session->get('annual_income_bride_groom'),
		            'as_sun'=>$session->get('as_sun'),
		            'as_moon'=>$session->get('as_moon'),
		            'as_birth'=>$session->get('as_birth'),
		            'as_birth_city'=>$session->get('as_birth_city'),
		            'height'=>$session->get('height'),
		            'weight'=>$session->get('weight'),
		            'eye_color'=>$session->get('eye_color'),
		            'hair_color'=>$session->get('hair_color'),
		            'complexion'=>$session->get('complexion'),
		            'blood_group'=>$session->get('blood_group'),
		            'body_type'=>$session->get('body_type'),
		            'body_art'=>$session->get('body_art'),
		            'disability'=>$session->get('disability'),
		            'tongue'=>$session->get('tongue'),
		            'language'=>$session->get('language'),
		            'speak'=>$session->get('speak'),
		            'read'=>$session->get('read'),
		            'affection'=>$session->get('affection'),
		            'humor'=>$session->get('humor'),
		            'political'=>$session->get('political'),
		            'service'=>$session->get('service'),
		            'birth_country'=>$session->get('birth_country'),
		            'residency_country'=>$session->get('residency_country'),
		            'citizenship_country'=>$session->get('citizenship_country'),
		            'grow_up_country'=>$session->get('grow_up_country'),
		            'immigration'=>$session->get('immigration'),
		            'religion1'=>$session->get('religion1'),
		            'cast'=>$session->get('cast'),
		            'other_cast11'=>$session->get('other_cast11'),
		            'sub_cast'=>$session->get('sub_cast'),
		            'grow_up_country1'=>$session->get('grow_up_country1'),
		            'ethnicity'=>$session->get('ethnicity'),
		            'personal_value'=>$session->get('personal_value'),
		            'family_value'=>$session->get('family_value'),
		            'community_value'=>$session->get('community_value'),
		            'family_status'=>$session->get('family_status'),
		            'mangalick1'=>$session->get('mangalick1'),
		            'ldiet'=>$session->get('ldiet'),
		            'ldrink'=>$session->get('ldrink'),
		            'lsmoke'=>$session->get('lsmoke'),
		            'lliving'=>$session->get('lliving'),
		            'as_sun1'=>$session->get('as_sun1'),
		            'as_moon1'=>$session->get('as_moon1'),
		            'as_birth1'=>$session->get('as_birth1'),
		            'as_birth_city1'=>$session->get('as_birth_city1'),
					'as_sun2'=>$session->get('as_sun2'),
		            'as_moon2'=>$session->get('as_moon2'),
		            'as_birth2'=>$session->get('as_birth2'),
		            'as_birth_city2'=>$session->get('as_birth_city2'),
		            'add_home_district'=>$session->get('add_home_district'),
		            'add_family_res'=>$session->get('add_family_residency'),
		            'add_father_occupation'=>$session->get('add_father_occupation'),
		            'add_special'=>$session->get('add_special'),
		            'perm_general_requir'=>$session->get('perm_general_requir'),
		            'perm_age'=>$session->get('perm_age'),
		            'perm_father_occup'=>$session->get('perm_father_occup'),
		            'perm_special_cir'=>$session->get('perm_special_cir'),
		            'perm_marital_status'=>$session->get('perm_marital_status'),
		            'perm_children_accep'=>$session->get('perm_children_accep'),
		            'perm_country_of_residency'=>$session->get('perm_country_of_residency'),
		            'perm_religion'=>$session->get('perm_religion'),
		            'perm_cast'=>$session->get('perm_cast'),
		            'perm_othercast11'=>$session->get('perm_othercast11'),
		            'perm_subcast'=>$session->get('perm_subcast'),
		            'perm_education'=>$session->get('perm_education'),
		            'perm_profession'=>$session->get('perm_profession'),
		            'perm_drinking_habits'=>$session->get('perm_drinking_habits'),
		            'perm_smoking_habits'=>$session->get('perm_smoking_habits'),
		            'perm_diet'=>$session->get('perm_diet'),
		            'perm_body_type'=>$session->get('perm_body_type'),
		            'perm_personal_value'=>$session->get('perm_personal_value'),
		            'perm_manglik'=>$session->get('perm_manglik'),
		            'perm_any_disability'=>$session->get('perm_any_disability'),
		            'perm_mother_tongue'=>$session->get('perm_mother_tongue'),
		            'perm_family_value'=>$session->get('perm_family_value'),
		            'perm_prefered_country'=>$session->get('perm_prefered_country'),
		            'perm_prefered_state'=>$session->get('perm_prefered_state'),
		            'perm_prefered_status'=>$session->get('perm_prefered_status'),
		            'perm_complexion'=>$session->get('perm_complexion'),
		            'perm_budget'=>$session->get('perm_budget'),
		            'perm_family_annual_income'=>$session->get('perm_family_annual_income'),
		            'perm_annual_income_bride_groom'=>$session->get('perm_annual_income_bride_groom'),
		            'profession01'=>$session->get('profession01'),
		            'profession02'=>$session->get('profession02'),
		            'profession03'=>$session->get('profession03'),
		            'profession04'=>$session->get('profession04'),
		            'profession05'=>$session->get('profession05'),
		            'profession06'=>$session->get('profession06'),
		            'profession07'=>$session->get('profession07'),
		            'profession08'=>$session->get('profession08'),
		            'profession_other2'=>$session->get('profession_other2'),
					'cdate'=>date('d-m-Y'),
					);
					$msg=insertquery('tbl_registration',$array);
						if($msg) {
						return redirect()->to(base_url()); 
							}
		$data['page_title']='Thanks';
		$data['view']='front/thanks';
		return view('index',$data);
	}
}
