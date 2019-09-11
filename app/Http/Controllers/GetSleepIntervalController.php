<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SleepSummary;

class GetSleepIntervalController extends Controller
{
    public function index(){
        return view('getsleepinterval');
    }
    public function get(Request $request){
        $PersonalID = $request->PersonalID;
        $BandID = $request->BandID;
        $log = SleepSummary::select(DB::raw('date(SleepStartTime) as Date') ,DB::raw('time_format(SleepStartTime,"%H:%i:%s") as SleepStartTime'), DB::raw('time_format(SleepStopTime,"%H:%i:%s") as SleepStopTime'), DB::raw('time(SleepStopTime-SleepStartTime) as SleepInterval'))
                        ->where('PersonalID',$PersonalID)
                        ->where('BandID',$BandID)
                        ->groupby('Date')
                        ->get();
        foreach($log as $log)
            echo $log . " ";     
    }
}
