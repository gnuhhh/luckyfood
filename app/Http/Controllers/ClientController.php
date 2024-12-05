<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest as RequestsAuthRequest;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrInterface;

class ClientController extends Controller
{
    public function __construct(){

    }
    public function signin(){
        return view('signin');
    }
    public function login(AuthRequest $request){
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        // dd($credentials);
        // dd(Auth::guard('admin')->attempt($credentials));
        if(Auth::guard('web')->attempt($credentials)){
            return redirect()->route('index');
        }
        return redirect()->route('signin')->with('error', 'Email hoặc mật khẩu không chính xác');
    } 
}
