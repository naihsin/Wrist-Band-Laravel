<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\MeasureLog;

class GetHeartrateController extends Controller
{   
    public function index(){
        return view('getheartrate');
    }
    public function get(Request $request){
        $PersonalID = $request->PersonalID;
        $BandID = $request->BandID;
        $log = MeasureLog::where('PersonalID',$PersonalID)
                        ->where('BandID',$BandID)
                        ->avg('Heartrate');
       // foreach($log as $log)
            echo $log . " ";     
    }
}
