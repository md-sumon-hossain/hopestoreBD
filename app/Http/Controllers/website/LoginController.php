<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('website.layouts.login');
    }

    public function loginpost(Request $request){
        $userpost=[
                'password'=>$request->password,
                'email'=>$request->email,

        ];
            // dd($userpost);
            // dd(auth()->attempt($userpost));

        if(auth()->attempt($userpost)){
            return redirect()->route('website.home');
        }
        else
        return redirect()->route('user.login');
    }











    public function registration(){
        return view('website.layouts.registration');
    }


    public function registrationpost(Request $request){
        
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'contact'=>$request->contact,
        ]);
        return redirect()->route('user.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('website.home');
    }

}
