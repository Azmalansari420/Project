<?php 
namespace App\Controllers;
use App\Models\PagesModel;
use App\Models\SettingModel;
use App\Models\ProductModel;
use App\Controllers\BaseController;
use Config\Database;
class Cpdadmin extends BaseController
{
	//protected=$session;
	function __construct()
    {
		
		helper(['form', 'url']);
		$validation =  \Config\Services::validation();
		$db=Database::connect();
		$session=session();
		if(!$session->get('id')){
		echo "<script>window.location='".base_url('c-panel')."'</script>";
		}
    }
	
	public function status(){
			   $id= $this->request->uri->getSegment(3);
			   $update= $this->request->uri->getSegment(4);
			   $table= $this->request->uri->getSegment(5);
			    $url1= $this->request->uri->getSegment(6);
			    $url2= $this->request->uri->getSegment(7);
			   updatequery($table,array('id'=>$id),array('status'=>$update));
			   $urlr=base_url('cpdadmin/'.$url1.'/'.$url2.'');
			   echo "<script>window.location='".$urlr."'</script>";
		  	
	}
	public function deletewidthfile(){
		      error_reporting(0);
			   $id= $this->request->uri->getSegment(3);
			   $table= $this->request->uri->getSegment(4);
			   $url1= $this->request->uri->getSegment(5);
			   $url11= $this->request->uri->getSegment(6);
			   $user=getdatasingle($table,array('id'=>$id));
			   $path='public/uploads/'.$user->file;
		       if(unlink($path)) {
		       }
			   //$url1= $uri->getSegment(8);
			   deletequery($table,array('id'=>$id));
			   $urlr=base_url('cpdadmin/'.$url1.'/'.$url11.'');
			   echo "<script>window.location='".$urlr."'</script>";
	}
	// multi check active,deactive and delete start
		public function multicheck(){
			
			if(isset($_POST['active'])){
				$table=$this->request->getPost('table');
				$url=$this->request->getPost('url');
				$post_ids=$this->request->getPost('check[]');
				
				$msg=mullty_status($table,$post_ids,array('status'=>'1'));
				 $urlr=base_url('cpdadmin/'.$url.'');
			   echo "<script>window.location='".$urlr."'</script>";
						
			}
			if(isset($_POST['stock'])){
				$table=$this->request->getPost('table');
				$url=$this->request->getPost('url');
				$post_ids=$this->request->getPost('check[]');
				
				$msg=$this->Status_model->mullty_status($table,$post_ids,array('stock'=>'1'));
				if($msg==0){
				 redirect (base_url('cpdadmin/'.$url));
				}		
			}
			if(isset($_POST['unstock'])){
				$table=$this->input->post('table');
				$url=$this->input->post('url');
				$post_ids=$this->input->post('check[]');
				
				$msg=$this->Status_model->mullty_status($table,$post_ids,array('stock'=>'0'));
				if($msg==0){
				 redirect (base_url('cpdadmin/'.$url));
				}		
			}
			if(isset($_POST['deactive'])){
				$table=$this->request->getPost('table');
				$url=$this->request->getPost('url');
				$post_ids=$this->request->getPost('check[]');
				
				$msg=mullty_status($table,$post_ids,array('status'=>'0'));
				 $urlr=base_url('cpdadmin/'.$url.'');
			   echo "<script>window.location='".$urlr."'</script>";		
			}
			if(isset($_POST['delete'])){
				$session = \Config\Services::session();
                $table=$this->request->getPost('table');
				$url=$this->request->getPost('url');
				$post_ids=$this->request->getPost('check[]');
				
				$msg=mullty_delquery($table,$post_ids);
				
					$session->setFlashdata('msg', '<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Record delete successfully.</strong> 
					</div>');
				  $urlr=base_url('cpdadmin/'.$url.'');
			      echo "<script>window.location='".$urlr."'</script>";		
			}
		}
		// multi check active,deactive and delete end
	public function index()
	{
		//$val=gettitleresult('tbl_pages','title','file','slug','status','description','asc');
		//echo "<pre>";
		//print_r($val);exit;
		$data['title']='Dashboard';
		$data['view']='admin/main';
		return view('admin/index',$data);
	}
	// Page Listing Start
	public function page_list($pgtp){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($pgtp=='page'){$val=0;} 
		if($pgtp=='category'){
		$val=1;
		if(!in_array(4,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='blog'){
		$val=2;
		if(!in_array(6,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='product'){
		$val=3;
		if(!in_array(5,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='brand'){$val=4;} 
		if($pgtp=='topic'){$val=5;} 
		if($pgtp=='news'){$val=6;}
		$data['user']=getdatabyslug('tbl_pages',array('page_type'=>$val));
		//echo "<pre>";
		//print_r($data['user']);exit;
		$data['page']='page_add';
		$data['page_name']='page_list';
		$data['page_edit']='page_edit';
		$data['title']='Page List';
		$data['table_name']='tbl_pages';
		$data['view']='admin/page_list';
		return view('admin/index',$data);
	}
	public function page_add($pgtp){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($pgtp=='page'){$val=0;} 
		if($pgtp=='category'){
		$val=1;
		if(!in_array(4,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='blog'){
		$val=2;
		if(!in_array(6,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='product'){
		$val=3;
		if(!in_array(5,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='brand'){$val=4;} 
		if($pgtp=='topic'){$val=5;} 
		if($pgtp=='news'){$val=6;}
		  
		  $pages=new PagesModel();
		  if($this->request->getMethod() == "post"){
		  $file=$this->request->getFile('file');
		  $page_banner=$this->request->getFile('page_banner');
		  if ($file->isValid() && ! $file->hasMoved()){
          $image = $file->getRandomName();
          $file->move('public/uploads/', $image);
          }
		  if ($page_banner->isValid() && ! $page_banner->hasMoved()){
          $bannerimage = $page_banner->getRandomName();
          $page_banner->move('public/uploads/', $bannerimage);
          }
		  $page_filter=$_POST['catalog_style'].','.$_POST['catalog_sorting'].','.$_POST['catalog_excerpt'].','.$_POST['page_style'].','.$_POST['top_menu'].','.$_POST['footer_link'].','.$_POST['contact_form'].','.$_POST['featured_image_status'];
		  $string=$this->request->getPost('title');
		  
	$description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
	$description2= str_replace(array_out(),array_in(),$this->request->getPost('description2'));
	
		  $attachment_link= str_replace(base_url(),'#base_url#',$this->request->getPost('attachment_link'));
		  $redirect_url= str_replace(base_url(),'#base_url#',$this->request->getPost('redirect_url'));
          $pageid=getdatadesc1('tbl_pages');
		  $valid=$pageid->id+1;
		  if($this->request->getPost('udf1')){
			   $slug=strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->request->getPost('udf1'))));
		  } else { 
		     $slug=$valid.'-'.strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
		  }
		   $array=array(
		                'admin_id'=>$this->session->get('id'),
			            'title'=>$this->request->getPost('title'),
			            'display'=>$this->request->getPost('display'),
						'slug' =>$slug,
			            'description'=>$description,
			            'description2'=>$description2,
			            'meta_tags'=>$this->request->getPost('meta_tags'),
			            'meta_description'=>$this->request->getPost('meta_description'),
			            'redirect_url'=>$redirect_url,
			            'target_link'=>$this->request->getPost('target_link'),
			            'file'=>$image,
			            'page_banner'=>$bannerimage,
						'parent_page'=>$this->request->getPost('parent_page'),
						'page_type'=>$val,
						'status'=>$this->request->getPost('page_display'),
						'embed_code'=>$this->request->getPost('embed_code'),
						'menu_name'=>$this->request->getPost('menu_name'),
						'sort_order'=>$this->request->getPost('sort_order'),
						'attachment_link'=>$attachment_link,
						'unique_code'=>$this->request->getPost('unique_code'),
						'custom_data'=>$this->request->getPost('custom_data'),
						'udf1'=>$this->request->getPost('udf1'),
						'udf2'=>$this->request->getPost('udf2'),
						'udf3'=>$this->request->getPost('udf3'),
						'udf4'=>$this->request->getPost('udf4'),
						'udf5'=>$this->request->getPost('udf5'),
						'page_filter'=>$page_filter,
						'updated_date'=>date('Y-m-d H:i:s'),
						'created_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
						//print_r($array);exit;
						$already=getdatasingle('tbl_pages',array('slug'=>$slug));
						if(!$already) {
						$msg=$pages->save($array);
						if($msg!=0) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Created successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Created UnSuccessfully.</strong>
							</div>';
						}
            			} else {
							$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Already exit.</strong>
							</div>';
						}	
			
		}
		if(isset($_GET['copy_id'])){
		   $copy_id= $_GET['copy_id'];
		   $data['user']=getdatasingle('tbl_pages',array('id'=>$copy_id));
		} 
		$data['page_type']=$val;
		$data['heading']='Create New Page';
		$data['title']='Page Add';
		$data['view']='admin/page_add';
		return view('admin/index',$data);
	}
	
	
	public function multigallery1($id){
		if($this->request->getMethod() == "post"){
		  $file=$this->request->getFile('file');
		  if ($file->isValid() && ! $file->hasMoved()){
          $image = $file->getRandomName();
          $file->move('uploads/', $image);
          }
		  $array=array(
					   'title'=>$this->request->getVar('title'),
			            'file'=>$image,
						'page_type'=>'1',
						'udf1'=>$this->request->getVar('udf1'),
						'status'=>$this->request->getVar('page_display'),
						'parent_page'=>$id,
						'updated_date'=>date('Y-m-d H:i:s'),
						'created_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					    //print_r($array);exit;
						$msg=insertquery('tbl_media',$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Media Created successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Media Created UnSuccessfully.</strong>
							</div>';
						}
		}
		$session=session();
		$session->set('galleryid',$id);
		$data['user']=getdatabyslug('tbl_media',array('parent_page'=>$id,'page_type'=>'1'));
		$data['title']='Gallery List';
		$data['uri']=current_url(true);
		$data['view']='admin/multigallery1';
		return view('admin/index',$data);
	}
	
	
	
	public function gallry_edit($id,$mdtp){
		error_reporting(0);
		$session=session();
		
		$pages=new PagesModel();
		 $data['user']=getdatarow('tbl_media',array('id'=>$id)); 
		if($this->request->getMethod() == "post"){
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
		if(isset($_POST['remove_img']) or isset($_POST['remove_page_banner'])){
			if($_POST['remove_img']=='1'){
			$image='';
			$pathfile='uploads/'.$data['user']->file;
		     if(unlink($pathfile)) {
		    }
			}
		}
		
		   $array=array(
			           'admin_id'=>$this->session->get('id'),
			            'file'=>$image,
						'title'=>$this->request->getVar('title'),
						'udf1'=>$this->request->getVar('udf1'),
						'status'=>$this->request->getVar('page_display'),
						'created_date'         =>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					//print_r($array);exit;
						$msg=updatequery('tbl_media',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatarow('tbl_media',array('id'=>$id));
		$data['heading']='Gallerr Edit';
		$data['title']='Gallerr Edit';
		$data['view']='admin/gallry_edit';
		return view('admin/index',$data);
	}
	
	
	public function page_edit($id,$pgtp){
		error_reporting(0);
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($pgtp=='page'){$val=0;} 
		if($pgtp=='category'){
		$val=1;
		if(!in_array(4,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='blog'){
		$val=2;
		if(!in_array(6,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='product'){
		$val=3;
		if(!in_array(5,$arrw)) {
		return redirect()->to(base_url('dashboard')); 	
		}
		} 
		if($pgtp=='brand'){$val=4;} 
		if($pgtp=='topic'){$val=5;} 
		if($pgtp=='news'){$val=6;}
		$pages=new PagesModel();
		if($this->request->getMethod() == "post"){
		$file=$this->request->getFile('file');
		$page_banner=$this->request->getFile('page_banner');
		$data['user']=getdatarow('tbl_pages',array('id'=>$id));
		
		if($file==''){
	    $image=$data['user']->file;
		}
		else if ($file->isValid() && ! $file->hasMoved()){
        $image = $file->getRandomName();
        $file->move('public/uploads/', $image);
		$pathfile='public/uploads/'.$data['user']->file;
		     if(unlink($pathfile)) {
		    }
        }
		if($page_banner==''){
	      $bannerimage=$data['user']->page_banner;
		}
		else if ($page_banner->isValid() && ! $page_banner->hasMoved()){
        $bannerimage = $page_banner->getRandomName();
        $page_banner->move('public/uploads/', $bannerimage);
		$pathfileb='public/uploads/'.$data['user']->page_banner;
		     if(unlink($pathfileb)) {
		    }
        }
		if(isset($_POST['remove_img']) or isset($_POST['remove_page_banner'])){
			if($_POST['remove_img']=='1'){
			$image='';
			$pathfile='public/uploads/'.$data['user']->file;
		     if(unlink($pathfile)) {
		    }
			}
			if($_POST['remove_page_banner']=='1'){
			$bannerimage='';
			$pathfileb='public/uploads/'.$data['user']->page_banner;
		     if(unlink($pathfileb)) {
		    }
			}
		} 
		   $page_filter=$_POST['catalog_style'].','.$_POST['catalog_sorting'].','.$_POST['catalog_excerpt'].','.$_POST['page_style'].','.$_POST['top_menu'].','.$_POST['footer_link'].','.$_POST['contact_form'].','.$_POST['featured_image_status'];
		   $string=$this->request->getPost('title');
		   $description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		   
		   $description2= str_replace(array_out(),array_in(),$this->request->getPost('description2'));
		   
		   $attachment_link= str_replace(base_url(),'#base_url#',$this->request->getPost('attachment_link'));
		   $redirect_url= str_replace(base_url(),'#base_url#',$this->request->getPost('redirect_url'));
		   $valid=$id;
		   if($this->request->getPost('udf1')){
			   $slug=strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->request->getPost('udf1'))));
		  } else {
		  $slug=$valid.'-'.strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
		  }
		   $array=array(
			            'admin_id'=>$this->session->get('id'),
			            'title'=>$this->request->getPost('title'),
						'display'=>$this->request->getPost('display'),
						'slug' =>$slug,
			            'description'=>$description,
			            'description2'=>$description2,
			            'meta_tags'=>$this->request->getPost('meta_tags'),
			            'meta_description'=>$this->request->getPost('meta_description'),
			            'redirect_url'=>$redirect_url,
			            'target_link'=>$this->request->getPost('target_link'),
			            'file'=>$image,
			            'page_banner'=>$bannerimage,
						'parent_page'=>$this->request->getPost('parent_page'),
						'page_type'=>$val,
						'status'=>$this->request->getPost('page_display'),
						'embed_code'=>$this->request->getPost('embed_code'),
						'menu_name'=>$this->request->getPost('menu_name'),
						'sort_order'=>$this->request->getPost('sort_order'),
						'attachment_link'=>$attachment_link,
						'unique_code'=>$this->request->getPost('unique_code'),
						'custom_data'=>$this->request->getPost('custom_data'),
						'udf1'=>$this->request->getPost('udf1'),
						'udf2'=>$this->request->getPost('udf2'),
						'udf3'=>$this->request->getPost('udf3'),
						'udf4'=>$this->request->getPost('udf4'),
						'udf5'=>$this->request->getPost('udf5'),
						'page_filter'=>$page_filter,
				        'updated_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					   //print_r($array);exit;
						$msg=$pages->update($id,$array);
						if($msg!=0) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatarow('tbl_pages',array('id'=>$id));
		$data['page_type']=$val;
		$data['heading']='Create New Page';
		$data['title']='Page Edit';
		$data['view']='admin/page_edit';
		return view('admin/index',$data);
	}
	// Page Listing End
	
	
	public function tab($id){
		if($this->request->getMethod() == "post"){
		  /*$file=$this->request->getFile('file');
		  if ($file->isValid() && ! $file->hasMoved()){
          $image = $file->getRandomName();
          $file->move('uploads/', $image);
          }*/
		  $description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		  $array=array(
					   'title'=>$this->request->getVar('title'),
			            //'file'=>$image,
			            'description'=>$description,
						'page_type'=>'9',
						'udf1'=>$this->request->getVar('udf1'),
						'status'=>$this->request->getVar('page_display'),
						'parent_page'=>$id,
						'updated_date'=>date('Y-m-d H:i:s'),
						'created_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					    //print_r($array);exit;
						$msg=insertquery('tbl_media',$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Tab Created successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Tab Created UnSuccessfully.</strong>
							</div>';
						}
		}
		$session=session();
		$session->set('galleryid',$id);
		$data['user']=getdatabyslug('tbl_media',array('parent_page'=>$id,'page_type'=>'9'));
		$data['title']='Tab List';
		$data['uri']=current_url(true);
		$data['view']='admin/tab';
		return view('admin/index',$data);
	}
	public function tab_edit($id,$mdtp){
		error_reporting(0);
		$session=session();
		
		$pages=new PagesModel();
		 $data['user']=getdatarow('tbl_media',array('id'=>$id)); 
		if($this->request->getMethod() == "post"){
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
		if(isset($_POST['remove_img']) or isset($_POST['remove_page_banner'])){
			if($_POST['remove_img']=='1'){
			$image='';
			$pathfile='uploads/'.$data['user']->file;
		     if(unlink($pathfile)) {
		    }
			}
		}
		$description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		   $array=array(
			           'admin_id'=>$this->session->get('id'),
			            //'file'=>$image,
			            'description'=>$description,
						'title'=>$this->request->getVar('title'),
						'udf1'=>$this->request->getVar('udf1'),
						'status'=>$this->request->getVar('page_display'),
						'created_date'         =>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					//print_r($array);exit;
						$msg=updatequery('tbl_media',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Tab Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Tab Update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatarow('tbl_media',array('id'=>$id));
		$data['heading']='Tab Edit';
		$data['title']='Tab Edit';
		$data['view']='admin/tab_edit';
		return view('admin/index',$data);
	}
	
	
	
	public function faq($id){
		if($this->request->getMethod() == "post"){
		  /*$file=$this->request->getFile('file');
		  if ($file->isValid() && ! $file->hasMoved()){
          $image = $file->getRandomName();
          $file->move('uploads/', $image);
          }*/
		  $description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		  $array=array(
					   'title'=>$this->request->getVar('title'),
			            //'file'=>$image,
			            'description'=>$description,
						'page_type'=>'11',
						'udf1'=>$this->request->getVar('udf1'),
						'status'=>$this->request->getVar('page_display'),
						'parent_page'=>$id,
						'updated_date'=>date('Y-m-d H:i:s'),
						'created_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					    //print_r($array);exit;
						$msg=insertquery('tbl_media',$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>FAQ Created successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>FAQ Created UnSuccessfully.</strong>
							</div>';
						}
		}
		$session=session();
		$session->set('galleryid',$id);
		$data['user']=getdatabyslug('tbl_media',array('parent_page'=>$id,'page_type'=>'11'));
		$data['title']='FAQ List';
		$data['uri']=current_url(true);
		$data['view']='admin/faq';
		return view('admin/index',$data);
	}
	public function faq_edit($id,$mdtp){
		error_reporting(0);
		$session=session();
		
		$pages=new PagesModel();
		 $data['user']=getdatarow('tbl_media',array('id'=>$id)); 
		if($this->request->getMethod() == "post"){
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
		if(isset($_POST['remove_img']) or isset($_POST['remove_page_banner'])){
			if($_POST['remove_img']=='1'){
			$image='';
			$pathfile='uploads/'.$data['user']->file;
		     if(unlink($pathfile)) {
		    }
			}
		}
		$description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		   $array=array(
			           'admin_id'=>$this->session->get('id'),
			            //'file'=>$image,
			            'description'=>$description,
						'title'=>$this->request->getVar('title'),
						'udf1'=>$this->request->getVar('udf1'),
						'status'=>$this->request->getVar('page_display'),
						'created_date'         =>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					//print_r($array);exit;
						$msg=updatequery('tbl_media',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>FAQ Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>FAQ Update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatarow('tbl_media',array('id'=>$id));
		$data['heading']='FAQ Edit';
		$data['title']='FAQ Edit';
		$data['view']='admin/faq_edit';
		return view('admin/index',$data);
	}
	
	
	//manage settings Start
	public function manage_site($id){
		  error_reporting(0);
		  if($id==3){
			  $site="Site Setting";
		  } else if($id==2){
			  $site="Social Links";
		  }
		  else if($id==4){
			  $site="Site Address";
		  }
		  $setting=new SettingModel();
		  if($this->request->getMethod() == "post"){
			
		   $site_logo=$this->request->getFile('site_logo');
		   $page_banner=$this->request->getFile('page_banner');
		   $favicon=$this->request->getFile('favicon');
		   $about_img=$this->request->getFile('about_img');
		   $data['user']=getdatarow('tbl_settings',array('id'=>$id));
		   if($site_logo==''){
			 $image=$data['user']->setting5;
		   }
		   else if ($site_logo->isValid() && ! $site_logo->hasMoved()){
           $image = $site_logo->getRandomName();
		   $pathlogo='uploads/'.$data['user']->setting5;
		   if(unlink($pathlogo)) {
		   }
		   $site_logo->move('uploads/', $image);
           }
		   
		  
		   
		   if($page_banner==''){
             $bannerimage=$data['user']->setting4;
		   }
		   else if ($page_banner->isValid() && ! $page_banner->hasMoved()){
           $bannerimage = $page_banner->getRandomName();
           $page_banner->move('uploads/', $bannerimage);
             $pathbanner='uploads/'.$data['user']->setting4;
		   unlink($pathbanner);
		   }
		   if($favicon==''){
			$favicon1=$data['user']->setting6;
		   }
		   else if ($favicon->isValid() && ! $favicon->hasMoved()){
           $favicon1 = $favicon->getRandomName();
           $favicon->move('uploads/', $favicon1);
		    $pathfavicon='uploads/'.$data['user']->setting6;
		   if(unlink($pathfavicon)) {
		   }
           }
		   if($id==3){
		   if(isset($_POST['remove_img'])){
			if($_POST['remove_img']=='1'){
			$bannerimage='';
			$setting4_img='uploads/'.$data['user']->setting4;
		     if(unlink($setting4_img)) {
		    }
			} else {
				
			}
			if($_POST['remove_img']=='2'){
			$image='';
			$setting5_img='uploads/'.$data['user']->setting5;
		     if(unlink($setting5_img)) {
		    }
			}
			if($_POST['remove_img']=='3'){
			$favicon1='';
			$setting6_img='uploads/'.$data['user']->setting6;
		     if(unlink($setting6_img)) {
		    }
			}
		   } 
             $array=array(
			            'setting1'=>$this->request->getPost('setting1'),
						'setting2'=>$this->request->getPost('setting2'),
			            'setting3'=>$this->request->getPost('setting3'),
			            'setting4'=>$bannerimage,
						'setting5'=>$image,
			            'setting6'=>$favicon1,
						'setting7'=>$this->request->getPost('setting7'),
						'setting8'=>$this->request->getPost('setting8'),
						'setting9'=>$this->request->getPost('setting9'),
						'setting10'=>$this->request->getPost('setting10'),
						'setting11'=>$this->request->getPost('setting11'),
						'setting12'=>$this->request->getPost('setting12'),
						);
		   
		   } else if($id==2){
		                $array=array(
			            'setting1'=>$this->request->getPost('setting1'),
						'setting2'=>$this->request->getPost('setting2'),
			            'setting3'=>$this->request->getPost('setting3'),
			            'setting4'=>$this->request->getPost('setting4'),
						'setting5'=>$this->request->getPost('setting5'),
			            'setting6'=>$this->request->getPost('setting6'),
						'setting7'=>$this->request->getPost('setting7'),
						'setting8'=>$this->request->getPost('setting8'),
						'setting9'=>$this->request->getPost('setting9'),
						'setting10'=>$this->request->getPost('setting10'),
						'setting11'=>$this->request->getPost('setting11'),
						'setting12'=>$this->request->getPost('setting12'),
						);
		   }
		   else if($id==4){
			 if($about_img==''){
			 $aboutimg=$data['user']->setting2;
		     }
		     else if ($about_img->isValid() && ! $about_img->hasMoved()){
             $aboutimg = $about_img->getRandomName();
		     $pathlogo='uploads/'.$data['user']->setting2;
		     if(unlink($pathlogo)) {
		     }
		     $about_img->move('uploads/', $aboutimg);
             }
			 if(isset($_POST['remove_img'])){
			 
			if($_POST['remove_img']=='3'){
			$aboutimg='';
			$setting6_img='uploads/'.$data['user']->setting2;
		     if(unlink($setting6_img)) {
		    }
			}
		   }
			 $setting1= str_replace('#base_url#',base_link(),$this->request->getPost('setting1'));
			 $setting4= str_replace('#base_url#',base_link(),$this->request->getPost('setting4'));
			 $setting5= str_replace('#base_url#',base_link(),$this->request->getPost('setting5'));
			 $setting6= str_replace('#base_url#',base_link(),$this->request->getPost('setting6'));
			 
			 
		                $array=array(
			            'setting1'=>$setting1,
						'setting2'=>$aboutimg,
			            'setting3'=>$this->request->getPost('setting3'),
			            'setting4'=>$this->request->getPost('setting4'),
						'setting5'=>$this->request->getPost('setting5'),
			            'setting6'=>$this->request->getPost('setting6'),
						'setting7'=>$this->request->getPost('setting7'),
						'setting8'=>$this->request->getPost('setting8'),
						'setting9'=>$this->request->getPost('setting9'),
						'setting10'=>$this->request->getPost('setting10'),
						'setting11'=>$this->request->getPost('setting11'),
						'setting12'=>$this->request->getPost('setting12'),
						);
		   }
		    
						$msg=$setting->update($id,$array);
						if($msg!=0) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Setting Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Setting Update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatasingle('tbl_settings',array('id'=>$id));
		$data['title']=$site;
		$data['page_type']=$id;
		$data['view']='admin/manage_site';
		return view('admin/index',$data);
	}
	public function super_admin($id=3){
		$session=session();
		if($session->get('role')==6 or $session->get('role')==7){
			$setting=new SettingModel();
		  if($this->request->getMethod() == "post"){
			 if($this->request->getPost('check')!='') {
		    $check=implode(",",$this->request->getPost('check'));
		   }
             $array=array(
			            'setting_count'=>$this->request->getPost('setting_count'),
						'setting_end'=>$check.','.$this->request->getPost('setting_end'),
						);
		               $msg=$setting->update($id,$array);
						if($msg!=0) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Website Setting Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Website Setting Update UnSuccessfully.</strong>
							</div>';
						}
		             }
		             
            				
	    $data['user']=getdatasingle('tbl_settings',array('id'=>$id));
		$data['title']=$site;
		$data['page_type']=$id;
		$data['view']='admin/super_admin';
		return view('admin/index',$data);
		} else {
			return redirect()->to(base_url('dashboard'));
		}
		}
		
	
	//manage settings End


	
	// Media Start
	public function media_list($mdtp){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($mdtp=='media'){$val=0;} 
		if($mdtp=='widget'){
		$val=2;
		if(!in_array(9,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Widget List';
		}		
		if($mdtp=='testimonial'){
		$val=3;
		if(!in_array(7,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Testimonial List';
		}
        if($mdtp=='check_status'){
		$val=6;
		if(!in_array(11,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Check Status List';
		}
         		
		if($mdtp=='tracking'){
		$val=4;
		if(!in_array(8,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Tracking List';
		} 
        if($mdtp=='file'){
		$data['title']='File List';	
		$val=5;
		}		
		$data['user']=getdatabyslug('tbl_media',array('page_type'=>$val));
		
		
		$data['table_name']='tbl_media';
		$data['uri']=current_url(true);
		$data['page_name']='media_list';
		$data['mdtp']=$val;
		$data['view']='admin/media_list';
		return view('admin/index',$data);
	}
	public function media_add($mdtp){
		$session=session();
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($mdtp=='media'){$val=0;} 
		if($mdtp=='widget'){
		$val=2;
		if(!in_array(9,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Widget Add';
		}		
		if($mdtp=='testimonial'){
		$val=3;
		if(!in_array(7,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Testimonial Add';
		}
        if($mdtp=='check_status'){
		$val=6;
		if(!in_array(11,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Check Status Add';
		}
         		
		if($mdtp=='tracking'){
		$val=4;
		if(!in_array(8,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Tracking Add';
		} 
        if($mdtp=='file'){
		$data['title']='File Add';	
		$val=5;
		}
		  $user=getdatasingledesc('tbl_media');
		  if($this->request->getMethod() == "post"){
		  $file=$this->request->getFile('file');
		  if ($file->isValid() && ! $file->hasMoved()){
          $image = $file->getRandomName();
          $file->move('public/uploads/', $image);
          }
		  $description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		  $attachment_link= str_replace(base_url(),'#base_url#',$this->request->getPost('attachment_link'));
		  $array=array(
			           'admin_id'=>$this->session->get('id'),
					   'title'=>$this->request->getVar('title'),
			            'description'=>$description,
			            'file'=>$image,
						'parent_page'=>$this->request->getVar('parent_page'),
						//'type'=>$this->request->getVar('type'),
						//'dob'=>$this->request->getVar('dob'),
						'page_type'=>$val,
						'status'=>$this->request->getVar('page_display'),
						'attachment_link'=>$attachment_link,
						'sort_order'=>$this->request->getVar('sort_order'),
						'custom_data'=>$this->request->getPost('custom_data'),
						'udf1'=>$this->request->getPost('udf1'),
						'udf2'=>$this->request->getPost('udf2'),
						'degination'=>$this->request->getPost('degination'),
						'emp_code'=>$this->request->getPost('emp_code'),
						'blood_group'=>$this->request->getPost('blood_group'),
						'emg_no'=>$this->request->getPost('emg_no'),
						'updated_date'=>date('Y-m-d H:i:s'),
						'created_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					    //print_r($array);exit;
						$msg=insertquery('tbl_media',$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Media Created successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Media Created UnSuccessfully.</strong>
							</div>';
						}
            			 	
			
		}
		$data['page_type']=$val;
		$data['mdtp']=$val;
		$data['heading']='Create New Media';
		$data['view']='admin/media_add';
		return view('admin/index',$data);
	}
	
	public function media_edit($id,$mdtp){
		error_reporting(0);
		$session=session();
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($mdtp=='media'){$val=0;} 
		if($mdtp=='widget'){
		$val=2;
		if(!in_array(9,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Widget Add';
		}		
		if($mdtp=='testimonial'){
		$val=3;
		if(!in_array(7,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Testimonial Add';
		}
        if($mdtp=='check_status'){
		$val=6;
		if(!in_array(11,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Check Status Add';
		}
         

		 
		if($mdtp=='tracking'){
		$val=4;
		if(!in_array(8,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Tracking Add';
		} 
        if($mdtp=='file'){
		$data['title']='File Add';	
		$val=5;
		}
		$pages=new PagesModel();
		 $data['user']=getdatarow('tbl_media',array('id'=>$id)); 
		if($this->request->getMethod() == "post"){
		$file=$this->request->getFile('file');
		if($file==''){
	    $image=$data['user']->file;
		}
		else if ($file->isValid() && ! $file->hasMoved()){
        $image = $file->getRandomName();
        $file->move('public/uploads/', $image);
		$pathfileb='public/uploads/'.$data['user']->file;
		 if(unlink($pathfileb)) {
		  }
        }
		if(isset($_POST['remove_img']) or isset($_POST['remove_page_banner'])){
			if($_POST['remove_img']=='1'){
			$image='';
			$pathfile='public/uploads/'.$data['user']->file;
		     if(unlink($pathfile)) {
		    }
			}
		}
		$description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		$attachment_link= str_replace(base_url(),'#base_url#',$this->request->getPost('attachment_link'));
		   $array=array(
			           'admin_id'=>$this->session->get('id'),
					   'title'=>$this->request->getVar('title'),
			            'description'=>$description,
			            'file'=>$image,
						'parent_page'=>$this->request->getVar('parent_page'),
						'page_type'=>$val,
						//'type'=>$this->request->getVar('type'),
						//'dob'=>$this->request->getVar('dob'),
						'status'=>$this->request->getVar('page_display'),
						'attachment_link'=>$attachment_link,
						'sort_order'=>$this->request->getVar('sort_order'),
						'custom_data'=>$this->request->getPost('custom_data'),
						'udf1'=>$this->request->getPost('udf1'),
						'udf2'=>$this->request->getPost('udf2'),
						'degination'=>$this->request->getPost('degination'),
						'emp_code'=>$this->request->getPost('emp_code'),
						'blood_group'=>$this->request->getPost('blood_group'),
						'emg_no'=>$this->request->getPost('emg_no'),
						'created_date'         =>date('Y-m-d H:i:s')
						);
						
						
						//echo "<pre>";
					//print_r($array);exit;
						$msg=updatequery('tbl_media',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Page Update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatarow('tbl_media',array('id'=>$id));
		$data['page_type']=$val;
		$data['mdtp']=$val;
		$data['heading']='Create New Media';
		$data['title']='Media Edit';
		$data['view']='admin/media_edit';
		return view('admin/index',$data);
	}
	// Media End
	
	// Student Start
	
	// Media Start
	public function salary_list($mdtp){
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($mdtp=='media'){$val=0;} 
		if($mdtp=='widget'){
		$val=2;
		if(!in_array(9,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Widget List';
		}		
		if($mdtp=='testimonial'){
		$val=3;
		if(!in_array(7,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Testimonial List';
		}
        if($mdtp=='check_status'){
		$val=6;
		if(!in_array(11,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Check Status List';
		}
         		
		if($mdtp=='tracking'){
		$val=4;
		if(!in_array(8,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Tracking List';
		} 
        if($mdtp=='file'){
		$data['title']='File List';	
		$val=5;
		}		
		$data['user']=getdatadesc('tbl_student',array('page_type'=>$val));
		
		
		$data['table_name']='tbl_student';
		$data['uri']=current_url(true);
		$data['page_name']='salary_list';
		$data['mdtp']=$val;
		$data['view']='admin/salary_list';
		return view('admin/index',$data);
	}
	public function salary_add($mdtp){
		$session=session();
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($mdtp=='media'){$val=0;} 
		if($mdtp=='widget'){
		$val=2;
		if(!in_array(9,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Widget Add';
		}		
		if($mdtp=='testimonial'){
		$val=3;
		if(!in_array(7,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Testimonial Add';
		}
        if($mdtp=='check_status'){
		$val=6;
		if(!in_array(11,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Check Status Add';
		}
         		
		if($mdtp=='tracking'){
		$val=4;
		if(!in_array(8,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Tracking Add';
		} 
        if($mdtp=='file'){
		$data['title']='File Add';	
		$val=5;
		}
		  $user=getdatasingledesc('tbl_media');
		  if($this->request->getMethod() == "post"){
		 
		  
		  $description= str_replace(array_out(),array_in(),$this->request->getPost('description'));
		  $array=array(
			           'admin_id'=>$this->session->get('id'),
					   'title'=>$this->request->getVar('title'),
					   'address'=>$this->request->getVar('address'),
					   'emp_code'=>$this->request->getVar('emp_code'),
					   'salary_word'=>$this->request->getVar('salary_word'),
					   'bank'=>$this->request->getVar('bank'),
			            'description'=>$description,
						 'status'=>$this->request->getVar('page_display'),
						'updated_date'=>date('Y-m-d H:i:s'),
						'created_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					    //print_r($array);exit;
						$msg=insertquery('tbl_student',$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Salary Created successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Salary Created UnSuccessfully.</strong>
							</div>';
						}
            			 	
			
		}
		$data['page_type']=$val;
		$data['mdtp']=$val;
		$data['heading']='Add Salary';
		$data['view']='admin/salary_add';
		return view('admin/index',$data);
	}
	
	public function salary_edit($id,$mdtp){
		error_reporting(0);
		$session=session();
		$userweb=getdatasingle('tbl_settings',array('id'=>'3'));
        $arrw=explode(",",$userweb->setting_end);
		$val=0;
		if($mdtp=='media'){$val=0;} 
		if($mdtp=='widget'){
		$val=2;
		if(!in_array(9,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Widget Add';
		}		
		if($mdtp=='testimonial'){
		$val=3;
		if(!in_array(7,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Testimonial Add';
		}
        if($mdtp=='check_status'){
		$val=6;
		if(!in_array(11,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Check Status Add';
		}
         		
		if($mdtp=='tracking'){
		$val=4;
		if(!in_array(8,$arrw)) {
		return redirect()->to(base_url('dashboard')); 
		}
		$data['title']='Tracking Add';
		} 
        if($mdtp=='file'){
		$data['title']='File Add';	
		$val=5;
		}
		$pages=new PagesModel();
		 $data['user']=getdatarow('tbl_student',array('id'=>$id)); 
		if($this->request->getMethod() == "post"){
		
		   $array=array(
			           'admin_id'=>$this->session->get('id'),
					   'title'=>$this->request->getVar('title'),
					   'status'=>$this->request->getVar('page_display'),
					   'address'=>$this->request->getVar('address'),
					   'emp_code'=>$this->request->getVar('emp_code'),
					   'salary_word'=>$this->request->getVar('salary_word'),
					   'bank'=>$this->request->getVar('bank'),
			            'description'=>$description,
						
						'updated_date'=>date('Y-m-d H:i:s'),
						'created_date'=>date('Y-m-d H:i:s')
						);
						//echo "<pre>";
					//print_r($array);exit;
						$msg=updatequery('tbl_student',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Salary Update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Salary Update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatarow('tbl_student',array('id'=>$id));
		$data['page_type']=$val;
		$data['mdtp']=$val;
		$data['heading']='Update Salary';
		$data['title']='Update Salary';
		$data['view']='admin/salary_edit';
		return view('admin/index',$data);
	}
	// Media End
	
	
	// Student End
	// Gallery Start
	public function multigallery($id){
		$session=session();
		$session->set('galleryid',$id);
		$data['user']=getdatabyslug('tbl_media',array('parent_page'=>$id,'page_type'=>'1'));
		$data['title']='Gallery List';
		$data['uri']=current_url(true);
		$data['view']='admin/multigallery';
		return view('admin/index',$data);
	}
	
	public function galleryimageup(){
		$session=session();
		$proid=$session->get('galleryid');
		
        $arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
		if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
			echo "false";
			return;
		}
 
		if (!file_exists('uploads')) {
			mkdir('uploads', 0777);
		}
 
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['file']['name']);
        $image=time() . '_' . $_FILES['file']['name'];
        $array=array(
            'file'          =>$image,
			'page_type'         =>1,
			'parent_page'       =>$proid,
			'admin_id'          =>$this->session->get('id'),
			'status'         =>'1',
			);
			insertquery('tbl_media',$array);
			$imglist=getdatabyslug('tbl_media',array('parent_page'=>$proid,'page_type'=>'1'));
			echo "<pre>";
			print_r($imglist);
		     			
    }
    public function galleryupload(){
		$session=session();
	   error_reporting(0);
	   $proid= $_POST['proid'];
	   $productid= $_POST['productid'];
	   $arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
       $user=getdatasingle('tbl_media',array('id'=>$proid));
	
	   $path='uploads/'.$user->file;
		if(unlink($path)) {
		}
		if (!(in_array($_FILES['image']['type'], $arr_file_types))) {
			echo "false";
			return;
		}
 
		if (!file_exists('uploads')) {
			mkdir('uploads', 0777);
		}
		move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . time() . '_' . $_FILES['image']['name']);
		$image=time() . '_' . $_FILES['image']['name'];
            $array=array(
            'file'          =>$image,
			'admin_id'          =>$session->get('id'),
			'status'         =>'1',
			);
			updatequery('tbl_media',array('id'=>$proid),$array);
			$imglist=getdatabyslug('tbl_media',array('id'=>$productid));
			
    }
    public function deletegallerymulimage(){
		error_reporting(0);
		$user=getdatasingle('tbl_media',array('id'=>$_POST['val']));
		$path='uploads/'.$user->file;	
		unlink($path);	
		deletequery('tbl_media',array('id'=>$_POST['val']));
	}
	
	// Gallery End
	
	public function setproid(){
		if(isset($_POST['val'])){
			$proid= $_POST['val'];
			$session=session();
			$session->set('proid',$proid);
		}
	}
	
	
	public function admin_profile(){
		$session=session();
		$id=$session->get('id');
		if($this->request->getMethod() == "post"){
		$userweb=getdatasingle('tbl_admin',array('id'=>$id));
		   $array=array(
			           'name'=>$this->request->getVar('name'),
					   'phone'=>$this->request->getVar('phone'),
						);
						//echo "<pre>";
					//print_r($array);exit;
						$msg=updatequery('tbl_admin',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong> Profile update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Profile update UnSuccessfully.</strong>
							</div>';
						}
            				
			
		}
		$data['user']=getdatarow('tbl_admin',array('id'=>$id));
		$data['title']='Admin Profile';
		$data['heading']='Admin Profile';
		$data['view']='admin/admin_profile';
		return view('admin/index',$data);
	}
	public function admin_reset_password(){
		$session=session();
		$id=$session->get('id');
		if($this->request->getMethod() == "post"){
		$user=getdatasingle('tbl_admin',array('id'=>$id));
		if($user) {
			if($user->password!=md5($this->request->getVar('old'))){
				 $data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Old Password Not Match.</strong>
							</div>';
			} else {
				$array=array(
			           'password'=>md5($this->request->getVar('new')),
						);
						$msg=updatequery('tbl_admin',array('id'=>$id),$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Password change successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Password change UnSuccessfully.</strong>
							</div>';
						}
				
			}
		    				
		}	
		}
		$data['user']=getdatarow('tbl_admin',array('id'=>$id));
		$data['title']='Change Password';
		$data['heading']='Change Password';
		$data['view']='admin/admin_change_password';
		return view('admin/index',$data);
	}
	
   // Admin Profile End
   public function admin_list(){
	   $session=session();
		if($session->get('role')==6 or $session->get('role')==7){
		$data['user']=getdata('tbl_admin');
		$data['title']='Admin List';
		$data['heading']='Admin List';
		$data['view']='admin/admin_list';
		return view('admin/index',$data);
		} else {
			return redirect()->to(base_url('dashboard'));
		}
	}
	public function admin_add(){
		$session=session();
		if($session->get('role')==6 or $session->get('role')==7){
		$session=session();
		$id=$session->get('id');
		if($this->request->getMethod() == "post"){
		     $array=array(
			           'name'=>$this->request->getVar('name'),
			           'email'=>$this->request->getVar('email'),
			           'phone'=>$this->request->getVar('phone'),
			           'status'=>$this->request->getVar('status'),
			           'password'=>md5($this->request->getVar('password')),
					   'created_date'=>date('Y-m-d H:i:s')
						);
						$user=getdatasingle('tbl_admin',array('email'=>$this->request->getVar('email')));
						if(!$user) {
						$msg=insertquery('tbl_admin',$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Admin add successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Admin add UnSuccessfully.</strong>
							</div>';
						}
		            } else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Email already exits.</strong>
							</div>';
						
					}		
			
			
		}
		$data['title']='Admin Add';
		$data['heading']='Admin Add';
		$data['view']='admin/admin_add';
		return view('admin/index',$data);
		} else {
			return redirect()->to(base_url('dashboard'));
		}
	}
	public function admin_edit($id){
		$session=session();
		if($session->get('role')==6 or $session->get('role')==7){
		$session=session();
		$id=$session->get('id');
		if($this->request->getMethod() == "post"){
			if($this->request->getVar('password')==''){
			$password=$data['user']->password;
		} else {
			$password=md5($this->request->getVar('password'));
		}
		     $array=array(
			           'name'=>$this->request->getVar('name'),
			           'phone'=>$this->request->getVar('phone'),
			           'status'=>$this->request->getVar('status'),
			           'password'=>$password,
					   'created_date'=>date('Y-m-d H:i:s')
						);
						$msg=insertquery('tbl_admin',$array);
						if($msg) {
						$data['success']='<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Admin update successfully.</strong> 
							</div>';
							} else {
						$data['success']='<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<strong>Admin update UnSuccessfully.</strong>
							</div>';
						}
								
			
		}
		$data['user']=getdatarow('tbl_admin',array('id'=>$id));
		$data['title']='Admin Edit';
		$data['heading']='Admin Edit';
		$data['view']='admin/admin_edit';
		return view('admin/index',$data);
		} else {
			return redirect()->to(base_url('dashboard'));
		}
	}
	// Admin End
	public function registration_list(){
		$data['user']=getdata('tbl_registration');
		$data['title']='Registration List';
		$data['table_name']='tbl_pages';
		$data['view']='admin/registration_list';
		return view('admin/index',$data);
	}

}
