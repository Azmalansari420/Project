<?php
namespace App\Http\Controllers\APi\User;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;
use App\Helper\ImageManager;

class PostController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'post',
    ); 

    protected $user_id = null;

    public function __construct()
    {
        $authToken = request()->header('Authorization');
        $user = Helpers::decode_token($authToken);
        if ($user) {
            $this->user_id = $user->user_id;
        }
    }

    public function list(Request $request)
    {
        $limit = 12;
        $status = 1;
        $page = $request->page? $request->page : 0;
        $offset = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        

        $data_list = DB::table($this->arr_values['table_name'])
        ->where([$this->arr_values['table_name'].'.status' => $status])
        
        ->leftJoin("users", "users.id", "=", $this->arr_values['table_name'].".user_id")
        ->leftJoin("post_media", "post_media.post_id", "=", $this->arr_values['table_name'].".id")

        ->select(
            $this->arr_values['table_name'].".*",
            "users.name as user_name",
            "users.id as user_id",
            "users.image as user_image",
            DB::raw("GROUP_CONCAT(post_media.image_video) as media_files"),
            DB::raw("(SELECT post_media.image_video FROM post_media WHERE post_media.post_id = ".$this->arr_values['table_name'].".id ORDER BY post_media.id ASC LIMIT 1) as first_media"),
            DB::raw("(SELECT post_media.post_type FROM post_media WHERE post_media.post_id = ".$this->arr_values['table_name'].".id ORDER BY post_media.id ASC LIMIT 1) as first_media_type")
        )

        ->groupBy($this->arr_values['table_name'].".id")
        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id', $order_by);
    


        


        $data_list = $data_list->get();
        $data_list->transform(function ($item) {
            if (!empty($item->media_files)) {
                $mediaArray = explode(',', $item->media_files);
                $item->media_files = array_map(fn($file) => url('storage/app/public/upload/'.$file), $mediaArray);
            } else {
                $item->media_files = [];
            }

            $item->user_image = url('storage/app/public/upload/'.$item->user_image);
            $item->first_media = url('storage/app/public/upload/'.$item->first_media);

            return $item;
        });




        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    
    public function add(Request $request)
    {
        $entryStatus = false;

        $user_id = $this->user_id;
        
        $image_video = $request->image_video;
        $show_statusString = $request->show_status;

        if($show_statusString=='Public') $show_status = 1;
        else if($show_statusString=='Friends') $show_status = 2;
        else if($show_statusString=='Only Me') $show_status = 3;
        
        $data['user_id'] = $user_id;
        $data['description'] = $request->description;
        $data['show_status'] = $show_status;

        
        
        $data['status'] = 1;
        $data['add_by'] = $user_id;
        $data['add_date_time'] = date("Y-m-d H:i:s");
        $data['update_date_time'] = date("Y-m-d H:i:s");



        if(empty($image_video))
        {
            $action = 'return';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Please Select media!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }




        $insertId = DB::table($this->arr_values['table_name'])->insertGetId($data);
        if($insertId)
        {
            $entryStatus = true;
        }

        if($entryStatus)
        {

            foreach ($image_video as $key => $value)
            {
                if (strpos($value['type'], 'image/') === 0)
                {
                    $format = 'jpg';
                    $post_mediaData['post_type'] = 1;
                }
                else
                {
                    $format = 'mp4';
                    $post_mediaData['post_type'] = 2;
                }


                $post_mediaData['post_id'] = $insertId;
                $post_mediaData['image_video'] = ImageManager::uploadAPiImage('upload',$format,$value['string']);
                $post_mediaData['status'] = 1;
                $post_mediaData['user_id'] = $user_id;
                $post_mediaData['add_by'] = $user_id;
                $post_mediaData['add_date_time'] = date("Y-m-d H:i:s");
                $post_mediaData['update_date_time'] = date("Y-m-d H:i:s");


                DB::table('post_media')->insert($post_mediaData);
            }
            

            $action = 'return';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $action = 'return';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        
    }
    
    public function post_like_unlike(Request $request)
    {
        $entryStatus = false;
        $id = $request->post_id;
        $user_id = $this->user_id;


        
        $post = DB::table("post")->where('id',$id)->first();
        if(empty($post))
        {
            $action = 'return';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Post ID!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

        $check_post_like = DB::table("post_like")->where(['post_id'=>$id,"user_id"=>$user_id,])->first();
        if(empty($check_post_like))
        {
            DB::table("post_like")->insert(["user_id"=>$user_id,"post_id"=>$id,]);
            DB::table($this->arr_values['table_name'])->where('id', $id)->update(['total_like' => DB::raw('total_like + 1')]);
        }
        else
        {
            DB::table("post_like")->where(["user_id"=>$user_id,"post_id"=>$id,])->delete();
            DB::table($this->arr_values['table_name'])->where('id', $id)->update(['total_like' => DB::raw('total_like - 1')]);            
        }



        $entryStatus = true;           

        if($entryStatus)
        {
            $action = 'update';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $action = 'update';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        
    }
    public function post_share(Request $request)
    {
        $entryStatus = false;
        $id = $request->post_id;
        $to_user_id = $request->to_user_id;
        $user_id = $this->user_id;


        
        $post = DB::table("post")->where('id',$id)->first();
        if(empty($post))
        {
            $action = 'return';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Post ID!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

        
        DB::table("post_share")->insert(["user_id"=>$user_id,"post_id"=>$id,"to_user_id"=>$to_user_id,]);
        DB::table($this->arr_values['table_name'])->where('id', $id)->update(['total_share' => DB::raw('total_share + 1')]);
        
        



        $entryStatus = true;           

        if($entryStatus)
        {
            $action = 'update';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $action = 'update';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        
    }
    
    public function update(Request $request)
    {
        $entryStatus = false;
        $id = $request->id;


        // DB::table("apitest")->insert(["name"=>'login',"text"=>($request->image)]);

        $user_id = $this->user_id;
        if(empty($id))
        {
            $package = DB::table("package")->where('id',$request->package_id)->first();
            if(empty($package))
            {
                $action = 'return';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Wrong Package ID!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            $total_amount = $package->sale_price;
            $paid_amount = $request->amount;            

            $data['package_id'] = $request->package_id;
            $data['user_id'] = $user_id;
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['mobile'] = $request->mobile;

            $data['total_amount'] = $total_amount;
            
            $data['status'] = 1;
            $data['add_date_time'] = date("Y-m-d H:i:s");
            $data['update_date_time'] = date("Y-m-d H:i:s");

            $insertId = DB::table($this->arr_values['table_name'])->insertGetId($data);
            if($insertId)
            {
                $entryStatus = true;
            }

            if($entryStatus)
            {
                if(!empty($paid_amount))
                {

                    $image = ImageManager::uploadAPiImage('screenshot','jpg',$request->image);

                    $data2['user_id'] = $user_id;
                    $data2['employee_payment_id'] = $insertId;
                    $data2['date'] = $request->date;
                    $data2['amount'] = $request->amount;
                    $data2['image'] = $image;
                    $data2['message'] = $request->message;
                    $data2['status'] = 1;
                    $data2['add_date_time'] = date("Y-m-d H:i:s");
                    $data2['update_date_time'] = date("Y-m-d H:i:s");
                    DB::table("employee_more_payment")->insertGetId($data2);
                }

                $action = 'return';
                $responseCode = 200;
                $result['status'] = $responseCode;
                $result['message'] = 'Success';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            else
            {
                $action = 'return';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Error!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
        }
        else
        {
            $package = DB::table("package")->where('id',$request->package_id)->first();
            if(empty($package))
            {
                $action = 'return';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Wrong Package ID!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            $total_amount = $package->sale_price;
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['mobile'] = $request->mobile;
            $data['package_id'] = $request->package_id;
            $data['total_amount'] = $total_amount;

            DB::table($this->arr_values['table_name'])->where(["id"=>$id,])->update($data);
            $entryStatus = true;           

            if($entryStatus)
            {
                $action = 'update';
                $responseCode = 200;
                $result['status'] = $responseCode;
                $result['message'] = 'Success';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            else
            {
                $action = 'update';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Error!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
        }
    }
    
    public function delete(Request $request)
    {
        $id = $request->id;

        $data = DB::table($this->arr_values['table_name'])->where('user_id',$this->user_id)->where('id',$id)->first();
        if(!empty($data))
        {
            DB::table($this->arr_values['table_name'])->where('user_id',$this->user_id)->where('id',$id)->delete();
            
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Delete Successfuly';
            $result['action'] = 'delete';
            $result['data'] = [];
        }
        else
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Id!';
            $result['action'] = 'delete';
            $result['data'] = [];
        }        
        return response()->json($result, $responseCode);
    }
       
}