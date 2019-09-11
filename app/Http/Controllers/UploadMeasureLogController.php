<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeasureLog;

class UploadMeasureLogController extends Controller
{
    public function index(){
        return view('uploadmeasurelog');
    }
    public function update(Request $request){
       $log = new MeasureLog();
       $log->SerialID = $request->SerialID;
       $log->PersonalID = $request->PersonalID;
       $log->BandID = $request->BandID;
       $log->Steps = $request->Steps;
       $log->Distance = $request->Distance;
       $log->ExerciseCalories = $request->ExerciseCalories;
       $log->RestCalories = $request->RestCalories;
       $log->Heartrate = $request->Heartrate;
       $log->StartTime = $request->StartTime;
       $log->StopTime = $request->StopTime;
       $log->save();
       return $log;
    }
}
