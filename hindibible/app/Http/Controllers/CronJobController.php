<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Models\MemberModel;
use App\Models\MailModel;
use App\Models\Package;



class CronJobController extends Controller
{

    public function seven_day_mails()
    {
    	$day_name = date("D");
    	if($day_name=='Mon')
    	{
        	MemberModel::seven_day_mails();
    	}
    }

    public function next_step()
    {
        $day_name = date("D");
        if($day_name=='Mon')
        {
            MemberModel::next_step();
        }
    }



}