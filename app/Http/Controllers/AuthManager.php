<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        // if(Auth::check()){
        //     return redirect(route(''))
        // }
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->role === 'admin') {
                return redirect()->intended(route('admindashboard'));
            } elseif ($user->role === 'mentee') {
                return redirect()->intended(route('menteedashboard'));
            }
        }
    
        return redirect()->intended(route('login'))->with("error", "Login details are not valid");
    }
    
    
    function registrationPost(Request $request){
     
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'role' => 'required|in:mentee,admin',
            ]);
    
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->password);
            $data['role'] = $request->role; 
            
            
            $user = User::create($data);
    
            if (!$user) {
                return redirect()->intended(route('registration'))->with("error", "Registration failed");
            }
            return redirect()->intended(route('login'))->with("success", "Registration success, Login to access");
       
    }
    

function logout(){
    Session::flush();
    Auth:: logout();
    return redirect()->intended(route('login'));
}

}