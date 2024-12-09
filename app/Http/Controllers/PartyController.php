<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        return view('client.ordering-party');
    }
}
