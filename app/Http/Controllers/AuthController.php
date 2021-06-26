<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.index');
    }

    public function login(Request $request){
        if(Auth::guard('admin')->attempt($request->only('username', 'password'))){
            return redirect('/admin/kelola');
        }else{
            return redirect()->back()->with('fail', 'Username atau Password salah'); 
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('auth.index');
    }

    
}