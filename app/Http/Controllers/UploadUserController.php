<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UploadUserController extends Controller
{
    public function index(){
        return view('uploaduser');
    }
    public function update(Request $request){
       $user = new User();
       $user->PersonalID = $request->PersonalID;
       $user->Name = $request->Name;
       $user->Password = $request->Password;
       $user->Gender = $request->Gender;
       $user->Age = $request->Age;
       $user->Height = $request->Height;
       $user->Weight = $request->Weight;
       $user->save();
       return $user;
    }
}
