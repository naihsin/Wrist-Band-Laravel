<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppUser;

class UserLoginController extends Controller
{
    public function index(){
        return view('userlogin');
    }

    public function verify(Request $request){
    }    
}
