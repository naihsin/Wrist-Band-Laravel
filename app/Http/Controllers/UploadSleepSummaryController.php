<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SleepSummary;

class UploadSleepSummaryController extends Controller
{
    public function index(){
        return view('uploadsleepsummary');
    }
    public function update(Request $request){
       $log = new SleepSummary();
       $log->SerialID = $request->SerialID;
       $log->PersonalID = $request->PersonalID;
       $log->BandID = $request->BandID;
       $log->SleepStartTime = $request->SleepStartTime;
       $log->SleepStopTime = $request->SleepStopTime;
       $log->DeepSleepStartTime = $request->DeepSleepStartTime;
       $log->LightSleepStartTime = $request->LightSleepStartTime;
       $log->OtherSleepStartTime = $request->OtherSleepStartTime;
       $log->save();
       return $log;
    }
}
