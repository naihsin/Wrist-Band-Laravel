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
                        ->get();
        $split = explode(",",$log);
        $num=0;$sum=0;
        foreach($split as $i){
            $num++;
            $sum+=(int)$i;
        }
        //echo $sum . " " . $num . " "; 
        echo (int)($sum/$num);
       
    }
}
