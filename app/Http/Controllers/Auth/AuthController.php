<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function regForm(){
        return view('auth.register');
    }
    public function regFormSubmit(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'username'=>'required|unique:users,username',
            'password'=>'required'
        ]);
       User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
       ]);
       return back()->with('success','registration successfull');
    }
    public function loginForm(){
        return view('auth.login');
    }
    public function loginFormSubmit(Request $request){
        $credentials = $request->except('_token');
        // dd($credentials);
        $authentication = auth()->attempt($credentials);
        if($authentication){
            return to_route('dashboard')->with('success','login successfull');
        }else{
            return to_route('login');
        }
    }
    public function logout(){
        auth()->logout();
        return to_route('login')->with('success','logout sucessfull');
    }
}