<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    protected $view_path='admin.material.';
    protected $route_path='material';
    protected $upload_path='img/material';

    public function __construct()
    {
        
    }
    public function index(){
        return view($this->view_path.'index');
    }
}
