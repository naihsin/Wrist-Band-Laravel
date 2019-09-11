<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MeasureLog;

class GetTotalCaloriesController extends Controller
{
    public function index(){
        return view('gettotalcalories');
    }
    public function get(Request $request){
        $PersonalID = $request->PersonalID;
        $BandID = $request->BandID;
        $log = MeasureLog::select(DB::raw('date(starttime) as Date') , DB::raw('sum(ExerciseCalories+RestCalories) as DayTotalCalories'))
                        ->where('PersonalID',$PersonalID)
                        ->where('BandID',$BandID)
                        ->groupby('Date')
                        ->get();
        foreach($log as $log)
            echo $log . " ";     
    }
}
