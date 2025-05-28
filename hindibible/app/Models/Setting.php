<?php

namespace App\Models;

use App\CPU\Helpers;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Setting extends Model
{
    const CREATED_AT = 'add_date_time';
    const UPDATED_AT = 'update_date_time';
    protected $table = 'setting';
    // protected $casts = [
    //     'parent_id' => 'integer',
    //     'position' => 'integer',
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    //     'home_status' => 'integer',
    //     'priority' => 'integer'
    // ];

    public static function get()
    {
        $setting = DB::table('setting')->get();
        return [
            "gst"=>json_decode($setting[0]->data)->gst,
            "tds"=>json_decode($setting[0]->data)->tds,
            "main"=>json_decode($setting[1]->data),
            "material"=>json_decode($setting[2]->data),
            "payoutpin"=>json_decode($setting[3]->data)->pin,
            "dashboard"=>json_decode($setting[4]->data),
            "emails"=>json_decode($setting[5]->data),
            "webinar"=>json_decode($setting[6]->data),
        ];
    }


    
}
