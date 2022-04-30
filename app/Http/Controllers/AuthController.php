<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Models\User;

class AuthController extends Controller
{
    public function dashboard(){
        if(Auth::check() === True){
            return view('teste');
        }
        return redirect()->route('admin.login');
    }

    public function loginredirect(){
        return view('admin.login');
    }
    public function login(Request $request){
        $credentials = [
            'username' => $request->username,
            'name' => $request->name,
            'password' => $request->password
        ];
        Auth::attempt($credentials);
    }
    
}

