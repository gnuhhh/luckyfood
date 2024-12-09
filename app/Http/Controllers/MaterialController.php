<?php

namespace App\Http\Controllers;

use App\Models\Material;
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
        $materials = Material::orderBy('created_at', 'desc')->paginate(10);
        return view($this->view_path.'index', compact('materials'));
    }
    
    public function create(){
        return view($this->view_path.'create');
    }
    
    public function store(Request $request){
        $materials = new Material();
        $materials->name = $request->name;
        $materials->quantity = $request->qty;
        $materials->status = $request->status;
        $materials->save();
        return redirect()->route('material');
    }

    public function delete($id){
        Material::find($id)->delete();
        return redirect()->route('material');
    }

    public function edit($id){
        $material = Material::find($id);
        return view($this->view_path.'edit', compact('material'));
    }

    public function update($id, Request $request){
        $material = Material::find($id);
        $material->name = $request->name;
        $material->quantity = $request->qty;
        $material->status = $request->status;
        $material->save();
        return redirect()->route('material')->with('success', 'Cập nhật thành công!');
    }
}
