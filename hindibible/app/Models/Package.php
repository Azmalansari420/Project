<?php

namespace App\Models;

use App\CPU\Helpers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Package extends Model
{
    const CREATED_AT = 'add_date_time';
    const UPDATED_AT = 'update_date_time';
    protected $table = 'package';
    // protected $casts = [
    //     'parent_id' => 'integer',
    //     'position' => 'integer',
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    //     'home_status' => 'integer',
    //     'priority' => 'integer'
    // ];

    public static function all_packages()
    {
        return DB::table("package")->orderBy("position","asc")->where('status',1)->get();
    }
    public static function get_package($package_id)
    {
        return DB::table("package")->orderBy("name","asc")->where('id',$package_id)->first();
    }
    public static function get_package_by_slug($slug)
    {
        return DB::table("package")->orderBy("name","asc")->where('slug',$slug)->first();
    }
    public static function package_name($package_id)
    {
        return DB::table("package")->select('name')->where('id',$package_id)->first();
    }

    public static function package_sale_count($package_id)
    {
        $package = DB::table("package")->select('total_sale')->where('id',$package_id)->first();
        if(!empty($package))
        {
            DB::table('package')->where('id',$package_id)->update(['total_sale'=>$package->total_sale+1]);
        }
    }
    public static function package_upgrade_count($package_id)
    {
        $package = DB::table("package")->select('total_upgrade')->where('id',$package_id)->first();
        if(!empty($package))
        {
            DB::table('package')->where('id',$package_id)->update(['total_upgrade'=>$package->total_upgrade+1]);
        }
    }

    
}
