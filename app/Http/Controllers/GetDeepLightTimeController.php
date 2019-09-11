<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SleepSummary;

class GetDeepLightTimeController extends Controller
{
    public function index(){
        return view('getdeeplighttime');
    }
    public function get(Request $request){
        $PersonalID = $request->PersonalID;
        $BandID = $request->BandID;
        $log = SleepSummary::select(DB::raw('date(SleepStartTime) as Date'), DB::raw('time_format(DeepSleepStartTime,"%H:%i:%s") as DeepSleepStartTime'), DB::raw('time_format(LightSleepStartTime,"%H:%i:%s") as LightSleepStartTime'))
                        ->where('PersonalID',$PersonalID)
                        ->where('BandID',$BandID)
                        ->groupby('Date')
                        ->get();
        foreach($log as $log)
            echo $log . " ";     
    }
}
