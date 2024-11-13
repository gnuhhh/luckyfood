<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest as RequestsAuthRequest;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(){

    }
    public function signin(){
        return view ('signin');
    }
    public function admin(){
        return view('admin');
    }
    public function login(AuthRequest $request){
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin')->with('error', 'Email hoặc mật khẩu không chính xác');
    } 
}
