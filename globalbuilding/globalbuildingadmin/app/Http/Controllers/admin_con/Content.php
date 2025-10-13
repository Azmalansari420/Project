<?php

namespace App\Http\Controllers\admin_con;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Content extends Controller
{

  

    protected $arr_values = array(
                            'page_title'=>'Content',
                            'table_name'=>'content',
                            'upload_path'=>'media/uploads/content/',
                            'load_path'=>'admin/content/edit',
                            'redirect_route_path'=>'admin/content/edit',
                            'update_page_url'=>'admin/content/update',
                           );


    public function loadForm($id)
    {
        checkAdminSession();
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $redirect_route_path = $this->arr_values['redirect_route_path'];
        $update_page_url = $this->arr_values['update_page_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id',$id)->first();
        return view($this->arr_values['load_path'], compact('page_title', 'upload_path', 'redirect_route_path', 'EDITDATA','update_page_url'));
    }


    

    /*update data*/
    public function submitForm(Request $request, $id)
    {
        

        $imageName = $request->input('oldlogo'); 
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $imageName = uniqid() . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(public_path($this->arr_values['upload_path']), $imageName);

            // Delete old image
            $oldImagePath = public_path($this->arr_values['upload_path'] . $request->input('oldlogo'));
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $data = [
            'content' => $request->input('content'),
            'logo' => $imageName, 
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route($this->arr_values['redirect_route_path'], ['id' => $id])->with('message', 'Setting Updated successfully!');
        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage()); // Log the error for debugging
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }















}
