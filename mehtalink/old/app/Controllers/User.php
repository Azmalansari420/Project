<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use Config\Database;
class User extends BaseController
{
	//protected=$uri;
	function __construct()
    {
		
        helper(['form', 'url']);
		$validation =  \Config\Services::validation();
		$db=Database::connect();
		$session=session();
		if(!$session->get('uid')){
		echo "<script>window.location='".base_url('login')."'</script>";
		}
		
		$db=Database::connect();
    }
	
	
	public function index()
	{
		//$val=gettitleresult('tbl_pages','title','file','slug','status','description','asc');
		//echo "<pre>";
		//print_r($val);exit;
		$data['title']='User Dashboard';
		$data['view']='front/dashboard';
		return view('index',$data);
	}
	public function profile(){
		error_reporting(0);
		if($this->request->getMethod() == "post"){
			$session=session();
			$id=$session->get('uid');
			
		$data['user']=getdatarow('tbl_user',array('id'=>$id)); 
		
		$file=$this->request->getFile('file');
		if($file==''){
	    $image=$data['user']->file;
		}
		else if ($file->isValid() && ! $file->hasMoved()){
        $image = $file->getRandomName();
        $file->move('uploads/', $image);
		$pathfileb='uploads/'.$data['user']->file;
		 if(unlink($pathfileb)) {
		  }
        }
			$array=array(
			           
			            'file'=>$image,
						'name'=>$this->request->getVar('name'),
						'mobile'=>$this->request->getVar('mobile'),
						'profile'=>$this->request->getVar('profile'),
						'dob'=>$this->request->getVar('dob'),
						'email'=>$this->request->getVar('email'),
						'marital_status'=>$this->request->getVar('marital_status'),
						'father_name'=>$this->request->getVar('father_name'),
						'mother_name'=>$this->request->getVar('mother_name'),
						'nationality'=>$this->request->getVar('nationality'),
						'gender'=>$this->request->getVar('gender'),
						'language'=>$this->request->getVar('language'),
						'category'=>$this->request->getVar('category'),
						'address'=>$this->request->getVar('address'),
						'qualification'=>$this->request->getVar('qualification'),
						'experience'=>$this->request->getVar('experience'),
						'created_date'         =>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					//print_r($array);exit;
						$msg=updatequery('tbl_user',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<strong style="color:green">Profile update successfully.</strong>';
							} else {
						$data['success']='<strong style="color:red">Profile update unsuccessfully.</strong>';
						}
			
		}
		$data['page_title']='Register Now';
		$data['view']='front/profile';
		return view('index',$data);
	}
}
