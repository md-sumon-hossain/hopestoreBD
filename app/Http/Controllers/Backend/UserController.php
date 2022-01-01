<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){

        return view('backend.dashboard');
    }
    public function userlist(){
        $users=User::all();
        return view ('backend.layouts.userlists', compact('users'));
    }

    public function login()
    {

       return view('backend.layouts.login');

    }

    public function dologin(Request $request)
    {


        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        if(Auth::attempt($userInfo)){
            return redirect()->route('backend.dashboard')->with('message','Login successful.');
        }
        return redirect()->back()->withErrors('Invalid user credentials');

    }


    public function logout()
    {
        Auth::logout();
        // dd(auth()->user());
        return redirect()->route('admin.login')->with('message','Logging out.');
    }
}
