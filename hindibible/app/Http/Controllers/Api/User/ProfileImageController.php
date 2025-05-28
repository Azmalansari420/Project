<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Custom;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\User;
 
class UserProfileImageController extends Controller
{
    protected $arr_values = array(
        'routename'=>'user.profile-image.', 
        'title'=>'Profile Image', 
        'table_name'=>'users',
        'page_title'=>'Profile Image',
        "folder_name"=>user_view_folder.'/profile-image',
        "upload_path"=>'upload/',
        "keys"=>'id,name',
    );  

    public function __construct()
    {
        Helpers::create_importent_columns($this->arr_values['table_name']);
    }

   
   
    public function edit($id='')
    {   
        $id = Crypt::decryptString($id);
        $data['title'] = "".$this->arr_values['title'];
        $data['page_title'] = "All ".$this->arr_values['page_title'];
        $data['table_name'] = $this->arr_values['table_name'];
        $data['upload_path'] = $this->arr_values['upload_path'];
        $data['submit_url'] = route($this->arr_values['routename'].'update');
        $data['keys'] = $this->arr_values['keys'];          
        $data['pagenation'] = array($this->arr_values['title']);
        $data['trash'] = '';

        $row = User::where(["id"=>$id,])->first();
        if(!empty($row))
        {
            return view($this->arr_values['folder_name'].'/form',compact('data','row'));
        }
        else
        {
            return view(user_view_folder.'/404',compact('data'));            
        }
    }
   
    

    public function update(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        if(empty($id)) $data = new User;
        else $data = User::find($id);

        $session = Session::get('user');
        $add_by = $session['id'];


        
        if (isset($_FILES['croppedImage']) && $_FILES['croppedImage']['error'] == 0)
        {            
            $uploadDir = storage_path('app/public/'.$this->arr_values['upload_path']);
            
            
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $fileName = Carbon::now()->toDateString() . "-" . uniqid() . '.jpg';
            $filePath = $uploadDir . $fileName;
            
            if (move_uploaded_file($_FILES['croppedImage']['tmp_name'], $filePath)) {
                // echo json_encode(['status' => 'success', 'path' => $filePath]);
            } else {
                $action = 'reload';
                $responseCode = 200;
                $result['status'] = $responseCode;
                $result['message'] = 'Failed to save image.';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
        }
        else
        {
            $action = 'reload';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'No image file uploaded.';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        
        

        $data->add_by = $add_by;
        $data->is_delete = 0;

        $data->image = $fileName;

        if($data->save())
        {
            $action = 'reload';            
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }

    public function upload_temp(Request $request)
    {
        $data = [];
        $session = Session::get('user');
        $add_by = $session['id'];
        
        
       
        $image = ImageManager::profile_image_upload('temp/', 'jpg', $request->file('image'));
        
        if($request->file('image'))
        {
            $imagePath = storage_path('app/public/temp/').$image;
            list($originalWidth, $originalHeight, $imageType) = getimagesize($imagePath);

            $targetWidth = $request->imagewidth;
            $targetHeight = ($originalHeight / $originalWidth) * $targetWidth;;

            switch ($imageType) {
            case IMAGETYPE_JPEG:
                $sourceImage = imagecreatefromjpeg($imagePath);
                break;
            case IMAGETYPE_PNG:
                $sourceImage = imagecreatefrompng($imagePath);
                break;
            case IMAGETYPE_GIF:
                $sourceImage = imagecreatefromgif($imagePath);
                break;        
            }

            // if(!empty($sourceImage))
            // {
            //     $croppedImage = ImageCreateTrueColor($targetWidth, $targetHeight);         
            //     imagecopyresampled($croppedImage, $sourceImage, 0, 0, 0, 0, $targetWidth, $targetHeight, $originalWidth, $originalHeight);          
            //     imagejpeg($croppedImage, $imagePath,95);
            //     imagedestroy($sourceImage);
            //     imagedestroy($croppedImage);
            // }
        }


        
        
        
        $action = 'imagecropopen';
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = $action;
        $result['data'] = ["image"=>asset('storage/app/public/temp/'.$image),"imagename"=>$image,];
        return response()->json($result, $responseCode);
        
    }
    


}