<?php

namespace App\Http\Middleware;

use Closure;
use App\AppUser;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $users=AppUser::all();
        $password=$users->where('id',$request->id)->value('password');
        if($password==$request->password){
            print "Login succes";
            return response()->view('welcome');
        }
        else{
            return response()->view('userlogin');
        }
       // return $password;
    }
}
